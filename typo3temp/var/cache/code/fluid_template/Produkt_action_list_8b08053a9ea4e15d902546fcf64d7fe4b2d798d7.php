<?php

class Produkt_action_list_8b08053a9ea4e15d902546fcf64d7fe4b2d798d7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments88 = array();

$output87 .= '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments90 = array();
$arguments90['if'] = NULL;

$output87 .= '';

$output87 .= '
                    ';
return $output87;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array84);
$array83['1'] = ' == ';
$array85 = array (
);$array83['2'] = $renderingContext->getVariableProvider()->getByPath('0-50', $array85);

$expression86 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '    
                     <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                    <a  >';
$array92 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array92)]);

$output0 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['action'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['controller'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = NULL;
$arguments189['language'] = NULL;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['linkAccessRestrictedPages'] = false;
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['action'] = 'show';
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array192);
$arguments189['arguments'] = $array191;

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output188 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array193 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array193)]);

$output188 .= '</h1>
                            <h2 class="donne-green product-price">';
$array194 = array (
);
$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array194)]);

$output188 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array210 = array (
);
$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array210)]);

$output209 .= '" alt="alt';
$array211 = array (
);
$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array211)]);

$output209 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output209;
};
$arguments207 = array();

$output206 .= '';

$output206 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array215 = array (
);
$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array215)]);

$output214 .= '" alt="alt';
$array216 = array (
);
$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array216)]);

$output214 .= '">
                                </div>
                            ';
return $output214;
};
$arguments212 = array();
$arguments212['if'] = NULL;

$output206 .= '';

$output206 .= '
                        ';
return $output206;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array204);
$array203['1'] = ' == 0';

$expression205 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = function() use ($renderingContext, $self) {
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
$arguments195['__elseClosures'][] = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array201 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array201)]);

$output200 .= '" alt="alt';
$array202 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array202)]);

$output200 .= '">
                                </div>
                            ';
return $output200;
};

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output188 .= '
                    </div>
                </a>
            ';
return $output188;
};
$arguments185 = array();
$arguments185['each'] = NULL;
$arguments185['as'] = NULL;
$arguments185['key'] = NULL;
$arguments185['reverse'] = false;
$arguments185['iteration'] = NULL;
$array187 = array (
);$arguments185['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array187);
$arguments185['as'] = 'produkt';

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments229 = array();
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['aria'] = NULL;
$arguments229['class'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['title'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['name'] = NULL;
$arguments229['rel'] = NULL;
$arguments229['rev'] = NULL;
$arguments229['target'] = NULL;
$arguments229['action'] = NULL;
$arguments229['controller'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['pluginName'] = NULL;
$arguments229['pageUid'] = NULL;
$arguments229['pageType'] = NULL;
$arguments229['noCache'] = NULL;
$arguments229['language'] = NULL;
$arguments229['section'] = NULL;
$arguments229['format'] = NULL;
$arguments229['linkAccessRestrictedPages'] = NULL;
$arguments229['additionalParams'] = NULL;
$arguments229['absolute'] = NULL;
$arguments229['addQueryString'] = NULL;
$arguments229['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments229['addQueryStringMethod'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['action'] = 'list';
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array232);
$array233 = array (
);$array231['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array233);
$array234 = array (
);$array231['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array234);
$array235 = array (
);$array231['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array235);
$arguments229['arguments'] = $array231;

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
                    ';
return $output228;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array226);

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = $renderChildrenClosure224;

$output222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$array253 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array253)]);
};
$arguments240 = array();
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['aria'] = NULL;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['title'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['name'] = NULL;
$arguments240['rel'] = NULL;
$arguments240['rev'] = NULL;
$arguments240['target'] = NULL;
$arguments240['action'] = NULL;
$arguments240['controller'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['pluginName'] = NULL;
$arguments240['pageUid'] = NULL;
$arguments240['pageType'] = NULL;
$arguments240['noCache'] = NULL;
$arguments240['language'] = NULL;
$arguments240['section'] = NULL;
$arguments240['format'] = NULL;
$arguments240['linkAccessRestrictedPages'] = NULL;
$arguments240['additionalParams'] = NULL;
$arguments240['absolute'] = NULL;
$arguments240['addQueryString'] = NULL;
$arguments240['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments240['addQueryStringMethod'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array245);
$array244['1'] = '==';
$array246 = array (
);$array244['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array246);

$expression247 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['then'] = 'active';
$arguments240['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array249);
$array250 = array (
);$array248['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array250);
$array251 = array (
);$array248['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array251);
$array252 = array (
);$array248['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array252);
$arguments240['arguments'] = $array248;

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
                    ';
return $output239;
};
$arguments236 = array();
$arguments236['each'] = NULL;
$arguments236['as'] = NULL;
$arguments236['key'] = NULL;
$arguments236['reverse'] = false;
$arguments236['iteration'] = NULL;
$array238 = array (
);$arguments236['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array238);
$arguments236['as'] = 'pageNumber';

$output222 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output222 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['aria'] = NULL;
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['name'] = NULL;
$arguments260['rel'] = NULL;
$arguments260['rev'] = NULL;
$arguments260['target'] = NULL;
$arguments260['action'] = NULL;
$arguments260['controller'] = NULL;
$arguments260['extensionName'] = NULL;
$arguments260['pluginName'] = NULL;
$arguments260['pageUid'] = NULL;
$arguments260['pageType'] = NULL;
$arguments260['noCache'] = NULL;
$arguments260['language'] = NULL;
$arguments260['section'] = NULL;
$arguments260['format'] = NULL;
$arguments260['linkAccessRestrictedPages'] = NULL;
$arguments260['additionalParams'] = NULL;
$arguments260['absolute'] = NULL;
$arguments260['addQueryString'] = NULL;
$arguments260['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments260['addQueryStringMethod'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['action'] = 'list';
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array263);
$array264 = array (
);$array262['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array264);
$array265 = array (
);$array262['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array265);
$array266 = array (
);$array262['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array266);
$arguments260['arguments'] = $array262;

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                    ';
return $output259;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array257);

$expression258 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array256)
					),
					$renderingContext
				);
$arguments254['__thenClosure'] = $renderChildrenClosure255;

$output222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output222 .= '
                </div>
            ';
return $output222;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array220);
$array219['1'] = ' > 1';

$expression221 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = $renderChildrenClosure218;

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output184 .= '
            ';
return $output184;
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments267 = array();
$arguments267['if'] = NULL;

$output181 .= '';

$output181 .= '
        ';
return $output181;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['action'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['controller'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['pluginName'] = NULL;
$arguments100['pageUid'] = NULL;
$arguments100['pageType'] = 0;
$arguments100['noCache'] = NULL;
$arguments100['language'] = NULL;
$arguments100['section'] = '';
$arguments100['format'] = '';
$arguments100['linkAccessRestrictedPages'] = false;
$arguments100['additionalParams'] = array (
);
$arguments100['absolute'] = false;
$arguments100['addQueryString'] = false;
$arguments100['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments100['addQueryStringMethod'] = NULL;
$arguments100['action'] = 'show';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array103);
$arguments100['arguments'] = $array102;

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array104 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array104)]);

$output99 .= '</h1>
                            <h2 class="donne-green product-price">';
$array105 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array105)]);

$output99 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array121)]);

$output120 .= '" alt="alt';
$array122 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array122)]);

$output120 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output120;
};
$arguments118 = array();

$output117 .= '';

$output117 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array126)]);

$output125 .= '" alt="alt';
$array127 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array127)]);

$output125 .= '">
                                </div>
                            ';
return $output125;
};
$arguments123 = array();
$arguments123['if'] = NULL;

$output117 .= '';

$output117 .= '
                        ';
return $output117;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array115);
$array114['1'] = ' == 0';

$expression116 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = function() use ($renderingContext, $self) {
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
$arguments106['__elseClosures'][] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array112 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array112)]);

$output111 .= '" alt="alt';
$array113 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array113)]);

$output111 .= '">
                                </div>
                            ';
return $output111;
};

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output99 .= '
                    </div>
                </a>
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
);$arguments96['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array98);
$arguments96['as'] = 'produkt';

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments140 = array();
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['aria'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$arguments140['action'] = NULL;
$arguments140['controller'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['pluginName'] = NULL;
$arguments140['pageUid'] = NULL;
$arguments140['pageType'] = NULL;
$arguments140['noCache'] = NULL;
$arguments140['language'] = NULL;
$arguments140['section'] = NULL;
$arguments140['format'] = NULL;
$arguments140['linkAccessRestrictedPages'] = NULL;
$arguments140['additionalParams'] = NULL;
$arguments140['absolute'] = NULL;
$arguments140['addQueryString'] = NULL;
$arguments140['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['action'] = 'list';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array143);
$array144 = array (
);$array142['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array144);
$array145 = array (
);$array142['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array145);
$array146 = array (
);$array142['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array146);
$arguments140['arguments'] = $array142;

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                    ';
return $output139;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments134['__thenClosure'] = $renderChildrenClosure135;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array164 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array164)]);
};
$arguments151 = array();
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['aria'] = NULL;
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['name'] = NULL;
$arguments151['rel'] = NULL;
$arguments151['rev'] = NULL;
$arguments151['target'] = NULL;
$arguments151['action'] = NULL;
$arguments151['controller'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['pluginName'] = NULL;
$arguments151['pageUid'] = NULL;
$arguments151['pageType'] = NULL;
$arguments151['noCache'] = NULL;
$arguments151['language'] = NULL;
$arguments151['section'] = NULL;
$arguments151['format'] = NULL;
$arguments151['linkAccessRestrictedPages'] = NULL;
$arguments151['additionalParams'] = NULL;
$arguments151['absolute'] = NULL;
$arguments151['addQueryString'] = NULL;
$arguments151['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments151['addQueryStringMethod'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array156);
$array155['1'] = '==';
$array157 = array (
);$array155['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array157);

$expression158 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['then'] = 'active';
$arguments151['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array160);
$array161 = array (
);$array159['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array161);
$array162 = array (
);$array159['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array162);
$array163 = array (
);$array159['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array163);
$arguments151['arguments'] = $array159;

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
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
);$arguments147['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array149);
$arguments147['as'] = 'pageNumber';

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output133 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments171 = array();
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['aria'] = NULL;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['name'] = NULL;
$arguments171['rel'] = NULL;
$arguments171['rev'] = NULL;
$arguments171['target'] = NULL;
$arguments171['action'] = NULL;
$arguments171['controller'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['pluginName'] = NULL;
$arguments171['pageUid'] = NULL;
$arguments171['pageType'] = NULL;
$arguments171['noCache'] = NULL;
$arguments171['language'] = NULL;
$arguments171['section'] = NULL;
$arguments171['format'] = NULL;
$arguments171['linkAccessRestrictedPages'] = NULL;
$arguments171['additionalParams'] = NULL;
$arguments171['absolute'] = NULL;
$arguments171['addQueryString'] = NULL;
$arguments171['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments171['addQueryStringMethod'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['action'] = 'list';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array174);
$array175 = array (
);$array173['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array175);
$array176 = array (
);$array173['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array176);
$array177 = array (
);$array173['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array177);
$arguments171['arguments'] = $array173;

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
                    ';
return $output170;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array168);

$expression169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = $renderChildrenClosure166;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output133 .= '
                </div>
            ';
return $output133;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array131);
$array130['1'] = ' > 1';

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['__thenClosure'] = $renderChildrenClosure129;

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output95 .= '
            ';
return $output95;
};
$arguments93['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

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
$output269 = '';

$output269 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['name'] = NULL;
$arguments270['name'] = 'Default';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output269 .= '

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
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['aria'] = NULL;
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['name'] = NULL;
$arguments275['rel'] = NULL;
$arguments275['rev'] = NULL;
$arguments275['target'] = NULL;
$arguments275['action'] = NULL;
$arguments275['controller'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['pluginName'] = NULL;
$arguments275['pageUid'] = NULL;
$arguments275['pageType'] = NULL;
$arguments275['noCache'] = NULL;
$arguments275['language'] = NULL;
$arguments275['section'] = NULL;
$arguments275['format'] = NULL;
$arguments275['linkAccessRestrictedPages'] = NULL;
$arguments275['additionalParams'] = NULL;
$arguments275['absolute'] = NULL;
$arguments275['addQueryString'] = NULL;
$arguments275['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments275['addQueryStringMethod'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['action'] = 'import';
$arguments275['class'] = 'donne-green';

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['action'] = NULL;
$arguments277['arguments'] = array (
);
$arguments277['controller'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['pluginName'] = NULL;
$arguments277['pageUid'] = NULL;
$arguments277['pageType'] = 0;
$arguments277['noCache'] = NULL;
$arguments277['language'] = NULL;
$arguments277['section'] = '';
$arguments277['format'] = '';
$arguments277['linkAccessRestrictedPages'] = false;
$arguments277['additionalParams'] = array (
);
$arguments277['absolute'] = false;
$arguments277['addQueryString'] = false;
$arguments277['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments277['addQueryStringMethod'] = NULL;
$arguments277['action'] = 'list';
$arguments277['controller'] = 'Produkt';

$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext)]);

$output274 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array279 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array279)]);

$output274 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output286 = '';

$output286 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['additionalAttributes'] = NULL;
$arguments287['data'] = NULL;
$arguments287['aria'] = NULL;
$arguments287['name'] = NULL;
$arguments287['value'] = NULL;
$arguments287['property'] = NULL;
$arguments287['disabled'] = NULL;
$arguments287['errorClass'] = 'f3-form-error';
$arguments287['class'] = NULL;
$arguments287['dir'] = NULL;
$arguments287['id'] = NULL;
$arguments287['lang'] = NULL;
$arguments287['style'] = NULL;
$arguments287['title'] = NULL;
$arguments287['accesskey'] = NULL;
$arguments287['tabindex'] = NULL;
$arguments287['onclick'] = NULL;
$arguments287['checked'] = NULL;
$arguments287['multiple'] = false;
$output289 = '';

$output289 .= 'myCheckbox';
$array290 = array (
);
$output289 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array290);
$arguments287['id'] = $output289;
$arguments287['name'] = 'kategory[]';
$array291 = array (
);$arguments287['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array291);
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array292['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression293 = function($context) {return "{f";};
$arguments287['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output286 .= '
                        ';
return $output286;
};
$arguments284 = array();

$output283 .= NULL;

$output283 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['value'] = NULL;
$arguments294['name'] = NULL;
$arguments294['name'] = 'test';
$arguments294['value'] = 0;
$renderChildrenClosure295 = ($arguments294['value'] !== null) ? function() use ($arguments294) { return $arguments294['value']; } : $renderChildrenClosure295;
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output283 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['value'] = NULL;
$arguments313['name'] = NULL;
$arguments313['name'] = 'test';
$arguments313['value'] = 1;
$renderChildrenClosure314 = ($arguments313['value'] !== null) ? function() use ($arguments313) { return $arguments313['value']; } : $renderChildrenClosure314;
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);

$output312 .= '
                                ';
return $output312;
};
$arguments310 = array();

$output309 .= '';

$output309 .= '
                            ';
return $output309;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array305 = array();
$array306 = array (
);$array305['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array306);
$array305['1'] = ' == ';
$array307 = array (
);$array305['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array307);

$expression308 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array305)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['value'] = NULL;
$arguments303['name'] = NULL;
$arguments303['name'] = 'test';
$arguments303['value'] = 1;
$renderChildrenClosure304 = ($arguments303['value'] !== null) ? function() use ($arguments303) { return $arguments303['value']; } : $renderChildrenClosure304;
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output302 .= '
                                ';
return $output302;
};

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
                        ';
return $output299;
};
$arguments296 = array();
$arguments296['each'] = NULL;
$arguments296['as'] = NULL;
$arguments296['key'] = NULL;
$arguments296['reverse'] = false;
$arguments296['iteration'] = NULL;
$array298 = array (
);$arguments296['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array298);
$arguments296['as'] = 'selectedUid';

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output283 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['additionalAttributes'] = NULL;
$arguments338['data'] = NULL;
$arguments338['aria'] = NULL;
$arguments338['name'] = NULL;
$arguments338['value'] = NULL;
$arguments338['property'] = NULL;
$arguments338['disabled'] = NULL;
$arguments338['errorClass'] = 'f3-form-error';
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['title'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
$arguments338['checked'] = NULL;
$arguments338['multiple'] = false;
$output340 = '';

$output340 .= 'myCheckbox';
$array341 = array (
);
$output340 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array341);
$arguments338['id'] = $output340;
$arguments338['onclick'] = 'submit()';
$arguments338['name'] = 'kategory[]';
$array342 = array (
);$arguments338['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array342);
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array343['0'] = 'checked';

$expression344 = function($context) {return "checked";};
$arguments338['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
                            ';
return $output337;
};
$arguments335 = array();

$output334 .= '';

$output334 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['additionalAttributes'] = NULL;
$arguments348['data'] = NULL;
$arguments348['aria'] = NULL;
$arguments348['name'] = NULL;
$arguments348['value'] = NULL;
$arguments348['property'] = NULL;
$arguments348['disabled'] = NULL;
$arguments348['errorClass'] = 'f3-form-error';
$arguments348['class'] = NULL;
$arguments348['dir'] = NULL;
$arguments348['id'] = NULL;
$arguments348['lang'] = NULL;
$arguments348['style'] = NULL;
$arguments348['title'] = NULL;
$arguments348['accesskey'] = NULL;
$arguments348['tabindex'] = NULL;
$arguments348['onclick'] = NULL;
$arguments348['checked'] = NULL;
$arguments348['multiple'] = false;
$output350 = '';

$output350 .= 'myCheckbox';
$array351 = array (
);
$output350 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array351);
$arguments348['id'] = $output350;
$arguments348['onclick'] = 'submit()';
$arguments348['name'] = 'kategory[]';
$array352 = array (
);$arguments348['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array352);

$output347 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
                            ';
return $output347;
};
$arguments345 = array();
$arguments345['if'] = NULL;

$output334 .= '';

$output334 .= '
                        ';
return $output334;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array332 = array (
);$array331['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array332);
$array331['1'] = ' == 1';

$expression333 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression333(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['additionalAttributes'] = NULL;
$arguments318['data'] = NULL;
$arguments318['aria'] = NULL;
$arguments318['name'] = NULL;
$arguments318['value'] = NULL;
$arguments318['property'] = NULL;
$arguments318['disabled'] = NULL;
$arguments318['errorClass'] = 'f3-form-error';
$arguments318['class'] = NULL;
$arguments318['dir'] = NULL;
$arguments318['id'] = NULL;
$arguments318['lang'] = NULL;
$arguments318['style'] = NULL;
$arguments318['title'] = NULL;
$arguments318['accesskey'] = NULL;
$arguments318['tabindex'] = NULL;
$arguments318['onclick'] = NULL;
$arguments318['checked'] = NULL;
$arguments318['multiple'] = false;
$output320 = '';

$output320 .= 'myCheckbox';
$array321 = array (
);
$output320 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array321);
$arguments318['id'] = $output320;
$arguments318['onclick'] = 'submit()';
$arguments318['name'] = 'kategory[]';
$array322 = array (
);$arguments318['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array322);
// Rendering Boolean node
// Rendering Array
$array323 = array();
$array323['0'] = 'checked';

$expression324 = function($context) {return "checked";};
$arguments318['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array323)
					),
					$renderingContext
				);

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
                            ';
return $output317;
};
$arguments315['__elseClosures'][] = function() use ($renderingContext, $self) {
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

$output325 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                            ';
return $output325;
};

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output283 .= '
                         
                        <label class="donne" for="myCheckbox';
$array353 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array353)]);

$output283 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array354 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array354)]);

$output283 .= '</span>
                         </label>
                    </div>
                ';
return $output283;
};
$arguments280 = array();
$arguments280['each'] = NULL;
$arguments280['as'] = NULL;
$arguments280['key'] = NULL;
$arguments280['reverse'] = false;
$arguments280['iteration'] = NULL;
$array282 = array (
);$arguments280['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array282);
$arguments280['as'] = 'kategory';

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output274 .= '
                
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments362 = array();

$output361 .= '';

$output361 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments364 = array();
$arguments364['if'] = NULL;

$output361 .= '';

$output361 .= '
                    ';
return $output361;
};
$arguments355 = array();
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$arguments355['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array358);
$array357['1'] = ' == ';
$array359 = array (
);$array357['2'] = $renderingContext->getVariableProvider()->getByPath('0-50', $array359);

$expression360 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments355['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
$arguments355['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments355['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output274 .= '    
                     <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                    <a  >';
$array366 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array366)]);

$output274 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['action'] = NULL;
$arguments463['arguments'] = array (
);
$arguments463['controller'] = NULL;
$arguments463['extensionName'] = NULL;
$arguments463['pluginName'] = NULL;
$arguments463['pageUid'] = NULL;
$arguments463['pageType'] = 0;
$arguments463['noCache'] = NULL;
$arguments463['language'] = NULL;
$arguments463['section'] = '';
$arguments463['format'] = '';
$arguments463['linkAccessRestrictedPages'] = false;
$arguments463['additionalParams'] = array (
);
$arguments463['absolute'] = false;
$arguments463['addQueryString'] = false;
$arguments463['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments463['addQueryStringMethod'] = NULL;
$arguments463['action'] = 'show';
// Rendering Array
$array465 = array();
$array466 = array (
);$array465['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array466);
$arguments463['arguments'] = $array465;

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output462 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array467 = array (
);
$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array467)]);

$output462 .= '</h1>
                            <h2 class="donne-green product-price">';
$array468 = array (
);
$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array468)]);

$output462 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array484 = array (
);
$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array484)]);

$output483 .= '" alt="alt';
$array485 = array (
);
$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array485)]);

$output483 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output483;
};
$arguments481 = array();

$output480 .= '';

$output480 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array489 = array (
);
$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array489)]);

$output488 .= '" alt="alt';
$array490 = array (
);
$output488 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array490)]);

$output488 .= '">
                                </div>
                            ';
return $output488;
};
$arguments486 = array();
$arguments486['if'] = NULL;

$output480 .= '';

$output480 .= '
                        ';
return $output480;
};
$arguments469 = array();
$arguments469['then'] = NULL;
$arguments469['else'] = NULL;
$arguments469['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
$array478 = array (
);$array477['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array478);
$array477['1'] = ' == 0';

$expression479 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments469['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression479(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments469['__thenClosure'] = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array472 = array (
);
$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array472)]);

$output471 .= '" alt="alt';
$array473 = array (
);
$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array473)]);

$output471 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output471;
};
$arguments469['__elseClosures'][] = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array475 = array (
);
$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array475)]);

$output474 .= '" alt="alt';
$array476 = array (
);
$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array476)]);

$output474 .= '">
                                </div>
                            ';
return $output474;
};

$output462 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output462 .= '
                    </div>
                </a>
            ';
return $output462;
};
$arguments459 = array();
$arguments459['each'] = NULL;
$arguments459['as'] = NULL;
$arguments459['key'] = NULL;
$arguments459['reverse'] = false;
$arguments459['iteration'] = NULL;
$array461 = array (
);$arguments459['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array461);
$arguments459['as'] = 'produkt';

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments503 = array();
$arguments503['additionalAttributes'] = NULL;
$arguments503['data'] = NULL;
$arguments503['aria'] = NULL;
$arguments503['class'] = NULL;
$arguments503['dir'] = NULL;
$arguments503['id'] = NULL;
$arguments503['lang'] = NULL;
$arguments503['style'] = NULL;
$arguments503['title'] = NULL;
$arguments503['accesskey'] = NULL;
$arguments503['tabindex'] = NULL;
$arguments503['onclick'] = NULL;
$arguments503['name'] = NULL;
$arguments503['rel'] = NULL;
$arguments503['rev'] = NULL;
$arguments503['target'] = NULL;
$arguments503['action'] = NULL;
$arguments503['controller'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['pluginName'] = NULL;
$arguments503['pageUid'] = NULL;
$arguments503['pageType'] = NULL;
$arguments503['noCache'] = NULL;
$arguments503['language'] = NULL;
$arguments503['section'] = NULL;
$arguments503['format'] = NULL;
$arguments503['linkAccessRestrictedPages'] = NULL;
$arguments503['additionalParams'] = NULL;
$arguments503['absolute'] = NULL;
$arguments503['addQueryString'] = NULL;
$arguments503['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments503['addQueryStringMethod'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['action'] = 'list';
// Rendering Array
$array505 = array();
$array506 = array (
);$array505['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array506);
$array507 = array (
);$array505['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array507);
$array508 = array (
);$array505['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array508);
$array509 = array (
);$array505['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array509);
$arguments503['arguments'] = $array505;

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '
                    ';
return $output502;
};
$arguments497 = array();
$arguments497['then'] = NULL;
$arguments497['else'] = NULL;
$arguments497['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array499 = array();
$array500 = array (
);$array499['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array500);

$expression501 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments497['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array499)
					),
					$renderingContext
				);
$arguments497['__thenClosure'] = $renderChildrenClosure498;

$output496 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output496 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$array527 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array527)]);
};
$arguments514 = array();
$arguments514['additionalAttributes'] = NULL;
$arguments514['data'] = NULL;
$arguments514['aria'] = NULL;
$arguments514['class'] = NULL;
$arguments514['dir'] = NULL;
$arguments514['id'] = NULL;
$arguments514['lang'] = NULL;
$arguments514['style'] = NULL;
$arguments514['title'] = NULL;
$arguments514['accesskey'] = NULL;
$arguments514['tabindex'] = NULL;
$arguments514['onclick'] = NULL;
$arguments514['name'] = NULL;
$arguments514['rel'] = NULL;
$arguments514['rev'] = NULL;
$arguments514['target'] = NULL;
$arguments514['action'] = NULL;
$arguments514['controller'] = NULL;
$arguments514['extensionName'] = NULL;
$arguments514['pluginName'] = NULL;
$arguments514['pageUid'] = NULL;
$arguments514['pageType'] = NULL;
$arguments514['noCache'] = NULL;
$arguments514['language'] = NULL;
$arguments514['section'] = NULL;
$arguments514['format'] = NULL;
$arguments514['linkAccessRestrictedPages'] = NULL;
$arguments514['additionalParams'] = NULL;
$arguments514['absolute'] = NULL;
$arguments514['addQueryString'] = NULL;
$arguments514['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments514['addQueryStringMethod'] = NULL;
$arguments514['arguments'] = NULL;
$arguments514['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['then'] = NULL;
$arguments516['else'] = NULL;
$arguments516['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array518 = array();
$array519 = array (
);$array518['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array519);
$array518['1'] = '==';
$array520 = array (
);$array518['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array520);

$expression521 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments516['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression521(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array518)
					),
					$renderingContext
				);
$arguments516['then'] = 'active';
$arguments514['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);
// Rendering Array
$array522 = array();
$array523 = array (
);$array522['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array523);
$array524 = array (
);$array522['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array524);
$array525 = array (
);$array522['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array525);
$array526 = array (
);$array522['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array526);
$arguments514['arguments'] = $array522;

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
                    ';
return $output513;
};
$arguments510 = array();
$arguments510['each'] = NULL;
$arguments510['as'] = NULL;
$arguments510['key'] = NULL;
$arguments510['reverse'] = false;
$arguments510['iteration'] = NULL;
$array512 = array (
);$arguments510['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array512);
$arguments510['as'] = 'pageNumber';

$output496 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output496 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$output533 = '';

$output533 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments534 = array();
$arguments534['additionalAttributes'] = NULL;
$arguments534['data'] = NULL;
$arguments534['aria'] = NULL;
$arguments534['class'] = NULL;
$arguments534['dir'] = NULL;
$arguments534['id'] = NULL;
$arguments534['lang'] = NULL;
$arguments534['style'] = NULL;
$arguments534['title'] = NULL;
$arguments534['accesskey'] = NULL;
$arguments534['tabindex'] = NULL;
$arguments534['onclick'] = NULL;
$arguments534['name'] = NULL;
$arguments534['rel'] = NULL;
$arguments534['rev'] = NULL;
$arguments534['target'] = NULL;
$arguments534['action'] = NULL;
$arguments534['controller'] = NULL;
$arguments534['extensionName'] = NULL;
$arguments534['pluginName'] = NULL;
$arguments534['pageUid'] = NULL;
$arguments534['pageType'] = NULL;
$arguments534['noCache'] = NULL;
$arguments534['language'] = NULL;
$arguments534['section'] = NULL;
$arguments534['format'] = NULL;
$arguments534['linkAccessRestrictedPages'] = NULL;
$arguments534['additionalParams'] = NULL;
$arguments534['absolute'] = NULL;
$arguments534['addQueryString'] = NULL;
$arguments534['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments534['addQueryStringMethod'] = NULL;
$arguments534['arguments'] = NULL;
$arguments534['action'] = 'list';
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array537);
$array538 = array (
);$array536['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array538);
$array539 = array (
);$array536['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array539);
$array540 = array (
);$array536['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array540);
$arguments534['arguments'] = $array536;

$output533 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output533 .= '
                    ';
return $output533;
};
$arguments528 = array();
$arguments528['then'] = NULL;
$arguments528['else'] = NULL;
$arguments528['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array530 = array();
$array531 = array (
);$array530['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array531);

$expression532 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments528['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression532(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array530)
					),
					$renderingContext
				);
$arguments528['__thenClosure'] = $renderChildrenClosure529;

$output496 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output496 .= '
                </div>
            ';
return $output496;
};
$arguments491 = array();
$arguments491['then'] = NULL;
$arguments491['else'] = NULL;
$arguments491['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array493 = array();
$array494 = array (
);$array493['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array494);
$array493['1'] = ' > 1';

$expression495 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments491['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression495(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array493)
					),
					$renderingContext
				);
$arguments491['__thenClosure'] = $renderChildrenClosure492;

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output458 .= '
            ';
return $output458;
};
$arguments456 = array();

$output455 .= '';

$output455 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments541 = array();
$arguments541['if'] = NULL;

$output455 .= '';

$output455 .= '
        ';
return $output455;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array453 = array (
);$array452['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array453);

$expression454 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
$arguments367['__thenClosure'] = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['action'] = NULL;
$arguments374['arguments'] = array (
);
$arguments374['controller'] = NULL;
$arguments374['extensionName'] = NULL;
$arguments374['pluginName'] = NULL;
$arguments374['pageUid'] = NULL;
$arguments374['pageType'] = 0;
$arguments374['noCache'] = NULL;
$arguments374['language'] = NULL;
$arguments374['section'] = '';
$arguments374['format'] = '';
$arguments374['linkAccessRestrictedPages'] = false;
$arguments374['additionalParams'] = array (
);
$arguments374['absolute'] = false;
$arguments374['addQueryString'] = false;
$arguments374['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments374['addQueryStringMethod'] = NULL;
$arguments374['action'] = 'show';
// Rendering Array
$array376 = array();
$array377 = array (
);$array376['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array377);
$arguments374['arguments'] = $array376;

$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext)]);

$output373 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array378 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array378)]);

$output373 .= '</h1>
                            <h2 class="donne-green product-price">';
$array379 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array379)]);

$output373 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array395 = array (
);
$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array395)]);

$output394 .= '" alt="alt';
$array396 = array (
);
$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array396)]);

$output394 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output394;
};
$arguments392 = array();

$output391 .= '';

$output391 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array400 = array (
);
$output399 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array400)]);

$output399 .= '" alt="alt';
$array401 = array (
);
$output399 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array401)]);

$output399 .= '">
                                </div>
                            ';
return $output399;
};
$arguments397 = array();
$arguments397['if'] = NULL;

$output391 .= '';

$output391 .= '
                        ';
return $output391;
};
$arguments380 = array();
$arguments380['then'] = NULL;
$arguments380['else'] = NULL;
$arguments380['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array388 = array();
$array389 = array (
);$array388['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array389);
$array388['1'] = ' == 0';

$expression390 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments380['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression390(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array388)
					),
					$renderingContext
				);
$arguments380['__thenClosure'] = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array383 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array383)]);

$output382 .= '" alt="alt';
$array384 = array (
);
$output382 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array384)]);

$output382 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output382;
};
$arguments380['__elseClosures'][] = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array386 = array (
);
$output385 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array386)]);

$output385 .= '" alt="alt';
$array387 = array (
);
$output385 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array387)]);

$output385 .= '">
                                </div>
                            ';
return $output385;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output373 .= '
                    </div>
                </a>
            ';
return $output373;
};
$arguments370 = array();
$arguments370['each'] = NULL;
$arguments370['as'] = NULL;
$arguments370['key'] = NULL;
$arguments370['reverse'] = false;
$arguments370['iteration'] = NULL;
$array372 = array (
);$arguments370['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array372);
$arguments370['as'] = 'produkt';

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments414 = array();
$arguments414['additionalAttributes'] = NULL;
$arguments414['data'] = NULL;
$arguments414['aria'] = NULL;
$arguments414['class'] = NULL;
$arguments414['dir'] = NULL;
$arguments414['id'] = NULL;
$arguments414['lang'] = NULL;
$arguments414['style'] = NULL;
$arguments414['title'] = NULL;
$arguments414['accesskey'] = NULL;
$arguments414['tabindex'] = NULL;
$arguments414['onclick'] = NULL;
$arguments414['name'] = NULL;
$arguments414['rel'] = NULL;
$arguments414['rev'] = NULL;
$arguments414['target'] = NULL;
$arguments414['action'] = NULL;
$arguments414['controller'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['pluginName'] = NULL;
$arguments414['pageUid'] = NULL;
$arguments414['pageType'] = NULL;
$arguments414['noCache'] = NULL;
$arguments414['language'] = NULL;
$arguments414['section'] = NULL;
$arguments414['format'] = NULL;
$arguments414['linkAccessRestrictedPages'] = NULL;
$arguments414['additionalParams'] = NULL;
$arguments414['absolute'] = NULL;
$arguments414['addQueryString'] = NULL;
$arguments414['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments414['addQueryStringMethod'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['action'] = 'list';
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array417);
$array418 = array (
);$array416['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array418);
$array419 = array (
);$array416['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array419);
$array420 = array (
);$array416['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array420);
$arguments414['arguments'] = $array416;

$output413 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output413 .= '
                    ';
return $output413;
};
$arguments408 = array();
$arguments408['then'] = NULL;
$arguments408['else'] = NULL;
$arguments408['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array411);

$expression412 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments408['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression412(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments408['__thenClosure'] = $renderChildrenClosure409;

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$array438 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array438)]);
};
$arguments425 = array();
$arguments425['additionalAttributes'] = NULL;
$arguments425['data'] = NULL;
$arguments425['aria'] = NULL;
$arguments425['class'] = NULL;
$arguments425['dir'] = NULL;
$arguments425['id'] = NULL;
$arguments425['lang'] = NULL;
$arguments425['style'] = NULL;
$arguments425['title'] = NULL;
$arguments425['accesskey'] = NULL;
$arguments425['tabindex'] = NULL;
$arguments425['onclick'] = NULL;
$arguments425['name'] = NULL;
$arguments425['rel'] = NULL;
$arguments425['rev'] = NULL;
$arguments425['target'] = NULL;
$arguments425['action'] = NULL;
$arguments425['controller'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['pluginName'] = NULL;
$arguments425['pageUid'] = NULL;
$arguments425['pageType'] = NULL;
$arguments425['noCache'] = NULL;
$arguments425['language'] = NULL;
$arguments425['section'] = NULL;
$arguments425['format'] = NULL;
$arguments425['linkAccessRestrictedPages'] = NULL;
$arguments425['additionalParams'] = NULL;
$arguments425['absolute'] = NULL;
$arguments425['addQueryString'] = NULL;
$arguments425['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments425['addQueryStringMethod'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array430);
$array429['1'] = '==';
$array431 = array (
);$array429['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array431);

$expression432 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression432(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['then'] = 'active';
$arguments425['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);
// Rendering Array
$array433 = array();
$array434 = array (
);$array433['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array434);
$array435 = array (
);$array433['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array435);
$array436 = array (
);$array433['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array436);
$array437 = array (
);$array433['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array437);
$arguments425['arguments'] = $array433;

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output424 .= '
                    ';
return $output424;
};
$arguments421 = array();
$arguments421['each'] = NULL;
$arguments421['as'] = NULL;
$arguments421['key'] = NULL;
$arguments421['reverse'] = false;
$arguments421['iteration'] = NULL;
$array423 = array (
);$arguments421['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array423);
$arguments421['as'] = 'pageNumber';

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output407 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments445 = array();
$arguments445['additionalAttributes'] = NULL;
$arguments445['data'] = NULL;
$arguments445['aria'] = NULL;
$arguments445['class'] = NULL;
$arguments445['dir'] = NULL;
$arguments445['id'] = NULL;
$arguments445['lang'] = NULL;
$arguments445['style'] = NULL;
$arguments445['title'] = NULL;
$arguments445['accesskey'] = NULL;
$arguments445['tabindex'] = NULL;
$arguments445['onclick'] = NULL;
$arguments445['name'] = NULL;
$arguments445['rel'] = NULL;
$arguments445['rev'] = NULL;
$arguments445['target'] = NULL;
$arguments445['action'] = NULL;
$arguments445['controller'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['pluginName'] = NULL;
$arguments445['pageUid'] = NULL;
$arguments445['pageType'] = NULL;
$arguments445['noCache'] = NULL;
$arguments445['language'] = NULL;
$arguments445['section'] = NULL;
$arguments445['format'] = NULL;
$arguments445['linkAccessRestrictedPages'] = NULL;
$arguments445['additionalParams'] = NULL;
$arguments445['absolute'] = NULL;
$arguments445['addQueryString'] = NULL;
$arguments445['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments445['addQueryStringMethod'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['action'] = 'list';
// Rendering Array
$array447 = array();
$array448 = array (
);$array447['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array448);
$array449 = array (
);$array447['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array449);
$array450 = array (
);$array447['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array450);
$array451 = array (
);$array447['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array451);
$arguments445['arguments'] = $array447;

$output444 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
                    ';
return $output444;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array442);

$expression443 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments439['__thenClosure'] = $renderChildrenClosure440;

$output407 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output407 .= '
                </div>
            ';
return $output407;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array405);
$array404['1'] = ' > 1';

$expression406 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = $renderChildrenClosure403;

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output369 .= '
            ';
return $output369;
};
$arguments367['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output274 .= '


    </div>  

';
return $output274;
};
$arguments272 = array();
$arguments272['name'] = NULL;
$arguments272['name'] = 'content';

$output269 .= NULL;

$output269 .= '

';

return $output269;
}


}
#