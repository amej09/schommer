<?php

declare(strict_types=1);

namespace Produktsvendor\Produkts\Controller;


/**
 * This file is part of the "Alle produkts anzeigen" Extension for TYPO3 CMS.
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
     * @var \Produktsvendor\Produkts\Domain\Repository\ProduktRepository
     */
    protected $produktRepository = null;

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $produkts = $this->produktRepository->findAll();
        $this->view->assign('produkts', $produkts);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produkt
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Produktsvendor\Produkts\Domain\Model\Produkt $produkt): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('produkt', $produkt);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $newProdukt
     */
    public function createAction(\Produktsvendor\Produkts\Domain\Model\Produkt $newProdukt)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->add($newProdukt);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produkt
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("produkt")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Produktsvendor\Produkts\Domain\Model\Produkt $produkt): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('produkt', $produkt);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produkt
     */
    public function updateAction(\Produktsvendor\Produkts\Domain\Model\Produkt $produkt)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->update($produkt);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Produkt $produkt
     */
    public function deleteAction(\Produktsvendor\Produkts\Domain\Model\Produkt $produkt)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->produktRepository->remove($produkt);
        $this->redirect('list');
    }

    /**
     * @param \Produktsvendor\Produkts\Domain\Repository\ProduktRepository $produktRepository
     */
    public function injectProduktRepository(\Produktsvendor\Produkts\Domain\Repository\ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
    }
}