<?php
namespace All\Showproducts\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use All\Showproducts\Domain\Repository\ProduktRepository;
use Psr\Http\Message\ResponseInterface;

class ProduktController extends ActionController
{
    /**
     * @var produktRepository
     */
    protected $produktRepository;

    /**
     * Injecte le repository des produits
     *
     * @param ProduktRepository $produktRepository
     */
    public function injectProductRepository(ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
    }

    /**
     * Action pour afficher la liste des produits
     */
    public function listAction(): ResponseInterface
    {
        $products = $this->produktRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }
     
}
