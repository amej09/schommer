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
 * KategoryController
 */
class KategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $newKategory
     */
    public function createAction(\Produktsvendor\Produkts\Domain\Model\Kategory $newKategory)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kategoryRepository->add($newKategory);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategory
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("kategory")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Produktsvendor\Produkts\Domain\Model\Kategory $kategory): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('kategory', $kategory);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategory
     */
    public function updateAction(\Produktsvendor\Produkts\Domain\Model\Kategory $kategory)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kategoryRepository->update($kategory);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategory
     */
    public function deleteAction(\Produktsvendor\Produkts\Domain\Model\Kategory $kategory)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->kategoryRepository->remove($kategory);
        $this->redirect('list');
    }

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
        $kategories = $this->kategoryRepository->findAll();
        $this->view->assign('kategories', $kategories);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Produktsvendor\Produkts\Domain\Model\Kategory $kategory
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Produktsvendor\Produkts\Domain\Model\Kategory $kategory): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('kategory', $kategory);
        return $this->htmlResponse();
    }
}
