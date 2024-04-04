<?php
namespace All\Showproducts\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Produkt extends AbstractEntity {
    /**
     * @var string
     */
    protected $titel;

    /**
     * @var float
     */
    protected $preis;

    /**
     * @var int
     */
    protected $lagerbestand;

    /**
     * @var int
     */
    protected $lieferzeit;

    /**
     * @var string
     */
    protected $dateiname;

    // Getters et Setters pour les propriétés

    /**
     * @return string
     */
    public function getTitel() {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel) {
        $this->titel = $titel;
    }

    /**
     * @return float
     */
    public function getPreis() {
        return $this->preis;
    }

    /**
     * @param float $preis
     */
    public function setPreis($preis) {
        $this->preis = $preis;
    }

    /**
     * @return int
     */
    public function getLagerbestand() {
        return $this->lagerbestand;
    }

    /**
     * @param int $lagerbestand
     */
    public function setLagerbestand($lagerbestand) {
        $this->lagerbestand = $lagerbestand;
    }

    /**
     * @return int
     */
    public function getLieferzeit() {
        return $this->lieferzeit;
    }

    /**
     * @param int $lieferzeit
     */
    public function setLieferzeit($lieferzeit) {
        $this->lieferzeit = $lieferzeit;
    }

    /**
     * @return string
     */
    public function getDateiname() {
        return $this->dateiname;
    }

    /**
     * @param string $dateiname
     */
    public function setDateiname($dateiname) {
        $this->dateiname = $dateiname;
    }
}
