<?php

class Produkt_action_list_894fde2a1f37b041b43a570335dd0a9c1ae2ba4d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                            <span class="category-name">';
$array81 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array81)]);

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
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                ';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array86)]);

$output85 .= '
                ';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array84);
$arguments82['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

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
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['action'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['controller'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['pluginName'] = NULL;
$arguments91['pageUid'] = NULL;
$arguments91['pageType'] = 0;
$arguments91['noCache'] = NULL;
$arguments91['language'] = NULL;
$arguments91['section'] = '';
$arguments91['format'] = '';
$arguments91['linkAccessRestrictedPages'] = false;
$arguments91['additionalParams'] = array (
);
$arguments91['absolute'] = false;
$arguments91['addQueryString'] = false;
$arguments91['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments91['addQueryStringMethod'] = NULL;
$arguments91['action'] = 'show';
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array94);
$arguments91['arguments'] = $array93;

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array95 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array95)]);

$output90 .= '</h1>
                          <h2 class="donne-green product-price">';
$array96 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array96)]);

$output90 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                              <div class="out-of-stock zoom">
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
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output111;
};
$arguments109 = array();

$output108 .= '';

$output108 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array117 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array117)]);

$output116 .= '" alt="alt';
$array118 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array118)]);

$output116 .= '">
                              </div>
                          ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output108 .= '';

$output108 .= '
                      ';
return $output108;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array106);
$array105['1'] = ' == 0';

$expression107 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                              <div class="out-of-stock zoom">
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
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array103 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array103)]);

$output102 .= '" alt="alt';
$array104 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array104)]);

$output102 .= '">
                              </div>
                          ';
return $output102;
};

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output90 .= '
                  </div>
              </a>
          ';
return $output90;
};
$arguments87 = array();
$arguments87['each'] = NULL;
$arguments87['as'] = NULL;
$arguments87['key'] = NULL;
$arguments87['reverse'] = false;
$arguments87['iteration'] = NULL;
$array89 = array (
);$arguments87['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array89);
$arguments87['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output0 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments125 = array();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['aria'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$arguments125['action'] = NULL;
$arguments125['controller'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['pluginName'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = NULL;
$arguments125['noCache'] = NULL;
$arguments125['language'] = NULL;
$arguments125['section'] = NULL;
$arguments125['format'] = NULL;
$arguments125['linkAccessRestrictedPages'] = NULL;
$arguments125['additionalParams'] = NULL;
$arguments125['absolute'] = NULL;
$arguments125['addQueryString'] = NULL;
$arguments125['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments125['addQueryStringMethod'] = NULL;
$arguments125['arguments'] = NULL;
$arguments125['action'] = 'list';
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array128);
$array129 = array (
);$array127['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array129);
$array130 = array (
);$array127['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array130);
$array131 = array (
);$array127['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array131);
$arguments125['arguments'] = $array127;

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
            ';
return $output124;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array122);

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = $renderChildrenClosure120;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array149 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array149)]);
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array141);
$array140['1'] = '==';
$array142 = array (
);$array140['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array142);

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['then'] = 'active';
$arguments136['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array145);
$array146 = array (
);$array144['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array146);
$array147 = array (
);$array144['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array147);
$array148 = array (
);$array144['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array148);
$arguments136['arguments'] = $array144;

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
            ';
return $output135;
};
$arguments132 = array();
$arguments132['each'] = NULL;
$arguments132['as'] = NULL;
$arguments132['key'] = NULL;
$arguments132['reverse'] = false;
$arguments132['iteration'] = NULL;
$array134 = array (
);$arguments132['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array134);
$arguments132['as'] = 'pageNumber';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments156 = array();
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['aria'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['name'] = NULL;
$arguments156['rel'] = NULL;
$arguments156['rev'] = NULL;
$arguments156['target'] = NULL;
$arguments156['action'] = NULL;
$arguments156['controller'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['pluginName'] = NULL;
$arguments156['pageUid'] = NULL;
$arguments156['pageType'] = NULL;
$arguments156['noCache'] = NULL;
$arguments156['language'] = NULL;
$arguments156['section'] = NULL;
$arguments156['format'] = NULL;
$arguments156['linkAccessRestrictedPages'] = NULL;
$arguments156['additionalParams'] = NULL;
$arguments156['absolute'] = NULL;
$arguments156['addQueryString'] = NULL;
$arguments156['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments156['addQueryStringMethod'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['action'] = 'list';
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array159);
$array160 = array (
);$array158['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array160);
$array161 = array (
);$array158['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array161);
$array162 = array (
);$array158['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array162);
$arguments156['arguments'] = $array158;

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
            ';
return $output155;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

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
$output163 = '';

$output163 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['name'] = NULL;
$arguments164['name'] = 'Default';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output163 .= '

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
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return ' import';
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
$arguments169['action'] = 'import';
$arguments169['class'] = 'donne-green';

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '

        <form   
            id="form" 
            action="';
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
$arguments171['action'] = 'list';
$arguments171['controller'] = 'Produkt';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output168 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array173 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array173)]);

$output168 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['aria'] = NULL;
$arguments181['name'] = NULL;
$arguments181['value'] = NULL;
$arguments181['property'] = NULL;
$arguments181['disabled'] = NULL;
$arguments181['errorClass'] = 'f3-form-error';
$arguments181['class'] = NULL;
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['title'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$arguments181['checked'] = NULL;
$arguments181['multiple'] = false;
$output183 = '';

$output183 .= 'myCheckbox';
$array184 = array (
);
$output183 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array184);
$arguments181['id'] = $output183;
$arguments181['name'] = 'kategory[]';
$array185 = array (
);$arguments181['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array185);
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array186['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression187 = function($context) {return "{f";};
$arguments181['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                        ';
return $output180;
};
$arguments178 = array();

$output177 .= NULL;

$output177 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['value'] = NULL;
$arguments188['name'] = NULL;
$arguments188['name'] = 'test';
$arguments188['value'] = 0;
$renderChildrenClosure189 = ($arguments188['value'] !== null) ? function() use ($arguments188) { return $arguments188['value']; } : $renderChildrenClosure189;
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output177 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['value'] = NULL;
$arguments207['name'] = NULL;
$arguments207['name'] = 'test';
$arguments207['value'] = 1;
$renderChildrenClosure208 = ($arguments207['value'] !== null) ? function() use ($arguments207) { return $arguments207['value']; } : $renderChildrenClosure208;
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= '
 
                                ';
return $output206;
};
$arguments204 = array();

$output203 .= '';

$output203 .= '
                            ';
return $output203;
};
$arguments194 = array();
$arguments194['then'] = NULL;
$arguments194['else'] = NULL;
$arguments194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array200);
$array199['1'] = ' == ';
$array201 = array (
);$array199['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array201);

$expression202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments194['__thenClosure'] = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['value'] = NULL;
$arguments197['name'] = NULL;
$arguments197['name'] = 'test';
$arguments197['value'] = 1;
$renderChildrenClosure198 = ($arguments197['value'] !== null) ? function() use ($arguments197) { return $arguments197['value']; } : $renderChildrenClosure198;
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output196 .= '
 
                                ';
return $output196;
};

$output193 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output193 .= '
                        ';
return $output193;
};
$arguments190 = array();
$arguments190['each'] = NULL;
$arguments190['as'] = NULL;
$arguments190['key'] = NULL;
$arguments190['reverse'] = false;
$arguments190['iteration'] = NULL;
$array192 = array (
);$arguments190['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array192);
$arguments190['as'] = 'selectedUid';

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output177 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['aria'] = NULL;
$arguments232['name'] = NULL;
$arguments232['value'] = NULL;
$arguments232['property'] = NULL;
$arguments232['disabled'] = NULL;
$arguments232['errorClass'] = 'f3-form-error';
$arguments232['class'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
$arguments232['checked'] = NULL;
$arguments232['multiple'] = false;
$output234 = '';

$output234 .= 'myCheckbox';
$array235 = array (
);
$output234 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array235);
$arguments232['id'] = $output234;
$arguments232['name'] = 'kategory[]';
$array236 = array (
);$arguments232['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array236);
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array237['0'] = 'checked';

$expression238 = function($context) {return "checked";};
$arguments232['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
                            ';
return $output231;
};
$arguments229 = array();

$output228 .= '';

$output228 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['aria'] = NULL;
$arguments242['name'] = NULL;
$arguments242['value'] = NULL;
$arguments242['property'] = NULL;
$arguments242['disabled'] = NULL;
$arguments242['errorClass'] = 'f3-form-error';
$arguments242['class'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['title'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$arguments242['checked'] = NULL;
$arguments242['multiple'] = false;
$output244 = '';

$output244 .= 'myCheckbox';
$array245 = array (
);
$output244 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array245);
$arguments242['id'] = $output244;
$arguments242['name'] = 'kategory[]';
$array246 = array (
);$arguments242['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array246);

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
                            ';
return $output241;
};
$arguments239 = array();
$arguments239['if'] = NULL;

$output228 .= '';

$output228 .= '
                        ';
return $output228;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array226);
$array225['1'] = ' == 1';

$expression227 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments209['__thenClosure'] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['aria'] = NULL;
$arguments212['name'] = NULL;
$arguments212['value'] = NULL;
$arguments212['property'] = NULL;
$arguments212['disabled'] = NULL;
$arguments212['errorClass'] = 'f3-form-error';
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['checked'] = NULL;
$arguments212['multiple'] = false;
$output214 = '';

$output214 .= 'myCheckbox';
$array215 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array215);
$arguments212['id'] = $output214;
$arguments212['name'] = 'kategory[]';
$array216 = array (
);$arguments212['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array216);
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array217['0'] = 'checked';

$expression218 = function($context) {return "checked";};
$arguments212['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
                            ';
return $output211;
};
$arguments209['__elseClosures'][] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['additionalAttributes'] = NULL;
$arguments220['data'] = NULL;
$arguments220['aria'] = NULL;
$arguments220['name'] = NULL;
$arguments220['value'] = NULL;
$arguments220['property'] = NULL;
$arguments220['disabled'] = NULL;
$arguments220['errorClass'] = 'f3-form-error';
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['checked'] = NULL;
$arguments220['multiple'] = false;
$output222 = '';

$output222 .= 'myCheckbox';
$array223 = array (
);
$output222 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array223);
$arguments220['id'] = $output222;
$arguments220['name'] = 'kategory[]';
$array224 = array (
);$arguments220['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array224);

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
                            ';
return $output219;
};

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output177 .= '
                         
                        <label class="donne" for="myCheckbox';
$array247 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array247)]);

$output177 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array248 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array248)]);

$output177 .= '</span>
                            <span class="category-name">';
$array249 = array (
);
$output177 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array249)]);

$output177 .= '</span>
                        </label>
                    </div>
                ';
return $output177;
};
$arguments174 = array();
$arguments174['each'] = NULL;
$arguments174['as'] = NULL;
$arguments174['key'] = NULL;
$arguments174['reverse'] = false;
$arguments174['iteration'] = NULL;
$array176 = array (
);$arguments174['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array176);
$arguments174['as'] = 'kategory';

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output168 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
                ';
$array254 = array (
);
$output253 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array254)]);

$output253 .= '
                ';
return $output253;
};
$arguments250 = array();
$arguments250['each'] = NULL;
$arguments250['as'] = NULL;
$arguments250['key'] = NULL;
$arguments250['reverse'] = false;
$arguments250['iteration'] = NULL;
$array252 = array (
);$arguments250['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array252);
$arguments250['as'] = 'data';

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output168 .= '
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
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['action'] = NULL;
$arguments259['arguments'] = array (
);
$arguments259['controller'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['pluginName'] = NULL;
$arguments259['pageUid'] = NULL;
$arguments259['pageType'] = 0;
$arguments259['noCache'] = NULL;
$arguments259['language'] = NULL;
$arguments259['section'] = '';
$arguments259['format'] = '';
$arguments259['linkAccessRestrictedPages'] = false;
$arguments259['additionalParams'] = array (
);
$arguments259['absolute'] = false;
$arguments259['addQueryString'] = false;
$arguments259['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments259['addQueryStringMethod'] = NULL;
$arguments259['action'] = 'show';
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array262);
$arguments259['arguments'] = $array261;

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array263 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array263)]);

$output258 .= '</h1>
                          <h2 class="donne-green product-price">';
$array264 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array264)]);

$output258 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array280 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array280)]);

$output279 .= '" alt="alt';
$array281 = array (
);
$output279 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array281)]);

$output279 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output279;
};
$arguments277 = array();

$output276 .= '';

$output276 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array285 = array (
);
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array285)]);

$output284 .= '" alt="alt';
$array286 = array (
);
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array286)]);

$output284 .= '">
                              </div>
                          ';
return $output284;
};
$arguments282 = array();
$arguments282['if'] = NULL;

$output276 .= '';

$output276 .= '
                      ';
return $output276;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array274);
$array273['1'] = ' == 0';

$expression275 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
$arguments265['__thenClosure'] = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array268 = array (
);
$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array268)]);

$output267 .= '" alt="alt';
$array269 = array (
);
$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array269)]);

$output267 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output267;
};
$arguments265['__elseClosures'][] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array271 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array271)]);

$output270 .= '" alt="alt';
$array272 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array272)]);

$output270 .= '">
                              </div>
                          ';
return $output270;
};

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output258 .= '
                  </div>
              </a>
          ';
return $output258;
};
$arguments255 = array();
$arguments255['each'] = NULL;
$arguments255['as'] = NULL;
$arguments255['key'] = NULL;
$arguments255['reverse'] = false;
$arguments255['iteration'] = NULL;
$array257 = array (
);$arguments255['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array257);
$arguments255['as'] = 'produkt';

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output168 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments293 = array();
$arguments293['additionalAttributes'] = NULL;
$arguments293['data'] = NULL;
$arguments293['aria'] = NULL;
$arguments293['class'] = NULL;
$arguments293['dir'] = NULL;
$arguments293['id'] = NULL;
$arguments293['lang'] = NULL;
$arguments293['style'] = NULL;
$arguments293['title'] = NULL;
$arguments293['accesskey'] = NULL;
$arguments293['tabindex'] = NULL;
$arguments293['onclick'] = NULL;
$arguments293['name'] = NULL;
$arguments293['rel'] = NULL;
$arguments293['rev'] = NULL;
$arguments293['target'] = NULL;
$arguments293['action'] = NULL;
$arguments293['controller'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['pluginName'] = NULL;
$arguments293['pageUid'] = NULL;
$arguments293['pageType'] = NULL;
$arguments293['noCache'] = NULL;
$arguments293['language'] = NULL;
$arguments293['section'] = NULL;
$arguments293['format'] = NULL;
$arguments293['linkAccessRestrictedPages'] = NULL;
$arguments293['additionalParams'] = NULL;
$arguments293['absolute'] = NULL;
$arguments293['addQueryString'] = NULL;
$arguments293['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments293['addQueryStringMethod'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['action'] = 'list';
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array296);
$array297 = array (
);$array295['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array297);
$array298 = array (
);$array295['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array298);
$array299 = array (
);$array295['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array299);
$arguments293['arguments'] = $array295;

$output292 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
            ';
return $output292;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output168 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$array317 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array317)]);
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
$arguments304['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array309);
$array308['1'] = '==';
$array310 = array (
);$array308['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array310);

$expression311 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['then'] = 'active';
$arguments304['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array313);
$array314 = array (
);$array312['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array314);
$array315 = array (
);$array312['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array315);
$array316 = array (
);$array312['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array316);
$arguments304['arguments'] = $array312;

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
            ';
return $output303;
};
$arguments300 = array();
$arguments300['each'] = NULL;
$arguments300['as'] = NULL;
$arguments300['key'] = NULL;
$arguments300['reverse'] = false;
$arguments300['iteration'] = NULL;
$array302 = array (
);$arguments300['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array302);
$arguments300['as'] = 'pageNumber';

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output168 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments324 = array();
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['aria'] = NULL;
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['title'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['name'] = NULL;
$arguments324['rel'] = NULL;
$arguments324['rev'] = NULL;
$arguments324['target'] = NULL;
$arguments324['action'] = NULL;
$arguments324['controller'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['pluginName'] = NULL;
$arguments324['pageUid'] = NULL;
$arguments324['pageType'] = NULL;
$arguments324['noCache'] = NULL;
$arguments324['language'] = NULL;
$arguments324['section'] = NULL;
$arguments324['format'] = NULL;
$arguments324['linkAccessRestrictedPages'] = NULL;
$arguments324['additionalParams'] = NULL;
$arguments324['absolute'] = NULL;
$arguments324['addQueryString'] = NULL;
$arguments324['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments324['addQueryStringMethod'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['action'] = 'list';
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array327);
$array328 = array (
);$array326['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array328);
$array329 = array (
);$array326['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array329);
$array330 = array (
);$array326['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array330);
$arguments324['arguments'] = $array326;

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
            ';
return $output323;
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = $renderChildrenClosure319;

$output168 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output168 .= '
        </div>

    </div>  

';
return $output168;
};
$arguments166 = array();
$arguments166['name'] = NULL;
$arguments166['name'] = 'content';

$output163 .= NULL;

$output163 .= '

';

return $output163;
}


}
#