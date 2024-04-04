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
     * produkt
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt>
     */
    protected $produkt = null;

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
        $this->produkt = $this->produkt ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Produkt
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produkt
     * @return void
     */
    public function addProdukt(\Produktsvendor\Produkts\Domain\Model\Produkt $produkt)
    {
        $this->produkt->attach($produkt);
    }

    /**
     * Removes a Produkt
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produktToRemove The Produkt to be removed
     * @return void
     */
    public function removeProdukt(\Produktsvendor\Produkts\Domain\Model\Produkt $produktToRemove)
    {
        $this->produkt->detach($produktToRemove);
    }

    /**
     * Returns the produkt
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt>
     */
    public function getProdukt()
    {
        return $this->produkt;
    }

    /**
     * Sets the produkt
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Produktsvendor\Produkts\Domain\Model\Produkt> $produkt
     * @return void
     */
    public function setProdukt(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $produkt)
    {
        $this->produkt = $produkt;
    }
}
