<?php

class partial_PageLayout_RecordDefault_Header_3579e4266d8774df3a6107250451de81642aad3a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="t3-page-ce-header row m-0 g-0 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('item.dragAndDropAllowed', $array5);

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = 't3-page-ce-header-draggable t3js-page-ce-draghandle';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '">
    <div class="col t3-page-ce-header-icons-left">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.icons', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
            <span class="t3js-flag" title="';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.siteLanguage.title', $array16)]);

$output15 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['identifier'] = NULL;
$arguments17['size'] = 'small';
$arguments17['overlay'] = NULL;
$arguments17['state'] = 'default';
$arguments17['alternativeMarkupIdentifier'] = NULL;
$array19 = array (
);$arguments17['identifier'] = $renderingContext->getVariableProvider()->getByPath('item.siteLanguage.flagIdentifier', $array19);

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output15 .= '
            </span>
        ';
return $output15;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('item.siteLanguage.flagIdentifier', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
    </div>
    <div class="col-auto align-self-end t3-page-ce-header-icons-right">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
            <div class="btn-toolbar">
                <div class="btn-group btn-group-sm">
                    <a href="';
$array27 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.editUrl', $array27)]);

$output26 .= '" class="btn btn-default" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output26 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'actions-open';

$output26 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                        <a class="btn btn-default" href="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleUrl', $array38)]);

$output37 .= '" title="';
$array39 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleTitle', $array39)]);

$output37 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['identifier'] = NULL;
$arguments40['size'] = 'small';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$output42 = '';

$output42 .= 'actions-edit-';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('item.visibilityToggleIconName', $array43);
$arguments40['identifier'] = $output42;

$output37 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output37 .= '
                        </a>
                    ';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('item.visibilityToggling', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output26 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                        <a class="btn btn-default t3js-modal-trigger" href="';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteUrl', $array50)]);

$output49 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output49 .= '"
                        data-bs-content="';
$array53 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteMessage', $array53)]);

$output49 .= '"
                        data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output49 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output49 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:deleteItem';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output49 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['identifier'] = NULL;
$arguments60['size'] = 'small';
$arguments60['overlay'] = NULL;
$arguments60['state'] = 'default';
$arguments60['alternativeMarkupIdentifier'] = NULL;
$arguments60['identifier'] = 'actions-edit-delete';
$arguments60['size'] = 'small';

$output49 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output49 .= '
                        </a>
                    ';
return $output49;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('item.delible', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output26 .= '
                </div>
            </div>
        ';
return $output26;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('item.editable', $array23);
$array22['1'] = ' && ';
$array24 = array (
);$array22['2'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array24);

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
    </div>
</div>
';

return $output0;
}


}
#