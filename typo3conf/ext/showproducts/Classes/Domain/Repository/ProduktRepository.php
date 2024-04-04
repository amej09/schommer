<?php
namespace All\Showproducts\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class ProduktRepository extends Repository
{
    /**
     * Initializes the repository.
     */
    public function initializeObject()
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * Finds all products.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array The products
     */
    public function findAll()
    {
        $query = $this->createQuery();
        return $query->execute();
    }
}
