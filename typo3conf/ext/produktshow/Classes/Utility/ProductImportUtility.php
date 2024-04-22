<?php
namespace Vendor\Produktshow\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Vendor\Produktshow\Domain\Model\Kategory;
use Vendor\Produktshow\Domain\Model\Produkt;
use Vendor\Produktshow\Domain\Repository\ProduktRepository;
use Vendor\Produktshow\Domain\Repository\KategoryRepository;
use TYPO3\CMS\Core\Cache\CacheManager;


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

   /* public function clearCache()
    {
        $cacheManager = GeneralUtility::makeInstance(CacheManager::class);
        $cacheManager->flushCachesInGroup('pages');
    }*/

    public function import()
    {
        $csvFilePath = 'EXT:produktshow/Resources/Public/csv/csv.csv';
        $csvFileAbsolutePath = GeneralUtility::getFileAbsFileName($csvFilePath);

        if (file_exists($csvFileAbsolutePath)) {
            $csvFile = fopen($csvFileAbsolutePath, 'r');

            // Utilisez une variable pour identifier la première ligne
            $isFirstLine = true;

            if ($csvFile !== false) {
                while (($data = fgetcsv($csvFile, 1000, ';')) !== false) {
                    $data = array_map("utf8_encode", $data);
                    // Ignorez la première ligne
                    if ($isFirstLine) {
                        $isFirstLine = false;
                        continue;
                    }

                    // Extraction des données du CSV
                    $title = $data[0];
                    $price = floatval(str_replace(',', '.', str_replace('.', '', $data[1])));
                    $stock = intval($data[2]);
                    $deliveryTime = intval($data[3]);
                    $categoryName = $data[4];
                    $imagePath = $data[5];

                    // Recherche ou création de la catégorie
                    $category = $this->kategoryRepository->findByCategoryName($categoryName);
                    // echo "categoryName:$categoryName </br>";
                    print_r($data);
                    echo "category:$category </br>";

                    if (!$category) {
                        // La catégorie n'existe pas, créez-la
                        $category = new \Vendor\Produktshow\Domain\Model\Kategory();
                        $category->setNamekategory($categoryName);
                        echo "categorymitset:$category </br>";

                        $this->kategoryRepository->add($category);
                    }
                   // $this->clearCache();

                   // break;

                    // Recherche ou création du produit
                    $product = $this->produktRepository->findByTitle($title);
                   // echo "product:$product </br>";
                    if (!$product) {
                        // Le produit n'existe pas, créez-le
                        $product = new \Vendor\Produktshow\Domain\Model\Produkt();
                        $product->setTitel($title);
                        $product->setPreis($price);
                        $product->setLager($stock);
                        $product->setLieferzeit($deliveryTime);
                        $product->setDateiname($imagePath);
                      //  echo "productmitset:$product </br>";

                    }

                    // Ajout de la catégorie au produit
                    //$product->addKategory($category);
                   // echo "productmitsetaddKategory:$product </br>";

                    //$this->produktRepository->add($product);
                }
                fclose($csvFile);
            }
        }
    }
}

