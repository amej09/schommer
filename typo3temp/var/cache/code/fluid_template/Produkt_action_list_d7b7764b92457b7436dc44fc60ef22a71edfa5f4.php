<?php

class Produkt_action_list_d7b7764b92457b7436dc44fc60ef22a71edfa5f4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
       <form   id="form" 
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['checked'] = NULL;
$arguments10['multiple'] = false;
$output12 = '';

$output12 .= 'myCheckbox';
$array13 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array13);
$arguments10['id'] = $output12;
$arguments10['onclick'] = 'submit()';
$arguments10['name'] = 'kategory[]';
$array14 = array (
);$arguments10['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array14);
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array15['0'] = '{f:if(condition: kategory.uid in selectedCategories, then: \'checked\', else: \'\')}';

$expression16 = function($context) {return "{f";};
$arguments10['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                        <label class="donne" for="myCheckbox';
$array17 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array17)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array18 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array18)]);

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
        <!--<div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn">Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="radio" name="priceRange" value="0-50">$0 - $50<br>
                    <input type="radio" name="priceRange" value="50-100">$50 - $100<br>
                    <input type="radio" name="priceRange" value="100-200">$100 - $200<br>
                    <input type="radio" name="priceRange" value="200">$200+<br>
                </div>
            </div>-->

        </form>
 


    </div>
    <div class="right-section">
        <div class="product-cards">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = 0;
$arguments23['noCache'] = NULL;
$arguments23['language'] = NULL;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['linkAccessRestrictedPages'] = false;
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['action'] = 'show';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array26);
$arguments23['arguments'] = $array25;

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array27 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array27)]);

$output22 .= '</h1>
                          <h2 class="donne-green product-price">';
$array28 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array28)]);

$output22 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array44)]);

$output43 .= '" alt="alt';
$array45 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array45)]);

$output43 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array49)]);

$output48 .= '" alt="alt';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array50)]);

$output48 .= '">
                              </div>
                          ';
return $output48;
};
$arguments46 = array();
$arguments46['if'] = NULL;

$output40 .= '';

$output40 .= '
                      ';
return $output40;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array38);
$array37['1'] = ' == 0';

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array32)]);

$output31 .= '" alt="alt';
$array33 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array33)]);

$output31 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output31;
};
$arguments29['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array35 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array35)]);

$output34 .= '" alt="alt';
$array36 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array36)]);

$output34 .= '">
                              </div>
                          ';
return $output34;
};

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output22 .= '
                  </div>
              </a>
          ';
return $output22;
};
$arguments19 = array();
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$array21 = array (
);$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array21);
$arguments19['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

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
$output51 = '';

$output51 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Default';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output51 .= '

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
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
 
    <div class="sidebar">
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['debug'] = true;
$arguments57['partial'] = 'FilterForm';

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '-->
       <form   id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['action'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = NULL;
$arguments59['language'] = NULL;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['linkAccessRestrictedPages'] = false;
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['action'] = 'list';
$arguments59['controller'] = 'Produkt';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output56 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array61 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array61)]);

$output56 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                    <div class="checkbox-custom">
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
$arguments66['onclick'] = 'submit()';
$arguments66['name'] = 'kategory[]';
$array70 = array (
);$arguments66['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array70);
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array71['0'] = '{f:if(condition: kategory.uid in selectedCategories, then: \'checked\', else: \'\')}';

$expression72 = function($context) {return "{f";};
$arguments66['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                        <label class="donne" for="myCheckbox';
$array73 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array73)]);

$output65 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array74 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array74)]);

$output65 .= '</span>
                        </label>
                    </div>
                ';
return $output65;
};
$arguments62 = array();
$arguments62['each'] = NULL;
$arguments62['as'] = NULL;
$arguments62['key'] = NULL;
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$array64 = array (
);$arguments62['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array64);
$arguments62['as'] = 'kategory';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output56 .= '
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
        <!--<div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn">Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    <input type="radio" name="priceRange" value="0-50">$0 - $50<br>
                    <input type="radio" name="priceRange" value="50-100">$50 - $100<br>
                    <input type="radio" name="priceRange" value="100-200">$100 - $200<br>
                    <input type="radio" name="priceRange" value="200">$200+<br>
                </div>
            </div>-->

        </form>
 


    </div>
    <div class="right-section">
        <div class="product-cards">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['action'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['controller'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['pluginName'] = NULL;
$arguments79['pageUid'] = NULL;
$arguments79['pageType'] = 0;
$arguments79['noCache'] = NULL;
$arguments79['language'] = NULL;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['linkAccessRestrictedPages'] = false;
$arguments79['additionalParams'] = array (
);
$arguments79['absolute'] = false;
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['addQueryStringMethod'] = NULL;
$arguments79['action'] = 'show';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array82);
$arguments79['arguments'] = $array81;

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array83 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array83)]);

$output78 .= '</h1>
                          <h2 class="donne-green product-price">';
$array84 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array84)]);

$output78 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
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
$arguments97 = array();

$output96 .= '';

$output96 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
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
$arguments102 = array();
$arguments102['if'] = NULL;

$output96 .= '';

$output96 .= '
                      ';
return $output96;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array94);
$array93['1'] = ' == 0';

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                              <div class="out-of-stock zoom">
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
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output87;
};
$arguments85['__elseClosures'][] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array91 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array91)]);

$output90 .= '" alt="alt';
$array92 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array92)]);

$output90 .= '">
                              </div>
                          ';
return $output90;
};

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output78 .= '
                  </div>
              </a>
          ';
return $output78;
};
$arguments75 = array();
$arguments75['each'] = NULL;
$arguments75['as'] = NULL;
$arguments75['key'] = NULL;
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$array77 = array (
);$arguments75['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array77);
$arguments75['as'] = 'produkt';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output56 .= '
          
      </div>
    </div>  

';
return $output56;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'content';

$output51 .= NULL;

$output51 .= '

';

return $output51;
}


}
#