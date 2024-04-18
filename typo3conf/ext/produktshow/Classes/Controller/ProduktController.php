<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;


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
        $selectedCategories =[];
        $produkts = $this->produktRepository->findAll();
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
     * Fonction pour traiter le contenu du fichier CSV
     *
     * @param string $csvContent
     * @return void
     */
    protected function processCsvContent(string $csvContent)
    {
         $lines = explode(PHP_EOL, $csvContent);
         foreach ($lines as $line) {
             $columns = str_getcsv($line, "\t"); 
             $kategory = $this->kategoryRepository->findByUid($columns[4]);
            if (!$kategory) {
                 $kategory = new \Vendor\Produktshow\Domain\Model\Kategory();
                $kategory->setNamekategory($columns[4]);
                 $this->kategoryRepository->add($kategory);
            }

            $produkt = new \Vendor\Produktshow\Domain\Model\Produkt();
            $produkt->setTitel($columns[0]);
            $produkt->setPreis(floatval(str_replace(',', '.', $columns[1]))); 
            $produkt->setLager(intval($columns[2]));
            $produkt->setLieferzeit($columns[3]);
            $produkt->setKategory($kategory);
            $produkt->setPid(26);

            $this->produktRepository->add($produkt);
        }
        $this->redirect('list');

    }


    public function importAction()
    {
         if (!empty($file['csvFile']['tmp_name'])) {
             $uploadPath =  '/schommer/fileadmin/fileadmin/user_upload/' . basename($file['csvFile']['name']);
             move_uploaded_file($file['csvFile']['tmp_name'], $uploadPath);

             $csvContent = file_get_contents($uploadPath);
             $this->processCsvContent($csvContent);

             unlink($uploadPath);
        }

        return $this->htmlResponse();
    }




  
}
