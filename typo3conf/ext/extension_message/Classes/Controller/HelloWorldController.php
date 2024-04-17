<?php
declare (strict_types=1);

namespace Vendor\ExtensionMessage\Controller;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class HelloWorldController extends ActionController
{
    /**
     * Show Hello World
     * @return ResponseInterface
     */
    public function showAction(): ResponseInterface
    {
        $text = 'Hello  controller';
        $object= 'Hello World controller 2';
        $this->view->assign('text', $text);
        $this->view->assign('text2', $object);
        return $this->htmlResponse();
    }
  
}
