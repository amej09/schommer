<?php

class Produkt_action_show_1c46d94b8a6912527e5be1022bc385628f19e2dd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments40 = array();

$output39 .= '';

$output39 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output39 .= '';

$output39 .= '  
              ';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array37);
$array36['1'] = ' == 0';

$expression38 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments34['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

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
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['action'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['controller'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = NULL;
$arguments48['language'] = NULL;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['action'] = 'show';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array51);
$arguments48['arguments'] = $array50;

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array52 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array52)]);

$output47 .= '</h1>
                     <h2 class="donne-green product-price">';
$array53 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array53)]);

$output47 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array54 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array54)]);

$output47 .= '" alt="';
$array55 = array (
);
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array55)]);

$output47 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output47;
};
$arguments44 = array();
$arguments44['each'] = NULL;
$arguments44['as'] = NULL;
$arguments44['key'] = NULL;
$arguments44['reverse'] = false;
$arguments44['iteration'] = NULL;
$array46 = array (
);$arguments44['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array46);
$arguments44['as'] = 'similarProduct';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

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
$output56 = '';

$output56 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'Default';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output56 .= '

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
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
  <div class="c">

    <div class="zuruck donne">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return '<img class="rotate90" src="/schommer/fileadmin/user_upload/pfeil.png" />zurück';
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['aria'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['name'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['rev'] = NULL;
$arguments62['target'] = NULL;
$arguments62['action'] = NULL;
$arguments62['controller'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['pluginName'] = NULL;
$arguments62['pageUid'] = NULL;
$arguments62['pageType'] = NULL;
$arguments62['noCache'] = NULL;
$arguments62['language'] = NULL;
$arguments62['section'] = NULL;
$arguments62['format'] = NULL;
$arguments62['linkAccessRestrictedPages'] = NULL;
$arguments62['additionalParams'] = NULL;
$arguments62['absolute'] = NULL;
$arguments62['addQueryString'] = NULL;
$arguments62['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['action'] = 'list';

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
    </div>
    <div >
        <p class="titel-top titel">';
$array64 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array64)]);

$output61 .= '</p>
    </div> 

    <div class="container-d product-detaille">
        <div class="image zoom">
            <img src="/schommer/fileadmin/user_upload/';
$array65 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array65)]);

$output61 .= '" alt="';
$array66 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array66)]);

$output61 .= '">
        </div> 
        <div class="product-info">
            <p class="titel-product titel">';
$array67 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array67)]);

$output61 .= '  et kategory ';
$array68 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategoryUid', $array68)]);

$output61 .= '</p>
            <h2 class="donne-green">Preis</h2>
            <h1 class="product-donne">';
$array69 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array69)]);

$output61 .= ' €</h1>
            <h2 class="donne-green">Versand</h2>
            <h1 class="product-donne">Lieferung bis ';
$array70 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('jourLivraison', $array70)]);

$output61 .= '</h1>
            <h2 class="donne-green">Lagerbestand</h2>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '
                <h1 class="product-donne">Nur noch 7 Stück Auf Lager</h1>
              ';
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array77);
$array76['1'] = ' == 7';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
    
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">weniger als 7 Stück Auf Lager</h1>
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
$array81['1'] = ' < 7 && ';
$array83 = array (
);$array81['2'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array83);
$array81['3'] = ' != 0';

$expression84 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 7) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 0));};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output73 .= '
            
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne">Auf Lager</h1>
              ';
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array88);
$array87['1'] = ' > 7';

$expression89 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 7);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output73 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return '
                  <h1 class="product-donne-red">AKtuell nicht auf Lager !</h1>
              ';
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array93);
$array92['1'] = ' == 0';

$expression94 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output73 .= '
        
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments101 = array();

$output100 .= '';

$output100 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};
$arguments103 = array();
$arguments103['if'] = NULL;

$output100 .= '';

$output100 .= '  
              ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array98);
$array97['1'] = ' == 0';

$expression99 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen-disabled donne" disabled>Kaufen</button>

                ';
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                  <button class="button-kaufen donne">Kaufen</button>
                ';
};

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output73 .= '   
            ';
return $output73;
};
$arguments71 = array();

$output61 .= NULL;

$output61 .= '
        </div>
    </div>
      <p class="similar-products-title titel">Ähnliche Produkte</p>
     <div class="similar-products">
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
          <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['action'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['controller'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['pluginName'] = NULL;
$arguments109['pageUid'] = NULL;
$arguments109['pageType'] = 0;
$arguments109['noCache'] = NULL;
$arguments109['language'] = NULL;
$arguments109['section'] = '';
$arguments109['format'] = '';
$arguments109['linkAccessRestrictedPages'] = false;
$arguments109['additionalParams'] = array (
);
$arguments109['absolute'] = false;
$arguments109['addQueryString'] = false;
$arguments109['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments109['addQueryStringMethod'] = NULL;
$arguments109['action'] = 'show';
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['produkt'] = $renderingContext->getVariableProvider()->getByPath('similarProduct', $array112);
$arguments109['arguments'] = $array111;

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output108 .= '">

             <div class="product-card-similar">
                 <div class="product-info-similar">
                     <h1 class="product-donne">';
$array113 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array113)]);

$output108 .= '</h1>
                     <h2 class="donne-green product-price">';
$array114 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.preis', $array114)]);

$output108 .= ' €</h2>
                 </div>
                 <div class="product-img-similar zoom">
                     <img src="/schommer/fileadmin/user_upload/';
$array115 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.dateiname', $array115)]);

$output108 .= '" alt="';
$array116 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('similarProduct.titel', $array116)]);

$output108 .= '">
                 </div>
             </div>
           </a>  
         ';
return $output108;
};
$arguments105 = array();
$arguments105['each'] = NULL;
$arguments105['as'] = NULL;
$arguments105['key'] = NULL;
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$array107 = array (
);$arguments105['each'] = $renderingContext->getVariableProvider()->getByPath('similarProducts', $array107);
$arguments105['as'] = 'similarProduct';

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output61 .= '
     </div>
  </div>

';
return $output61;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'content';

$output56 .= NULL;

$output56 .= '

';

return $output56;
}


}
#