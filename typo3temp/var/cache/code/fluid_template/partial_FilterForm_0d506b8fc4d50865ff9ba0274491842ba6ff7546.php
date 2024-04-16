<?php

class partial_FilterForm_0d506b8fc4d50865ff9ba0274491842ba6ff7546 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output2 = '';

$output2 .= '
    <div class="icon-input">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['aria'] = NULL;
$arguments3['name'] = NULL;
$arguments3['value'] = NULL;
$arguments3['property'] = NULL;
$arguments3['autofocus'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['maxlength'] = NULL;
$arguments3['readonly'] = NULL;
$arguments3['size'] = NULL;
$arguments3['placeholder'] = NULL;
$arguments3['pattern'] = NULL;
$arguments3['errorClass'] = 'f3-form-error';
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['required'] = false;
$arguments3['type'] = 'text';
$arguments3['class'] = 'search';
$arguments3['name'] = 'titel';
$array5 = array (
);$arguments3['value'] = $renderingContext->getVariableProvider()->getByPath('titel', $array5);
$arguments3['placeholder'] = 'Suche..';

$output2 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output2 .= '
        <button type="submit" class="img-btn"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
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
$arguments10['name'] = 'Kategory[]';
$array14 = array (
);$arguments10['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array14);
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array15['0'] = '{kategory.uid in _GET.kategory}';

$expression16 = function($context) {return "{kategory.uid";};
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

$output2 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output2 .= '
    </div>
    
    <div class="dropdown Preis">
        <h2 class="donne-green">Preis</h2>
        <button class="dropbtn">Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
        <div class="dropdown-content donne">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['aria'] = NULL;
$arguments19['name'] = NULL;
$arguments19['value'] = NULL;
$arguments19['property'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['respectSubmittedDataValue'] = true;
$arguments19['name'] = 'price-filter';
$array21 = array (
);$arguments19['value'] = $renderingContext->getVariableProvider()->getByPath('price_filter', $array21);

$output2 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output2 .= '
            <a href="#" onclick="price_filter(1)">0 $ - 50 $</a>
            <a href="#" onclick="price_filter(2)">50 $ - 100 $</a>
            <a href="#" onclick="price_filter(3)">100 $ - 200 $</a>
            <a href="#" onclick="price_filter(4)">200 $ und mehr</a>
        </div>
    </div>
';
return $output2;
};
$arguments0 = array();
$arguments0['additionalAttributes'] = NULL;
$arguments0['data'] = NULL;
$arguments0['aria'] = NULL;
$arguments0['action'] = NULL;
$arguments0['arguments'] = array (
);
$arguments0['controller'] = NULL;
$arguments0['extensionName'] = NULL;
$arguments0['pluginName'] = NULL;
$arguments0['pageUid'] = NULL;
$arguments0['object'] = NULL;
$arguments0['pageType'] = 0;
$arguments0['noCache'] = false;
$arguments0['section'] = '';
$arguments0['format'] = '';
$arguments0['additionalParams'] = array (
);
$arguments0['absolute'] = false;
$arguments0['addQueryString'] = false;
$arguments0['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments0['addQueryStringMethod'] = NULL;
$arguments0['fieldNamePrefix'] = NULL;
$arguments0['actionUri'] = NULL;
$arguments0['objectName'] = NULL;
$arguments0['hiddenFieldClassName'] = NULL;
$arguments0['enctype'] = NULL;
$arguments0['method'] = NULL;
$arguments0['name'] = NULL;
$arguments0['onreset'] = NULL;
$arguments0['onsubmit'] = NULL;
$arguments0['target'] = NULL;
$arguments0['novalidate'] = NULL;
$arguments0['class'] = NULL;
$arguments0['dir'] = NULL;
$arguments0['id'] = NULL;
$arguments0['lang'] = NULL;
$arguments0['style'] = NULL;
$arguments0['title'] = NULL;
$arguments0['accesskey'] = NULL;
$arguments0['tabindex'] = NULL;
$arguments0['onclick'] = NULL;
$arguments0['action'] = 'list';
$arguments0['controller'] = 'Produkt';
$arguments0['method'] = 'post';

return TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#