<?php

class Produkt_action_list_4bfc8602e463031f79f8fee037e07bcf31e679ce extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                    <a  >';
$array121 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array121)]);

$output0 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['action'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['controller'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['pluginName'] = NULL;
$arguments218['pageUid'] = NULL;
$arguments218['pageType'] = 0;
$arguments218['noCache'] = NULL;
$arguments218['language'] = NULL;
$arguments218['section'] = '';
$arguments218['format'] = '';
$arguments218['linkAccessRestrictedPages'] = false;
$arguments218['additionalParams'] = array (
);
$arguments218['absolute'] = false;
$arguments218['addQueryString'] = false;
$arguments218['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments218['addQueryStringMethod'] = NULL;
$arguments218['action'] = 'show';
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array221);
$arguments218['arguments'] = $array220;

$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output217 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array222 = array (
);
$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array222)]);

$output217 .= '</h1>
                            <h2 class="donne-green product-price">';
$array223 = array (
);
$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array223)]);

$output217 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array239 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array239)]);

$output238 .= '" alt="alt';
$array240 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array240)]);

$output238 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output238;
};
$arguments236 = array();

$output235 .= '';

$output235 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array244 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array244)]);

$output243 .= '" alt="alt';
$array245 = array (
);
$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array245)]);

$output243 .= '">
                                </div>
                            ';
return $output243;
};
$arguments241 = array();
$arguments241['if'] = NULL;

$output235 .= '';

$output235 .= '
                        ';
return $output235;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array233);
$array232['1'] = ' == 0';

$expression234 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array227 = array (
);
$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array227)]);

$output226 .= '" alt="alt';
$array228 = array (
);
$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array228)]);

$output226 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output226;
};
$arguments224['__elseClosures'][] = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array230 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array230)]);

$output229 .= '" alt="alt';
$array231 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array231)]);

$output229 .= '">
                                </div>
                            ';
return $output229;
};

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output217 .= '
                    </div>
                </a>
            ';
return $output217;
};
$arguments214 = array();
$arguments214['each'] = NULL;
$arguments214['as'] = NULL;
$arguments214['key'] = NULL;
$arguments214['reverse'] = false;
$arguments214['iteration'] = NULL;
$array216 = array (
);$arguments214['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array216);
$arguments214['as'] = 'produkt';

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments258 = array();
$arguments258['additionalAttributes'] = NULL;
$arguments258['data'] = NULL;
$arguments258['aria'] = NULL;
$arguments258['class'] = NULL;
$arguments258['dir'] = NULL;
$arguments258['id'] = NULL;
$arguments258['lang'] = NULL;
$arguments258['style'] = NULL;
$arguments258['title'] = NULL;
$arguments258['accesskey'] = NULL;
$arguments258['tabindex'] = NULL;
$arguments258['onclick'] = NULL;
$arguments258['name'] = NULL;
$arguments258['rel'] = NULL;
$arguments258['rev'] = NULL;
$arguments258['target'] = NULL;
$arguments258['action'] = NULL;
$arguments258['controller'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['pluginName'] = NULL;
$arguments258['pageUid'] = NULL;
$arguments258['pageType'] = NULL;
$arguments258['noCache'] = NULL;
$arguments258['language'] = NULL;
$arguments258['section'] = NULL;
$arguments258['format'] = NULL;
$arguments258['linkAccessRestrictedPages'] = NULL;
$arguments258['additionalParams'] = NULL;
$arguments258['absolute'] = NULL;
$arguments258['addQueryString'] = NULL;
$arguments258['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments258['addQueryStringMethod'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['action'] = 'list';
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array261);
$array262 = array (
);$array260['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array262);
$array263 = array (
);$array260['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array263);
$array264 = array (
);$array260['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array264);
$arguments258['arguments'] = $array260;

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
                    ';
return $output257;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments252['__thenClosure'] = $renderChildrenClosure253;

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$array282 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array282)]);
};
$arguments269 = array();
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['aria'] = NULL;
$arguments269['class'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['name'] = NULL;
$arguments269['rel'] = NULL;
$arguments269['rev'] = NULL;
$arguments269['target'] = NULL;
$arguments269['action'] = NULL;
$arguments269['controller'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['pluginName'] = NULL;
$arguments269['pageUid'] = NULL;
$arguments269['pageType'] = NULL;
$arguments269['noCache'] = NULL;
$arguments269['language'] = NULL;
$arguments269['section'] = NULL;
$arguments269['format'] = NULL;
$arguments269['linkAccessRestrictedPages'] = NULL;
$arguments269['additionalParams'] = NULL;
$arguments269['absolute'] = NULL;
$arguments269['addQueryString'] = NULL;
$arguments269['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments269['addQueryStringMethod'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['then'] = NULL;
$arguments271['else'] = NULL;
$arguments271['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array274);
$array273['1'] = '==';
$array275 = array (
);$array273['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array275);

$expression276 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments271['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments271['then'] = 'active';
$arguments269['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array278);
$array279 = array (
);$array277['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array279);
$array280 = array (
);$array277['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array280);
$array281 = array (
);$array277['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array281);
$arguments269['arguments'] = $array277;

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
                    ';
return $output268;
};
$arguments265 = array();
$arguments265['each'] = NULL;
$arguments265['as'] = NULL;
$arguments265['key'] = NULL;
$arguments265['reverse'] = false;
$arguments265['iteration'] = NULL;
$array267 = array (
);$arguments265['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array267);
$arguments265['as'] = 'pageNumber';

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output251 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments289 = array();
$arguments289['additionalAttributes'] = NULL;
$arguments289['data'] = NULL;
$arguments289['aria'] = NULL;
$arguments289['class'] = NULL;
$arguments289['dir'] = NULL;
$arguments289['id'] = NULL;
$arguments289['lang'] = NULL;
$arguments289['style'] = NULL;
$arguments289['title'] = NULL;
$arguments289['accesskey'] = NULL;
$arguments289['tabindex'] = NULL;
$arguments289['onclick'] = NULL;
$arguments289['name'] = NULL;
$arguments289['rel'] = NULL;
$arguments289['rev'] = NULL;
$arguments289['target'] = NULL;
$arguments289['action'] = NULL;
$arguments289['controller'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['pluginName'] = NULL;
$arguments289['pageUid'] = NULL;
$arguments289['pageType'] = NULL;
$arguments289['noCache'] = NULL;
$arguments289['language'] = NULL;
$arguments289['section'] = NULL;
$arguments289['format'] = NULL;
$arguments289['linkAccessRestrictedPages'] = NULL;
$arguments289['additionalParams'] = NULL;
$arguments289['absolute'] = NULL;
$arguments289['addQueryString'] = NULL;
$arguments289['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments289['addQueryStringMethod'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['action'] = 'list';
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array292);
$array293 = array (
);$array291['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array293);
$array294 = array (
);$array291['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array294);
$array295 = array (
);$array291['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array295);
$arguments289['arguments'] = $array291;

$output288 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
                    ';
return $output288;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array286);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['__thenClosure'] = $renderChildrenClosure284;

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output251 .= '
                </div>
            ';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array249);
$array248['1'] = ' > 1';

$expression250 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output213 .= '
            ';
return $output213;
};
$arguments211 = array();

$output210 .= '';

$output210 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments296 = array();
$arguments296['if'] = NULL;

$output210 .= '';

$output210 .= '
        ';
return $output210;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array208);

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['action'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['controller'] = NULL;
$arguments129['extensionName'] = NULL;
$arguments129['pluginName'] = NULL;
$arguments129['pageUid'] = NULL;
$arguments129['pageType'] = 0;
$arguments129['noCache'] = NULL;
$arguments129['language'] = NULL;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['linkAccessRestrictedPages'] = false;
$arguments129['additionalParams'] = array (
);
$arguments129['absolute'] = false;
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments129['addQueryStringMethod'] = NULL;
$arguments129['action'] = 'show';
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array132);
$arguments129['arguments'] = $array131;

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array133 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array133)]);

$output128 .= '</h1>
                            <h2 class="donne-green product-price">';
$array134 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array134)]);

$output128 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array150)]);

$output149 .= '" alt="alt';
$array151 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array151)]);

$output149 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output149;
};
$arguments147 = array();

$output146 .= '';

$output146 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array155)]);

$output154 .= '" alt="alt';
$array156 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array156)]);

$output154 .= '">
                                </div>
                            ';
return $output154;
};
$arguments152 = array();
$arguments152['if'] = NULL;

$output146 .= '';

$output146 .= '
                        ';
return $output146;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array144);
$array143['1'] = ' == 0';

$expression145 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array138)]);

$output137 .= '" alt="alt';
$array139 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array139)]);

$output137 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output137;
};
$arguments135['__elseClosures'][] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array141)]);

$output140 .= '" alt="alt';
$array142 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array142)]);

$output140 .= '">
                                </div>
                            ';
return $output140;
};

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output128 .= '
                    </div>
                </a>
            ';
return $output128;
};
$arguments125 = array();
$arguments125['each'] = NULL;
$arguments125['as'] = NULL;
$arguments125['key'] = NULL;
$arguments125['reverse'] = false;
$arguments125['iteration'] = NULL;
$array127 = array (
);$arguments125['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array127);
$arguments125['as'] = 'produkt';

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments169 = array();
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['aria'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['name'] = NULL;
$arguments169['rel'] = NULL;
$arguments169['rev'] = NULL;
$arguments169['target'] = NULL;
$arguments169['action'] = NULL;
$arguments169['controller'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['pluginName'] = NULL;
$arguments169['pageUid'] = NULL;
$arguments169['pageType'] = NULL;
$arguments169['noCache'] = NULL;
$arguments169['language'] = NULL;
$arguments169['section'] = NULL;
$arguments169['format'] = NULL;
$arguments169['linkAccessRestrictedPages'] = NULL;
$arguments169['additionalParams'] = NULL;
$arguments169['absolute'] = NULL;
$arguments169['addQueryString'] = NULL;
$arguments169['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments169['addQueryStringMethod'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['action'] = 'list';
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array172);
$array173 = array (
);$array171['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array173);
$array174 = array (
);$array171['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array174);
$array175 = array (
);$array171['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array175);
$arguments169['arguments'] = $array171;

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                    ';
return $output168;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = $renderChildrenClosure164;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$array193 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array193)]);
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['aria'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$arguments180['action'] = NULL;
$arguments180['controller'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['pluginName'] = NULL;
$arguments180['pageUid'] = NULL;
$arguments180['pageType'] = NULL;
$arguments180['noCache'] = NULL;
$arguments180['language'] = NULL;
$arguments180['section'] = NULL;
$arguments180['format'] = NULL;
$arguments180['linkAccessRestrictedPages'] = NULL;
$arguments180['additionalParams'] = NULL;
$arguments180['absolute'] = NULL;
$arguments180['addQueryString'] = NULL;
$arguments180['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments180['addQueryStringMethod'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array185);
$array184['1'] = '==';
$array186 = array (
);$array184['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array186);

$expression187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments182['then'] = 'active';
$arguments180['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array189);
$array190 = array (
);$array188['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array190);
$array191 = array (
);$array188['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array191);
$array192 = array (
);$array188['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array192);
$arguments180['arguments'] = $array188;

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
                    ';
return $output179;
};
$arguments176 = array();
$arguments176['each'] = NULL;
$arguments176['as'] = NULL;
$arguments176['key'] = NULL;
$arguments176['reverse'] = false;
$arguments176['iteration'] = NULL;
$array178 = array (
);$arguments176['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array178);
$arguments176['as'] = 'pageNumber';

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output162 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments200 = array();
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['aria'] = NULL;
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['name'] = NULL;
$arguments200['rel'] = NULL;
$arguments200['rev'] = NULL;
$arguments200['target'] = NULL;
$arguments200['action'] = NULL;
$arguments200['controller'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['pluginName'] = NULL;
$arguments200['pageUid'] = NULL;
$arguments200['pageType'] = NULL;
$arguments200['noCache'] = NULL;
$arguments200['language'] = NULL;
$arguments200['section'] = NULL;
$arguments200['format'] = NULL;
$arguments200['linkAccessRestrictedPages'] = NULL;
$arguments200['additionalParams'] = NULL;
$arguments200['absolute'] = NULL;
$arguments200['addQueryString'] = NULL;
$arguments200['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments200['addQueryStringMethod'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['action'] = 'list';
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array203);
$array204 = array (
);$array202['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array204);
$array205 = array (
);$array202['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array205);
$array206 = array (
);$array202['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array206);
$arguments200['arguments'] = $array202;

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                    ';
return $output199;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array197);

$expression198 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = $renderChildrenClosure195;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output162 .= '
                </div>
            ';
return $output162;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array160);
$array159['1'] = ' > 1';

$expression161 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = $renderChildrenClosure158;

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output124 .= '
            ';
return $output124;
};
$arguments122['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

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
$output298 = '';

$output298 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['name'] = NULL;
$arguments299['name'] = 'Default';

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output298 .= '

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
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments304 = array();
$arguments304['additionalAttributes'] = NULL;
$arguments304['data'] = NULL;
$arguments304['aria'] = NULL;
$arguments304['class'] = NULL;
$arguments304['dir'] = NULL;
$arguments304['id'] = NULL;
$arguments304['lang'] = NULL;
$arguments304['style'] = NULL;
$arguments304['title'] = NULL;
$arguments304['accesskey'] = NULL;
$arguments304['tabindex'] = NULL;
$arguments304['onclick'] = NULL;
$arguments304['name'] = NULL;
$arguments304['rel'] = NULL;
$arguments304['rev'] = NULL;
$arguments304['target'] = NULL;
$arguments304['action'] = NULL;
$arguments304['controller'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['pluginName'] = NULL;
$arguments304['pageUid'] = NULL;
$arguments304['pageType'] = NULL;
$arguments304['noCache'] = NULL;
$arguments304['language'] = NULL;
$arguments304['section'] = NULL;
$arguments304['format'] = NULL;
$arguments304['linkAccessRestrictedPages'] = NULL;
$arguments304['additionalParams'] = NULL;
$arguments304['absolute'] = NULL;
$arguments304['addQueryString'] = NULL;
$arguments304['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments304['addQueryStringMethod'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['action'] = 'import';
$arguments304['class'] = 'donne-green';

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['action'] = NULL;
$arguments306['arguments'] = array (
);
$arguments306['controller'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['pluginName'] = NULL;
$arguments306['pageUid'] = NULL;
$arguments306['pageType'] = 0;
$arguments306['noCache'] = NULL;
$arguments306['language'] = NULL;
$arguments306['section'] = '';
$arguments306['format'] = '';
$arguments306['linkAccessRestrictedPages'] = false;
$arguments306['additionalParams'] = array (
);
$arguments306['absolute'] = false;
$arguments306['addQueryString'] = false;
$arguments306['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments306['addQueryStringMethod'] = NULL;
$arguments306['action'] = 'list';
$arguments306['controller'] = 'Produkt';

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output303 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array308 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array308)]);

$output303 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['aria'] = NULL;
$arguments316['name'] = NULL;
$arguments316['value'] = NULL;
$arguments316['property'] = NULL;
$arguments316['disabled'] = NULL;
$arguments316['errorClass'] = 'f3-form-error';
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['title'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
$arguments316['checked'] = NULL;
$arguments316['multiple'] = false;
$output318 = '';

$output318 .= 'myCheckbox';
$array319 = array (
);
$output318 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array319);
$arguments316['id'] = $output318;
$arguments316['name'] = 'kategory[]';
$array320 = array (
);$arguments316['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array320);
// Rendering Boolean node
// Rendering Array
$array321 = array();
$array321['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression322 = function($context) {return "{f";};
$arguments316['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array321)
					),
					$renderingContext
				);

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                        ';
return $output315;
};
$arguments313 = array();

$output312 .= NULL;

$output312 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['value'] = NULL;
$arguments323['name'] = NULL;
$arguments323['name'] = 'test';
$arguments323['value'] = 0;
$renderChildrenClosure324 = ($arguments323['value'] !== null) ? function() use ($arguments323) { return $arguments323['value']; } : $renderChildrenClosure324;
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output312 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['value'] = NULL;
$arguments342['name'] = NULL;
$arguments342['name'] = 'test';
$arguments342['value'] = 1;
$renderChildrenClosure343 = ($arguments342['value'] !== null) ? function() use ($arguments342) { return $arguments342['value']; } : $renderChildrenClosure343;
$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output341 .= '
                                ';
return $output341;
};
$arguments339 = array();

$output338 .= '';

$output338 .= '
                            ';
return $output338;
};
$arguments329 = array();
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$arguments329['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array335);
$array334['1'] = ' == ';
$array336 = array (
);$array334['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array336);

$expression337 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments329['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments329['__thenClosure'] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['value'] = NULL;
$arguments332['name'] = NULL;
$arguments332['name'] = 'test';
$arguments332['value'] = 1;
$renderChildrenClosure333 = ($arguments332['value'] !== null) ? function() use ($arguments332) { return $arguments332['value']; } : $renderChildrenClosure333;
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output331 .= '
                                ';
return $output331;
};

$output328 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output328 .= '
                        ';
return $output328;
};
$arguments325 = array();
$arguments325['each'] = NULL;
$arguments325['as'] = NULL;
$arguments325['key'] = NULL;
$arguments325['reverse'] = false;
$arguments325['iteration'] = NULL;
$array327 = array (
);$arguments325['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array327);
$arguments325['as'] = 'selectedUid';

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output312 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['additionalAttributes'] = NULL;
$arguments367['data'] = NULL;
$arguments367['aria'] = NULL;
$arguments367['name'] = NULL;
$arguments367['value'] = NULL;
$arguments367['property'] = NULL;
$arguments367['disabled'] = NULL;
$arguments367['errorClass'] = 'f3-form-error';
$arguments367['class'] = NULL;
$arguments367['dir'] = NULL;
$arguments367['id'] = NULL;
$arguments367['lang'] = NULL;
$arguments367['style'] = NULL;
$arguments367['title'] = NULL;
$arguments367['accesskey'] = NULL;
$arguments367['tabindex'] = NULL;
$arguments367['onclick'] = NULL;
$arguments367['checked'] = NULL;
$arguments367['multiple'] = false;
$output369 = '';

$output369 .= 'myCheckbox';
$array370 = array (
);
$output369 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array370);
$arguments367['id'] = $output369;
$arguments367['onclick'] = 'submit()';
$arguments367['name'] = 'kategory[]';
$array371 = array (
);$arguments367['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array371);
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array372['0'] = 'checked';

$expression373 = function($context) {return "checked";};
$arguments367['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression373(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);

$output366 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
                            ';
return $output366;
};
$arguments364 = array();

$output363 .= '';

$output363 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['additionalAttributes'] = NULL;
$arguments377['data'] = NULL;
$arguments377['aria'] = NULL;
$arguments377['name'] = NULL;
$arguments377['value'] = NULL;
$arguments377['property'] = NULL;
$arguments377['disabled'] = NULL;
$arguments377['errorClass'] = 'f3-form-error';
$arguments377['class'] = NULL;
$arguments377['dir'] = NULL;
$arguments377['id'] = NULL;
$arguments377['lang'] = NULL;
$arguments377['style'] = NULL;
$arguments377['title'] = NULL;
$arguments377['accesskey'] = NULL;
$arguments377['tabindex'] = NULL;
$arguments377['onclick'] = NULL;
$arguments377['checked'] = NULL;
$arguments377['multiple'] = false;
$output379 = '';

$output379 .= 'myCheckbox';
$array380 = array (
);
$output379 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array380);
$arguments377['id'] = $output379;
$arguments377['onclick'] = 'submit()';
$arguments377['name'] = 'kategory[]';
$array381 = array (
);$arguments377['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array381);

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '
                            ';
return $output376;
};
$arguments374 = array();
$arguments374['if'] = NULL;

$output363 .= '';

$output363 .= '
                        ';
return $output363;
};
$arguments344 = array();
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$arguments344['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array361);
$array360['1'] = ' == 1';

$expression362 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments344['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$arguments344['__thenClosure'] = function() use ($renderingContext, $self) {
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
// Rendering Boolean node
// Rendering Array
$array352 = array();
$array352['0'] = 'checked';

$expression353 = function($context) {return "checked";};
$arguments347['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression353(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array352)
					),
					$renderingContext
				);

$output346 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
                            ';
return $output346;
};
$arguments344['__elseClosures'][] = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['additionalAttributes'] = NULL;
$arguments355['data'] = NULL;
$arguments355['aria'] = NULL;
$arguments355['name'] = NULL;
$arguments355['value'] = NULL;
$arguments355['property'] = NULL;
$arguments355['disabled'] = NULL;
$arguments355['errorClass'] = 'f3-form-error';
$arguments355['class'] = NULL;
$arguments355['dir'] = NULL;
$arguments355['id'] = NULL;
$arguments355['lang'] = NULL;
$arguments355['style'] = NULL;
$arguments355['title'] = NULL;
$arguments355['accesskey'] = NULL;
$arguments355['tabindex'] = NULL;
$arguments355['onclick'] = NULL;
$arguments355['checked'] = NULL;
$arguments355['multiple'] = false;
$output357 = '';

$output357 .= 'myCheckbox';
$array358 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array358);
$arguments355['id'] = $output357;
$arguments355['onclick'] = 'submit()';
$arguments355['name'] = 'kategory[]';
$array359 = array (
);$arguments355['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array359);

$output354 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
                            ';
return $output354;
};

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output312 .= '
                         
                        <label class="donne" for="myCheckbox';
$array382 = array (
);
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array382)]);

$output312 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array383 = array (
);
$output312 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array383)]);

$output312 .= '</span>
                         </label>
                    </div>
                ';
return $output312;
};
$arguments309 = array();
$arguments309['each'] = NULL;
$arguments309['as'] = NULL;
$arguments309['key'] = NULL;
$arguments309['reverse'] = false;
$arguments309['iteration'] = NULL;
$array311 = array (
);$arguments309['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array311);
$arguments309['as'] = 'kategory';

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output303 .= '
                
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn"  >Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="hidden" value="0"   name="priceRange"/>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments390 = array();

$output389 .= '';

$output389 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments392 = array();
$arguments392['if'] = NULL;

$output389 .= '';

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
);$array386['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array387);
$array386['1'] = ' == 0-50';

$expression388 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "0-50");};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments384['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};
$arguments384['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(1)" >0 $ - 50 $</a>
                        ';
};

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output303 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments400 = array();

$output399 .= '';

$output399 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments402 = array();
$arguments402['if'] = NULL;

$output399 .= '';

$output399 .= '
                    ';
return $output399;
};
$arguments394 = array();
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$arguments394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array397);
$array396['1'] = ' == 50-100';

$expression398 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "50-100");};
$arguments394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression398(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array396)
					),
					$renderingContext
				);
$arguments394['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};
$arguments394['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(2)" >50 $ - 100 $</a>
                        ';
};

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output303 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments410 = array();

$output409 .= '';

$output409 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};
$arguments412 = array();
$arguments412['if'] = NULL;

$output409 .= '';

$output409 .= '
                    ';
return $output409;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array407);
$array406['1'] = ' == 100-200';

$expression408 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "100-200");};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(3)" >100 $ - 200 $</a>
                        ';
};
$arguments404['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(3)" >100 $ - 200 $ </a>
                        ';
};

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output303 .= '  
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments420 = array();

$output419 .= '';

$output419 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments422 = array();
$arguments422['if'] = NULL;

$output419 .= '';

$output419 .= '
                    ';
return $output419;
};
$arguments414 = array();
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$arguments414['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['0'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array417);
$array416['1'] = ' == 200';

$expression418 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 200);};
$arguments414['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression418(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array416)
					),
					$renderingContext
				);
$arguments414['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                            <a  class="priceRange"   onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};
$arguments414['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                            <a onclick="price_filter(4)" >200 $ und mehr</a>
                        ';
};

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output303 .= '  
                    <a  >';
$array424 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('priceRange', $array424)]);

$output303 .= '</a>
                </div>
            </div>
       </form>
    </div>
    <div class="right-section">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['action'] = NULL;
$arguments521['arguments'] = array (
);
$arguments521['controller'] = NULL;
$arguments521['extensionName'] = NULL;
$arguments521['pluginName'] = NULL;
$arguments521['pageUid'] = NULL;
$arguments521['pageType'] = 0;
$arguments521['noCache'] = NULL;
$arguments521['language'] = NULL;
$arguments521['section'] = '';
$arguments521['format'] = '';
$arguments521['linkAccessRestrictedPages'] = false;
$arguments521['additionalParams'] = array (
);
$arguments521['absolute'] = false;
$arguments521['addQueryString'] = false;
$arguments521['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments521['addQueryStringMethod'] = NULL;
$arguments521['action'] = 'show';
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array524);
$arguments521['arguments'] = $array523;

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext)]);

$output520 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array525 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array525)]);

$output520 .= '</h1>
                            <h2 class="donne-green product-price">';
$array526 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array526)]);

$output520 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array542 = array (
);
$output541 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array542)]);

$output541 .= '" alt="alt';
$array543 = array (
);
$output541 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array543)]);

$output541 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output541;
};
$arguments539 = array();

$output538 .= '';

$output538 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array547 = array (
);
$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array547)]);

$output546 .= '" alt="alt';
$array548 = array (
);
$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array548)]);

$output546 .= '">
                                </div>
                            ';
return $output546;
};
$arguments544 = array();
$arguments544['if'] = NULL;

$output538 .= '';

$output538 .= '
                        ';
return $output538;
};
$arguments527 = array();
$arguments527['then'] = NULL;
$arguments527['else'] = NULL;
$arguments527['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array535 = array();
$array536 = array (
);$array535['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array536);
$array535['1'] = ' == 0';

$expression537 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments527['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression537(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array535)
					),
					$renderingContext
				);
$arguments527['__thenClosure'] = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array530 = array (
);
$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array530)]);

$output529 .= '" alt="alt';
$array531 = array (
);
$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array531)]);

$output529 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output529;
};
$arguments527['__elseClosures'][] = function() use ($renderingContext, $self) {
$output532 = '';

$output532 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array533 = array (
);
$output532 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array533)]);

$output532 .= '" alt="alt';
$array534 = array (
);
$output532 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array534)]);

$output532 .= '">
                                </div>
                            ';
return $output532;
};

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output520 .= '
                    </div>
                </a>
            ';
return $output520;
};
$arguments517 = array();
$arguments517['each'] = NULL;
$arguments517['as'] = NULL;
$arguments517['key'] = NULL;
$arguments517['reverse'] = false;
$arguments517['iteration'] = NULL;
$array519 = array (
);$arguments517['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array519);
$arguments517['as'] = 'produkt';

$output516 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output516 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments561 = array();
$arguments561['additionalAttributes'] = NULL;
$arguments561['data'] = NULL;
$arguments561['aria'] = NULL;
$arguments561['class'] = NULL;
$arguments561['dir'] = NULL;
$arguments561['id'] = NULL;
$arguments561['lang'] = NULL;
$arguments561['style'] = NULL;
$arguments561['title'] = NULL;
$arguments561['accesskey'] = NULL;
$arguments561['tabindex'] = NULL;
$arguments561['onclick'] = NULL;
$arguments561['name'] = NULL;
$arguments561['rel'] = NULL;
$arguments561['rev'] = NULL;
$arguments561['target'] = NULL;
$arguments561['action'] = NULL;
$arguments561['controller'] = NULL;
$arguments561['extensionName'] = NULL;
$arguments561['pluginName'] = NULL;
$arguments561['pageUid'] = NULL;
$arguments561['pageType'] = NULL;
$arguments561['noCache'] = NULL;
$arguments561['language'] = NULL;
$arguments561['section'] = NULL;
$arguments561['format'] = NULL;
$arguments561['linkAccessRestrictedPages'] = NULL;
$arguments561['additionalParams'] = NULL;
$arguments561['absolute'] = NULL;
$arguments561['addQueryString'] = NULL;
$arguments561['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments561['addQueryStringMethod'] = NULL;
$arguments561['arguments'] = NULL;
$arguments561['action'] = 'list';
// Rendering Array
$array563 = array();
$array564 = array (
);$array563['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array564);
$array565 = array (
);$array563['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array565);
$array566 = array (
);$array563['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array566);
$array567 = array (
);$array563['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array567);
$arguments561['arguments'] = $array563;

$output560 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output560 .= '
                    ';
return $output560;
};
$arguments555 = array();
$arguments555['then'] = NULL;
$arguments555['else'] = NULL;
$arguments555['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array557 = array();
$array558 = array (
);$array557['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array558);

$expression559 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments555['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression559(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array557)
					),
					$renderingContext
				);
$arguments555['__thenClosure'] = $renderChildrenClosure556;

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output554 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$array585 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array585)]);
};
$arguments572 = array();
$arguments572['additionalAttributes'] = NULL;
$arguments572['data'] = NULL;
$arguments572['aria'] = NULL;
$arguments572['class'] = NULL;
$arguments572['dir'] = NULL;
$arguments572['id'] = NULL;
$arguments572['lang'] = NULL;
$arguments572['style'] = NULL;
$arguments572['title'] = NULL;
$arguments572['accesskey'] = NULL;
$arguments572['tabindex'] = NULL;
$arguments572['onclick'] = NULL;
$arguments572['name'] = NULL;
$arguments572['rel'] = NULL;
$arguments572['rev'] = NULL;
$arguments572['target'] = NULL;
$arguments572['action'] = NULL;
$arguments572['controller'] = NULL;
$arguments572['extensionName'] = NULL;
$arguments572['pluginName'] = NULL;
$arguments572['pageUid'] = NULL;
$arguments572['pageType'] = NULL;
$arguments572['noCache'] = NULL;
$arguments572['language'] = NULL;
$arguments572['section'] = NULL;
$arguments572['format'] = NULL;
$arguments572['linkAccessRestrictedPages'] = NULL;
$arguments572['additionalParams'] = NULL;
$arguments572['absolute'] = NULL;
$arguments572['addQueryString'] = NULL;
$arguments572['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments572['addQueryStringMethod'] = NULL;
$arguments572['arguments'] = NULL;
$arguments572['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['then'] = NULL;
$arguments574['else'] = NULL;
$arguments574['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array577 = array (
);$array576['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array577);
$array576['1'] = '==';
$array578 = array (
);$array576['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array578);

$expression579 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments574['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression579(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
$arguments574['then'] = 'active';
$arguments572['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array581);
$array582 = array (
);$array580['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array582);
$array583 = array (
);$array580['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array583);
$array584 = array (
);$array580['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array584);
$arguments572['arguments'] = $array580;

$output571 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output571 .= '
                    ';
return $output571;
};
$arguments568 = array();
$arguments568['each'] = NULL;
$arguments568['as'] = NULL;
$arguments568['key'] = NULL;
$arguments568['reverse'] = false;
$arguments568['iteration'] = NULL;
$array570 = array (
);$arguments568['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array570);
$arguments568['as'] = 'pageNumber';

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output554 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments592 = array();
$arguments592['additionalAttributes'] = NULL;
$arguments592['data'] = NULL;
$arguments592['aria'] = NULL;
$arguments592['class'] = NULL;
$arguments592['dir'] = NULL;
$arguments592['id'] = NULL;
$arguments592['lang'] = NULL;
$arguments592['style'] = NULL;
$arguments592['title'] = NULL;
$arguments592['accesskey'] = NULL;
$arguments592['tabindex'] = NULL;
$arguments592['onclick'] = NULL;
$arguments592['name'] = NULL;
$arguments592['rel'] = NULL;
$arguments592['rev'] = NULL;
$arguments592['target'] = NULL;
$arguments592['action'] = NULL;
$arguments592['controller'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['pluginName'] = NULL;
$arguments592['pageUid'] = NULL;
$arguments592['pageType'] = NULL;
$arguments592['noCache'] = NULL;
$arguments592['language'] = NULL;
$arguments592['section'] = NULL;
$arguments592['format'] = NULL;
$arguments592['linkAccessRestrictedPages'] = NULL;
$arguments592['additionalParams'] = NULL;
$arguments592['absolute'] = NULL;
$arguments592['addQueryString'] = NULL;
$arguments592['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments592['addQueryStringMethod'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['action'] = 'list';
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array595);
$array596 = array (
);$array594['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array596);
$array597 = array (
);$array594['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array597);
$array598 = array (
);$array594['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array598);
$arguments592['arguments'] = $array594;

$output591 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output591 .= '
                    ';
return $output591;
};
$arguments586 = array();
$arguments586['then'] = NULL;
$arguments586['else'] = NULL;
$arguments586['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array588 = array();
$array589 = array (
);$array588['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array589);

$expression590 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments586['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression590(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array588)
					),
					$renderingContext
				);
$arguments586['__thenClosure'] = $renderChildrenClosure587;

$output554 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output554 .= '
                </div>
            ';
return $output554;
};
$arguments549 = array();
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$arguments549['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array551 = array();
$array552 = array (
);$array551['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array552);
$array551['1'] = ' > 1';

$expression553 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments549['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression553(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array551)
					),
					$renderingContext
				);
$arguments549['__thenClosure'] = $renderChildrenClosure550;

$output516 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output516 .= '
            ';
return $output516;
};
$arguments514 = array();

$output513 .= '';

$output513 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments599 = array();
$arguments599['if'] = NULL;

$output513 .= '';

$output513 .= '
        ';
return $output513;
};
$arguments425 = array();
$arguments425['then'] = NULL;
$arguments425['else'] = NULL;
$arguments425['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array510 = array();
$array511 = array (
);$array510['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array511);

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments425['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array510)
					),
					$renderingContext
				);
$arguments425['__thenClosure'] = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['action'] = NULL;
$arguments432['arguments'] = array (
);
$arguments432['controller'] = NULL;
$arguments432['extensionName'] = NULL;
$arguments432['pluginName'] = NULL;
$arguments432['pageUid'] = NULL;
$arguments432['pageType'] = 0;
$arguments432['noCache'] = NULL;
$arguments432['language'] = NULL;
$arguments432['section'] = '';
$arguments432['format'] = '';
$arguments432['linkAccessRestrictedPages'] = false;
$arguments432['additionalParams'] = array (
);
$arguments432['absolute'] = false;
$arguments432['addQueryString'] = false;
$arguments432['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments432['addQueryStringMethod'] = NULL;
$arguments432['action'] = 'show';
// Rendering Array
$array434 = array();
$array435 = array (
);$array434['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array435);
$arguments432['arguments'] = $array434;

$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output431 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array436 = array (
);
$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array436)]);

$output431 .= '</h1>
                            <h2 class="donne-green product-price">';
$array437 = array (
);
$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array437)]);

$output431 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array453 = array (
);
$output452 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array453)]);

$output452 .= '" alt="alt';
$array454 = array (
);
$output452 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array454)]);

$output452 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output452;
};
$arguments450 = array();

$output449 .= '';

$output449 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array458 = array (
);
$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array458)]);

$output457 .= '" alt="alt';
$array459 = array (
);
$output457 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array459)]);

$output457 .= '">
                                </div>
                            ';
return $output457;
};
$arguments455 = array();
$arguments455['if'] = NULL;

$output449 .= '';

$output449 .= '
                        ';
return $output449;
};
$arguments438 = array();
$arguments438['then'] = NULL;
$arguments438['else'] = NULL;
$arguments438['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array447);
$array446['1'] = ' == 0';

$expression448 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments438['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression448(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$arguments438['__thenClosure'] = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array441 = array (
);
$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array441)]);

$output440 .= '" alt="alt';
$array442 = array (
);
$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array442)]);

$output440 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output440;
};
$arguments438['__elseClosures'][] = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array444)]);

$output443 .= '" alt="alt';
$array445 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array445)]);

$output443 .= '">
                                </div>
                            ';
return $output443;
};

$output431 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output431 .= '
                    </div>
                </a>
            ';
return $output431;
};
$arguments428 = array();
$arguments428['each'] = NULL;
$arguments428['as'] = NULL;
$arguments428['key'] = NULL;
$arguments428['reverse'] = false;
$arguments428['iteration'] = NULL;
$array430 = array (
);$arguments428['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array430);
$arguments428['as'] = 'produkt';

$output427 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output427 .= '
            </div>
            <!-- Pagination -->
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '

                <div class="pagination">
                
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments472 = array();
$arguments472['additionalAttributes'] = NULL;
$arguments472['data'] = NULL;
$arguments472['aria'] = NULL;
$arguments472['class'] = NULL;
$arguments472['dir'] = NULL;
$arguments472['id'] = NULL;
$arguments472['lang'] = NULL;
$arguments472['style'] = NULL;
$arguments472['title'] = NULL;
$arguments472['accesskey'] = NULL;
$arguments472['tabindex'] = NULL;
$arguments472['onclick'] = NULL;
$arguments472['name'] = NULL;
$arguments472['rel'] = NULL;
$arguments472['rev'] = NULL;
$arguments472['target'] = NULL;
$arguments472['action'] = NULL;
$arguments472['controller'] = NULL;
$arguments472['extensionName'] = NULL;
$arguments472['pluginName'] = NULL;
$arguments472['pageUid'] = NULL;
$arguments472['pageType'] = NULL;
$arguments472['noCache'] = NULL;
$arguments472['language'] = NULL;
$arguments472['section'] = NULL;
$arguments472['format'] = NULL;
$arguments472['linkAccessRestrictedPages'] = NULL;
$arguments472['additionalParams'] = NULL;
$arguments472['absolute'] = NULL;
$arguments472['addQueryString'] = NULL;
$arguments472['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments472['addQueryStringMethod'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['action'] = 'list';
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array475);
$array476 = array (
);$array474['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array476);
$array477 = array (
);$array474['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array477);
$array478 = array (
);$array474['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array478);
$arguments472['arguments'] = $array474;

$output471 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output471 .= '
                    ';
return $output471;
};
$arguments466 = array();
$arguments466['then'] = NULL;
$arguments466['else'] = NULL;
$arguments466['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array469 = array (
);$array468['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array469);

$expression470 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments466['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression470(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['__thenClosure'] = $renderChildrenClosure467;

$output465 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$array496 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array496)]);
};
$arguments483 = array();
$arguments483['additionalAttributes'] = NULL;
$arguments483['data'] = NULL;
$arguments483['aria'] = NULL;
$arguments483['class'] = NULL;
$arguments483['dir'] = NULL;
$arguments483['id'] = NULL;
$arguments483['lang'] = NULL;
$arguments483['style'] = NULL;
$arguments483['title'] = NULL;
$arguments483['accesskey'] = NULL;
$arguments483['tabindex'] = NULL;
$arguments483['onclick'] = NULL;
$arguments483['name'] = NULL;
$arguments483['rel'] = NULL;
$arguments483['rev'] = NULL;
$arguments483['target'] = NULL;
$arguments483['action'] = NULL;
$arguments483['controller'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['pluginName'] = NULL;
$arguments483['pageUid'] = NULL;
$arguments483['pageType'] = NULL;
$arguments483['noCache'] = NULL;
$arguments483['language'] = NULL;
$arguments483['section'] = NULL;
$arguments483['format'] = NULL;
$arguments483['linkAccessRestrictedPages'] = NULL;
$arguments483['additionalParams'] = NULL;
$arguments483['absolute'] = NULL;
$arguments483['addQueryString'] = NULL;
$arguments483['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments483['addQueryStringMethod'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array488);
$array487['1'] = '==';
$array489 = array (
);$array487['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array489);

$expression490 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['then'] = 'active';
$arguments483['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);
// Rendering Array
$array491 = array();
$array492 = array (
);$array491['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array492);
$array493 = array (
);$array491['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array493);
$array494 = array (
);$array491['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array494);
$array495 = array (
);$array491['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array495);
$arguments483['arguments'] = $array491;

$output482 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output482 .= '
                    ';
return $output482;
};
$arguments479 = array();
$arguments479['each'] = NULL;
$arguments479['as'] = NULL;
$arguments479['key'] = NULL;
$arguments479['reverse'] = false;
$arguments479['iteration'] = NULL;
$array481 = array (
);$arguments479['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array481);
$arguments479['as'] = 'pageNumber';

$output465 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output465 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return '&gt;';
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
);$array505['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array506);
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
);$array499['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array500);

$expression501 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments497['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array499)
					),
					$renderingContext
				);
$arguments497['__thenClosure'] = $renderChildrenClosure498;

$output465 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output465 .= '
                </div>
            ';
return $output465;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('totalNumberOfPages', $array463);
$array462['1'] = ' > 1';

$expression464 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments460['__thenClosure'] = $renderChildrenClosure461;

$output427 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output427 .= '
            ';
return $output427;
};
$arguments425['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output303 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output303 .= '


    </div>  

';
return $output303;
};
$arguments301 = array();
$arguments301['name'] = NULL;
$arguments301['name'] = 'content';

$output298 .= NULL;

$output298 .= '

';

return $output298;
}


}
#