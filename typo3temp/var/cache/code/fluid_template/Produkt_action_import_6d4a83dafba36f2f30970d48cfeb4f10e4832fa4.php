<?php

class Produkt_action_import_6d4a83dafba36f2f30970d48cfeb4f10e4832fa4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <!--<div class="container">
        <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['action'] = 'import';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" method="post" enctype="multipart/form-data">
            <label for="csvFile">Sélectionner un fichier CSV :</label>
            <input type="file" id="csvFile" name="csvFile" accept=".csv">
            <button type="submit" class="btn">Importer</button>
        </form>
        <h1 style="background-color:red">le test:';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uploadPath', $array3)]);

$output0 .= '</h1>
    </div>-->
    <!-- EXT:produktshow/Resources/Private/Templates/Produkt/import.html -->

    <h1>Importer les produits depuis un fichier CSV</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '<img src="/schommer/fileadmin/user_upload/pfeil.png" />return';
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$arguments4['action'] = NULL;
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = NULL;
$arguments4['noCache'] = NULL;
$arguments4['language'] = NULL;
$arguments4['section'] = NULL;
$arguments4['format'] = NULL;
$arguments4['linkAccessRestrictedPages'] = NULL;
$arguments4['additionalParams'] = NULL;
$arguments4['absolute'] = NULL;
$arguments4['addQueryString'] = NULL;
$arguments4['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['action'] = 'list';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['name'] = 'Default';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output6 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
    <!--<div class="container">
        <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['action'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = NULL;
$arguments12['language'] = NULL;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['linkAccessRestrictedPages'] = false;
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['addQueryStringMethod'] = NULL;
$arguments12['action'] = 'import';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '" method="post" enctype="multipart/form-data">
            <label for="csvFile">Sélectionner un fichier CSV :</label>
            <input type="file" id="csvFile" name="csvFile" accept=".csv">
            <button type="submit" class="btn">Importer</button>
        </form>
        <h1 style="background-color:red">le test:';
$array14 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uploadPath', $array14)]);

$output11 .= '</h1>
    </div>-->
    <!-- EXT:produktshow/Resources/Private/Templates/Produkt/import.html -->

    <h1>Importer les produits depuis un fichier CSV</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return '<img src="/schommer/fileadmin/user_upload/pfeil.png" />return';
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = NULL;
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = NULL;
$arguments15['noCache'] = NULL;
$arguments15['language'] = NULL;
$arguments15['section'] = NULL;
$arguments15['format'] = NULL;
$arguments15['linkAccessRestrictedPages'] = NULL;
$arguments15['additionalParams'] = NULL;
$arguments15['absolute'] = NULL;
$arguments15['addQueryString'] = NULL;
$arguments15['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['action'] = 'list';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output11 .= '

';
return $output11;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'content';

$output6 .= NULL;

$output6 .= '
';

return $output6;
}


}
#