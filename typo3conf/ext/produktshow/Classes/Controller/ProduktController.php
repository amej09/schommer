<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;

use PhpParser\Node\Expr\Assign;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Core\Pagination\ArrayPaginator;
use TYPO3\CMS\Core\Pagination\PaginatorInterface;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use  TYPO3\CMS\Extbase\Persistence;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use Vendor\Produktshow\Domain\Model\Produkt;
use Vendor\Produktshow\Utility\ProductImportUtility;
/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * ProduktController
 */
class ProduktController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * produktRepository
     *
     * @var \Vendor\Produktshow\Domain\Repository\ProduktRepository
     */
    protected $produktRepository = null;

    /**
     * kategoryRepository
     *
     * @var \Vendor\Produktshow\Domain\Repository\KategoryRepository
     */
    protected $kategoryRepository = null;

    /**
     * @param \Vendor\Produktshow\Domain\Repository\ProduktRepository $produktRepository
     */
    public function injectProduktRepository(\Vendor\Produktshow\Domain\Repository\ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
    }

    /**
     * @param \Vendor\Produktshow\Domain\Repository\KategoryRepository $kategoryRepository
     */
    public function injectKategoryRepository(\Vendor\Produktshow\Domain\Repository\KategoryRepository $kategoryRepository)
    {
        $this->kategoryRepository = $kategoryRepository;
    }

    /**
     * Action list
     *  
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): ResponseInterface
    {

        //argements
        $currentPageNumber = $this->request->hasArgument('page')
        ? (int)$this->request->getArgument('page') : 1;

        if($this->request->hasArgument('searchTerm')){
            $searchTerm=$this->request->getArgument('searchTerm');
        }
        if($this->request->hasArgument('kategory')){
            $selectedCategories=$this->request->getArgument('kategory');
        }
        if($this->request->hasArgument('priceRange')){
            $priceRange=$this->request->getArgument('priceRange');
        }else{
            $priceRange = '0';

        }
        //parsedbody  from Form
        if(!$searchTerm){
            $searchTerm = $this->request->getParsedBody()['searchTerm'] ?? '';

        }
        if(empty($selectedCategories)){
            $selectedCategories = $this->request->getParsedBody()['kategory'] ??null;
        }
        if(!$priceRange){
            $priceRange = $this->request->getParsedBody()['priceRange'] ?? '0';

        }
        //DebuggerUtility::var_dump($this->request->getArguments());
        //DebuggerUtility::var_dump( $this->request->getParsedBody()['kategory']);
        //$produkts = $this->produktRepository->findAll();
        //echo gettype($produkts);

        if (!empty($selectedCategories)) {
            $produkts = $this->produktRepository->findByCategories($searchTerm, $selectedCategories, $priceRange);
        }else {
            $produkts = $this->produktRepository->findByFilter($searchTerm, $priceRange);
        }

        $paginator = new ArrayPaginator($produkts->toArray(), $currentPageNumber, 6);
        $produkts = $paginator->getPaginatedItems();
        
        $pagination = new SimplePagination($paginator);

        $allPageNumbers = $pagination->getAllPageNumbers();
        $previousPageNumber = $pagination->getPreviousPageNumber();
        $nextPageNumber = $pagination->getNextPageNumber();

          $this->view->assignMultiple([
            'produkts' => $produkts,
            'allPageNumbers' => $allPageNumbers,
            'previousPageNumber' => $previousPageNumber,
            'nextPageNumber' => $nextPageNumber,
            'currentPageNumber' => $currentPageNumber,
            'selectedCategories' => $selectedCategories,
            'searchTerm' => $searchTerm,
            'priceRange' => $priceRange,
            'kategories' =>  $this->kategoryRepository->findAll()
        ]);

       //return new HtmlResponse($this->view->render());
       return $this->htmlResponse();
    }

    


    /**
     * action show
     *
     * @param \Vendor\Produktshow\Domain\Model\Produkt $produkt
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(Produkt $produkt):ResponseInterface
    {
        
        $similarProducts = $this->produktRepository->findSimilarProducts($produkt);
         
        $lieferzeit = $produkt->getLieferzeit();
        $jourLivraison =  $this->produktRepository->calculateDeliveryDay($lieferzeit);

        $this->view->assignMultiple([
            'produkt' => $produkt,
            'similarProducts' => $similarProducts,
            'jourLivraison'=>$jourLivraison
        ]);
        return $this->htmlResponse();
    }

 



    /**
     * Action pour importer les produits depuis un fichier CSV
     *
     * @return ResponseInterface
     */
    public function importAction(): ResponseInterface
    {
       
        $importUtility = new ProductImportUtility($this->produktRepository, $this->kategoryRepository);
        $importUtility->import();

        $this->addFlashMessage('Les produits ont été importés avec succès.', 'Import réussi');
        return $this->htmlResponse();

    }
    
 

  
}
