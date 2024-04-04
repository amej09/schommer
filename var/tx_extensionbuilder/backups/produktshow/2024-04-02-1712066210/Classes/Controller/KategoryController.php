<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;


/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * KategoryController
 */
class KategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * kategoryRepository
     *
     * @var \Vendor\Produktshow\Domain\Repository\KategoryRepository
     */
    protected $kategoryRepository = null;

    /**
     * @param \Vendor\Produktshow\Domain\Repository\KategoryRepository $kategoryRepository
     */
    public function injectKategoryRepository(\Vendor\Produktshow\Domain\Repository\KategoryRepository $kategoryRepository)
    {
        $this->kategoryRepository = $kategoryRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $kategories = $this->kategoryRepository->findAll();
        $this->view->assign('kategories', $kategories);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Vendor\Produktshow\Domain\Model\Kategory $kategory
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Vendor\Produktshow\Domain\Model\Kategory $kategory): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('kategory', $kategory);
        return $this->htmlResponse();
    }
}
