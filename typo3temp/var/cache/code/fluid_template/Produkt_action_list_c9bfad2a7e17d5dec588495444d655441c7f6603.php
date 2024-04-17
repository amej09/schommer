<?php

class Produkt_action_list_c9bfad2a7e17d5dec588495444d655441c7f6603 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <div class="sidebar">
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['action'] = 'list';
$arguments1['controller'] = 'Produkt';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array3)]);

$output0 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['aria'] = NULL;
$arguments32['name'] = NULL;
$arguments32['value'] = NULL;
$arguments32['property'] = NULL;
$arguments32['disabled'] = NULL;
$arguments32['errorClass'] = 'f3-form-error';
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['checked'] = NULL;
$arguments32['multiple'] = false;
$output34 = '';

$output34 .= 'myCheckbox';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array35);
$arguments32['id'] = $output34;
$arguments32['onclick'] = 'submit()';
$arguments32['name'] = 'kategory[]';
$array36 = array (
);$arguments32['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array36);
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array37['0'] = 'checked';

$expression38 = function($context) {return "checked";};
$arguments32['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                            ';
return $output31;
};
$arguments29 = array();

$output28 .= '';

$output28 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
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
$arguments42['errorClass'] = 'f3-form-error';
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['checked'] = NULL;
$arguments42['multiple'] = false;
$output44 = '';

$output44 .= 'myCheckbox';
$array45 = array (
);
$output44 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array45);
$arguments42['id'] = $output44;
$arguments42['onclick'] = 'submit()';
$arguments42['name'] = 'kategory[]';
$array46 = array (
);$arguments42['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array46);

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                            ';
return $output41;
};
$arguments39 = array();
$arguments39['if'] = NULL;

$output28 .= '';

$output28 .= '
                        ';
return $output28;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array25);
$array24['1'] = ' in ';
$array26 = array (
);$array24['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['aria'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['checked'] = NULL;
$arguments11['multiple'] = false;
$output13 = '';

$output13 .= 'myCheckbox';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array14);
$arguments11['id'] = $output13;
$arguments11['onclick'] = 'submit()';
$arguments11['name'] = 'kategory[]';
$array15 = array (
);$arguments11['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array15);
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array16['0'] = 'checked';

$expression17 = function($context) {return "checked";};
$arguments11['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                            ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['aria'] = NULL;
$arguments19['name'] = NULL;
$arguments19['value'] = NULL;
$arguments19['property'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['checked'] = NULL;
$arguments19['multiple'] = false;
$output21 = '';

$output21 .= 'myCheckbox';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array22);
$arguments19['id'] = $output21;
$arguments19['onclick'] = 'submit()';
$arguments19['name'] = 'kategory[]';
$array23 = array (
);$arguments19['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array23);

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                            ';
return $output18;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                        <label class="donne" for="myCheckbox';
$array47 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array47)]);

$output7 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array48 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array48)]);

$output7 .= '</span>
                            <span class="category-name">';
$array49 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array49)]);

$output7 .= '</span>
                        </label>
                    </div>
                ';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array6);
$arguments4['as'] = 'kategory';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                <div>';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array54)]);

$output53 .= '</div>
                ';
return $output53;
};
$arguments50 = array();
$arguments50['each'] = NULL;
$arguments50['as'] = NULL;
$arguments50['key'] = NULL;
$arguments50['reverse'] = false;
$arguments50['iteration'] = NULL;
$array52 = array (
);$arguments50['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array52);
$arguments50['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output0 .= '
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    <a  onclick="price_filter(1)" >0 $ - 50 $</a>
                    <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        <div class="product-cards">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['action'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = NULL;
$arguments59['language'] = NULL;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['linkAccessRestrictedPages'] = false;
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['action'] = 'show';
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array62);
$arguments59['arguments'] = $array61;

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array63 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array63)]);

$output58 .= '</h1>
                          <h2 class="donne-green product-price">';
$array64 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array64)]);

$output58 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array80)]);

$output79 .= '" alt="alt';
$array81 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array81)]);

$output79 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array85)]);

$output84 .= '" alt="alt';
$array86 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array86)]);

$output84 .= '">
                              </div>
                          ';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output76 .= '';

$output76 .= '
                      ';
return $output76;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array74);
$array73['1'] = ' == 0';

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array68)]);

$output67 .= '" alt="alt';
$array69 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array69)]);

$output67 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output67;
};
$arguments65['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array71)]);

$output70 .= '" alt="alt';
$array72 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array72)]);

$output70 .= '">
                              </div>
                          ';
return $output70;
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output58 .= '
                  </div>
              </a>
          ';
return $output58;
};
$arguments55 = array();
$arguments55['each'] = NULL;
$arguments55['as'] = NULL;
$arguments55['key'] = NULL;
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$array57 = array (
);$arguments55['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array57);
$arguments55['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

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
$output87 = '';

$output87 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['name'] = NULL;
$arguments88['name'] = 'Default';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output87 .= '

This template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
    Resources:
    Private:
      Templates:
        Produkt:
          List.html: keep

    Otherwise your changes will be overwritten the next time you save the extension in the extension builder

 
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
    <div class="sidebar">
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['action'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['controller'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['pluginName'] = NULL;
$arguments93['pageUid'] = NULL;
$arguments93['pageType'] = 0;
$arguments93['noCache'] = NULL;
$arguments93['language'] = NULL;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['linkAccessRestrictedPages'] = false;
$arguments93['additionalParams'] = array (
);
$arguments93['absolute'] = false;
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['addQueryStringMethod'] = NULL;
$arguments93['action'] = 'list';
$arguments93['controller'] = 'Produkt';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array95 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array95)]);

$output92 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['aria'] = NULL;
$arguments124['name'] = NULL;
$arguments124['value'] = NULL;
$arguments124['property'] = NULL;
$arguments124['disabled'] = NULL;
$arguments124['errorClass'] = 'f3-form-error';
$arguments124['class'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$arguments124['checked'] = NULL;
$arguments124['multiple'] = false;
$output126 = '';

$output126 .= 'myCheckbox';
$array127 = array (
);
$output126 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array127);
$arguments124['id'] = $output126;
$arguments124['onclick'] = 'submit()';
$arguments124['name'] = 'kategory[]';
$array128 = array (
);$arguments124['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array128);
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array129['0'] = 'checked';

$expression130 = function($context) {return "checked";};
$arguments124['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                            ';
return $output123;
};
$arguments121 = array();

$output120 .= '';

$output120 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['aria'] = NULL;
$arguments134['name'] = NULL;
$arguments134['value'] = NULL;
$arguments134['property'] = NULL;
$arguments134['disabled'] = NULL;
$arguments134['errorClass'] = 'f3-form-error';
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['checked'] = NULL;
$arguments134['multiple'] = false;
$output136 = '';

$output136 .= 'myCheckbox';
$array137 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array137);
$arguments134['id'] = $output136;
$arguments134['onclick'] = 'submit()';
$arguments134['name'] = 'kategory[]';
$array138 = array (
);$arguments134['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array138);

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                            ';
return $output133;
};
$arguments131 = array();
$arguments131['if'] = NULL;

$output120 .= '';

$output120 .= '
                        ';
return $output120;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array117);
$array116['1'] = ' in ';
$array118 = array (
);$array116['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['aria'] = NULL;
$arguments103['name'] = NULL;
$arguments103['value'] = NULL;
$arguments103['property'] = NULL;
$arguments103['disabled'] = NULL;
$arguments103['errorClass'] = 'f3-form-error';
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['checked'] = NULL;
$arguments103['multiple'] = false;
$output105 = '';

$output105 .= 'myCheckbox';
$array106 = array (
);
$output105 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array106);
$arguments103['id'] = $output105;
$arguments103['onclick'] = 'submit()';
$arguments103['name'] = 'kategory[]';
$array107 = array (
);$arguments103['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array107);
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array108['0'] = 'checked';

$expression109 = function($context) {return "checked";};
$arguments103['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                            ';
return $output102;
};
$arguments100['__elseClosures'][] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['aria'] = NULL;
$arguments111['name'] = NULL;
$arguments111['value'] = NULL;
$arguments111['property'] = NULL;
$arguments111['disabled'] = NULL;
$arguments111['errorClass'] = 'f3-form-error';
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['checked'] = NULL;
$arguments111['multiple'] = false;
$output113 = '';

$output113 .= 'myCheckbox';
$array114 = array (
);
$output113 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array114);
$arguments111['id'] = $output113;
$arguments111['onclick'] = 'submit()';
$arguments111['name'] = 'kategory[]';
$array115 = array (
);$arguments111['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array115);

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
                            ';
return $output110;
};

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                        <label class="donne" for="myCheckbox';
$array139 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array139)]);

$output99 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array140 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array140)]);

$output99 .= '</span>
                            <span class="category-name">';
$array141 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array141)]);

$output99 .= '</span>
                        </label>
                    </div>
                ';
return $output99;
};
$arguments96 = array();
$arguments96['each'] = NULL;
$arguments96['as'] = NULL;
$arguments96['key'] = NULL;
$arguments96['reverse'] = false;
$arguments96['iteration'] = NULL;
$array98 = array (
);$arguments96['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array98);
$arguments96['as'] = 'kategory';

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output92 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                <div>';
$array146 = array (
);
$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array146)]);

$output145 .= '</div>
                ';
return $output145;
};
$arguments142 = array();
$arguments142['each'] = NULL;
$arguments142['as'] = NULL;
$arguments142['key'] = NULL;
$arguments142['reverse'] = false;
$arguments142['iteration'] = NULL;
$array144 = array (
);$arguments142['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array144);
$arguments142['as'] = 'data';

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output92 .= '
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    <a  onclick="price_filter(1)" >0 $ - 50 $</a>
                    <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        <div class="product-cards">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['action'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['controller'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['pluginName'] = NULL;
$arguments151['pageUid'] = NULL;
$arguments151['pageType'] = 0;
$arguments151['noCache'] = NULL;
$arguments151['language'] = NULL;
$arguments151['section'] = '';
$arguments151['format'] = '';
$arguments151['linkAccessRestrictedPages'] = false;
$arguments151['additionalParams'] = array (
);
$arguments151['absolute'] = false;
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['addQueryStringMethod'] = NULL;
$arguments151['action'] = 'show';
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array154);
$arguments151['arguments'] = $array153;

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array155 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array155)]);

$output150 .= '</h1>
                          <h2 class="donne-green product-price">';
$array156 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array156)]);

$output150 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array172 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array172)]);

$output171 .= '" alt="alt';
$array173 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array173)]);

$output171 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output171;
};
$arguments169 = array();

$output168 .= '';

$output168 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array177 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array177)]);

$output176 .= '" alt="alt';
$array178 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array178)]);

$output176 .= '">
                              </div>
                          ';
return $output176;
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output168 .= '';

$output168 .= '
                      ';
return $output168;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array166);
$array165['1'] = ' == 0';

$expression167 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array160)]);

$output159 .= '" alt="alt';
$array161 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array161)]);

$output159 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output159;
};
$arguments157['__elseClosures'][] = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array163 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array163)]);

$output162 .= '" alt="alt';
$array164 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array164)]);

$output162 .= '">
                              </div>
                          ';
return $output162;
};

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output150 .= '
                  </div>
              </a>
          ';
return $output150;
};
$arguments147 = array();
$arguments147['each'] = NULL;
$arguments147['as'] = NULL;
$arguments147['key'] = NULL;
$arguments147['reverse'] = false;
$arguments147['iteration'] = NULL;
$array149 = array (
);$arguments147['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array149);
$arguments147['as'] = 'produkt';

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output92 .= '
          
      </div>
    </div>  

';
return $output92;
};
$arguments90 = array();
$arguments90['name'] = NULL;
$arguments90['name'] = 'content';

$output87 .= NULL;

$output87 .= '

';

return $output87;
}


}
#