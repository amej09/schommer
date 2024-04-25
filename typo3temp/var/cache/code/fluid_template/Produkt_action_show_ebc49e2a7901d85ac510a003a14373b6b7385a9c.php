<?php

class Produkt_action_show_ebc49e2a7901d85ac510a003a14373b6b7385a9c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array7)]);

$output0 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array8)]);

$output0 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            <h1 class="product-donne">';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.lager', $array9)]);

$output0 .= '</h1>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['class'] = 'button-kaufen';
$arguments10['value'] = 'Kaufen';
// Rendering Array
$array12 = array();
$output13 = '';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array14);

$output13 .= ' == 0';
$array12['disabled'] = $output13;
$arguments10['additionalAttributes'] = $array12;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '

        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = 0;
$arguments19['noCache'] = NULL;
$arguments19['language'] = NULL;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['linkAccessRestrictedPages'] = false;
$arguments19['additionalParams'] = array (
);
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['action'] = 'show';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array22);
$arguments19['arguments'] = $array21;

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array23 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array23)]);

$output18 .= '</h1>
                     <h2 class="donne-green product-price">';
$array24 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array24)]);

$output18 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array25 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array25)]);

$output18 .= '" alt="';
$array26 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array26)]);

$output18 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array17);
$arguments15['as'] = 'similarProduct';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

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
$output27 = '';

$output27 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'Default';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output27 .= '

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
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$arguments33['action'] = NULL;
$arguments33['controller'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['pluginName'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['pageType'] = NULL;
$arguments33['noCache'] = NULL;
$arguments33['language'] = NULL;
$arguments33['section'] = NULL;
$arguments33['format'] = NULL;
$arguments33['linkAccessRestrictedPages'] = NULL;
$arguments33['additionalParams'] = NULL;
$arguments33['absolute'] = NULL;
$arguments33['addQueryString'] = NULL;
$arguments33['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments33['addQueryStringMethod'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['action'] = 'list';

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array35 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array35)]);

$output32 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array36 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array36)]);

$output32 .= '" alt="';
$array37 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array37)]);

$output32 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array38 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array38)]);

$output32 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array39 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array39)]);

$output32 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array40 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array40)]);

$output32 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            <h1 class="product-donne">';
$array41 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.lager', $array41)]);

$output32 .= '</h1>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['aria'] = NULL;
$arguments42['name'] = NULL;
$arguments42['value'] = NULL;
$arguments42['property'] = NULL;
$arguments42['disabled'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['class'] = 'button-kaufen';
$arguments42['value'] = 'Kaufen';
// Rendering Array
$array44 = array();
$output45 = '';
$array46 = array (
);
$output45 .= $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array46);

$output45 .= ' == 0';
$array44['disabled'] = $output45;
$arguments42['additionalAttributes'] = $array44;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output32 .= '

        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['action'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = 0;
$arguments51['noCache'] = NULL;
$arguments51['language'] = NULL;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['linkAccessRestrictedPages'] = false;
$arguments51['additionalParams'] = array (
);
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['action'] = 'show';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array54);
$arguments51['arguments'] = $array53;

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array55 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array55)]);

$output50 .= '</h1>
                     <h2 class="donne-green product-price">';
$array56 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array56)]);

$output50 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array57 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array57)]);

$output50 .= '" alt="';
$array58 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array58)]);

$output50 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output50;
};
$arguments47 = array();
$arguments47['each'] = NULL;
$arguments47['as'] = NULL;
$arguments47['key'] = NULL;
$arguments47['reverse'] = false;
$arguments47['iteration'] = NULL;
$array49 = array (
);$arguments47['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array49);
$arguments47['as'] = 'similarProduct';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output32 .= '
     </div>
  </div>

';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'content';

$output27 .= NULL;

$output27 .= '

';

return $output27;
}


}
#