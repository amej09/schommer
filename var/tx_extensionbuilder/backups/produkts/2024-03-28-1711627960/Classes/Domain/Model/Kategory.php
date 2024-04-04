<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Domain\Model;


/**
 * This file is part of the "Alle produkts anzeigen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */


/**
 * Kategory
 */
class Kategory extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * kategoryName
     *
     * @var string
     */
    protected $kategoryName = null;

    /**
     * Returns the kategoryName
     *
     * @return string
     */
    public function getKategoryName()
    {
        return $this->kategoryName;
    }

    /**
     * Sets the kategoryName
     *
     * @param string $kategoryName
     * @return void
     */
    public function setKategoryName(string $kategoryName)
    {
        $this->kategoryName = $kategoryName;
    }
}
