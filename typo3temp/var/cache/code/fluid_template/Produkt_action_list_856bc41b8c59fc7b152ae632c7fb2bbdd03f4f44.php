<?php

class Produkt_action_list_856bc41b8c59fc7b152ae632c7fb2bbdd03f4f44 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
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
$array18['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression19 = function($context) {return "{f";};
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
$arguments10 = array();

$output9 .= NULL;

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['value'] = NULL;
$arguments20['name'] = NULL;
$arguments20['name'] = 'test';
$arguments20['value'] = 0;
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['name'] = NULL;
$arguments39['name'] = 'test';
$arguments39['value'] = 1;
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '
                                ';
return $output38;
};
$arguments36 = array();

$output35 .= '';

$output35 .= '
                            ';
return $output35;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array32);
$array31['1'] = ' == ';
$array33 = array (
);$array31['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array33);

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['value'] = NULL;
$arguments29['name'] = NULL;
$arguments29['name'] = 'test';
$arguments29['value'] = 1;
$renderChildrenClosure30 = ($arguments29['value'] !== null) ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
                                ';
return $output28;
};

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                        ';
return $output25;
};
$arguments22 = array();
$arguments22['each'] = NULL;
$arguments22['as'] = NULL;
$arguments22['key'] = NULL;
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$array24 = array (
);$arguments22['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array24);
$arguments22['as'] = 'selectedUid';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['aria'] = NULL;
$arguments64['name'] = NULL;
$arguments64['value'] = NULL;
$arguments64['property'] = NULL;
$arguments64['disabled'] = NULL;
$arguments64['errorClass'] = 'f3-form-error';
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['checked'] = NULL;
$arguments64['multiple'] = false;
$output66 = '';

$output66 .= 'myCheckbox';
$array67 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array67);
$arguments64['id'] = $output66;
$arguments64['onclick'] = 'submit()';
$arguments64['name'] = 'kategory[]';
$array68 = array (
);$arguments64['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array68);
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array69['0'] = 'checked';

$expression70 = function($context) {return "checked";};
$arguments64['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                            ';
return $output63;
};
$arguments61 = array();

$output60 .= '';

$output60 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['aria'] = NULL;
$arguments74['name'] = NULL;
$arguments74['value'] = NULL;
$arguments74['property'] = NULL;
$arguments74['disabled'] = NULL;
$arguments74['errorClass'] = 'f3-form-error';
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['checked'] = NULL;
$arguments74['multiple'] = false;
$output76 = '';

$output76 .= 'myCheckbox';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array77);
$arguments74['id'] = $output76;
$arguments74['onclick'] = 'submit()';
$arguments74['name'] = 'kategory[]';
$array78 = array (
);$arguments74['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array78);

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                            ';
return $output73;
};
$arguments71 = array();
$arguments71['if'] = NULL;

$output60 .= '';

$output60 .= '
                        ';
return $output60;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array58);
$array57['1'] = ' == 1';

$expression59 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments41['__thenClosure'] = function() use ($renderingContext, $self) {
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
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array49['0'] = 'checked';

$expression50 = function($context) {return "checked";};
$arguments44['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                            ';
return $output43;
};
$arguments41['__elseClosures'][] = function() use ($renderingContext, $self) {
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
$arguments52['onclick'] = 'submit()';
$arguments52['name'] = 'kategory[]';
$array56 = array (
);$arguments52['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array56);

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                            ';
return $output51;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output9 .= '
                         
                        <label class="donne" for="myCheckbox';
$array79 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array79)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array80 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array80)]);

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
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['action'] = NULL;
$arguments177['arguments'] = array (
);
$arguments177['controller'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['pluginName'] = NULL;
$arguments177['pageUid'] = NULL;
$arguments177['pageType'] = 0;
$arguments177['noCache'] = NULL;
$arguments177['language'] = NULL;
$arguments177['section'] = '';
$arguments177['format'] = '';
$arguments177['linkAccessRestrictedPages'] = false;
$arguments177['additionalParams'] = array (
);
$arguments177['absolute'] = false;
$arguments177['addQueryString'] = false;
$arguments177['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments177['addQueryStringMethod'] = NULL;
$arguments177['action'] = 'show';
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array180);
$arguments177['arguments'] = $array179;

$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output176 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array181 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array181)]);

$output176 .= '</h1>
                            <h2 class="donne-green product-price">';
$array182 = array (
);
$output176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array182)]);

$output176 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array198 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array198)]);

$output197 .= '" alt="alt';
$array199 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array199)]);

$output197 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output197;
};
$arguments195 = array();

$output194 .= '';

$output194 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array203 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array203)]);

$output202 .= '" alt="alt';
$array204 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array204)]);

$output202 .= '">
                                </div>
                            ';
return $output202;
};
$arguments200 = array();
$arguments200['if'] = NULL;

$output194 .= '';

$output194 .= '
                        ';
return $output194;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array192);
$array191['1'] = ' == 0';

$expression193 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array186 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array186)]);

$output185 .= '" alt="alt';
$array187 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array187)]);

$output185 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output185;
};
$arguments183['__elseClosures'][] = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array189 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array189)]);

$output188 .= '" alt="alt';
$array190 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array190)]);

$output188 .= '">
                                </div>
                            ';
return $output188;
};

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output176 .= '
                    </div>
                </a>
            ';
return $output176;
};
$arguments173 = array();
$arguments173['each'] = NULL;
$arguments173['as'] = NULL;
$arguments173['key'] = NULL;
$arguments173['reverse'] = false;
$arguments173['iteration'] = NULL;
$array175 = array (
);$arguments173['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array175);
$arguments173['as'] = 'produkt';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments217 = array();
$arguments217['additionalAttributes'] = NULL;
$arguments217['data'] = NULL;
$arguments217['aria'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['name'] = NULL;
$arguments217['rel'] = NULL;
$arguments217['rev'] = NULL;
$arguments217['target'] = NULL;
$arguments217['action'] = NULL;
$arguments217['controller'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['pluginName'] = NULL;
$arguments217['pageUid'] = NULL;
$arguments217['pageType'] = NULL;
$arguments217['noCache'] = NULL;
$arguments217['language'] = NULL;
$arguments217['section'] = NULL;
$arguments217['format'] = NULL;
$arguments217['linkAccessRestrictedPages'] = NULL;
$arguments217['additionalParams'] = NULL;
$arguments217['absolute'] = NULL;
$arguments217['addQueryString'] = NULL;
$arguments217['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['action'] = 'list';
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array220);
$array221 = array (
);$array219['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array221);
$array222 = array (
);$array219['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array222);
$array223 = array (
);$array219['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array223);
$arguments217['arguments'] = $array219;

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                    ';
return $output216;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$array241 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array241)]);
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['aria'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['name'] = NULL;
$arguments228['rel'] = NULL;
$arguments228['rev'] = NULL;
$arguments228['target'] = NULL;
$arguments228['action'] = NULL;
$arguments228['controller'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['pluginName'] = NULL;
$arguments228['pageUid'] = NULL;
$arguments228['pageType'] = NULL;
$arguments228['noCache'] = NULL;
$arguments228['language'] = NULL;
$arguments228['section'] = NULL;
$arguments228['format'] = NULL;
$arguments228['linkAccessRestrictedPages'] = NULL;
$arguments228['additionalParams'] = NULL;
$arguments228['absolute'] = NULL;
$arguments228['addQueryString'] = NULL;
$arguments228['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments228['addQueryStringMethod'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array233);
$array232['1'] = '==';
$array234 = array (
);$array232['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array234);

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments230['then'] = 'active';
$arguments228['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array237);
$array238 = array (
);$array236['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array238);
$array239 = array (
);$array236['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array239);
$array240 = array (
);$array236['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array240);
$arguments228['arguments'] = $array236;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                    ';
return $output227;
};
$arguments224 = array();
$arguments224['each'] = NULL;
$arguments224['as'] = NULL;
$arguments224['key'] = NULL;
$arguments224['reverse'] = false;
$arguments224['iteration'] = NULL;
$array226 = array (
);$arguments224['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array226);
$arguments224['as'] = 'pageNumber';

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output210 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments248 = array();
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['aria'] = NULL;
$arguments248['class'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['name'] = NULL;
$arguments248['rel'] = NULL;
$arguments248['rev'] = NULL;
$arguments248['target'] = NULL;
$arguments248['action'] = NULL;
$arguments248['controller'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['pluginName'] = NULL;
$arguments248['pageUid'] = NULL;
$arguments248['pageType'] = NULL;
$arguments248['noCache'] = NULL;
$arguments248['language'] = NULL;
$arguments248['section'] = NULL;
$arguments248['format'] = NULL;
$arguments248['linkAccessRestrictedPages'] = NULL;
$arguments248['additionalParams'] = NULL;
$arguments248['absolute'] = NULL;
$arguments248['addQueryString'] = NULL;
$arguments248['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments248['addQueryStringMethod'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['action'] = 'list';
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array251);
$array252 = array (
);$array250['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array252);
$array253 = array (
);$array250['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array253);
$array254 = array (
);$array250['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array254);
$arguments248['arguments'] = $array250;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
                    ';
return $output247;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array245);

$expression246 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output210 .= '
                </div>
            ';
return $output210;
};
$arguments205 = array();
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array208);
$array207['1'] = ' > 1';

$expression209 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments205['__thenClosure'] = $renderChildrenClosure206;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output172 .= '
            ';
return $output172;
};
$arguments170 = array();

$output169 .= '';

$output169 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments255 = array();
$arguments255['if'] = NULL;

$output169 .= '';

$output169 .= '
        ';
return $output169;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['action'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = 0;
$arguments88['noCache'] = NULL;
$arguments88['language'] = NULL;
$arguments88['section'] = '';
$arguments88['format'] = '';
$arguments88['linkAccessRestrictedPages'] = false;
$arguments88['additionalParams'] = array (
);
$arguments88['absolute'] = false;
$arguments88['addQueryString'] = false;
$arguments88['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['action'] = 'show';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array91);
$arguments88['arguments'] = $array90;

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array92 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array92)]);

$output87 .= '</h1>
                            <h2 class="donne-green product-price">';
$array93 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array93)]);

$output87 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array109 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array109)]);

$output108 .= '" alt="alt';
$array110 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array110)]);

$output108 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output108;
};
$arguments106 = array();

$output105 .= '';

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array114)]);

$output113 .= '" alt="alt';
$array115 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array115)]);

$output113 .= '">
                                </div>
                            ';
return $output113;
};
$arguments111 = array();
$arguments111['if'] = NULL;

$output105 .= '';

$output105 .= '
                        ';
return $output105;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array103);
$array102['1'] = ' == 0';

$expression104 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                <div class="out-of-stock zoom">
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
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output96;
};
$arguments94['__elseClosures'][] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array100 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array100)]);

$output99 .= '" alt="alt';
$array101 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array101)]);

$output99 .= '">
                                </div>
                            ';
return $output99;
};

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output87 .= '
                    </div>
                </a>
            ';
return $output87;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$array86 = array (
);$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array86);
$arguments84['as'] = 'produkt';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments128 = array();
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['aria'] = NULL;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['name'] = NULL;
$arguments128['rel'] = NULL;
$arguments128['rev'] = NULL;
$arguments128['target'] = NULL;
$arguments128['action'] = NULL;
$arguments128['controller'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = NULL;
$arguments128['noCache'] = NULL;
$arguments128['language'] = NULL;
$arguments128['section'] = NULL;
$arguments128['format'] = NULL;
$arguments128['linkAccessRestrictedPages'] = NULL;
$arguments128['additionalParams'] = NULL;
$arguments128['absolute'] = NULL;
$arguments128['addQueryString'] = NULL;
$arguments128['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['action'] = 'list';
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array131);
$array132 = array (
);$array130['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array132);
$array133 = array (
);$array130['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array133);
$array134 = array (
);$array130['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array134);
$arguments128['arguments'] = $array130;

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
                    ';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$array152 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array152)]);
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['aria'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['name'] = NULL;
$arguments139['rel'] = NULL;
$arguments139['rev'] = NULL;
$arguments139['target'] = NULL;
$arguments139['action'] = NULL;
$arguments139['controller'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['pluginName'] = NULL;
$arguments139['pageUid'] = NULL;
$arguments139['pageType'] = NULL;
$arguments139['noCache'] = NULL;
$arguments139['language'] = NULL;
$arguments139['section'] = NULL;
$arguments139['format'] = NULL;
$arguments139['linkAccessRestrictedPages'] = NULL;
$arguments139['additionalParams'] = NULL;
$arguments139['absolute'] = NULL;
$arguments139['addQueryString'] = NULL;
$arguments139['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments139['addQueryStringMethod'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array144);
$array143['1'] = '==';
$array145 = array (
);$array143['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array145);

$expression146 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments141['then'] = 'active';
$arguments139['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array148);
$array149 = array (
);$array147['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array149);
$array150 = array (
);$array147['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array150);
$array151 = array (
);$array147['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array151);
$arguments139['arguments'] = $array147;

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                    ';
return $output138;
};
$arguments135 = array();
$arguments135['each'] = NULL;
$arguments135['as'] = NULL;
$arguments135['key'] = NULL;
$arguments135['reverse'] = false;
$arguments135['iteration'] = NULL;
$array137 = array (
);$arguments135['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array137);
$arguments135['as'] = 'pageNumber';

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output121 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['aria'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['action'] = NULL;
$arguments159['controller'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['pluginName'] = NULL;
$arguments159['pageUid'] = NULL;
$arguments159['pageType'] = NULL;
$arguments159['noCache'] = NULL;
$arguments159['language'] = NULL;
$arguments159['section'] = NULL;
$arguments159['format'] = NULL;
$arguments159['linkAccessRestrictedPages'] = NULL;
$arguments159['additionalParams'] = NULL;
$arguments159['absolute'] = NULL;
$arguments159['addQueryString'] = NULL;
$arguments159['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['action'] = 'list';
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array162);
$array163 = array (
);$array161['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array163);
$array164 = array (
);$array161['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array164);
$array165 = array (
);$array161['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array165);
$arguments159['arguments'] = $array161;

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                    ';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output121 .= '
                </div>
            ';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array119);
$array118['1'] = ' > 1';

$expression120 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output83 .= '
            ';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '


    </div>  

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output257 = '';

$output257 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['name'] = NULL;
$arguments258['name'] = 'Default';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output257 .= '

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
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments263 = array();
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['aria'] = NULL;
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['title'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['name'] = NULL;
$arguments263['rel'] = NULL;
$arguments263['rev'] = NULL;
$arguments263['target'] = NULL;
$arguments263['action'] = NULL;
$arguments263['controller'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['pluginName'] = NULL;
$arguments263['pageUid'] = NULL;
$arguments263['pageType'] = NULL;
$arguments263['noCache'] = NULL;
$arguments263['language'] = NULL;
$arguments263['section'] = NULL;
$arguments263['format'] = NULL;
$arguments263['linkAccessRestrictedPages'] = NULL;
$arguments263['additionalParams'] = NULL;
$arguments263['absolute'] = NULL;
$arguments263['addQueryString'] = NULL;
$arguments263['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments263['addQueryStringMethod'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['action'] = 'import';
$arguments263['class'] = 'donne-green';

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['action'] = NULL;
$arguments265['arguments'] = array (
);
$arguments265['controller'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['pluginName'] = NULL;
$arguments265['pageUid'] = NULL;
$arguments265['pageType'] = 0;
$arguments265['noCache'] = NULL;
$arguments265['language'] = NULL;
$arguments265['section'] = '';
$arguments265['format'] = '';
$arguments265['linkAccessRestrictedPages'] = false;
$arguments265['additionalParams'] = array (
);
$arguments265['absolute'] = false;
$arguments265['addQueryString'] = false;
$arguments265['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments265['addQueryStringMethod'] = NULL;
$arguments265['action'] = 'list';
$arguments265['controller'] = 'Produkt';

$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output262 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array267 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array267)]);

$output262 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['aria'] = NULL;
$arguments275['name'] = NULL;
$arguments275['value'] = NULL;
$arguments275['property'] = NULL;
$arguments275['disabled'] = NULL;
$arguments275['errorClass'] = 'f3-form-error';
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['checked'] = NULL;
$arguments275['multiple'] = false;
$output277 = '';

$output277 .= 'myCheckbox';
$array278 = array (
);
$output277 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array278);
$arguments275['id'] = $output277;
$arguments275['name'] = 'kategory[]';
$array279 = array (
);$arguments275['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array279);
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array280['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression281 = function($context) {return "{f";};
$arguments275['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
                        ';
return $output274;
};
$arguments272 = array();

$output271 .= NULL;

$output271 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['value'] = NULL;
$arguments282['name'] = NULL;
$arguments282['name'] = 'test';
$arguments282['value'] = 0;
$renderChildrenClosure283 = ($arguments282['value'] !== null) ? function() use ($arguments282) { return $arguments282['value']; } : $renderChildrenClosure283;
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output271 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['value'] = NULL;
$arguments301['name'] = NULL;
$arguments301['name'] = 'test';
$arguments301['value'] = 1;
$renderChildrenClosure302 = ($arguments301['value'] !== null) ? function() use ($arguments301) { return $arguments301['value']; } : $renderChildrenClosure302;
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output300 .= '
                                ';
return $output300;
};
$arguments298 = array();

$output297 .= '';

$output297 .= '
                            ';
return $output297;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array294);
$array293['1'] = ' == ';
$array295 = array (
);$array293['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array295);

$expression296 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments288['__thenClosure'] = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['value'] = NULL;
$arguments291['name'] = NULL;
$arguments291['name'] = 'test';
$arguments291['value'] = 1;
$renderChildrenClosure292 = ($arguments291['value'] !== null) ? function() use ($arguments291) { return $arguments291['value']; } : $renderChildrenClosure292;
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output290 .= '
                                ';
return $output290;
};

$output287 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
                        ';
return $output287;
};
$arguments284 = array();
$arguments284['each'] = NULL;
$arguments284['as'] = NULL;
$arguments284['key'] = NULL;
$arguments284['reverse'] = false;
$arguments284['iteration'] = NULL;
$array286 = array (
);$arguments284['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array286);
$arguments284['as'] = 'selectedUid';

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output271 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['additionalAttributes'] = NULL;
$arguments326['data'] = NULL;
$arguments326['aria'] = NULL;
$arguments326['name'] = NULL;
$arguments326['value'] = NULL;
$arguments326['property'] = NULL;
$arguments326['disabled'] = NULL;
$arguments326['errorClass'] = 'f3-form-error';
$arguments326['class'] = NULL;
$arguments326['dir'] = NULL;
$arguments326['id'] = NULL;
$arguments326['lang'] = NULL;
$arguments326['style'] = NULL;
$arguments326['title'] = NULL;
$arguments326['accesskey'] = NULL;
$arguments326['tabindex'] = NULL;
$arguments326['onclick'] = NULL;
$arguments326['checked'] = NULL;
$arguments326['multiple'] = false;
$output328 = '';

$output328 .= 'myCheckbox';
$array329 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array329);
$arguments326['id'] = $output328;
$arguments326['onclick'] = 'submit()';
$arguments326['name'] = 'kategory[]';
$array330 = array (
);$arguments326['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array330);
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array331['0'] = 'checked';

$expression332 = function($context) {return "checked";};
$arguments326['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                            ';
return $output325;
};
$arguments323 = array();

$output322 .= '';

$output322 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['additionalAttributes'] = NULL;
$arguments336['data'] = NULL;
$arguments336['aria'] = NULL;
$arguments336['name'] = NULL;
$arguments336['value'] = NULL;
$arguments336['property'] = NULL;
$arguments336['disabled'] = NULL;
$arguments336['errorClass'] = 'f3-form-error';
$arguments336['class'] = NULL;
$arguments336['dir'] = NULL;
$arguments336['id'] = NULL;
$arguments336['lang'] = NULL;
$arguments336['style'] = NULL;
$arguments336['title'] = NULL;
$arguments336['accesskey'] = NULL;
$arguments336['tabindex'] = NULL;
$arguments336['onclick'] = NULL;
$arguments336['checked'] = NULL;
$arguments336['multiple'] = false;
$output338 = '';

$output338 .= 'myCheckbox';
$array339 = array (
);
$output338 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array339);
$arguments336['id'] = $output338;
$arguments336['onclick'] = 'submit()';
$arguments336['name'] = 'kategory[]';
$array340 = array (
);$arguments336['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array340);

$output335 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output335 .= '
                            ';
return $output335;
};
$arguments333 = array();
$arguments333['if'] = NULL;

$output322 .= '';

$output322 .= '
                        ';
return $output322;
};
$arguments303 = array();
$arguments303['then'] = NULL;
$arguments303['else'] = NULL;
$arguments303['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array320);
$array319['1'] = ' == 1';

$expression321 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array319)
					),
					$renderingContext
				);
$arguments303['__thenClosure'] = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['aria'] = NULL;
$arguments306['name'] = NULL;
$arguments306['value'] = NULL;
$arguments306['property'] = NULL;
$arguments306['disabled'] = NULL;
$arguments306['errorClass'] = 'f3-form-error';
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['checked'] = NULL;
$arguments306['multiple'] = false;
$output308 = '';

$output308 .= 'myCheckbox';
$array309 = array (
);
$output308 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array309);
$arguments306['id'] = $output308;
$arguments306['onclick'] = 'submit()';
$arguments306['name'] = 'kategory[]';
$array310 = array (
);$arguments306['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array310);
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array311['0'] = 'checked';

$expression312 = function($context) {return "checked";};
$arguments306['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
                            ';
return $output305;
};
$arguments303['__elseClosures'][] = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['additionalAttributes'] = NULL;
$arguments314['data'] = NULL;
$arguments314['aria'] = NULL;
$arguments314['name'] = NULL;
$arguments314['value'] = NULL;
$arguments314['property'] = NULL;
$arguments314['disabled'] = NULL;
$arguments314['errorClass'] = 'f3-form-error';
$arguments314['class'] = NULL;
$arguments314['dir'] = NULL;
$arguments314['id'] = NULL;
$arguments314['lang'] = NULL;
$arguments314['style'] = NULL;
$arguments314['title'] = NULL;
$arguments314['accesskey'] = NULL;
$arguments314['tabindex'] = NULL;
$arguments314['onclick'] = NULL;
$arguments314['checked'] = NULL;
$arguments314['multiple'] = false;
$output316 = '';

$output316 .= 'myCheckbox';
$array317 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array317);
$arguments314['id'] = $output316;
$arguments314['onclick'] = 'submit()';
$arguments314['name'] = 'kategory[]';
$array318 = array (
);$arguments314['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array318);

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
                            ';
return $output313;
};

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output271 .= '
                         
                        <label class="donne" for="myCheckbox';
$array341 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array341)]);

$output271 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array342 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array342)]);

$output271 .= '</span>
                         </label>
                    </div>
                ';
return $output271;
};
$arguments268 = array();
$arguments268['each'] = NULL;
$arguments268['as'] = NULL;
$arguments268['key'] = NULL;
$arguments268['reverse'] = false;
$arguments268['iteration'] = NULL;
$array270 = array (
);$arguments268['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array270);
$arguments268['as'] = 'kategory';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output262 .= '
                
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
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['action'] = NULL;
$arguments439['arguments'] = array (
);
$arguments439['controller'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['pluginName'] = NULL;
$arguments439['pageUid'] = NULL;
$arguments439['pageType'] = 0;
$arguments439['noCache'] = NULL;
$arguments439['language'] = NULL;
$arguments439['section'] = '';
$arguments439['format'] = '';
$arguments439['linkAccessRestrictedPages'] = false;
$arguments439['additionalParams'] = array (
);
$arguments439['absolute'] = false;
$arguments439['addQueryString'] = false;
$arguments439['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments439['addQueryStringMethod'] = NULL;
$arguments439['action'] = 'show';
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array442);
$arguments439['arguments'] = $array441;

$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output438 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array443 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array443)]);

$output438 .= '</h1>
                            <h2 class="donne-green product-price">';
$array444 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array444)]);

$output438 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array460 = array (
);
$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array460)]);

$output459 .= '" alt="alt';
$array461 = array (
);
$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array461)]);

$output459 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output459;
};
$arguments457 = array();

$output456 .= '';

$output456 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array465 = array (
);
$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array465)]);

$output464 .= '" alt="alt';
$array466 = array (
);
$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array466)]);

$output464 .= '">
                                </div>
                            ';
return $output464;
};
$arguments462 = array();
$arguments462['if'] = NULL;

$output456 .= '';

$output456 .= '
                        ';
return $output456;
};
$arguments445 = array();
$arguments445['then'] = NULL;
$arguments445['else'] = NULL;
$arguments445['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array453 = array();
$array454 = array (
);$array453['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array454);
$array453['1'] = ' == 0';

$expression455 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments445['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression455(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array453)
					),
					$renderingContext
				);
$arguments445['__thenClosure'] = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array448 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array448)]);

$output447 .= '" alt="alt';
$array449 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array449)]);

$output447 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output447;
};
$arguments445['__elseClosures'][] = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array451 = array (
);
$output450 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array451)]);

$output450 .= '" alt="alt';
$array452 = array (
);
$output450 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array452)]);

$output450 .= '">
                                </div>
                            ';
return $output450;
};

$output438 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output438 .= '
                    </div>
                </a>
            ';
return $output438;
};
$arguments435 = array();
$arguments435['each'] = NULL;
$arguments435['as'] = NULL;
$arguments435['key'] = NULL;
$arguments435['reverse'] = false;
$arguments435['iteration'] = NULL;
$array437 = array (
);$arguments435['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array437);
$arguments435['as'] = 'produkt';

$output434 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments479 = array();
$arguments479['additionalAttributes'] = NULL;
$arguments479['data'] = NULL;
$arguments479['aria'] = NULL;
$arguments479['class'] = NULL;
$arguments479['dir'] = NULL;
$arguments479['id'] = NULL;
$arguments479['lang'] = NULL;
$arguments479['style'] = NULL;
$arguments479['title'] = NULL;
$arguments479['accesskey'] = NULL;
$arguments479['tabindex'] = NULL;
$arguments479['onclick'] = NULL;
$arguments479['name'] = NULL;
$arguments479['rel'] = NULL;
$arguments479['rev'] = NULL;
$arguments479['target'] = NULL;
$arguments479['action'] = NULL;
$arguments479['controller'] = NULL;
$arguments479['extensionName'] = NULL;
$arguments479['pluginName'] = NULL;
$arguments479['pageUid'] = NULL;
$arguments479['pageType'] = NULL;
$arguments479['noCache'] = NULL;
$arguments479['language'] = NULL;
$arguments479['section'] = NULL;
$arguments479['format'] = NULL;
$arguments479['linkAccessRestrictedPages'] = NULL;
$arguments479['additionalParams'] = NULL;
$arguments479['absolute'] = NULL;
$arguments479['addQueryString'] = NULL;
$arguments479['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments479['addQueryStringMethod'] = NULL;
$arguments479['arguments'] = NULL;
$arguments479['action'] = 'list';
// Rendering Array
$array481 = array();
$array482 = array (
);$array481['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array482);
$array483 = array (
);$array481['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array483);
$array484 = array (
);$array481['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array484);
$array485 = array (
);$array481['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array485);
$arguments479['arguments'] = $array481;

$output478 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
                    ';
return $output478;
};
$arguments473 = array();
$arguments473['then'] = NULL;
$arguments473['else'] = NULL;
$arguments473['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array475 = array();
$array476 = array (
);$array475['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array476);

$expression477 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments473['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression477(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array475)
					),
					$renderingContext
				);
$arguments473['__thenClosure'] = $renderChildrenClosure474;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$array503 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array503)]);
};
$arguments490 = array();
$arguments490['additionalAttributes'] = NULL;
$arguments490['data'] = NULL;
$arguments490['aria'] = NULL;
$arguments490['class'] = NULL;
$arguments490['dir'] = NULL;
$arguments490['id'] = NULL;
$arguments490['lang'] = NULL;
$arguments490['style'] = NULL;
$arguments490['title'] = NULL;
$arguments490['accesskey'] = NULL;
$arguments490['tabindex'] = NULL;
$arguments490['onclick'] = NULL;
$arguments490['name'] = NULL;
$arguments490['rel'] = NULL;
$arguments490['rev'] = NULL;
$arguments490['target'] = NULL;
$arguments490['action'] = NULL;
$arguments490['controller'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['pluginName'] = NULL;
$arguments490['pageUid'] = NULL;
$arguments490['pageType'] = NULL;
$arguments490['noCache'] = NULL;
$arguments490['language'] = NULL;
$arguments490['section'] = NULL;
$arguments490['format'] = NULL;
$arguments490['linkAccessRestrictedPages'] = NULL;
$arguments490['additionalParams'] = NULL;
$arguments490['absolute'] = NULL;
$arguments490['addQueryString'] = NULL;
$arguments490['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments490['addQueryStringMethod'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['then'] = NULL;
$arguments492['else'] = NULL;
$arguments492['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array494 = array();
$array495 = array (
);$array494['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array495);
$array494['1'] = '==';
$array496 = array (
);$array494['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array496);

$expression497 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments492['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array494)
					),
					$renderingContext
				);
$arguments492['then'] = 'active';
$arguments490['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array499);
$array500 = array (
);$array498['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array500);
$array501 = array (
);$array498['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array501);
$array502 = array (
);$array498['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array502);
$arguments490['arguments'] = $array498;

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
                    ';
return $output489;
};
$arguments486 = array();
$arguments486['each'] = NULL;
$arguments486['as'] = NULL;
$arguments486['key'] = NULL;
$arguments486['reverse'] = false;
$arguments486['iteration'] = NULL;
$array488 = array (
);$arguments486['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array488);
$arguments486['as'] = 'pageNumber';

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output472 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments510 = array();
$arguments510['additionalAttributes'] = NULL;
$arguments510['data'] = NULL;
$arguments510['aria'] = NULL;
$arguments510['class'] = NULL;
$arguments510['dir'] = NULL;
$arguments510['id'] = NULL;
$arguments510['lang'] = NULL;
$arguments510['style'] = NULL;
$arguments510['title'] = NULL;
$arguments510['accesskey'] = NULL;
$arguments510['tabindex'] = NULL;
$arguments510['onclick'] = NULL;
$arguments510['name'] = NULL;
$arguments510['rel'] = NULL;
$arguments510['rev'] = NULL;
$arguments510['target'] = NULL;
$arguments510['action'] = NULL;
$arguments510['controller'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['pluginName'] = NULL;
$arguments510['pageUid'] = NULL;
$arguments510['pageType'] = NULL;
$arguments510['noCache'] = NULL;
$arguments510['language'] = NULL;
$arguments510['section'] = NULL;
$arguments510['format'] = NULL;
$arguments510['linkAccessRestrictedPages'] = NULL;
$arguments510['additionalParams'] = NULL;
$arguments510['absolute'] = NULL;
$arguments510['addQueryString'] = NULL;
$arguments510['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments510['addQueryStringMethod'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['action'] = 'list';
// Rendering Array
$array512 = array();
$array513 = array (
);$array512['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array513);
$array514 = array (
);$array512['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array514);
$array515 = array (
);$array512['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array515);
$array516 = array (
);$array512['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array516);
$arguments510['arguments'] = $array512;

$output509 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output509 .= '
                    ';
return $output509;
};
$arguments504 = array();
$arguments504['then'] = NULL;
$arguments504['else'] = NULL;
$arguments504['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments504['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$arguments504['__thenClosure'] = $renderChildrenClosure505;

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output472 .= '
                </div>
            ';
return $output472;
};
$arguments467 = array();
$arguments467['then'] = NULL;
$arguments467['else'] = NULL;
$arguments467['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array469 = array();
$array470 = array (
);$array469['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array470);
$array469['1'] = ' > 1';

$expression471 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments467['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression471(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array469)
					),
					$renderingContext
				);
$arguments467['__thenClosure'] = $renderChildrenClosure468;

$output434 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output434 .= '
            ';
return $output434;
};
$arguments432 = array();

$output431 .= '';

$output431 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments517 = array();
$arguments517['if'] = NULL;

$output431 .= '';

$output431 .= '
        ';
return $output431;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array429);

$expression430 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['action'] = NULL;
$arguments350['arguments'] = array (
);
$arguments350['controller'] = NULL;
$arguments350['extensionName'] = NULL;
$arguments350['pluginName'] = NULL;
$arguments350['pageUid'] = NULL;
$arguments350['pageType'] = 0;
$arguments350['noCache'] = NULL;
$arguments350['language'] = NULL;
$arguments350['section'] = '';
$arguments350['format'] = '';
$arguments350['linkAccessRestrictedPages'] = false;
$arguments350['additionalParams'] = array (
);
$arguments350['absolute'] = false;
$arguments350['addQueryString'] = false;
$arguments350['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments350['addQueryStringMethod'] = NULL;
$arguments350['action'] = 'show';
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array353);
$arguments350['arguments'] = $array352;

$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output349 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array354 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array354)]);

$output349 .= '</h1>
                            <h2 class="donne-green product-price">';
$array355 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array355)]);

$output349 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array371 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array371)]);

$output370 .= '" alt="alt';
$array372 = array (
);
$output370 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array372)]);

$output370 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output370;
};
$arguments368 = array();

$output367 .= '';

$output367 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array376 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array376)]);

$output375 .= '" alt="alt';
$array377 = array (
);
$output375 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array377)]);

$output375 .= '">
                                </div>
                            ';
return $output375;
};
$arguments373 = array();
$arguments373['if'] = NULL;

$output367 .= '';

$output367 .= '
                        ';
return $output367;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array365);
$array364['1'] = ' == 0';

$expression366 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array359 = array (
);
$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array359)]);

$output358 .= '" alt="alt';
$array360 = array (
);
$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array360)]);

$output358 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output358;
};
$arguments356['__elseClosures'][] = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array362 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array362)]);

$output361 .= '" alt="alt';
$array363 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array363)]);

$output361 .= '">
                                </div>
                            ';
return $output361;
};

$output349 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output349 .= '
                    </div>
                </a>
            ';
return $output349;
};
$arguments346 = array();
$arguments346['each'] = NULL;
$arguments346['as'] = NULL;
$arguments346['key'] = NULL;
$arguments346['reverse'] = false;
$arguments346['iteration'] = NULL;
$array348 = array (
);$arguments346['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array348);
$arguments346['as'] = 'produkt';

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['aria'] = NULL;
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['name'] = NULL;
$arguments390['rel'] = NULL;
$arguments390['rev'] = NULL;
$arguments390['target'] = NULL;
$arguments390['action'] = NULL;
$arguments390['controller'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['pluginName'] = NULL;
$arguments390['pageUid'] = NULL;
$arguments390['pageType'] = NULL;
$arguments390['noCache'] = NULL;
$arguments390['language'] = NULL;
$arguments390['section'] = NULL;
$arguments390['format'] = NULL;
$arguments390['linkAccessRestrictedPages'] = NULL;
$arguments390['additionalParams'] = NULL;
$arguments390['absolute'] = NULL;
$arguments390['addQueryString'] = NULL;
$arguments390['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments390['addQueryStringMethod'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['action'] = 'list';
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array393);
$array394 = array (
);$array392['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array394);
$array395 = array (
);$array392['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array395);
$array396 = array (
);$array392['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array396);
$arguments390['arguments'] = $array392;

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
                    ';
return $output389;
};
$arguments384 = array();
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$arguments384['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array386 = array();
$array387 = array (
);$array386['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array387);

$expression388 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments384['__thenClosure'] = $renderChildrenClosure385;

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$array414 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array414)]);
};
$arguments401 = array();
$arguments401['additionalAttributes'] = NULL;
$arguments401['data'] = NULL;
$arguments401['aria'] = NULL;
$arguments401['class'] = NULL;
$arguments401['dir'] = NULL;
$arguments401['id'] = NULL;
$arguments401['lang'] = NULL;
$arguments401['style'] = NULL;
$arguments401['title'] = NULL;
$arguments401['accesskey'] = NULL;
$arguments401['tabindex'] = NULL;
$arguments401['onclick'] = NULL;
$arguments401['name'] = NULL;
$arguments401['rel'] = NULL;
$arguments401['rev'] = NULL;
$arguments401['target'] = NULL;
$arguments401['action'] = NULL;
$arguments401['controller'] = NULL;
$arguments401['extensionName'] = NULL;
$arguments401['pluginName'] = NULL;
$arguments401['pageUid'] = NULL;
$arguments401['pageType'] = NULL;
$arguments401['noCache'] = NULL;
$arguments401['language'] = NULL;
$arguments401['section'] = NULL;
$arguments401['format'] = NULL;
$arguments401['linkAccessRestrictedPages'] = NULL;
$arguments401['additionalParams'] = NULL;
$arguments401['absolute'] = NULL;
$arguments401['addQueryString'] = NULL;
$arguments401['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments401['addQueryStringMethod'] = NULL;
$arguments401['arguments'] = NULL;
$arguments401['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array406);
$array405['1'] = '==';
$array407 = array (
);$array405['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array407);

$expression408 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments403['then'] = 'active';
$arguments401['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
// Rendering Array
$array409 = array();
$array410 = array (
);$array409['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array410);
$array411 = array (
);$array409['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array411);
$array412 = array (
);$array409['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array412);
$array413 = array (
);$array409['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array413);
$arguments401['arguments'] = $array409;

$output400 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
                    ';
return $output400;
};
$arguments397 = array();
$arguments397['each'] = NULL;
$arguments397['as'] = NULL;
$arguments397['key'] = NULL;
$arguments397['reverse'] = false;
$arguments397['iteration'] = NULL;
$array399 = array (
);$arguments397['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array399);
$arguments397['as'] = 'pageNumber';

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output383 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments421 = array();
$arguments421['additionalAttributes'] = NULL;
$arguments421['data'] = NULL;
$arguments421['aria'] = NULL;
$arguments421['class'] = NULL;
$arguments421['dir'] = NULL;
$arguments421['id'] = NULL;
$arguments421['lang'] = NULL;
$arguments421['style'] = NULL;
$arguments421['title'] = NULL;
$arguments421['accesskey'] = NULL;
$arguments421['tabindex'] = NULL;
$arguments421['onclick'] = NULL;
$arguments421['name'] = NULL;
$arguments421['rel'] = NULL;
$arguments421['rev'] = NULL;
$arguments421['target'] = NULL;
$arguments421['action'] = NULL;
$arguments421['controller'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['pluginName'] = NULL;
$arguments421['pageUid'] = NULL;
$arguments421['pageType'] = NULL;
$arguments421['noCache'] = NULL;
$arguments421['language'] = NULL;
$arguments421['section'] = NULL;
$arguments421['format'] = NULL;
$arguments421['linkAccessRestrictedPages'] = NULL;
$arguments421['additionalParams'] = NULL;
$arguments421['absolute'] = NULL;
$arguments421['addQueryString'] = NULL;
$arguments421['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments421['addQueryStringMethod'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['action'] = 'list';
// Rendering Array
$array423 = array();
$array424 = array (
);$array423['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array424);
$array425 = array (
);$array423['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array425);
$array426 = array (
);$array423['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array426);
$array427 = array (
);$array423['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array427);
$arguments421['arguments'] = $array423;

$output420 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output420 .= '
                    ';
return $output420;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = $renderChildrenClosure416;

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output383 .= '
                </div>
            ';
return $output383;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array380 = array();
$array381 = array (
);$array380['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array381);
$array380['1'] = ' > 1';

$expression382 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array380)
					),
					$renderingContext
				);
$arguments378['__thenClosure'] = $renderChildrenClosure379;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output345 .= '
            ';
return $output345;
};
$arguments343['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output262 .= '


    </div>  

';
return $output262;
};
$arguments260 = array();
$arguments260['name'] = NULL;
$arguments260['name'] = 'content';

$output257 .= NULL;

$output257 .= '

';

return $output257;
}


}
#