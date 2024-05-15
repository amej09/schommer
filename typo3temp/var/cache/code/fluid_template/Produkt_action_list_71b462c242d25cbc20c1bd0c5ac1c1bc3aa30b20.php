<?php

class Produkt_action_list_71b462c242d25cbc20c1bd0c5ac1c1bc3aa30b20 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output163 = '';

$output163 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['action'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['controller'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['pluginName'] = NULL;
$arguments171['pageUid'] = NULL;
$arguments171['pageType'] = 0;
$arguments171['noCache'] = NULL;
$arguments171['language'] = NULL;
$arguments171['section'] = '';
$arguments171['format'] = '';
$arguments171['linkAccessRestrictedPages'] = false;
$arguments171['additionalParams'] = array (
);
$arguments171['absolute'] = false;
$arguments171['addQueryString'] = false;
$arguments171['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments171['addQueryStringMethod'] = NULL;
$arguments171['action'] = 'show';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array174);
$arguments171['arguments'] = $array173;

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array175 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array175)]);

$output170 .= '</h1>
                            <h2 class="donne-green product-price">';
$array176 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array176)]);

$output170 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array192 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array192)]);

$output191 .= '" alt="alt';
$array193 = array (
);
$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array193)]);

$output191 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output191;
};
$arguments189 = array();

$output188 .= '';

$output188 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                <div class="product-img zoom">
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
                            ';
return $output196;
};
$arguments194 = array();
$arguments194['if'] = NULL;

$output188 .= '';

$output188 .= '
                        ';
return $output188;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array186);
$array185['1'] = ' == 0';

$expression187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments177['__thenClosure'] = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array180 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array180)]);

$output179 .= '" alt="alt';
$array181 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array181)]);

$output179 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output179;
};
$arguments177['__elseClosures'][] = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array183 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array183)]);

$output182 .= '" alt="alt';
$array184 = array (
);
$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array184)]);

$output182 .= '">
                                </div>
                            ';
return $output182;
};

$output170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output170 .= '
                    </div>
                </a>
            ';
return $output170;
};
$arguments167 = array();
$arguments167['each'] = NULL;
$arguments167['as'] = NULL;
$arguments167['key'] = NULL;
$arguments167['reverse'] = false;
$arguments167['iteration'] = NULL;
$array169 = array (
);$arguments167['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array169);
$arguments167['as'] = 'produkt';

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
            </div>
            <!-- Pagination -->

            <div class="pagination">
            
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments205 = array();
$arguments205['additionalAttributes'] = NULL;
$arguments205['data'] = NULL;
$arguments205['aria'] = NULL;
$arguments205['class'] = NULL;
$arguments205['dir'] = NULL;
$arguments205['id'] = NULL;
$arguments205['lang'] = NULL;
$arguments205['style'] = NULL;
$arguments205['title'] = NULL;
$arguments205['accesskey'] = NULL;
$arguments205['tabindex'] = NULL;
$arguments205['onclick'] = NULL;
$arguments205['name'] = NULL;
$arguments205['rel'] = NULL;
$arguments205['rev'] = NULL;
$arguments205['target'] = NULL;
$arguments205['action'] = NULL;
$arguments205['controller'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['pluginName'] = NULL;
$arguments205['pageUid'] = NULL;
$arguments205['pageType'] = NULL;
$arguments205['noCache'] = NULL;
$arguments205['language'] = NULL;
$arguments205['section'] = NULL;
$arguments205['format'] = NULL;
$arguments205['linkAccessRestrictedPages'] = NULL;
$arguments205['additionalParams'] = NULL;
$arguments205['absolute'] = NULL;
$arguments205['addQueryString'] = NULL;
$arguments205['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments205['addQueryStringMethod'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['action'] = 'list';
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array208);
$array209 = array (
);$array207['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array209);
$array210 = array (
);$array207['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array210);
$array211 = array (
);$array207['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array211);
$arguments205['arguments'] = $array207;

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
                ';
return $output204;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array201 = array();
$array202 = array (
);$array201['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array202);

$expression203 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = $renderChildrenClosure200;

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output166 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$array229 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array229)]);
};
$arguments216 = array();
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['aria'] = NULL;
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['title'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['name'] = NULL;
$arguments216['rel'] = NULL;
$arguments216['rev'] = NULL;
$arguments216['target'] = NULL;
$arguments216['action'] = NULL;
$arguments216['controller'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['pluginName'] = NULL;
$arguments216['pageUid'] = NULL;
$arguments216['pageType'] = NULL;
$arguments216['noCache'] = NULL;
$arguments216['language'] = NULL;
$arguments216['section'] = NULL;
$arguments216['format'] = NULL;
$arguments216['linkAccessRestrictedPages'] = NULL;
$arguments216['additionalParams'] = NULL;
$arguments216['absolute'] = NULL;
$arguments216['addQueryString'] = NULL;
$arguments216['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments216['addQueryStringMethod'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array221);
$array220['1'] = '==';
$array222 = array (
);$array220['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array222);

$expression223 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments218['then'] = 'active';
$arguments216['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array225);
$array226 = array (
);$array224['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array226);
$array227 = array (
);$array224['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array227);
$array228 = array (
);$array224['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array228);
$arguments216['arguments'] = $array224;

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
                ';
return $output215;
};
$arguments212 = array();
$arguments212['each'] = NULL;
$arguments212['as'] = NULL;
$arguments212['key'] = NULL;
$arguments212['reverse'] = false;
$arguments212['iteration'] = NULL;
$array214 = array (
);$arguments212['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array214);
$arguments212['as'] = 'pageNumber';

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output166 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments236 = array();
$arguments236['additionalAttributes'] = NULL;
$arguments236['data'] = NULL;
$arguments236['aria'] = NULL;
$arguments236['class'] = NULL;
$arguments236['dir'] = NULL;
$arguments236['id'] = NULL;
$arguments236['lang'] = NULL;
$arguments236['style'] = NULL;
$arguments236['title'] = NULL;
$arguments236['accesskey'] = NULL;
$arguments236['tabindex'] = NULL;
$arguments236['onclick'] = NULL;
$arguments236['name'] = NULL;
$arguments236['rel'] = NULL;
$arguments236['rev'] = NULL;
$arguments236['target'] = NULL;
$arguments236['action'] = NULL;
$arguments236['controller'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['pluginName'] = NULL;
$arguments236['pageUid'] = NULL;
$arguments236['pageType'] = NULL;
$arguments236['noCache'] = NULL;
$arguments236['language'] = NULL;
$arguments236['section'] = NULL;
$arguments236['format'] = NULL;
$arguments236['linkAccessRestrictedPages'] = NULL;
$arguments236['additionalParams'] = NULL;
$arguments236['absolute'] = NULL;
$arguments236['addQueryString'] = NULL;
$arguments236['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments236['addQueryStringMethod'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['action'] = 'list';
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array239);
$array240 = array (
);$array238['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array240);
$array241 = array (
);$array238['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array241);
$array242 = array (
);$array238['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array242);
$arguments236['arguments'] = $array238;

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
                ';
return $output235;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array233);

$expression234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments230['__thenClosure'] = $renderChildrenClosure231;

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output166 .= '
            </div>
            ';
return $output166;
};
$arguments164 = array();

$output163 .= '';

$output163 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments243 = array();
$arguments243['if'] = NULL;

$output163 .= '';

$output163 .= '
        ';
return $output163;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array161);

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
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

            <div class="pagination">
            
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['aria'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['name'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['rev'] = NULL;
$arguments122['target'] = NULL;
$arguments122['action'] = NULL;
$arguments122['controller'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['pluginName'] = NULL;
$arguments122['pageUid'] = NULL;
$arguments122['pageType'] = NULL;
$arguments122['noCache'] = NULL;
$arguments122['language'] = NULL;
$arguments122['section'] = NULL;
$arguments122['format'] = NULL;
$arguments122['linkAccessRestrictedPages'] = NULL;
$arguments122['additionalParams'] = NULL;
$arguments122['absolute'] = NULL;
$arguments122['addQueryString'] = NULL;
$arguments122['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments122['addQueryStringMethod'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['action'] = 'list';
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array125);
$array126 = array (
);$array124['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array126);
$array127 = array (
);$array124['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array127);
$array128 = array (
);$array124['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array128);
$arguments122['arguments'] = $array124;

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
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
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$array146 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array146)]);
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['aria'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['action'] = NULL;
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = NULL;
$arguments133['noCache'] = NULL;
$arguments133['language'] = NULL;
$arguments133['section'] = NULL;
$arguments133['format'] = NULL;
$arguments133['linkAccessRestrictedPages'] = NULL;
$arguments133['additionalParams'] = NULL;
$arguments133['absolute'] = NULL;
$arguments133['addQueryString'] = NULL;
$arguments133['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array138);
$array137['1'] = '==';
$array139 = array (
);$array137['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array139);

$expression140 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments135['then'] = 'active';
$arguments133['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array142);
$array143 = array (
);$array141['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array143);
$array144 = array (
);$array141['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array144);
$array145 = array (
);$array141['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array145);
$arguments133['arguments'] = $array141;

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                ';
return $output132;
};
$arguments129 = array();
$arguments129['each'] = NULL;
$arguments129['as'] = NULL;
$arguments129['key'] = NULL;
$arguments129['reverse'] = false;
$arguments129['iteration'] = NULL;
$array131 = array (
);$arguments129['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array131);
$arguments129['as'] = 'pageNumber';

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output83 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments153 = array();
$arguments153['additionalAttributes'] = NULL;
$arguments153['data'] = NULL;
$arguments153['aria'] = NULL;
$arguments153['class'] = NULL;
$arguments153['dir'] = NULL;
$arguments153['id'] = NULL;
$arguments153['lang'] = NULL;
$arguments153['style'] = NULL;
$arguments153['title'] = NULL;
$arguments153['accesskey'] = NULL;
$arguments153['tabindex'] = NULL;
$arguments153['onclick'] = NULL;
$arguments153['name'] = NULL;
$arguments153['rel'] = NULL;
$arguments153['rev'] = NULL;
$arguments153['target'] = NULL;
$arguments153['action'] = NULL;
$arguments153['controller'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['pluginName'] = NULL;
$arguments153['pageUid'] = NULL;
$arguments153['pageType'] = NULL;
$arguments153['noCache'] = NULL;
$arguments153['language'] = NULL;
$arguments153['section'] = NULL;
$arguments153['format'] = NULL;
$arguments153['linkAccessRestrictedPages'] = NULL;
$arguments153['additionalParams'] = NULL;
$arguments153['absolute'] = NULL;
$arguments153['addQueryString'] = NULL;
$arguments153['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments153['addQueryStringMethod'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['action'] = 'list';
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array156);
$array157 = array (
);$array155['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array157);
$array158 = array (
);$array155['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array158);
$array159 = array (
);$array155['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array159);
$arguments153['arguments'] = $array155;

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                ';
return $output152;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['__thenClosure'] = $renderChildrenClosure148;

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output83 .= '
            </div>
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
$output245 = '';

$output245 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['name'] = NULL;
$arguments246['name'] = 'Default';

$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output245 .= '

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
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['aria'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['name'] = NULL;
$arguments251['rel'] = NULL;
$arguments251['rev'] = NULL;
$arguments251['target'] = NULL;
$arguments251['action'] = NULL;
$arguments251['controller'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['pluginName'] = NULL;
$arguments251['pageUid'] = NULL;
$arguments251['pageType'] = NULL;
$arguments251['noCache'] = NULL;
$arguments251['language'] = NULL;
$arguments251['section'] = NULL;
$arguments251['format'] = NULL;
$arguments251['linkAccessRestrictedPages'] = NULL;
$arguments251['additionalParams'] = NULL;
$arguments251['absolute'] = NULL;
$arguments251['addQueryString'] = NULL;
$arguments251['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments251['addQueryStringMethod'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['action'] = 'import';
$arguments251['class'] = 'donne-green';

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['action'] = NULL;
$arguments253['arguments'] = array (
);
$arguments253['controller'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['pluginName'] = NULL;
$arguments253['pageUid'] = NULL;
$arguments253['pageType'] = 0;
$arguments253['noCache'] = NULL;
$arguments253['language'] = NULL;
$arguments253['section'] = '';
$arguments253['format'] = '';
$arguments253['linkAccessRestrictedPages'] = false;
$arguments253['additionalParams'] = array (
);
$arguments253['absolute'] = false;
$arguments253['addQueryString'] = false;
$arguments253['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments253['addQueryStringMethod'] = NULL;
$arguments253['action'] = 'list';
$arguments253['controller'] = 'Produkt';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output250 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array255 = array (
);
$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array255)]);

$output250 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['aria'] = NULL;
$arguments263['name'] = NULL;
$arguments263['value'] = NULL;
$arguments263['property'] = NULL;
$arguments263['disabled'] = NULL;
$arguments263['errorClass'] = 'f3-form-error';
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['title'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['checked'] = NULL;
$arguments263['multiple'] = false;
$output265 = '';

$output265 .= 'myCheckbox';
$array266 = array (
);
$output265 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array266);
$arguments263['id'] = $output265;
$arguments263['name'] = 'kategory[]';
$array267 = array (
);$arguments263['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array267);
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array268['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression269 = function($context) {return "{f";};
$arguments263['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression269(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
                        ';
return $output262;
};
$arguments260 = array();

$output259 .= NULL;

$output259 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['value'] = NULL;
$arguments270['name'] = NULL;
$arguments270['name'] = 'test';
$arguments270['value'] = 0;
$renderChildrenClosure271 = ($arguments270['value'] !== null) ? function() use ($arguments270) { return $arguments270['value']; } : $renderChildrenClosure271;
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output259 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['value'] = NULL;
$arguments289['name'] = NULL;
$arguments289['name'] = 'test';
$arguments289['value'] = 1;
$renderChildrenClosure290 = ($arguments289['value'] !== null) ? function() use ($arguments289) { return $arguments289['value']; } : $renderChildrenClosure290;
$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output288 .= '
                                ';
return $output288;
};
$arguments286 = array();

$output285 .= '';

$output285 .= '
                            ';
return $output285;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array282);
$array281['1'] = ' == ';
$array283 = array (
);$array281['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array283);

$expression284 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['value'] = NULL;
$arguments279['name'] = NULL;
$arguments279['name'] = 'test';
$arguments279['value'] = 1;
$renderChildrenClosure280 = ($arguments279['value'] !== null) ? function() use ($arguments279) { return $arguments279['value']; } : $renderChildrenClosure280;
$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output278 .= '
                                ';
return $output278;
};

$output275 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
                        ';
return $output275;
};
$arguments272 = array();
$arguments272['each'] = NULL;
$arguments272['as'] = NULL;
$arguments272['key'] = NULL;
$arguments272['reverse'] = false;
$arguments272['iteration'] = NULL;
$array274 = array (
);$arguments272['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array274);
$arguments272['as'] = 'selectedUid';

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output259 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
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
// Rendering Boolean node
// Rendering Array
$array319 = array();
$array319['0'] = 'checked';

$expression320 = function($context) {return "checked";};
$arguments314['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression320(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array319)
					),
					$renderingContext
				);

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
                            ';
return $output313;
};
$arguments311 = array();

$output310 .= '';

$output310 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['aria'] = NULL;
$arguments324['name'] = NULL;
$arguments324['value'] = NULL;
$arguments324['property'] = NULL;
$arguments324['disabled'] = NULL;
$arguments324['errorClass'] = 'f3-form-error';
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['title'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['checked'] = NULL;
$arguments324['multiple'] = false;
$output326 = '';

$output326 .= 'myCheckbox';
$array327 = array (
);
$output326 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array327);
$arguments324['id'] = $output326;
$arguments324['onclick'] = 'submit()';
$arguments324['name'] = 'kategory[]';
$array328 = array (
);$arguments324['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array328);

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
                            ';
return $output323;
};
$arguments321 = array();
$arguments321['if'] = NULL;

$output310 .= '';

$output310 .= '
                        ';
return $output310;
};
$arguments291 = array();
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$arguments291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array308);
$array307['1'] = ' == 1';

$expression309 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$arguments291['__thenClosure'] = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['additionalAttributes'] = NULL;
$arguments294['data'] = NULL;
$arguments294['aria'] = NULL;
$arguments294['name'] = NULL;
$arguments294['value'] = NULL;
$arguments294['property'] = NULL;
$arguments294['disabled'] = NULL;
$arguments294['errorClass'] = 'f3-form-error';
$arguments294['class'] = NULL;
$arguments294['dir'] = NULL;
$arguments294['id'] = NULL;
$arguments294['lang'] = NULL;
$arguments294['style'] = NULL;
$arguments294['title'] = NULL;
$arguments294['accesskey'] = NULL;
$arguments294['tabindex'] = NULL;
$arguments294['onclick'] = NULL;
$arguments294['checked'] = NULL;
$arguments294['multiple'] = false;
$output296 = '';

$output296 .= 'myCheckbox';
$array297 = array (
);
$output296 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array297);
$arguments294['id'] = $output296;
$arguments294['onclick'] = 'submit()';
$arguments294['name'] = 'kategory[]';
$array298 = array (
);$arguments294['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array298);
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array299['0'] = 'checked';

$expression300 = function($context) {return "checked";};
$arguments294['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression300(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
                            ';
return $output293;
};
$arguments291['__elseClosures'][] = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['additionalAttributes'] = NULL;
$arguments302['data'] = NULL;
$arguments302['aria'] = NULL;
$arguments302['name'] = NULL;
$arguments302['value'] = NULL;
$arguments302['property'] = NULL;
$arguments302['disabled'] = NULL;
$arguments302['errorClass'] = 'f3-form-error';
$arguments302['class'] = NULL;
$arguments302['dir'] = NULL;
$arguments302['id'] = NULL;
$arguments302['lang'] = NULL;
$arguments302['style'] = NULL;
$arguments302['title'] = NULL;
$arguments302['accesskey'] = NULL;
$arguments302['tabindex'] = NULL;
$arguments302['onclick'] = NULL;
$arguments302['checked'] = NULL;
$arguments302['multiple'] = false;
$output304 = '';

$output304 .= 'myCheckbox';
$array305 = array (
);
$output304 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array305);
$arguments302['id'] = $output304;
$arguments302['onclick'] = 'submit()';
$arguments302['name'] = 'kategory[]';
$array306 = array (
);$arguments302['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array306);

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
                            ';
return $output301;
};

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output259 .= '
                         
                        <label class="donne" for="myCheckbox';
$array329 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array329)]);

$output259 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array330 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array330)]);

$output259 .= '</span>
                         </label>
                    </div>
                ';
return $output259;
};
$arguments256 = array();
$arguments256['each'] = NULL;
$arguments256['as'] = NULL;
$arguments256['key'] = NULL;
$arguments256['reverse'] = false;
$arguments256['iteration'] = NULL;
$array258 = array (
);$arguments256['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array258);
$arguments256['as'] = 'kategory';

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output250 .= '
                
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
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['action'] = NULL;
$arguments421['arguments'] = array (
);
$arguments421['controller'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['pluginName'] = NULL;
$arguments421['pageUid'] = NULL;
$arguments421['pageType'] = 0;
$arguments421['noCache'] = NULL;
$arguments421['language'] = NULL;
$arguments421['section'] = '';
$arguments421['format'] = '';
$arguments421['linkAccessRestrictedPages'] = false;
$arguments421['additionalParams'] = array (
);
$arguments421['absolute'] = false;
$arguments421['addQueryString'] = false;
$arguments421['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments421['addQueryStringMethod'] = NULL;
$arguments421['action'] = 'show';
// Rendering Array
$array423 = array();
$array424 = array (
);$array423['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array424);
$arguments421['arguments'] = $array423;

$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext)]);

$output420 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array425 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array425)]);

$output420 .= '</h1>
                            <h2 class="donne-green product-price">';
$array426 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array426)]);

$output420 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
                                <div class="out-of-stock zoom">
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
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output441;
};
$arguments439 = array();

$output438 .= '';

$output438 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array447 = array (
);
$output446 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array447)]);

$output446 .= '" alt="alt';
$array448 = array (
);
$output446 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array448)]);

$output446 .= '">
                                </div>
                            ';
return $output446;
};
$arguments444 = array();
$arguments444['if'] = NULL;

$output438 .= '';

$output438 .= '
                        ';
return $output438;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array435 = array();
$array436 = array (
);$array435['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array436);
$array435['1'] = ' == 0';

$expression437 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array435)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array430 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array430)]);

$output429 .= '" alt="alt';
$array431 = array (
);
$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array431)]);

$output429 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output429;
};
$arguments427['__elseClosures'][] = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array433 = array (
);
$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array433)]);

$output432 .= '" alt="alt';
$array434 = array (
);
$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array434)]);

$output432 .= '">
                                </div>
                            ';
return $output432;
};

$output420 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output420 .= '
                    </div>
                </a>
            ';
return $output420;
};
$arguments417 = array();
$arguments417['each'] = NULL;
$arguments417['as'] = NULL;
$arguments417['key'] = NULL;
$arguments417['reverse'] = false;
$arguments417['iteration'] = NULL;
$array419 = array (
);$arguments417['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array419);
$arguments417['as'] = 'produkt';

$output416 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output416 .= '
            </div>
            <!-- Pagination -->

            <div class="pagination">
            
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments455 = array();
$arguments455['additionalAttributes'] = NULL;
$arguments455['data'] = NULL;
$arguments455['aria'] = NULL;
$arguments455['class'] = NULL;
$arguments455['dir'] = NULL;
$arguments455['id'] = NULL;
$arguments455['lang'] = NULL;
$arguments455['style'] = NULL;
$arguments455['title'] = NULL;
$arguments455['accesskey'] = NULL;
$arguments455['tabindex'] = NULL;
$arguments455['onclick'] = NULL;
$arguments455['name'] = NULL;
$arguments455['rel'] = NULL;
$arguments455['rev'] = NULL;
$arguments455['target'] = NULL;
$arguments455['action'] = NULL;
$arguments455['controller'] = NULL;
$arguments455['extensionName'] = NULL;
$arguments455['pluginName'] = NULL;
$arguments455['pageUid'] = NULL;
$arguments455['pageType'] = NULL;
$arguments455['noCache'] = NULL;
$arguments455['language'] = NULL;
$arguments455['section'] = NULL;
$arguments455['format'] = NULL;
$arguments455['linkAccessRestrictedPages'] = NULL;
$arguments455['additionalParams'] = NULL;
$arguments455['absolute'] = NULL;
$arguments455['addQueryString'] = NULL;
$arguments455['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments455['addQueryStringMethod'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['action'] = 'list';
// Rendering Array
$array457 = array();
$array458 = array (
);$array457['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array458);
$array459 = array (
);$array457['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array459);
$array460 = array (
);$array457['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array460);
$array461 = array (
);$array457['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array461);
$arguments455['arguments'] = $array457;

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output454 .= '
                ';
return $output454;
};
$arguments449 = array();
$arguments449['then'] = NULL;
$arguments449['else'] = NULL;
$arguments449['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array451 = array();
$array452 = array (
);$array451['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array452);

$expression453 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments449['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array451)
					),
					$renderingContext
				);
$arguments449['__thenClosure'] = $renderChildrenClosure450;

$output416 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output416 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$array479 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array479)]);
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['aria'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
$arguments466['name'] = NULL;
$arguments466['rel'] = NULL;
$arguments466['rev'] = NULL;
$arguments466['target'] = NULL;
$arguments466['action'] = NULL;
$arguments466['controller'] = NULL;
$arguments466['extensionName'] = NULL;
$arguments466['pluginName'] = NULL;
$arguments466['pageUid'] = NULL;
$arguments466['pageType'] = NULL;
$arguments466['noCache'] = NULL;
$arguments466['language'] = NULL;
$arguments466['section'] = NULL;
$arguments466['format'] = NULL;
$arguments466['linkAccessRestrictedPages'] = NULL;
$arguments466['additionalParams'] = NULL;
$arguments466['absolute'] = NULL;
$arguments466['addQueryString'] = NULL;
$arguments466['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments466['addQueryStringMethod'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array470 = array();
$array471 = array (
);$array470['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array471);
$array470['1'] = '==';
$array472 = array (
);$array470['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array472);

$expression473 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array470)
					),
					$renderingContext
				);
$arguments468['then'] = 'active';
$arguments466['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array475);
$array476 = array (
);$array474['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array476);
$array477 = array (
);$array474['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array477);
$array478 = array (
);$array474['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array478);
$arguments466['arguments'] = $array474;

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
                ';
return $output465;
};
$arguments462 = array();
$arguments462['each'] = NULL;
$arguments462['as'] = NULL;
$arguments462['key'] = NULL;
$arguments462['reverse'] = false;
$arguments462['iteration'] = NULL;
$array464 = array (
);$arguments462['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array464);
$arguments462['as'] = 'pageNumber';

$output416 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output416 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments486 = array();
$arguments486['additionalAttributes'] = NULL;
$arguments486['data'] = NULL;
$arguments486['aria'] = NULL;
$arguments486['class'] = NULL;
$arguments486['dir'] = NULL;
$arguments486['id'] = NULL;
$arguments486['lang'] = NULL;
$arguments486['style'] = NULL;
$arguments486['title'] = NULL;
$arguments486['accesskey'] = NULL;
$arguments486['tabindex'] = NULL;
$arguments486['onclick'] = NULL;
$arguments486['name'] = NULL;
$arguments486['rel'] = NULL;
$arguments486['rev'] = NULL;
$arguments486['target'] = NULL;
$arguments486['action'] = NULL;
$arguments486['controller'] = NULL;
$arguments486['extensionName'] = NULL;
$arguments486['pluginName'] = NULL;
$arguments486['pageUid'] = NULL;
$arguments486['pageType'] = NULL;
$arguments486['noCache'] = NULL;
$arguments486['language'] = NULL;
$arguments486['section'] = NULL;
$arguments486['format'] = NULL;
$arguments486['linkAccessRestrictedPages'] = NULL;
$arguments486['additionalParams'] = NULL;
$arguments486['absolute'] = NULL;
$arguments486['addQueryString'] = NULL;
$arguments486['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments486['addQueryStringMethod'] = NULL;
$arguments486['arguments'] = NULL;
$arguments486['action'] = 'list';
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array489);
$array490 = array (
);$array488['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array490);
$array491 = array (
);$array488['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array491);
$array492 = array (
);$array488['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array492);
$arguments486['arguments'] = $array488;

$output485 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output485 .= '
                ';
return $output485;
};
$arguments480 = array();
$arguments480['then'] = NULL;
$arguments480['else'] = NULL;
$arguments480['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array482 = array();
$array483 = array (
);$array482['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array483);

$expression484 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments480['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression484(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array482)
					),
					$renderingContext
				);
$arguments480['__thenClosure'] = $renderChildrenClosure481;

$output416 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output416 .= '
            </div>
            ';
return $output416;
};
$arguments414 = array();

$output413 .= '';

$output413 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};
$arguments493 = array();
$arguments493['if'] = NULL;

$output413 .= '';

$output413 .= '
        ';
return $output413;
};
$arguments331 = array();
$arguments331['then'] = NULL;
$arguments331['else'] = NULL;
$arguments331['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array411);

$expression412 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments331['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression412(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments331['__thenClosure'] = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '

            <div class="product-cards">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['action'] = NULL;
$arguments338['arguments'] = array (
);
$arguments338['controller'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['pluginName'] = NULL;
$arguments338['pageUid'] = NULL;
$arguments338['pageType'] = 0;
$arguments338['noCache'] = NULL;
$arguments338['language'] = NULL;
$arguments338['section'] = '';
$arguments338['format'] = '';
$arguments338['linkAccessRestrictedPages'] = false;
$arguments338['additionalParams'] = array (
);
$arguments338['absolute'] = false;
$arguments338['addQueryString'] = false;
$arguments338['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments338['addQueryStringMethod'] = NULL;
$arguments338['action'] = 'show';
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array341);
$arguments338['arguments'] = $array340;

$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output337 .= '">
                    <div class="product-card">
                        <div class="product-info">
                            <h1 class="product-title">';
$array342 = array (
);
$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array342)]);

$output337 .= '</h1>
                            <h2 class="donne-green product-price">';
$array343 = array (
);
$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array343)]);

$output337 .= ' €</h2>
                        </div>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
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
$arguments356 = array();

$output355 .= '';

$output355 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array364)]);

$output363 .= '" alt="alt';
$array365 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array365)]);

$output363 .= '">
                                </div>
                            ';
return $output363;
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output355 .= '';

$output355 .= '
                        ';
return $output355;
};
$arguments344 = array();
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$arguments344['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array353);
$array352['1'] = ' == 0';

$expression354 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments344['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array352)
					),
					$renderingContext
				);
$arguments344['__thenClosure'] = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                                <div class="out-of-stock zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array347 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array347)]);

$output346 .= '" alt="alt';
$array348 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array348)]);

$output346 .= '">
                                </div>
                                <h2 class="out-of-stock-text">ausverkauft</h2>
                            ';
return $output346;
};
$arguments344['__elseClosures'][] = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
                                <div class="product-img zoom">
                                    <img src="/schommer/fileadmin/user_upload/';
$array350 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array350)]);

$output349 .= '" alt="alt';
$array351 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array351)]);

$output349 .= '">
                                </div>
                            ';
return $output349;
};

$output337 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output337 .= '
                    </div>
                </a>
            ';
return $output337;
};
$arguments334 = array();
$arguments334['each'] = NULL;
$arguments334['as'] = NULL;
$arguments334['key'] = NULL;
$arguments334['reverse'] = false;
$arguments334['iteration'] = NULL;
$array336 = array (
);$arguments334['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array336);
$arguments334['as'] = 'produkt';

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output333 .= '
            </div>
            <!-- Pagination -->

            <div class="pagination">
            
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments372 = array();
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['aria'] = NULL;
$arguments372['class'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['title'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$arguments372['name'] = NULL;
$arguments372['rel'] = NULL;
$arguments372['rev'] = NULL;
$arguments372['target'] = NULL;
$arguments372['action'] = NULL;
$arguments372['controller'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['pluginName'] = NULL;
$arguments372['pageUid'] = NULL;
$arguments372['pageType'] = NULL;
$arguments372['noCache'] = NULL;
$arguments372['language'] = NULL;
$arguments372['section'] = NULL;
$arguments372['format'] = NULL;
$arguments372['linkAccessRestrictedPages'] = NULL;
$arguments372['additionalParams'] = NULL;
$arguments372['absolute'] = NULL;
$arguments372['addQueryString'] = NULL;
$arguments372['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments372['addQueryStringMethod'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['action'] = 'list';
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array375);
$array376 = array (
);$array374['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array376);
$array377 = array (
);$array374['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array377);
$array378 = array (
);$array374['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array378);
$arguments372['arguments'] = $array374;

$output371 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
                ';
return $output371;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array369);

$expression370 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output333 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$array396 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array396)]);
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['aria'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['name'] = NULL;
$arguments383['rel'] = NULL;
$arguments383['rev'] = NULL;
$arguments383['target'] = NULL;
$arguments383['action'] = NULL;
$arguments383['controller'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['pluginName'] = NULL;
$arguments383['pageUid'] = NULL;
$arguments383['pageType'] = NULL;
$arguments383['noCache'] = NULL;
$arguments383['language'] = NULL;
$arguments383['section'] = NULL;
$arguments383['format'] = NULL;
$arguments383['linkAccessRestrictedPages'] = NULL;
$arguments383['additionalParams'] = NULL;
$arguments383['absolute'] = NULL;
$arguments383['addQueryString'] = NULL;
$arguments383['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments383['addQueryStringMethod'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$arguments385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array388);
$array387['1'] = '==';
$array389 = array (
);$array387['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array389);

$expression390 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression390(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments385['then'] = 'active';
$arguments383['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array392);
$array393 = array (
);$array391['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array393);
$array394 = array (
);$array391['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array394);
$array395 = array (
);$array391['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array395);
$arguments383['arguments'] = $array391;

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output382 .= '
                ';
return $output382;
};
$arguments379 = array();
$arguments379['each'] = NULL;
$arguments379['as'] = NULL;
$arguments379['key'] = NULL;
$arguments379['reverse'] = false;
$arguments379['iteration'] = NULL;
$array381 = array (
);$arguments379['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array381);
$arguments379['as'] = 'pageNumber';

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output333 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments403 = array();
$arguments403['additionalAttributes'] = NULL;
$arguments403['data'] = NULL;
$arguments403['aria'] = NULL;
$arguments403['class'] = NULL;
$arguments403['dir'] = NULL;
$arguments403['id'] = NULL;
$arguments403['lang'] = NULL;
$arguments403['style'] = NULL;
$arguments403['title'] = NULL;
$arguments403['accesskey'] = NULL;
$arguments403['tabindex'] = NULL;
$arguments403['onclick'] = NULL;
$arguments403['name'] = NULL;
$arguments403['rel'] = NULL;
$arguments403['rev'] = NULL;
$arguments403['target'] = NULL;
$arguments403['action'] = NULL;
$arguments403['controller'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['pluginName'] = NULL;
$arguments403['pageUid'] = NULL;
$arguments403['pageType'] = NULL;
$arguments403['noCache'] = NULL;
$arguments403['language'] = NULL;
$arguments403['section'] = NULL;
$arguments403['format'] = NULL;
$arguments403['linkAccessRestrictedPages'] = NULL;
$arguments403['additionalParams'] = NULL;
$arguments403['absolute'] = NULL;
$arguments403['addQueryString'] = NULL;
$arguments403['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments403['addQueryStringMethod'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['action'] = 'list';
// Rendering Array
$array405 = array();
$array406 = array (
);$array405['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array406);
$array407 = array (
);$array405['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array407);
$array408 = array (
);$array405['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array408);
$array409 = array (
);$array405['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array409);
$arguments403['arguments'] = $array405;

$output402 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output402 .= '
                ';
return $output402;
};
$arguments397 = array();
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$arguments397['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['__thenClosure'] = $renderChildrenClosure398;

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output333 .= '
            </div>
            ';
return $output333;
};
$arguments331['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                <div class="notfound" >Nicht gefundene Produkte</div>                    
            ';
};

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output250 .= '


    </div>  

';
return $output250;
};
$arguments248 = array();
$arguments248['name'] = NULL;
$arguments248['name'] = 'content';

$output245 .= NULL;

$output245 .= '

';

return $output245;
}


}
#