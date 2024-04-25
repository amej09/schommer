<?php

class Produkt_action_show_409321d4ea10a5783a0f79c10a993c326d3003e8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return '
                <h1 class="product-donne">Nur noch 7 Stück Auf Lager</h1>
              ';
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array16);
$array15['1'] = ' == 7';

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
    
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">weniger als 7 Stück Auf Lager</h1>
              ';
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array21);
$array20['1'] = ' < 7 && ';
$array22 = array (
);$array20['2'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array22);
$array20['3'] = ' != 0';

$expression23 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 0));};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output12 .= '
            
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">Auf Lager</h1>
              ';
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array27);
$array26['1'] = ' > 7';

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output12 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne-red">AKtuell nicht auf Lager !</h1>
              ';
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array32);
$array31['1'] = ' == 0';

$expression33 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output12 .= '
        
          
            ';
return $output12;
};
$arguments10 = array();

$output0 .= NULL;

$output0 .= '
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['action'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['controller'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = 0;
$arguments38['noCache'] = NULL;
$arguments38['language'] = NULL;
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['linkAccessRestrictedPages'] = false;
$arguments38['additionalParams'] = array (
);
$arguments38['absolute'] = false;
$arguments38['addQueryString'] = false;
$arguments38['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['action'] = 'show';
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array41);
$arguments38['arguments'] = $array40;

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output37 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array42 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array42)]);

$output37 .= '</h1>
                     <h2 class="donne-green product-price">';
$array43 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array43)]);

$output37 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array44 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array44)]);

$output37 .= '" alt="';
$array45 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array45)]);

$output37 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output37;
};
$arguments34 = array();
$arguments34['each'] = NULL;
$arguments34['as'] = NULL;
$arguments34['key'] = NULL;
$arguments34['reverse'] = false;
$arguments34['iteration'] = NULL;
$array36 = array (
);$arguments34['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array36);
$arguments34['as'] = 'similarProduct';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

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
$output46 = '';

$output46 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Default';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output46 .= '

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
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['aria'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['name'] = NULL;
$arguments52['rel'] = NULL;
$arguments52['rev'] = NULL;
$arguments52['target'] = NULL;
$arguments52['action'] = NULL;
$arguments52['controller'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['pluginName'] = NULL;
$arguments52['pageUid'] = NULL;
$arguments52['pageType'] = NULL;
$arguments52['noCache'] = NULL;
$arguments52['language'] = NULL;
$arguments52['section'] = NULL;
$arguments52['format'] = NULL;
$arguments52['linkAccessRestrictedPages'] = NULL;
$arguments52['additionalParams'] = NULL;
$arguments52['absolute'] = NULL;
$arguments52['addQueryString'] = NULL;
$arguments52['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['action'] = 'list';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array54 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array54)]);

$output51 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array55 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array55)]);

$output51 .= '" alt="';
$array56 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array56)]);

$output51 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array57 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array57)]);

$output51 .= '  et kategory ';
$array58 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategoryUid', $array58)]);

$output51 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array59 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array59)]);

$output51 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array60 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array60)]);

$output51 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return '
                <h1 class="product-donne">Nur noch 7 Stück Auf Lager</h1>
              ';
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array67);
$array66['1'] = ' == 7';

$expression68 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
    
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">weniger als 7 Stück Auf Lager</h1>
              ';
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array72);
$array71['1'] = ' < 7 && ';
$array73 = array (
);$array71['2'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array73);
$array71['3'] = ' != 0';

$expression74 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 0));};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output63 .= '
            
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">Auf Lager</h1>
              ';
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array78);
$array77['1'] = ' > 7';

$expression79 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output63 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne-red">AKtuell nicht auf Lager !</h1>
              ';
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array83);
$array82['1'] = ' == 0';

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output63 .= '
        
          
            ';
return $output63;
};
$arguments61 = array();

$output51 .= NULL;

$output51 .= '
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['action'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['controller'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['pluginName'] = NULL;
$arguments89['pageUid'] = NULL;
$arguments89['pageType'] = 0;
$arguments89['noCache'] = NULL;
$arguments89['language'] = NULL;
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['linkAccessRestrictedPages'] = false;
$arguments89['additionalParams'] = array (
);
$arguments89['absolute'] = false;
$arguments89['addQueryString'] = false;
$arguments89['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments89['addQueryStringMethod'] = NULL;
$arguments89['action'] = 'show';
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array92);
$arguments89['arguments'] = $array91;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array93 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array93)]);

$output88 .= '</h1>
                     <h2 class="donne-green product-price">';
$array94 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array94)]);

$output88 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array95 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array95)]);

$output88 .= '" alt="';
$array96 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array96)]);

$output88 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output88;
};
$arguments85 = array();
$arguments85['each'] = NULL;
$arguments85['as'] = NULL;
$arguments85['key'] = NULL;
$arguments85['reverse'] = false;
$arguments85['iteration'] = NULL;
$array87 = array (
);$arguments85['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array87);
$arguments85['as'] = 'similarProduct';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output51 .= '
     </div>
  </div>

';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'content';

$output46 .= NULL;

$output46 .= '

';

return $output46;
}


}
#