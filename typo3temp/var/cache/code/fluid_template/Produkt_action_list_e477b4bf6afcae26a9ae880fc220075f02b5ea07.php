<?php

class Produkt_action_list_e477b4bf6afcae26a9ae880fc220075f02b5ea07 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return ' import';
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
$arguments1['action'] = 'import';
$arguments1['class'] = 'donne-green';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

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
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array27);
$array26['1'] = ' == ';
$array28 = array (
);$array26['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array28);

$expression29 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
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
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['aria'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['checked'] = NULL;
$arguments52['multiple'] = false;
$output54 = '';

$output54 .= 'myCheckbox';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array55);
$arguments52['id'] = $output54;
$arguments52['name'] = 'kategory[]';
$array56 = array (
);$arguments52['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array56);
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array57['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression58 = function($context) {return "{f";};
$arguments52['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                        ';
return $output51;
};
$arguments49 = array();

$output9 .= NULL;

$output9 .= ' 
                        <label class="donne" for="myCheckbox';
$array59 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array59)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array60 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array60)]);

$output9 .= '</span>
                            <span class="category-name">';
$array61 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array61)]);

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
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                ';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array66)]);

$output65 .= '
                ';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array64);
$arguments62['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

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
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = NULL;
$arguments71['language'] = NULL;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['linkAccessRestrictedPages'] = false;
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['action'] = 'show';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array74);
$arguments71['arguments'] = $array73;

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array75 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array75)]);

$output70 .= '</h1>
                          <h2 class="donne-green product-price">';
$array76 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array76)]);

$output70 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array92)]);

$output91 .= '" alt="alt';
$array93 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array93)]);

$output91 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output91;
};
$arguments89 = array();

$output88 .= '';

$output88 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array97)]);

$output96 .= '" alt="alt';
$array98 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array98)]);

$output96 .= '">
                              </div>
                          ';
return $output96;
};
$arguments94 = array();
$arguments94['if'] = NULL;

$output88 .= '';

$output88 .= '
                      ';
return $output88;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array86);
$array85['1'] = ' == 0';

$expression87 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = function() use ($renderingContext, $self) {
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
$arguments77['__elseClosures'][] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array83)]);

$output82 .= '" alt="alt';
$array84 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array84)]);

$output82 .= '">
                              </div>
                          ';
return $output82;
};

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output70 .= '
                  </div>
              </a>
          ';
return $output70;
};
$arguments67 = array();
$arguments67['each'] = NULL;
$arguments67['as'] = NULL;
$arguments67['key'] = NULL;
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$array69 = array (
);$arguments67['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array69);
$arguments67['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments105 = array();
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['aria'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = NULL;
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = NULL;
$arguments105['noCache'] = NULL;
$arguments105['language'] = NULL;
$arguments105['section'] = NULL;
$arguments105['format'] = NULL;
$arguments105['linkAccessRestrictedPages'] = NULL;
$arguments105['additionalParams'] = NULL;
$arguments105['absolute'] = NULL;
$arguments105['addQueryString'] = NULL;
$arguments105['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['action'] = 'list';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array108);
$array109 = array (
);$array107['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array109);
$array110 = array (
);$array107['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array110);
$array111 = array (
);$array107['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array111);
$arguments105['arguments'] = $array107;

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
            ';
return $output104;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = $renderChildrenClosure100;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array129 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array129)]);
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['aria'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['name'] = NULL;
$arguments116['rel'] = NULL;
$arguments116['rev'] = NULL;
$arguments116['target'] = NULL;
$arguments116['action'] = NULL;
$arguments116['controller'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['pluginName'] = NULL;
$arguments116['pageUid'] = NULL;
$arguments116['pageType'] = NULL;
$arguments116['noCache'] = NULL;
$arguments116['language'] = NULL;
$arguments116['section'] = NULL;
$arguments116['format'] = NULL;
$arguments116['linkAccessRestrictedPages'] = NULL;
$arguments116['additionalParams'] = NULL;
$arguments116['absolute'] = NULL;
$arguments116['addQueryString'] = NULL;
$arguments116['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments116['addQueryStringMethod'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array121);
$array120['1'] = '==';
$array122 = array (
);$array120['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array122);

$expression123 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = 'active';
$arguments116['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array125);
$array126 = array (
);$array124['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array126);
$array127 = array (
);$array124['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array127);
$array128 = array (
);$array124['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array128);
$arguments116['arguments'] = $array124;

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
            ';
return $output115;
};
$arguments112 = array();
$arguments112['each'] = NULL;
$arguments112['as'] = NULL;
$arguments112['key'] = NULL;
$arguments112['reverse'] = false;
$arguments112['iteration'] = NULL;
$array114 = array (
);$arguments112['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array114);
$arguments112['as'] = 'pageNumber';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments136 = array();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['aria'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['name'] = NULL;
$arguments136['rel'] = NULL;
$arguments136['rev'] = NULL;
$arguments136['target'] = NULL;
$arguments136['action'] = NULL;
$arguments136['controller'] = NULL;
$arguments136['extensionName'] = NULL;
$arguments136['pluginName'] = NULL;
$arguments136['pageUid'] = NULL;
$arguments136['pageType'] = NULL;
$arguments136['noCache'] = NULL;
$arguments136['language'] = NULL;
$arguments136['section'] = NULL;
$arguments136['format'] = NULL;
$arguments136['linkAccessRestrictedPages'] = NULL;
$arguments136['additionalParams'] = NULL;
$arguments136['absolute'] = NULL;
$arguments136['addQueryString'] = NULL;
$arguments136['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments136['addQueryStringMethod'] = NULL;
$arguments136['arguments'] = NULL;
$arguments136['action'] = 'list';
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array139);
$array140 = array (
);$array138['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array140);
$array141 = array (
);$array138['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array141);
$array142 = array (
);$array138['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array142);
$arguments136['arguments'] = $array138;

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
            ';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

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
$output143 = '';

$output143 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['name'] = NULL;
$arguments144['name'] = 'Default';

$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output143 .= '

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
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments149 = array();
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['aria'] = NULL;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['name'] = NULL;
$arguments149['rel'] = NULL;
$arguments149['rev'] = NULL;
$arguments149['target'] = NULL;
$arguments149['action'] = NULL;
$arguments149['controller'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['pluginName'] = NULL;
$arguments149['pageUid'] = NULL;
$arguments149['pageType'] = NULL;
$arguments149['noCache'] = NULL;
$arguments149['language'] = NULL;
$arguments149['section'] = NULL;
$arguments149['format'] = NULL;
$arguments149['linkAccessRestrictedPages'] = NULL;
$arguments149['additionalParams'] = NULL;
$arguments149['absolute'] = NULL;
$arguments149['addQueryString'] = NULL;
$arguments149['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments149['addQueryStringMethod'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['action'] = 'import';
$arguments149['class'] = 'donne-green';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '

        <form   
            id="form" 
            action="';
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
$arguments151['action'] = 'list';
$arguments151['controller'] = 'Produkt';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output148 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array153 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array153)]);

$output148 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['aria'] = NULL;
$arguments182['name'] = NULL;
$arguments182['value'] = NULL;
$arguments182['property'] = NULL;
$arguments182['disabled'] = NULL;
$arguments182['errorClass'] = 'f3-form-error';
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['checked'] = NULL;
$arguments182['multiple'] = false;
$output184 = '';

$output184 .= 'myCheckbox';
$array185 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array185);
$arguments182['id'] = $output184;
$arguments182['name'] = 'kategory[]';
$array186 = array (
);$arguments182['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array186);
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array187['0'] = 'checked';

$expression188 = function($context) {return "checked";};
$arguments182['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '   
                             ';
return $output181;
};
$arguments179 = array();

$output178 .= '';

$output178 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['aria'] = NULL;
$arguments192['name'] = NULL;
$arguments192['value'] = NULL;
$arguments192['property'] = NULL;
$arguments192['disabled'] = NULL;
$arguments192['errorClass'] = 'f3-form-error';
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['checked'] = NULL;
$arguments192['multiple'] = false;
$output194 = '';

$output194 .= 'myCheckbox';
$array195 = array (
);
$output194 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array195);
$arguments192['id'] = $output194;
$arguments192['name'] = 'kategory[]';
$array196 = array (
);$arguments192['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array196);

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '                     
                           ';
return $output191;
};
$arguments189 = array();
$arguments189['if'] = NULL;

$output178 .= '';

$output178 .= '
                        ';
return $output178;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array175);
$array174['1'] = ' == ';
$array176 = array (
);$array174['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array176);

$expression177 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments158['__thenClosure'] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['aria'] = NULL;
$arguments161['name'] = NULL;
$arguments161['value'] = NULL;
$arguments161['property'] = NULL;
$arguments161['disabled'] = NULL;
$arguments161['errorClass'] = 'f3-form-error';
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['checked'] = NULL;
$arguments161['multiple'] = false;
$output163 = '';

$output163 .= 'myCheckbox';
$array164 = array (
);
$output163 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array164);
$arguments161['id'] = $output163;
$arguments161['name'] = 'kategory[]';
$array165 = array (
);$arguments161['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array165);
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array166['0'] = 'checked';

$expression167 = function($context) {return "checked";};
$arguments161['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '   
                             ';
return $output160;
};
$arguments158['__elseClosures'][] = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['aria'] = NULL;
$arguments169['name'] = NULL;
$arguments169['value'] = NULL;
$arguments169['property'] = NULL;
$arguments169['disabled'] = NULL;
$arguments169['errorClass'] = 'f3-form-error';
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['checked'] = NULL;
$arguments169['multiple'] = false;
$output171 = '';

$output171 .= 'myCheckbox';
$array172 = array (
);
$output171 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array172);
$arguments169['id'] = $output171;
$arguments169['name'] = 'kategory[]';
$array173 = array (
);$arguments169['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array173);

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '                     
                           ';
return $output168;
};

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['aria'] = NULL;
$arguments200['name'] = NULL;
$arguments200['value'] = NULL;
$arguments200['property'] = NULL;
$arguments200['disabled'] = NULL;
$arguments200['errorClass'] = 'f3-form-error';
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['checked'] = NULL;
$arguments200['multiple'] = false;
$output202 = '';

$output202 .= 'myCheckbox';
$array203 = array (
);
$output202 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array203);
$arguments200['id'] = $output202;
$arguments200['name'] = 'kategory[]';
$array204 = array (
);$arguments200['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array204);
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array205['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression206 = function($context) {return "{f";};
$arguments200['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                        ';
return $output199;
};
$arguments197 = array();

$output157 .= NULL;

$output157 .= ' 
                        <label class="donne" for="myCheckbox';
$array207 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array207)]);

$output157 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array208 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array208)]);

$output157 .= '</span>
                            <span class="category-name">';
$array209 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array209)]);

$output157 .= '</span>
                        </label>
                    </div>
                ';
return $output157;
};
$arguments154 = array();
$arguments154['each'] = NULL;
$arguments154['as'] = NULL;
$arguments154['key'] = NULL;
$arguments154['reverse'] = false;
$arguments154['iteration'] = NULL;
$array156 = array (
);$arguments154['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array156);
$arguments154['as'] = 'kategory';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output148 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                ';
$array214 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array214)]);

$output213 .= '
                ';
return $output213;
};
$arguments210 = array();
$arguments210['each'] = NULL;
$arguments210['as'] = NULL;
$arguments210['key'] = NULL;
$arguments210['reverse'] = false;
$arguments210['iteration'] = NULL;
$array212 = array (
);$arguments210['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array212);
$arguments210['as'] = 'data';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output148 .= '
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
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['action'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['controller'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['pluginName'] = NULL;
$arguments219['pageUid'] = NULL;
$arguments219['pageType'] = 0;
$arguments219['noCache'] = NULL;
$arguments219['language'] = NULL;
$arguments219['section'] = '';
$arguments219['format'] = '';
$arguments219['linkAccessRestrictedPages'] = false;
$arguments219['additionalParams'] = array (
);
$arguments219['absolute'] = false;
$arguments219['addQueryString'] = false;
$arguments219['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments219['addQueryStringMethod'] = NULL;
$arguments219['action'] = 'show';
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array222);
$arguments219['arguments'] = $array221;

$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output218 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array223 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array223)]);

$output218 .= '</h1>
                          <h2 class="donne-green product-price">';
$array224 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array224)]);

$output218 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array240)]);

$output239 .= '" alt="alt';
$array241 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array241)]);

$output239 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output239;
};
$arguments237 = array();

$output236 .= '';

$output236 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array245 = array (
);
$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array245)]);

$output244 .= '" alt="alt';
$array246 = array (
);
$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array246)]);

$output244 .= '">
                              </div>
                          ';
return $output244;
};
$arguments242 = array();
$arguments242['if'] = NULL;

$output236 .= '';

$output236 .= '
                      ';
return $output236;
};
$arguments225 = array();
$arguments225['then'] = NULL;
$arguments225['else'] = NULL;
$arguments225['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array234);
$array233['1'] = ' == 0';

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments225['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments225['__thenClosure'] = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array228 = array (
);
$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array228)]);

$output227 .= '" alt="alt';
$array229 = array (
);
$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array229)]);

$output227 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output227;
};
$arguments225['__elseClosures'][] = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array231 = array (
);
$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array231)]);

$output230 .= '" alt="alt';
$array232 = array (
);
$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array232)]);

$output230 .= '">
                              </div>
                          ';
return $output230;
};

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output218 .= '
                  </div>
              </a>
          ';
return $output218;
};
$arguments215 = array();
$arguments215['each'] = NULL;
$arguments215['as'] = NULL;
$arguments215['key'] = NULL;
$arguments215['reverse'] = false;
$arguments215['iteration'] = NULL;
$array217 = array (
);$arguments215['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array217);
$arguments215['as'] = 'produkt';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output148 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments253 = array();
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['aria'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$arguments253['name'] = NULL;
$arguments253['rel'] = NULL;
$arguments253['rev'] = NULL;
$arguments253['target'] = NULL;
$arguments253['action'] = NULL;
$arguments253['controller'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['pluginName'] = NULL;
$arguments253['pageUid'] = NULL;
$arguments253['pageType'] = NULL;
$arguments253['noCache'] = NULL;
$arguments253['language'] = NULL;
$arguments253['section'] = NULL;
$arguments253['format'] = NULL;
$arguments253['linkAccessRestrictedPages'] = NULL;
$arguments253['additionalParams'] = NULL;
$arguments253['absolute'] = NULL;
$arguments253['addQueryString'] = NULL;
$arguments253['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments253['addQueryStringMethod'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['action'] = 'list';
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array256);
$array257 = array (
);$array255['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array257);
$array258 = array (
);$array255['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array258);
$array259 = array (
);$array255['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array259);
$arguments253['arguments'] = $array255;

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
            ';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output148 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$array277 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array277)]);
};
$arguments264 = array();
$arguments264['additionalAttributes'] = NULL;
$arguments264['data'] = NULL;
$arguments264['aria'] = NULL;
$arguments264['class'] = NULL;
$arguments264['dir'] = NULL;
$arguments264['id'] = NULL;
$arguments264['lang'] = NULL;
$arguments264['style'] = NULL;
$arguments264['title'] = NULL;
$arguments264['accesskey'] = NULL;
$arguments264['tabindex'] = NULL;
$arguments264['onclick'] = NULL;
$arguments264['name'] = NULL;
$arguments264['rel'] = NULL;
$arguments264['rev'] = NULL;
$arguments264['target'] = NULL;
$arguments264['action'] = NULL;
$arguments264['controller'] = NULL;
$arguments264['extensionName'] = NULL;
$arguments264['pluginName'] = NULL;
$arguments264['pageUid'] = NULL;
$arguments264['pageType'] = NULL;
$arguments264['noCache'] = NULL;
$arguments264['language'] = NULL;
$arguments264['section'] = NULL;
$arguments264['format'] = NULL;
$arguments264['linkAccessRestrictedPages'] = NULL;
$arguments264['additionalParams'] = NULL;
$arguments264['absolute'] = NULL;
$arguments264['addQueryString'] = NULL;
$arguments264['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments264['addQueryStringMethod'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array269);
$array268['1'] = '==';
$array270 = array (
);$array268['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array270);

$expression271 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments266['then'] = 'active';
$arguments264['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array273);
$array274 = array (
);$array272['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array274);
$array275 = array (
);$array272['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array275);
$array276 = array (
);$array272['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array276);
$arguments264['arguments'] = $array272;

$output263 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
            ';
return $output263;
};
$arguments260 = array();
$arguments260['each'] = NULL;
$arguments260['as'] = NULL;
$arguments260['key'] = NULL;
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$array262 = array (
);$arguments260['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array262);
$arguments260['as'] = 'pageNumber';

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output148 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments284 = array();
$arguments284['additionalAttributes'] = NULL;
$arguments284['data'] = NULL;
$arguments284['aria'] = NULL;
$arguments284['class'] = NULL;
$arguments284['dir'] = NULL;
$arguments284['id'] = NULL;
$arguments284['lang'] = NULL;
$arguments284['style'] = NULL;
$arguments284['title'] = NULL;
$arguments284['accesskey'] = NULL;
$arguments284['tabindex'] = NULL;
$arguments284['onclick'] = NULL;
$arguments284['name'] = NULL;
$arguments284['rel'] = NULL;
$arguments284['rev'] = NULL;
$arguments284['target'] = NULL;
$arguments284['action'] = NULL;
$arguments284['controller'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['pluginName'] = NULL;
$arguments284['pageUid'] = NULL;
$arguments284['pageType'] = NULL;
$arguments284['noCache'] = NULL;
$arguments284['language'] = NULL;
$arguments284['section'] = NULL;
$arguments284['format'] = NULL;
$arguments284['linkAccessRestrictedPages'] = NULL;
$arguments284['additionalParams'] = NULL;
$arguments284['absolute'] = NULL;
$arguments284['addQueryString'] = NULL;
$arguments284['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments284['addQueryStringMethod'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['action'] = 'list';
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array287);
$array288 = array (
);$array286['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array288);
$array289 = array (
);$array286['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array289);
$array290 = array (
);$array286['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array290);
$arguments284['arguments'] = $array286;

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
            ';
return $output283;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array281);

$expression282 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['__thenClosure'] = $renderChildrenClosure279;

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output148 .= '
        </div>

    </div>  

';
return $output148;
};
$arguments146 = array();
$arguments146['name'] = NULL;
$arguments146['name'] = 'content';

$output143 .= NULL;

$output143 .= '

';

return $output143;
}


}
#