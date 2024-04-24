<?php

class Produkt_action_list_d1aacc1a7d8f318762eaed4c4a34f2e5c30fd58e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output36 = '';

$output36 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['name'] = NULL;
$arguments40['name'] = 'test';
$arguments40['value'] = 1;
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
                                    <span=>';
$array42 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedUid', $array42)]);

$output39 .= '</span=>

                                ';
return $output39;
};
$arguments37 = array();

$output36 .= '';

$output36 .= '
                            ';
return $output36;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array33);
$array32['1'] = ' == ';
$array34 = array (
);$array32['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array34);

$expression35 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
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
                                    <span=>';
$array31 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedUid', $array31)]);

$output28 .= '</span=>

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
);$arguments22['each'] = $renderingContext->getVariableProvider()->getByPath('selectedkategory', $array24);
$arguments22['as'] = 'selectedUid';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['aria'] = NULL;
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['property'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['checked'] = NULL;
$arguments66['multiple'] = false;
$output68 = '';

$output68 .= 'myCheckbox';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array69);
$arguments66['id'] = $output68;
$arguments66['name'] = 'kategory[]';
$array70 = array (
);$arguments66['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array70);
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array71['0'] = 'checked';

$expression72 = function($context) {return "checked";};
$arguments66['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                            ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['aria'] = NULL;
$arguments76['name'] = NULL;
$arguments76['value'] = NULL;
$arguments76['property'] = NULL;
$arguments76['disabled'] = NULL;
$arguments76['errorClass'] = 'f3-form-error';
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['checked'] = NULL;
$arguments76['multiple'] = false;
$output78 = '';

$output78 .= 'myCheckbox';
$array79 = array (
);
$output78 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array79);
$arguments76['id'] = $output78;
$arguments76['name'] = 'kategory[]';
$array80 = array (
);$arguments76['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array80);

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
                            ';
return $output75;
};
$arguments73 = array();
$arguments73['if'] = NULL;

$output62 .= '';

$output62 .= '
                        ';
return $output62;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array60);
$array59['1'] = ' == 1';

$expression61 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['aria'] = NULL;
$arguments46['name'] = NULL;
$arguments46['value'] = NULL;
$arguments46['property'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['errorClass'] = 'f3-form-error';
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['checked'] = NULL;
$arguments46['multiple'] = false;
$output48 = '';

$output48 .= 'myCheckbox';
$array49 = array (
);
$output48 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array49);
$arguments46['id'] = $output48;
$arguments46['name'] = 'kategory[]';
$array50 = array (
);$arguments46['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array50);
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'checked';

$expression52 = function($context) {return "checked";};
$arguments46['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                            ';
return $output45;
};
$arguments43['__elseClosures'][] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['aria'] = NULL;
$arguments54['name'] = NULL;
$arguments54['value'] = NULL;
$arguments54['property'] = NULL;
$arguments54['disabled'] = NULL;
$arguments54['errorClass'] = 'f3-form-error';
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['checked'] = NULL;
$arguments54['multiple'] = false;
$output56 = '';

$output56 .= 'myCheckbox';
$array57 = array (
);
$output56 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array57);
$arguments54['id'] = $output56;
$arguments54['name'] = 'kategory[]';
$array58 = array (
);$arguments54['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array58);

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                            ';
return $output53;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output9 .= '
                         
                        <label class="donne" for="myCheckbox';
$array81 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array81)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array82 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array82)]);

$output9 .= '</span>
                            <span class="category-name">';
$array83 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array83)]);

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
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                ';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array88)]);

$output87 .= '
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
);$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array86);
$arguments84['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

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
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
              <a href="';
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
$arguments93['action'] = 'show';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array96);
$arguments93['arguments'] = $array95;

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array97 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array97)]);

$output92 .= '</h1>
                          <h2 class="donne-green product-price">';
$array98 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array98)]);

$output92 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                              <div class="out-of-stock zoom">
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
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output113;
};
$arguments111 = array();

$output110 .= '';

$output110 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array119)]);

$output118 .= '" alt="alt';
$array120 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array120)]);

$output118 .= '">
                              </div>
                          ';
return $output118;
};
$arguments116 = array();
$arguments116['if'] = NULL;

$output110 .= '';

$output110 .= '
                      ';
return $output110;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array108);
$array107['1'] = ' == 0';

$expression109 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array102 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array102)]);

$output101 .= '" alt="alt';
$array103 = array (
);
$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array103)]);

$output101 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array105 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array105)]);

$output104 .= '" alt="alt';
$array106 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array106)]);

$output104 .= '">
                              </div>
                          ';
return $output104;
};

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output92 .= '
                  </div>
              </a>
          ';
return $output92;
};
$arguments89 = array();
$arguments89['each'] = NULL;
$arguments89['as'] = NULL;
$arguments89['key'] = NULL;
$arguments89['reverse'] = false;
$arguments89['iteration'] = NULL;
$array91 = array (
);$arguments89['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array91);
$arguments89['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output0 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['aria'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['name'] = NULL;
$arguments127['rel'] = NULL;
$arguments127['rev'] = NULL;
$arguments127['target'] = NULL;
$arguments127['action'] = NULL;
$arguments127['controller'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['pluginName'] = NULL;
$arguments127['pageUid'] = NULL;
$arguments127['pageType'] = NULL;
$arguments127['noCache'] = NULL;
$arguments127['language'] = NULL;
$arguments127['section'] = NULL;
$arguments127['format'] = NULL;
$arguments127['linkAccessRestrictedPages'] = NULL;
$arguments127['additionalParams'] = NULL;
$arguments127['absolute'] = NULL;
$arguments127['addQueryString'] = NULL;
$arguments127['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments127['addQueryStringMethod'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['action'] = 'list';
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array130);
$array131 = array (
);$array129['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array131);
$array132 = array (
);$array129['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array132);
$array133 = array (
);$array129['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array133);
$arguments127['arguments'] = $array129;

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
            ';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array151 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array151)]);
};
$arguments138 = array();
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['aria'] = NULL;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['name'] = NULL;
$arguments138['rel'] = NULL;
$arguments138['rev'] = NULL;
$arguments138['target'] = NULL;
$arguments138['action'] = NULL;
$arguments138['controller'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['pluginName'] = NULL;
$arguments138['pageUid'] = NULL;
$arguments138['pageType'] = NULL;
$arguments138['noCache'] = NULL;
$arguments138['language'] = NULL;
$arguments138['section'] = NULL;
$arguments138['format'] = NULL;
$arguments138['linkAccessRestrictedPages'] = NULL;
$arguments138['additionalParams'] = NULL;
$arguments138['absolute'] = NULL;
$arguments138['addQueryString'] = NULL;
$arguments138['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments138['addQueryStringMethod'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array143);
$array142['1'] = '==';
$array144 = array (
);$array142['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array144);

$expression145 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = 'active';
$arguments138['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array147);
$array148 = array (
);$array146['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array148);
$array149 = array (
);$array146['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array149);
$array150 = array (
);$array146['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array150);
$arguments138['arguments'] = $array146;

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
            ';
return $output137;
};
$arguments134 = array();
$arguments134['each'] = NULL;
$arguments134['as'] = NULL;
$arguments134['key'] = NULL;
$arguments134['reverse'] = false;
$arguments134['iteration'] = NULL;
$array136 = array (
);$arguments134['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array136);
$arguments134['as'] = 'pageNumber';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments158 = array();
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['aria'] = NULL;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['name'] = NULL;
$arguments158['rel'] = NULL;
$arguments158['rev'] = NULL;
$arguments158['target'] = NULL;
$arguments158['action'] = NULL;
$arguments158['controller'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['pluginName'] = NULL;
$arguments158['pageUid'] = NULL;
$arguments158['pageType'] = NULL;
$arguments158['noCache'] = NULL;
$arguments158['language'] = NULL;
$arguments158['section'] = NULL;
$arguments158['format'] = NULL;
$arguments158['linkAccessRestrictedPages'] = NULL;
$arguments158['additionalParams'] = NULL;
$arguments158['absolute'] = NULL;
$arguments158['addQueryString'] = NULL;
$arguments158['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments158['addQueryStringMethod'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['action'] = 'list';
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array161);
$array162 = array (
);$array160['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array162);
$array163 = array (
);$array160['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array163);
$array164 = array (
);$array160['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array164);
$arguments158['arguments'] = $array160;

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
            ';
return $output157;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

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
$output165 = '';

$output165 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['name'] = NULL;
$arguments166['name'] = 'Default';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output165 .= '

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
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return ' import';
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
$arguments171['action'] = 'import';
$arguments171['class'] = 'donne-green';

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '

        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['action'] = NULL;
$arguments173['arguments'] = array (
);
$arguments173['controller'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['pluginName'] = NULL;
$arguments173['pageUid'] = NULL;
$arguments173['pageType'] = 0;
$arguments173['noCache'] = NULL;
$arguments173['language'] = NULL;
$arguments173['section'] = '';
$arguments173['format'] = '';
$arguments173['linkAccessRestrictedPages'] = false;
$arguments173['additionalParams'] = array (
);
$arguments173['absolute'] = false;
$arguments173['addQueryString'] = false;
$arguments173['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments173['addQueryStringMethod'] = NULL;
$arguments173['action'] = 'list';
$arguments173['controller'] = 'Produkt';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output170 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array175 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array175)]);

$output170 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['aria'] = NULL;
$arguments183['name'] = NULL;
$arguments183['value'] = NULL;
$arguments183['property'] = NULL;
$arguments183['disabled'] = NULL;
$arguments183['errorClass'] = 'f3-form-error';
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$arguments183['checked'] = NULL;
$arguments183['multiple'] = false;
$output185 = '';

$output185 .= 'myCheckbox';
$array186 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array186);
$arguments183['id'] = $output185;
$arguments183['name'] = 'kategory[]';
$array187 = array (
);$arguments183['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array187);
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array188['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression189 = function($context) {return "{f";};
$arguments183['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
                        ';
return $output182;
};
$arguments180 = array();

$output179 .= NULL;

$output179 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['value'] = NULL;
$arguments190['name'] = NULL;
$arguments190['name'] = 'test';
$arguments190['value'] = 0;
$renderChildrenClosure191 = ($arguments190['value'] !== null) ? function() use ($arguments190) { return $arguments190['value']; } : $renderChildrenClosure191;
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output179 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['value'] = NULL;
$arguments210['name'] = NULL;
$arguments210['name'] = 'test';
$arguments210['value'] = 1;
$renderChildrenClosure211 = ($arguments210['value'] !== null) ? function() use ($arguments210) { return $arguments210['value']; } : $renderChildrenClosure211;
$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output209 .= '
                                    <span=>';
$array212 = array (
);
$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedUid', $array212)]);

$output209 .= '</span=>

                                ';
return $output209;
};
$arguments207 = array();

$output206 .= '';

$output206 .= '
                            ';
return $output206;
};
$arguments196 = array();
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$arguments196['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array203);
$array202['1'] = ' == ';
$array204 = array (
);$array202['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array204);

$expression205 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments196['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments196['__thenClosure'] = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['value'] = NULL;
$arguments199['name'] = NULL;
$arguments199['name'] = 'test';
$arguments199['value'] = 1;
$renderChildrenClosure200 = ($arguments199['value'] !== null) ? function() use ($arguments199) { return $arguments199['value']; } : $renderChildrenClosure200;
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output198 .= '
                                    <span=>';
$array201 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedUid', $array201)]);

$output198 .= '</span=>

                                ';
return $output198;
};

$output195 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
                        ';
return $output195;
};
$arguments192 = array();
$arguments192['each'] = NULL;
$arguments192['as'] = NULL;
$arguments192['key'] = NULL;
$arguments192['reverse'] = false;
$arguments192['iteration'] = NULL;
$array194 = array (
);$arguments192['each'] = $renderingContext->getVariableProvider()->getByPath('selectedkategory', $array194);
$arguments192['as'] = 'selectedUid';

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output179 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['additionalAttributes'] = NULL;
$arguments236['data'] = NULL;
$arguments236['aria'] = NULL;
$arguments236['name'] = NULL;
$arguments236['value'] = NULL;
$arguments236['property'] = NULL;
$arguments236['disabled'] = NULL;
$arguments236['errorClass'] = 'f3-form-error';
$arguments236['class'] = NULL;
$arguments236['dir'] = NULL;
$arguments236['id'] = NULL;
$arguments236['lang'] = NULL;
$arguments236['style'] = NULL;
$arguments236['title'] = NULL;
$arguments236['accesskey'] = NULL;
$arguments236['tabindex'] = NULL;
$arguments236['onclick'] = NULL;
$arguments236['checked'] = NULL;
$arguments236['multiple'] = false;
$output238 = '';

$output238 .= 'myCheckbox';
$array239 = array (
);
$output238 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array239);
$arguments236['id'] = $output238;
$arguments236['name'] = 'kategory[]';
$array240 = array (
);$arguments236['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array240);
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array241['0'] = 'checked';

$expression242 = function($context) {return "checked";};
$arguments236['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
                            ';
return $output235;
};
$arguments233 = array();

$output232 .= '';

$output232 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['additionalAttributes'] = NULL;
$arguments246['data'] = NULL;
$arguments246['aria'] = NULL;
$arguments246['name'] = NULL;
$arguments246['value'] = NULL;
$arguments246['property'] = NULL;
$arguments246['disabled'] = NULL;
$arguments246['errorClass'] = 'f3-form-error';
$arguments246['class'] = NULL;
$arguments246['dir'] = NULL;
$arguments246['id'] = NULL;
$arguments246['lang'] = NULL;
$arguments246['style'] = NULL;
$arguments246['title'] = NULL;
$arguments246['accesskey'] = NULL;
$arguments246['tabindex'] = NULL;
$arguments246['onclick'] = NULL;
$arguments246['checked'] = NULL;
$arguments246['multiple'] = false;
$output248 = '';

$output248 .= 'myCheckbox';
$array249 = array (
);
$output248 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array249);
$arguments246['id'] = $output248;
$arguments246['name'] = 'kategory[]';
$array250 = array (
);$arguments246['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array250);

$output245 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output245 .= '
                            ';
return $output245;
};
$arguments243 = array();
$arguments243['if'] = NULL;

$output232 .= '';

$output232 .= '
                        ';
return $output232;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array230);
$array229['1'] = ' == 1';

$expression231 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['aria'] = NULL;
$arguments216['name'] = NULL;
$arguments216['value'] = NULL;
$arguments216['property'] = NULL;
$arguments216['disabled'] = NULL;
$arguments216['errorClass'] = 'f3-form-error';
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['title'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['checked'] = NULL;
$arguments216['multiple'] = false;
$output218 = '';

$output218 .= 'myCheckbox';
$array219 = array (
);
$output218 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array219);
$arguments216['id'] = $output218;
$arguments216['name'] = 'kategory[]';
$array220 = array (
);$arguments216['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array220);
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array221['0'] = 'checked';

$expression222 = function($context) {return "checked";};
$arguments216['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
                            ';
return $output215;
};
$arguments213['__elseClosures'][] = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['additionalAttributes'] = NULL;
$arguments224['data'] = NULL;
$arguments224['aria'] = NULL;
$arguments224['name'] = NULL;
$arguments224['value'] = NULL;
$arguments224['property'] = NULL;
$arguments224['disabled'] = NULL;
$arguments224['errorClass'] = 'f3-form-error';
$arguments224['class'] = NULL;
$arguments224['dir'] = NULL;
$arguments224['id'] = NULL;
$arguments224['lang'] = NULL;
$arguments224['style'] = NULL;
$arguments224['title'] = NULL;
$arguments224['accesskey'] = NULL;
$arguments224['tabindex'] = NULL;
$arguments224['onclick'] = NULL;
$arguments224['checked'] = NULL;
$arguments224['multiple'] = false;
$output226 = '';

$output226 .= 'myCheckbox';
$array227 = array (
);
$output226 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array227);
$arguments224['id'] = $output226;
$arguments224['name'] = 'kategory[]';
$array228 = array (
);$arguments224['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array228);

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
                            ';
return $output223;
};

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output179 .= '
                         
                        <label class="donne" for="myCheckbox';
$array251 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array251)]);

$output179 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array252 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array252)]);

$output179 .= '</span>
                            <span class="category-name">';
$array253 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array253)]);

$output179 .= '</span>
                        </label>
                    </div>
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
);$arguments176['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array178);
$arguments176['as'] = 'kategory';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output170 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                ';
$array258 = array (
);
$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array258)]);

$output257 .= '
                ';
return $output257;
};
$arguments254 = array();
$arguments254['each'] = NULL;
$arguments254['as'] = NULL;
$arguments254['key'] = NULL;
$arguments254['reverse'] = false;
$arguments254['iteration'] = NULL;
$array256 = array (
);$arguments254['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array256);
$arguments254['as'] = 'data';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output170 .= '
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
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['action'] = NULL;
$arguments263['arguments'] = array (
);
$arguments263['controller'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['pluginName'] = NULL;
$arguments263['pageUid'] = NULL;
$arguments263['pageType'] = 0;
$arguments263['noCache'] = NULL;
$arguments263['language'] = NULL;
$arguments263['section'] = '';
$arguments263['format'] = '';
$arguments263['linkAccessRestrictedPages'] = false;
$arguments263['additionalParams'] = array (
);
$arguments263['absolute'] = false;
$arguments263['addQueryString'] = false;
$arguments263['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments263['addQueryStringMethod'] = NULL;
$arguments263['action'] = 'show';
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array266);
$arguments263['arguments'] = $array265;

$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext)]);

$output262 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array267 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array267)]);

$output262 .= '</h1>
                          <h2 class="donne-green product-price">';
$array268 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array268)]);

$output262 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array284 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array284)]);

$output283 .= '" alt="alt';
$array285 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array285)]);

$output283 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output283;
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array289 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array289)]);

$output288 .= '" alt="alt';
$array290 = array (
);
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array290)]);

$output288 .= '">
                              </div>
                          ';
return $output288;
};
$arguments286 = array();
$arguments286['if'] = NULL;

$output280 .= '';

$output280 .= '
                      ';
return $output280;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array278);
$array277['1'] = ' == 0';

$expression279 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array272)]);

$output271 .= '" alt="alt';
$array273 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array273)]);

$output271 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output271;
};
$arguments269['__elseClosures'][] = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array275 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array275)]);

$output274 .= '" alt="alt';
$array276 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array276)]);

$output274 .= '">
                              </div>
                          ';
return $output274;
};

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output262 .= '
                  </div>
              </a>
          ';
return $output262;
};
$arguments259 = array();
$arguments259['each'] = NULL;
$arguments259['as'] = NULL;
$arguments259['key'] = NULL;
$arguments259['reverse'] = false;
$arguments259['iteration'] = NULL;
$array261 = array (
);$arguments259['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array261);
$arguments259['as'] = 'produkt';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output170 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments297 = array();
$arguments297['additionalAttributes'] = NULL;
$arguments297['data'] = NULL;
$arguments297['aria'] = NULL;
$arguments297['class'] = NULL;
$arguments297['dir'] = NULL;
$arguments297['id'] = NULL;
$arguments297['lang'] = NULL;
$arguments297['style'] = NULL;
$arguments297['title'] = NULL;
$arguments297['accesskey'] = NULL;
$arguments297['tabindex'] = NULL;
$arguments297['onclick'] = NULL;
$arguments297['name'] = NULL;
$arguments297['rel'] = NULL;
$arguments297['rev'] = NULL;
$arguments297['target'] = NULL;
$arguments297['action'] = NULL;
$arguments297['controller'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['pluginName'] = NULL;
$arguments297['pageUid'] = NULL;
$arguments297['pageType'] = NULL;
$arguments297['noCache'] = NULL;
$arguments297['language'] = NULL;
$arguments297['section'] = NULL;
$arguments297['format'] = NULL;
$arguments297['linkAccessRestrictedPages'] = NULL;
$arguments297['additionalParams'] = NULL;
$arguments297['absolute'] = NULL;
$arguments297['addQueryString'] = NULL;
$arguments297['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments297['addQueryStringMethod'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['action'] = 'list';
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array300);
$array301 = array (
);$array299['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array301);
$array302 = array (
);$array299['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array302);
$array303 = array (
);$array299['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array303);
$arguments297['arguments'] = $array299;

$output296 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
            ';
return $output296;
};
$arguments291 = array();
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$arguments291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array294);

$expression295 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments291['__thenClosure'] = $renderChildrenClosure292;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output170 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$array321 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array321)]);
};
$arguments308 = array();
$arguments308['additionalAttributes'] = NULL;
$arguments308['data'] = NULL;
$arguments308['aria'] = NULL;
$arguments308['class'] = NULL;
$arguments308['dir'] = NULL;
$arguments308['id'] = NULL;
$arguments308['lang'] = NULL;
$arguments308['style'] = NULL;
$arguments308['title'] = NULL;
$arguments308['accesskey'] = NULL;
$arguments308['tabindex'] = NULL;
$arguments308['onclick'] = NULL;
$arguments308['name'] = NULL;
$arguments308['rel'] = NULL;
$arguments308['rev'] = NULL;
$arguments308['target'] = NULL;
$arguments308['action'] = NULL;
$arguments308['controller'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['pluginName'] = NULL;
$arguments308['pageUid'] = NULL;
$arguments308['pageType'] = NULL;
$arguments308['noCache'] = NULL;
$arguments308['language'] = NULL;
$arguments308['section'] = NULL;
$arguments308['format'] = NULL;
$arguments308['linkAccessRestrictedPages'] = NULL;
$arguments308['additionalParams'] = NULL;
$arguments308['absolute'] = NULL;
$arguments308['addQueryString'] = NULL;
$arguments308['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments308['addQueryStringMethod'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$arguments310['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array313);
$array312['1'] = '==';
$array314 = array (
);$array312['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array314);

$expression315 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments310['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array312)
					),
					$renderingContext
				);
$arguments310['then'] = 'active';
$arguments308['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);
// Rendering Array
$array316 = array();
$array317 = array (
);$array316['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array317);
$array318 = array (
);$array316['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array318);
$array319 = array (
);$array316['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array319);
$array320 = array (
);$array316['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array320);
$arguments308['arguments'] = $array316;

$output307 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
            ';
return $output307;
};
$arguments304 = array();
$arguments304['each'] = NULL;
$arguments304['as'] = NULL;
$arguments304['key'] = NULL;
$arguments304['reverse'] = false;
$arguments304['iteration'] = NULL;
$array306 = array (
);$arguments304['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array306);
$arguments304['as'] = 'pageNumber';

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output170 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments328 = array();
$arguments328['additionalAttributes'] = NULL;
$arguments328['data'] = NULL;
$arguments328['aria'] = NULL;
$arguments328['class'] = NULL;
$arguments328['dir'] = NULL;
$arguments328['id'] = NULL;
$arguments328['lang'] = NULL;
$arguments328['style'] = NULL;
$arguments328['title'] = NULL;
$arguments328['accesskey'] = NULL;
$arguments328['tabindex'] = NULL;
$arguments328['onclick'] = NULL;
$arguments328['name'] = NULL;
$arguments328['rel'] = NULL;
$arguments328['rev'] = NULL;
$arguments328['target'] = NULL;
$arguments328['action'] = NULL;
$arguments328['controller'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['pluginName'] = NULL;
$arguments328['pageUid'] = NULL;
$arguments328['pageType'] = NULL;
$arguments328['noCache'] = NULL;
$arguments328['language'] = NULL;
$arguments328['section'] = NULL;
$arguments328['format'] = NULL;
$arguments328['linkAccessRestrictedPages'] = NULL;
$arguments328['additionalParams'] = NULL;
$arguments328['absolute'] = NULL;
$arguments328['addQueryString'] = NULL;
$arguments328['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments328['addQueryStringMethod'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['action'] = 'list';
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array331);
$array332 = array (
);$array330['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array332);
$array333 = array (
);$array330['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array333);
$array334 = array (
);$array330['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array334);
$arguments328['arguments'] = $array330;

$output327 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
            ';
return $output327;
};
$arguments322 = array();
$arguments322['then'] = NULL;
$arguments322['else'] = NULL;
$arguments322['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array324 = array();
$array325 = array (
);$array324['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array325);

$expression326 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments322['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression326(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array324)
					),
					$renderingContext
				);
$arguments322['__thenClosure'] = $renderChildrenClosure323;

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output170 .= '
        </div>

    </div>  

';
return $output170;
};
$arguments168 = array();
$arguments168['name'] = NULL;
$arguments168['name'] = 'content';

$output165 .= NULL;

$output165 .= '

';

return $output165;
}


}
#