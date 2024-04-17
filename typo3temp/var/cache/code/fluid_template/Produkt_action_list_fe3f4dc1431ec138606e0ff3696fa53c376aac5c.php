<?php

class Produkt_action_list_fe3f4dc1431ec138606e0ff3696fa53c376aac5c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'FilterForm';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '-->
       ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return 'import';
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['aria'] = NULL;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['name'] = NULL;
$arguments3['rel'] = NULL;
$arguments3['rev'] = NULL;
$arguments3['target'] = NULL;
$arguments3['action'] = NULL;
$arguments3['controller'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['pageType'] = NULL;
$arguments3['noCache'] = NULL;
$arguments3['language'] = NULL;
$arguments3['section'] = NULL;
$arguments3['format'] = NULL;
$arguments3['linkAccessRestrictedPages'] = NULL;
$arguments3['additionalParams'] = NULL;
$arguments3['absolute'] = NULL;
$arguments3['addQueryString'] = NULL;
$arguments3['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments3['addQueryStringMethod'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['action'] = 'import';
$arguments3['controller'] = 'Produkt';
$arguments3['extensionName'] = 'Produktshow';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

       <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = NULL;
$arguments5['language'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['linkAccessRestrictedPages'] = false;
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = NULL;
$arguments5['action'] = 'list';
$arguments5['controller'] = 'Produkt';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array7)]);

$output0 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['aria'] = NULL;
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['property'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['errorClass'] = 'f3-form-error';
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['checked'] = NULL;
$arguments36['multiple'] = false;
$output38 = '';

$output38 .= 'myCheckbox';
$array39 = array (
);
$output38 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array39);
$arguments36['id'] = $output38;
$arguments36['onclick'] = 'submit()';
$arguments36['name'] = 'kategory[]';
$array40 = array (
);$arguments36['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array40);
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array41['0'] = 'checked';

$expression42 = function($context) {return "checked";};
$arguments36['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
                            ';
return $output35;
};
$arguments33 = array();

$output32 .= '';

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
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
$arguments46['onclick'] = 'submit()';
$arguments46['name'] = 'kategory[]';
$array50 = array (
);$arguments46['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array50);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                            ';
return $output45;
};
$arguments43 = array();
$arguments43['if'] = NULL;

$output32 .= '';

$output32 .= '
                        ';
return $output32;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array29);
$array28['1'] = ' in ';
$array30 = array (
);$array28['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['errorClass'] = 'f3-form-error';
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['checked'] = NULL;
$arguments15['multiple'] = false;
$output17 = '';

$output17 .= 'myCheckbox';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array18);
$arguments15['id'] = $output17;
$arguments15['onclick'] = 'submit()';
$arguments15['name'] = 'kategory[]';
$array19 = array (
);$arguments15['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array19);
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array20['0'] = 'checked';

$expression21 = function($context) {return "checked";};
$arguments15['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                            ';
return $output14;
};
$arguments12['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['aria'] = NULL;
$arguments23['name'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['errorClass'] = 'f3-form-error';
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['checked'] = NULL;
$arguments23['multiple'] = false;
$output25 = '';

$output25 .= 'myCheckbox';
$array26 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array26);
$arguments23['id'] = $output25;
$arguments23['onclick'] = 'submit()';
$arguments23['name'] = 'kategory[]';
$array27 = array (
);$arguments23['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array27);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                            ';
return $output22;
};

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
                        <label class="donne" for="myCheckbox';
$array51 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array51)]);

$output11 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array52 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array52)]);

$output11 .= '</span>
                            <span class="category-name">';
$array53 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array53)]);

$output11 .= '</span>
                        </label>
                    </div>
                ';
return $output11;
};
$arguments8 = array();
$arguments8['each'] = NULL;
$arguments8['as'] = NULL;
$arguments8['key'] = NULL;
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$array10 = array (
);$arguments8['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array10);
$arguments8['as'] = 'kategory';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                <div>';
$array58 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array58)]);

$output57 .= '</div>
                ';
return $output57;
};
$arguments54 = array();
$arguments54['each'] = NULL;
$arguments54['as'] = NULL;
$arguments54['key'] = NULL;
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$array56 = array (
);$arguments54['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array56);
$arguments54['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

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
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['action'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['controller'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['pluginName'] = NULL;
$arguments63['pageUid'] = NULL;
$arguments63['pageType'] = 0;
$arguments63['noCache'] = NULL;
$arguments63['language'] = NULL;
$arguments63['section'] = '';
$arguments63['format'] = '';
$arguments63['linkAccessRestrictedPages'] = false;
$arguments63['additionalParams'] = array (
);
$arguments63['absolute'] = false;
$arguments63['addQueryString'] = false;
$arguments63['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments63['addQueryStringMethod'] = NULL;
$arguments63['action'] = 'show';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array66);
$arguments63['arguments'] = $array65;

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array67 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array67)]);

$output62 .= '</h1>
                          <h2 class="donne-green product-price">';
$array68 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array68)]);

$output62 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array84 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array84)]);

$output83 .= '" alt="alt';
$array85 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array85)]);

$output83 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output83;
};
$arguments81 = array();

$output80 .= '';

$output80 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array89)]);

$output88 .= '" alt="alt';
$array90 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array90)]);

$output88 .= '">
                              </div>
                          ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output80 .= '';

$output80 .= '
                      ';
return $output80;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array78);
$array77['1'] = ' == 0';

$expression79 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array72)]);

$output71 .= '" alt="alt';
$array73 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array73)]);

$output71 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output71;
};
$arguments69['__elseClosures'][] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array75)]);

$output74 .= '" alt="alt';
$array76 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array76)]);

$output74 .= '">
                              </div>
                          ';
return $output74;
};

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output62 .= '
                  </div>
              </a>
          ';
return $output62;
};
$arguments59 = array();
$arguments59['each'] = NULL;
$arguments59['as'] = NULL;
$arguments59['key'] = NULL;
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$array61 = array (
);$arguments59['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array61);
$arguments59['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

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
$output91 = '';

$output91 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['name'] = NULL;
$arguments92['name'] = 'Default';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output91 .= '

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
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
 
    <div class="sidebar">
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['section'] = NULL;
$arguments97['partial'] = NULL;
$arguments97['delegate'] = NULL;
$arguments97['renderable'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['optional'] = false;
$arguments97['default'] = NULL;
$arguments97['contentAs'] = NULL;
$arguments97['debug'] = true;
$arguments97['partial'] = 'FilterForm';

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '-->
       ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'import';
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['aria'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$arguments99['action'] = NULL;
$arguments99['controller'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = NULL;
$arguments99['noCache'] = NULL;
$arguments99['language'] = NULL;
$arguments99['section'] = NULL;
$arguments99['format'] = NULL;
$arguments99['linkAccessRestrictedPages'] = NULL;
$arguments99['additionalParams'] = NULL;
$arguments99['absolute'] = NULL;
$arguments99['addQueryString'] = NULL;
$arguments99['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments99['addQueryStringMethod'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['action'] = 'import';
$arguments99['controller'] = 'Produkt';
$arguments99['extensionName'] = 'Produktshow';

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output96 .= '

       <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['action'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['controller'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['pluginName'] = NULL;
$arguments101['pageUid'] = NULL;
$arguments101['pageType'] = 0;
$arguments101['noCache'] = NULL;
$arguments101['language'] = NULL;
$arguments101['section'] = '';
$arguments101['format'] = '';
$arguments101['linkAccessRestrictedPages'] = false;
$arguments101['additionalParams'] = array (
);
$arguments101['absolute'] = false;
$arguments101['addQueryString'] = false;
$arguments101['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments101['addQueryStringMethod'] = NULL;
$arguments101['action'] = 'list';
$arguments101['controller'] = 'Produkt';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output96 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array103 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array103)]);

$output96 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['aria'] = NULL;
$arguments132['name'] = NULL;
$arguments132['value'] = NULL;
$arguments132['property'] = NULL;
$arguments132['disabled'] = NULL;
$arguments132['errorClass'] = 'f3-form-error';
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['checked'] = NULL;
$arguments132['multiple'] = false;
$output134 = '';

$output134 .= 'myCheckbox';
$array135 = array (
);
$output134 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array135);
$arguments132['id'] = $output134;
$arguments132['onclick'] = 'submit()';
$arguments132['name'] = 'kategory[]';
$array136 = array (
);$arguments132['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array136);
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array137['0'] = 'checked';

$expression138 = function($context) {return "checked";};
$arguments132['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                            ';
return $output131;
};
$arguments129 = array();

$output128 .= '';

$output128 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['aria'] = NULL;
$arguments142['name'] = NULL;
$arguments142['value'] = NULL;
$arguments142['property'] = NULL;
$arguments142['disabled'] = NULL;
$arguments142['errorClass'] = 'f3-form-error';
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['checked'] = NULL;
$arguments142['multiple'] = false;
$output144 = '';

$output144 .= 'myCheckbox';
$array145 = array (
);
$output144 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array145);
$arguments142['id'] = $output144;
$arguments142['onclick'] = 'submit()';
$arguments142['name'] = 'kategory[]';
$array146 = array (
);$arguments142['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array146);

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
                            ';
return $output141;
};
$arguments139 = array();
$arguments139['if'] = NULL;

$output128 .= '';

$output128 .= '
                        ';
return $output128;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array125);
$array124['1'] = ' in ';
$array126 = array (
);$array124['2'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['aria'] = NULL;
$arguments111['name'] = NULL;
$arguments111['value'] = NULL;
$arguments111['property'] = NULL;
$arguments111['disabled'] = NULL;
$arguments111['errorClass'] = 'f3-form-error';
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['checked'] = NULL;
$arguments111['multiple'] = false;
$output113 = '';

$output113 .= 'myCheckbox';
$array114 = array (
);
$output113 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array114);
$arguments111['id'] = $output113;
$arguments111['onclick'] = 'submit()';
$arguments111['name'] = 'kategory[]';
$array115 = array (
);$arguments111['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array115);
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array116['0'] = 'checked';

$expression117 = function($context) {return "checked";};
$arguments111['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
                            ';
return $output110;
};
$arguments108['__elseClosures'][] = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['aria'] = NULL;
$arguments119['name'] = NULL;
$arguments119['value'] = NULL;
$arguments119['property'] = NULL;
$arguments119['disabled'] = NULL;
$arguments119['errorClass'] = 'f3-form-error';
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['checked'] = NULL;
$arguments119['multiple'] = false;
$output121 = '';

$output121 .= 'myCheckbox';
$array122 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array122);
$arguments119['id'] = $output121;
$arguments119['onclick'] = 'submit()';
$arguments119['name'] = 'kategory[]';
$array123 = array (
);$arguments119['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array123);

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                            ';
return $output118;
};

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                        <label class="donne" for="myCheckbox';
$array147 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array147)]);

$output107 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array148 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array148)]);

$output107 .= '</span>
                            <span class="category-name">';
$array149 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array149)]);

$output107 .= '</span>
                        </label>
                    </div>
                ';
return $output107;
};
$arguments104 = array();
$arguments104['each'] = NULL;
$arguments104['as'] = NULL;
$arguments104['key'] = NULL;
$arguments104['reverse'] = false;
$arguments104['iteration'] = NULL;
$array106 = array (
);$arguments104['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array106);
$arguments104['as'] = 'kategory';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output96 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                <div>';
$array154 = array (
);
$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array154)]);

$output153 .= '</div>
                ';
return $output153;
};
$arguments150 = array();
$arguments150['each'] = NULL;
$arguments150['as'] = NULL;
$arguments150['key'] = NULL;
$arguments150['reverse'] = false;
$arguments150['iteration'] = NULL;
$array152 = array (
);$arguments150['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array152);
$arguments150['as'] = 'data';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output96 .= '
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
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['action'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['controller'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['pluginName'] = NULL;
$arguments159['pageUid'] = NULL;
$arguments159['pageType'] = 0;
$arguments159['noCache'] = NULL;
$arguments159['language'] = NULL;
$arguments159['section'] = '';
$arguments159['format'] = '';
$arguments159['linkAccessRestrictedPages'] = false;
$arguments159['additionalParams'] = array (
);
$arguments159['absolute'] = false;
$arguments159['addQueryString'] = false;
$arguments159['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments159['addQueryStringMethod'] = NULL;
$arguments159['action'] = 'show';
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array162);
$arguments159['arguments'] = $array161;

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array163 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array163)]);

$output158 .= '</h1>
                          <h2 class="donne-green product-price">';
$array164 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array164)]);

$output158 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
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
$arguments177 = array();

$output176 .= '';

$output176 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array185 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array185)]);

$output184 .= '" alt="alt';
$array186 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array186)]);

$output184 .= '">
                              </div>
                          ';
return $output184;
};
$arguments182 = array();
$arguments182['if'] = NULL;

$output176 .= '';

$output176 .= '
                      ';
return $output176;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array174);
$array173['1'] = ' == 0';

$expression175 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array168 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array168)]);

$output167 .= '" alt="alt';
$array169 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array169)]);

$output167 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output167;
};
$arguments165['__elseClosures'][] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array171 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array171)]);

$output170 .= '" alt="alt';
$array172 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array172)]);

$output170 .= '">
                              </div>
                          ';
return $output170;
};

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output158 .= '
                  </div>
              </a>
          ';
return $output158;
};
$arguments155 = array();
$arguments155['each'] = NULL;
$arguments155['as'] = NULL;
$arguments155['key'] = NULL;
$arguments155['reverse'] = false;
$arguments155['iteration'] = NULL;
$array157 = array (
);$arguments155['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array157);
$arguments155['as'] = 'produkt';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output96 .= '
          
      </div>
    </div>  

';
return $output96;
};
$arguments94 = array();
$arguments94['name'] = NULL;
$arguments94['name'] = 'content';

$output91 .= NULL;

$output91 .= '

';

return $output91;
}


}
#