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
     * lagerbestand
     *
     * @var int
     */
    protected $lagerbestand = null;

    /**
     * lieferzeit
     *
     * @var int
     */
    protected $lieferzeit = null;

    /**
     * dateiname
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $dateiname = null;

    /**
     * kategory
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory>
     */
    protected $kategory = null;

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
     * Returns the lagerbestand
     *
     * @return int
     */
    public function getLagerbestand()
    {
        return $this->lagerbestand;
    }

    /**
     * Sets the lagerbestand
     *
     * @param int $lagerbestand
     * @return void
     */
    public function setLagerbestand(int $lagerbestand)
    {
        $this->lagerbestand = $lagerbestand;
    }

    /**
     * Returns the lieferzeit
     *
     * @return int
     */
    public function getLieferzeit()
    {
        return $this->lieferzeit;
    }

    /**
     * Sets the lieferzeit
     *
     * @param int $lieferzeit
     * @return void
     */
    public function setLieferzeit(int $lieferzeit)
    {
        $this->lieferzeit = $lieferzeit;
    }

    /**
     * Returns the dateiname
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getDateiname()
    {
        return $this->dateiname;
    }

    /**
     * Sets the dateiname
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $dateiname
     * @return void
     */
    public function setDateiname(\TYPO3\CMS\Extbase\Domain\Model\FileReference $dateiname)
    {
        $this->dateiname = $dateiname;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->kategory = $this->kategory ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Kategory
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategory
     * @return void
     */
    public function addKategory(\Produktsvendor\Produkts\Domain\Model\Kategory $kategory)
    {
        $this->kategory->attach($kategory);
    }

    /**
     * Removes a Kategory
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategoryToRemove The Kategory to be removed
     * @return void
     */
    public function removeKategory(\Produktsvendor\Produkts\Domain\Model\Kategory $kategoryToRemove)
    {
        $this->kategory->detach($kategoryToRemove);
    }

    /**
     * Returns the kategory
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory>
     */
    public function getKategory()
    {
        return $this->kategory;
    }

    /**
     * Sets the kategory
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory> $kategory
     * @return void
     */
    public function setKategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kategory)
    {
        $this->kategory = $kategory;
    }
}
