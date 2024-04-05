<?php

class partial_FilterForm_a2370150befc9888d5e7c82c75706328cc69cadc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '    <!--<form action="">
        <input type="text" name="" id="">
        <input type="submit" value="Search" />

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('kategories', $array5);
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array3['0'] = 1;

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['inline'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <label for="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kat.uid', $array10)]);

$output9 .= '">
                <input type="checkbox" name="" id="';
$array11 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kat.uid', $array11)]);

$output9 .= '" value="';
$array12 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kat.uid', $array12)]);

$output9 .= '">
                ';
$array13 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kat.name', $array13)]);

$output9 .= '
            </label>
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
$arguments6['as'] = 'kat';
$arguments6['iteration'] = 'i';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
    </form>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            <div class="icon-input">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['aria'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['autofocus'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['maxlength'] = NULL;
$arguments17['readonly'] = NULL;
$arguments17['size'] = NULL;
$arguments17['placeholder'] = NULL;
$arguments17['pattern'] = NULL;
$arguments17['errorClass'] = 'f3-form-error';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['required'] = false;
$arguments17['type'] = 'text';
$arguments17['class'] = 'search';
$arguments17['name'] = 'search';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array19);
$arguments17['placeholder'] = 'Suche..';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                <button type="submit" class="img-btn"><img src="/schommer/fileadmin/user_upload/lupe.svg" /></button>
            </div>
            <div class="categories">
                <h2 class="donne-green">Kategorien</h2>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                    <div class="checkbox-custom">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['aria'] = NULL;
$arguments24['name'] = NULL;
$arguments24['value'] = NULL;
$arguments24['property'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['errorClass'] = 'f3-form-error';
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['checked'] = NULL;
$arguments24['multiple'] = false;
$output26 = '';

$output26 .= 'myCheckbox';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array27);
$arguments24['id'] = $output26;
$arguments24['name'] = 'Kategory[]';
$array28 = array (
);$arguments24['value'] = $renderingContext->getVariableProvider()->getByPath('kategory.uid', $array28);
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = '{kategory.uid in Kategory}';

$expression30 = function($context) {return "{kategory.uid";};
$arguments24['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                        <label class="donne" for="myCheckbox';
$array31 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.uid', $array31)]);

$output23 .= '">
                            <img src="/schommer/fileadmin/user_upload/button_inaktiv.svg" alt="Icône par défaut" class="icon" />
                            <span class="category-name">';
$array32 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('kategory.namekategory', $array32)]);

$output23 .= '</span>
                        </label>
                    </div>
                ';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('kategories', $array22);
$arguments20['as'] = 'kategory';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output16 .= '
            </div>
            <div class="dropdown Preis">
                <h2 class="donne-green">Preis</h2>
                <button class="dropbtn">Preisspanne wählen<span><img src="/schommer/fileadmin/user_upload/pfeil.png" /></span></button>
                <div class="dropdown-content donne">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['respectSubmittedDataValue'] = true;
$arguments33['name'] = 'price-filter';
$array35 = array (
);$arguments33['value'] = $renderingContext->getVariableProvider()->getByPath('price_filter', $array35);

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output16 .= '
                    <a href="#" onclick="price_filter(1)">0 $ - 50 $</a>
                    <a href="#" onclick="price_filter(2)">50 $ - 100 $</a>
                    <a href="#" onclick="price_filter(3)">100 $ - 200 $</a>
                    <a href="#" onclick="price_filter(4)">200 $ und mehr</a>
                </div>
            </div>
    ';
return $output16;
};
$arguments14 = array();
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['aria'] = NULL;
$arguments14['action'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['controller'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['pluginName'] = NULL;
$arguments14['pageUid'] = NULL;
$arguments14['object'] = NULL;
$arguments14['pageType'] = 0;
$arguments14['noCache'] = false;
$arguments14['section'] = '';
$arguments14['format'] = '';
$arguments14['additionalParams'] = array (
);
$arguments14['absolute'] = false;
$arguments14['addQueryString'] = false;
$arguments14['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments14['addQueryStringMethod'] = NULL;
$arguments14['fieldNamePrefix'] = NULL;
$arguments14['actionUri'] = NULL;
$arguments14['objectName'] = NULL;
$arguments14['hiddenFieldClassName'] = NULL;
$arguments14['enctype'] = NULL;
$arguments14['method'] = NULL;
$arguments14['name'] = NULL;
$arguments14['onreset'] = NULL;
$arguments14['onsubmit'] = NULL;
$arguments14['target'] = NULL;
$arguments14['novalidate'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['action'] = 'yourAction';
$arguments14['method'] = 'GET';
$arguments14['name'] = 'Filter';
$arguments14['id'] = 'form';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '-->

  <!-- FilterForm.html -->
   
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['aria'] = NULL;
$arguments39['name'] = NULL;
$arguments39['value'] = NULL;
$arguments39['property'] = NULL;
$arguments39['autofocus'] = NULL;
$arguments39['disabled'] = NULL;
$arguments39['maxlength'] = NULL;
$arguments39['readonly'] = NULL;
$arguments39['size'] = NULL;
$arguments39['placeholder'] = NULL;
$arguments39['pattern'] = NULL;
$arguments39['errorClass'] = 'f3-form-error';
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['required'] = false;
$arguments39['type'] = 'text';
$arguments39['name'] = 'titel';
$array41 = array (
);$arguments39['value'] = $renderingContext->getVariableProvider()->getByPath('titel', $array41);
$arguments39['placeholder'] = 'Rechercher par titre';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['aria'] = NULL;
$arguments42['name'] = NULL;
$arguments42['value'] = NULL;
$arguments42['property'] = NULL;
$arguments42['disabled'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['value'] = 'Filtrer';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output38 .= '

    ';
return $output38;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['aria'] = NULL;
$arguments36['action'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['object'] = NULL;
$arguments36['pageType'] = 0;
$arguments36['noCache'] = false;
$arguments36['section'] = '';
$arguments36['format'] = '';
$arguments36['additionalParams'] = array (
);
$arguments36['absolute'] = false;
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['fieldNamePrefix'] = NULL;
$arguments36['actionUri'] = NULL;
$arguments36['objectName'] = NULL;
$arguments36['hiddenFieldClassName'] = NULL;
$arguments36['enctype'] = NULL;
$arguments36['method'] = NULL;
$arguments36['name'] = NULL;
$arguments36['onreset'] = NULL;
$arguments36['onsubmit'] = NULL;
$arguments36['target'] = NULL;
$arguments36['novalidate'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['action'] = 'list';
$arguments36['method'] = 'post';
$arguments36['class'] = 'filter-form';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return 'Rafraîchir la liste';
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['aria'] = NULL;
$arguments44['uri'] = NULL;
$arguments44['defaultScheme'] = 'https';
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$array46 = array (
);$arguments44['uri'] = $renderingContext->getVariableProvider()->getByPath('newUrl', $array46);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#