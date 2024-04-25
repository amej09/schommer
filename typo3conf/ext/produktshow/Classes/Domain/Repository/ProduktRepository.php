<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use DateTime;
use DateInterval;
use DateTimeZone;
use IntlDateFormatter;

/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * The repository for Produkts
 */
class ProduktRepository extends Repository
{

    /**
     * @param string $titel
     * @param string $priceRange
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
     */
    public function findByFilter(string $titel, string $priceRange)
    {
        $minPrice = 0;
        $maxPrice = 10000000000;
        if ($priceRange === '0-50') {
            $maxPrice = 50;
        } elseif ($priceRange === '50-100') {
            $minPrice = 50;
            $maxPrice = 100;
        } elseif ($priceRange === '100-200') {
            $minPrice = 100;
            $maxPrice = 200;
        } elseif ($priceRange === '200') {
            $minPrice = 200;
        }
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->like('titel', '%' . $titel . '%'),
                $query->greaterThanOrEqual('preis', $minPrice),
                $query->lessThanOrEqual('preis', $maxPrice)
            )
        );
        return $query->execute();
    }

    /**
     * @param string $titel
     * @param array $categoryIds
     * @param string $priceRange
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
     */
    public function findByCategories(string $titel, array $categoryIds, string $priceRange)
    {
        $minPrice = 0;
        $maxPrice = 10000000000;
        if ($priceRange === '0-50') {
            $maxPrice = 50;
        } elseif ($priceRange === '50-100') {
            $minPrice = 50;
            $maxPrice = 100;
        } elseif ($priceRange === '100-200') {
            $minPrice = 100;
            $maxPrice = 200;
        } elseif ($priceRange === '200') {
            $minPrice = 200;
        }
        $query = $this->createQuery();
        $query->matching(
        $query->logicalAnd(
        $query->like('titel', '%' . $titel . '%'),
        $query->in('kategory.uid', $categoryIds),
        $query->greaterThanOrEqual('preis', $minPrice),
        $query->lessThanOrEqual('preis', $maxPrice)
        ));
        return $query->execute();
    }

    /**
     * Trouve un produit par son titre.
     *
     * @param string $title Le titre du produit à rechercher.
     * @return \Vendor\Produktshow\Domain\Model\Produkt
     */
    public function findByTitle(string $title)
    {
        
        $query = $this->createQuery();
        $query->matching(
            $query->like('titel', '%' . $title . '%')
        );

        return $query->execute()->getFirst();

    }
    /**
     * 
     */
    public function findSimilarProducts(\Vendor\Produktshow\Domain\Model\Produkt $produkt)
    {
        $limit = 5;
        $kategories = $produkt->getKategory();
        $uids = [];
        foreach($kategories as $kategory) {
            $uids[] = $kategory->getUid();
        }

        $query = $this->createQuery();
        $query->matching(
        $query->logicalAnd(
        $query->in('kategory.uid', $uids),
        ));
        $query->setLimit($limit);

        return $query->execute();
    }

   



    /**
     * 
     *
     */
    public function calculateDeliveryDay(string $lieferzeit)
    {
   
        $heute = new DateTime();

        $heute->add(new DateInterval('P' . $lieferzeit . 'D'));

        $formatter = new IntlDateFormatter('de_DE', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Berlin', IntlDateFormatter::GREGORIAN, 'EEEE d MMMM');
        return $formatter->format($heute->getTimestamp());
    }

   
    

    
}
