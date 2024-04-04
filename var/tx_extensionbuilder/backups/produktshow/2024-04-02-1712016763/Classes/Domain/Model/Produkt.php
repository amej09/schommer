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
 * Produkt
 */
class Produkt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * titel
     *
     * @var string
     */
    protected $titel = null;

    /**
     * preis
     *
     * @var float
     */
    protected $preis = null;

    /**
     * lager
     *
     * @var int
     */
    protected $lager = null;

    /**
     * lieferzeit
     *
     * @var string
     */
    protected $lieferzeit = null;

    /**
     * dateiname
     *
     * @var string
     */
    protected $dateiname = null;

    /**
     * Returns the titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets the titel
     *
     * @param string $titel
     * @return void
     */
    public function setTitel(string $titel)
    {
        $this->titel = $titel;
    }

    /**
     * Returns the preis
     *
     * @return float
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     *
     * @param float $preis
     * @return void
     */
    public function setPreis(float $preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the lager
     *
     * @return int
     */
    public function getLager()
    {
        return $this->lager;
    }

    /**
     * Sets the lager
     *
     * @param int $lager
     * @return void
     */
    public function setLager(int $lager)
    {
        $this->lager = $lager;
    }

    /**
     * Returns the lieferzeit
     *
     * @return string
     */
    public function getLieferzeit()
    {
        return $this->lieferzeit;
    }

    /**
     * Sets the lieferzeit
     *
     * @param string $lieferzeit
     * @return void
     */
    public function setLieferzeit(string $lieferzeit)
    {
        $this->lieferzeit = $lieferzeit;
    }

    /**
     * Returns the dateiname
     *
     * @return string
     */
    public function getDateiname()
    {
        return $this->dateiname;
    }

    /**
     * Sets the dateiname
     *
     * @param string $dateiname
     * @return void
     */
    public function setDateiname(string $dateiname)
    {
        $this->dateiname = $dateiname;
    }
}
