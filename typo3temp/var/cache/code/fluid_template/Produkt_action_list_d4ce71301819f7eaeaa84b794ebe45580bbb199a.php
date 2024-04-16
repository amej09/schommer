<?php

class Produkt_action_list_d4ce71301819f7eaeaa84b794ebe45580bbb199a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return '
                    <div class="checkbox-custom">
                        <f:form.checkbox id="myCheckbox{kategory.uid}" onclick="submit()" name="kategory[]" value="{kategory.uid}" {f:if(condition: kategory.uid in selectedCategories, then: \'checked\')  />
                        <label class="donne" for="myCheckbox{kategory.uid}">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">{kategory.namekategory}</span>
                        </label>
                    </div>
                ';
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
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['action'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = NULL;
$arguments13['language'] = NULL;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['addQueryStringMethod'] = NULL;
$arguments13['action'] = 'show';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array16);
$arguments13['arguments'] = $array15;

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array17 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array17)]);

$output12 .= '</h1>
                          <h2 class="donne-green product-price">';
$array18 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array18)]);

$output12 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array34)]);

$output33 .= '" alt="alt';
$array35 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array35)]);

$output33 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array39)]);

$output38 .= '" alt="alt';
$array40 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array40)]);

$output38 .= '">
                              </div>
                          ';
return $output38;
};
$arguments36 = array();
$arguments36['if'] = NULL;

$output30 .= '';

$output30 .= '
                      ';
return $output30;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array28);
$array27['1'] = ' == 0';

$expression29 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array22)]);

$output21 .= '" alt="alt';
$array23 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array23)]);

$output21 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array25)]);

$output24 .= '" alt="alt';
$array26 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array26)]);

$output24 .= '">
                              </div>
                          ';
return $output24;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output12 .= '
                  </div>
              </a>
          ';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array11);
$arguments9['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

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
$output41 = '';

$output41 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Default';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output41 .= '

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
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
 
    <div class="sidebar">
       <!-- ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['debug'] = true;
$arguments47['partial'] = 'FilterForm';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '-->
       <form   id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['action'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = 0;
$arguments49['noCache'] = NULL;
$arguments49['language'] = NULL;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['linkAccessRestrictedPages'] = false;
$arguments49['additionalParams'] = array (
);
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['action'] = 'list';
$arguments49['controller'] = 'Produkt';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output46 .= '"
            method="post">
            <div class="icon-input">
                <input type="search" name="searchTerm" class="search" value="';
$array51 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array51)]);

$output46 .= '" placeholder="Suche..." />
                
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>

            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return '
                    <div class="checkbox-custom">
                        <f:form.checkbox id="myCheckbox{kategory.uid}" onclick="submit()" name="kategory[]" value="{kategory.uid}" {f:if(condition: kategory.uid in selectedCategories, then: \'checked\')  />
                        <label class="donne" for="myCheckbox{kategory.uid}">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">{kategory.namekategory}</span>
                        </label>
                    </div>
                ';
};
$arguments52 = array();
$arguments52['each'] = NULL;
$arguments52['as'] = NULL;
$arguments52['key'] = NULL;
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$array54 = array (
);$arguments52['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array54);
$arguments52['as'] = 'kategory';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output46 .= '
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
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
              <a href="';
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
$arguments59['action'] = 'show';
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array62);
$arguments59['arguments'] = $array61;

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array63 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array63)]);

$output58 .= '</h1>
                          <h2 class="donne-green product-price">';
$array64 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array64)]);

$output58 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array80)]);

$output79 .= '" alt="alt';
$array81 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array81)]);

$output79 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
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
$arguments82 = array();
$arguments82['if'] = NULL;

$output76 .= '';

$output76 .= '
                      ';
return $output76;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array74);
$array73['1'] = ' == 0';

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array68)]);

$output67 .= '" alt="alt';
$array69 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array69)]);

$output67 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output67;
};
$arguments65['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                              <div class="product-img zoom">
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
                          ';
return $output70;
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output58 .= '
                  </div>
              </a>
          ';
return $output58;
};
$arguments55 = array();
$arguments55['each'] = NULL;
$arguments55['as'] = NULL;
$arguments55['key'] = NULL;
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$array57 = array (
);$arguments55['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array57);
$arguments55['as'] = 'produkt';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output46 .= '
          
      </div>
    </div>  

';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'content';

$output41 .= NULL;

$output41 .= '

';

return $output41;
}


}
#