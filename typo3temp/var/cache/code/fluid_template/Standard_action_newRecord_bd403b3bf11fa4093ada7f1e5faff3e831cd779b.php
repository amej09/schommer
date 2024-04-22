<?php

class Standard_action_newRecord_bd403b3bf11fa4093ada7f1e5faff3e831cd779b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:db_new.php.pagetitle';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <div class="row mb-4">
        <div class="col-12">
            <strong>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['identifier'] = NULL;
$arguments7['size'] = 'small';
$arguments7['overlay'] = NULL;
$arguments7['state'] = 'default';
$arguments7['alternativeMarkupIdentifier'] = NULL;
$array9 = array (
);$arguments7['identifier'] = $renderingContext->getVariableProvider()->getByPath('groupedLinks.icon', $array9);
$arguments7['size'] = 'small';

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= ' ';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupedLinks.title', $array10)]);

$output6 .= '</strong>
            <div class="list-group mt-2">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('link', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output14 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output14 .= '
                ';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLinks.items', $array13);
$arguments11['as'] = 'link';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
            </div>
        </div>
    </div>
';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLinksOnTop', $array5);
$arguments3['key'] = 'recordTypeTable';
$arguments3['as'] = 'groupedLinks';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
    <div class="row mb-4">
        <div class="col-12">
            <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.icon', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output21 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output21 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.title', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['mode'] = 'upper';
$arguments25['mode'] = 'capital';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output21 .= '</strong>
            <div class="list-group mt-2">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('recordTypeItem', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output31 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output31 .= '
                ';
return $output31;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$array30 = array (
);$arguments28['each'] = $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.html', $array30);
$arguments28['key'] = 'recordTypeTable';
$arguments28['as'] = 'recordTypeItem';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output21 .= '
            </div>
        </div>
    </div>
';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['each'] = $renderingContext->getVariableProvider()->getByPath('recordTypeGroups', $array20);
$arguments18['as'] = 'recordTypeGroup';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#