<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

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
     * @param string $searchTerm
     * @param string $priceRange
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
     */
    public function findByFilter(string $searchTerm ,string $priceRange )
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
                $query->like('titel', '%' . $searchTerm . '%'),
                $query->greaterThanOrEqual('preis', $minPrice),
                $query->lessThanOrEqual('preis', $maxPrice)
            )
        );
    
        return $query->execute();
    }
    
     /**
     * @param string $titel
     * @param string $priceRange
     * @param array $categoryIds
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
     */
    public function findByCategories(string $searchTerm,array $categoryIds ,string $priceRange )
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
                $query->like('titel', '%' . $searchTerm . '%'),
                $query->in('kategory.uid', $categoryIds),
                $query->greaterThanOrEqual('preis', $minPrice),
                $query->lessThanOrEqual('preis', $maxPrice)
            )
        );
    
        return $query->execute();
    }
    
    

   

   
}
