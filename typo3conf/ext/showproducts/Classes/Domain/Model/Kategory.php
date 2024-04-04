<?php
namespace All\Showproducts\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Kategorie extends AbstractEntity {
    /**
     * @var string
     */
    protected $kategorieName;

    // Getters et Setters pour les propriétés

    /**
     * @return string
     */
    public function getKategorieName() {
        return $this->kategorieName;
    }

    /**
     * @param string $kategorieName
     */
    public function setKategorieName($kategorieName) {
        $this->kategorieName = $kategorieName;
    }
}
