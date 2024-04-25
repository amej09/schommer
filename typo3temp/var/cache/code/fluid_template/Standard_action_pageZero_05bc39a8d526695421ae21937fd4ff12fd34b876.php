<?php

class Standard_action_pageZero_05bc39a8d526695421ae21937fd4ff12fd34b876 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section PageZeroTableRow
 */
public function section_b1edc275d881f3156f547d1f0d6261281c53f832(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'maxCharacters';
$arguments1['value'] = 30;
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['then'] = 'inactive';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display: inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string8 = '{level * 20}';
$array9 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string8, $array9)]);

$output0 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['route'] = NULL;
$arguments105['parameters'] = array (
);
$arguments105['referenceType'] = 'absolute';
$arguments105['route'] = 'web_ts';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array108);
$arguments105['parameters'] = $array107;

$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output104 .= '"
                                title="ID: ';
$array109 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array109)]);

$output104 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['table'] = NULL;
$arguments110['row'] = NULL;
$arguments110['size'] = 'small';
$arguments110['alternativeMarkupIdentifier'] = NULL;
$arguments110['table'] = 'pages';
$array112 = array (
);$arguments110['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array112);

$output104 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output104 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array116 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array116)]);
};
$arguments113 = array();
$arguments113['maxCharacters'] = NULL;
$arguments113['append'] = '&hellip;';
$arguments113['respectWordBoundaries'] = true;
$arguments113['respectHtml'] = true;
$array115 = array (
);$arguments113['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array115);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output104 .= '
                            </a>
                        ';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                            <span title="ID: ';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array120)]);

$output119 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['table'] = NULL;
$arguments121['row'] = NULL;
$arguments121['size'] = 'small';
$arguments121['alternativeMarkupIdentifier'] = NULL;
$arguments121['table'] = 'pages';
$array123 = array (
);$arguments121['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array123);

$output119 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output119 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array127 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array127)]);
};
$arguments124 = array();
$arguments124['maxCharacters'] = NULL;
$arguments124['append'] = '&hellip;';
$arguments124['respectWordBoundaries'] = true;
$arguments124['respectHtml'] = true;
$array126 = array (
);$arguments124['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array126);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output119 .= '
                            </span>
                        ';
return $output119;
};
$arguments117 = array();
$arguments117['if'] = NULL;

$output101 .= '';

$output101 .= '
                    ';
return $output101;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['route'] = NULL;
$arguments77['parameters'] = array (
);
$arguments77['referenceType'] = 'absolute';
$arguments77['route'] = 'web_ts';
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array80);
$arguments77['parameters'] = $array79;

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output76 .= '"
                                title="ID: ';
$array81 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array81)]);

$output76 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['table'] = NULL;
$arguments82['row'] = NULL;
$arguments82['size'] = 'small';
$arguments82['alternativeMarkupIdentifier'] = NULL;
$arguments82['table'] = 'pages';
$array84 = array (
);$arguments82['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array84);

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output76 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array88)]);
};
$arguments85 = array();
$arguments85['maxCharacters'] = NULL;
$arguments85['append'] = '&hellip;';
$arguments85['respectWordBoundaries'] = true;
$arguments85['respectHtml'] = true;
$array87 = array (
);$arguments85['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array87);

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output76 .= '
                            </a>
                        ';
return $output76;
};
$arguments74['__elseClosures'][] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                            <span title="ID: ';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array90)]);

$output89 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['table'] = NULL;
$arguments91['row'] = NULL;
$arguments91['size'] = 'small';
$arguments91['alternativeMarkupIdentifier'] = NULL;
$arguments91['table'] = 'pages';
$array93 = array (
);$arguments91['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array93);

$output89 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output89 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array97)]);
};
$arguments94 = array();
$arguments94['maxCharacters'] = NULL;
$arguments94['append'] = '&hellip;';
$arguments94['respectWordBoundaries'] = true;
$arguments94['respectHtml'] = true;
$array96 = array (
);$arguments94['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array96);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output89 .= '
                            </span>
                        ';
return $output89;
};

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output70 .= '';

$output70 .= '
            ';
return $output70;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['route'] = NULL;
$arguments44['parameters'] = array (
);
$arguments44['referenceType'] = 'absolute';
$arguments44['route'] = 'web_ts';
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array47);
$arguments44['parameters'] = $array46;

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '"
                                title="ID: ';
$array48 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array48)]);

$output43 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['table'] = NULL;
$arguments49['row'] = NULL;
$arguments49['size'] = 'small';
$arguments49['alternativeMarkupIdentifier'] = NULL;
$arguments49['table'] = 'pages';
$array51 = array (
);$arguments49['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array51);

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output43 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array55 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array55)]);
};
$arguments52 = array();
$arguments52['maxCharacters'] = NULL;
$arguments52['append'] = '&hellip;';
$arguments52['respectWordBoundaries'] = true;
$arguments52['respectHtml'] = true;
$array54 = array (
);$arguments52['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array54);

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output43 .= '
                            </a>
                        ';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                            <span title="ID: ';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array59)]);

$output58 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['table'] = NULL;
$arguments60['row'] = NULL;
$arguments60['size'] = 'small';
$arguments60['alternativeMarkupIdentifier'] = NULL;
$arguments60['table'] = 'pages';
$array62 = array (
);$arguments60['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array62);

$output58 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output58 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$array66 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array66)]);
};
$arguments63 = array();
$arguments63['maxCharacters'] = NULL;
$arguments63['append'] = '&hellip;';
$arguments63['respectWordBoundaries'] = true;
$arguments63['respectHtml'] = true;
$array65 = array (
);$arguments63['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array65);

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
                            </span>
                        ';
return $output58;
};
$arguments56 = array();
$arguments56['if'] = NULL;

$output40 .= '';

$output40 .= '
                    ';
return $output40;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['route'] = NULL;
$arguments16['parameters'] = array (
);
$arguments16['referenceType'] = 'absolute';
$arguments16['route'] = 'web_ts';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array19);
$arguments16['parameters'] = $array18;

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '"
                                title="ID: ';
$array20 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array20)]);

$output15 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['table'] = NULL;
$arguments21['row'] = NULL;
$arguments21['size'] = 'small';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$arguments21['table'] = 'pages';
$array23 = array (
);$arguments21['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array23);

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output15 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array27 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array27)]);
};
$arguments24 = array();
$arguments24['maxCharacters'] = NULL;
$arguments24['append'] = '&hellip;';
$arguments24['respectWordBoundaries'] = true;
$arguments24['respectHtml'] = true;
$array26 = array (
);$arguments24['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array26);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output15 .= '
                            </a>
                        ';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                            <span title="ID: ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array29)]);

$output28 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['table'] = NULL;
$arguments30['row'] = NULL;
$arguments30['size'] = 'small';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['table'] = 'pages';
$array32 = array (
);$arguments30['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array32);

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output28 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array36 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array36)]);
};
$arguments33 = array();
$arguments33['maxCharacters'] = NULL;
$arguments33['append'] = '&hellip;';
$arguments33['respectWordBoundaries'] = true;
$arguments33['respectHtml'] = true;
$array35 = array (
);$arguments33['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array35);

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output28 .= '
                            </span>
                        ';
return $output28;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                ';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['value'] = NULL;
$arguments156['name'] = NULL;
$arguments156['name'] = 'web_ts_parameters';
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array159);
$array160 = array (
);$array158['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array160);
$arguments156['value'] = $array158;
$renderChildrenClosure157 = ($arguments156['value'] !== null) ? function() use ($arguments156) { return $arguments156['value']; } : $renderChildrenClosure157;
$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['route'] = NULL;
$arguments161['parameters'] = array (
);
$arguments161['referenceType'] = 'absolute';
$arguments161['route'] = 'web_ts';
$array163 = array (
);$arguments161['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array163);

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output155 .= '"
                        title="ID: ';
$array164 = array (
);
$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array164)]);

$output155 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['table'] = NULL;
$arguments165['row'] = NULL;
$arguments165['size'] = 'small';
$arguments165['alternativeMarkupIdentifier'] = NULL;
$arguments165['table'] = 'sys_template';
$array167 = array (
);$arguments165['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array167);

$output155 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output155 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$array171 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array171)]);
};
$arguments168 = array();
$arguments168['maxCharacters'] = NULL;
$arguments168['append'] = '&hellip;';
$arguments168['respectWordBoundaries'] = true;
$arguments168['respectHtml'] = true;
$array170 = array (
);$arguments168['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array170);

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output155 .= '
                    </a>
                ';
return $output155;
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments172 = array();
$arguments172['if'] = NULL;

$output152 .= '';

$output152 .= '
            ';
return $output152;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['value'] = NULL;
$arguments133['name'] = NULL;
$arguments133['name'] = 'web_ts_parameters';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array136);
$array137 = array (
);$array135['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array137);
$arguments133['value'] = $array135;
$renderChildrenClosure134 = ($arguments133['value'] !== null) ? function() use ($arguments133) { return $arguments133['value']; } : $renderChildrenClosure134;
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output132 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['route'] = NULL;
$arguments138['parameters'] = array (
);
$arguments138['referenceType'] = 'absolute';
$arguments138['route'] = 'web_ts';
$array140 = array (
);$arguments138['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array140);

$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output132 .= '"
                        title="ID: ';
$array141 = array (
);
$output132 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array141)]);

$output132 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['table'] = NULL;
$arguments142['row'] = NULL;
$arguments142['size'] = 'small';
$arguments142['alternativeMarkupIdentifier'] = NULL;
$arguments142['table'] = 'sys_template';
$array144 = array (
);$arguments142['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array144);

$output132 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output132 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$array148 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array148)]);
};
$arguments145 = array();
$arguments145['maxCharacters'] = NULL;
$arguments145['append'] = '&hellip;';
$arguments145['respectWordBoundaries'] = true;
$arguments145['respectHtml'] = true;
$array147 = array (
);$arguments145['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array147);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output132 .= '
                    </a>
                ';
return $output132;
};
$arguments130['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['identifier'] = NULL;
$arguments185['size'] = 'small';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$arguments185['identifier'] = 'status-status-checked';
$arguments180['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
            ';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array177);

$expression178 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output0 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array195['0'] = '!';
$array196 = array (
);$array195['1'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array196);

$expression197 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['identifier'] = NULL;
$arguments198['size'] = 'small';
$arguments198['overlay'] = NULL;
$arguments198['state'] = 'default';
$arguments198['alternativeMarkupIdentifier'] = NULL;
$arguments198['identifier'] = 'status-status-checked';
$arguments193['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
            ';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array190);

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output0 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['section'] = NULL;
$arguments224['partial'] = NULL;
$arguments224['delegate'] = NULL;
$arguments224['renderable'] = NULL;
$arguments224['arguments'] = array (
);
$arguments224['optional'] = false;
$arguments224['default'] = NULL;
$arguments224['contentAs'] = NULL;
$arguments224['debug'] = true;
$arguments224['section'] = 'PageZeroTableRow';
// Rendering Array
$array226 = array();
$array226['page'] = 0;
$array227 = array (
);$array226['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array227);
$array228 = array (
);$array226['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array228);
$arguments224['arguments'] = $array226;

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
                ';
return $output223;
};
$arguments218 = array();
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array221);
$array220['1'] = ' > 0';

$expression222 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments218['__thenClosure'] = $renderChildrenClosure219;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
            ';
return $output217;
};
$arguments214 = array();
$arguments214['each'] = NULL;
$arguments214['as'] = NULL;
$arguments214['key'] = NULL;
$arguments214['reverse'] = false;
$arguments214['iteration'] = NULL;
$array216 = array (
);$arguments214['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array216);
$arguments214['as'] = 'template';
$arguments214['iteration'] = 'i';

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
        ';
return $output213;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array211 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._templates', $array211);
};
$arguments209 = array();
$arguments209['subject'] = NULL;
$renderChildrenClosure210 = ($arguments209['subject'] !== null) ? function() use ($arguments209) { return $arguments209['subject']; } : $renderChildrenClosure210;$array208['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = $renderChildrenClosure207;

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['section'] = NULL;
$arguments241['partial'] = NULL;
$arguments241['delegate'] = NULL;
$arguments241['renderable'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['optional'] = false;
$arguments241['default'] = NULL;
$arguments241['contentAs'] = NULL;
$arguments241['debug'] = true;
$arguments241['section'] = 'PageZeroTableRow';
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array244);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string245 = '{level + 1}';
$array246 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array243['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string245, $array246);
$array247 = array (
);$array243['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array247);
$arguments241['arguments'] = $array243;

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
            ';
return $output240;
};
$arguments237 = array();
$arguments237['each'] = NULL;
$arguments237['as'] = NULL;
$arguments237['key'] = NULL;
$arguments237['reverse'] = false;
$arguments237['iteration'] = NULL;
$array239 = array (
);$arguments237['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array239);
$arguments237['as'] = 'page';

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
        ';
return $output236;
};
$arguments229 = array();
$arguments229['then'] = NULL;
$arguments229['else'] = NULL;
$arguments229['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$array234 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._nodes', $array234);
};
$arguments232 = array();
$arguments232['subject'] = NULL;
$renderChildrenClosure233 = ($arguments232['subject'] !== null) ? function() use ($arguments232) { return $arguments232['subject']; } : $renderChildrenClosure233;$array231['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$expression235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments229['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments229['__thenClosure'] = $renderChildrenClosure230;

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output205 .= '
    ';
return $output205;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = $renderChildrenClosure201;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output248 = '';

$output248 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['key'] = NULL;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$arguments249['languageKey'] = NULL;
$arguments249['alternativeLanguageKeys'] = NULL;
$arguments249['key'] = 'moduleTitle';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output248 .= '</h1>
<div>
    <p class="lead">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'overview';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output248 .= '</p>
    <div class="table-fit">
        <table class="table table-striped table-hover" id="ts-overview">
        <thead>
            <tr>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'pageName';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output248 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['key'] = NULL;
$arguments255['id'] = NULL;
$arguments255['default'] = NULL;
$arguments255['arguments'] = NULL;
$arguments255['extensionName'] = NULL;
$arguments255['languageKey'] = NULL;
$arguments255['alternativeLanguageKeys'] = NULL;
$arguments255['key'] = 'templates';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext)]);

$output248 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['key'] = NULL;
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['languageKey'] = NULL;
$arguments257['alternativeLanguageKeys'] = NULL;
$arguments257['key'] = 'isRoot';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output248 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'isExt';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output248 .= '</th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['section'] = NULL;
$arguments265['partial'] = NULL;
$arguments265['delegate'] = NULL;
$arguments265['renderable'] = NULL;
$arguments265['arguments'] = array (
);
$arguments265['optional'] = false;
$arguments265['default'] = NULL;
$arguments265['contentAs'] = NULL;
$arguments265['debug'] = true;
$arguments265['section'] = 'PageZeroTableRow';
// Rendering Array
$array267 = array();
$array268 = array (
);$array267['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array268);
$array267['level'] = 0;
$array269 = array (
);$array267['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array269);
$arguments265['arguments'] = $array267;

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
            ';
return $output264;
};
$arguments261 = array();
$arguments261['each'] = NULL;
$arguments261['as'] = NULL;
$arguments261['key'] = NULL;
$arguments261['reverse'] = false;
$arguments261['iteration'] = NULL;
$array263 = array (
);$arguments261['each'] = $renderingContext->getVariableProvider()->getByPath('pageTree', $array263);
$arguments261['as'] = 'page';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output248 .= '
        </tbody>
        </table>
    </div>
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['value'] = NULL;
$arguments273['name'] = NULL;
$arguments273['name'] = 'maxCharacters';
$arguments273['value'] = 30;
$renderChildrenClosure274 = ($arguments273['value'] !== null) ? function() use ($arguments273) { return $arguments273['value']; } : $renderChildrenClosure274;
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('page.hidden', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['then'] = 'inactive';

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output272 .= '">
        <td class="nowrap">
            <span style="width: 1px; height: 1px; display: inline-block; margin-left: ';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string280 = '{level * 20}';
$array281 = array (
  0 => '{level * 20}',
  1 => '{level * 20}',
);

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string280, $array281)]);

$output272 .= 'px"></span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['route'] = NULL;
$arguments377['parameters'] = array (
);
$arguments377['referenceType'] = 'absolute';
$arguments377['route'] = 'web_ts';
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array380);
$arguments377['parameters'] = $array379;

$output376 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext)]);

$output376 .= '"
                                title="ID: ';
$array381 = array (
);
$output376 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array381)]);

$output376 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['table'] = NULL;
$arguments382['row'] = NULL;
$arguments382['size'] = 'small';
$arguments382['alternativeMarkupIdentifier'] = NULL;
$arguments382['table'] = 'pages';
$array384 = array (
);$arguments382['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array384);

$output376 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output376 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$array388 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array388)]);
};
$arguments385 = array();
$arguments385['maxCharacters'] = NULL;
$arguments385['append'] = '&hellip;';
$arguments385['respectWordBoundaries'] = true;
$arguments385['respectHtml'] = true;
$array387 = array (
);$arguments385['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array387);

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output376 .= '
                            </a>
                        ';
return $output376;
};
$arguments374 = array();

$output373 .= '';

$output373 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
                            <span title="ID: ';
$array392 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array392)]);

$output391 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['table'] = NULL;
$arguments393['row'] = NULL;
$arguments393['size'] = 'small';
$arguments393['alternativeMarkupIdentifier'] = NULL;
$arguments393['table'] = 'pages';
$array395 = array (
);$arguments393['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array395);

$output391 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output391 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$array399 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array399)]);
};
$arguments396 = array();
$arguments396['maxCharacters'] = NULL;
$arguments396['append'] = '&hellip;';
$arguments396['respectWordBoundaries'] = true;
$arguments396['respectHtml'] = true;
$array398 = array (
);$arguments396['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array398);

$output391 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output391 .= '
                            </span>
                        ';
return $output391;
};
$arguments389 = array();
$arguments389['if'] = NULL;

$output373 .= '';

$output373 .= '
                    ';
return $output373;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array371);

$expression372 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression372(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array370)
					),
					$renderingContext
				);
$arguments346['__thenClosure'] = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['route'] = NULL;
$arguments349['parameters'] = array (
);
$arguments349['referenceType'] = 'absolute';
$arguments349['route'] = 'web_ts';
// Rendering Array
$array351 = array();
$array352 = array (
);$array351['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array352);
$arguments349['parameters'] = $array351;

$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output348 .= '"
                                title="ID: ';
$array353 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array353)]);

$output348 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments354 = array();
$arguments354['table'] = NULL;
$arguments354['row'] = NULL;
$arguments354['size'] = 'small';
$arguments354['alternativeMarkupIdentifier'] = NULL;
$arguments354['table'] = 'pages';
$array356 = array (
);$arguments354['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array356);

$output348 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output348 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$array360 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array360)]);
};
$arguments357 = array();
$arguments357['maxCharacters'] = NULL;
$arguments357['append'] = '&hellip;';
$arguments357['respectWordBoundaries'] = true;
$arguments357['respectHtml'] = true;
$array359 = array (
);$arguments357['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array359);

$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output348 .= '
                            </a>
                        ';
return $output348;
};
$arguments346['__elseClosures'][] = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                            <span title="ID: ';
$array362 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array362)]);

$output361 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['table'] = NULL;
$arguments363['row'] = NULL;
$arguments363['size'] = 'small';
$arguments363['alternativeMarkupIdentifier'] = NULL;
$arguments363['table'] = 'pages';
$array365 = array (
);$arguments363['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array365);

$output361 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output361 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$array369 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array369)]);
};
$arguments366 = array();
$arguments366['maxCharacters'] = NULL;
$arguments366['append'] = '&hellip;';
$arguments366['respectWordBoundaries'] = true;
$arguments366['respectHtml'] = true;
$array368 = array (
);$arguments366['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array368);

$output361 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output361 .= '
                            </span>
                        ';
return $output361;
};

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
                ';
return $output345;
};
$arguments343 = array();

$output342 .= '';

$output342 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments400 = array();
$arguments400['if'] = NULL;

$output342 .= '';

$output342 .= '
            ';
return $output342;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array340);

$expression341 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['route'] = NULL;
$arguments316['parameters'] = array (
);
$arguments316['referenceType'] = 'absolute';
$arguments316['route'] = 'web_ts';
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array319);
$arguments316['parameters'] = $array318;

$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output315 .= '"
                                title="ID: ';
$array320 = array (
);
$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array320)]);

$output315 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['table'] = NULL;
$arguments321['row'] = NULL;
$arguments321['size'] = 'small';
$arguments321['alternativeMarkupIdentifier'] = NULL;
$arguments321['table'] = 'pages';
$array323 = array (
);$arguments321['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array323);

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output315 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$array327 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array327)]);
};
$arguments324 = array();
$arguments324['maxCharacters'] = NULL;
$arguments324['append'] = '&hellip;';
$arguments324['respectWordBoundaries'] = true;
$arguments324['respectHtml'] = true;
$array326 = array (
);$arguments324['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array326);

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output315 .= '
                            </a>
                        ';
return $output315;
};
$arguments313 = array();

$output312 .= '';

$output312 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
                            <span title="ID: ';
$array331 = array (
);
$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array331)]);

$output330 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['table'] = NULL;
$arguments332['row'] = NULL;
$arguments332['size'] = 'small';
$arguments332['alternativeMarkupIdentifier'] = NULL;
$arguments332['table'] = 'pages';
$array334 = array (
);$arguments332['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array334);

$output330 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output330 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$array338 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array338)]);
};
$arguments335 = array();
$arguments335['maxCharacters'] = NULL;
$arguments335['append'] = '&hellip;';
$arguments335['respectWordBoundaries'] = true;
$arguments335['respectHtml'] = true;
$array337 = array (
);$arguments335['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array337);

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output330 .= '
                            </span>
                        ';
return $output330;
};
$arguments328 = array();
$arguments328['if'] = NULL;

$output312 .= '';

$output312 .= '
                    ';
return $output312;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array310);

$expression311 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['route'] = NULL;
$arguments288['parameters'] = array (
);
$arguments288['referenceType'] = 'absolute';
$arguments288['route'] = 'web_ts';
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['id'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array291);
$arguments288['parameters'] = $array290;

$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext)]);

$output287 .= '"
                                title="ID: ';
$array292 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array292)]);

$output287 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['table'] = NULL;
$arguments293['row'] = NULL;
$arguments293['size'] = 'small';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$arguments293['table'] = 'pages';
$array295 = array (
);$arguments293['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array295);

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output287 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$array299 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array299)]);
};
$arguments296 = array();
$arguments296['maxCharacters'] = NULL;
$arguments296['append'] = '&hellip;';
$arguments296['respectWordBoundaries'] = true;
$arguments296['respectHtml'] = true;
$array298 = array (
);$arguments296['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array298);

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output287 .= '
                            </a>
                        ';
return $output287;
};
$arguments285['__elseClosures'][] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                            <span title="ID: ';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array301)]);

$output300 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['table'] = NULL;
$arguments302['row'] = NULL;
$arguments302['size'] = 'small';
$arguments302['alternativeMarkupIdentifier'] = NULL;
$arguments302['table'] = 'pages';
$array304 = array (
);$arguments302['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array304);

$output300 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output300 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$array308 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array308)]);
};
$arguments305 = array();
$arguments305['maxCharacters'] = NULL;
$arguments305['append'] = '&hellip;';
$arguments305['respectWordBoundaries'] = true;
$arguments305['respectHtml'] = true;
$array307 = array (
);$arguments305['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array307);

$output300 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output300 .= '
                            </span>
                        ';
return $output300;
};

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
                ';
return $output284;
};
$arguments282['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output272 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['value'] = NULL;
$arguments428['name'] = NULL;
$arguments428['name'] = 'web_ts_parameters';
// Rendering Array
$array430 = array();
$array431 = array (
);$array430['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array431);
$array432 = array (
);$array430['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array432);
$arguments428['value'] = $array430;
$renderChildrenClosure429 = ($arguments428['value'] !== null) ? function() use ($arguments428) { return $arguments428['value']; } : $renderChildrenClosure429;
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output427 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['route'] = NULL;
$arguments433['parameters'] = array (
);
$arguments433['referenceType'] = 'absolute';
$arguments433['route'] = 'web_ts';
$array435 = array (
);$arguments433['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array435);

$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext)]);

$output427 .= '"
                        title="ID: ';
$array436 = array (
);
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array436)]);

$output427 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['table'] = NULL;
$arguments437['row'] = NULL;
$arguments437['size'] = 'small';
$arguments437['alternativeMarkupIdentifier'] = NULL;
$arguments437['table'] = 'sys_template';
$array439 = array (
);$arguments437['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array439);

$output427 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output427 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$array443 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array443)]);
};
$arguments440 = array();
$arguments440['maxCharacters'] = NULL;
$arguments440['append'] = '&hellip;';
$arguments440['respectWordBoundaries'] = true;
$arguments440['respectHtml'] = true;
$array442 = array (
);$arguments440['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array442);

$output427 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext);

$output427 .= '
                    </a>
                ';
return $output427;
};
$arguments425 = array();

$output424 .= '';

$output424 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};
$arguments444 = array();
$arguments444['if'] = NULL;

$output424 .= '';

$output424 .= '
            ';
return $output424;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array422);

$expression423 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);
$arguments402['__thenClosure'] = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['value'] = NULL;
$arguments405['name'] = NULL;
$arguments405['name'] = 'web_ts_parameters';
// Rendering Array
$array407 = array();
$array408 = array (
);$array407['id'] = $renderingContext->getVariableProvider()->getByPath('template.pid', $array408);
$array409 = array (
);$array407['SET[templatesOnPage]'] = $renderingContext->getVariableProvider()->getByPath('template.uid', $array409);
$arguments405['value'] = $array407;
$renderChildrenClosure406 = ($arguments405['value'] !== null) ? function() use ($arguments405) { return $arguments405['value']; } : $renderChildrenClosure406;
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext)]);

$output404 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['route'] = NULL;
$arguments410['parameters'] = array (
);
$arguments410['referenceType'] = 'absolute';
$arguments410['route'] = 'web_ts';
$array412 = array (
);$arguments410['parameters'] = $renderingContext->getVariableProvider()->getByPath('web_ts_parameters', $array412);

$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext)]);

$output404 .= '"
                        title="ID: ';
$array413 = array (
);
$output404 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid', $array413)]);

$output404 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['table'] = NULL;
$arguments414['row'] = NULL;
$arguments414['size'] = 'small';
$arguments414['alternativeMarkupIdentifier'] = NULL;
$arguments414['table'] = 'sys_template';
$array416 = array (
);$arguments414['row'] = $renderingContext->getVariableProvider()->getByPath('template', $array416);

$output404 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output404 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$array420 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title', $array420)]);
};
$arguments417 = array();
$arguments417['maxCharacters'] = NULL;
$arguments417['append'] = '&hellip;';
$arguments417['respectWordBoundaries'] = true;
$arguments417['respectHtml'] = true;
$array419 = array (
);$arguments417['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxCharacters', $array419);

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output404 .= '
                    </a>
                ';
return $output404;
};
$arguments402['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                    &nbsp;
                ';
};

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output272 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$arguments452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array454 = array();
$array455 = array (
);$array454['0'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array455);

$expression456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array454)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['identifier'] = NULL;
$arguments457['size'] = 'small';
$arguments457['overlay'] = NULL;
$arguments457['state'] = 'default';
$arguments457['alternativeMarkupIdentifier'] = NULL;
$arguments457['identifier'] = 'status-status-checked';
$arguments452['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '
            ';
return $output451;
};
$arguments446 = array();
$arguments446['then'] = NULL;
$arguments446['else'] = NULL;
$arguments446['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments446['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments446['__thenClosure'] = $renderChildrenClosure447;

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output272 .= '
        </td>
        <td>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array467 = array();
$array467['0'] = '!';
$array468 = array (
);$array467['1'] = $renderingContext->getVariableProvider()->getByPath('template.root', $array468);

$expression469 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array467)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['identifier'] = NULL;
$arguments470['size'] = 'small';
$arguments470['overlay'] = NULL;
$arguments470['state'] = 'default';
$arguments470['alternativeMarkupIdentifier'] = NULL;
$arguments470['identifier'] = 'status-status-checked';
$arguments465['then'] = TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output464 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output464 .= '
            ';
return $output464;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array461 = array();
$array462 = array (
);$array461['0'] = $renderingContext->getVariableProvider()->getByPath('template', $array462);

$expression463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array461)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = $renderChildrenClosure460;

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output272 .= '
        </td>
    </tr>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
        <!-- Additional templates -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output495 = '';

$output495 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['section'] = NULL;
$arguments496['partial'] = NULL;
$arguments496['delegate'] = NULL;
$arguments496['renderable'] = NULL;
$arguments496['arguments'] = array (
);
$arguments496['optional'] = false;
$arguments496['default'] = NULL;
$arguments496['contentAs'] = NULL;
$arguments496['debug'] = true;
$arguments496['section'] = 'PageZeroTableRow';
// Rendering Array
$array498 = array();
$array498['page'] = 0;
$array499 = array (
);$array498['level'] = $renderingContext->getVariableProvider()->getByPath('level', $array499);
$array500 = array (
);$array498['template'] = $renderingContext->getVariableProvider()->getByPath('template', $array500);
$arguments496['arguments'] = $array498;

$output495 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output495 .= '
                ';
return $output495;
};
$arguments490 = array();
$arguments490['then'] = NULL;
$arguments490['else'] = NULL;
$arguments490['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['0'] = $renderingContext->getVariableProvider()->getByPath('i.index', $array493);
$array492['1'] = ' > 0';

$expression494 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments490['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression494(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array492)
					),
					$renderingContext
				);
$arguments490['__thenClosure'] = $renderChildrenClosure491;

$output489 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
            ';
return $output489;
};
$arguments486 = array();
$arguments486['each'] = NULL;
$arguments486['as'] = NULL;
$arguments486['key'] = NULL;
$arguments486['reverse'] = false;
$arguments486['iteration'] = NULL;
$array488 = array (
);$arguments486['each'] = $renderingContext->getVariableProvider()->getByPath('page._templates', $array488);
$arguments486['as'] = 'template';
$arguments486['iteration'] = 'i';

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output485 .= '
        ';
return $output485;
};
$arguments478 = array();
$arguments478['then'] = NULL;
$arguments478['else'] = NULL;
$arguments478['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$array483 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._templates', $array483);
};
$arguments481 = array();
$arguments481['subject'] = NULL;
$renderChildrenClosure482 = ($arguments481['subject'] !== null) ? function() use ($arguments481) { return $arguments481['subject']; } : $renderChildrenClosure482;$array480['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$expression484 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments478['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression484(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments478['__thenClosure'] = $renderChildrenClosure479;

$output477 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
        <!-- Subpages -->
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['section'] = NULL;
$arguments513['partial'] = NULL;
$arguments513['delegate'] = NULL;
$arguments513['renderable'] = NULL;
$arguments513['arguments'] = array (
);
$arguments513['optional'] = false;
$arguments513['default'] = NULL;
$arguments513['contentAs'] = NULL;
$arguments513['debug'] = true;
$arguments513['section'] = 'PageZeroTableRow';
// Rendering Array
$array515 = array();
$array516 = array (
);$array515['page'] = $renderingContext->getVariableProvider()->getByPath('page', $array516);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string517 = '{level + 1}';
$array518 = array (
  0 => '{level + 1}',
  1 => '{level + 1}',
);
$array515['level'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string517, $array518);
$array519 = array (
);$array515['template'] = $renderingContext->getVariableProvider()->getByPath('page._templates.0', $array519);
$arguments513['arguments'] = $array515;

$output512 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
            ';
return $output512;
};
$arguments509 = array();
$arguments509['each'] = NULL;
$arguments509['as'] = NULL;
$arguments509['key'] = NULL;
$arguments509['reverse'] = false;
$arguments509['iteration'] = NULL;
$array511 = array (
);$arguments509['each'] = $renderingContext->getVariableProvider()->getByPath('page._nodes', $array511);
$arguments509['as'] = 'page';

$output508 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output508 .= '
        ';
return $output508;
};
$arguments501 = array();
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$arguments501['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array503 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$array506 = array (
);return $renderingContext->getVariableProvider()->getByPath('page._nodes', $array506);
};
$arguments504 = array();
$arguments504['subject'] = NULL;
$renderChildrenClosure505 = ($arguments504['subject'] !== null) ? function() use ($arguments504) { return $arguments504['subject']; } : $renderChildrenClosure505;$array503['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$expression507 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments501['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array503)
					),
					$renderingContext
				);
$arguments501['__thenClosure'] = $renderChildrenClosure502;

$output477 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output477 .= '
    ';
return $output477;
};
$arguments472 = array();
$arguments472['then'] = NULL;
$arguments472['else'] = NULL;
$arguments472['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array475);

$expression476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments472['__thenClosure'] = $renderChildrenClosure473;

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output272 .= '
';
return $output272;
};
$arguments270 = array();
$arguments270['name'] = NULL;
$arguments270['name'] = 'PageZeroTableRow';

$output248 .= NULL;

$output248 .= '

';

return $output248;
}


}
#