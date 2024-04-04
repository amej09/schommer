<?php

declare(strict_types=1);

namespace Vendor\Produktshow\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Page\CacheHashCalculator;

/**
 * This file is part of the "Produkts show" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * ProduktController
 */
class ProduktController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * produktRepository
     *
     * @var \Vendor\Produktshow\Domain\Repository\ProduktRepository
     */
    protected $produktRepository = null;

     

    /**
     * @param \Vendor\Produktshow\Domain\Repository\ProduktRepository $produktRepository
     */
    public function injectProduktRepository(\Vendor\Produktshow\Domain\Repository\ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
    }

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
    public function listAction()
    {
        /*$produkts = $this->produktRepository->findAll();
        
        if ($titel !== null && $titel !== '') {
            $produkts = $this->produktRepository->findByTitle($titel);
        }
        
        $this->view->assign('produkts', $produkts);*/
        $produkts = $this->produktRepository->findAll();

        if ($this->request->hasArgument('titel')) {
            $querystring = $this->request->getArgument('titel');
            $produkts = $this->produktRepository->findAll($querystring);

          }

         $this->view->assign('produkts', $produkts);

        $kategories = $this->kategoryRepository->findAll();
        $this->view->assign('kategories', $kategories);
        
       

    }


    /**
     * action show
     *
     * @param \Vendor\Produktshow\Domain\Model\Produkt $produkt
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Vendor\Produktshow\Domain\Model\Produkt $produkt): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('produkt', $produkt);
        return $this->htmlResponse();
    }
}
