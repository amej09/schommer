<?php

class Produkt_action_list_76a2047974f8a9b014db720211c5c01e9bdd0fe8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '<img src="/schommer/fileadmin/user_upload/pfeil.png" />import';
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

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
<br>
    <div class="sidebar">
      
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

$output9 .= '
                        <label class="donne" for="myCheckbox';
$array30 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array30)]);

$output9 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array31 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array31)]);

$output9 .= '</span>
                            <span class="category-name">';
$array32 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array32)]);

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
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                <div>';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array37)]);

$output36 .= '</div>
                ';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array35);
$arguments33['as'] = 'data';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

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
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['action'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['controller'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['pluginName'] = NULL;
$arguments42['pageUid'] = NULL;
$arguments42['pageType'] = 0;
$arguments42['noCache'] = NULL;
$arguments42['language'] = NULL;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['linkAccessRestrictedPages'] = false;
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['addQueryStringMethod'] = NULL;
$arguments42['action'] = 'show';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array45);
$arguments42['arguments'] = $array44;

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output41 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array46 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array46)]);

$output41 .= '</h1>
                          <h2 class="donne-green product-price">';
$array47 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array47)]);

$output41 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array63)]);

$output62 .= '" alt="alt';
$array64 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array64)]);

$output62 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output62;
};
$arguments60 = array();

$output59 .= '';

$output59 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                              <div class="product-img zoom">
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
                          ';
return $output67;
};
$arguments65 = array();
$arguments65['if'] = NULL;

$output59 .= '';

$output59 .= '
                      ';
return $output59;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array57);
$array56['1'] = ' == 0';

$expression58 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array51)]);

$output50 .= '" alt="alt';
$array52 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array52)]);

$output50 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output50;
};
$arguments48['__elseClosures'][] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array54)]);

$output53 .= '" alt="alt';
$array55 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array55)]);

$output53 .= '">
                              </div>
                          ';
return $output53;
};

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output41 .= '
                  </div>
              </a>
          ';
return $output41;
};
$arguments38 = array();
$arguments38['each'] = NULL;
$arguments38['as'] = NULL;
$arguments38['key'] = NULL;
$arguments38['reverse'] = false;
$arguments38['iteration'] = NULL;
$array40 = array (
);$arguments38['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array40);
$arguments38['as'] = 'produkt';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

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
$output70 = '';

$output70 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['name'] = NULL;
$arguments71['name'] = 'Default';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output70 .= '

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
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return '<img src="/schommer/fileadmin/user_upload/pfeil.png" />import';
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['aria'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$arguments76['action'] = NULL;
$arguments76['controller'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['pluginName'] = NULL;
$arguments76['pageUid'] = NULL;
$arguments76['pageType'] = NULL;
$arguments76['noCache'] = NULL;
$arguments76['language'] = NULL;
$arguments76['section'] = NULL;
$arguments76['format'] = NULL;
$arguments76['linkAccessRestrictedPages'] = NULL;
$arguments76['additionalParams'] = NULL;
$arguments76['absolute'] = NULL;
$arguments76['addQueryString'] = NULL;
$arguments76['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments76['addQueryStringMethod'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['action'] = 'import';

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
<br>
    <div class="sidebar">
      
        <form   
            id="form" 
            action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = NULL;
$arguments78['language'] = NULL;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['action'] = 'list';
$arguments78['controller'] = 'Produkt';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output75 .= '"
            method="post">
            <div class="icon-input">
                 <input type="search" name="searchTerm" class="search" value="';
$array80 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array80)]);

$output75 .= '" placeholder="Suche..." />
                 <button type="submit" class="img-btn" onclick="submit()"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['aria'] = NULL;
$arguments90['name'] = NULL;
$arguments90['value'] = NULL;
$arguments90['property'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['checked'] = NULL;
$arguments90['multiple'] = false;
$output92 = '';

$output92 .= 'myCheckbox';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array93);
$arguments90['id'] = $output92;
$arguments90['name'] = 'kategory[]';
$array94 = array (
);$arguments90['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array94);
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array95['0'] = 'checked';

$expression96 = function($context) {return "checked";};
$arguments90['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                        ';
return $output89;
};
$arguments85 = array();
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array87['0'] = '{selectedCategories[kategory.uid] == kategory.uid}';

$expression88 = function($context) {return "{selectedCategories";};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['aria'] = NULL;
$arguments100['name'] = NULL;
$arguments100['value'] = NULL;
$arguments100['property'] = NULL;
$arguments100['disabled'] = NULL;
$arguments100['errorClass'] = 'f3-form-error';
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['checked'] = NULL;
$arguments100['multiple'] = false;
$output102 = '';

$output102 .= 'myCheckbox';
$array103 = array (
);
$output102 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array103);
$arguments100['id'] = $output102;
$arguments100['name'] = 'kategory[]';
$array104 = array (
);$arguments100['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array104);

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                        ';
return $output99;
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output84 .= '';

$output84 .= '
                        <label class="donne" for="myCheckbox';
$array105 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array105)]);

$output84 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array106 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array106)]);

$output84 .= '</span>
                            <span class="category-name">';
$array107 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array107)]);

$output84 .= '</span>
                        </label>
                    </div>
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
);$arguments81['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array83);
$arguments81['as'] = 'kategory';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output75 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                <div>';
$array112 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data', $array112)]);

$output111 .= '</div>
                ';
return $output111;
};
$arguments108 = array();
$arguments108['each'] = NULL;
$arguments108['as'] = NULL;
$arguments108['key'] = NULL;
$arguments108['reverse'] = false;
$arguments108['iteration'] = NULL;
$array110 = array (
);$arguments108['each'] = $renderingContext->getVariableProvider()->getByPath('selectedCategories', $array110);
$arguments108['as'] = 'data';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output75 .= '
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
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
              <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['action'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['controller'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['pluginName'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = 0;
$arguments117['noCache'] = NULL;
$arguments117['language'] = NULL;
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['linkAccessRestrictedPages'] = false;
$arguments117['additionalParams'] = array (
);
$arguments117['absolute'] = false;
$arguments117['addQueryString'] = false;
$arguments117['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['action'] = 'show';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['produkt'] = $renderingContext->getVariableProvider()->getByPath('produkt', $array120);
$arguments117['arguments'] = $array119;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '">
                  <div class="product-card">
                      <div class="product-info">
                          <h1 class="product-title">';
$array121 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array121)]);

$output116 .= '</h1>
                          <h2 class="donne-green product-price">';
$array122 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.preis', $array122)]);

$output116 .= ' €</h2>
                      </div>

                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
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
$arguments135 = array();

$output134 .= '';

$output134 .= '
                          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array143 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array143)]);

$output142 .= '" alt="alt';
$array144 = array (
);
$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array144)]);

$output142 .= '">
                              </div>
                          ';
return $output142;
};
$arguments140 = array();
$arguments140['if'] = NULL;

$output134 .= '';

$output134 .= '
                      ';
return $output134;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('produkt.lager', $array132);
$array131['1'] = ' == 0';

$expression133 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                              <div class="out-of-stock zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array126 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array126)]);

$output125 .= '" alt="alt';
$array127 = array (
);
$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array127)]);

$output125 .= '">
                              </div>
                              <h2 class="out-of-stock-text">ausverkauft</h2>
                          ';
return $output125;
};
$arguments123['__elseClosures'][] = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                              <div class="product-img zoom">
                                  <img src="/schommer/fileadmin/user_upload/';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.dateiname', $array129)]);

$output128 .= '" alt="alt';
$array130 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produkt.titel', $array130)]);

$output128 .= '">
                              </div>
                          ';
return $output128;
};

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= '
                  </div>
              </a>
          ';
return $output116;
};
$arguments113 = array();
$arguments113['each'] = NULL;
$arguments113['as'] = NULL;
$arguments113['key'] = NULL;
$arguments113['reverse'] = false;
$arguments113['iteration'] = NULL;
$array115 = array (
);$arguments113['each'] = $renderingContext->getVariableProvider()->getByPath('produkts', $array115);
$arguments113['as'] = 'produkt';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output75 .= '
          
      </div>
    </div>  

';
return $output75;
};
$arguments73 = array();
$arguments73['name'] = NULL;
$arguments73['name'] = 'content';

$output70 .= NULL;

$output70 .= '

';

return $output70;
}


}
#