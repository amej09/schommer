<?php
namespace Vendor\Produktshow\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Vendor\Produktshow\Domain\Repository\ProduktRepository;
use Vendor\Produktshow\Domain\Repository\KategoryRepository;


class ProductImportUtility
{
    /**
     * @var ProduktRepository
     */
    protected $produktRepository;

    /**
     * @var KategoryRepository
     */
    protected $kategoryRepository;

    public function __construct(
        ProduktRepository $produktRepository,
        KategoryRepository $kategoryRepository
    ) {
        $this->produktRepository = $produktRepository;
        $this->kategoryRepository = $kategoryRepository;
    }
 

    public function import()
    {
        $csvFilePath = 'EXT:produktshow/Resources/Public/csv/csv.csv';
        $csvFileAbsolutePath = GeneralUtility::getFileAbsFileName($csvFilePath);

        if (file_exists($csvFileAbsolutePath)) {
            $csvFile = fopen($csvFileAbsolutePath, 'r');

            $isFirstLine = true;

            if ($csvFile !== false) {
                while (($data = fgetcsv($csvFile, 1000, ';')) !== false) {
                    $data = array_map("utf8_encode", $data);
                    if ($isFirstLine) {
                        $isFirstLine = false;
                        continue;
                    }

                    $title = $data[0];
                    $price = floatval(str_replace(',', '.', str_replace('.', '', $data[1])));
                    $stock = intval($data[2]);
                    $deliveryTime = intval($data[3]);
                    $categoryName = $data[4];
                    $imagePath = $data[5];

                    $category = $this->kategoryRepository->findByCategoryName($categoryName);
                    /*print_r($data);
                    echo "category:$category </br>";*/

                    if (!$category) {
                        $category = new \Vendor\Produktshow\Domain\Model\Kategory();
                        $category->setNamekategory($categoryName);

                        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
                        $persistenceManager = $objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
                        
                        $this->kategoryRepository->add($category);
                        
                        $persistenceManager->persistAll();
                    }


                    $product = $this->produktRepository->findByTitle($title);
                    if (!$product) {
                        $product = new \Vendor\Produktshow\Domain\Model\Produkt();
                        $product->setTitel($title);
                        $product->setPreis($price);
                        $product->setLager($stock);
                        $product->setLieferzeit($deliveryTime);
                        $product->setDateiname($imagePath);

                    }

                    $product->addKategory($category);
                   $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class);
                   $persistenceManager = $objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
                   
                   $this->produktRepository->add($product);
                   
                   $persistenceManager->persistAll();
                }
                fclose($csvFile);
            }
        }
    }
}

