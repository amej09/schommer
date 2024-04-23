<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use Vendor\Produktshow\Domain\Model\Kategory;
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
    public function listAction()
    {
        //$selectedCategories =[];
        $produkts = $this->produktRepository->findAll();
        $searchTerm = $this->request->getParsedBody()['searchTerm'] ?? null;
        $selected = $this->request->getParsedBody()['kategory'] ?? [];
        
        // New associative array
        $selectedCategories = [];

        // Loop through the original array and assign key-value pairs to the new array
        foreach ($selected as $index => $value) {
            // Use the value as both the key and the value for the associative array
            $selectedCategories[$value] = $value;
        }


        $priceRange = $this->request->getParsedBody()['priceRange'] ?? null;
        $priceRange = $priceRange ?? '0';
        $searchTerm = $searchTerm ?? '';
        if (!empty($selectedCategories)) {
            $produkts = $this->produktRepository->findByCategories($searchTerm, $selectedCategories, $priceRange);
        } else {
            $produkts = $this->produktRepository->findByFilter($searchTerm, $priceRange);
        }
       
        $this->view->assign('selectedCategories', $selectedCategories);
        $this->view->assign('searchTerm', $searchTerm);
        $this->view->assign('produkts', $produkts);
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
