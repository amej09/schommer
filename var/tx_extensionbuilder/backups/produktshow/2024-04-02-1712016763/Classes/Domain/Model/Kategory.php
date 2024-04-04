<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Domain\Model;


/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
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
     * namekategory
     *
     * @var string
     */
    protected $namekategory = '';

    /**
     * kategory
     *
     * @var \Vendor\Produktshow\Domain\Model\Produkt
     */
    protected $kategory = null;

    /**
     * Returns the namekategory
     *
     * @return string
     */
    public function getNamekategory()
    {
        return $this->namekategory;
    }

    /**
     * Sets the namekategory
     *
     * @param string $namekategory
     * @return void
     */
    public function setNamekategory(string $namekategory)
    {
        $this->namekategory = $namekategory;
    }

    /**
     * Returns the kategory
     *
     * @return \Vendor\Produktshow\Domain\Model\Produkt
     */
    public function getKategory()
    {
        return $this->kategory;
    }

    /**
     * Sets the kategory
     *
     * @param \Vendor\Produktshow\Domain\Model\Produkt $kategory
     * @return void
     */
    public function setKategory(\Vendor\Produktshow\Domain\Model\Produkt $kategory)
    {
        $this->kategory = $kategory;
    }
}
