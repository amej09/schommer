<?php

class partial_Layouts_Assets_f0b9e8be6630e695a7da01804765b1e8c01e0f03 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return ' Hover Effect ';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['as'] = NULL;
$arguments10['crossorigin'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['href'] = NULL;
$arguments10['hreflang'] = NULL;
$arguments10['importance'] = NULL;
$arguments10['integrity'] = NULL;
$arguments10['media'] = NULL;
$arguments10['referrerpolicy'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['sizes'] = NULL;
$arguments10['type'] = NULL;
$arguments10['nonce'] = NULL;
$arguments10['identifier'] = NULL;
$arguments10['priority'] = false;
$arguments10['identifier'] = 'linkHoverEffect';
$arguments10['href'] = 'EXT:t3sbootstrap/Resources/Public/Styles/hoverEffects.css';

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
';
return $output9;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('hoverEffect', $array6);
$array5['1'] = ' && ';
$array7 = array (
);$array5['2'] = $renderingContext->getVariableProvider()->getByPath('settings.linkHoverEffect', $array7);

$expression8 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return ' Codesnippet ';
};
$arguments12 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['aria'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['as'] = NULL;
$arguments58['crossorigin'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['href'] = NULL;
$arguments58['hreflang'] = NULL;
$arguments58['importance'] = NULL;
$arguments58['integrity'] = NULL;
$arguments58['media'] = NULL;
$arguments58['referrerpolicy'] = NULL;
$arguments58['rel'] = NULL;
$arguments58['sizes'] = NULL;
$arguments58['type'] = NULL;
$arguments58['nonce'] = NULL;
$arguments58['identifier'] = NULL;
$arguments58['priority'] = false;
$arguments58['identifier'] = 'codesnippetCssPrimary';
$output60 = '';

$output60 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array61);

$output60 .= '/styles/default.min.css';
$arguments58['href'] = $output60;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['aria'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['as'] = NULL;
$arguments62['crossorigin'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['href'] = NULL;
$arguments62['hreflang'] = NULL;
$arguments62['importance'] = NULL;
$arguments62['integrity'] = NULL;
$arguments62['media'] = NULL;
$arguments62['referrerpolicy'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['sizes'] = NULL;
$arguments62['type'] = NULL;
$arguments62['nonce'] = NULL;
$arguments62['identifier'] = NULL;
$arguments62['priority'] = false;
$arguments62['identifier'] = 'codesnippetCssSecondary';
$output64 = '';

$output64 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array65);

$output64 .= '/styles/a11y-light.min.css';
$arguments62['href'] = $output64;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output57 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['aria'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['async'] = NULL;
$arguments66['crossorigin'] = NULL;
$arguments66['defer'] = NULL;
$arguments66['integrity'] = NULL;
$arguments66['nomodule'] = NULL;
$arguments66['nonce'] = NULL;
$arguments66['referrerpolicy'] = NULL;
$arguments66['src'] = NULL;
$arguments66['type'] = NULL;
$arguments66['identifier'] = NULL;
$arguments66['priority'] = false;
$arguments66['identifier'] = 'codesnippetJsPrimary';
$output68 = '';

$output68 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array69);

$output68 .= '/highlight.min.js';
$arguments66['src'] = $output68;
$array70 = array (
);$arguments66['integrity'] = $renderingContext->getVariableProvider()->getByPath('settings.highlightIntegrity', $array70);

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output57 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['aria'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['async'] = NULL;
$arguments71['crossorigin'] = NULL;
$arguments71['defer'] = NULL;
$arguments71['integrity'] = NULL;
$arguments71['nomodule'] = NULL;
$arguments71['nonce'] = NULL;
$arguments71['referrerpolicy'] = NULL;
$arguments71['src'] = NULL;
$arguments71['type'] = NULL;
$arguments71['identifier'] = NULL;
$arguments71['priority'] = false;
$arguments71['identifier'] = 'codesnippetJsSecondary';
$output73 = '';

$output73 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array74 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array74);

$output73 .= '/languages/php.min.js';
$arguments71['src'] = $output73;
$array75 = array (
);$arguments71['integrity'] = $renderingContext->getVariableProvider()->getByPath('settings.highlightIntegrity', $array75);

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output57 .= '
		';
return $output57;
};
$arguments55 = array();

$output54 .= '';

$output54 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['aria'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['as'] = NULL;
$arguments79['crossorigin'] = NULL;
$arguments79['disabled'] = NULL;
$arguments79['href'] = NULL;
$arguments79['hreflang'] = NULL;
$arguments79['importance'] = NULL;
$arguments79['integrity'] = NULL;
$arguments79['media'] = NULL;
$arguments79['referrerpolicy'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['sizes'] = NULL;
$arguments79['type'] = NULL;
$arguments79['nonce'] = NULL;
$arguments79['identifier'] = NULL;
$arguments79['priority'] = false;
$arguments79['identifier'] = 'codesnippetCssPrimary';
$arguments79['href'] = 'fileadmin/T3SB/Resources/Public/CSS/highlight.default.min.css';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['aria'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['as'] = NULL;
$arguments81['crossorigin'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['href'] = NULL;
$arguments81['hreflang'] = NULL;
$arguments81['importance'] = NULL;
$arguments81['integrity'] = NULL;
$arguments81['media'] = NULL;
$arguments81['referrerpolicy'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['sizes'] = NULL;
$arguments81['type'] = NULL;
$arguments81['nonce'] = NULL;
$arguments81['identifier'] = NULL;
$arguments81['priority'] = false;
$arguments81['identifier'] = 'codesnippetCssSecondary';
$arguments81['href'] = 'fileadmin/T3SB/Resources/Public/CSS/highlight.a11y-light.min.css';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output78 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['aria'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['async'] = NULL;
$arguments83['crossorigin'] = NULL;
$arguments83['defer'] = NULL;
$arguments83['integrity'] = NULL;
$arguments83['nomodule'] = NULL;
$arguments83['nonce'] = NULL;
$arguments83['referrerpolicy'] = NULL;
$arguments83['src'] = NULL;
$arguments83['type'] = NULL;
$arguments83['identifier'] = NULL;
$arguments83['priority'] = false;
$arguments83['identifier'] = 'codesnippetJsPrimary';
$arguments83['src'] = 'fileadmin/T3SB/Resources/Public/JS/highlight.min.js';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output78 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['aria'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['async'] = NULL;
$arguments85['crossorigin'] = NULL;
$arguments85['defer'] = NULL;
$arguments85['integrity'] = NULL;
$arguments85['nomodule'] = NULL;
$arguments85['nonce'] = NULL;
$arguments85['referrerpolicy'] = NULL;
$arguments85['src'] = NULL;
$arguments85['type'] = NULL;
$arguments85['identifier'] = NULL;
$arguments85['priority'] = false;
$arguments85['identifier'] = 'codesnippetJsSecondary';
$arguments85['src'] = 'fileadmin/T3SB/Resources/Public/JS/highlight.php.min.js';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output78 .= '
		';
return $output78;
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output54 .= '';

$output54 .= '
	';
return $output54;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cdn', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['aria'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['as'] = NULL;
$arguments24['crossorigin'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['href'] = NULL;
$arguments24['hreflang'] = NULL;
$arguments24['importance'] = NULL;
$arguments24['integrity'] = NULL;
$arguments24['media'] = NULL;
$arguments24['referrerpolicy'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['sizes'] = NULL;
$arguments24['type'] = NULL;
$arguments24['nonce'] = NULL;
$arguments24['identifier'] = NULL;
$arguments24['priority'] = false;
$arguments24['identifier'] = 'codesnippetCssPrimary';
$output26 = '';

$output26 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array27);

$output26 .= '/styles/default.min.css';
$arguments24['href'] = $output26;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['as'] = NULL;
$arguments28['crossorigin'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['href'] = NULL;
$arguments28['hreflang'] = NULL;
$arguments28['importance'] = NULL;
$arguments28['integrity'] = NULL;
$arguments28['media'] = NULL;
$arguments28['referrerpolicy'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['sizes'] = NULL;
$arguments28['type'] = NULL;
$arguments28['nonce'] = NULL;
$arguments28['identifier'] = NULL;
$arguments28['priority'] = false;
$arguments28['identifier'] = 'codesnippetCssSecondary';
$output30 = '';

$output30 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array31);

$output30 .= '/styles/a11y-light.min.css';
$arguments28['href'] = $output30;

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['aria'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['async'] = NULL;
$arguments32['crossorigin'] = NULL;
$arguments32['defer'] = NULL;
$arguments32['integrity'] = NULL;
$arguments32['nomodule'] = NULL;
$arguments32['nonce'] = NULL;
$arguments32['referrerpolicy'] = NULL;
$arguments32['src'] = NULL;
$arguments32['type'] = NULL;
$arguments32['identifier'] = NULL;
$arguments32['priority'] = false;
$arguments32['identifier'] = 'codesnippetJsPrimary';
$output34 = '';

$output34 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array35 = array (
);
$output34 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array35);

$output34 .= '/highlight.min.js';
$arguments32['src'] = $output34;
$array36 = array (
);$arguments32['integrity'] = $renderingContext->getVariableProvider()->getByPath('settings.highlightIntegrity', $array36);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['async'] = NULL;
$arguments37['crossorigin'] = NULL;
$arguments37['defer'] = NULL;
$arguments37['integrity'] = NULL;
$arguments37['nomodule'] = NULL;
$arguments37['nonce'] = NULL;
$arguments37['referrerpolicy'] = NULL;
$arguments37['src'] = NULL;
$arguments37['type'] = NULL;
$arguments37['identifier'] = NULL;
$arguments37['priority'] = false;
$arguments37['identifier'] = 'codesnippetJsSecondary';
$output39 = '';

$output39 .= 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/';
$array40 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('settings.highlightVersion', $array40);

$output39 .= '/languages/php.min.js';
$arguments37['src'] = $output39;
$array41 = array (
);$arguments37['integrity'] = $renderingContext->getVariableProvider()->getByPath('settings.highlightIntegrity', $array41);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output23 .= '
		';
return $output23;
};
$arguments21['__elseClosures'][] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['aria'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['as'] = NULL;
$arguments43['crossorigin'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['href'] = NULL;
$arguments43['hreflang'] = NULL;
$arguments43['importance'] = NULL;
$arguments43['integrity'] = NULL;
$arguments43['media'] = NULL;
$arguments43['referrerpolicy'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['sizes'] = NULL;
$arguments43['type'] = NULL;
$arguments43['nonce'] = NULL;
$arguments43['identifier'] = NULL;
$arguments43['priority'] = false;
$arguments43['identifier'] = 'codesnippetCssPrimary';
$arguments43['href'] = 'fileadmin/T3SB/Resources/Public/CSS/highlight.default.min.css';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['as'] = NULL;
$arguments45['crossorigin'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['href'] = NULL;
$arguments45['hreflang'] = NULL;
$arguments45['importance'] = NULL;
$arguments45['integrity'] = NULL;
$arguments45['media'] = NULL;
$arguments45['referrerpolicy'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['sizes'] = NULL;
$arguments45['type'] = NULL;
$arguments45['nonce'] = NULL;
$arguments45['identifier'] = NULL;
$arguments45['priority'] = false;
$arguments45['identifier'] = 'codesnippetCssSecondary';
$arguments45['href'] = 'fileadmin/T3SB/Resources/Public/CSS/highlight.a11y-light.min.css';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['aria'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['async'] = NULL;
$arguments47['crossorigin'] = NULL;
$arguments47['defer'] = NULL;
$arguments47['integrity'] = NULL;
$arguments47['nomodule'] = NULL;
$arguments47['nonce'] = NULL;
$arguments47['referrerpolicy'] = NULL;
$arguments47['src'] = NULL;
$arguments47['type'] = NULL;
$arguments47['identifier'] = NULL;
$arguments47['priority'] = false;
$arguments47['identifier'] = 'codesnippetJsPrimary';
$arguments47['src'] = 'fileadmin/T3SB/Resources/Public/JS/highlight.min.js';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['aria'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['async'] = NULL;
$arguments49['crossorigin'] = NULL;
$arguments49['defer'] = NULL;
$arguments49['integrity'] = NULL;
$arguments49['nomodule'] = NULL;
$arguments49['nonce'] = NULL;
$arguments49['referrerpolicy'] = NULL;
$arguments49['src'] = NULL;
$arguments49['type'] = NULL;
$arguments49['identifier'] = NULL;
$arguments49['priority'] = false;
$arguments49['identifier'] = 'codesnippetJsSecondary';
$arguments49['src'] = 'fileadmin/T3SB/Resources/Public/JS/highlight.php.min.js';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output42 .= '
		';
return $output42;
};

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return '
	// Highlighting for codesnippet - Partials/Layouts/Assets.html
	hljs.highlightAll();
	';
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['aria'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['async'] = NULL;
$arguments87['crossorigin'] = NULL;
$arguments87['defer'] = NULL;
$arguments87['integrity'] = NULL;
$arguments87['nomodule'] = NULL;
$arguments87['nonce'] = NULL;
$arguments87['referrerpolicy'] = NULL;
$arguments87['src'] = NULL;
$arguments87['type'] = NULL;
$arguments87['identifier'] = NULL;
$arguments87['priority'] = false;
$arguments87['identifier'] = 'vanilla_codesnippetJsInline';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output20 .= '
';
return $output20;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('codesnippet', $array17);
$array16['1'] = ' && ';
$array18 = array (
);$array16['2'] = $renderingContext->getVariableProvider()->getByPath('settings.codesnippet', $array18);

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return ' AnimateCss ';
};
$arguments89 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['aria'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['as'] = NULL;
$arguments115['crossorigin'] = NULL;
$arguments115['disabled'] = NULL;
$arguments115['href'] = NULL;
$arguments115['hreflang'] = NULL;
$arguments115['importance'] = NULL;
$arguments115['integrity'] = NULL;
$arguments115['media'] = NULL;
$arguments115['referrerpolicy'] = NULL;
$arguments115['rel'] = NULL;
$arguments115['sizes'] = NULL;
$arguments115['type'] = NULL;
$arguments115['nonce'] = NULL;
$arguments115['identifier'] = NULL;
$arguments115['priority'] = false;
$arguments115['identifier'] = 'animateCss';
$output117 = '';

$output117 .= 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/';
$array118 = array (
);
$output117 .= $renderingContext->getVariableProvider()->getByPath('settings.animateVersion', $array118);

$output117 .= '/animate.compat.css';
$arguments115['href'] = $output117;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
		';
return $output114;
};
$arguments112 = array();

$output111 .= '';

$output111 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['aria'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['as'] = NULL;
$arguments122['crossorigin'] = NULL;
$arguments122['disabled'] = NULL;
$arguments122['href'] = NULL;
$arguments122['hreflang'] = NULL;
$arguments122['importance'] = NULL;
$arguments122['integrity'] = NULL;
$arguments122['media'] = NULL;
$arguments122['referrerpolicy'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['sizes'] = NULL;
$arguments122['type'] = NULL;
$arguments122['nonce'] = NULL;
$arguments122['identifier'] = NULL;
$arguments122['priority'] = false;
$arguments122['identifier'] = 'animateCss';
$arguments122['href'] = 'fileadmin/T3SB/Resources/Public/CSS/animate.compat.css';

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
		';
return $output121;
};
$arguments119 = array();
$arguments119['if'] = NULL;

$output111 .= '';

$output111 .= '
	';
return $output111;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cdn', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['aria'] = NULL;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['as'] = NULL;
$arguments101['crossorigin'] = NULL;
$arguments101['disabled'] = NULL;
$arguments101['href'] = NULL;
$arguments101['hreflang'] = NULL;
$arguments101['importance'] = NULL;
$arguments101['integrity'] = NULL;
$arguments101['media'] = NULL;
$arguments101['referrerpolicy'] = NULL;
$arguments101['rel'] = NULL;
$arguments101['sizes'] = NULL;
$arguments101['type'] = NULL;
$arguments101['nonce'] = NULL;
$arguments101['identifier'] = NULL;
$arguments101['priority'] = false;
$arguments101['identifier'] = 'animateCss';
$output103 = '';

$output103 .= 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/';
$array104 = array (
);
$output103 .= $renderingContext->getVariableProvider()->getByPath('settings.animateVersion', $array104);

$output103 .= '/animate.compat.css';
$arguments101['href'] = $output103;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
		';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['aria'] = NULL;
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['as'] = NULL;
$arguments106['crossorigin'] = NULL;
$arguments106['disabled'] = NULL;
$arguments106['href'] = NULL;
$arguments106['hreflang'] = NULL;
$arguments106['importance'] = NULL;
$arguments106['integrity'] = NULL;
$arguments106['media'] = NULL;
$arguments106['referrerpolicy'] = NULL;
$arguments106['rel'] = NULL;
$arguments106['sizes'] = NULL;
$arguments106['type'] = NULL;
$arguments106['nonce'] = NULL;
$arguments106['identifier'] = NULL;
$arguments106['priority'] = false;
$arguments106['identifier'] = 'animateCss';
$arguments106['href'] = 'fileadmin/T3SB/Resources/Public/CSS/animate.compat.css';

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
		';
return $output105;
};

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return '
// AnimateCss - Layouts/Assets.html
function isScrolledIntoView(el) {
	// check for 5% visible
	var percentVisible = 0.05;
	var elemTop = el.getBoundingClientRect().top;
	var elemBottom = el.getBoundingClientRect().bottom;
	var elemHeight = el.getBoundingClientRect().height;
	var overhang = elemHeight * (1 - percentVisible);
	var isVisible = (elemTop >= -overhang) && (elemBottom <= window.innerHeight + overhang);
	return isVisible;
}

function t3sbCssAnimate(ael, dataAnimate, animateRepeat) {
	// used w/ button or buttonGroup ???
	if (ael.nodeName == \'HEADER\') {
//		ael = ael.nextSibling;
	}
	if (isScrolledIntoView(ael)) {
		ael.classList.add(\'bt_visible\', dataAnimate);
		ael.classList.remove(\'bt_hidden\');
	} else {
		if (animateRepeat) {
			ael.classList.remove(\'bt_visible\', dataAnimate);
			ael.classList.add(\'bt_hidden\');
		}
	}
	window.addEventListener(\'scroll\', function() {
		if (isScrolledIntoView(ael)) {
			ael.classList.add(\'bt_visible\', dataAnimate);
			ael.classList.remove(\'bt_hidden\');
		} else {
			if (animateRepeat) {
				ael.classList.remove(\'bt_visible\', dataAnimate);
				ael.classList.add(\'bt_hidden\');
			}
		}
	});
}
		';
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['aria'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['async'] = NULL;
$arguments130['crossorigin'] = NULL;
$arguments130['defer'] = NULL;
$arguments130['integrity'] = NULL;
$arguments130['nomodule'] = NULL;
$arguments130['nonce'] = NULL;
$arguments130['referrerpolicy'] = NULL;
$arguments130['src'] = NULL;
$arguments130['type'] = NULL;
$arguments130['identifier'] = NULL;
$arguments130['priority'] = false;
$arguments130['identifier'] = 't3sbCssAnimate_function';

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
	// AnimateCss-';
$array166 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array166);

$output165 .= ' - Partials/Layouts/Assets.html
	var animatedElement = document.getElementById(\'c';
$array167 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array167);

$output165 .= '\'),
		animateRepeat = \'';
$array168 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('animateCssRepeat', $array168);

$output165 .= '\',
		dataAnimate = \'';
$array169 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('dataAnimate', $array169);

$output165 .= '\',
		child = animatedElement.firstChild;
	if ( animatedElement.nodeType == 1 && animatedElement.classList.contains(\'animated\') ) {
		t3sbCssAnimate(animatedElement, dataAnimate, animateRepeat);
	} else {
		if ( child.nodeType == 1 && child.classList.contains(\'animated\') ) {
			t3sbCssAnimate(child, dataAnimate, animateRepeat);
		} else {
			if (child.nodeName == \'HEADER\') {
				t3sbCssAnimate(child.nextSibling, dataAnimate, animateRepeat);
			}
		}
	}
				';
return $output165;
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['aria'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['async'] = NULL;
$arguments161['crossorigin'] = NULL;
$arguments161['defer'] = NULL;
$arguments161['integrity'] = NULL;
$arguments161['nomodule'] = NULL;
$arguments161['nonce'] = NULL;
$arguments161['referrerpolicy'] = NULL;
$arguments161['src'] = NULL;
$arguments161['type'] = NULL;
$arguments161['identifier'] = NULL;
$arguments161['priority'] = false;
$output163 = '';

$output163 .= 'vanilla_animatecssJsInline-';
$array164 = array (
);
$output163 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array164);
$arguments161['identifier'] = $output163;

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
			';
return $output160;
};
$arguments158 = array();

$output157 .= '';

$output157 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
	// AnimateCss-';
$array178 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array178);

$output177 .= ' - Partials/Layouts/Assets.html
	var animatedElement = document.getElementById(\'c';
$array179 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array179);

$output177 .= '\'),
		animateRepeat = \'';
$array180 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('animateCssRepeat', $array180);

$output177 .= '\',
		dataAnimate = \'';
$array181 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('dataAnimate', $array181);

$output177 .= '\';
	if (animatedElement) {
		t3sbCssAnimate(animatedElement, dataAnimate, animateRepeat);
	}
				';
return $output177;
};
$arguments173 = array();
$arguments173['additionalAttributes'] = NULL;
$arguments173['data'] = NULL;
$arguments173['aria'] = NULL;
$arguments173['class'] = NULL;
$arguments173['dir'] = NULL;
$arguments173['id'] = NULL;
$arguments173['lang'] = NULL;
$arguments173['style'] = NULL;
$arguments173['title'] = NULL;
$arguments173['accesskey'] = NULL;
$arguments173['tabindex'] = NULL;
$arguments173['onclick'] = NULL;
$arguments173['async'] = NULL;
$arguments173['crossorigin'] = NULL;
$arguments173['defer'] = NULL;
$arguments173['integrity'] = NULL;
$arguments173['nomodule'] = NULL;
$arguments173['nonce'] = NULL;
$arguments173['referrerpolicy'] = NULL;
$arguments173['src'] = NULL;
$arguments173['type'] = NULL;
$arguments173['identifier'] = NULL;
$arguments173['priority'] = false;
$output175 = '';

$output175 .= 'vanilla_animatecssJsInline-';
$array176 = array (
);
$output175 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array176);
$arguments173['identifier'] = $output175;

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
			';
return $output172;
};
$arguments170 = array();
$arguments170['if'] = NULL;

$output157 .= '';

$output157 .= '
		';
return $output157;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('isTxContainer', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
	// AnimateCss-';
$array140 = array (
);
$output139 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array140);

$output139 .= ' - Partials/Layouts/Assets.html
	var animatedElement = document.getElementById(\'c';
$array141 = array (
);
$output139 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array141);

$output139 .= '\'),
		animateRepeat = \'';
$array142 = array (
);
$output139 .= $renderingContext->getVariableProvider()->getByPath('animateCssRepeat', $array142);

$output139 .= '\',
		dataAnimate = \'';
$array143 = array (
);
$output139 .= $renderingContext->getVariableProvider()->getByPath('dataAnimate', $array143);

$output139 .= '\',
		child = animatedElement.firstChild;
	if ( animatedElement.nodeType == 1 && animatedElement.classList.contains(\'animated\') ) {
		t3sbCssAnimate(animatedElement, dataAnimate, animateRepeat);
	} else {
		if ( child.nodeType == 1 && child.classList.contains(\'animated\') ) {
			t3sbCssAnimate(child, dataAnimate, animateRepeat);
		} else {
			if (child.nodeName == \'HEADER\') {
				t3sbCssAnimate(child.nextSibling, dataAnimate, animateRepeat);
			}
		}
	}
				';
return $output139;
};
$arguments135 = array();
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['aria'] = NULL;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['async'] = NULL;
$arguments135['crossorigin'] = NULL;
$arguments135['defer'] = NULL;
$arguments135['integrity'] = NULL;
$arguments135['nomodule'] = NULL;
$arguments135['nonce'] = NULL;
$arguments135['referrerpolicy'] = NULL;
$arguments135['src'] = NULL;
$arguments135['type'] = NULL;
$arguments135['identifier'] = NULL;
$arguments135['priority'] = false;
$output137 = '';

$output137 .= 'vanilla_animatecssJsInline-';
$array138 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array138);
$arguments135['identifier'] = $output137;

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
			';
return $output134;
};
$arguments132['__elseClosures'][] = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
	// AnimateCss-';
$array150 = array (
);
$output149 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array150);

$output149 .= ' - Partials/Layouts/Assets.html
	var animatedElement = document.getElementById(\'c';
$array151 = array (
);
$output149 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array151);

$output149 .= '\'),
		animateRepeat = \'';
$array152 = array (
);
$output149 .= $renderingContext->getVariableProvider()->getByPath('animateCssRepeat', $array152);

$output149 .= '\',
		dataAnimate = \'';
$array153 = array (
);
$output149 .= $renderingContext->getVariableProvider()->getByPath('dataAnimate', $array153);

$output149 .= '\';
	if (animatedElement) {
		t3sbCssAnimate(animatedElement, dataAnimate, animateRepeat);
	}
				';
return $output149;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['aria'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['async'] = NULL;
$arguments145['crossorigin'] = NULL;
$arguments145['defer'] = NULL;
$arguments145['integrity'] = NULL;
$arguments145['nomodule'] = NULL;
$arguments145['nonce'] = NULL;
$arguments145['referrerpolicy'] = NULL;
$arguments145['src'] = NULL;
$arguments145['type'] = NULL;
$arguments145['identifier'] = NULL;
$arguments145['priority'] = false;
$output147 = '';

$output147 .= 'vanilla_animatecssJsInline-';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array148);
$arguments145['identifier'] = $output147;

$output144 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
			';
return $output144;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output129 .= '
	';
return $output129;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('animateCssRepeat', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['__thenClosure'] = $renderChildrenClosure125;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output97 .= '
';
return $output97;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('isAnimateCss', $array94);
$array93['1'] = ' && ';
$array95 = array (
);$array93['2'] = $renderingContext->getVariableProvider()->getByPath('settings.animateCss', $array95);

$expression96 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return ' Lightbox - same in News/Detail.html ';
};
$arguments182 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return ' Baguette Box ';
};
$arguments191 = array();

$output190 .= NULL;

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['aria'] = NULL;
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['as'] = NULL;
$arguments222['crossorigin'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['href'] = NULL;
$arguments222['hreflang'] = NULL;
$arguments222['importance'] = NULL;
$arguments222['integrity'] = NULL;
$arguments222['media'] = NULL;
$arguments222['referrerpolicy'] = NULL;
$arguments222['rel'] = NULL;
$arguments222['sizes'] = NULL;
$arguments222['type'] = NULL;
$arguments222['nonce'] = NULL;
$arguments222['identifier'] = NULL;
$arguments222['priority'] = false;
$arguments222['identifier'] = 't3sblightboxCss';
$output224 = '';

$output224 .= 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/';
$array225 = array (
);
$output224 .= $renderingContext->getVariableProvider()->getByPath('settings.baguetteBoxVersion', $array225);

$output224 .= '/baguetteBox.min.css';
$arguments222['href'] = $output224;

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output221 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['aria'] = NULL;
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['async'] = NULL;
$arguments226['crossorigin'] = NULL;
$arguments226['defer'] = NULL;
$arguments226['integrity'] = NULL;
$arguments226['nomodule'] = NULL;
$arguments226['nonce'] = NULL;
$arguments226['referrerpolicy'] = NULL;
$arguments226['src'] = NULL;
$arguments226['type'] = NULL;
$arguments226['identifier'] = NULL;
$arguments226['priority'] = false;
$arguments226['identifier'] = 't3sblightboxJS';
$output228 = '';

$output228 .= 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/';
$array229 = array (
);
$output228 .= $renderingContext->getVariableProvider()->getByPath('settings.baguetteBoxVersion', $array229);

$output228 .= '/baguetteBox.min.js';
$arguments226['src'] = $output228;

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output221 .= '
			';
return $output221;
};
$arguments219 = array();

$output218 .= '';

$output218 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['additionalAttributes'] = NULL;
$arguments233['data'] = NULL;
$arguments233['aria'] = NULL;
$arguments233['class'] = NULL;
$arguments233['dir'] = NULL;
$arguments233['id'] = NULL;
$arguments233['lang'] = NULL;
$arguments233['style'] = NULL;
$arguments233['title'] = NULL;
$arguments233['accesskey'] = NULL;
$arguments233['tabindex'] = NULL;
$arguments233['onclick'] = NULL;
$arguments233['as'] = NULL;
$arguments233['crossorigin'] = NULL;
$arguments233['disabled'] = NULL;
$arguments233['href'] = NULL;
$arguments233['hreflang'] = NULL;
$arguments233['importance'] = NULL;
$arguments233['integrity'] = NULL;
$arguments233['media'] = NULL;
$arguments233['referrerpolicy'] = NULL;
$arguments233['rel'] = NULL;
$arguments233['sizes'] = NULL;
$arguments233['type'] = NULL;
$arguments233['nonce'] = NULL;
$arguments233['identifier'] = NULL;
$arguments233['priority'] = false;
$arguments233['identifier'] = 't3sblightboxCss';
$arguments233['href'] = 'fileadmin/T3SB/Resources/Public/CSS/baguetteBox.min.css';

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['additionalAttributes'] = NULL;
$arguments235['data'] = NULL;
$arguments235['aria'] = NULL;
$arguments235['class'] = NULL;
$arguments235['dir'] = NULL;
$arguments235['id'] = NULL;
$arguments235['lang'] = NULL;
$arguments235['style'] = NULL;
$arguments235['title'] = NULL;
$arguments235['accesskey'] = NULL;
$arguments235['tabindex'] = NULL;
$arguments235['onclick'] = NULL;
$arguments235['async'] = NULL;
$arguments235['crossorigin'] = NULL;
$arguments235['defer'] = NULL;
$arguments235['integrity'] = NULL;
$arguments235['nomodule'] = NULL;
$arguments235['nonce'] = NULL;
$arguments235['referrerpolicy'] = NULL;
$arguments235['src'] = NULL;
$arguments235['type'] = NULL;
$arguments235['identifier'] = NULL;
$arguments235['priority'] = false;
$arguments235['identifier'] = 't3sblightboxJS';
$arguments235['src'] = 'fileadmin/T3SB/Resources/Public/JS/baguetteBox.min.js';

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output232 .= '
			';
return $output232;
};
$arguments230 = array();
$arguments230['if'] = NULL;

$output218 .= '';

$output218 .= '
		';
return $output218;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cdn', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['additionalAttributes'] = NULL;
$arguments202['data'] = NULL;
$arguments202['aria'] = NULL;
$arguments202['class'] = NULL;
$arguments202['dir'] = NULL;
$arguments202['id'] = NULL;
$arguments202['lang'] = NULL;
$arguments202['style'] = NULL;
$arguments202['title'] = NULL;
$arguments202['accesskey'] = NULL;
$arguments202['tabindex'] = NULL;
$arguments202['onclick'] = NULL;
$arguments202['as'] = NULL;
$arguments202['crossorigin'] = NULL;
$arguments202['disabled'] = NULL;
$arguments202['href'] = NULL;
$arguments202['hreflang'] = NULL;
$arguments202['importance'] = NULL;
$arguments202['integrity'] = NULL;
$arguments202['media'] = NULL;
$arguments202['referrerpolicy'] = NULL;
$arguments202['rel'] = NULL;
$arguments202['sizes'] = NULL;
$arguments202['type'] = NULL;
$arguments202['nonce'] = NULL;
$arguments202['identifier'] = NULL;
$arguments202['priority'] = false;
$arguments202['identifier'] = 't3sblightboxCss';
$output204 = '';

$output204 .= 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/';
$array205 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('settings.baguetteBoxVersion', $array205);

$output204 .= '/baguetteBox.min.css';
$arguments202['href'] = $output204;

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['aria'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['async'] = NULL;
$arguments206['crossorigin'] = NULL;
$arguments206['defer'] = NULL;
$arguments206['integrity'] = NULL;
$arguments206['nomodule'] = NULL;
$arguments206['nonce'] = NULL;
$arguments206['referrerpolicy'] = NULL;
$arguments206['src'] = NULL;
$arguments206['type'] = NULL;
$arguments206['identifier'] = NULL;
$arguments206['priority'] = false;
$arguments206['identifier'] = 't3sblightboxJS';
$output208 = '';

$output208 .= 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/';
$array209 = array (
);
$output208 .= $renderingContext->getVariableProvider()->getByPath('settings.baguetteBoxVersion', $array209);

$output208 .= '/baguetteBox.min.js';
$arguments206['src'] = $output208;

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output201 .= '
			';
return $output201;
};
$arguments199['__elseClosures'][] = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['aria'] = NULL;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['title'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['as'] = NULL;
$arguments211['crossorigin'] = NULL;
$arguments211['disabled'] = NULL;
$arguments211['href'] = NULL;
$arguments211['hreflang'] = NULL;
$arguments211['importance'] = NULL;
$arguments211['integrity'] = NULL;
$arguments211['media'] = NULL;
$arguments211['referrerpolicy'] = NULL;
$arguments211['rel'] = NULL;
$arguments211['sizes'] = NULL;
$arguments211['type'] = NULL;
$arguments211['nonce'] = NULL;
$arguments211['identifier'] = NULL;
$arguments211['priority'] = false;
$arguments211['identifier'] = 't3sblightboxCss';
$arguments211['href'] = 'fileadmin/T3SB/Resources/Public/CSS/baguetteBox.min.css';

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['additionalAttributes'] = NULL;
$arguments213['data'] = NULL;
$arguments213['aria'] = NULL;
$arguments213['class'] = NULL;
$arguments213['dir'] = NULL;
$arguments213['id'] = NULL;
$arguments213['lang'] = NULL;
$arguments213['style'] = NULL;
$arguments213['title'] = NULL;
$arguments213['accesskey'] = NULL;
$arguments213['tabindex'] = NULL;
$arguments213['onclick'] = NULL;
$arguments213['async'] = NULL;
$arguments213['crossorigin'] = NULL;
$arguments213['defer'] = NULL;
$arguments213['integrity'] = NULL;
$arguments213['nomodule'] = NULL;
$arguments213['nonce'] = NULL;
$arguments213['referrerpolicy'] = NULL;
$arguments213['src'] = NULL;
$arguments213['type'] = NULL;
$arguments213['identifier'] = NULL;
$arguments213['priority'] = false;
$arguments213['identifier'] = 't3sblightboxJS';
$arguments213['src'] = 'fileadmin/T3SB/Resources/Public/JS/baguetteBox.min.js';

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output210 .= '
			';
return $output210;
};

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
	// Baguette Box (lightbox) - Partials/Layouts/Assets.html
	baguetteBox.run(\'.gallery, .image-gallery\', ';

$output239 .= '{
		animation: \'fadeIn\',
		noScrollbars: true
	}';

$output239 .= ');
		';
return $output239;
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['aria'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['async'] = NULL;
$arguments237['crossorigin'] = NULL;
$arguments237['defer'] = NULL;
$arguments237['integrity'] = NULL;
$arguments237['nomodule'] = NULL;
$arguments237['nonce'] = NULL;
$arguments237['referrerpolicy'] = NULL;
$arguments237['src'] = NULL;
$arguments237['type'] = NULL;
$arguments237['identifier'] = NULL;
$arguments237['priority'] = false;
$arguments237['identifier'] = 'vanilla_lightbox';

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output198 .= '
	';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lightboxSelection', $array196);
$array195['1'] = ' == 1';

$expression197 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return ' Halkabox ';
};
$arguments240 = array();

$output190 .= NULL;

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['additionalAttributes'] = NULL;
$arguments271['data'] = NULL;
$arguments271['aria'] = NULL;
$arguments271['class'] = NULL;
$arguments271['dir'] = NULL;
$arguments271['id'] = NULL;
$arguments271['lang'] = NULL;
$arguments271['style'] = NULL;
$arguments271['title'] = NULL;
$arguments271['accesskey'] = NULL;
$arguments271['tabindex'] = NULL;
$arguments271['onclick'] = NULL;
$arguments271['as'] = NULL;
$arguments271['crossorigin'] = NULL;
$arguments271['disabled'] = NULL;
$arguments271['href'] = NULL;
$arguments271['hreflang'] = NULL;
$arguments271['importance'] = NULL;
$arguments271['integrity'] = NULL;
$arguments271['media'] = NULL;
$arguments271['referrerpolicy'] = NULL;
$arguments271['rel'] = NULL;
$arguments271['sizes'] = NULL;
$arguments271['type'] = NULL;
$arguments271['nonce'] = NULL;
$arguments271['identifier'] = NULL;
$arguments271['priority'] = false;
$arguments271['identifier'] = 't3sblightboxCss';
$output273 = '';

$output273 .= 'https://cdn.jsdelivr.net/npm/halkabox@';
$array274 = array (
);
$output273 .= $renderingContext->getVariableProvider()->getByPath('settings.halkaboxVersion', $array274);

$output273 .= '/dist/halkaBox.min.css';
$arguments271['href'] = $output273;

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['aria'] = NULL;
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['async'] = NULL;
$arguments275['crossorigin'] = NULL;
$arguments275['defer'] = NULL;
$arguments275['integrity'] = NULL;
$arguments275['nomodule'] = NULL;
$arguments275['nonce'] = NULL;
$arguments275['referrerpolicy'] = NULL;
$arguments275['src'] = NULL;
$arguments275['type'] = NULL;
$arguments275['identifier'] = NULL;
$arguments275['priority'] = false;
$arguments275['identifier'] = 't3sblightboxJS';
$output277 = '';

$output277 .= 'https://cdn.jsdelivr.net/npm/halkabox@';
$array278 = array (
);
$output277 .= $renderingContext->getVariableProvider()->getByPath('settings.halkaboxVersion', $array278);

$output277 .= '/dist/halkaBox.min.js';
$arguments275['src'] = $output277;

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output270 .= '			
			';
return $output270;
};
$arguments268 = array();

$output267 .= '';

$output267 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['additionalAttributes'] = NULL;
$arguments282['data'] = NULL;
$arguments282['aria'] = NULL;
$arguments282['class'] = NULL;
$arguments282['dir'] = NULL;
$arguments282['id'] = NULL;
$arguments282['lang'] = NULL;
$arguments282['style'] = NULL;
$arguments282['title'] = NULL;
$arguments282['accesskey'] = NULL;
$arguments282['tabindex'] = NULL;
$arguments282['onclick'] = NULL;
$arguments282['as'] = NULL;
$arguments282['crossorigin'] = NULL;
$arguments282['disabled'] = NULL;
$arguments282['href'] = NULL;
$arguments282['hreflang'] = NULL;
$arguments282['importance'] = NULL;
$arguments282['integrity'] = NULL;
$arguments282['media'] = NULL;
$arguments282['referrerpolicy'] = NULL;
$arguments282['rel'] = NULL;
$arguments282['sizes'] = NULL;
$arguments282['type'] = NULL;
$arguments282['nonce'] = NULL;
$arguments282['identifier'] = NULL;
$arguments282['priority'] = false;
$arguments282['identifier'] = 't3sblightboxCss';
$arguments282['href'] = 'fileadmin/T3SB/Resources/Public/CSS/halkaBox.min.css';

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['additionalAttributes'] = NULL;
$arguments284['data'] = NULL;
$arguments284['aria'] = NULL;
$arguments284['class'] = NULL;
$arguments284['dir'] = NULL;
$arguments284['id'] = NULL;
$arguments284['lang'] = NULL;
$arguments284['style'] = NULL;
$arguments284['title'] = NULL;
$arguments284['accesskey'] = NULL;
$arguments284['tabindex'] = NULL;
$arguments284['onclick'] = NULL;
$arguments284['async'] = NULL;
$arguments284['crossorigin'] = NULL;
$arguments284['defer'] = NULL;
$arguments284['integrity'] = NULL;
$arguments284['nomodule'] = NULL;
$arguments284['nonce'] = NULL;
$arguments284['referrerpolicy'] = NULL;
$arguments284['src'] = NULL;
$arguments284['type'] = NULL;
$arguments284['identifier'] = NULL;
$arguments284['priority'] = false;
$arguments284['identifier'] = 't3sblightboxJS';
$arguments284['src'] = 'fileadmin/T3SB/Resources/Public/JS/halkaBox.min.js';

$output281 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output281 .= '
			';
return $output281;
};
$arguments279 = array();
$arguments279['if'] = NULL;

$output267 .= '';

$output267 .= '
		';
return $output267;
};
$arguments248 = array();
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$arguments248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cdn', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments248['__thenClosure'] = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['aria'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['as'] = NULL;
$arguments251['crossorigin'] = NULL;
$arguments251['disabled'] = NULL;
$arguments251['href'] = NULL;
$arguments251['hreflang'] = NULL;
$arguments251['importance'] = NULL;
$arguments251['integrity'] = NULL;
$arguments251['media'] = NULL;
$arguments251['referrerpolicy'] = NULL;
$arguments251['rel'] = NULL;
$arguments251['sizes'] = NULL;
$arguments251['type'] = NULL;
$arguments251['nonce'] = NULL;
$arguments251['identifier'] = NULL;
$arguments251['priority'] = false;
$arguments251['identifier'] = 't3sblightboxCss';
$output253 = '';

$output253 .= 'https://cdn.jsdelivr.net/npm/halkabox@';
$array254 = array (
);
$output253 .= $renderingContext->getVariableProvider()->getByPath('settings.halkaboxVersion', $array254);

$output253 .= '/dist/halkaBox.min.css';
$arguments251['href'] = $output253;

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['aria'] = NULL;
$arguments255['class'] = NULL;
$arguments255['dir'] = NULL;
$arguments255['id'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$arguments255['async'] = NULL;
$arguments255['crossorigin'] = NULL;
$arguments255['defer'] = NULL;
$arguments255['integrity'] = NULL;
$arguments255['nomodule'] = NULL;
$arguments255['nonce'] = NULL;
$arguments255['referrerpolicy'] = NULL;
$arguments255['src'] = NULL;
$arguments255['type'] = NULL;
$arguments255['identifier'] = NULL;
$arguments255['priority'] = false;
$arguments255['identifier'] = 't3sblightboxJS';
$output257 = '';

$output257 .= 'https://cdn.jsdelivr.net/npm/halkabox@';
$array258 = array (
);
$output257 .= $renderingContext->getVariableProvider()->getByPath('settings.halkaboxVersion', $array258);

$output257 .= '/dist/halkaBox.min.js';
$arguments255['src'] = $output257;

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output250 .= '			
			';
return $output250;
};
$arguments248['__elseClosures'][] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['aria'] = NULL;
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
$arguments260['as'] = NULL;
$arguments260['crossorigin'] = NULL;
$arguments260['disabled'] = NULL;
$arguments260['href'] = NULL;
$arguments260['hreflang'] = NULL;
$arguments260['importance'] = NULL;
$arguments260['integrity'] = NULL;
$arguments260['media'] = NULL;
$arguments260['referrerpolicy'] = NULL;
$arguments260['rel'] = NULL;
$arguments260['sizes'] = NULL;
$arguments260['type'] = NULL;
$arguments260['nonce'] = NULL;
$arguments260['identifier'] = NULL;
$arguments260['priority'] = false;
$arguments260['identifier'] = 't3sblightboxCss';
$arguments260['href'] = 'fileadmin/T3SB/Resources/Public/CSS/halkaBox.min.css';

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['additionalAttributes'] = NULL;
$arguments262['data'] = NULL;
$arguments262['aria'] = NULL;
$arguments262['class'] = NULL;
$arguments262['dir'] = NULL;
$arguments262['id'] = NULL;
$arguments262['lang'] = NULL;
$arguments262['style'] = NULL;
$arguments262['title'] = NULL;
$arguments262['accesskey'] = NULL;
$arguments262['tabindex'] = NULL;
$arguments262['onclick'] = NULL;
$arguments262['async'] = NULL;
$arguments262['crossorigin'] = NULL;
$arguments262['defer'] = NULL;
$arguments262['integrity'] = NULL;
$arguments262['nomodule'] = NULL;
$arguments262['nonce'] = NULL;
$arguments262['referrerpolicy'] = NULL;
$arguments262['src'] = NULL;
$arguments262['type'] = NULL;
$arguments262['identifier'] = NULL;
$arguments262['priority'] = false;
$arguments262['identifier'] = 't3sblightboxJS';
$arguments262['src'] = 'fileadmin/T3SB/Resources/Public/JS/halkaBox.min.js';

$output259 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output259 .= '
			';
return $output259;
};

$output247 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
	// halkabox-';
$array291 = array (
);
$output290 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array291);

$output290 .= ' (lightbox) - Partials/Layouts/Assets.html
	halkaBox.options(';

$output290 .= '{animation: \'fade\',theme: \'dark\'}';

$output290 .= ');
	halkaBox.run(\'gallery-';
$array292 = array (
);
$output290 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array292);

$output290 .= '\');
		';
return $output290;
};
$arguments286 = array();
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['aria'] = NULL;
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$arguments286['async'] = NULL;
$arguments286['crossorigin'] = NULL;
$arguments286['defer'] = NULL;
$arguments286['integrity'] = NULL;
$arguments286['nomodule'] = NULL;
$arguments286['nonce'] = NULL;
$arguments286['referrerpolicy'] = NULL;
$arguments286['src'] = NULL;
$arguments286['type'] = NULL;
$arguments286['identifier'] = NULL;
$arguments286['priority'] = false;
$output288 = '';

$output288 .= 'vanilla_lightbox-';
$array289 = array (
);
$output288 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array289);
$arguments286['identifier'] = $output288;

$output247 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output247 .= '
	';
return $output247;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lightboxSelection', $array245);
$array244['1'] = ' == 2';

$expression246 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return ' G Lightbox ';
};
$arguments293 = array();

$output190 .= NULL;

$output190 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['additionalAttributes'] = NULL;
$arguments320['data'] = NULL;
$arguments320['aria'] = NULL;
$arguments320['class'] = NULL;
$arguments320['dir'] = NULL;
$arguments320['id'] = NULL;
$arguments320['lang'] = NULL;
$arguments320['style'] = NULL;
$arguments320['title'] = NULL;
$arguments320['accesskey'] = NULL;
$arguments320['tabindex'] = NULL;
$arguments320['onclick'] = NULL;
$arguments320['as'] = NULL;
$arguments320['crossorigin'] = NULL;
$arguments320['disabled'] = NULL;
$arguments320['href'] = NULL;
$arguments320['hreflang'] = NULL;
$arguments320['importance'] = NULL;
$arguments320['integrity'] = NULL;
$arguments320['media'] = NULL;
$arguments320['referrerpolicy'] = NULL;
$arguments320['rel'] = NULL;
$arguments320['sizes'] = NULL;
$arguments320['type'] = NULL;
$arguments320['nonce'] = NULL;
$arguments320['identifier'] = NULL;
$arguments320['priority'] = false;
$arguments320['identifier'] = 't3sblightboxCss';
$arguments320['href'] = 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css';

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['additionalAttributes'] = NULL;
$arguments322['data'] = NULL;
$arguments322['aria'] = NULL;
$arguments322['class'] = NULL;
$arguments322['dir'] = NULL;
$arguments322['id'] = NULL;
$arguments322['lang'] = NULL;
$arguments322['style'] = NULL;
$arguments322['title'] = NULL;
$arguments322['accesskey'] = NULL;
$arguments322['tabindex'] = NULL;
$arguments322['onclick'] = NULL;
$arguments322['async'] = NULL;
$arguments322['crossorigin'] = NULL;
$arguments322['defer'] = NULL;
$arguments322['integrity'] = NULL;
$arguments322['nomodule'] = NULL;
$arguments322['nonce'] = NULL;
$arguments322['referrerpolicy'] = NULL;
$arguments322['src'] = NULL;
$arguments322['type'] = NULL;
$arguments322['identifier'] = NULL;
$arguments322['priority'] = false;
$arguments322['identifier'] = 't3sblightboxJS';
$arguments322['src'] = 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js';

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output319 .= '
			';
return $output319;
};
$arguments317 = array();

$output316 .= '';

$output316 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['aria'] = NULL;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['title'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['as'] = NULL;
$arguments327['crossorigin'] = NULL;
$arguments327['disabled'] = NULL;
$arguments327['href'] = NULL;
$arguments327['hreflang'] = NULL;
$arguments327['importance'] = NULL;
$arguments327['integrity'] = NULL;
$arguments327['media'] = NULL;
$arguments327['referrerpolicy'] = NULL;
$arguments327['rel'] = NULL;
$arguments327['sizes'] = NULL;
$arguments327['type'] = NULL;
$arguments327['nonce'] = NULL;
$arguments327['identifier'] = NULL;
$arguments327['priority'] = false;
$arguments327['identifier'] = 't3sblightboxCss';
$arguments327['href'] = 'fileadmin/T3SB/Resources/Public/CSS/glightbox.min.css';

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output326 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['additionalAttributes'] = NULL;
$arguments329['data'] = NULL;
$arguments329['aria'] = NULL;
$arguments329['class'] = NULL;
$arguments329['dir'] = NULL;
$arguments329['id'] = NULL;
$arguments329['lang'] = NULL;
$arguments329['style'] = NULL;
$arguments329['title'] = NULL;
$arguments329['accesskey'] = NULL;
$arguments329['tabindex'] = NULL;
$arguments329['onclick'] = NULL;
$arguments329['async'] = NULL;
$arguments329['crossorigin'] = NULL;
$arguments329['defer'] = NULL;
$arguments329['integrity'] = NULL;
$arguments329['nomodule'] = NULL;
$arguments329['nonce'] = NULL;
$arguments329['referrerpolicy'] = NULL;
$arguments329['src'] = NULL;
$arguments329['type'] = NULL;
$arguments329['identifier'] = NULL;
$arguments329['priority'] = false;
$arguments329['identifier'] = 't3sblightboxJS';
$arguments329['src'] = 'fileadmin/T3SB/Resources/Public/JS/glightbox.min.js';

$output326 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output326 .= '
			';
return $output326;
};
$arguments324 = array();
$arguments324['if'] = NULL;

$output316 .= '';

$output316 .= '
		';
return $output316;
};
$arguments301 = array();
$arguments301['then'] = NULL;
$arguments301['else'] = NULL;
$arguments301['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('settings.cdn', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments301['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments301['__thenClosure'] = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['additionalAttributes'] = NULL;
$arguments304['data'] = NULL;
$arguments304['aria'] = NULL;
$arguments304['class'] = NULL;
$arguments304['dir'] = NULL;
$arguments304['id'] = NULL;
$arguments304['lang'] = NULL;
$arguments304['style'] = NULL;
$arguments304['title'] = NULL;
$arguments304['accesskey'] = NULL;
$arguments304['tabindex'] = NULL;
$arguments304['onclick'] = NULL;
$arguments304['as'] = NULL;
$arguments304['crossorigin'] = NULL;
$arguments304['disabled'] = NULL;
$arguments304['href'] = NULL;
$arguments304['hreflang'] = NULL;
$arguments304['importance'] = NULL;
$arguments304['integrity'] = NULL;
$arguments304['media'] = NULL;
$arguments304['referrerpolicy'] = NULL;
$arguments304['rel'] = NULL;
$arguments304['sizes'] = NULL;
$arguments304['type'] = NULL;
$arguments304['nonce'] = NULL;
$arguments304['identifier'] = NULL;
$arguments304['priority'] = false;
$arguments304['identifier'] = 't3sblightboxCss';
$arguments304['href'] = 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css';

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output303 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['aria'] = NULL;
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['async'] = NULL;
$arguments306['crossorigin'] = NULL;
$arguments306['defer'] = NULL;
$arguments306['integrity'] = NULL;
$arguments306['nomodule'] = NULL;
$arguments306['nonce'] = NULL;
$arguments306['referrerpolicy'] = NULL;
$arguments306['src'] = NULL;
$arguments306['type'] = NULL;
$arguments306['identifier'] = NULL;
$arguments306['priority'] = false;
$arguments306['identifier'] = 't3sblightboxJS';
$arguments306['src'] = 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js';

$output303 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output303 .= '
			';
return $output303;
};
$arguments301['__elseClosures'][] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['additionalAttributes'] = NULL;
$arguments309['data'] = NULL;
$arguments309['aria'] = NULL;
$arguments309['class'] = NULL;
$arguments309['dir'] = NULL;
$arguments309['id'] = NULL;
$arguments309['lang'] = NULL;
$arguments309['style'] = NULL;
$arguments309['title'] = NULL;
$arguments309['accesskey'] = NULL;
$arguments309['tabindex'] = NULL;
$arguments309['onclick'] = NULL;
$arguments309['as'] = NULL;
$arguments309['crossorigin'] = NULL;
$arguments309['disabled'] = NULL;
$arguments309['href'] = NULL;
$arguments309['hreflang'] = NULL;
$arguments309['importance'] = NULL;
$arguments309['integrity'] = NULL;
$arguments309['media'] = NULL;
$arguments309['referrerpolicy'] = NULL;
$arguments309['rel'] = NULL;
$arguments309['sizes'] = NULL;
$arguments309['type'] = NULL;
$arguments309['nonce'] = NULL;
$arguments309['identifier'] = NULL;
$arguments309['priority'] = false;
$arguments309['identifier'] = 't3sblightboxCss';
$arguments309['href'] = 'fileadmin/T3SB/Resources/Public/CSS/glightbox.min.css';

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['additionalAttributes'] = NULL;
$arguments311['data'] = NULL;
$arguments311['aria'] = NULL;
$arguments311['class'] = NULL;
$arguments311['dir'] = NULL;
$arguments311['id'] = NULL;
$arguments311['lang'] = NULL;
$arguments311['style'] = NULL;
$arguments311['title'] = NULL;
$arguments311['accesskey'] = NULL;
$arguments311['tabindex'] = NULL;
$arguments311['onclick'] = NULL;
$arguments311['async'] = NULL;
$arguments311['crossorigin'] = NULL;
$arguments311['defer'] = NULL;
$arguments311['integrity'] = NULL;
$arguments311['nomodule'] = NULL;
$arguments311['nonce'] = NULL;
$arguments311['referrerpolicy'] = NULL;
$arguments311['src'] = NULL;
$arguments311['type'] = NULL;
$arguments311['identifier'] = NULL;
$arguments311['priority'] = false;
$arguments311['identifier'] = 't3sblightboxJS';
$arguments311['src'] = 'fileadmin/T3SB/Resources/Public/JS/glightbox.min.js';

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output308 .= '
			';
return $output308;
};

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output300 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
	// GLightbox (lightbox) - Partials/Layouts/Assets.html
	const lightbox = GLightbox(';

$output333 .= '{loop: true}';

$output333 .= ');
		';
return $output333;
};
$arguments331 = array();
$arguments331['additionalAttributes'] = NULL;
$arguments331['data'] = NULL;
$arguments331['aria'] = NULL;
$arguments331['class'] = NULL;
$arguments331['dir'] = NULL;
$arguments331['id'] = NULL;
$arguments331['lang'] = NULL;
$arguments331['style'] = NULL;
$arguments331['title'] = NULL;
$arguments331['accesskey'] = NULL;
$arguments331['tabindex'] = NULL;
$arguments331['onclick'] = NULL;
$arguments331['async'] = NULL;
$arguments331['crossorigin'] = NULL;
$arguments331['defer'] = NULL;
$arguments331['integrity'] = NULL;
$arguments331['nomodule'] = NULL;
$arguments331['nonce'] = NULL;
$arguments331['referrerpolicy'] = NULL;
$arguments331['src'] = NULL;
$arguments331['type'] = NULL;
$arguments331['identifier'] = NULL;
$arguments331['priority'] = false;
$arguments331['identifier'] = 'vanilla_lightbox';

$output300 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output300 .= '
	';
return $output300;
};
$arguments295 = array();
$arguments295['then'] = NULL;
$arguments295['else'] = NULL;
$arguments295['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lightboxSelection', $array298);
$array297['1'] = ' == 3';

$expression299 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments295['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression299(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array297)
					),
					$renderingContext
				);
$arguments295['__thenClosure'] = $renderChildrenClosure296;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output190 .= '
';
return $output190;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lightboxSelection', $array187);
$array186['1'] = ' && ';
$array188 = array (
);$array186['2'] = $renderingContext->getVariableProvider()->getByPath('lightBox', $array188);

$expression189 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['__thenClosure'] = $renderChildrenClosure185;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

return $output0;
}


}
#