<?php

class Produkt_action_list_f2d36e9ca7c882ffa3e5e3a10b9fbf70b1b5fa29 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
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
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array12['0'] = '{selectedCategories[kategory.uid] == kategory.uid}';

$expression13 = function($context) {return "{selectedCategories";};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['aria'] = NULL;
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['property'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['checked'] = NULL;
$arguments25['multiple'] = false;
$output27 = '';

$output27 .= 'myCheckbox';
$array28 = array (
);
$output27 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array28);
$arguments25['id'] = $output27;
$arguments25['name'] = 'kategory[]';
$array29 = array (
);$arguments25['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array29);

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                        ';
return $output24;
};
$arguments22 = array();
$arguments22['if'] = NULL;

$output9 .= '';

$output9 .= '-->
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['aria'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['errorClass'] = 'f3-form-error';
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['checked'] = NULL;
$arguments35['multiple'] = false;
$output37 = '';

$output37 .= 'myCheckbox';
$array38 = array (
);
$output37 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array38);
$arguments35['id'] = $output37;
$arguments35['name'] = 'kategory[]';
$array39 = array (
);$arguments35['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array39);
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array40['0'] = 'checked';

$expression41 = function($context) {return "checked";};
$arguments35['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                        ';
return $output34;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array32['0'] = '{kategory.uid in selectedCategories }';

$expression33 = function($context) {return "{kategory.uid";};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['checked'] = NULL;
$arguments45['multiple'] = false;
$output47 = '';

$output47 .= 'myCheckbox';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array48);
$arguments45['id'] = $output47;
$arguments45['name'] = 'kategory[]';
$array49 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array49);

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                        ';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output9 .= '';

$output9 .= '
                        <label class="donne" for="myCheckbox';
$array50 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array50)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array51 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array51)]);

$output9 .= '</span>
                            <span class="category-name">';
$array52 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array52)]);

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
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                <div>';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array57)]);

$output56 .= '</div>
                ';
return $output56;
};
$arguments53 = array();
$arguments53['each'] = NULL;
$arguments53['as'] = NULL;
$arguments53['key'] = NULL;
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$array55 = array (
);$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array55);
$arguments53['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

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
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['action'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['controller'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['pluginName'] = NULL;
$arguments62['pageUid'] = NULL;
$arguments62['pageType'] = 0;
$arguments62['noCache'] = NULL;
$arguments62['language'] = NULL;
$arguments62['section'] = '';
$arguments62['format'] = '';
$arguments62['linkAccessRestrictedPages'] = false;
$arguments62['additionalParams'] = array (
);
$arguments62['absolute'] = false;
$arguments62['addQueryString'] = false;
$arguments62['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['action'] = 'show';
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array65);
$arguments62['arguments'] = $array64;

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array66 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array66)]);

$output61 .= '</h1>
                          <h2 class="donne-green product-price">';
$array67 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array67)]);

$output61 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array83)]);

$output82 .= '" alt="alt';
$array84 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array84)]);

$output82 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output82;
};
$arguments80 = array();

$output79 .= '';

$output79 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array88)]);

$output87 .= '" alt="alt';
$array89 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array89)]);

$output87 .= '">
                              </div>
                          ';
return $output87;
};
$arguments85 = array();
$arguments85['if'] = NULL;

$output79 .= '';

$output79 .= '
                      ';
return $output79;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array77);
$array76['1'] = ' == 0';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array71)]);

$output70 .= '" alt="alt';
$array72 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array72)]);

$output70 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array74)]);

$output73 .= '" alt="alt';
$array75 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array75)]);

$output73 .= '">
                              </div>
                          ';
return $output73;
};

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output61 .= '
                  </div>
              </a>
          ';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array60);
$arguments58['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output0 .= '
         </div>
        <!-- Pagination -->
        <div class="pagination">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments96 = array();
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['aria'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$arguments96['action'] = NULL;
$arguments96['controller'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['pluginName'] = NULL;
$arguments96['pageUid'] = NULL;
$arguments96['pageType'] = NULL;
$arguments96['noCache'] = NULL;
$arguments96['language'] = NULL;
$arguments96['section'] = NULL;
$arguments96['format'] = NULL;
$arguments96['linkAccessRestrictedPages'] = NULL;
$arguments96['additionalParams'] = NULL;
$arguments96['absolute'] = NULL;
$arguments96['addQueryString'] = NULL;
$arguments96['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments96['addQueryStringMethod'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['action'] = 'list';
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array99);
$arguments96['arguments'] = $array98;
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array101);
$array102 = array (
);$array100['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array102);
$array103 = array (
);$array100['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array103);
$arguments96['additionalParams'] = $array100;

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
            ';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array116 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array116)]);
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['aria'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['name'] = NULL;
$arguments108['rel'] = NULL;
$arguments108['rev'] = NULL;
$arguments108['target'] = NULL;
$arguments108['action'] = NULL;
$arguments108['controller'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['pluginName'] = NULL;
$arguments108['pageUid'] = NULL;
$arguments108['pageType'] = NULL;
$arguments108['noCache'] = NULL;
$arguments108['language'] = NULL;
$arguments108['section'] = NULL;
$arguments108['format'] = NULL;
$arguments108['linkAccessRestrictedPages'] = NULL;
$arguments108['additionalParams'] = NULL;
$arguments108['absolute'] = NULL;
$arguments108['addQueryString'] = NULL;
$arguments108['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments108['addQueryStringMethod'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['action'] = 'list';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array111);
$arguments108['arguments'] = $array110;
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array113);
$array114 = array (
);$array112['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array114);
$array115 = array (
);$array112['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array115);
$arguments108['additionalParams'] = $array112;

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
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
);$arguments104['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array106);
$arguments104['as'] = 'pageNumber';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return '&gt;';
};
$arguments123 = array();
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['aria'] = NULL;
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$arguments123['action'] = NULL;
$arguments123['controller'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['pluginName'] = NULL;
$arguments123['pageUid'] = NULL;
$arguments123['pageType'] = NULL;
$arguments123['noCache'] = NULL;
$arguments123['language'] = NULL;
$arguments123['section'] = NULL;
$arguments123['format'] = NULL;
$arguments123['linkAccessRestrictedPages'] = NULL;
$arguments123['additionalParams'] = NULL;
$arguments123['absolute'] = NULL;
$arguments123['addQueryString'] = NULL;
$arguments123['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments123['addQueryStringMethod'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['action'] = 'list';
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['page'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array126);
$arguments123['arguments'] = $array125;
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array128);
$array129 = array (
);$array127['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array129);
$array130 = array (
);$array127['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array130);
$arguments123['additionalParams'] = $array127;

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
            ';
return $output122;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('nextPageNumber', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

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
$output131 = '';

$output131 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['name'] = NULL;
$arguments132['name'] = 'Default';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output131 .= '

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
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
    <div class="sidebar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return ' import';
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['aria'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = NULL;
$arguments137['noCache'] = NULL;
$arguments137['language'] = NULL;
$arguments137['section'] = NULL;
$arguments137['format'] = NULL;
$arguments137['linkAccessRestrictedPages'] = NULL;
$arguments137['additionalParams'] = NULL;
$arguments137['absolute'] = NULL;
$arguments137['addQueryString'] = NULL;
$arguments137['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['action'] = 'import';
$arguments137['class'] = 'donne-green';

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '

        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['action'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['controller'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['pluginName'] = NULL;
$arguments139['pageUid'] = NULL;
$arguments139['pageType'] = 0;
$arguments139['noCache'] = NULL;
$arguments139['language'] = NULL;
$arguments139['section'] = '';
$arguments139['format'] = '';
$arguments139['linkAccessRestrictedPages'] = false;
$arguments139['additionalParams'] = array (
);
$arguments139['absolute'] = false;
$arguments139['addQueryString'] = false;
$arguments139['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments139['addQueryStringMethod'] = NULL;
$arguments139['action'] = 'list';
$arguments139['controller'] = 'Produkt';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output136 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array141 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array141)]);

$output136 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                    <div class="checkbox-custom">
                        <!--';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['aria'] = NULL;
$arguments151['name'] = NULL;
$arguments151['value'] = NULL;
$arguments151['property'] = NULL;
$arguments151['disabled'] = NULL;
$arguments151['errorClass'] = 'f3-form-error';
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['checked'] = NULL;
$arguments151['multiple'] = false;
$output153 = '';

$output153 .= 'myCheckbox';
$array154 = array (
);
$output153 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array154);
$arguments151['id'] = $output153;
$arguments151['name'] = 'kategory[]';
$array155 = array (
);$arguments151['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array155);
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array156['0'] = 'checked';

$expression157 = function($context) {return "checked";};
$arguments151['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                        ';
return $output150;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array148['0'] = '{selectedCategories[kategory.uid] == kategory.uid}';

$expression149 = function($context) {return "{selectedCategories";};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['aria'] = NULL;
$arguments161['name'] = NULL;
$arguments161['value'] = NULL;
$arguments161['property'] = NULL;
$arguments161['disabled'] = NULL;
$arguments161['errorClass'] = 'f3-form-error';
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['checked'] = NULL;
$arguments161['multiple'] = false;
$output163 = '';

$output163 .= 'myCheckbox';
$array164 = array (
);
$output163 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array164);
$arguments161['id'] = $output163;
$arguments161['name'] = 'kategory[]';
$array165 = array (
);$arguments161['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array165);

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                        ';
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output145 .= '';

$output145 .= '-->
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['aria'] = NULL;
$arguments171['name'] = NULL;
$arguments171['value'] = NULL;
$arguments171['property'] = NULL;
$arguments171['disabled'] = NULL;
$arguments171['errorClass'] = 'f3-form-error';
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['checked'] = NULL;
$arguments171['multiple'] = false;
$output173 = '';

$output173 .= 'myCheckbox';
$array174 = array (
);
$output173 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array174);
$arguments171['id'] = $output173;
$arguments171['name'] = 'kategory[]';
$array175 = array (
);$arguments171['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array175);
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array176['0'] = 'checked';

$expression177 = function($context) {return "checked";};
$arguments171['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
                        ';
return $output170;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array168['0'] = '{kategory.uid in selectedCategories }';

$expression169 = function($context) {return "{kategory.uid";};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output145 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
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

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= '
                        ';
return $output180;
};
$arguments178 = array();
$arguments178['if'] = NULL;

$output145 .= '';

$output145 .= '
                        <label class="donne" for="myCheckbox';
$array186 = array (
);
$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array186)]);

$output145 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array187 = array (
);
$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array187)]);

$output145 .= '</span>
                            <span class="category-name">';
$array188 = array (
);
$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array188)]);

$output145 .= '</span>
                        </label>
                    </div>
                ';
return $output145;
};
$arguments142 = array();
$arguments142['each'] = NULL;
$arguments142['as'] = NULL;
$arguments142['key'] = NULL;
$arguments142['reverse'] = false;
$arguments142['iteration'] = NULL;
$array144 = array (
);$arguments142['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array144);
$arguments142['as'] = 'kategory';

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output136 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                <div>';
$array193 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array193)]);

$output192 .= '</div>
                ';
return $output192;
};
$arguments189 = array();
$arguments189['each'] = NULL;
$arguments189['as'] = NULL;
$arguments189['key'] = NULL;
$arguments189['reverse'] = false;
$arguments189['iteration'] = NULL;
$array191 = array (
);$arguments189['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array191);
$arguments189['as'] = 'data';

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output136 .= '
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
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['action'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['controller'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['pluginName'] = NULL;
$arguments198['pageUid'] = NULL;
$arguments198['pageType'] = 0;
$arguments198['noCache'] = NULL;
$arguments198['language'] = NULL;
$arguments198['section'] = '';
$arguments198['format'] = '';
$arguments198['linkAccessRestrictedPages'] = false;
$arguments198['additionalParams'] = array (
);
$arguments198['absolute'] = false;
$arguments198['addQueryString'] = false;
$arguments198['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments198['addQueryStringMethod'] = NULL;
$arguments198['action'] = 'show';
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array201);
$arguments198['arguments'] = $array200;

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array202 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array202)]);

$output197 .= '</h1>
                          <h2 class="donne-green product-price">';
$array203 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array203)]);

$output197 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array219 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array219)]);

$output218 .= '" alt="alt';
$array220 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array220)]);

$output218 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output218;
};
$arguments216 = array();

$output215 .= '';

$output215 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array224 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array224)]);

$output223 .= '" alt="alt';
$array225 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array225)]);

$output223 .= '">
                              </div>
                          ';
return $output223;
};
$arguments221 = array();
$arguments221['if'] = NULL;

$output215 .= '';

$output215 .= '
                      ';
return $output215;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array213);
$array212['1'] = ' == 0';

$expression214 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array207 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array207)]);

$output206 .= '" alt="alt';
$array208 = array (
);
$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array208)]);

$output206 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output206;
};
$arguments204['__elseClosures'][] = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                              <div class="product-img zoom">
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
                          ';
return $output209;
};

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output197 .= '
                  </div>
              </a>
          ';
return $output197;
};
$arguments194 = array();
$arguments194['each'] = NULL;
$arguments194['as'] = NULL;
$arguments194['key'] = NULL;
$arguments194['reverse'] = false;
$arguments194['iteration'] = NULL;
$array196 = array (
);$arguments194['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array196);
$arguments194['as'] = 'produkt';

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output136 .= '
         </div>
        <!-- Pagination -->
        <div class="pagination">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return '&lt;';
};
$arguments232 = array();
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['aria'] = NULL;
$arguments232['class'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
$arguments232['name'] = NULL;
$arguments232['rel'] = NULL;
$arguments232['rev'] = NULL;
$arguments232['target'] = NULL;
$arguments232['action'] = NULL;
$arguments232['controller'] = NULL;
$arguments232['extensionName'] = NULL;
$arguments232['pluginName'] = NULL;
$arguments232['pageUid'] = NULL;
$arguments232['pageType'] = NULL;
$arguments232['noCache'] = NULL;
$arguments232['language'] = NULL;
$arguments232['section'] = NULL;
$arguments232['format'] = NULL;
$arguments232['linkAccessRestrictedPages'] = NULL;
$arguments232['additionalParams'] = NULL;
$arguments232['absolute'] = NULL;
$arguments232['addQueryString'] = NULL;
$arguments232['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments232['addQueryStringMethod'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['action'] = 'list';
// Rendering Array
$array234 = array();
$array235 = array (
);$array234['page'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array235);
$arguments232['arguments'] = $array234;
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array237);
$array238 = array (
);$array236['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array238);
$array239 = array (
);$array236['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array239);
$arguments232['additionalParams'] = $array236;

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
            ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('previousPageNumber', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output136 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$array252 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array252)]);
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['aria'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$arguments244['action'] = NULL;
$arguments244['controller'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['pluginName'] = NULL;
$arguments244['pageUid'] = NULL;
$arguments244['pageType'] = NULL;
$arguments244['noCache'] = NULL;
$arguments244['language'] = NULL;
$arguments244['section'] = NULL;
$arguments244['format'] = NULL;
$arguments244['linkAccessRestrictedPages'] = NULL;
$arguments244['additionalParams'] = NULL;
$arguments244['absolute'] = NULL;
$arguments244['addQueryString'] = NULL;
$arguments244['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments244['addQueryStringMethod'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['action'] = 'list';
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['page'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array247);
$arguments244['arguments'] = $array246;
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array249);
$array250 = array (
);$array248['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array250);
$array251 = array (
);$array248['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array251);
$arguments244['additionalParams'] = $array248;

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
            ';
return $output243;
};
$arguments240 = array();
$arguments240['each'] = NULL;
$arguments240['as'] = NULL;
$arguments240['key'] = NULL;
$arguments240['reverse'] = false;
$arguments240['iteration'] = NULL;
$array242 = array (
);$arguments240['each'] = $renderingContext->getVariableProvider()->getByPath('allPageNumbers', $array242);
$arguments240['as'] = 'pageNumber';

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output136 .= '
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
$arguments259['arguments'] = $array261;
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['searchTerm'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array264);
$array265 = array (
);$array263['kategory'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array265);
$array266 = array (
);$array263['priceRange'] = $renderingContext->getVariableProvider()->getByPath('priceRange', $array266);
$arguments259['additionalParams'] = $array263;

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

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output136 .= '
        </div>
    </div>  

';
return $output136;
};
$arguments134 = array();
$arguments134['name'] = NULL;
$arguments134['name'] = 'content';

$output131 .= NULL;

$output131 .= '

';

return $output131;
}


}
#