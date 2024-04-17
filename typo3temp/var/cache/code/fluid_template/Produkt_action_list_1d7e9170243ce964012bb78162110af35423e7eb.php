<?php

class Produkt_action_list_1d7e9170243ce964012bb78162110af35423e7eb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'FilterForm';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '-->
       <a href="import.html">Aller à la page d\'import</a>

       <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['controller'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = NULL;
$arguments3['language'] = NULL;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$arguments3['action'] = 'list';
$arguments3['controller'] = 'Produkt';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array5)]);

$output0 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['aria'] = NULL;
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['property'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['checked'] = NULL;
$arguments34['multiple'] = false;
$output36 = '';

$output36 .= 'myCheckbox';
$array37 = array (
);
$output36 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array37);
$arguments34['id'] = $output36;
$arguments34['onclick'] = 'submit()';
$arguments34['name'] = 'kategory[]';
$array38 = array (
);$arguments34['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array38);
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 'checked';

$expression40 = function($context) {return "checked";};
$arguments34['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                            ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['aria'] = NULL;
$arguments44['name'] = NULL;
$arguments44['value'] = NULL;
$arguments44['property'] = NULL;
$arguments44['disabled'] = NULL;
$arguments44['errorClass'] = 'f3-form-error';
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['checked'] = NULL;
$arguments44['multiple'] = false;
$output46 = '';

$output46 .= 'myCheckbox';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array47);
$arguments44['id'] = $output46;
$arguments44['onclick'] = 'submit()';
$arguments44['name'] = 'kategory[]';
$array48 = array (
);$arguments44['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array48);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                            ';
return $output43;
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output30 .= '';

$output30 .= '
                        ';
return $output30;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array27);
$array26['1'] = ' in ';
$array28 = array (
);$array26['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['aria'] = NULL;
$arguments13['name'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['checked'] = NULL;
$arguments13['multiple'] = false;
$output15 = '';

$output15 .= 'myCheckbox';
$array16 = array (
);
$output15 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array16);
$arguments13['id'] = $output15;
$arguments13['onclick'] = 'submit()';
$arguments13['name'] = 'kategory[]';
$array17 = array (
);$arguments13['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array17);
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array18['0'] = 'checked';

$expression19 = function($context) {return "checked";};
$arguments13['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                            ';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['aria'] = NULL;
$arguments21['name'] = NULL;
$arguments21['value'] = NULL;
$arguments21['property'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['errorClass'] = 'f3-form-error';
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['checked'] = NULL;
$arguments21['multiple'] = false;
$output23 = '';

$output23 .= 'myCheckbox';
$array24 = array (
);
$output23 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array24);
$arguments21['id'] = $output23;
$arguments21['onclick'] = 'submit()';
$arguments21['name'] = 'kategory[]';
$array25 = array (
);$arguments21['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array25);

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
                            ';
return $output20;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                        <label class="donne" for="myCheckbox';
$array49 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array49)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array50 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array50)]);

$output9 .= '</span>
                            <span class="category-name">';
$array51 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array51)]);

$output9 .= '</span>
                        </label>
                    </div>
                ';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array8);
$arguments6['as'] = 'kategory';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                <div>';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array56)]);

$output55 .= '</div>
                ';
return $output55;
};
$arguments52 = array();
$arguments52['each'] = NULL;
$arguments52['as'] = NULL;
$arguments52['key'] = NULL;
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$array54 = array (
);$arguments52['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array54);
$arguments52['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

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
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['action'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['controller'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['pluginName'] = NULL;
$arguments61['pageUid'] = NULL;
$arguments61['pageType'] = 0;
$arguments61['noCache'] = NULL;
$arguments61['language'] = NULL;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['linkAccessRestrictedPages'] = false;
$arguments61['additionalParams'] = array (
);
$arguments61['absolute'] = false;
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['addQueryStringMethod'] = NULL;
$arguments61['action'] = 'show';
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array64);
$arguments61['arguments'] = $array63;

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array65 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array65)]);

$output60 .= '</h1>
                          <h2 class="donne-green product-price">';
$array66 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array66)]);

$output60 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array82)]);

$output81 .= '" alt="alt';
$array83 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array83)]);

$output81 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output81;
};
$arguments79 = array();

$output78 .= '';

$output78 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array87)]);

$output86 .= '" alt="alt';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array88)]);

$output86 .= '">
                              </div>
                          ';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output78 .= '';

$output78 .= '
                      ';
return $output78;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array76);
$array75['1'] = ' == 0';

$expression77 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array70)]);

$output69 .= '" alt="alt';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array71)]);

$output69 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output69;
};
$arguments67['__elseClosures'][] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array73)]);

$output72 .= '" alt="alt';
$array74 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array74)]);

$output72 .= '">
                              </div>
                          ';
return $output72;
};

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output60 .= '
                  </div>
              </a>
          ';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array59);
$arguments57['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

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
$output89 = '';

$output89 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['name'] = NULL;
$arguments90['name'] = 'Default';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output89 .= '

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
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
 
    <div class="sidebar">
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['partial'] = 'FilterForm';

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '-->
       <a href="import.html">Aller à la page d\'import</a>

       <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['action'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['controller'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['pluginName'] = NULL;
$arguments97['pageUid'] = NULL;
$arguments97['pageType'] = 0;
$arguments97['noCache'] = NULL;
$arguments97['language'] = NULL;
$arguments97['section'] = '';
$arguments97['format'] = '';
$arguments97['linkAccessRestrictedPages'] = false;
$arguments97['additionalParams'] = array (
);
$arguments97['absolute'] = false;
$arguments97['addQueryString'] = false;
$arguments97['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments97['addQueryStringMethod'] = NULL;
$arguments97['action'] = 'list';
$arguments97['controller'] = 'Produkt';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output94 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array99 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array99)]);

$output94 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['aria'] = NULL;
$arguments128['name'] = NULL;
$arguments128['value'] = NULL;
$arguments128['property'] = NULL;
$arguments128['disabled'] = NULL;
$arguments128['errorClass'] = 'f3-form-error';
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['checked'] = NULL;
$arguments128['multiple'] = false;
$output130 = '';

$output130 .= 'myCheckbox';
$array131 = array (
);
$output130 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array131);
$arguments128['id'] = $output130;
$arguments128['onclick'] = 'submit()';
$arguments128['name'] = 'kategory[]';
$array132 = array (
);$arguments128['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array132);
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array133['0'] = 'checked';

$expression134 = function($context) {return "checked";};
$arguments128['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
                            ';
return $output127;
};
$arguments125 = array();

$output124 .= '';

$output124 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['aria'] = NULL;
$arguments138['name'] = NULL;
$arguments138['value'] = NULL;
$arguments138['property'] = NULL;
$arguments138['disabled'] = NULL;
$arguments138['errorClass'] = 'f3-form-error';
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['checked'] = NULL;
$arguments138['multiple'] = false;
$output140 = '';

$output140 .= 'myCheckbox';
$array141 = array (
);
$output140 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array141);
$arguments138['id'] = $output140;
$arguments138['onclick'] = 'submit()';
$arguments138['name'] = 'kategory[]';
$array142 = array (
);$arguments138['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array142);

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                            ';
return $output137;
};
$arguments135 = array();
$arguments135['if'] = NULL;

$output124 .= '';

$output124 .= '
                        ';
return $output124;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array121);
$array120['1'] = ' in ';
$array122 = array (
);$array120['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['aria'] = NULL;
$arguments107['name'] = NULL;
$arguments107['value'] = NULL;
$arguments107['property'] = NULL;
$arguments107['disabled'] = NULL;
$arguments107['errorClass'] = 'f3-form-error';
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['checked'] = NULL;
$arguments107['multiple'] = false;
$output109 = '';

$output109 .= 'myCheckbox';
$array110 = array (
);
$output109 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array110);
$arguments107['id'] = $output109;
$arguments107['onclick'] = 'submit()';
$arguments107['name'] = 'kategory[]';
$array111 = array (
);$arguments107['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array111);
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array112['0'] = 'checked';

$expression113 = function($context) {return "checked";};
$arguments107['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                            ';
return $output106;
};
$arguments104['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['aria'] = NULL;
$arguments115['name'] = NULL;
$arguments115['value'] = NULL;
$arguments115['property'] = NULL;
$arguments115['disabled'] = NULL;
$arguments115['errorClass'] = 'f3-form-error';
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['checked'] = NULL;
$arguments115['multiple'] = false;
$output117 = '';

$output117 .= 'myCheckbox';
$array118 = array (
);
$output117 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array118);
$arguments115['id'] = $output117;
$arguments115['onclick'] = 'submit()';
$arguments115['name'] = 'kategory[]';
$array119 = array (
);$arguments115['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array119);

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
                            ';
return $output114;
};

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
                        <label class="donne" for="myCheckbox';
$array143 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array143)]);

$output103 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array144 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array144)]);

$output103 .= '</span>
                            <span class="category-name">';
$array145 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array145)]);

$output103 .= '</span>
                        </label>
                    </div>
                ';
return $output103;
};
$arguments100 = array();
$arguments100['each'] = NULL;
$arguments100['as'] = NULL;
$arguments100['key'] = NULL;
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$array102 = array (
);$arguments100['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array102);
$arguments100['as'] = 'kategory';

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output94 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                <div>';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array150)]);

$output149 .= '</div>
                ';
return $output149;
};
$arguments146 = array();
$arguments146['each'] = NULL;
$arguments146['as'] = NULL;
$arguments146['key'] = NULL;
$arguments146['reverse'] = false;
$arguments146['iteration'] = NULL;
$array148 = array (
);$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array148);
$arguments146['as'] = 'data';

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output94 .= '
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
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['action'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['controller'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['pluginName'] = NULL;
$arguments155['pageUid'] = NULL;
$arguments155['pageType'] = 0;
$arguments155['noCache'] = NULL;
$arguments155['language'] = NULL;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['linkAccessRestrictedPages'] = false;
$arguments155['additionalParams'] = array (
);
$arguments155['absolute'] = false;
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['addQueryStringMethod'] = NULL;
$arguments155['action'] = 'show';
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array158);
$arguments155['arguments'] = $array157;

$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output154 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array159 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array159)]);

$output154 .= '</h1>
                          <h2 class="donne-green product-price">';
$array160 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array160)]);

$output154 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array176 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array176)]);

$output175 .= '" alt="alt';
$array177 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array177)]);

$output175 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output175;
};
$arguments173 = array();

$output172 .= '';

$output172 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array181 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array181)]);

$output180 .= '" alt="alt';
$array182 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array182)]);

$output180 .= '">
                              </div>
                          ';
return $output180;
};
$arguments178 = array();
$arguments178['if'] = NULL;

$output172 .= '';

$output172 .= '
                      ';
return $output172;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array170);
$array169['1'] = ' == 0';

$expression171 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array164 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array164)]);

$output163 .= '" alt="alt';
$array165 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array165)]);

$output163 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output163;
};
$arguments161['__elseClosures'][] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array167 = array (
);
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array167)]);

$output166 .= '" alt="alt';
$array168 = array (
);
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array168)]);

$output166 .= '">
                              </div>
                          ';
return $output166;
};

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output154 .= '
                  </div>
              </a>
          ';
return $output154;
};
$arguments151 = array();
$arguments151['each'] = NULL;
$arguments151['as'] = NULL;
$arguments151['key'] = NULL;
$arguments151['reverse'] = false;
$arguments151['iteration'] = NULL;
$array153 = array (
);$arguments151['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array153);
$arguments151['as'] = 'produkt';

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output94 .= '
          
      </div>
    </div>  

';
return $output94;
};
$arguments92 = array();
$arguments92['name'] = NULL;
$arguments92['name'] = 'content';

$output89 .= NULL;

$output89 .= '

';

return $output89;
}


}
#