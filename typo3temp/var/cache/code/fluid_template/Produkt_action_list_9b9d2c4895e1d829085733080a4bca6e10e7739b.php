<?php

class Produkt_action_list_9b9d2c4895e1d829085733080a4bca6e10e7739b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                <input type="search" name="searchTerm" class="search" value="" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['aria'] = NULL;
$arguments9['name'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['checked'] = NULL;
$arguments9['multiple'] = false;
$output11 = '';

$output11 .= 'myCheckbox';
$array12 = array (
);
$output11 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array12);
$arguments9['id'] = $output11;
$arguments9['onclick'] = 'submit()';
$arguments9['name'] = 'kategory[]';
$array13 = array (
);$arguments9['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array13);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
                        <label class="donne" for="myCheckbox';
$array14 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array14)]);

$output8 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array15 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array15)]);

$output8 .= '</span>
                        </label>
                    </div>
                ';
return $output8;
};
$arguments5 = array();
$arguments5['each'] = NULL;
$arguments5['as'] = NULL;
$arguments5['key'] = NULL;
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$array7 = array (
);$arguments5['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array7);
$arguments5['as'] = 'kategory';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['pluginName'] = NULL;
$arguments20['pageUid'] = NULL;
$arguments20['pageType'] = 0;
$arguments20['noCache'] = NULL;
$arguments20['language'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['linkAccessRestrictedPages'] = false;
$arguments20['additionalParams'] = array (
);
$arguments20['absolute'] = false;
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['addQueryStringMethod'] = NULL;
$arguments20['action'] = 'show';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array23);
$arguments20['arguments'] = $array22;

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array24 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array24)]);

$output19 .= '</h1>
                          <h2 class="donne-green product-price">';
$array25 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array25)]);

$output19 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array41)]);

$output40 .= '" alt="alt';
$array42 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array42)]);

$output40 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output40;
};
$arguments38 = array();

$output37 .= '';

$output37 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array46 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array46)]);

$output45 .= '" alt="alt';
$array47 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array47)]);

$output45 .= '">
                              </div>
                          ';
return $output45;
};
$arguments43 = array();
$arguments43['if'] = NULL;

$output37 .= '';

$output37 .= '
                      ';
return $output37;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array35);
$array34['1'] = ' == 0';

$expression36 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array29)]);

$output28 .= '" alt="alt';
$array30 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array30)]);

$output28 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output28;
};
$arguments26['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                              <div class="product-img zoom">
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
                          ';
return $output31;
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output19 .= '
                  </div>
              </a>
          ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array18);
$arguments16['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

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
$output48 = '';

$output48 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'Default';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output48 .= '

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
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
 
    <div class="sidebar">
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['section'] = NULL;
$arguments54['partial'] = NULL;
$arguments54['delegate'] = NULL;
$arguments54['renderable'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['optional'] = false;
$arguments54['default'] = NULL;
$arguments54['contentAs'] = NULL;
$arguments54['debug'] = true;
$arguments54['partial'] = 'FilterForm';

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '-->
       <form   id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['action'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['controller'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['pluginName'] = NULL;
$arguments56['pageUid'] = NULL;
$arguments56['pageType'] = 0;
$arguments56['noCache'] = NULL;
$arguments56['language'] = NULL;
$arguments56['section'] = '';
$arguments56['format'] = '';
$arguments56['linkAccessRestrictedPages'] = false;
$arguments56['additionalParams'] = array (
);
$arguments56['absolute'] = false;
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['addQueryStringMethod'] = NULL;
$arguments56['action'] = 'list';
$arguments56['controller'] = 'Produkt';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output53 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['aria'] = NULL;
$arguments62['name'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['checked'] = NULL;
$arguments62['multiple'] = false;
$output64 = '';

$output64 .= 'myCheckbox';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array65);
$arguments62['id'] = $output64;
$arguments62['onclick'] = 'submit()';
$arguments62['name'] = 'kategory[]';
$array66 = array (
);$arguments62['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array66);

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                        <label class="donne" for="myCheckbox';
$array67 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array67)]);

$output61 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array68 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array68)]);

$output61 .= '</span>
                        </label>
                    </div>
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
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array60);
$arguments58['as'] = 'kategory';

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output53 .= '
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
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['action'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['controller'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['pluginName'] = NULL;
$arguments73['pageUid'] = NULL;
$arguments73['pageType'] = 0;
$arguments73['noCache'] = NULL;
$arguments73['language'] = NULL;
$arguments73['section'] = '';
$arguments73['format'] = '';
$arguments73['linkAccessRestrictedPages'] = false;
$arguments73['additionalParams'] = array (
);
$arguments73['absolute'] = false;
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['action'] = 'show';
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array76);
$arguments73['arguments'] = $array75;

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array77 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array77)]);

$output72 .= '</h1>
                          <h2 class="donne-green product-price">';
$array78 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array78)]);

$output72 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
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
$arguments91 = array();

$output90 .= '';

$output90 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array99)]);

$output98 .= '" alt="alt';
$array100 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array100)]);

$output98 .= '">
                              </div>
                          ';
return $output98;
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output90 .= '';

$output90 .= '
                      ';
return $output90;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array88);
$array87['1'] = ' == 0';

$expression89 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array82 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array82)]);

$output81 .= '" alt="alt';
$array83 = array (
);
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array83)]);

$output81 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output81;
};
$arguments79['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array85)]);

$output84 .= '" alt="alt';
$array86 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array86)]);

$output84 .= '">
                              </div>
                          ';
return $output84;
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output72 .= '
                  </div>
              </a>
          ';
return $output72;
};
$arguments69 = array();
$arguments69['each'] = NULL;
$arguments69['as'] = NULL;
$arguments69['key'] = NULL;
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$array71 = array (
);$arguments69['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array71);
$arguments69['as'] = 'produkt';

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output53 .= '
          
      </div>
    </div>  

';
return $output53;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['name'] = 'content';

$output48 .= NULL;

$output48 .= '

';

return $output48;
}


}
#