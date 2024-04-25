<?php

class Produkt_action_show_f4208cb4fe5844fdc202bb259500d36b3e30d742 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= ' || ';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type.uid', $array7)]);

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
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
                <h1 class="product-donne">Nur noch 7 Stück Auf Lager</h1>
              ';
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array13);
$array12['1'] = ' == 7';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
    
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">weniger als 7 Stück Auf Lager</h1>
              ';
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array18);
$array17['1'] = ' < 7 && ';
$array19 = array (
);$array17['2'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array19);
$array17['3'] = ' != 0';

$expression20 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 0));};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
            
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">Auf Lager</h1>
              ';
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array24);
$array23['1'] = ' > 7';

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne-red">AKtuell nicht auf Lager !</h1>
              ';
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array29);
$array28['1'] = ' == 0';

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '
        
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments37 = array();

$output36 .= '';

$output36 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};
$arguments39 = array();
$arguments39['if'] = NULL;

$output36 .= '';

$output36 .= '  
              ';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array34);
$array33['1'] = ' == 0';

$expression35 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments31['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '   
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['action'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = 0;
$arguments45['noCache'] = NULL;
$arguments45['language'] = NULL;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['linkAccessRestrictedPages'] = false;
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['action'] = 'show';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array48);
$arguments45['arguments'] = $array47;

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array49 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array49)]);

$output44 .= '</h1>
                     <h2 class="donne-green product-price">';
$array50 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array50)]);

$output44 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array51 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array51)]);

$output44 .= '" alt="';
$array52 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array52)]);

$output44 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array43);
$arguments41['as'] = 'similarProduct';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

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
$output53 = '';

$output53 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'Default';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output53 .= '

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
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['aria'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$arguments59['action'] = NULL;
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = NULL;
$arguments59['noCache'] = NULL;
$arguments59['language'] = NULL;
$arguments59['section'] = NULL;
$arguments59['format'] = NULL;
$arguments59['linkAccessRestrictedPages'] = NULL;
$arguments59['additionalParams'] = NULL;
$arguments59['absolute'] = NULL;
$arguments59['addQueryString'] = NULL;
$arguments59['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['action'] = 'list';

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array61 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array61)]);

$output58 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array62 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array62)]);

$output58 .= '" alt="';
$array63 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array63)]);

$output58 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array64 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array64)]);

$output58 .= ' || ';
$array65 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type.uid', $array65)]);

$output58 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array66 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array66)]);

$output58 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array67 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array67)]);

$output58 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return '
                <h1 class="product-donne">Nur noch 7 Stück Auf Lager</h1>
              ';
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array71);
$array70['1'] = ' == 7';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = $renderChildrenClosure69;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output58 .= '
    
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">weniger als 7 Stück Auf Lager</h1>
              ';
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array76);
$array75['1'] = ' < 7 && ';
$array77 = array (
);$array75['2'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array77);
$array75['3'] = ' != 0';

$expression78 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 0));};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output58 .= '
            
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">Auf Lager</h1>
              ';
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array82);
$array81['1'] = ' > 7';

$expression83 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output58 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne-red">AKtuell nicht auf Lager !</h1>
              ';
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array87);
$array86['1'] = ' == 0';

$expression88 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output58 .= '
        
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments95 = array();

$output94 .= '';

$output94 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output94 .= '';

$output94 .= '  
              ';
return $output94;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array92);
$array91['1'] = ' == 0';

$expression93 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments89['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output58 .= '   
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['action'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['controller'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['pluginName'] = NULL;
$arguments103['pageUid'] = NULL;
$arguments103['pageType'] = 0;
$arguments103['noCache'] = NULL;
$arguments103['language'] = NULL;
$arguments103['section'] = '';
$arguments103['format'] = '';
$arguments103['linkAccessRestrictedPages'] = false;
$arguments103['additionalParams'] = array (
);
$arguments103['absolute'] = false;
$arguments103['addQueryString'] = false;
$arguments103['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments103['addQueryStringMethod'] = NULL;
$arguments103['action'] = 'show';
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array106);
$arguments103['arguments'] = $array105;

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output102 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array107 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array107)]);

$output102 .= '</h1>
                     <h2 class="donne-green product-price">';
$array108 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array108)]);

$output102 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array109 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array109)]);

$output102 .= '" alt="';
$array110 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array110)]);

$output102 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output102;
};
$arguments99 = array();
$arguments99['each'] = NULL;
$arguments99['as'] = NULL;
$arguments99['key'] = NULL;
$arguments99['reverse'] = false;
$arguments99['iteration'] = NULL;
$array101 = array (
);$arguments99['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array101);
$arguments99['as'] = 'similarProduct';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output58 .= '
     </div>
  </div>

';
return $output58;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['name'] = 'content';

$output53 .= NULL;

$output53 .= '

';

return $output53;
}


}
#