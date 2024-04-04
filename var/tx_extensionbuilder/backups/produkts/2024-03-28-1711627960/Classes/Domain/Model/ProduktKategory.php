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
 * ProduktKategory
 */
class ProduktKategory extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * produktID
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt>
     */
    protected $produktID = null;

    /**
     * kategoryID
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory>
     */
    protected $kategoryID = null;

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
        $this->produktID = $this->produktID ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->kategoryID = $this->kategoryID ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Produkt
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produktID
     * @return void
     */
    public function addProduktID(\Produktsvendor\Produkts\Domain\Model\Produkt $produktID)
    {
        $this->produktID->attach($produktID);
    }

    /**
     * Removes a Produkt
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produktIDToRemove The Produkt to be removed
     * @return void
     */
    public function removeProduktID(\Produktsvendor\Produkts\Domain\Model\Produkt $produktIDToRemove)
    {
        $this->produktID->detach($produktIDToRemove);
    }

    /**
     * Returns the produktID
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt>
     */
    public function getProduktID()
    {
        return $this->produktID;
    }

    /**
     * Sets the produktID
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt> $produktID
     * @return void
     */
    public function setProduktID(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $produktID)
    {
        $this->produktID = $produktID;
    }

    /**
     * Adds a Kategory
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategoryID
     * @return void
     */
    public function addKategoryID(\Produktsvendor\Produkts\Domain\Model\Kategory $kategoryID)
    {
        $this->kategoryID->attach($kategoryID);
    }

    /**
     * Removes a Kategory
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategoryIDToRemove The Kategory to be removed
     * @return void
     */
    public function removeKategoryID(\Produktsvendor\Produkts\Domain\Model\Kategory $kategoryIDToRemove)
    {
        $this->kategoryID->detach($kategoryIDToRemove);
    }

    /**
     * Returns the kategoryID
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory>
     */
    public function getKategoryID()
    {
        return $this->kategoryID;
    }

    /**
     * Sets the kategoryID
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Kategory> $kategoryID
     * @return void
     */
    public function setKategoryID(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kategoryID)
    {
        $this->kategoryID = $kategoryID;
    }
}
