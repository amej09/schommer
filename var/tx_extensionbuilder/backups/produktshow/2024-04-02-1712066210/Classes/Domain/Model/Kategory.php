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
    }
}
