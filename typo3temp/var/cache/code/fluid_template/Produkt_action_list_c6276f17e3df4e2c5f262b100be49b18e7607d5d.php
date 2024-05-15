<?php

class Produkt_action_list_c6276f17e3df4e2c5f262b100be49b18e7607d5d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                     <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                    <a  >';
$array91 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array91)]);

$output0 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['action'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['controller'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['pluginName'] = NULL;
$arguments188['pageUid'] = NULL;
$arguments188['pageType'] = 0;
$arguments188['noCache'] = NULL;
$arguments188['language'] = NULL;
$arguments188['section'] = '';
$arguments188['format'] = '';
$arguments188['linkAccessRestrictedPages'] = false;
$arguments188['additionalParams'] = array (
);
$arguments188['absolute'] = false;
$arguments188['addQueryString'] = false;
$arguments188['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments188['addQueryStringMethod'] = NULL;
$arguments188['action'] = 'show';
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array191);
$arguments188['arguments'] = $array190;

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output187 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array192 = array (
);
$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array192)]);

$output187 .= '</h1>
                            <h2 class="donne-green product-price">';
$array193 = array (
);
$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array193)]);

$output187 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array209 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array209)]);

$output208 .= '" alt="alt';
$array210 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array210)]);

$output208 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output208;
};
$arguments206 = array();

$output205 .= '';

$output205 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array214 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array214)]);

$output213 .= '" alt="alt';
$array215 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array215)]);

$output213 .= '">
                                </div>
                            ';
return $output213;
};
$arguments211 = array();
$arguments211['if'] = NULL;

$output205 .= '';

$output205 .= '
                        ';
return $output205;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array203);
$array202['1'] = ' == 0';

$expression204 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array197 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array197)]);

$output196 .= '" alt="alt';
$array198 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array198)]);

$output196 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output196;
};
$arguments194['__elseClosures'][] = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array200 = array (
);
$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array200)]);

$output199 .= '" alt="alt';
$array201 = array (
);
$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array201)]);

$output199 .= '">
                                </div>
                            ';
return $output199;
};

$output187 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output187 .= '
                    </div>
                </a>
            ';
return $output187;
};
$arguments184 = array();
$arguments184['each'] = NULL;
$arguments184['as'] = NULL;
$arguments184['key'] = NULL;
$arguments184['reverse'] = false;
$arguments184['iteration'] = NULL;
$array186 = array (
);$arguments184['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array186);
$arguments184['as'] = 'produkt';

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return '&lt;';
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
// Rendering Array
$array230 = array();
$array231 = array (
);$array230['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array231);
$array232 = array (
);$array230['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array232);
$array233 = array (
);$array230['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array233);
$array234 = array (
);$array230['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array234);
$arguments228['arguments'] = $array230;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                    ';
return $output227;
};
$arguments222 = array();
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array225);

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output221 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array252 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array252)]);
};
$arguments239 = array();
$arguments239['additionalAttributes'] = NULL;
$arguments239['data'] = NULL;
$arguments239['aria'] = NULL;
$arguments239['class'] = NULL;
$arguments239['dir'] = NULL;
$arguments239['id'] = NULL;
$arguments239['lang'] = NULL;
$arguments239['style'] = NULL;
$arguments239['title'] = NULL;
$arguments239['accesskey'] = NULL;
$arguments239['tabindex'] = NULL;
$arguments239['onclick'] = NULL;
$arguments239['name'] = NULL;
$arguments239['rel'] = NULL;
$arguments239['rev'] = NULL;
$arguments239['target'] = NULL;
$arguments239['action'] = NULL;
$arguments239['controller'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['pluginName'] = NULL;
$arguments239['pageUid'] = NULL;
$arguments239['pageType'] = NULL;
$arguments239['noCache'] = NULL;
$arguments239['language'] = NULL;
$arguments239['section'] = NULL;
$arguments239['format'] = NULL;
$arguments239['linkAccessRestrictedPages'] = NULL;
$arguments239['additionalParams'] = NULL;
$arguments239['absolute'] = NULL;
$arguments239['addQueryString'] = NULL;
$arguments239['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments239['addQueryStringMethod'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array244);
$array243['1'] = '==';
$array245 = array (
);$array243['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array245);

$expression246 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['then'] = 'active';
$arguments239['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array248);
$array249 = array (
);$array247['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array249);
$array250 = array (
);$array247['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array250);
$array251 = array (
);$array247['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array251);
$arguments239['arguments'] = $array247;

$output238 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
                    ';
return $output238;
};
$arguments235 = array();
$arguments235['each'] = NULL;
$arguments235['as'] = NULL;
$arguments235['key'] = NULL;
$arguments235['reverse'] = false;
$arguments235['iteration'] = NULL;
$array237 = array (
);$arguments235['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array237);
$arguments235['as'] = 'pageNumber';

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output221 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments259 = array();
$arguments259['additionalAttributes'] = NULL;
$arguments259['data'] = NULL;
$arguments259['aria'] = NULL;
$arguments259['class'] = NULL;
$arguments259['dir'] = NULL;
$arguments259['id'] = NULL;
$arguments259['lang'] = NULL;
$arguments259['style'] = NULL;
$arguments259['title'] = NULL;
$arguments259['accesskey'] = NULL;
$arguments259['tabindex'] = NULL;
$arguments259['onclick'] = NULL;
$arguments259['name'] = NULL;
$arguments259['rel'] = NULL;
$arguments259['rev'] = NULL;
$arguments259['target'] = NULL;
$arguments259['action'] = NULL;
$arguments259['controller'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['pluginName'] = NULL;
$arguments259['pageUid'] = NULL;
$arguments259['pageType'] = NULL;
$arguments259['noCache'] = NULL;
$arguments259['language'] = NULL;
$arguments259['section'] = NULL;
$arguments259['format'] = NULL;
$arguments259['linkAccessRestrictedPages'] = NULL;
$arguments259['additionalParams'] = NULL;
$arguments259['absolute'] = NULL;
$arguments259['addQueryString'] = NULL;
$arguments259['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments259['addQueryStringMethod'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['action'] = 'list';
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array262);
$array263 = array (
);$array261['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array263);
$array264 = array (
);$array261['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array264);
$array265 = array (
);$array261['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array265);
$arguments259['arguments'] = $array261;

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
                    ';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array256);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output221 .= '
                </div>
            ';
return $output221;
};
$arguments216 = array();
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array219);
$array218['1'] = ' > 1';

$expression220 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments216['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments216['__thenClosure'] = $renderChildrenClosure217;

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output183 .= '
            ';
return $output183;
};
$arguments181 = array();

$output180 .= '';

$output180 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments266 = array();
$arguments266['if'] = NULL;

$output180 .= '';

$output180 .= '
        ';
return $output180;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array178);

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['action'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['controller'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = 0;
$arguments99['noCache'] = NULL;
$arguments99['language'] = NULL;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['linkAccessRestrictedPages'] = false;
$arguments99['additionalParams'] = array (
);
$arguments99['absolute'] = false;
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['addQueryStringMethod'] = NULL;
$arguments99['action'] = 'show';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array102);
$arguments99['arguments'] = $array101;

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output98 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array103 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array103)]);

$output98 .= '</h1>
                            <h2 class="donne-green product-price">';
$array104 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array104)]);

$output98 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array120)]);

$output119 .= '" alt="alt';
$array121 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array121)]);

$output119 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array125)]);

$output124 .= '" alt="alt';
$array126 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array126)]);

$output124 .= '">
                                </div>
                            ';
return $output124;
};
$arguments122 = array();
$arguments122['if'] = NULL;

$output116 .= '';

$output116 .= '
                        ';
return $output116;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array114);
$array113['1'] = ' == 0';

$expression115 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array108)]);

$output107 .= '" alt="alt';
$array109 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array109)]);

$output107 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output107;
};
$arguments105['__elseClosures'][] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array111 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array111)]);

$output110 .= '" alt="alt';
$array112 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array112)]);

$output110 .= '">
                                </div>
                            ';
return $output110;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output98 .= '
                    </div>
                </a>
            ';
return $output98;
};
$arguments95 = array();
$arguments95['each'] = NULL;
$arguments95['as'] = NULL;
$arguments95['key'] = NULL;
$arguments95['reverse'] = false;
$arguments95['iteration'] = NULL;
$array97 = array (
);$arguments95['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array97);
$arguments95['as'] = 'produkt';

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return '&lt;';
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
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array142);
$array143 = array (
);$array141['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array143);
$array144 = array (
);$array141['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array144);
$array145 = array (
);$array141['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array145);
$arguments139['arguments'] = $array141;

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                    ';
return $output138;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['__thenClosure'] = $renderChildrenClosure134;

$output132 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array163 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array163)]);
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['aria'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['name'] = NULL;
$arguments150['rel'] = NULL;
$arguments150['rev'] = NULL;
$arguments150['target'] = NULL;
$arguments150['action'] = NULL;
$arguments150['controller'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['pluginName'] = NULL;
$arguments150['pageUid'] = NULL;
$arguments150['pageType'] = NULL;
$arguments150['noCache'] = NULL;
$arguments150['language'] = NULL;
$arguments150['section'] = NULL;
$arguments150['format'] = NULL;
$arguments150['linkAccessRestrictedPages'] = NULL;
$arguments150['additionalParams'] = NULL;
$arguments150['absolute'] = NULL;
$arguments150['addQueryString'] = NULL;
$arguments150['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments150['addQueryStringMethod'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array155);
$array154['1'] = '==';
$array156 = array (
);$array154['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array156);

$expression157 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['then'] = 'active';
$arguments150['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array159);
$array160 = array (
);$array158['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array160);
$array161 = array (
);$array158['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array161);
$array162 = array (
);$array158['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array162);
$arguments150['arguments'] = $array158;

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
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
);$arguments146['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array148);
$arguments146['as'] = 'pageNumber';

$output132 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments170 = array();
$arguments170['additionalAttributes'] = NULL;
$arguments170['data'] = NULL;
$arguments170['aria'] = NULL;
$arguments170['class'] = NULL;
$arguments170['dir'] = NULL;
$arguments170['id'] = NULL;
$arguments170['lang'] = NULL;
$arguments170['style'] = NULL;
$arguments170['title'] = NULL;
$arguments170['accesskey'] = NULL;
$arguments170['tabindex'] = NULL;
$arguments170['onclick'] = NULL;
$arguments170['name'] = NULL;
$arguments170['rel'] = NULL;
$arguments170['rev'] = NULL;
$arguments170['target'] = NULL;
$arguments170['action'] = NULL;
$arguments170['controller'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['pluginName'] = NULL;
$arguments170['pageUid'] = NULL;
$arguments170['pageType'] = NULL;
$arguments170['noCache'] = NULL;
$arguments170['language'] = NULL;
$arguments170['section'] = NULL;
$arguments170['format'] = NULL;
$arguments170['linkAccessRestrictedPages'] = NULL;
$arguments170['additionalParams'] = NULL;
$arguments170['absolute'] = NULL;
$arguments170['addQueryString'] = NULL;
$arguments170['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments170['addQueryStringMethod'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['action'] = 'list';
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array173);
$array174 = array (
);$array172['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array174);
$array175 = array (
);$array172['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array175);
$array176 = array (
);$array172['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array176);
$arguments170['arguments'] = $array172;

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
                    ';
return $output169;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = $renderChildrenClosure165;

$output132 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output132 .= '
                </div>
            ';
return $output132;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array130);
$array129['1'] = ' > 1';

$expression131 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['__thenClosure'] = $renderChildrenClosure128;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output94 .= '
            ';
return $output94;
};
$arguments92['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

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
$output268 = '';

$output268 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['name'] = NULL;
$arguments269['name'] = 'Default';

$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output268 .= '

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
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments274 = array();
$arguments274['additionalAttributes'] = NULL;
$arguments274['data'] = NULL;
$arguments274['aria'] = NULL;
$arguments274['class'] = NULL;
$arguments274['dir'] = NULL;
$arguments274['id'] = NULL;
$arguments274['lang'] = NULL;
$arguments274['style'] = NULL;
$arguments274['title'] = NULL;
$arguments274['accesskey'] = NULL;
$arguments274['tabindex'] = NULL;
$arguments274['onclick'] = NULL;
$arguments274['name'] = NULL;
$arguments274['rel'] = NULL;
$arguments274['rev'] = NULL;
$arguments274['target'] = NULL;
$arguments274['action'] = NULL;
$arguments274['controller'] = NULL;
$arguments274['extensionName'] = NULL;
$arguments274['pluginName'] = NULL;
$arguments274['pageUid'] = NULL;
$arguments274['pageType'] = NULL;
$arguments274['noCache'] = NULL;
$arguments274['language'] = NULL;
$arguments274['section'] = NULL;
$arguments274['format'] = NULL;
$arguments274['linkAccessRestrictedPages'] = NULL;
$arguments274['additionalParams'] = NULL;
$arguments274['absolute'] = NULL;
$arguments274['addQueryString'] = NULL;
$arguments274['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments274['addQueryStringMethod'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['action'] = 'import';
$arguments274['class'] = 'donne-green';

$output273 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output273 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['action'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['controller'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['pluginName'] = NULL;
$arguments276['pageUid'] = NULL;
$arguments276['pageType'] = 0;
$arguments276['noCache'] = NULL;
$arguments276['language'] = NULL;
$arguments276['section'] = '';
$arguments276['format'] = '';
$arguments276['linkAccessRestrictedPages'] = false;
$arguments276['additionalParams'] = array (
);
$arguments276['absolute'] = false;
$arguments276['addQueryString'] = false;
$arguments276['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments276['addQueryStringMethod'] = NULL;
$arguments276['action'] = 'list';
$arguments276['controller'] = 'Produkt';

$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output273 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array278 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array278)]);

$output273 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['aria'] = NULL;
$arguments286['name'] = NULL;
$arguments286['value'] = NULL;
$arguments286['property'] = NULL;
$arguments286['disabled'] = NULL;
$arguments286['errorClass'] = 'f3-form-error';
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$arguments286['checked'] = NULL;
$arguments286['multiple'] = false;
$output288 = '';

$output288 .= 'myCheckbox';
$array289 = array (
);
$output288 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array289);
$arguments286['id'] = $output288;
$arguments286['name'] = 'kategory[]';
$array290 = array (
);$arguments286['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array290);
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array291['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression292 = function($context) {return "{f";};
$arguments286['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
                        ';
return $output285;
};
$arguments283 = array();

$output282 .= NULL;

$output282 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['value'] = NULL;
$arguments293['name'] = NULL;
$arguments293['name'] = 'test';
$arguments293['value'] = 0;
$renderChildrenClosure294 = ($arguments293['value'] !== null) ? function() use ($arguments293) { return $arguments293['value']; } : $renderChildrenClosure294;
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output282 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['value'] = NULL;
$arguments312['name'] = NULL;
$arguments312['name'] = 'test';
$arguments312['value'] = 1;
$renderChildrenClosure313 = ($arguments312['value'] !== null) ? function() use ($arguments312) { return $arguments312['value']; } : $renderChildrenClosure313;
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output311 .= '
                                ';
return $output311;
};
$arguments309 = array();

$output308 .= '';

$output308 .= '
                            ';
return $output308;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array305);
$array304['1'] = ' == ';
$array306 = array (
);$array304['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array306);

$expression307 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['value'] = NULL;
$arguments302['name'] = NULL;
$arguments302['name'] = 'test';
$arguments302['value'] = 1;
$renderChildrenClosure303 = ($arguments302['value'] !== null) ? function() use ($arguments302) { return $arguments302['value']; } : $renderChildrenClosure303;
$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext)]);

$output301 .= '
                                ';
return $output301;
};

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
                        ';
return $output298;
};
$arguments295 = array();
$arguments295['each'] = NULL;
$arguments295['as'] = NULL;
$arguments295['key'] = NULL;
$arguments295['reverse'] = false;
$arguments295['iteration'] = NULL;
$array297 = array (
);$arguments295['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array297);
$arguments295['as'] = 'selectedUid';

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output282 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['additionalAttributes'] = NULL;
$arguments337['data'] = NULL;
$arguments337['aria'] = NULL;
$arguments337['name'] = NULL;
$arguments337['value'] = NULL;
$arguments337['property'] = NULL;
$arguments337['disabled'] = NULL;
$arguments337['errorClass'] = 'f3-form-error';
$arguments337['class'] = NULL;
$arguments337['dir'] = NULL;
$arguments337['id'] = NULL;
$arguments337['lang'] = NULL;
$arguments337['style'] = NULL;
$arguments337['title'] = NULL;
$arguments337['accesskey'] = NULL;
$arguments337['tabindex'] = NULL;
$arguments337['onclick'] = NULL;
$arguments337['checked'] = NULL;
$arguments337['multiple'] = false;
$output339 = '';

$output339 .= 'myCheckbox';
$array340 = array (
);
$output339 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array340);
$arguments337['id'] = $output339;
$arguments337['onclick'] = 'submit()';
$arguments337['name'] = 'kategory[]';
$array341 = array (
);$arguments337['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array341);
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array342['0'] = 'checked';

$expression343 = function($context) {return "checked";};
$arguments337['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);

$output336 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
                            ';
return $output336;
};
$arguments334 = array();

$output333 .= '';

$output333 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['aria'] = NULL;
$arguments347['name'] = NULL;
$arguments347['value'] = NULL;
$arguments347['property'] = NULL;
$arguments347['disabled'] = NULL;
$arguments347['errorClass'] = 'f3-form-error';
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$arguments347['checked'] = NULL;
$arguments347['multiple'] = false;
$output349 = '';

$output349 .= 'myCheckbox';
$array350 = array (
);
$output349 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array350);
$arguments347['id'] = $output349;
$arguments347['onclick'] = 'submit()';
$arguments347['name'] = 'kategory[]';
$array351 = array (
);$arguments347['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array351);

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
                            ';
return $output346;
};
$arguments344 = array();
$arguments344['if'] = NULL;

$output333 .= '';

$output333 .= '
                        ';
return $output333;
};
$arguments314 = array();
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$arguments314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array331);
$array330['1'] = ' == 1';

$expression332 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments314['__thenClosure'] = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['additionalAttributes'] = NULL;
$arguments317['data'] = NULL;
$arguments317['aria'] = NULL;
$arguments317['name'] = NULL;
$arguments317['value'] = NULL;
$arguments317['property'] = NULL;
$arguments317['disabled'] = NULL;
$arguments317['errorClass'] = 'f3-form-error';
$arguments317['class'] = NULL;
$arguments317['dir'] = NULL;
$arguments317['id'] = NULL;
$arguments317['lang'] = NULL;
$arguments317['style'] = NULL;
$arguments317['title'] = NULL;
$arguments317['accesskey'] = NULL;
$arguments317['tabindex'] = NULL;
$arguments317['onclick'] = NULL;
$arguments317['checked'] = NULL;
$arguments317['multiple'] = false;
$output319 = '';

$output319 .= 'myCheckbox';
$array320 = array (
);
$output319 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array320);
$arguments317['id'] = $output319;
$arguments317['onclick'] = 'submit()';
$arguments317['name'] = 'kategory[]';
$array321 = array (
);$arguments317['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array321);
// Rendering Boolean node
// Rendering Array
$array322 = array();
$array322['0'] = 'checked';

$expression323 = function($context) {return "checked";};
$arguments317['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression323(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array322)
					),
					$renderingContext
				);

$output316 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output316 .= '
                            ';
return $output316;
};
$arguments314['__elseClosures'][] = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['additionalAttributes'] = NULL;
$arguments325['data'] = NULL;
$arguments325['aria'] = NULL;
$arguments325['name'] = NULL;
$arguments325['value'] = NULL;
$arguments325['property'] = NULL;
$arguments325['disabled'] = NULL;
$arguments325['errorClass'] = 'f3-form-error';
$arguments325['class'] = NULL;
$arguments325['dir'] = NULL;
$arguments325['id'] = NULL;
$arguments325['lang'] = NULL;
$arguments325['style'] = NULL;
$arguments325['title'] = NULL;
$arguments325['accesskey'] = NULL;
$arguments325['tabindex'] = NULL;
$arguments325['onclick'] = NULL;
$arguments325['checked'] = NULL;
$arguments325['multiple'] = false;
$output327 = '';

$output327 .= 'myCheckbox';
$array328 = array (
);
$output327 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array328);
$arguments325['id'] = $output327;
$arguments325['onclick'] = 'submit()';
$arguments325['name'] = 'kategory[]';
$array329 = array (
);$arguments325['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array329);

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                            ';
return $output324;
};

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output282 .= '
                         
                        <label class="donne" for="myCheckbox';
$array352 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array352)]);

$output282 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array353 = array (
);
$output282 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array353)]);

$output282 .= '</span>
                         </label>
                    </div>
                ';
return $output282;
};
$arguments279 = array();
$arguments279['each'] = NULL;
$arguments279['as'] = NULL;
$arguments279['key'] = NULL;
$arguments279['reverse'] = false;
$arguments279['iteration'] = NULL;
$array281 = array (
);$arguments279['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array281);
$arguments279['as'] = 'kategory';

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output273 .= '
                
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments360 = array();

$output359 .= '';

$output359 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments362 = array();
$arguments362['if'] = NULL;

$output359 .= '';

$output359 .= '
                    ';
return $output359;
};
$arguments354 = array();
$arguments354['then'] = NULL;
$arguments354['else'] = NULL;
$arguments354['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array356 = array();
$array357 = array (
);$array356['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array357);
$array356['1'] = ' == 0-50';

$expression358 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "0-50");};
$arguments354['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression358(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array356)
					),
					$renderingContext
				);
$arguments354['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments354['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output273 .= '    
                     <a  onclick="price_filter(2)" >50 $ - 100 $</a>
                    <a  onclick="price_filter(3)" >100 $ - 200 $</a>
                    <a  onclick="price_filter(4)" >200 $ und mehr</a>
                    <a  >';
$array364 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array364)]);

$output273 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['action'] = NULL;
$arguments461['arguments'] = array (
);
$arguments461['controller'] = NULL;
$arguments461['extensionName'] = NULL;
$arguments461['pluginName'] = NULL;
$arguments461['pageUid'] = NULL;
$arguments461['pageType'] = 0;
$arguments461['noCache'] = NULL;
$arguments461['language'] = NULL;
$arguments461['section'] = '';
$arguments461['format'] = '';
$arguments461['linkAccessRestrictedPages'] = false;
$arguments461['additionalParams'] = array (
);
$arguments461['absolute'] = false;
$arguments461['addQueryString'] = false;
$arguments461['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments461['addQueryStringMethod'] = NULL;
$arguments461['action'] = 'show';
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array464);
$arguments461['arguments'] = $array463;

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output460 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array465 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array465)]);

$output460 .= '</h1>
                            <h2 class="donne-green product-price">';
$array466 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array466)]);

$output460 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array482 = array (
);
$output481 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array482)]);

$output481 .= '" alt="alt';
$array483 = array (
);
$output481 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array483)]);

$output481 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output481;
};
$arguments479 = array();

$output478 .= '';

$output478 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array487 = array (
);
$output486 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array487)]);

$output486 .= '" alt="alt';
$array488 = array (
);
$output486 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array488)]);

$output486 .= '">
                                </div>
                            ';
return $output486;
};
$arguments484 = array();
$arguments484['if'] = NULL;

$output478 .= '';

$output478 .= '
                        ';
return $output478;
};
$arguments467 = array();
$arguments467['then'] = NULL;
$arguments467['else'] = NULL;
$arguments467['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array475 = array();
$array476 = array (
);$array475['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array476);
$array475['1'] = ' == 0';

$expression477 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments467['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression477(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array475)
					),
					$renderingContext
				);
$arguments467['__thenClosure'] = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array470 = array (
);
$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array470)]);

$output469 .= '" alt="alt';
$array471 = array (
);
$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array471)]);

$output469 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output469;
};
$arguments467['__elseClosures'][] = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array473 = array (
);
$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array473)]);

$output472 .= '" alt="alt';
$array474 = array (
);
$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array474)]);

$output472 .= '">
                                </div>
                            ';
return $output472;
};

$output460 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output460 .= '
                    </div>
                </a>
            ';
return $output460;
};
$arguments457 = array();
$arguments457['each'] = NULL;
$arguments457['as'] = NULL;
$arguments457['key'] = NULL;
$arguments457['reverse'] = false;
$arguments457['iteration'] = NULL;
$array459 = array (
);$arguments457['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array459);
$arguments457['as'] = 'produkt';

$output456 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return '&lt;';
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
);$array503['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array504);
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
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments495['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments495['__thenClosure'] = $renderChildrenClosure496;

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output494 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$array525 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array525)]);
};
$arguments512 = array();
$arguments512['additionalAttributes'] = NULL;
$arguments512['data'] = NULL;
$arguments512['aria'] = NULL;
$arguments512['class'] = NULL;
$arguments512['dir'] = NULL;
$arguments512['id'] = NULL;
$arguments512['lang'] = NULL;
$arguments512['style'] = NULL;
$arguments512['title'] = NULL;
$arguments512['accesskey'] = NULL;
$arguments512['tabindex'] = NULL;
$arguments512['onclick'] = NULL;
$arguments512['name'] = NULL;
$arguments512['rel'] = NULL;
$arguments512['rev'] = NULL;
$arguments512['target'] = NULL;
$arguments512['action'] = NULL;
$arguments512['controller'] = NULL;
$arguments512['extensionName'] = NULL;
$arguments512['pluginName'] = NULL;
$arguments512['pageUid'] = NULL;
$arguments512['pageType'] = NULL;
$arguments512['noCache'] = NULL;
$arguments512['language'] = NULL;
$arguments512['section'] = NULL;
$arguments512['format'] = NULL;
$arguments512['linkAccessRestrictedPages'] = NULL;
$arguments512['additionalParams'] = NULL;
$arguments512['absolute'] = NULL;
$arguments512['addQueryString'] = NULL;
$arguments512['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments512['addQueryStringMethod'] = NULL;
$arguments512['arguments'] = NULL;
$arguments512['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['then'] = NULL;
$arguments514['else'] = NULL;
$arguments514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = array();
$array517 = array (
);$array516['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array517);
$array516['1'] = '==';
$array518 = array (
);$array516['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array518);

$expression519 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression519(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments514['then'] = 'active';
$arguments512['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);
// Rendering Array
$array520 = array();
$array521 = array (
);$array520['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array521);
$array522 = array (
);$array520['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array522);
$array523 = array (
);$array520['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array523);
$array524 = array (
);$array520['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array524);
$arguments512['arguments'] = $array520;

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
                    ';
return $output511;
};
$arguments508 = array();
$arguments508['each'] = NULL;
$arguments508['as'] = NULL;
$arguments508['key'] = NULL;
$arguments508['reverse'] = false;
$arguments508['iteration'] = NULL;
$array510 = array (
);$arguments508['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array510);
$arguments508['as'] = 'pageNumber';

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output494 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output531 = '';

$output531 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments532 = array();
$arguments532['additionalAttributes'] = NULL;
$arguments532['data'] = NULL;
$arguments532['aria'] = NULL;
$arguments532['class'] = NULL;
$arguments532['dir'] = NULL;
$arguments532['id'] = NULL;
$arguments532['lang'] = NULL;
$arguments532['style'] = NULL;
$arguments532['title'] = NULL;
$arguments532['accesskey'] = NULL;
$arguments532['tabindex'] = NULL;
$arguments532['onclick'] = NULL;
$arguments532['name'] = NULL;
$arguments532['rel'] = NULL;
$arguments532['rev'] = NULL;
$arguments532['target'] = NULL;
$arguments532['action'] = NULL;
$arguments532['controller'] = NULL;
$arguments532['extensionName'] = NULL;
$arguments532['pluginName'] = NULL;
$arguments532['pageUid'] = NULL;
$arguments532['pageType'] = NULL;
$arguments532['noCache'] = NULL;
$arguments532['language'] = NULL;
$arguments532['section'] = NULL;
$arguments532['format'] = NULL;
$arguments532['linkAccessRestrictedPages'] = NULL;
$arguments532['additionalParams'] = NULL;
$arguments532['absolute'] = NULL;
$arguments532['addQueryString'] = NULL;
$arguments532['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments532['addQueryStringMethod'] = NULL;
$arguments532['arguments'] = NULL;
$arguments532['action'] = 'list';
// Rendering Array
$array534 = array();
$array535 = array (
);$array534['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array535);
$array536 = array (
);$array534['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array536);
$array537 = array (
);$array534['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array537);
$array538 = array (
);$array534['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array538);
$arguments532['arguments'] = $array534;

$output531 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output531 .= '
                    ';
return $output531;
};
$arguments526 = array();
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$arguments526['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array528 = array();
$array529 = array (
);$array528['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array529);

$expression530 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments526['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression530(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array528)
					),
					$renderingContext
				);
$arguments526['__thenClosure'] = $renderChildrenClosure527;

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output494 .= '
                </div>
            ';
return $output494;
};
$arguments489 = array();
$arguments489['then'] = NULL;
$arguments489['else'] = NULL;
$arguments489['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array491 = array();
$array492 = array (
);$array491['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array492);
$array491['1'] = ' > 1';

$expression493 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments489['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array491)
					),
					$renderingContext
				);
$arguments489['__thenClosure'] = $renderChildrenClosure490;

$output456 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);

$output456 .= '
            ';
return $output456;
};
$arguments454 = array();

$output453 .= '';

$output453 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments539 = array();
$arguments539['if'] = NULL;

$output453 .= '';

$output453 .= '
        ';
return $output453;
};
$arguments365 = array();
$arguments365['then'] = NULL;
$arguments365['else'] = NULL;
$arguments365['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array450 = array();
$array451 = array (
);$array450['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array451);

$expression452 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments365['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression452(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array450)
					),
					$renderingContext
				);
$arguments365['__thenClosure'] = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['action'] = NULL;
$arguments372['arguments'] = array (
);
$arguments372['controller'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['pluginName'] = NULL;
$arguments372['pageUid'] = NULL;
$arguments372['pageType'] = 0;
$arguments372['noCache'] = NULL;
$arguments372['language'] = NULL;
$arguments372['section'] = '';
$arguments372['format'] = '';
$arguments372['linkAccessRestrictedPages'] = false;
$arguments372['additionalParams'] = array (
);
$arguments372['absolute'] = false;
$arguments372['addQueryString'] = false;
$arguments372['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments372['addQueryStringMethod'] = NULL;
$arguments372['action'] = 'show';
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array375);
$arguments372['arguments'] = $array374;

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext)]);

$output371 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array376 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array376)]);

$output371 .= '</h1>
                            <h2 class="donne-green product-price">';
$array377 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array377)]);

$output371 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array393 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array393)]);

$output392 .= '" alt="alt';
$array394 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array394)]);

$output392 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output392;
};
$arguments390 = array();

$output389 .= '';

$output389 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array398 = array (
);
$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array398)]);

$output397 .= '" alt="alt';
$array399 = array (
);
$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array399)]);

$output397 .= '">
                                </div>
                            ';
return $output397;
};
$arguments395 = array();
$arguments395['if'] = NULL;

$output389 .= '';

$output389 .= '
                        ';
return $output389;
};
$arguments378 = array();
$arguments378['then'] = NULL;
$arguments378['else'] = NULL;
$arguments378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array386 = array();
$array387 = array (
);$array386['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array387);
$array386['1'] = ' == 0';

$expression388 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments378['__thenClosure'] = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array381 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array381)]);

$output380 .= '" alt="alt';
$array382 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array382)]);

$output380 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output380;
};
$arguments378['__elseClosures'][] = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array384 = array (
);
$output383 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array384)]);

$output383 .= '" alt="alt';
$array385 = array (
);
$output383 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array385)]);

$output383 .= '">
                                </div>
                            ';
return $output383;
};

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output371 .= '
                    </div>
                </a>
            ';
return $output371;
};
$arguments368 = array();
$arguments368['each'] = NULL;
$arguments368['as'] = NULL;
$arguments368['key'] = NULL;
$arguments368['reverse'] = false;
$arguments368['iteration'] = NULL;
$array370 = array (
);$arguments368['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array370);
$arguments368['as'] = 'produkt';

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments412 = array();
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['aria'] = NULL;
$arguments412['class'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['title'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['name'] = NULL;
$arguments412['rel'] = NULL;
$arguments412['rev'] = NULL;
$arguments412['target'] = NULL;
$arguments412['action'] = NULL;
$arguments412['controller'] = NULL;
$arguments412['extensionName'] = NULL;
$arguments412['pluginName'] = NULL;
$arguments412['pageUid'] = NULL;
$arguments412['pageType'] = NULL;
$arguments412['noCache'] = NULL;
$arguments412['language'] = NULL;
$arguments412['section'] = NULL;
$arguments412['format'] = NULL;
$arguments412['linkAccessRestrictedPages'] = NULL;
$arguments412['additionalParams'] = NULL;
$arguments412['absolute'] = NULL;
$arguments412['addQueryString'] = NULL;
$arguments412['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments412['addQueryStringMethod'] = NULL;
$arguments412['arguments'] = NULL;
$arguments412['action'] = 'list';
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array415);
$array416 = array (
);$array414['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array416);
$array417 = array (
);$array414['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array417);
$array418 = array (
);$array414['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array418);
$arguments412['arguments'] = $array414;

$output411 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '
                    ';
return $output411;
};
$arguments406 = array();
$arguments406['then'] = NULL;
$arguments406['else'] = NULL;
$arguments406['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array408 = array();
$array409 = array (
);$array408['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array409);

$expression410 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments406['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array408)
					),
					$renderingContext
				);
$arguments406['__thenClosure'] = $renderChildrenClosure407;

$output405 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output405 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
$array436 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array436)]);
};
$arguments423 = array();
$arguments423['additionalAttributes'] = NULL;
$arguments423['data'] = NULL;
$arguments423['aria'] = NULL;
$arguments423['class'] = NULL;
$arguments423['dir'] = NULL;
$arguments423['id'] = NULL;
$arguments423['lang'] = NULL;
$arguments423['style'] = NULL;
$arguments423['title'] = NULL;
$arguments423['accesskey'] = NULL;
$arguments423['tabindex'] = NULL;
$arguments423['onclick'] = NULL;
$arguments423['name'] = NULL;
$arguments423['rel'] = NULL;
$arguments423['rev'] = NULL;
$arguments423['target'] = NULL;
$arguments423['action'] = NULL;
$arguments423['controller'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['pluginName'] = NULL;
$arguments423['pageUid'] = NULL;
$arguments423['pageType'] = NULL;
$arguments423['noCache'] = NULL;
$arguments423['language'] = NULL;
$arguments423['section'] = NULL;
$arguments423['format'] = NULL;
$arguments423['linkAccessRestrictedPages'] = NULL;
$arguments423['additionalParams'] = NULL;
$arguments423['absolute'] = NULL;
$arguments423['addQueryString'] = NULL;
$arguments423['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments423['addQueryStringMethod'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['then'] = NULL;
$arguments425['else'] = NULL;
$arguments425['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array428);
$array427['1'] = '==';
$array429 = array (
);$array427['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array429);

$expression430 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments425['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments425['then'] = 'active';
$arguments423['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
// Rendering Array
$array431 = array();
$array432 = array (
);$array431['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array432);
$array433 = array (
);$array431['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array433);
$array434 = array (
);$array431['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array434);
$array435 = array (
);$array431['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array435);
$arguments423['arguments'] = $array431;

$output422 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output422 .= '
                    ';
return $output422;
};
$arguments419 = array();
$arguments419['each'] = NULL;
$arguments419['as'] = NULL;
$arguments419['key'] = NULL;
$arguments419['reverse'] = false;
$arguments419['iteration'] = NULL;
$array421 = array (
);$arguments419['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array421);
$arguments419['as'] = 'pageNumber';

$output405 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output405 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments443 = array();
$arguments443['additionalAttributes'] = NULL;
$arguments443['data'] = NULL;
$arguments443['aria'] = NULL;
$arguments443['class'] = NULL;
$arguments443['dir'] = NULL;
$arguments443['id'] = NULL;
$arguments443['lang'] = NULL;
$arguments443['style'] = NULL;
$arguments443['title'] = NULL;
$arguments443['accesskey'] = NULL;
$arguments443['tabindex'] = NULL;
$arguments443['onclick'] = NULL;
$arguments443['name'] = NULL;
$arguments443['rel'] = NULL;
$arguments443['rev'] = NULL;
$arguments443['target'] = NULL;
$arguments443['action'] = NULL;
$arguments443['controller'] = NULL;
$arguments443['extensionName'] = NULL;
$arguments443['pluginName'] = NULL;
$arguments443['pageUid'] = NULL;
$arguments443['pageType'] = NULL;
$arguments443['noCache'] = NULL;
$arguments443['language'] = NULL;
$arguments443['section'] = NULL;
$arguments443['format'] = NULL;
$arguments443['linkAccessRestrictedPages'] = NULL;
$arguments443['additionalParams'] = NULL;
$arguments443['absolute'] = NULL;
$arguments443['addQueryString'] = NULL;
$arguments443['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments443['addQueryStringMethod'] = NULL;
$arguments443['arguments'] = NULL;
$arguments443['action'] = 'list';
// Rendering Array
$array445 = array();
$array446 = array (
);$array445['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array446);
$array447 = array (
);$array445['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array447);
$array448 = array (
);$array445['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array448);
$array449 = array (
);$array445['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array449);
$arguments443['arguments'] = $array445;

$output442 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output442 .= '
                    ';
return $output442;
};
$arguments437 = array();
$arguments437['then'] = NULL;
$arguments437['else'] = NULL;
$arguments437['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array439 = array();
$array440 = array (
);$array439['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array440);

$expression441 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments437['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression441(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array439)
					),
					$renderingContext
				);
$arguments437['__thenClosure'] = $renderChildrenClosure438;

$output405 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output405 .= '
                </div>
            ';
return $output405;
};
$arguments400 = array();
$arguments400['then'] = NULL;
$arguments400['else'] = NULL;
$arguments400['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array403);
$array402['1'] = ' > 1';

$expression404 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments400['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments400['__thenClosure'] = $renderChildrenClosure401;

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output367 .= '
            ';
return $output367;
};
$arguments365['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output273 .= '


    </div>  

';
return $output273;
};
$arguments271 = array();
$arguments271['name'] = NULL;
$arguments271['name'] = 'content';

$output268 .= NULL;

$output268 .= '

';

return $output268;
}


}
#