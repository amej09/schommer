<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Domain\Repository;


/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * The repository for Kategories
 */
class KategoryRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
     /**
     * Trouve une catégorie par son nom.
     *
     * @param string $categoryName 
     * @return \Vendor\Produktshow\Domain\Model\Kategory|null
     */
    public function findByCategoryName(string $categoryName)
    { 

        $query = $this->createQuery();
        $query->matching(
            $query->equals('namekategory', $categoryName)
        );

        return $query->execute()->getFirst();

    }
    
    
}
