<?php

class Produkt_action_list_2f12001ee7c6f03f7a34ddd828bfc986954e2338 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output86 = '';

$output86 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments89 = array();
$arguments89['if'] = NULL;

$output86 .= '';

$output86 .= '
                    ';
return $output86;
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
$array83['1'] = ' == 0-50';

$expression85 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "0-50");};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
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
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments97 = array();

$output96 .= '';

$output96 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments99 = array();
$arguments99['if'] = NULL;

$output96 .= '';

$output96 .= '
                    ';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array94);
$array93['1'] = ' == 50-100';

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "50-100");};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};
$arguments109 = array();
$arguments109['if'] = NULL;

$output106 .= '';

$output106 .= '
                    ';
return $output106;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array104);
$array103['1'] = ' == 100-200';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "100-200");};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments101['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output0 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments119 = array();
$arguments119['if'] = NULL;

$output116 .= '';

$output116 .= '
                    ';
return $output116;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array114);
$array113['1'] = ' == 200';

$expression115 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 200);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output0 .= '  
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['action'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['controller'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['pluginName'] = NULL;
$arguments217['pageUid'] = NULL;
$arguments217['pageType'] = 0;
$arguments217['noCache'] = NULL;
$arguments217['language'] = NULL;
$arguments217['section'] = '';
$arguments217['format'] = '';
$arguments217['linkAccessRestrictedPages'] = false;
$arguments217['additionalParams'] = array (
);
$arguments217['absolute'] = false;
$arguments217['addQueryString'] = false;
$arguments217['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments217['addQueryStringMethod'] = NULL;
$arguments217['action'] = 'show';
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array220);
$arguments217['arguments'] = $array219;

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output216 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array221 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array221)]);

$output216 .= '</h1>
                            <h2 class="donne-green product-price">';
$array222 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array222)]);

$output216 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array238 = array (
);
$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array238)]);

$output237 .= '" alt="alt';
$array239 = array (
);
$output237 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array239)]);

$output237 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output237;
};
$arguments235 = array();

$output234 .= '';

$output234 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array243 = array (
);
$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array243)]);

$output242 .= '" alt="alt';
$array244 = array (
);
$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array244)]);

$output242 .= '">
                                </div>
                            ';
return $output242;
};
$arguments240 = array();
$arguments240['if'] = NULL;

$output234 .= '';

$output234 .= '
                        ';
return $output234;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array232);
$array231['1'] = ' == 0';

$expression233 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array226 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array226)]);

$output225 .= '" alt="alt';
$array227 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array227)]);

$output225 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output225;
};
$arguments223['__elseClosures'][] = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array229 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array229)]);

$output228 .= '" alt="alt';
$array230 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array230)]);

$output228 .= '">
                                </div>
                            ';
return $output228;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output216 .= '
                    </div>
                </a>
            ';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array215);
$arguments213['as'] = 'produkt';

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments257 = array();
$arguments257['additionalAttributes'] = NULL;
$arguments257['data'] = NULL;
$arguments257['aria'] = NULL;
$arguments257['class'] = NULL;
$arguments257['dir'] = NULL;
$arguments257['id'] = NULL;
$arguments257['lang'] = NULL;
$arguments257['style'] = NULL;
$arguments257['title'] = NULL;
$arguments257['accesskey'] = NULL;
$arguments257['tabindex'] = NULL;
$arguments257['onclick'] = NULL;
$arguments257['name'] = NULL;
$arguments257['rel'] = NULL;
$arguments257['rev'] = NULL;
$arguments257['target'] = NULL;
$arguments257['action'] = NULL;
$arguments257['controller'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['pluginName'] = NULL;
$arguments257['pageUid'] = NULL;
$arguments257['pageType'] = NULL;
$arguments257['noCache'] = NULL;
$arguments257['language'] = NULL;
$arguments257['section'] = NULL;
$arguments257['format'] = NULL;
$arguments257['linkAccessRestrictedPages'] = NULL;
$arguments257['additionalParams'] = NULL;
$arguments257['absolute'] = NULL;
$arguments257['addQueryString'] = NULL;
$arguments257['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments257['addQueryStringMethod'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['action'] = 'list';
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array260);
$array261 = array (
);$array259['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array261);
$array262 = array (
);$array259['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array262);
$array263 = array (
);$array259['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array263);
$arguments257['arguments'] = $array259;

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                    ';
return $output256;
};
$arguments251 = array();
$arguments251['then'] = NULL;
$arguments251['else'] = NULL;
$arguments251['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array253 = array();
$array254 = array (
);$array253['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array254);

$expression255 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments251['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression255(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array253)
					),
					$renderingContext
				);
$arguments251['__thenClosure'] = $renderChildrenClosure252;

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$array281 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array281)]);
};
$arguments268 = array();
$arguments268['additionalAttributes'] = NULL;
$arguments268['data'] = NULL;
$arguments268['aria'] = NULL;
$arguments268['class'] = NULL;
$arguments268['dir'] = NULL;
$arguments268['id'] = NULL;
$arguments268['lang'] = NULL;
$arguments268['style'] = NULL;
$arguments268['title'] = NULL;
$arguments268['accesskey'] = NULL;
$arguments268['tabindex'] = NULL;
$arguments268['onclick'] = NULL;
$arguments268['name'] = NULL;
$arguments268['rel'] = NULL;
$arguments268['rev'] = NULL;
$arguments268['target'] = NULL;
$arguments268['action'] = NULL;
$arguments268['controller'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['pluginName'] = NULL;
$arguments268['pageUid'] = NULL;
$arguments268['pageType'] = NULL;
$arguments268['noCache'] = NULL;
$arguments268['language'] = NULL;
$arguments268['section'] = NULL;
$arguments268['format'] = NULL;
$arguments268['linkAccessRestrictedPages'] = NULL;
$arguments268['additionalParams'] = NULL;
$arguments268['absolute'] = NULL;
$arguments268['addQueryString'] = NULL;
$arguments268['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments268['addQueryStringMethod'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array273);
$array272['1'] = '==';
$array274 = array (
);$array272['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array274);

$expression275 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments270['then'] = 'active';
$arguments268['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array277);
$array278 = array (
);$array276['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array278);
$array279 = array (
);$array276['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array279);
$array280 = array (
);$array276['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array280);
$arguments268['arguments'] = $array276;

$output267 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                    ';
return $output267;
};
$arguments264 = array();
$arguments264['each'] = NULL;
$arguments264['as'] = NULL;
$arguments264['key'] = NULL;
$arguments264['reverse'] = false;
$arguments264['iteration'] = NULL;
$array266 = array (
);$arguments264['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array266);
$arguments264['as'] = 'pageNumber';

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output250 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments288 = array();
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['aria'] = NULL;
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['name'] = NULL;
$arguments288['rel'] = NULL;
$arguments288['rev'] = NULL;
$arguments288['target'] = NULL;
$arguments288['action'] = NULL;
$arguments288['controller'] = NULL;
$arguments288['extensionName'] = NULL;
$arguments288['pluginName'] = NULL;
$arguments288['pageUid'] = NULL;
$arguments288['pageType'] = NULL;
$arguments288['noCache'] = NULL;
$arguments288['language'] = NULL;
$arguments288['section'] = NULL;
$arguments288['format'] = NULL;
$arguments288['linkAccessRestrictedPages'] = NULL;
$arguments288['additionalParams'] = NULL;
$arguments288['absolute'] = NULL;
$arguments288['addQueryString'] = NULL;
$arguments288['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments288['addQueryStringMethod'] = NULL;
$arguments288['arguments'] = NULL;
$arguments288['action'] = 'list';
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array291);
$array292 = array (
);$array290['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array292);
$array293 = array (
);$array290['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array293);
$array294 = array (
);$array290['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array294);
$arguments288['arguments'] = $array290;

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
                    ';
return $output287;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = $renderChildrenClosure283;

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output250 .= '
                </div>
            ';
return $output250;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array248);
$array247['1'] = ' > 1';

$expression249 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = $renderChildrenClosure246;

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output212 .= '
            ';
return $output212;
};
$arguments210 = array();

$output209 .= '';

$output209 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments295 = array();
$arguments295['if'] = NULL;

$output209 .= '';

$output209 .= '
        ';
return $output209;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['action'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['controller'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = 0;
$arguments128['noCache'] = NULL;
$arguments128['language'] = NULL;
$arguments128['section'] = '';
$arguments128['format'] = '';
$arguments128['linkAccessRestrictedPages'] = false;
$arguments128['additionalParams'] = array (
);
$arguments128['absolute'] = false;
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['action'] = 'show';
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array131);
$arguments128['arguments'] = $array130;

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array132 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array132)]);

$output127 .= '</h1>
                            <h2 class="donne-green product-price">';
$array133 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array133)]);

$output127 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array149 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array149)]);

$output148 .= '" alt="alt';
$array150 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array150)]);

$output148 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output148;
};
$arguments146 = array();

$output145 .= '';

$output145 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array154)]);

$output153 .= '" alt="alt';
$array155 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array155)]);

$output153 .= '">
                                </div>
                            ';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output145 .= '';

$output145 .= '
                        ';
return $output145;
};
$arguments134 = array();
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$arguments134['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array143);
$array142['1'] = ' == 0';

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments134['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments134['__thenClosure'] = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array137 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array137)]);

$output136 .= '" alt="alt';
$array138 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array138)]);

$output136 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output136;
};
$arguments134['__elseClosures'][] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array140)]);

$output139 .= '" alt="alt';
$array141 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array141)]);

$output139 .= '">
                                </div>
                            ';
return $output139;
};

$output127 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output127 .= '
                    </div>
                </a>
            ';
return $output127;
};
$arguments124 = array();
$arguments124['each'] = NULL;
$arguments124['as'] = NULL;
$arguments124['key'] = NULL;
$arguments124['reverse'] = false;
$arguments124['iteration'] = NULL;
$array126 = array (
);$arguments124['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array126);
$arguments124['as'] = 'produkt';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments168 = array();
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['aria'] = NULL;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$arguments168['name'] = NULL;
$arguments168['rel'] = NULL;
$arguments168['rev'] = NULL;
$arguments168['target'] = NULL;
$arguments168['action'] = NULL;
$arguments168['controller'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['pluginName'] = NULL;
$arguments168['pageUid'] = NULL;
$arguments168['pageType'] = NULL;
$arguments168['noCache'] = NULL;
$arguments168['language'] = NULL;
$arguments168['section'] = NULL;
$arguments168['format'] = NULL;
$arguments168['linkAccessRestrictedPages'] = NULL;
$arguments168['additionalParams'] = NULL;
$arguments168['absolute'] = NULL;
$arguments168['addQueryString'] = NULL;
$arguments168['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments168['addQueryStringMethod'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['action'] = 'list';
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array171);
$array172 = array (
);$array170['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array172);
$array173 = array (
);$array170['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array173);
$array174 = array (
);$array170['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array174);
$arguments168['arguments'] = $array170;

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
                    ';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array192 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array192)]);
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['aria'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$arguments179['action'] = NULL;
$arguments179['controller'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['pluginName'] = NULL;
$arguments179['pageUid'] = NULL;
$arguments179['pageType'] = NULL;
$arguments179['noCache'] = NULL;
$arguments179['language'] = NULL;
$arguments179['section'] = NULL;
$arguments179['format'] = NULL;
$arguments179['linkAccessRestrictedPages'] = NULL;
$arguments179['additionalParams'] = NULL;
$arguments179['absolute'] = NULL;
$arguments179['addQueryString'] = NULL;
$arguments179['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments179['addQueryStringMethod'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array184);
$array183['1'] = '==';
$array185 = array (
);$array183['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array185);

$expression186 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$arguments181['then'] = 'active';
$arguments179['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array188);
$array189 = array (
);$array187['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array189);
$array190 = array (
);$array187['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array190);
$array191 = array (
);$array187['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array191);
$arguments179['arguments'] = $array187;

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
                    ';
return $output178;
};
$arguments175 = array();
$arguments175['each'] = NULL;
$arguments175['as'] = NULL;
$arguments175['key'] = NULL;
$arguments175['reverse'] = false;
$arguments175['iteration'] = NULL;
$array177 = array (
);$arguments175['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array177);
$arguments175['as'] = 'pageNumber';

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output161 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments199 = array();
$arguments199['additionalAttributes'] = NULL;
$arguments199['data'] = NULL;
$arguments199['aria'] = NULL;
$arguments199['class'] = NULL;
$arguments199['dir'] = NULL;
$arguments199['id'] = NULL;
$arguments199['lang'] = NULL;
$arguments199['style'] = NULL;
$arguments199['title'] = NULL;
$arguments199['accesskey'] = NULL;
$arguments199['tabindex'] = NULL;
$arguments199['onclick'] = NULL;
$arguments199['name'] = NULL;
$arguments199['rel'] = NULL;
$arguments199['rev'] = NULL;
$arguments199['target'] = NULL;
$arguments199['action'] = NULL;
$arguments199['controller'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['pluginName'] = NULL;
$arguments199['pageUid'] = NULL;
$arguments199['pageType'] = NULL;
$arguments199['noCache'] = NULL;
$arguments199['language'] = NULL;
$arguments199['section'] = NULL;
$arguments199['format'] = NULL;
$arguments199['linkAccessRestrictedPages'] = NULL;
$arguments199['additionalParams'] = NULL;
$arguments199['absolute'] = NULL;
$arguments199['addQueryString'] = NULL;
$arguments199['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments199['addQueryStringMethod'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['action'] = 'list';
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array202);
$array203 = array (
);$array201['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array203);
$array204 = array (
);$array201['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array204);
$array205 = array (
);$array201['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array205);
$arguments199['arguments'] = $array201;

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
                    ';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output161 .= '
                </div>
            ';
return $output161;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array159);
$array158['1'] = ' > 1';

$expression160 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = $renderChildrenClosure157;

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output123 .= '
            ';
return $output123;
};
$arguments121['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

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
$output297 = '';

$output297 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['name'] = NULL;
$arguments298['name'] = 'Default';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output297 .= '

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
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['aria'] = NULL;
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['name'] = NULL;
$arguments303['rel'] = NULL;
$arguments303['rev'] = NULL;
$arguments303['target'] = NULL;
$arguments303['action'] = NULL;
$arguments303['controller'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['pluginName'] = NULL;
$arguments303['pageUid'] = NULL;
$arguments303['pageType'] = NULL;
$arguments303['noCache'] = NULL;
$arguments303['language'] = NULL;
$arguments303['section'] = NULL;
$arguments303['format'] = NULL;
$arguments303['linkAccessRestrictedPages'] = NULL;
$arguments303['additionalParams'] = NULL;
$arguments303['absolute'] = NULL;
$arguments303['addQueryString'] = NULL;
$arguments303['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments303['addQueryStringMethod'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['action'] = 'import';
$arguments303['class'] = 'donne-green';

$output302 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['action'] = NULL;
$arguments305['arguments'] = array (
);
$arguments305['controller'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['pluginName'] = NULL;
$arguments305['pageUid'] = NULL;
$arguments305['pageType'] = 0;
$arguments305['noCache'] = NULL;
$arguments305['language'] = NULL;
$arguments305['section'] = '';
$arguments305['format'] = '';
$arguments305['linkAccessRestrictedPages'] = false;
$arguments305['additionalParams'] = array (
);
$arguments305['absolute'] = false;
$arguments305['addQueryString'] = false;
$arguments305['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments305['addQueryStringMethod'] = NULL;
$arguments305['action'] = 'list';
$arguments305['controller'] = 'Produkt';

$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);

$output302 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array307 = array (
);
$output302 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array307)]);

$output302 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['additionalAttributes'] = NULL;
$arguments315['data'] = NULL;
$arguments315['aria'] = NULL;
$arguments315['name'] = NULL;
$arguments315['value'] = NULL;
$arguments315['property'] = NULL;
$arguments315['disabled'] = NULL;
$arguments315['errorClass'] = 'f3-form-error';
$arguments315['class'] = NULL;
$arguments315['dir'] = NULL;
$arguments315['id'] = NULL;
$arguments315['lang'] = NULL;
$arguments315['style'] = NULL;
$arguments315['title'] = NULL;
$arguments315['accesskey'] = NULL;
$arguments315['tabindex'] = NULL;
$arguments315['onclick'] = NULL;
$arguments315['checked'] = NULL;
$arguments315['multiple'] = false;
$output317 = '';

$output317 .= 'myCheckbox';
$array318 = array (
);
$output317 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array318);
$arguments315['id'] = $output317;
$arguments315['name'] = 'kategory[]';
$array319 = array (
);$arguments315['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array319);
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array320['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression321 = function($context) {return "{f";};
$arguments315['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);

$output314 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
                        ';
return $output314;
};
$arguments312 = array();

$output311 .= NULL;

$output311 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['value'] = NULL;
$arguments322['name'] = NULL;
$arguments322['name'] = 'test';
$arguments322['value'] = 0;
$renderChildrenClosure323 = ($arguments322['value'] !== null) ? function() use ($arguments322) { return $arguments322['value']; } : $renderChildrenClosure323;
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output311 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['value'] = NULL;
$arguments341['name'] = NULL;
$arguments341['name'] = 'test';
$arguments341['value'] = 1;
$renderChildrenClosure342 = ($arguments341['value'] !== null) ? function() use ($arguments341) { return $arguments341['value']; } : $renderChildrenClosure342;
$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= '
                                ';
return $output340;
};
$arguments338 = array();

$output337 .= '';

$output337 .= '
                            ';
return $output337;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array333 = array();
$array334 = array (
);$array333['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array334);
$array333['1'] = ' == ';
$array335 = array (
);$array333['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array335);

$expression336 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array333)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['value'] = NULL;
$arguments331['name'] = NULL;
$arguments331['name'] = 'test';
$arguments331['value'] = 1;
$renderChildrenClosure332 = ($arguments331['value'] !== null) ? function() use ($arguments331) { return $arguments331['value']; } : $renderChildrenClosure332;
$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output330 .= '
                                ';
return $output330;
};

$output327 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
                        ';
return $output327;
};
$arguments324 = array();
$arguments324['each'] = NULL;
$arguments324['as'] = NULL;
$arguments324['key'] = NULL;
$arguments324['reverse'] = false;
$arguments324['iteration'] = NULL;
$array326 = array (
);$arguments324['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array326);
$arguments324['as'] = 'selectedUid';

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output311 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output365 = '';

$output365 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['additionalAttributes'] = NULL;
$arguments366['data'] = NULL;
$arguments366['aria'] = NULL;
$arguments366['name'] = NULL;
$arguments366['value'] = NULL;
$arguments366['property'] = NULL;
$arguments366['disabled'] = NULL;
$arguments366['errorClass'] = 'f3-form-error';
$arguments366['class'] = NULL;
$arguments366['dir'] = NULL;
$arguments366['id'] = NULL;
$arguments366['lang'] = NULL;
$arguments366['style'] = NULL;
$arguments366['title'] = NULL;
$arguments366['accesskey'] = NULL;
$arguments366['tabindex'] = NULL;
$arguments366['onclick'] = NULL;
$arguments366['checked'] = NULL;
$arguments366['multiple'] = false;
$output368 = '';

$output368 .= 'myCheckbox';
$array369 = array (
);
$output368 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array369);
$arguments366['id'] = $output368;
$arguments366['onclick'] = 'submit()';
$arguments366['name'] = 'kategory[]';
$array370 = array (
);$arguments366['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array370);
// Rendering Boolean node
// Rendering Array
$array371 = array();
$array371['0'] = 'checked';

$expression372 = function($context) {return "checked";};
$arguments366['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array371)
					),
					$renderingContext
				);

$output365 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
                            ';
return $output365;
};
$arguments363 = array();

$output362 .= '';

$output362 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['additionalAttributes'] = NULL;
$arguments376['data'] = NULL;
$arguments376['aria'] = NULL;
$arguments376['name'] = NULL;
$arguments376['value'] = NULL;
$arguments376['property'] = NULL;
$arguments376['disabled'] = NULL;
$arguments376['errorClass'] = 'f3-form-error';
$arguments376['class'] = NULL;
$arguments376['dir'] = NULL;
$arguments376['id'] = NULL;
$arguments376['lang'] = NULL;
$arguments376['style'] = NULL;
$arguments376['title'] = NULL;
$arguments376['accesskey'] = NULL;
$arguments376['tabindex'] = NULL;
$arguments376['onclick'] = NULL;
$arguments376['checked'] = NULL;
$arguments376['multiple'] = false;
$output378 = '';

$output378 .= 'myCheckbox';
$array379 = array (
);
$output378 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array379);
$arguments376['id'] = $output378;
$arguments376['onclick'] = 'submit()';
$arguments376['name'] = 'kategory[]';
$array380 = array (
);$arguments376['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array380);

$output375 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
                            ';
return $output375;
};
$arguments373 = array();
$arguments373['if'] = NULL;

$output362 .= '';

$output362 .= '
                        ';
return $output362;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array360);
$array359['1'] = ' == 1';

$expression361 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['additionalAttributes'] = NULL;
$arguments346['data'] = NULL;
$arguments346['aria'] = NULL;
$arguments346['name'] = NULL;
$arguments346['value'] = NULL;
$arguments346['property'] = NULL;
$arguments346['disabled'] = NULL;
$arguments346['errorClass'] = 'f3-form-error';
$arguments346['class'] = NULL;
$arguments346['dir'] = NULL;
$arguments346['id'] = NULL;
$arguments346['lang'] = NULL;
$arguments346['style'] = NULL;
$arguments346['title'] = NULL;
$arguments346['accesskey'] = NULL;
$arguments346['tabindex'] = NULL;
$arguments346['onclick'] = NULL;
$arguments346['checked'] = NULL;
$arguments346['multiple'] = false;
$output348 = '';

$output348 .= 'myCheckbox';
$array349 = array (
);
$output348 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array349);
$arguments346['id'] = $output348;
$arguments346['onclick'] = 'submit()';
$arguments346['name'] = 'kategory[]';
$array350 = array (
);$arguments346['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array350);
// Rendering Boolean node
// Rendering Array
$array351 = array();
$array351['0'] = 'checked';

$expression352 = function($context) {return "checked";};
$arguments346['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array351)
					),
					$renderingContext
				);

$output345 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
                            ';
return $output345;
};
$arguments343['__elseClosures'][] = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['additionalAttributes'] = NULL;
$arguments354['data'] = NULL;
$arguments354['aria'] = NULL;
$arguments354['name'] = NULL;
$arguments354['value'] = NULL;
$arguments354['property'] = NULL;
$arguments354['disabled'] = NULL;
$arguments354['errorClass'] = 'f3-form-error';
$arguments354['class'] = NULL;
$arguments354['dir'] = NULL;
$arguments354['id'] = NULL;
$arguments354['lang'] = NULL;
$arguments354['style'] = NULL;
$arguments354['title'] = NULL;
$arguments354['accesskey'] = NULL;
$arguments354['tabindex'] = NULL;
$arguments354['onclick'] = NULL;
$arguments354['checked'] = NULL;
$arguments354['multiple'] = false;
$output356 = '';

$output356 .= 'myCheckbox';
$array357 = array (
);
$output356 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array357);
$arguments354['id'] = $output356;
$arguments354['onclick'] = 'submit()';
$arguments354['name'] = 'kategory[]';
$array358 = array (
);$arguments354['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array358);

$output353 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output353 .= '
                            ';
return $output353;
};

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output311 .= '
                         
                        <label class="donne" for="myCheckbox';
$array381 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array381)]);

$output311 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array382 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array382)]);

$output311 .= '</span>
                         </label>
                    </div>
                ';
return $output311;
};
$arguments308 = array();
$arguments308['each'] = NULL;
$arguments308['as'] = NULL;
$arguments308['key'] = NULL;
$arguments308['reverse'] = false;
$arguments308['iteration'] = NULL;
$array310 = array (
);$arguments308['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array310);
$arguments308['as'] = 'kategory';

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output302 .= '
                
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments389 = array();

$output388 .= '';

$output388 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments391 = array();
$arguments391['if'] = NULL;

$output388 .= '';

$output388 .= '
                    ';
return $output388;
};
$arguments383 = array();
$arguments383['then'] = NULL;
$arguments383['else'] = NULL;
$arguments383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array386 = array (
);$array385['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array386);
$array385['1'] = ' == 0-50';

$expression387 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "0-50");};
$arguments383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
$arguments383['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments383['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output302 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments399 = array();

$output398 .= '';

$output398 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments401 = array();
$arguments401['if'] = NULL;

$output398 .= '';

$output398 .= '
                    ';
return $output398;
};
$arguments393 = array();
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$arguments393['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array396);
$array395['1'] = ' == 50-100';

$expression397 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "50-100");};
$arguments393['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments393['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments393['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output302 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments409 = array();

$output408 .= '';

$output408 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};
$arguments411 = array();
$arguments411['if'] = NULL;

$output408 .= '';

$output408 .= '
                    ';
return $output408;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array406);
$array405['1'] = ' == 100-200';

$expression407 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "100-200");};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
$arguments403['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments403['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output302 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments419 = array();

$output418 .= '';

$output418 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments421 = array();
$arguments421['if'] = NULL;

$output418 .= '';

$output418 .= '
                    ';
return $output418;
};
$arguments413 = array();
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = array();
$array416 = array (
);$array415['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array416);
$array415['1'] = ' == 200';

$expression417 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 200);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression417(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments413['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output302 .= '  
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['action'] = NULL;
$arguments519['arguments'] = array (
);
$arguments519['controller'] = NULL;
$arguments519['extensionName'] = NULL;
$arguments519['pluginName'] = NULL;
$arguments519['pageUid'] = NULL;
$arguments519['pageType'] = 0;
$arguments519['noCache'] = NULL;
$arguments519['language'] = NULL;
$arguments519['section'] = '';
$arguments519['format'] = '';
$arguments519['linkAccessRestrictedPages'] = false;
$arguments519['additionalParams'] = array (
);
$arguments519['absolute'] = false;
$arguments519['addQueryString'] = false;
$arguments519['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments519['addQueryStringMethod'] = NULL;
$arguments519['action'] = 'show';
// Rendering Array
$array521 = array();
$array522 = array (
);$array521['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array522);
$arguments519['arguments'] = $array521;

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext)]);

$output518 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array523 = array (
);
$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array523)]);

$output518 .= '</h1>
                            <h2 class="donne-green product-price">';
$array524 = array (
);
$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array524)]);

$output518 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$output536 = '';

$output536 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$output539 = '';

$output539 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array540 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array540)]);

$output539 .= '" alt="alt';
$array541 = array (
);
$output539 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array541)]);

$output539 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output539;
};
$arguments537 = array();

$output536 .= '';

$output536 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array545 = array (
);
$output544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array545)]);

$output544 .= '" alt="alt';
$array546 = array (
);
$output544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array546)]);

$output544 .= '">
                                </div>
                            ';
return $output544;
};
$arguments542 = array();
$arguments542['if'] = NULL;

$output536 .= '';

$output536 .= '
                        ';
return $output536;
};
$arguments525 = array();
$arguments525['then'] = NULL;
$arguments525['else'] = NULL;
$arguments525['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array533 = array();
$array534 = array (
);$array533['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array534);
$array533['1'] = ' == 0';

$expression535 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments525['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression535(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array533)
					),
					$renderingContext
				);
$arguments525['__thenClosure'] = function() use ($renderingContext, $self) {
$output527 = '';

$output527 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array528 = array (
);
$output527 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array528)]);

$output527 .= '" alt="alt';
$array529 = array (
);
$output527 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array529)]);

$output527 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output527;
};
$arguments525['__elseClosures'][] = function() use ($renderingContext, $self) {
$output530 = '';

$output530 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array531 = array (
);
$output530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array531)]);

$output530 .= '" alt="alt';
$array532 = array (
);
$output530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array532)]);

$output530 .= '">
                                </div>
                            ';
return $output530;
};

$output518 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output518 .= '
                    </div>
                </a>
            ';
return $output518;
};
$arguments515 = array();
$arguments515['each'] = NULL;
$arguments515['as'] = NULL;
$arguments515['key'] = NULL;
$arguments515['reverse'] = false;
$arguments515['iteration'] = NULL;
$array517 = array (
);$arguments515['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array517);
$arguments515['as'] = 'produkt';

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$output514 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$output552 = '';

$output552 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments559 = array();
$arguments559['additionalAttributes'] = NULL;
$arguments559['data'] = NULL;
$arguments559['aria'] = NULL;
$arguments559['class'] = NULL;
$arguments559['dir'] = NULL;
$arguments559['id'] = NULL;
$arguments559['lang'] = NULL;
$arguments559['style'] = NULL;
$arguments559['title'] = NULL;
$arguments559['accesskey'] = NULL;
$arguments559['tabindex'] = NULL;
$arguments559['onclick'] = NULL;
$arguments559['name'] = NULL;
$arguments559['rel'] = NULL;
$arguments559['rev'] = NULL;
$arguments559['target'] = NULL;
$arguments559['action'] = NULL;
$arguments559['controller'] = NULL;
$arguments559['extensionName'] = NULL;
$arguments559['pluginName'] = NULL;
$arguments559['pageUid'] = NULL;
$arguments559['pageType'] = NULL;
$arguments559['noCache'] = NULL;
$arguments559['language'] = NULL;
$arguments559['section'] = NULL;
$arguments559['format'] = NULL;
$arguments559['linkAccessRestrictedPages'] = NULL;
$arguments559['additionalParams'] = NULL;
$arguments559['absolute'] = NULL;
$arguments559['addQueryString'] = NULL;
$arguments559['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments559['addQueryStringMethod'] = NULL;
$arguments559['arguments'] = NULL;
$arguments559['action'] = 'list';
// Rendering Array
$array561 = array();
$array562 = array (
);$array561['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array562);
$array563 = array (
);$array561['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array563);
$array564 = array (
);$array561['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array564);
$array565 = array (
);$array561['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array565);
$arguments559['arguments'] = $array561;

$output558 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
                    ';
return $output558;
};
$arguments553 = array();
$arguments553['then'] = NULL;
$arguments553['else'] = NULL;
$arguments553['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array555 = array();
$array556 = array (
);$array555['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array556);

$expression557 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments553['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression557(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array555)
					),
					$renderingContext
				);
$arguments553['__thenClosure'] = $renderChildrenClosure554;

$output552 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$array583 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array583)]);
};
$arguments570 = array();
$arguments570['additionalAttributes'] = NULL;
$arguments570['data'] = NULL;
$arguments570['aria'] = NULL;
$arguments570['class'] = NULL;
$arguments570['dir'] = NULL;
$arguments570['id'] = NULL;
$arguments570['lang'] = NULL;
$arguments570['style'] = NULL;
$arguments570['title'] = NULL;
$arguments570['accesskey'] = NULL;
$arguments570['tabindex'] = NULL;
$arguments570['onclick'] = NULL;
$arguments570['name'] = NULL;
$arguments570['rel'] = NULL;
$arguments570['rev'] = NULL;
$arguments570['target'] = NULL;
$arguments570['action'] = NULL;
$arguments570['controller'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['pluginName'] = NULL;
$arguments570['pageUid'] = NULL;
$arguments570['pageType'] = NULL;
$arguments570['noCache'] = NULL;
$arguments570['language'] = NULL;
$arguments570['section'] = NULL;
$arguments570['format'] = NULL;
$arguments570['linkAccessRestrictedPages'] = NULL;
$arguments570['additionalParams'] = NULL;
$arguments570['absolute'] = NULL;
$arguments570['addQueryString'] = NULL;
$arguments570['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments570['addQueryStringMethod'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$arguments572['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array575);
$array574['1'] = '==';
$array576 = array (
);$array574['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array576);

$expression577 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments572['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression577(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments572['then'] = 'active';
$arguments570['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);
// Rendering Array
$array578 = array();
$array579 = array (
);$array578['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array579);
$array580 = array (
);$array578['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array580);
$array581 = array (
);$array578['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array581);
$array582 = array (
);$array578['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array582);
$arguments570['arguments'] = $array578;

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
                    ';
return $output569;
};
$arguments566 = array();
$arguments566['each'] = NULL;
$arguments566['as'] = NULL;
$arguments566['key'] = NULL;
$arguments566['reverse'] = false;
$arguments566['iteration'] = NULL;
$array568 = array (
);$arguments566['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array568);
$arguments566['as'] = 'pageNumber';

$output552 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output552 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments590 = array();
$arguments590['additionalAttributes'] = NULL;
$arguments590['data'] = NULL;
$arguments590['aria'] = NULL;
$arguments590['class'] = NULL;
$arguments590['dir'] = NULL;
$arguments590['id'] = NULL;
$arguments590['lang'] = NULL;
$arguments590['style'] = NULL;
$arguments590['title'] = NULL;
$arguments590['accesskey'] = NULL;
$arguments590['tabindex'] = NULL;
$arguments590['onclick'] = NULL;
$arguments590['name'] = NULL;
$arguments590['rel'] = NULL;
$arguments590['rev'] = NULL;
$arguments590['target'] = NULL;
$arguments590['action'] = NULL;
$arguments590['controller'] = NULL;
$arguments590['extensionName'] = NULL;
$arguments590['pluginName'] = NULL;
$arguments590['pageUid'] = NULL;
$arguments590['pageType'] = NULL;
$arguments590['noCache'] = NULL;
$arguments590['language'] = NULL;
$arguments590['section'] = NULL;
$arguments590['format'] = NULL;
$arguments590['linkAccessRestrictedPages'] = NULL;
$arguments590['additionalParams'] = NULL;
$arguments590['absolute'] = NULL;
$arguments590['addQueryString'] = NULL;
$arguments590['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments590['addQueryStringMethod'] = NULL;
$arguments590['arguments'] = NULL;
$arguments590['action'] = 'list';
// Rendering Array
$array592 = array();
$array593 = array (
);$array592['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array593);
$array594 = array (
);$array592['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array594);
$array595 = array (
);$array592['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array595);
$array596 = array (
);$array592['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array596);
$arguments590['arguments'] = $array592;

$output589 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output589 .= '
                    ';
return $output589;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array586 = array();
$array587 = array (
);$array586['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array587);

$expression588 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array586)
					),
					$renderingContext
				);
$arguments584['__thenClosure'] = $renderChildrenClosure585;

$output552 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output552 .= '
                </div>
            ';
return $output552;
};
$arguments547 = array();
$arguments547['then'] = NULL;
$arguments547['else'] = NULL;
$arguments547['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array549 = array();
$array550 = array (
);$array549['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array550);
$array549['1'] = ' > 1';

$expression551 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments547['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression551(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array549)
					),
					$renderingContext
				);
$arguments547['__thenClosure'] = $renderChildrenClosure548;

$output514 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$output514 .= '
            ';
return $output514;
};
$arguments512 = array();

$output511 .= '';

$output511 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments597 = array();
$arguments597['if'] = NULL;

$output511 .= '';

$output511 .= '
        ';
return $output511;
};
$arguments423 = array();
$arguments423['then'] = NULL;
$arguments423['else'] = NULL;
$arguments423['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array508 = array();
$array509 = array (
);$array508['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array509);

$expression510 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments423['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression510(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array508)
					),
					$renderingContext
				);
$arguments423['__thenClosure'] = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['action'] = NULL;
$arguments430['arguments'] = array (
);
$arguments430['controller'] = NULL;
$arguments430['extensionName'] = NULL;
$arguments430['pluginName'] = NULL;
$arguments430['pageUid'] = NULL;
$arguments430['pageType'] = 0;
$arguments430['noCache'] = NULL;
$arguments430['language'] = NULL;
$arguments430['section'] = '';
$arguments430['format'] = '';
$arguments430['linkAccessRestrictedPages'] = false;
$arguments430['additionalParams'] = array (
);
$arguments430['absolute'] = false;
$arguments430['addQueryString'] = false;
$arguments430['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments430['addQueryStringMethod'] = NULL;
$arguments430['action'] = 'show';
// Rendering Array
$array432 = array();
$array433 = array (
);$array432['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array433);
$arguments430['arguments'] = $array432;

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output429 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array434 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array434)]);

$output429 .= '</h1>
                            <h2 class="donne-green product-price">';
$array435 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array435)]);

$output429 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                                <div class="out-of-stock zoom">
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
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output450;
};
$arguments448 = array();

$output447 .= '';

$output447 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array456 = array (
);
$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array456)]);

$output455 .= '" alt="alt';
$array457 = array (
);
$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array457)]);

$output455 .= '">
                                </div>
                            ';
return $output455;
};
$arguments453 = array();
$arguments453['if'] = NULL;

$output447 .= '';

$output447 .= '
                        ';
return $output447;
};
$arguments436 = array();
$arguments436['then'] = NULL;
$arguments436['else'] = NULL;
$arguments436['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array445);
$array444['1'] = ' == 0';

$expression446 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments436['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments436['__thenClosure'] = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array439 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array439)]);

$output438 .= '" alt="alt';
$array440 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array440)]);

$output438 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output438;
};
$arguments436['__elseClosures'][] = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array442 = array (
);
$output441 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array442)]);

$output441 .= '" alt="alt';
$array443 = array (
);
$output441 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array443)]);

$output441 .= '">
                                </div>
                            ';
return $output441;
};

$output429 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output429 .= '
                    </div>
                </a>
            ';
return $output429;
};
$arguments426 = array();
$arguments426['each'] = NULL;
$arguments426['as'] = NULL;
$arguments426['key'] = NULL;
$arguments426['reverse'] = false;
$arguments426['iteration'] = NULL;
$array428 = array (
);$arguments426['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array428);
$arguments426['as'] = 'produkt';

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments470 = array();
$arguments470['additionalAttributes'] = NULL;
$arguments470['data'] = NULL;
$arguments470['aria'] = NULL;
$arguments470['class'] = NULL;
$arguments470['dir'] = NULL;
$arguments470['id'] = NULL;
$arguments470['lang'] = NULL;
$arguments470['style'] = NULL;
$arguments470['title'] = NULL;
$arguments470['accesskey'] = NULL;
$arguments470['tabindex'] = NULL;
$arguments470['onclick'] = NULL;
$arguments470['name'] = NULL;
$arguments470['rel'] = NULL;
$arguments470['rev'] = NULL;
$arguments470['target'] = NULL;
$arguments470['action'] = NULL;
$arguments470['controller'] = NULL;
$arguments470['extensionName'] = NULL;
$arguments470['pluginName'] = NULL;
$arguments470['pageUid'] = NULL;
$arguments470['pageType'] = NULL;
$arguments470['noCache'] = NULL;
$arguments470['language'] = NULL;
$arguments470['section'] = NULL;
$arguments470['format'] = NULL;
$arguments470['linkAccessRestrictedPages'] = NULL;
$arguments470['additionalParams'] = NULL;
$arguments470['absolute'] = NULL;
$arguments470['addQueryString'] = NULL;
$arguments470['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments470['addQueryStringMethod'] = NULL;
$arguments470['arguments'] = NULL;
$arguments470['action'] = 'list';
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array473);
$array474 = array (
);$array472['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array474);
$array475 = array (
);$array472['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array475);
$array476 = array (
);$array472['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array476);
$arguments470['arguments'] = $array472;

$output469 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                    ';
return $output469;
};
$arguments464 = array();
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$arguments464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array467);

$expression468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments464['__thenClosure'] = $renderChildrenClosure465;

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$array494 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array494)]);
};
$arguments481 = array();
$arguments481['additionalAttributes'] = NULL;
$arguments481['data'] = NULL;
$arguments481['aria'] = NULL;
$arguments481['class'] = NULL;
$arguments481['dir'] = NULL;
$arguments481['id'] = NULL;
$arguments481['lang'] = NULL;
$arguments481['style'] = NULL;
$arguments481['title'] = NULL;
$arguments481['accesskey'] = NULL;
$arguments481['tabindex'] = NULL;
$arguments481['onclick'] = NULL;
$arguments481['name'] = NULL;
$arguments481['rel'] = NULL;
$arguments481['rev'] = NULL;
$arguments481['target'] = NULL;
$arguments481['action'] = NULL;
$arguments481['controller'] = NULL;
$arguments481['extensionName'] = NULL;
$arguments481['pluginName'] = NULL;
$arguments481['pageUid'] = NULL;
$arguments481['pageType'] = NULL;
$arguments481['noCache'] = NULL;
$arguments481['language'] = NULL;
$arguments481['section'] = NULL;
$arguments481['format'] = NULL;
$arguments481['linkAccessRestrictedPages'] = NULL;
$arguments481['additionalParams'] = NULL;
$arguments481['absolute'] = NULL;
$arguments481['addQueryString'] = NULL;
$arguments481['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments481['addQueryStringMethod'] = NULL;
$arguments481['arguments'] = NULL;
$arguments481['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$arguments483['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array485 = array();
$array486 = array (
);$array485['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array486);
$array485['1'] = '==';
$array487 = array (
);$array485['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array487);

$expression488 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments483['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array485)
					),
					$renderingContext
				);
$arguments483['then'] = 'active';
$arguments481['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);
// Rendering Array
$array489 = array();
$array490 = array (
);$array489['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array490);
$array491 = array (
);$array489['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array491);
$array492 = array (
);$array489['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array492);
$array493 = array (
);$array489['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array493);
$arguments481['arguments'] = $array489;

$output480 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '
                    ';
return $output480;
};
$arguments477 = array();
$arguments477['each'] = NULL;
$arguments477['as'] = NULL;
$arguments477['key'] = NULL;
$arguments477['reverse'] = false;
$arguments477['iteration'] = NULL;
$array479 = array (
);$arguments477['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array479);
$arguments477['as'] = 'pageNumber';

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output463 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments501 = array();
$arguments501['additionalAttributes'] = NULL;
$arguments501['data'] = NULL;
$arguments501['aria'] = NULL;
$arguments501['class'] = NULL;
$arguments501['dir'] = NULL;
$arguments501['id'] = NULL;
$arguments501['lang'] = NULL;
$arguments501['style'] = NULL;
$arguments501['title'] = NULL;
$arguments501['accesskey'] = NULL;
$arguments501['tabindex'] = NULL;
$arguments501['onclick'] = NULL;
$arguments501['name'] = NULL;
$arguments501['rel'] = NULL;
$arguments501['rev'] = NULL;
$arguments501['target'] = NULL;
$arguments501['action'] = NULL;
$arguments501['controller'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['pluginName'] = NULL;
$arguments501['pageUid'] = NULL;
$arguments501['pageType'] = NULL;
$arguments501['noCache'] = NULL;
$arguments501['language'] = NULL;
$arguments501['section'] = NULL;
$arguments501['format'] = NULL;
$arguments501['linkAccessRestrictedPages'] = NULL;
$arguments501['additionalParams'] = NULL;
$arguments501['absolute'] = NULL;
$arguments501['addQueryString'] = NULL;
$arguments501['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments501['addQueryStringMethod'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['action'] = 'list';
// Rendering Array
$array503 = array();
$array504 = array (
);$array503['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array504);
$array505 = array (
);$array503['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array505);
$array506 = array (
);$array503['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array506);
$array507 = array (
);$array503['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array507);
$arguments501['arguments'] = $array503;

$output500 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
                    ';
return $output500;
};
$arguments495 = array();
$arguments495['then'] = NULL;
$arguments495['else'] = NULL;
$arguments495['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = array();
$array498 = array (
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments495['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments495['__thenClosure'] = $renderChildrenClosure496;

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output463 .= '
                </div>
            ';
return $output463;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array461);
$array460['1'] = ' > 1';

$expression462 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$arguments458['__thenClosure'] = $renderChildrenClosure459;

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output425 .= '
            ';
return $output425;
};
$arguments423['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output302 .= '


    </div>  

';
return $output302;
};
$arguments300 = array();
$arguments300['name'] = NULL;
$arguments300['name'] = 'content';

$output297 .= NULL;

$output297 .= '

';

return $output297;
}


}
#