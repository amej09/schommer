<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\ArrayPaginator;
use TYPO3\CMS\Core\Pagination\PaginatorInterface;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use  TYPO3\CMS\Extbase\Persistence;
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
        $currentPageNumber = $this->request->getQueryParams()['page'] ?? 1;
        $itemsPerPage = 6;
    
        $searchTerm = $this->request->getParsedBody()['searchTerm'] ?? null;
        $selectedCategories = $this->request->getParsedBody()['kategory'] ?? [];
        
        $priceRange = $this->request->getParsedBody()['priceRange'] ?? null;
        $priceRange = $priceRange ?? '0';
        $searchTerm = $searchTerm ?? '';
    
        if (!empty($selectedCategories)) {
            $produkts = $this->produktRepository->findByCategories($searchTerm, $selectedCategories, $priceRange);
        } else {
            $produkts = $this->produktRepository->findByFilter($searchTerm, $priceRange);
        }   
    
        $paginator = new ArrayPaginator($produkts->toArray(), $currentPageNumber, $itemsPerPage);
        $paginatedProducts = $paginator->getPaginatedItems();

        $pagination = new SimplePagination($paginator);
        $allPageNumbers = $pagination->getAllPageNumbers();
        $previousPageNumber = $pagination->getPreviousPageNumber();
        $nextPageNumber = $pagination->getNextPageNumber();
    
        $this->view->assign('produkts', $paginatedProducts);
        $this->view->assign('allPageNumbers', $allPageNumbers);
        $this->view->assign('previousPageNumber', $previousPageNumber);
        $this->view->assign('nextPageNumber', $nextPageNumber);
    
        $this->view->assign('selectedCategories', $selectedCategories);
        $this->view->assign('searchTerm', $searchTerm);
        
        $kategories = $this->kategoryRepository->findAll();
        $this->view->assign('kategories', $kategories);
        
        return $this->htmlResponse();
    }
    


    /**
     * action show
     *
     * @param \Vendor\Produktshow\Domain\Model\Produkt $produkt
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Vendor\Produktshow\Domain\Model\Produkt $produkt): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('produkt', $produkt);
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
