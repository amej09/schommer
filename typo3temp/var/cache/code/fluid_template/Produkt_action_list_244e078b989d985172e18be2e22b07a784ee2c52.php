<?php

class Produkt_action_list_244e078b989d985172e18be2e22b07a784ee2c52 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
        <div class="product-cards">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['action'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = NULL;
$arguments85['language'] = NULL;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['action'] = 'show';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array88);
$arguments85['arguments'] = $array87;

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array89 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array89)]);

$output84 .= '</h1>
                          <h2 class="donne-green product-price">';
$array90 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array90)]);

$output84 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array106)]);

$output105 .= '" alt="alt';
$array107 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array107)]);

$output105 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output105;
};
$arguments103 = array();

$output102 .= '';

$output102 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
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
$arguments108 = array();
$arguments108['if'] = NULL;

$output102 .= '';

$output102 .= '
                      ';
return $output102;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array100);
$array99['1'] = ' == 0';

$expression101 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array94)]);

$output93 .= '" alt="alt';
$array95 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array95)]);

$output93 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output93;
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
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

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output84 .= '
                  </div>
              </a>
          ';
return $output84;
};
$arguments81 = array();
$arguments81['each'] = NULL;
$arguments81['as'] = NULL;
$arguments81['key'] = NULL;
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$array83 = array (
);$arguments81['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array83);
$arguments81['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['aria'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['name'] = NULL;
$arguments119['rel'] = NULL;
$arguments119['rev'] = NULL;
$arguments119['target'] = NULL;
$arguments119['action'] = NULL;
$arguments119['controller'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['pluginName'] = NULL;
$arguments119['pageUid'] = NULL;
$arguments119['pageType'] = NULL;
$arguments119['noCache'] = NULL;
$arguments119['language'] = NULL;
$arguments119['section'] = NULL;
$arguments119['format'] = NULL;
$arguments119['linkAccessRestrictedPages'] = NULL;
$arguments119['additionalParams'] = NULL;
$arguments119['absolute'] = NULL;
$arguments119['addQueryString'] = NULL;
$arguments119['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments119['addQueryStringMethod'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['action'] = 'list';
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array122);
$array123 = array (
);$array121['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array123);
$array124 = array (
);$array121['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array124);
$array125 = array (
);$array121['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array125);
$arguments119['arguments'] = $array121;

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
            ';
return $output118;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array143 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array143)]);
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['aria'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['name'] = NULL;
$arguments130['rel'] = NULL;
$arguments130['rev'] = NULL;
$arguments130['target'] = NULL;
$arguments130['action'] = NULL;
$arguments130['controller'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['pluginName'] = NULL;
$arguments130['pageUid'] = NULL;
$arguments130['pageType'] = NULL;
$arguments130['noCache'] = NULL;
$arguments130['language'] = NULL;
$arguments130['section'] = NULL;
$arguments130['format'] = NULL;
$arguments130['linkAccessRestrictedPages'] = NULL;
$arguments130['additionalParams'] = NULL;
$arguments130['absolute'] = NULL;
$arguments130['addQueryString'] = NULL;
$arguments130['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments130['addQueryStringMethod'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array135);
$array134['1'] = '==';
$array136 = array (
);$array134['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array136);

$expression137 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['then'] = 'active';
$arguments130['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array139);
$array140 = array (
);$array138['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array140);
$array141 = array (
);$array138['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array141);
$array142 = array (
);$array138['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array142);
$arguments130['arguments'] = $array138;

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
            ';
return $output129;
};
$arguments126 = array();
$arguments126['each'] = NULL;
$arguments126['as'] = NULL;
$arguments126['key'] = NULL;
$arguments126['reverse'] = false;
$arguments126['iteration'] = NULL;
$array128 = array (
);$arguments126['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array128);
$arguments126['as'] = 'pageNumber';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return '&gt;';
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
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array153);
$array154 = array (
);$array152['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array154);
$array155 = array (
);$array152['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array155);
$array156 = array (
);$array152['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array156);
$arguments150['arguments'] = $array152;

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
            ';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

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
$output157 = '';

$output157 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['name'] = NULL;
$arguments158['name'] = 'Default';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output157 .= '

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
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments163 = array();
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['aria'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$arguments163['action'] = NULL;
$arguments163['controller'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['pluginName'] = NULL;
$arguments163['pageUid'] = NULL;
$arguments163['pageType'] = NULL;
$arguments163['noCache'] = NULL;
$arguments163['language'] = NULL;
$arguments163['section'] = NULL;
$arguments163['format'] = NULL;
$arguments163['linkAccessRestrictedPages'] = NULL;
$arguments163['additionalParams'] = NULL;
$arguments163['absolute'] = NULL;
$arguments163['addQueryString'] = NULL;
$arguments163['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments163['addQueryStringMethod'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['action'] = 'import';
$arguments163['class'] = 'donne-green';

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '

        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['action'] = NULL;
$arguments165['arguments'] = array (
);
$arguments165['controller'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['pluginName'] = NULL;
$arguments165['pageUid'] = NULL;
$arguments165['pageType'] = 0;
$arguments165['noCache'] = NULL;
$arguments165['language'] = NULL;
$arguments165['section'] = '';
$arguments165['format'] = '';
$arguments165['linkAccessRestrictedPages'] = false;
$arguments165['additionalParams'] = array (
);
$arguments165['absolute'] = false;
$arguments165['addQueryString'] = false;
$arguments165['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments165['addQueryStringMethod'] = NULL;
$arguments165['action'] = 'list';
$arguments165['controller'] = 'Produkt';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext)]);

$output162 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array167 = array (
);
$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array167)]);

$output162 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '

                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';

$output174 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['aria'] = NULL;
$arguments175['name'] = NULL;
$arguments175['value'] = NULL;
$arguments175['property'] = NULL;
$arguments175['disabled'] = NULL;
$arguments175['errorClass'] = 'f3-form-error';
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['checked'] = NULL;
$arguments175['multiple'] = false;
$output177 = '';

$output177 .= 'myCheckbox';
$array178 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array178);
$arguments175['id'] = $output177;
$arguments175['name'] = 'kategory[]';
$array179 = array (
);$arguments175['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array179);
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array180['0'] = '{f:if(condition:{kategory.uid} == {selectedCategories}, then: \'checked\', else: \'\')}';

$expression181 = function($context) {return "{f";};
$arguments175['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
                        ';
return $output174;
};
$arguments172 = array();

$output171 .= NULL;

$output171 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['value'] = NULL;
$arguments182['name'] = NULL;
$arguments182['name'] = 'test';
$arguments182['value'] = 0;
$renderChildrenClosure183 = ($arguments182['value'] !== null) ? function() use ($arguments182) { return $arguments182['value']; } : $renderChildrenClosure183;
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output171 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['value'] = NULL;
$arguments201['name'] = NULL;
$arguments201['name'] = 'test';
$arguments201['value'] = 1;
$renderChildrenClosure202 = ($arguments201['value'] !== null) ? function() use ($arguments201) { return $arguments201['value']; } : $renderChildrenClosure202;
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output200 .= '
 
                                ';
return $output200;
};
$arguments198 = array();

$output197 .= '';

$output197 .= '
                            ';
return $output197;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('selectedUid', $array194);
$array193['1'] = ' == ';
$array195 = array (
);$array193['2'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array195);

$expression196 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['value'] = NULL;
$arguments191['name'] = NULL;
$arguments191['name'] = 'test';
$arguments191['value'] = 1;
$renderChildrenClosure192 = ($arguments191['value'] !== null) ? function() use ($arguments191) { return $arguments191['value']; } : $renderChildrenClosure192;
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output190 .= '
 
                                ';
return $output190;
};

$output187 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
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
);$arguments184['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array186);
$arguments184['as'] = 'selectedUid';

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output171 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['aria'] = NULL;
$arguments226['name'] = NULL;
$arguments226['value'] = NULL;
$arguments226['property'] = NULL;
$arguments226['disabled'] = NULL;
$arguments226['errorClass'] = 'f3-form-error';
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['checked'] = NULL;
$arguments226['multiple'] = false;
$output228 = '';

$output228 .= 'myCheckbox';
$array229 = array (
);
$output228 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array229);
$arguments226['id'] = $output228;
$arguments226['onclick'] = 'submit()';
$arguments226['name'] = 'kategory[]';
$array230 = array (
);$arguments226['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array230);
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array231['0'] = 'checked';

$expression232 = function($context) {return "checked";};
$arguments226['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
                            ';
return $output225;
};
$arguments223 = array();

$output222 .= '';

$output222 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
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
$arguments236['onclick'] = 'submit()';
$arguments236['name'] = 'kategory[]';
$array240 = array (
);$arguments236['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array240);

$output235 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
                            ';
return $output235;
};
$arguments233 = array();
$arguments233['if'] = NULL;

$output222 .= '';

$output222 .= '
                        ';
return $output222;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('test', $array220);
$array219['1'] = ' == 1';

$expression221 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['aria'] = NULL;
$arguments206['name'] = NULL;
$arguments206['value'] = NULL;
$arguments206['property'] = NULL;
$arguments206['disabled'] = NULL;
$arguments206['errorClass'] = 'f3-form-error';
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['checked'] = NULL;
$arguments206['multiple'] = false;
$output208 = '';

$output208 .= 'myCheckbox';
$array209 = array (
);
$output208 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array209);
$arguments206['id'] = $output208;
$arguments206['onclick'] = 'submit()';
$arguments206['name'] = 'kategory[]';
$array210 = array (
);$arguments206['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array210);
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array211['0'] = 'checked';

$expression212 = function($context) {return "checked";};
$arguments206['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
                            ';
return $output205;
};
$arguments203['__elseClosures'][] = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['aria'] = NULL;
$arguments214['name'] = NULL;
$arguments214['value'] = NULL;
$arguments214['property'] = NULL;
$arguments214['disabled'] = NULL;
$arguments214['errorClass'] = 'f3-form-error';
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
$arguments214['checked'] = NULL;
$arguments214['multiple'] = false;
$output216 = '';

$output216 .= 'myCheckbox';
$array217 = array (
);
$output216 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array217);
$arguments214['id'] = $output216;
$arguments214['onclick'] = 'submit()';
$arguments214['name'] = 'kategory[]';
$array218 = array (
);$arguments214['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array218);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
                            ';
return $output213;
};

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output171 .= '
                         
                        <label class="donne" for="myCheckbox';
$array241 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array241)]);

$output171 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array242 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array242)]);

$output171 .= '</span>
                         </label>
                    </div>
                ';
return $output171;
};
$arguments168 = array();
$arguments168['each'] = NULL;
$arguments168['as'] = NULL;
$arguments168['key'] = NULL;
$arguments168['reverse'] = false;
$arguments168['iteration'] = NULL;
$array170 = array (
);$arguments168['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array170);
$arguments168['as'] = 'kategory';

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output162 .= '
                
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
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['action'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['controller'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['pluginName'] = NULL;
$arguments247['pageUid'] = NULL;
$arguments247['pageType'] = 0;
$arguments247['noCache'] = NULL;
$arguments247['language'] = NULL;
$arguments247['section'] = '';
$arguments247['format'] = '';
$arguments247['linkAccessRestrictedPages'] = false;
$arguments247['additionalParams'] = array (
);
$arguments247['absolute'] = false;
$arguments247['addQueryString'] = false;
$arguments247['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments247['addQueryStringMethod'] = NULL;
$arguments247['action'] = 'show';
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array250);
$arguments247['arguments'] = $array249;

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array251 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array251)]);

$output246 .= '</h1>
                          <h2 class="donne-green product-price">';
$array252 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array252)]);

$output246 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
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
$arguments265 = array();

$output264 .= '';

$output264 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array273)]);

$output272 .= '" alt="alt';
$array274 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array274)]);

$output272 .= '">
                              </div>
                          ';
return $output272;
};
$arguments270 = array();
$arguments270['if'] = NULL;

$output264 .= '';

$output264 .= '
                      ';
return $output264;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array262);
$array261['1'] = ' == 0';

$expression263 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array256 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array256)]);

$output255 .= '" alt="alt';
$array257 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array257)]);

$output255 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output255;
};
$arguments253['__elseClosures'][] = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array259 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array259)]);

$output258 .= '" alt="alt';
$array260 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array260)]);

$output258 .= '">
                              </div>
                          ';
return $output258;
};

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output246 .= '
                  </div>
              </a>
          ';
return $output246;
};
$arguments243 = array();
$arguments243['each'] = NULL;
$arguments243['as'] = NULL;
$arguments243['key'] = NULL;
$arguments243['reverse'] = false;
$arguments243['iteration'] = NULL;
$array245 = array (
);$arguments243['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array245);
$arguments243['as'] = 'produkt';

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output162 .= '
         </div>
        <!-- Pagination -->
         <div class="pagination">
         
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments281 = array();
$arguments281['additionalAttributes'] = NULL;
$arguments281['data'] = NULL;
$arguments281['aria'] = NULL;
$arguments281['class'] = NULL;
$arguments281['dir'] = NULL;
$arguments281['id'] = NULL;
$arguments281['lang'] = NULL;
$arguments281['style'] = NULL;
$arguments281['title'] = NULL;
$arguments281['accesskey'] = NULL;
$arguments281['tabindex'] = NULL;
$arguments281['onclick'] = NULL;
$arguments281['name'] = NULL;
$arguments281['rel'] = NULL;
$arguments281['rev'] = NULL;
$arguments281['target'] = NULL;
$arguments281['action'] = NULL;
$arguments281['controller'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['pluginName'] = NULL;
$arguments281['pageUid'] = NULL;
$arguments281['pageType'] = NULL;
$arguments281['noCache'] = NULL;
$arguments281['language'] = NULL;
$arguments281['section'] = NULL;
$arguments281['format'] = NULL;
$arguments281['linkAccessRestrictedPages'] = NULL;
$arguments281['additionalParams'] = NULL;
$arguments281['absolute'] = NULL;
$arguments281['addQueryString'] = NULL;
$arguments281['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments281['addQueryStringMethod'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['action'] = 'list';
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array284);
$array285 = array (
);$array283['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array285);
$array286 = array (
);$array283['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array286);
$array287 = array (
);$array283['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array287);
$arguments281['arguments'] = $array283;

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
            ';
return $output280;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output162 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$array305 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array305)]);
};
$arguments292 = array();
$arguments292['additionalAttributes'] = NULL;
$arguments292['data'] = NULL;
$arguments292['aria'] = NULL;
$arguments292['class'] = NULL;
$arguments292['dir'] = NULL;
$arguments292['id'] = NULL;
$arguments292['lang'] = NULL;
$arguments292['style'] = NULL;
$arguments292['title'] = NULL;
$arguments292['accesskey'] = NULL;
$arguments292['tabindex'] = NULL;
$arguments292['onclick'] = NULL;
$arguments292['name'] = NULL;
$arguments292['rel'] = NULL;
$arguments292['rev'] = NULL;
$arguments292['target'] = NULL;
$arguments292['action'] = NULL;
$arguments292['controller'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['pluginName'] = NULL;
$arguments292['pageUid'] = NULL;
$arguments292['pageType'] = NULL;
$arguments292['noCache'] = NULL;
$arguments292['language'] = NULL;
$arguments292['section'] = NULL;
$arguments292['format'] = NULL;
$arguments292['linkAccessRestrictedPages'] = NULL;
$arguments292['additionalParams'] = NULL;
$arguments292['absolute'] = NULL;
$arguments292['addQueryString'] = NULL;
$arguments292['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments292['addQueryStringMethod'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['action'] = 'list';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array297);
$array296['1'] = '==';
$array298 = array (
);$array296['2'] = $renderingContext->getVariableProvider()->getByPath('currentPageNumber', $array298);

$expression299 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments294['then'] = 'active';
$arguments292['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array301);
$array302 = array (
);$array300['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array302);
$array303 = array (
);$array300['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array303);
$array304 = array (
);$array300['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array304);
$arguments292['arguments'] = $array300;

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
            ';
return $output291;
};
$arguments288 = array();
$arguments288['each'] = NULL;
$arguments288['as'] = NULL;
$arguments288['key'] = NULL;
$arguments288['reverse'] = false;
$arguments288['iteration'] = NULL;
$array290 = array (
);$arguments288['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array290);
$arguments288['as'] = 'pageNumber';

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output162 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments312 = array();
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['aria'] = NULL;
$arguments312['class'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['title'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['name'] = NULL;
$arguments312['rel'] = NULL;
$arguments312['rev'] = NULL;
$arguments312['target'] = NULL;
$arguments312['action'] = NULL;
$arguments312['controller'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['pluginName'] = NULL;
$arguments312['pageUid'] = NULL;
$arguments312['pageType'] = NULL;
$arguments312['noCache'] = NULL;
$arguments312['language'] = NULL;
$arguments312['section'] = NULL;
$arguments312['format'] = NULL;
$arguments312['linkAccessRestrictedPages'] = NULL;
$arguments312['additionalParams'] = NULL;
$arguments312['absolute'] = NULL;
$arguments312['addQueryString'] = NULL;
$arguments312['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments312['addQueryStringMethod'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['action'] = 'list';
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array315);
$array316 = array (
);$array314['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array316);
$array317 = array (
);$array314['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array317);
$array318 = array (
);$array314['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array318);
$arguments312['arguments'] = $array314;

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
            ';
return $output311;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array309);

$expression310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = $renderChildrenClosure307;

$output162 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output162 .= '
        </div>

    </div>  

';
return $output162;
};
$arguments160 = array();
$arguments160['name'] = NULL;
$arguments160['name'] = 'content';

$output157 .= NULL;

$output157 .= '

';

return $output157;
}


}
#