<?php

class Produkt_action_show_00605e37d24993c1c725cd99deefef6c7dbfc627 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$arguments1['action'] = NULL;
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['section'] = NULL;
$arguments1['format'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['action'] = 'list';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array3)]);

$output0 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array4)]);

$output0 .= '" alt="';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array5)]);

$output0 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array6)]);

$output0 .= '  et kategory ';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategoryUid', $array7)]);

$output0 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array8)]);

$output0 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array9)]);

$output0 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = NULL;
$arguments14['language'] = NULL;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['linkAccessRestrictedPages'] = false;
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['action'] = 'show';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array17);
$arguments14['arguments'] = $array16;

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array18 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array18)]);

$output13 .= '</h1>
                     <h2 class="donne-green product-price">';
$array19 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array19)]);

$output13 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array20 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array20)]);

$output13 .= '" alt="';
$array21 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array21)]);

$output13 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array12);
$arguments10['as'] = 'similarProduct';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
     </div>
  </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Default';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output22 .= '

This template is responsible for displaying a single view for a domain object

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        Produkt:
          Show.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$arguments28['action'] = NULL;
$arguments28['controller'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = NULL;
$arguments28['noCache'] = NULL;
$arguments28['language'] = NULL;
$arguments28['section'] = NULL;
$arguments28['format'] = NULL;
$arguments28['linkAccessRestrictedPages'] = NULL;
$arguments28['additionalParams'] = NULL;
$arguments28['absolute'] = NULL;
$arguments28['addQueryString'] = NULL;
$arguments28['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments28['addQueryStringMethod'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['action'] = 'list';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array30 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array30)]);

$output27 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array31 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array31)]);

$output27 .= '" alt="';
$array32 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array32)]);

$output27 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array33 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array33)]);

$output27 .= '  et kategory ';
$array34 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategoryUid', $array34)]);

$output27 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array35 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array35)]);

$output27 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array36 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array36)]);

$output27 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['action'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['controller'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = NULL;
$arguments41['language'] = NULL;
$arguments41['section'] = '';
$arguments41['format'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['additionalParams'] = array (
);
$arguments41['absolute'] = false;
$arguments41['addQueryString'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['action'] = 'show';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array44);
$arguments41['arguments'] = $array43;

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array45 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array45)]);

$output40 .= '</h1>
                     <h2 class="donne-green product-price">';
$array46 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array46)]);

$output40 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array47 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array47)]);

$output40 .= '" alt="';
$array48 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array48)]);

$output40 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$array39 = array (
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array39);
$arguments37['as'] = 'similarProduct';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output27 .= '
     </div>
  </div>

';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'content';

$output22 .= NULL;

$output22 .= '

';

return $output22;
}


}
#