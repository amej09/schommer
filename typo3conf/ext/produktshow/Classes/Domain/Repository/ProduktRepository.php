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
 * The repository for Produkts
 */
class ProduktRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $titel
     * @return QueryResultInterface|array
     */
    public function findByTitle($titel)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->like('titel', '%' . $titel . '%')
        );
        return $query->execute();
    }
    public function findAll($querystring = '') {
        $query = $this->createQuery();
        if ($querystring) {
            $query->matching(
                $query->like('titel', '%'.$querystring.'%')
            );
        }
        return $query->execute();
    }
}
