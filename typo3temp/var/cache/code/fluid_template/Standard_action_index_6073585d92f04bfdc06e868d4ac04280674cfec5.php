<?php

class Standard_action_index_6073585d92f04bfdc06e868d4ac04280674cfec5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  't3sb' => 
  array (
    0 => 'T3SBS\\T3sbootstrap\\ViewHelpers',
  ),
));
}

/**
 * section PageContent
 */
public function section_e435c89d5cba9b2846882f39f7c202e0769a44ad(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div id="page-content"';
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.pageContentExtraClass', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$output6 = '';

$output6 .= ' class="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.pageContentExtraClass', $array7)]);

$output6 .= '"';
$arguments1['then'] = $output6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ' >
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$output30 = '';

$output30 .= 'BackendLayouts/';
$array31 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('be_layout', $array31);
$arguments28['partial'] = $output30;
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
			';
return $output27;
};
$arguments25 = array();

$output24 .= '';

$output24 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'BackendLayouts/OneCol';
$arguments36['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
			';
return $output35;
};
$arguments33 = array();
$arguments33['if'] = NULL;

$output24 .= '';

$output24 .= '
		';
return $output24;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array21);
$array20['1'] = ' && ';
$array22 = array (
);$array20['2'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array22);
$array20['3'] = ' != \'default\'';

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'default'));};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['debug'] = true;
$output13 = '';

$output13 .= 'BackendLayouts/';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('be_layout', $array14);
$arguments11['partial'] = $output13;
$arguments11['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
			';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['debug'] = true;
$arguments17['partial'] = 'BackendLayouts/OneCol';
$arguments17['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
			';
return $output16;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
	</div>
';

return $output0;
}
/**
 * section AssetScripts
 */
public function section_6efdac5127e42bfaf5e353c8a350773ee755b697(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output39 = '';

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
	// Default - Main.html
	var	  navbarHeight = 0,
			navbarBreakpointWidth = 0,
			viewportWidth = 0,
			onePageLayout = 0,
			fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['number'] = NULL;
$array100 = array (
);$arguments98['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array100);

$output97 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= ', fixedNavbar, navbarHeight);
	}
';
return $output97;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['aria'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['async'] = NULL;
$arguments95['crossorigin'] = NULL;
$arguments95['defer'] = NULL;
$arguments95['integrity'] = NULL;
$arguments95['nomodule'] = NULL;
$arguments95['nonce'] = NULL;
$arguments95['referrerpolicy'] = NULL;
$arguments95['src'] = NULL;
$arguments95['type'] = NULL;
$arguments95['identifier'] = NULL;
$arguments95['priority'] = false;
$arguments95['identifier'] = 'vanilla_default';

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
	';
return $output94;
};
$arguments92 = array();

$output91 .= '';

$output91 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['number'] = NULL;
$array132 = array (
);$arguments130['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array132);

$output129 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output129;
};
$arguments127 = array();
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['aria'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['async'] = NULL;
$arguments127['crossorigin'] = NULL;
$arguments127['defer'] = NULL;
$arguments127['integrity'] = NULL;
$arguments127['nomodule'] = NULL;
$arguments127['nonce'] = NULL;
$arguments127['referrerpolicy'] = NULL;
$arguments127['src'] = NULL;
$arguments127['type'] = NULL;
$arguments127['identifier'] = NULL;
$arguments127['priority'] = false;
$arguments127['identifier'] = 'vanilla_default';

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
			';
return $output126;
};
$arguments124 = array();

$output123 .= '';

$output123 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['number'] = NULL;
$array141 = array (
);$arguments139['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array141);

$output138 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output138;
};
$arguments136 = array();
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['aria'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['async'] = NULL;
$arguments136['crossorigin'] = NULL;
$arguments136['defer'] = NULL;
$arguments136['integrity'] = NULL;
$arguments136['nomodule'] = NULL;
$arguments136['nonce'] = NULL;
$arguments136['referrerpolicy'] = NULL;
$arguments136['src'] = NULL;
$arguments136['type'] = NULL;
$arguments136['identifier'] = NULL;
$arguments136['priority'] = false;
$arguments136['identifier'] = 'vanilla_default';

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
			';
return $output135;
};
$arguments133 = array();
$arguments133['if'] = NULL;

$output123 .= '';

$output123 .= '
		';
return $output123;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['number'] = NULL;
$array112 = array (
);$arguments110['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array112);

$output109 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output109;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['aria'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['async'] = NULL;
$arguments107['crossorigin'] = NULL;
$arguments107['defer'] = NULL;
$arguments107['integrity'] = NULL;
$arguments107['nomodule'] = NULL;
$arguments107['nonce'] = NULL;
$arguments107['referrerpolicy'] = NULL;
$arguments107['src'] = NULL;
$arguments107['type'] = NULL;
$arguments107['identifier'] = NULL;
$arguments107['priority'] = false;
$arguments107['identifier'] = 'vanilla_default';

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
			';
return $output106;
};
$arguments104['__elseClosures'][] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['number'] = NULL;
$array119 = array (
);$arguments117['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array119);

$output116 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output116;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['aria'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['async'] = NULL;
$arguments114['crossorigin'] = NULL;
$arguments114['defer'] = NULL;
$arguments114['integrity'] = NULL;
$arguments114['nomodule'] = NULL;
$arguments114['nonce'] = NULL;
$arguments114['referrerpolicy'] = NULL;
$arguments114['src'] = NULL;
$arguments114['type'] = NULL;
$arguments114['identifier'] = NULL;
$arguments114['priority'] = false;
$arguments114['identifier'] = 'vanilla_default';

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
			';
return $output113;
};

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
	';
return $output103;
};
$arguments101 = array();
$arguments101['if'] = NULL;

$output91 .= '';

$output91 .= '
';
return $output91;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array89);
$array88['1'] = ' == \'slide\'';

$expression90 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'slide');};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
	// Default - Main.html
	var	  navbarHeight = 0,
			navbarBreakpointWidth = 0,
			viewportWidth = 0,
			onePageLayout = 0,
			fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['number'] = NULL;
$array48 = array (
);$arguments46['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array48);

$output45 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= ', fixedNavbar, navbarHeight);
	}
';
return $output45;
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
$arguments43['async'] = NULL;
$arguments43['crossorigin'] = NULL;
$arguments43['defer'] = NULL;
$arguments43['integrity'] = NULL;
$arguments43['nomodule'] = NULL;
$arguments43['nonce'] = NULL;
$arguments43['referrerpolicy'] = NULL;
$arguments43['src'] = NULL;
$arguments43['type'] = NULL;
$arguments43['identifier'] = NULL;
$arguments43['priority'] = false;
$arguments43['identifier'] = 'vanilla_default';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
	';
return $output42;
};
$arguments40['__elseClosures'][] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['number'] = NULL;
$array78 = array (
);$arguments76['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array78);

$output75 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output75;
};
$arguments73 = array();
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['aria'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['async'] = NULL;
$arguments73['crossorigin'] = NULL;
$arguments73['defer'] = NULL;
$arguments73['integrity'] = NULL;
$arguments73['nomodule'] = NULL;
$arguments73['nonce'] = NULL;
$arguments73['referrerpolicy'] = NULL;
$arguments73['src'] = NULL;
$arguments73['type'] = NULL;
$arguments73['identifier'] = NULL;
$arguments73['priority'] = false;
$arguments73['identifier'] = 'vanilla_default';

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
			';
return $output72;
};
$arguments70 = array();

$output69 .= '';

$output69 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['number'] = NULL;
$array87 = array (
);$arguments85['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array87);

$output84 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output84;
};
$arguments82 = array();
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['aria'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['async'] = NULL;
$arguments82['crossorigin'] = NULL;
$arguments82['defer'] = NULL;
$arguments82['integrity'] = NULL;
$arguments82['nomodule'] = NULL;
$arguments82['nonce'] = NULL;
$arguments82['referrerpolicy'] = NULL;
$arguments82['src'] = NULL;
$arguments82['type'] = NULL;
$arguments82['identifier'] = NULL;
$arguments82['priority'] = false;
$arguments82['identifier'] = 'vanilla_default';

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
			';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output69 .= '';

$output69 .= '
		';
return $output69;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array67);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['number'] = NULL;
$array58 = array (
);$arguments56['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array58);

$output55 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output55;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['aria'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['async'] = NULL;
$arguments53['crossorigin'] = NULL;
$arguments53['defer'] = NULL;
$arguments53['integrity'] = NULL;
$arguments53['nomodule'] = NULL;
$arguments53['nonce'] = NULL;
$arguments53['referrerpolicy'] = NULL;
$arguments53['src'] = NULL;
$arguments53['type'] = NULL;
$arguments53['identifier'] = NULL;
$arguments53['priority'] = false;
$arguments53['identifier'] = 'vanilla_default';

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
			';
return $output52;
};
$arguments50['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['number'] = NULL;
$array65 = array (
);$arguments63['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array65);

$output62 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output62;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['aria'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['async'] = NULL;
$arguments60['crossorigin'] = NULL;
$arguments60['defer'] = NULL;
$arguments60['integrity'] = NULL;
$arguments60['nomodule'] = NULL;
$arguments60['nonce'] = NULL;
$arguments60['referrerpolicy'] = NULL;
$arguments60['src'] = NULL;
$arguments60['type'] = NULL;
$arguments60['identifier'] = NULL;
$arguments60['priority'] = false;
$arguments60['identifier'] = 'vanilla_default';

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
			';
return $output59;
};

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
	';
return $output49;
};

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return ' Loading spinner ';
};
$arguments142 = array();

$output39 .= NULL;

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return '
	// Loading spinner - Main.html
	window.onload = function() {
		let spinner = document.getElementById(\'site-preloader\');
		t3sbFadeOutEffect(spinner);
	};
';
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['aria'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['async'] = NULL;
$arguments150['crossorigin'] = NULL;
$arguments150['defer'] = NULL;
$arguments150['integrity'] = NULL;
$arguments150['nomodule'] = NULL;
$arguments150['nonce'] = NULL;
$arguments150['referrerpolicy'] = NULL;
$arguments150['src'] = NULL;
$arguments150['type'] = NULL;
$arguments150['identifier'] = NULL;
$arguments150['priority'] = false;
$arguments150['identifier'] = 'vanilla_loadingspinner';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
';
return $output149;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return '
	// Dark mode - Main.html
	t3sbDarkMode();
';
};
$arguments158 = array();
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['aria'] = NULL;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['async'] = NULL;
$arguments158['crossorigin'] = NULL;
$arguments158['defer'] = NULL;
$arguments158['integrity'] = NULL;
$arguments158['nomodule'] = NULL;
$arguments158['nonce'] = NULL;
$arguments158['referrerpolicy'] = NULL;
$arguments158['src'] = NULL;
$arguments158['type'] = NULL;
$arguments158['identifier'] = NULL;
$arguments158['priority'] = false;
$arguments158['identifier'] = 'vanilla_darkMode';

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
';
return $output157;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.darkMode', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return ' Lazyload ';
};
$arguments160 = array();

$output39 .= NULL;

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['number'] = NULL;
$array166 = array (
);$arguments164['number'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoadThreshold', $array166);
return T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);
};
$arguments162 = array();
$arguments162['value'] = NULL;
$arguments162['name'] = NULL;
$arguments162['name'] = 'customthreshold';
$renderChildrenClosure163 = ($arguments162['value'] !== null) ? function() use ($arguments162) { return $arguments162['value']; } : $renderChildrenClosure163;
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array243 = array (
);
$output242 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array243);

$output242 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output242;
};
$arguments240 = array();
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['aria'] = NULL;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['title'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['async'] = NULL;
$arguments240['crossorigin'] = NULL;
$arguments240['defer'] = NULL;
$arguments240['integrity'] = NULL;
$arguments240['nomodule'] = NULL;
$arguments240['nonce'] = NULL;
$arguments240['referrerpolicy'] = NULL;
$arguments240['src'] = NULL;
$arguments240['type'] = NULL;
$arguments240['identifier'] = NULL;
$arguments240['priority'] = false;
$arguments240['identifier'] = 'vanilla_lazyload';

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
			';
return $output239;
};
$arguments237 = array();

$output236 .= '';

$output236 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array250 = array (
);
$output249 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array250);

$output249 .= ';
	new LazyLoad(';

$output249 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output249 .= ');
				';
return $output249;
};
$arguments247 = array();
$arguments247['additionalAttributes'] = NULL;
$arguments247['data'] = NULL;
$arguments247['aria'] = NULL;
$arguments247['class'] = NULL;
$arguments247['dir'] = NULL;
$arguments247['id'] = NULL;
$arguments247['lang'] = NULL;
$arguments247['style'] = NULL;
$arguments247['title'] = NULL;
$arguments247['accesskey'] = NULL;
$arguments247['tabindex'] = NULL;
$arguments247['onclick'] = NULL;
$arguments247['async'] = NULL;
$arguments247['crossorigin'] = NULL;
$arguments247['defer'] = NULL;
$arguments247['integrity'] = NULL;
$arguments247['nomodule'] = NULL;
$arguments247['nonce'] = NULL;
$arguments247['referrerpolicy'] = NULL;
$arguments247['src'] = NULL;
$arguments247['type'] = NULL;
$arguments247['identifier'] = NULL;
$arguments247['priority'] = false;
$arguments247['identifier'] = 'vanilla_lazyload';

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
			';
return $output246;
};
$arguments244 = array();
$arguments244['if'] = NULL;

$output236 .= '';

$output236 .= '
		';
return $output236;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array233);
$array232['1'] = ' && ';
$array234 = array (
);$array232['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array234);

$expression235 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array226 = array (
);
$output225 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array226);

$output225 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output225;
};
$arguments223 = array();
$arguments223['additionalAttributes'] = NULL;
$arguments223['data'] = NULL;
$arguments223['aria'] = NULL;
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['async'] = NULL;
$arguments223['crossorigin'] = NULL;
$arguments223['defer'] = NULL;
$arguments223['integrity'] = NULL;
$arguments223['nomodule'] = NULL;
$arguments223['nonce'] = NULL;
$arguments223['referrerpolicy'] = NULL;
$arguments223['src'] = NULL;
$arguments223['type'] = NULL;
$arguments223['identifier'] = NULL;
$arguments223['priority'] = false;
$arguments223['identifier'] = 'vanilla_lazyload';

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
			';
return $output222;
};
$arguments220['__elseClosures'][] = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array231 = array (
);
$output230 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array231);

$output230 .= ';
	new LazyLoad(';

$output230 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output230 .= ');
				';
return $output230;
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['aria'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['async'] = NULL;
$arguments228['crossorigin'] = NULL;
$arguments228['defer'] = NULL;
$arguments228['integrity'] = NULL;
$arguments228['nomodule'] = NULL;
$arguments228['nonce'] = NULL;
$arguments228['referrerpolicy'] = NULL;
$arguments228['src'] = NULL;
$arguments228['type'] = NULL;
$arguments228['identifier'] = NULL;
$arguments228['priority'] = false;
$arguments228['identifier'] = 'vanilla_lazyload';

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
			';
return $output227;
};

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
	';
return $output219;
};
$arguments217 = array();

$output216 .= '';

$output216 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
	// Magnifying glass icon - Main.html
	var magnify = document.querySelectorAll(\'.zoom-overlay\');
	if ( magnify.length ) ';

$output263 .= '{
		document.querySelectorAll(\'figure.image\').forEach (
			img => { t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth) }
		)
	}';

$output263 .= '
			';
return $output263;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['aria'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['async'] = NULL;
$arguments261['crossorigin'] = NULL;
$arguments261['defer'] = NULL;
$arguments261['integrity'] = NULL;
$arguments261['nomodule'] = NULL;
$arguments261['nonce'] = NULL;
$arguments261['referrerpolicy'] = NULL;
$arguments261['src'] = NULL;
$arguments261['type'] = NULL;
$arguments261['identifier'] = NULL;
$arguments261['priority'] = false;
$arguments261['identifier'] = 'vanilla_magnifying';

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
		';
return $output260;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array257);
$array256['1'] = ' && ';
$array258 = array (
);$array256['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array258);

$expression259 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array256)
					),
					$renderingContext
				);
$arguments254['__thenClosure'] = $renderChildrenClosure255;

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
	';
return $output253;
};
$arguments251 = array();
$arguments251['if'] = NULL;

$output216 .= '';

$output216 .= '
';
return $output216;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoad', $array213);
$array212['1'] = ' && ';
$array214 = array (
);$array212['2'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoad', $array214);
$array212['3'] = ' < 3';

$expression215 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) < 3));};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array193 = array (
);
$output192 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array193);

$output192 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output192;
};
$arguments190 = array();
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['aria'] = NULL;
$arguments190['class'] = NULL;
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$arguments190['async'] = NULL;
$arguments190['crossorigin'] = NULL;
$arguments190['defer'] = NULL;
$arguments190['integrity'] = NULL;
$arguments190['nomodule'] = NULL;
$arguments190['nonce'] = NULL;
$arguments190['referrerpolicy'] = NULL;
$arguments190['src'] = NULL;
$arguments190['type'] = NULL;
$arguments190['identifier'] = NULL;
$arguments190['priority'] = false;
$arguments190['identifier'] = 'vanilla_lazyload';

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
			';
return $output189;
};
$arguments187 = array();

$output186 .= '';

$output186 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array200 = array (
);
$output199 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array200);

$output199 .= ';
	new LazyLoad(';

$output199 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output199 .= ');
				';
return $output199;
};
$arguments197 = array();
$arguments197['additionalAttributes'] = NULL;
$arguments197['data'] = NULL;
$arguments197['aria'] = NULL;
$arguments197['class'] = NULL;
$arguments197['dir'] = NULL;
$arguments197['id'] = NULL;
$arguments197['lang'] = NULL;
$arguments197['style'] = NULL;
$arguments197['title'] = NULL;
$arguments197['accesskey'] = NULL;
$arguments197['tabindex'] = NULL;
$arguments197['onclick'] = NULL;
$arguments197['async'] = NULL;
$arguments197['crossorigin'] = NULL;
$arguments197['defer'] = NULL;
$arguments197['integrity'] = NULL;
$arguments197['nomodule'] = NULL;
$arguments197['nonce'] = NULL;
$arguments197['referrerpolicy'] = NULL;
$arguments197['src'] = NULL;
$arguments197['type'] = NULL;
$arguments197['identifier'] = NULL;
$arguments197['priority'] = false;
$arguments197['identifier'] = 'vanilla_lazyload';

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
			';
return $output196;
};
$arguments194 = array();
$arguments194['if'] = NULL;

$output186 .= '';

$output186 .= '
		';
return $output186;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array183);
$array182['1'] = ' && ';
$array184 = array (
);$array182['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array184);

$expression185 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$arguments170['__thenClosure'] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array176 = array (
);
$output175 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array176);

$output175 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output175;
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
$arguments173['identifier'] = 'vanilla_lazyload';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= '
			';
return $output172;
};
$arguments170['__elseClosures'][] = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array181 = array (
);
$output180 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array181);

$output180 .= ';
	new LazyLoad(';

$output180 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output180 .= ');
				';
return $output180;
};
$arguments178 = array();
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['aria'] = NULL;
$arguments178['class'] = NULL;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$arguments178['async'] = NULL;
$arguments178['crossorigin'] = NULL;
$arguments178['defer'] = NULL;
$arguments178['integrity'] = NULL;
$arguments178['nomodule'] = NULL;
$arguments178['nonce'] = NULL;
$arguments178['referrerpolicy'] = NULL;
$arguments178['src'] = NULL;
$arguments178['type'] = NULL;
$arguments178['identifier'] = NULL;
$arguments178['priority'] = false;
$arguments178['identifier'] = 'vanilla_lazyload';

$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
			';
return $output177;
};

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '
	';
return $output169;
};
$arguments167['__elseClosures'][] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
	// Magnifying glass icon - Main.html
	var magnify = document.querySelectorAll(\'.zoom-overlay\');
	if ( magnify.length ) ';

$output211 .= '{
		document.querySelectorAll(\'figure.image\').forEach (
			img => { t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth) }
		)
	}';

$output211 .= '
			';
return $output211;
};
$arguments209 = array();
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['aria'] = NULL;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
$arguments209['async'] = NULL;
$arguments209['crossorigin'] = NULL;
$arguments209['defer'] = NULL;
$arguments209['integrity'] = NULL;
$arguments209['nomodule'] = NULL;
$arguments209['nonce'] = NULL;
$arguments209['referrerpolicy'] = NULL;
$arguments209['src'] = NULL;
$arguments209['type'] = NULL;
$arguments209['identifier'] = NULL;
$arguments209['priority'] = false;
$arguments209['identifier'] = 'vanilla_magnifying';

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
		';
return $output208;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array205);
$array204['1'] = ' && ';
$array206 = array (
);$array204['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array206);

$expression207 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
	';
return $output201;
};

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return ' Sticky footer ';
};
$arguments270 = array();

$output269 .= NULL;

$output269 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return 'html {
	position:relative;
	min-height:100%
}
#page-footer {
	position:absolute;
	bottom:0;
	width:100%
}
';
};
$arguments272 = array();
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['aria'] = NULL;
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['as'] = NULL;
$arguments272['crossorigin'] = NULL;
$arguments272['disabled'] = NULL;
$arguments272['href'] = NULL;
$arguments272['hreflang'] = NULL;
$arguments272['importance'] = NULL;
$arguments272['integrity'] = NULL;
$arguments272['media'] = NULL;
$arguments272['referrerpolicy'] = NULL;
$arguments272['rel'] = NULL;
$arguments272['sizes'] = NULL;
$arguments272['type'] = NULL;
$arguments272['nonce'] = NULL;
$arguments272['identifier'] = NULL;
$arguments272['priority'] = false;
$arguments272['identifier'] = 't3sbs_footerSticky';

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output269 .= '
';
return $output269;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.footerSticky', $array267);

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = $renderChildrenClosure265;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output39 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return ' Link to top ';
};
$arguments274 = array();

$output39 .= NULL;

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return '
	// Link to top - Main.html
	t3sbScrollToTop();
';
};
$arguments283 = array();
$arguments283['additionalAttributes'] = NULL;
$arguments283['data'] = NULL;
$arguments283['aria'] = NULL;
$arguments283['class'] = NULL;
$arguments283['dir'] = NULL;
$arguments283['id'] = NULL;
$arguments283['lang'] = NULL;
$arguments283['style'] = NULL;
$arguments283['title'] = NULL;
$arguments283['accesskey'] = NULL;
$arguments283['tabindex'] = NULL;
$arguments283['onclick'] = NULL;
$arguments283['async'] = NULL;
$arguments283['crossorigin'] = NULL;
$arguments283['defer'] = NULL;
$arguments283['integrity'] = NULL;
$arguments283['nomodule'] = NULL;
$arguments283['nonce'] = NULL;
$arguments283['referrerpolicy'] = NULL;
$arguments283['src'] = NULL;
$arguments283['type'] = NULL;
$arguments283['identifier'] = NULL;
$arguments283['priority'] = false;
$arguments283['identifier'] = 'vanilla_linktotop';

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
';
return $output282;
};
$arguments276 = array();
$arguments276['then'] = NULL;
$arguments276['else'] = NULL;
$arguments276['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_linkToTop', $array279);
$array278['1'] = ' || ';
$array280 = array (
);$array278['2'] = $renderingContext->getVariableProvider()->getByPath('settings.backToTopForAllPages', $array280);

$expression281 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments276['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);
$arguments276['__thenClosure'] = $renderChildrenClosure277;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output39 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['additionalAttributes'] = NULL;
$arguments291['data'] = NULL;
$arguments291['aria'] = NULL;
$arguments291['class'] = NULL;
$arguments291['dir'] = NULL;
$arguments291['id'] = NULL;
$arguments291['lang'] = NULL;
$arguments291['style'] = NULL;
$arguments291['title'] = NULL;
$arguments291['accesskey'] = NULL;
$arguments291['tabindex'] = NULL;
$arguments291['onclick'] = NULL;
$arguments291['async'] = NULL;
$arguments291['crossorigin'] = NULL;
$arguments291['defer'] = NULL;
$arguments291['integrity'] = NULL;
$arguments291['nomodule'] = NULL;
$arguments291['nonce'] = NULL;
$arguments291['referrerpolicy'] = NULL;
$arguments291['src'] = NULL;
$arguments291['type'] = NULL;
$arguments291['identifier'] = NULL;
$arguments291['priority'] = false;
$arguments291['identifier'] = 't3sbmodernizr';
$arguments291['src'] = 'EXT:t3sbootstrap/Resources/Public/Contrib/Modernizr/modernizr.js';

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output290 .= '
';
return $output290;
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('settings.webp', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = $renderChildrenClosure286;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output39 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
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
$arguments306['identifier'] = 'fontawesome';
$arguments306['src'] = 'fileadmin/T3SB/Resources/Public/JS/fontawesome.min.js';

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
	';
return $output305;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array302);
$array301['1'] = ' == \'1\' || ';
$array303 = array (
);$array301['2'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array303);
$array301['3'] = ' == \'3\' ';

$expression304 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '1') || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == '3'));};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['__thenClosure'] = $renderChildrenClosure300;

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['additionalAttributes'] = NULL;
$arguments314['data'] = NULL;
$arguments314['aria'] = NULL;
$arguments314['class'] = NULL;
$arguments314['dir'] = NULL;
$arguments314['id'] = NULL;
$arguments314['lang'] = NULL;
$arguments314['style'] = NULL;
$arguments314['title'] = NULL;
$arguments314['accesskey'] = NULL;
$arguments314['tabindex'] = NULL;
$arguments314['onclick'] = NULL;
$arguments314['async'] = NULL;
$arguments314['crossorigin'] = NULL;
$arguments314['defer'] = NULL;
$arguments314['integrity'] = NULL;
$arguments314['nomodule'] = NULL;
$arguments314['nonce'] = NULL;
$arguments314['referrerpolicy'] = NULL;
$arguments314['src'] = NULL;
$arguments314['type'] = NULL;
$arguments314['identifier'] = NULL;
$arguments314['priority'] = false;
$arguments314['identifier'] = 'fontawesome';
$arguments314['src'] = 'fileadmin/T3SB/FA5Pro/js/all.min.js';

$output313 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
	';
return $output313;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array311);
$array310['1'] = ' == \'2\' ';

$expression312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '2');};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = $renderChildrenClosure309;

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output298 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
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
$arguments322['identifier'] = 'fontawesome';
$arguments322['src'] = 'fileadmin/T3SB/FA6Pro/js/all.min.js';

$output321 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output321 .= '
	';
return $output321;
};
$arguments316 = array();
$arguments316['then'] = NULL;
$arguments316['else'] = NULL;
$arguments316['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array319);
$array318['1'] = ' == \'4\' ';

$expression320 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '4');};
$arguments316['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression320(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array318)
					),
					$renderingContext
				);
$arguments316['__thenClosure'] = $renderChildrenClosure317;

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output298 .= '
';
return $output298;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array295['0'] = '!';
$array296 = array (
);$array295['1'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.cdn', $array296);

$expression297 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments293['__thenClosure'] = $renderChildrenClosure294;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output39 .= '
';

return $output39;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output324 = '';

$output324 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return '
		<h3 class="text-danger text-center mt-5">The main configuration has to be created first on the root page.</h3>
	';
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output579 = '';

$output579 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['section'] = NULL;
$arguments583['partial'] = NULL;
$arguments583['delegate'] = NULL;
$arguments583['renderable'] = NULL;
$arguments583['arguments'] = array (
);
$arguments583['optional'] = false;
$arguments583['default'] = NULL;
$arguments583['contentAs'] = NULL;
$arguments583['debug'] = true;
$arguments583['partial'] = 'FunctionAssets';
$arguments583['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output582 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['section'] = NULL;
$arguments586['partial'] = NULL;
$arguments586['delegate'] = NULL;
$arguments586['renderable'] = NULL;
$arguments586['arguments'] = array (
);
$arguments586['optional'] = false;
$arguments586['default'] = NULL;
$arguments586['contentAs'] = NULL;
$arguments586['debug'] = true;
$arguments586['section'] = 'AssetScripts';
$arguments586['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output582 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return ' GOOGLE TAG MANAGER ';
};
$arguments589 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=';
$array597 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.gtm', $array597)]);

$output596 .= '" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			';
return $output596;
};
$arguments591 = array();
$arguments591['then'] = NULL;
$arguments591['else'] = NULL;
$arguments591['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array593 = array();
$array594 = array (
);$array593['0'] = $renderingContext->getVariableProvider()->getByPath('settings.gtm', $array594);

$expression595 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments591['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression595(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array593)
					),
					$renderingContext
				);
$arguments591['__thenClosure'] = $renderChildrenClosure592;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return ' LOADING SPINNER ';
};
$arguments598 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
				<div id="site-preloader">
					<div id="site-spinner" class="spinner-';
$array606 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array606)]);

$output605 .= ' text-';
$array607 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinnerColor', $array607)]);

$output605 .= '"
						 style="width: 3rem; height: 3rem;" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
				</div>
			';
return $output605;
};
$arguments600 = array();
$arguments600['then'] = NULL;
$arguments600['else'] = NULL;
$arguments600['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array603);

$expression604 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments600['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression604(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array602)
					),
					$renderingContext
				);
$arguments600['__thenClosure'] = $renderChildrenClosure601;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output582 .= '
			<div id="page-wrapper">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output635 = '';

$output635 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return ' META NAVIGATION ';
};
$arguments639 = array();

$output638 .= NULL;

$output638 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure642 = function() use ($renderingContext, $self) {
$output647 = '';

$output647 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['section'] = NULL;
$arguments648['partial'] = NULL;
$arguments648['delegate'] = NULL;
$arguments648['renderable'] = NULL;
$arguments648['arguments'] = array (
);
$arguments648['optional'] = false;
$arguments648['default'] = NULL;
$arguments648['contentAs'] = NULL;
$arguments648['debug'] = true;
$arguments648['partial'] = 'Page/Meta';
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['metaNavigation'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array651);
$array652 = array (
);$array650['config'] = $renderingContext->getVariableProvider()->getByPath('config', $array652);
$arguments648['arguments'] = $array650;

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);

$output647 .= '
						';
return $output647;
};
$arguments641 = array();
$arguments641['then'] = NULL;
$arguments641['else'] = NULL;
$arguments641['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array643 = array();
$array644 = array (
);$array643['0'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array644);
$array643['1'] = ' || ';
$array645 = array (
);$array643['2'] = $renderingContext->getVariableProvider()->getByPath('config.meta.text', $array645);

$expression646 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments641['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression646(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array643)
					),
					$renderingContext
				);
$arguments641['__thenClosure'] = $renderChildrenClosure642;

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments641, $renderChildrenClosure642, $renderingContext);

$output638 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
return ' NAVBAR | JUMBOTRON | BREADCRUMB ';
};
$arguments653 = array();

$output638 .= NULL;

$output638 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['section'] = NULL;
$arguments655['partial'] = NULL;
$arguments655['delegate'] = NULL;
$arguments655['renderable'] = NULL;
$arguments655['arguments'] = array (
);
$arguments655['optional'] = false;
$arguments655['default'] = NULL;
$arguments655['contentAs'] = NULL;
$arguments655['debug'] = true;
$arguments655['partial'] = 'Page/_main';
$arguments655['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output638 .= '
					';
return $output638;
};
$arguments636 = array();
$arguments636['if'] = NULL;

$output635 .= '';

$output635 .= '
				';
return $output635;
};
$arguments608 = array();
$arguments608['then'] = NULL;
$arguments608['else'] = NULL;
$arguments608['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.homepageUid', $array631);
$array630['1'] = ' == ';
$array632 = array (
);$array630['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array632);
$array630['3'] = ' && ';
$array633 = array (
);$array630['4'] = $renderingContext->getVariableProvider()->getByPath('settings.config.contentOnlyOnRootpage', $array633);

$expression634 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments608['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);
$arguments608['__elseClosures'][] = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return ' META NAVIGATION ';
};
$arguments611 = array();

$output610 .= NULL;

$output610 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output619 = '';

$output619 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments620 = array();
$arguments620['section'] = NULL;
$arguments620['partial'] = NULL;
$arguments620['delegate'] = NULL;
$arguments620['renderable'] = NULL;
$arguments620['arguments'] = array (
);
$arguments620['optional'] = false;
$arguments620['default'] = NULL;
$arguments620['contentAs'] = NULL;
$arguments620['debug'] = true;
$arguments620['partial'] = 'Page/Meta';
// Rendering Array
$array622 = array();
$array623 = array (
);$array622['metaNavigation'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array623);
$array624 = array (
);$array622['config'] = $renderingContext->getVariableProvider()->getByPath('config', $array624);
$arguments620['arguments'] = $array622;

$output619 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments620, $renderChildrenClosure621, $renderingContext);

$output619 .= '
						';
return $output619;
};
$arguments613 = array();
$arguments613['then'] = NULL;
$arguments613['else'] = NULL;
$arguments613['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array615 = array();
$array616 = array (
);$array615['0'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array616);
$array615['1'] = ' || ';
$array617 = array (
);$array615['2'] = $renderingContext->getVariableProvider()->getByPath('config.meta.text', $array617);

$expression618 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments613['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression618(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array615)
					),
					$renderingContext
				);
$arguments613['__thenClosure'] = $renderChildrenClosure614;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);

$output610 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return ' NAVBAR | JUMBOTRON | BREADCRUMB ';
};
$arguments625 = array();

$output610 .= NULL;

$output610 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments627 = array();
$arguments627['section'] = NULL;
$arguments627['partial'] = NULL;
$arguments627['delegate'] = NULL;
$arguments627['renderable'] = NULL;
$arguments627['arguments'] = array (
);
$arguments627['optional'] = false;
$arguments627['default'] = NULL;
$arguments627['contentAs'] = NULL;
$arguments627['debug'] = true;
$arguments627['partial'] = 'Page/_main';
$arguments627['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output610 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output610 .= '
					';
return $output610;
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output582 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return ' EXPANDED CONTENT TOP ';
};
$arguments658 = array();

$output582 .= NULL;

$output582 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output666 = '';

$output666 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments667 = array();
$arguments667['section'] = NULL;
$arguments667['partial'] = NULL;
$arguments667['delegate'] = NULL;
$arguments667['renderable'] = NULL;
$arguments667['arguments'] = array (
);
$arguments667['optional'] = false;
$arguments667['default'] = NULL;
$arguments667['contentAs'] = NULL;
$arguments667['debug'] = true;
$arguments667['partial'] = 'Page/ExpandedContent/Top';
$arguments667['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output666 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output666 .= '
				';
return $output666;
};
$arguments660 = array();
$arguments660['then'] = NULL;
$arguments660['else'] = NULL;
$arguments660['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array662 = array();
$array663 = array (
);$array662['0'] = $renderingContext->getVariableProvider()->getByPath('settings.expandedContent', $array663);
$array662['1'] = ' && ';
$array664 = array (
);$array662['2'] = $renderingContext->getVariableProvider()->getByPath('config.expandedcontentTop.enable', $array664);

$expression665 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments660['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression665(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array662)
					),
					$renderingContext
				);
$arguments660['__thenClosure'] = $renderChildrenClosure661;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output582 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return ' PAGE CONTENT ';
};
$arguments670 = array();

$output582 .= NULL;

$output582 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$output709 = '';

$output709 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
						<div class="';
$array713 = array (
);
$output712 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array713)]);

$output712 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments714 = array();
$arguments714['section'] = NULL;
$arguments714['partial'] = NULL;
$arguments714['delegate'] = NULL;
$arguments714['renderable'] = NULL;
$arguments714['arguments'] = array (
);
$arguments714['optional'] = false;
$arguments714['default'] = NULL;
$arguments714['contentAs'] = NULL;
$arguments714['debug'] = true;
$arguments714['section'] = 'PageContent';
$arguments714['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output712 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext);

$output712 .= '
						</div>
					';
return $output712;
};
$arguments710 = array();

$output709 .= '';

$output709 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
$output733 = '';

$output733 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
$output736 = '';

$output736 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure738 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments737 = array();
$arguments737['section'] = NULL;
$arguments737['partial'] = NULL;
$arguments737['delegate'] = NULL;
$arguments737['renderable'] = NULL;
$arguments737['arguments'] = array (
);
$arguments737['optional'] = false;
$arguments737['default'] = NULL;
$arguments737['contentAs'] = NULL;
$arguments737['debug'] = true;
$arguments737['section'] = 'PageContent';
$arguments737['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output736 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments737, $renderChildrenClosure738, $renderingContext);

$output736 .= '
							';
return $output736;
};
$arguments734 = array();

$output733 .= '';

$output733 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['section'] = NULL;
$arguments743['partial'] = NULL;
$arguments743['delegate'] = NULL;
$arguments743['renderable'] = NULL;
$arguments743['arguments'] = array (
);
$arguments743['optional'] = false;
$arguments743['default'] = NULL;
$arguments743['contentAs'] = NULL;
$arguments743['debug'] = true;
$arguments743['section'] = 'PageContent';
$arguments743['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output742 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output742 .= '
								</div>
							';
return $output742;
};
$arguments740 = array();
$arguments740['if'] = NULL;

$output733 .= '';

$output733 .= '
						';
return $output733;
};
$arguments720 = array();
$arguments720['then'] = NULL;
$arguments720['else'] = NULL;
$arguments720['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array730 = array();
$array731 = array (
);$array730['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array731);
$array730['1'] = ' == \'OneCol\'';

$expression732 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'OneCol');};
$arguments720['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression732(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array730)
					),
					$renderingContext
				);
$arguments720['__thenClosure'] = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments723 = array();
$arguments723['section'] = NULL;
$arguments723['partial'] = NULL;
$arguments723['delegate'] = NULL;
$arguments723['renderable'] = NULL;
$arguments723['arguments'] = array (
);
$arguments723['optional'] = false;
$arguments723['default'] = NULL;
$arguments723['contentAs'] = NULL;
$arguments723['debug'] = true;
$arguments723['section'] = 'PageContent';
$arguments723['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output722 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output722 .= '
							';
return $output722;
};
$arguments720['__elseClosures'][] = function() use ($renderingContext, $self) {
$output726 = '';

$output726 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['section'] = NULL;
$arguments727['partial'] = NULL;
$arguments727['delegate'] = NULL;
$arguments727['renderable'] = NULL;
$arguments727['arguments'] = array (
);
$arguments727['optional'] = false;
$arguments727['default'] = NULL;
$arguments727['contentAs'] = NULL;
$arguments727['debug'] = true;
$arguments727['section'] = 'PageContent';
$arguments727['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output726 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);

$output726 .= '
								</div>
							';
return $output726;
};

$output719 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments720, $renderChildrenClosure721, $renderingContext);

$output719 .= '
					';
return $output719;
};
$arguments717 = array();
$arguments717['if'] = NULL;

$output709 .= '';

$output709 .= '
				';
return $output709;
};
$arguments672 = array();
$arguments672['then'] = NULL;
$arguments672['else'] = NULL;
$arguments672['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array706 = array();
$array707 = array (
);$array706['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array707);

$expression708 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments672['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression708(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array706)
					),
					$renderingContext
				);
$arguments672['__thenClosure'] = function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
						<div class="';
$array675 = array (
);
$output674 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array675)]);

$output674 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments676 = array();
$arguments676['section'] = NULL;
$arguments676['partial'] = NULL;
$arguments676['delegate'] = NULL;
$arguments676['renderable'] = NULL;
$arguments676['arguments'] = array (
);
$arguments676['optional'] = false;
$arguments676['default'] = NULL;
$arguments676['contentAs'] = NULL;
$arguments676['debug'] = true;
$arguments676['section'] = 'PageContent';
$arguments676['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output674 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output674 .= '
						</div>
					';
return $output674;
};
$arguments672['__elseClosures'][] = function() use ($renderingContext, $self) {
$output679 = '';

$output679 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['section'] = NULL;
$arguments697['partial'] = NULL;
$arguments697['delegate'] = NULL;
$arguments697['renderable'] = NULL;
$arguments697['arguments'] = array (
);
$arguments697['optional'] = false;
$arguments697['default'] = NULL;
$arguments697['contentAs'] = NULL;
$arguments697['debug'] = true;
$arguments697['section'] = 'PageContent';
$arguments697['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
							';
return $output696;
};
$arguments694 = array();

$output693 .= '';

$output693 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
$output702 = '';

$output702 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['section'] = NULL;
$arguments703['partial'] = NULL;
$arguments703['delegate'] = NULL;
$arguments703['renderable'] = NULL;
$arguments703['arguments'] = array (
);
$arguments703['optional'] = false;
$arguments703['default'] = NULL;
$arguments703['contentAs'] = NULL;
$arguments703['debug'] = true;
$arguments703['section'] = 'PageContent';
$arguments703['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output702 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);

$output702 .= '
								</div>
							';
return $output702;
};
$arguments700 = array();
$arguments700['if'] = NULL;

$output693 .= '';

$output693 .= '
						';
return $output693;
};
$arguments680 = array();
$arguments680['then'] = NULL;
$arguments680['else'] = NULL;
$arguments680['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array690 = array();
$array691 = array (
);$array690['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array691);
$array690['1'] = ' == \'OneCol\'';

$expression692 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'OneCol');};
$arguments680['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression692(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array690)
					),
					$renderingContext
				);
$arguments680['__thenClosure'] = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['section'] = NULL;
$arguments683['partial'] = NULL;
$arguments683['delegate'] = NULL;
$arguments683['renderable'] = NULL;
$arguments683['arguments'] = array (
);
$arguments683['optional'] = false;
$arguments683['default'] = NULL;
$arguments683['contentAs'] = NULL;
$arguments683['debug'] = true;
$arguments683['section'] = 'PageContent';
$arguments683['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output682 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output682 .= '
							';
return $output682;
};
$arguments680['__elseClosures'][] = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['section'] = NULL;
$arguments687['partial'] = NULL;
$arguments687['delegate'] = NULL;
$arguments687['renderable'] = NULL;
$arguments687['arguments'] = array (
);
$arguments687['optional'] = false;
$arguments687['default'] = NULL;
$arguments687['contentAs'] = NULL;
$arguments687['debug'] = true;
$arguments687['section'] = 'PageContent';
$arguments687['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output686 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output686 .= '
								</div>
							';
return $output686;
};

$output679 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output679 .= '
					';
return $output679;
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext);

$output582 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return ' EXPANDED CONTENT BOTTOM ';
};
$arguments746 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['section'] = NULL;
$arguments755['partial'] = NULL;
$arguments755['delegate'] = NULL;
$arguments755['renderable'] = NULL;
$arguments755['arguments'] = array (
);
$arguments755['optional'] = false;
$arguments755['default'] = NULL;
$arguments755['contentAs'] = NULL;
$arguments755['debug'] = true;
$arguments755['partial'] = 'Page/ExpandedContent/Bottom';
$arguments755['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output754 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

$output754 .= '
			';
return $output754;
};
$arguments748 = array();
$arguments748['then'] = NULL;
$arguments748['else'] = NULL;
$arguments748['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array750 = array();
$array751 = array (
);$array750['0'] = $renderingContext->getVariableProvider()->getByPath('settings.expandedContent', $array751);
$array750['1'] = ' && ';
$array752 = array (
);$array750['2'] = $renderingContext->getVariableProvider()->getByPath('config.expandedcontentBottom.enable', $array752);

$expression753 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments748['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression753(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array750)
					),
					$renderingContext
				);
$arguments748['__thenClosure'] = $renderChildrenClosure749;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
return ' BREADCRUMB BOTTOM ';
};
$arguments758 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
				<div class="breadcrumb-bottom">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments766 = array();
$arguments766['section'] = NULL;
$arguments766['partial'] = NULL;
$arguments766['delegate'] = NULL;
$arguments766['renderable'] = NULL;
$arguments766['arguments'] = array (
);
$arguments766['optional'] = false;
$arguments766['default'] = NULL;
$arguments766['contentAs'] = NULL;
$arguments766['debug'] = true;
$arguments766['partial'] = 'Page/Breadcrumb';
$arguments766['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output765 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments766, $renderChildrenClosure767, $renderingContext);

$output765 .= '
				</div>
			';
return $output765;
};
$arguments760 = array();
$arguments760['then'] = NULL;
$arguments760['else'] = NULL;
$arguments760['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array762 = array();
$array763 = array (
);$array762['0'] = $renderingContext->getVariableProvider()->getByPath('config.breadcrumb.bottom', $array763);

$expression764 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments760['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression764(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array762)
					),
					$renderingContext
				);
$arguments760['__thenClosure'] = $renderChildrenClosure761;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
return ' PAGEBROWSER ';
};
$arguments769 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
$output776 = '';

$output776 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments777 = array();
$arguments777['section'] = NULL;
$arguments777['partial'] = NULL;
$arguments777['delegate'] = NULL;
$arguments777['renderable'] = NULL;
$arguments777['arguments'] = array (
);
$arguments777['optional'] = false;
$arguments777['default'] = NULL;
$arguments777['contentAs'] = NULL;
$arguments777['debug'] = true;
$arguments777['partial'] = 'Page/Pagebrowser';
$arguments777['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output776 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output776 .= '
			';
return $output776;
};
$arguments771 = array();
$arguments771['then'] = NULL;
$arguments771['else'] = NULL;
$arguments771['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array773 = array();
$array774 = array (
);$array773['0'] = $renderingContext->getVariableProvider()->getByPath('settings.pagebrowser.enable', $array774);

$expression775 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments771['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression775(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array773)
					),
					$renderingContext
				);
$arguments771['__thenClosure'] = $renderChildrenClosure772;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments771, $renderChildrenClosure772, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return ' FOOTER ';
};
$arguments780 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
$output799 = '';

$output799 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
$output802 = '';

$output802 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure804 = function() use ($renderingContext, $self) {
$output808 = '';

$output808 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments809 = array();
$arguments809['section'] = NULL;
$arguments809['partial'] = NULL;
$arguments809['delegate'] = NULL;
$arguments809['renderable'] = NULL;
$arguments809['arguments'] = array (
);
$arguments809['optional'] = false;
$arguments809['default'] = NULL;
$arguments809['contentAs'] = NULL;
$arguments809['debug'] = true;
$arguments809['partial'] = 'Page/Footer';
$arguments809['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output808 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments809, $renderChildrenClosure810, $renderingContext);

$output808 .= '
					';
return $output808;
};
$arguments803 = array();
$arguments803['then'] = NULL;
$arguments803['else'] = NULL;
$arguments803['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array805 = array();
$array806 = array (
);$array805['0'] = $renderingContext->getVariableProvider()->getByPath('config.footer.enable', $array806);

$expression807 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments803['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression807(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array805)
					),
					$renderingContext
				);
$arguments803['__thenClosure'] = $renderChildrenClosure804;

$output802 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments803, $renderChildrenClosure804, $renderingContext);

$output802 .= '
				';
return $output802;
};
$arguments800 = array();
$arguments800['if'] = NULL;

$output799 .= '';

$output799 .= '
			';
return $output799;
};
$arguments782 = array();
$arguments782['then'] = NULL;
$arguments782['else'] = NULL;
$arguments782['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array794 = array();
$array795 = array (
);$array794['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.homepageUid', $array795);
$array794['1'] = ' == ';
$array796 = array (
);$array794['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array796);
$array794['3'] = ' && ';
$array797 = array (
);$array794['4'] = $renderingContext->getVariableProvider()->getByPath('settings.config.contentOnlyOnRootpage', $array797);

$expression798 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments782['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression798(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array794)
					),
					$renderingContext
				);
$arguments782['__elseClosures'][] = function() use ($renderingContext, $self) {
$output784 = '';

$output784 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
$output790 = '';

$output790 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments791 = array();
$arguments791['section'] = NULL;
$arguments791['partial'] = NULL;
$arguments791['delegate'] = NULL;
$arguments791['renderable'] = NULL;
$arguments791['arguments'] = array (
);
$arguments791['optional'] = false;
$arguments791['default'] = NULL;
$arguments791['contentAs'] = NULL;
$arguments791['debug'] = true;
$arguments791['partial'] = 'Page/Footer';
$arguments791['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output790 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments791, $renderChildrenClosure792, $renderingContext);

$output790 .= '
					';
return $output790;
};
$arguments785 = array();
$arguments785['then'] = NULL;
$arguments785['else'] = NULL;
$arguments785['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array787 = array();
$array788 = array (
);$array787['0'] = $renderingContext->getVariableProvider()->getByPath('config.footer.enable', $array788);

$expression789 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments785['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression789(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array787)
					),
					$renderingContext
				);
$arguments785['__thenClosure'] = $renderChildrenClosure786;

$output784 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext);

$output784 .= '
				';
return $output784;
};

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext);

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
return ' BACK TO TOP BUTTON ';
};
$arguments812 = array();

$output582 .= NULL;

$output582 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
				<p class="back-to-top st-none" title="';
$array821 = array (
);
$output820 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.backToTopTitle', $array821)]);

$output820 .= '" style="cursor: pointer;">
					<i class="';
$array822 = array (
);
$output820 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.backToTopClass', $array822)]);

$output820 .= '"></i> <span class="d-none">back-to-top</span>
				</p>
			';
return $output820;
};
$arguments814 = array();
$arguments814['then'] = NULL;
$arguments814['else'] = NULL;
$arguments814['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array816 = array();
$array817 = array (
);$array816['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_linkToTop', $array817);
$array816['1'] = ' || ';
$array818 = array (
);$array816['2'] = $renderingContext->getVariableProvider()->getByPath('settings.backToTopForAllPages', $array818);

$expression819 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments814['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression819(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array816)
					),
					$renderingContext
				);
$arguments814['__thenClosure'] = $renderChildrenClosure815;

$output582 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext);

$output582 .= '
		';
return $output582;
};
$arguments580 = array();

$output579 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments580, $renderChildrenClosure581, $renderingContext);

$output579 .= '
	';
return $output579;
};
$arguments577 = array();
$arguments577['if'] = NULL;

$output574 .= '';

$output574 .= '
';
return $output574;
};
$arguments325 = array();
$arguments325['then'] = NULL;
$arguments325['else'] = NULL;
$arguments325['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array571 = array();
$array572 = array (
);$array571['0'] = $renderingContext->getVariableProvider()->getByPath('noConfig', $array572);

$expression573 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments325['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array571)
					),
					$renderingContext
				);
$arguments325['__thenClosure'] = function() use ($renderingContext, $self) {
return '
		<h3 class="text-danger text-center mt-5">The main configuration has to be created first on the root page.</h3>
	';
};
$arguments325['__elseClosures'][] = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['section'] = NULL;
$arguments331['partial'] = NULL;
$arguments331['delegate'] = NULL;
$arguments331['renderable'] = NULL;
$arguments331['arguments'] = array (
);
$arguments331['optional'] = false;
$arguments331['default'] = NULL;
$arguments331['contentAs'] = NULL;
$arguments331['debug'] = true;
$arguments331['partial'] = 'FunctionAssets';
$arguments331['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['section'] = NULL;
$arguments334['partial'] = NULL;
$arguments334['delegate'] = NULL;
$arguments334['renderable'] = NULL;
$arguments334['arguments'] = array (
);
$arguments334['optional'] = false;
$arguments334['default'] = NULL;
$arguments334['contentAs'] = NULL;
$arguments334['debug'] = true;
$arguments334['section'] = 'AssetScripts';
$arguments334['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output330 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return ' GOOGLE TAG MANAGER ';
};
$arguments337 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=';
$array345 = array (
);
$output344 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.gtm', $array345)]);

$output344 .= '" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			';
return $output344;
};
$arguments339 = array();
$arguments339['then'] = NULL;
$arguments339['else'] = NULL;
$arguments339['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['0'] = $renderingContext->getVariableProvider()->getByPath('settings.gtm', $array342);

$expression343 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments339['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array341)
					),
					$renderingContext
				);
$arguments339['__thenClosure'] = $renderChildrenClosure340;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return ' LOADING SPINNER ';
};
$arguments346 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
				<div id="site-preloader">
					<div id="site-spinner" class="spinner-';
$array354 = array (
);
$output353 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array354)]);

$output353 .= ' text-';
$array355 = array (
);
$output353 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinnerColor', $array355)]);

$output353 .= '"
						 style="width: 3rem; height: 3rem;" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
				</div>
			';
return $output353;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array350 = array();
$array351 = array (
);$array350['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array351);

$expression352 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array350)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = $renderChildrenClosure349;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output330 .= '
			<div id="page-wrapper">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return ' META NAVIGATION ';
};
$arguments387 = array();

$output386 .= NULL;

$output386 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['section'] = NULL;
$arguments396['partial'] = NULL;
$arguments396['delegate'] = NULL;
$arguments396['renderable'] = NULL;
$arguments396['arguments'] = array (
);
$arguments396['optional'] = false;
$arguments396['default'] = NULL;
$arguments396['contentAs'] = NULL;
$arguments396['debug'] = true;
$arguments396['partial'] = 'Page/Meta';
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['metaNavigation'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array399);
$array400 = array (
);$array398['config'] = $renderingContext->getVariableProvider()->getByPath('config', $array400);
$arguments396['arguments'] = $array398;

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
						';
return $output395;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['0'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array392);
$array391['1'] = ' || ';
$array393 = array (
);$array391['2'] = $renderingContext->getVariableProvider()->getByPath('config.meta.text', $array393);

$expression394 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = $renderChildrenClosure390;

$output386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output386 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return ' NAVBAR | JUMBOTRON | BREADCRUMB ';
};
$arguments401 = array();

$output386 .= NULL;

$output386 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['section'] = NULL;
$arguments403['partial'] = NULL;
$arguments403['delegate'] = NULL;
$arguments403['renderable'] = NULL;
$arguments403['arguments'] = array (
);
$arguments403['optional'] = false;
$arguments403['default'] = NULL;
$arguments403['contentAs'] = NULL;
$arguments403['debug'] = true;
$arguments403['partial'] = 'Page/_main';
$arguments403['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output386 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output386 .= '
					';
return $output386;
};
$arguments384 = array();
$arguments384['if'] = NULL;

$output383 .= '';

$output383 .= '
				';
return $output383;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.homepageUid', $array379);
$array378['1'] = ' == ';
$array380 = array (
);$array378['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array380);
$array378['3'] = ' && ';
$array381 = array (
);$array378['4'] = $renderingContext->getVariableProvider()->getByPath('settings.config.contentOnlyOnRootpage', $array381);

$expression382 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments356['__elseClosures'][] = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return ' META NAVIGATION ';
};
$arguments359 = array();

$output358 .= NULL;

$output358 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['section'] = NULL;
$arguments368['partial'] = NULL;
$arguments368['delegate'] = NULL;
$arguments368['renderable'] = NULL;
$arguments368['arguments'] = array (
);
$arguments368['optional'] = false;
$arguments368['default'] = NULL;
$arguments368['contentAs'] = NULL;
$arguments368['debug'] = true;
$arguments368['partial'] = 'Page/Meta';
// Rendering Array
$array370 = array();
$array371 = array (
);$array370['metaNavigation'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array371);
$array372 = array (
);$array370['config'] = $renderingContext->getVariableProvider()->getByPath('config', $array372);
$arguments368['arguments'] = $array370;

$output367 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
						';
return $output367;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('metaNavigation', $array364);
$array363['1'] = ' || ';
$array365 = array (
);$array363['2'] = $renderingContext->getVariableProvider()->getByPath('config.meta.text', $array365);

$expression366 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = $renderChildrenClosure362;

$output358 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output358 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return ' NAVBAR | JUMBOTRON | BREADCRUMB ';
};
$arguments373 = array();

$output358 .= NULL;

$output358 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['section'] = NULL;
$arguments375['partial'] = NULL;
$arguments375['delegate'] = NULL;
$arguments375['renderable'] = NULL;
$arguments375['arguments'] = array (
);
$arguments375['optional'] = false;
$arguments375['default'] = NULL;
$arguments375['contentAs'] = NULL;
$arguments375['debug'] = true;
$arguments375['partial'] = 'Page/_main';
$arguments375['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output358 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output358 .= '
					';
return $output358;
};

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return ' EXPANDED CONTENT TOP ';
};
$arguments406 = array();

$output330 .= NULL;

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['section'] = NULL;
$arguments415['partial'] = NULL;
$arguments415['delegate'] = NULL;
$arguments415['renderable'] = NULL;
$arguments415['arguments'] = array (
);
$arguments415['optional'] = false;
$arguments415['default'] = NULL;
$arguments415['contentAs'] = NULL;
$arguments415['debug'] = true;
$arguments415['partial'] = 'Page/ExpandedContent/Top';
$arguments415['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output414 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output414 .= '
				';
return $output414;
};
$arguments408 = array();
$arguments408['then'] = NULL;
$arguments408['else'] = NULL;
$arguments408['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('settings.expandedContent', $array411);
$array410['1'] = ' && ';
$array412 = array (
);$array410['2'] = $renderingContext->getVariableProvider()->getByPath('config.expandedcontentTop.enable', $array412);

$expression413 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments408['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments408['__thenClosure'] = $renderChildrenClosure409;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return ' PAGE CONTENT ';
};
$arguments418 = array();

$output330 .= NULL;

$output330 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
						<div class="';
$array461 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array461)]);

$output460 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['section'] = NULL;
$arguments462['partial'] = NULL;
$arguments462['delegate'] = NULL;
$arguments462['renderable'] = NULL;
$arguments462['arguments'] = array (
);
$arguments462['optional'] = false;
$arguments462['default'] = NULL;
$arguments462['contentAs'] = NULL;
$arguments462['debug'] = true;
$arguments462['section'] = 'PageContent';
$arguments462['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output460 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output460 .= '
						</div>
					';
return $output460;
};
$arguments458 = array();

$output457 .= '';

$output457 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['section'] = NULL;
$arguments485['partial'] = NULL;
$arguments485['delegate'] = NULL;
$arguments485['renderable'] = NULL;
$arguments485['arguments'] = array (
);
$arguments485['optional'] = false;
$arguments485['default'] = NULL;
$arguments485['contentAs'] = NULL;
$arguments485['debug'] = true;
$arguments485['section'] = 'PageContent';
$arguments485['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output484 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
							';
return $output484;
};
$arguments482 = array();

$output481 .= '';

$output481 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['section'] = NULL;
$arguments491['partial'] = NULL;
$arguments491['delegate'] = NULL;
$arguments491['renderable'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['optional'] = false;
$arguments491['default'] = NULL;
$arguments491['contentAs'] = NULL;
$arguments491['debug'] = true;
$arguments491['section'] = 'PageContent';
$arguments491['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output490 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= '
								</div>
							';
return $output490;
};
$arguments488 = array();
$arguments488['if'] = NULL;

$output481 .= '';

$output481 .= '
						';
return $output481;
};
$arguments468 = array();
$arguments468['then'] = NULL;
$arguments468['else'] = NULL;
$arguments468['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array478 = array();
$array479 = array (
);$array478['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array479);
$array478['1'] = ' == \'OneCol\'';

$expression480 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'OneCol');};
$arguments468['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression480(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array478)
					),
					$renderingContext
				);
$arguments468['__thenClosure'] = function() use ($renderingContext, $self) {
$output470 = '';

$output470 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['section'] = NULL;
$arguments471['partial'] = NULL;
$arguments471['delegate'] = NULL;
$arguments471['renderable'] = NULL;
$arguments471['arguments'] = array (
);
$arguments471['optional'] = false;
$arguments471['default'] = NULL;
$arguments471['contentAs'] = NULL;
$arguments471['debug'] = true;
$arguments471['section'] = 'PageContent';
$arguments471['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output470 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output470 .= '
							';
return $output470;
};
$arguments468['__elseClosures'][] = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['section'] = NULL;
$arguments475['partial'] = NULL;
$arguments475['delegate'] = NULL;
$arguments475['renderable'] = NULL;
$arguments475['arguments'] = array (
);
$arguments475['optional'] = false;
$arguments475['default'] = NULL;
$arguments475['contentAs'] = NULL;
$arguments475['debug'] = true;
$arguments475['section'] = 'PageContent';
$arguments475['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output474 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output474 .= '
								</div>
							';
return $output474;
};

$output467 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
					';
return $output467;
};
$arguments465 = array();
$arguments465['if'] = NULL;

$output457 .= '';

$output457 .= '
				';
return $output457;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array454 = array();
$array455 = array (
);$array454['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array455);

$expression456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array454)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
						<div class="';
$array423 = array (
);
$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_container', $array423)]);

$output422 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments424 = array();
$arguments424['section'] = NULL;
$arguments424['partial'] = NULL;
$arguments424['delegate'] = NULL;
$arguments424['renderable'] = NULL;
$arguments424['arguments'] = array (
);
$arguments424['optional'] = false;
$arguments424['default'] = NULL;
$arguments424['contentAs'] = NULL;
$arguments424['debug'] = true;
$arguments424['section'] = 'PageContent';
$arguments424['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output422 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output422 .= '
						</div>
					';
return $output422;
};
$arguments420['__elseClosures'][] = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['section'] = NULL;
$arguments445['partial'] = NULL;
$arguments445['delegate'] = NULL;
$arguments445['renderable'] = NULL;
$arguments445['arguments'] = array (
);
$arguments445['optional'] = false;
$arguments445['default'] = NULL;
$arguments445['contentAs'] = NULL;
$arguments445['debug'] = true;
$arguments445['section'] = 'PageContent';
$arguments445['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output444 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output444 .= '
							';
return $output444;
};
$arguments442 = array();

$output441 .= '';

$output441 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['section'] = NULL;
$arguments451['partial'] = NULL;
$arguments451['delegate'] = NULL;
$arguments451['renderable'] = NULL;
$arguments451['arguments'] = array (
);
$arguments451['optional'] = false;
$arguments451['default'] = NULL;
$arguments451['contentAs'] = NULL;
$arguments451['debug'] = true;
$arguments451['section'] = 'PageContent';
$arguments451['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output450 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output450 .= '
								</div>
							';
return $output450;
};
$arguments448 = array();
$arguments448['if'] = NULL;

$output441 .= '';

$output441 .= '
						';
return $output441;
};
$arguments428 = array();
$arguments428['then'] = NULL;
$arguments428['else'] = NULL;
$arguments428['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array438 = array();
$array439 = array (
);$array438['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array439);
$array438['1'] = ' == \'OneCol\'';

$expression440 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'OneCol');};
$arguments428['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression440(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array438)
					),
					$renderingContext
				);
$arguments428['__thenClosure'] = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['section'] = NULL;
$arguments431['partial'] = NULL;
$arguments431['delegate'] = NULL;
$arguments431['renderable'] = NULL;
$arguments431['arguments'] = array (
);
$arguments431['optional'] = false;
$arguments431['default'] = NULL;
$arguments431['contentAs'] = NULL;
$arguments431['debug'] = true;
$arguments431['section'] = 'PageContent';
$arguments431['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output430 .= '
							';
return $output430;
};
$arguments428['__elseClosures'][] = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
								<div class="container">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['section'] = NULL;
$arguments435['partial'] = NULL;
$arguments435['delegate'] = NULL;
$arguments435['renderable'] = NULL;
$arguments435['arguments'] = array (
);
$arguments435['optional'] = false;
$arguments435['default'] = NULL;
$arguments435['contentAs'] = NULL;
$arguments435['debug'] = true;
$arguments435['section'] = 'PageContent';
$arguments435['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output434 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
								</div>
							';
return $output434;
};

$output427 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output427 .= '
					';
return $output427;
};

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output330 .= '
			</div>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
return ' EXPANDED CONTENT BOTTOM ';
};
$arguments494 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output502 = '';

$output502 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['section'] = NULL;
$arguments503['partial'] = NULL;
$arguments503['delegate'] = NULL;
$arguments503['renderable'] = NULL;
$arguments503['arguments'] = array (
);
$arguments503['optional'] = false;
$arguments503['default'] = NULL;
$arguments503['contentAs'] = NULL;
$arguments503['debug'] = true;
$arguments503['partial'] = 'Page/ExpandedContent/Bottom';
$arguments503['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output502 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output502 .= '
			';
return $output502;
};
$arguments496 = array();
$arguments496['then'] = NULL;
$arguments496['else'] = NULL;
$arguments496['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['0'] = $renderingContext->getVariableProvider()->getByPath('settings.expandedContent', $array499);
$array498['1'] = ' && ';
$array500 = array (
);$array498['2'] = $renderingContext->getVariableProvider()->getByPath('config.expandedcontentBottom.enable', $array500);

$expression501 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments496['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments496['__thenClosure'] = $renderChildrenClosure497;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return ' BREADCRUMB BOTTOM ';
};
$arguments506 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
				<div class="breadcrumb-bottom">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['section'] = NULL;
$arguments514['partial'] = NULL;
$arguments514['delegate'] = NULL;
$arguments514['renderable'] = NULL;
$arguments514['arguments'] = array (
);
$arguments514['optional'] = false;
$arguments514['default'] = NULL;
$arguments514['contentAs'] = NULL;
$arguments514['debug'] = true;
$arguments514['partial'] = 'Page/Breadcrumb';
$arguments514['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext);

$output513 .= '
				</div>
			';
return $output513;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array510 = array();
$array511 = array (
);$array510['0'] = $renderingContext->getVariableProvider()->getByPath('config.breadcrumb.bottom', $array511);

$expression512 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression512(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array510)
					),
					$renderingContext
				);
$arguments508['__thenClosure'] = $renderChildrenClosure509;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return ' PAGEBROWSER ';
};
$arguments517 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['section'] = NULL;
$arguments525['partial'] = NULL;
$arguments525['delegate'] = NULL;
$arguments525['renderable'] = NULL;
$arguments525['arguments'] = array (
);
$arguments525['optional'] = false;
$arguments525['default'] = NULL;
$arguments525['contentAs'] = NULL;
$arguments525['debug'] = true;
$arguments525['partial'] = 'Page/Pagebrowser';
$arguments525['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output524 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output524 .= '
			';
return $output524;
};
$arguments519 = array();
$arguments519['then'] = NULL;
$arguments519['else'] = NULL;
$arguments519['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array521 = array();
$array522 = array (
);$array521['0'] = $renderingContext->getVariableProvider()->getByPath('settings.pagebrowser.enable', $array522);

$expression523 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments519['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression523(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array521)
					),
					$renderingContext
				);
$arguments519['__thenClosure'] = $renderChildrenClosure520;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return ' FOOTER ';
};
$arguments528 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
$output550 = '';

$output550 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$output556 = '';

$output556 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments557 = array();
$arguments557['section'] = NULL;
$arguments557['partial'] = NULL;
$arguments557['delegate'] = NULL;
$arguments557['renderable'] = NULL;
$arguments557['arguments'] = array (
);
$arguments557['optional'] = false;
$arguments557['default'] = NULL;
$arguments557['contentAs'] = NULL;
$arguments557['debug'] = true;
$arguments557['partial'] = 'Page/Footer';
$arguments557['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output556 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);

$output556 .= '
					';
return $output556;
};
$arguments551 = array();
$arguments551['then'] = NULL;
$arguments551['else'] = NULL;
$arguments551['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array553 = array();
$array554 = array (
);$array553['0'] = $renderingContext->getVariableProvider()->getByPath('config.footer.enable', $array554);

$expression555 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments551['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression555(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array553)
					),
					$renderingContext
				);
$arguments551['__thenClosure'] = $renderChildrenClosure552;

$output550 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);

$output550 .= '
				';
return $output550;
};
$arguments548 = array();
$arguments548['if'] = NULL;

$output547 .= '';

$output547 .= '
			';
return $output547;
};
$arguments530 = array();
$arguments530['then'] = NULL;
$arguments530['else'] = NULL;
$arguments530['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array542 = array();
$array543 = array (
);$array542['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.homepageUid', $array543);
$array542['1'] = ' == ';
$array544 = array (
);$array542['2'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array544);
$array542['3'] = ' && ';
$array545 = array (
);$array542['4'] = $renderingContext->getVariableProvider()->getByPath('settings.config.contentOnlyOnRootpage', $array545);

$expression546 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments530['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array542)
					),
					$renderingContext
				);
$arguments530['__elseClosures'][] = function() use ($renderingContext, $self) {
$output532 = '';

$output532 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments539 = array();
$arguments539['section'] = NULL;
$arguments539['partial'] = NULL;
$arguments539['delegate'] = NULL;
$arguments539['renderable'] = NULL;
$arguments539['arguments'] = array (
);
$arguments539['optional'] = false;
$arguments539['default'] = NULL;
$arguments539['contentAs'] = NULL;
$arguments539['debug'] = true;
$arguments539['partial'] = 'Page/Footer';
$arguments539['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output538 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output538 .= '
					';
return $output538;
};
$arguments533 = array();
$arguments533['then'] = NULL;
$arguments533['else'] = NULL;
$arguments533['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array535 = array();
$array536 = array (
);$array535['0'] = $renderingContext->getVariableProvider()->getByPath('config.footer.enable', $array536);

$expression537 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments533['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression537(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array535)
					),
					$renderingContext
				);
$arguments533['__thenClosure'] = $renderChildrenClosure534;

$output532 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output532 .= '
				';
return $output532;
};

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return ' BACK TO TOP BUTTON ';
};
$arguments560 = array();

$output330 .= NULL;

$output330 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
				<p class="back-to-top st-none" title="';
$array569 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.backToTopTitle', $array569)]);

$output568 .= '" style="cursor: pointer;">
					<i class="';
$array570 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.backToTopClass', $array570)]);

$output568 .= '"></i> <span class="d-none">back-to-top</span>
				</p>
			';
return $output568;
};
$arguments562 = array();
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$arguments562['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_linkToTop', $array565);
$array564['1'] = ' || ';
$array566 = array (
);$array564['2'] = $renderingContext->getVariableProvider()->getByPath('settings.backToTopForAllPages', $array566);

$expression567 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments562['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression567(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments562['__thenClosure'] = $renderChildrenClosure563;

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output330 .= '
		';
return $output330;
};
$arguments328 = array();

$output327 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
	';
return $output327;
};

$output324 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
$output825 = '';

$output825 .= '
	<div id="page-content"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments826 = array();
$arguments826['then'] = NULL;
$arguments826['else'] = NULL;
$arguments826['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array828 = array();
$array829 = array (
);$array828['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.pageContentExtraClass', $array829);

$expression830 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments826['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression830(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array828)
					),
					$renderingContext
				);
$output831 = '';

$output831 .= ' class="';
$array832 = array (
);
$output831 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.pageContentExtraClass', $array832)]);

$output831 .= '"';
$arguments826['then'] = $output831;

$output825 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext);

$output825 .= ' >
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
$output852 = '';

$output852 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments853 = array();
$arguments853['section'] = NULL;
$arguments853['partial'] = NULL;
$arguments853['delegate'] = NULL;
$arguments853['renderable'] = NULL;
$arguments853['arguments'] = array (
);
$arguments853['optional'] = false;
$arguments853['default'] = NULL;
$arguments853['contentAs'] = NULL;
$arguments853['debug'] = true;
$output855 = '';

$output855 .= 'BackendLayouts/';
$array856 = array (
);
$output855 .= $renderingContext->getVariableProvider()->getByPath('be_layout', $array856);
$arguments853['partial'] = $output855;
$arguments853['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output852 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments853, $renderChildrenClosure854, $renderingContext);

$output852 .= '
			';
return $output852;
};
$arguments850 = array();

$output849 .= '';

$output849 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure859 = function() use ($renderingContext, $self) {
$output860 = '';

$output860 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure862 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments861 = array();
$arguments861['section'] = NULL;
$arguments861['partial'] = NULL;
$arguments861['delegate'] = NULL;
$arguments861['renderable'] = NULL;
$arguments861['arguments'] = array (
);
$arguments861['optional'] = false;
$arguments861['default'] = NULL;
$arguments861['contentAs'] = NULL;
$arguments861['debug'] = true;
$arguments861['partial'] = 'BackendLayouts/OneCol';
$arguments861['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output860 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments861, $renderChildrenClosure862, $renderingContext);

$output860 .= '
			';
return $output860;
};
$arguments858 = array();
$arguments858['if'] = NULL;

$output849 .= '';

$output849 .= '
		';
return $output849;
};
$arguments833 = array();
$arguments833['then'] = NULL;
$arguments833['else'] = NULL;
$arguments833['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array845 = array();
$array846 = array (
);$array845['0'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array846);
$array845['1'] = ' && ';
$array847 = array (
);$array845['2'] = $renderingContext->getVariableProvider()->getByPath('be_layout', $array847);
$array845['3'] = ' != \'default\'';

$expression848 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'default'));};
$arguments833['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression848(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array845)
					),
					$renderingContext
				);
$arguments833['__thenClosure'] = function() use ($renderingContext, $self) {
$output835 = '';

$output835 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure837 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments836 = array();
$arguments836['section'] = NULL;
$arguments836['partial'] = NULL;
$arguments836['delegate'] = NULL;
$arguments836['renderable'] = NULL;
$arguments836['arguments'] = array (
);
$arguments836['optional'] = false;
$arguments836['default'] = NULL;
$arguments836['contentAs'] = NULL;
$arguments836['debug'] = true;
$output838 = '';

$output838 .= 'BackendLayouts/';
$array839 = array (
);
$output838 .= $renderingContext->getVariableProvider()->getByPath('be_layout', $array839);
$arguments836['partial'] = $output838;
$arguments836['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output835 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments836, $renderChildrenClosure837, $renderingContext);

$output835 .= '
			';
return $output835;
};
$arguments833['__elseClosures'][] = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments842 = array();
$arguments842['section'] = NULL;
$arguments842['partial'] = NULL;
$arguments842['delegate'] = NULL;
$arguments842['renderable'] = NULL;
$arguments842['arguments'] = array (
);
$arguments842['optional'] = false;
$arguments842['default'] = NULL;
$arguments842['contentAs'] = NULL;
$arguments842['debug'] = true;
$arguments842['partial'] = 'BackendLayouts/OneCol';
$arguments842['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output841 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output841 .= '
			';
return $output841;
};

$output825 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments833, $renderChildrenClosure834, $renderingContext);

$output825 .= '
	</div>
';
return $output825;
};
$arguments823 = array();
$arguments823['name'] = NULL;
$arguments823['name'] = 'PageContent';

$output324 .= NULL;

$output324 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
$output866 = '';

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
$output918 = '';

$output918 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$output921 = '';

$output921 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
$output924 = '';

$output924 .= '
	// Default - Main.html
	var	  navbarHeight = 0,
			navbarBreakpointWidth = 0,
			viewportWidth = 0,
			onePageLayout = 0,
			fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure926 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments925 = array();
$arguments925['number'] = NULL;
$array927 = array (
);$arguments925['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array927);

$output924 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments925, $renderChildrenClosure926, $renderingContext);

$output924 .= ', fixedNavbar, navbarHeight);
	}
';
return $output924;
};
$arguments922 = array();
$arguments922['additionalAttributes'] = NULL;
$arguments922['data'] = NULL;
$arguments922['aria'] = NULL;
$arguments922['class'] = NULL;
$arguments922['dir'] = NULL;
$arguments922['id'] = NULL;
$arguments922['lang'] = NULL;
$arguments922['style'] = NULL;
$arguments922['title'] = NULL;
$arguments922['accesskey'] = NULL;
$arguments922['tabindex'] = NULL;
$arguments922['onclick'] = NULL;
$arguments922['async'] = NULL;
$arguments922['crossorigin'] = NULL;
$arguments922['defer'] = NULL;
$arguments922['integrity'] = NULL;
$arguments922['nomodule'] = NULL;
$arguments922['nonce'] = NULL;
$arguments922['referrerpolicy'] = NULL;
$arguments922['src'] = NULL;
$arguments922['type'] = NULL;
$arguments922['identifier'] = NULL;
$arguments922['priority'] = false;
$arguments922['identifier'] = 'vanilla_default';

$output921 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext);

$output921 .= '
	';
return $output921;
};
$arguments919 = array();

$output918 .= '';

$output918 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure929 = function() use ($renderingContext, $self) {
$output930 = '';

$output930 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure932 = function() use ($renderingContext, $self) {
$output950 = '';

$output950 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure952 = function() use ($renderingContext, $self) {
$output953 = '';

$output953 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
$output956 = '';

$output956 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments957 = array();
$arguments957['number'] = NULL;
$array959 = array (
);$arguments957['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array959);

$output956 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments957, $renderChildrenClosure958, $renderingContext);

$output956 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output956;
};
$arguments954 = array();
$arguments954['additionalAttributes'] = NULL;
$arguments954['data'] = NULL;
$arguments954['aria'] = NULL;
$arguments954['class'] = NULL;
$arguments954['dir'] = NULL;
$arguments954['id'] = NULL;
$arguments954['lang'] = NULL;
$arguments954['style'] = NULL;
$arguments954['title'] = NULL;
$arguments954['accesskey'] = NULL;
$arguments954['tabindex'] = NULL;
$arguments954['onclick'] = NULL;
$arguments954['async'] = NULL;
$arguments954['crossorigin'] = NULL;
$arguments954['defer'] = NULL;
$arguments954['integrity'] = NULL;
$arguments954['nomodule'] = NULL;
$arguments954['nonce'] = NULL;
$arguments954['referrerpolicy'] = NULL;
$arguments954['src'] = NULL;
$arguments954['type'] = NULL;
$arguments954['identifier'] = NULL;
$arguments954['priority'] = false;
$arguments954['identifier'] = 'vanilla_default';

$output953 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext);

$output953 .= '
			';
return $output953;
};
$arguments951 = array();

$output950 .= '';

$output950 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure961 = function() use ($renderingContext, $self) {
$output962 = '';

$output962 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure964 = function() use ($renderingContext, $self) {
$output965 = '';

$output965 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure967 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments966 = array();
$arguments966['number'] = NULL;
$array968 = array (
);$arguments966['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array968);

$output965 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments966, $renderChildrenClosure967, $renderingContext);

$output965 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output965;
};
$arguments963 = array();
$arguments963['additionalAttributes'] = NULL;
$arguments963['data'] = NULL;
$arguments963['aria'] = NULL;
$arguments963['class'] = NULL;
$arguments963['dir'] = NULL;
$arguments963['id'] = NULL;
$arguments963['lang'] = NULL;
$arguments963['style'] = NULL;
$arguments963['title'] = NULL;
$arguments963['accesskey'] = NULL;
$arguments963['tabindex'] = NULL;
$arguments963['onclick'] = NULL;
$arguments963['async'] = NULL;
$arguments963['crossorigin'] = NULL;
$arguments963['defer'] = NULL;
$arguments963['integrity'] = NULL;
$arguments963['nomodule'] = NULL;
$arguments963['nonce'] = NULL;
$arguments963['referrerpolicy'] = NULL;
$arguments963['src'] = NULL;
$arguments963['type'] = NULL;
$arguments963['identifier'] = NULL;
$arguments963['priority'] = false;
$arguments963['identifier'] = 'vanilla_default';

$output962 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments963, $renderChildrenClosure964, $renderingContext);

$output962 .= '
			';
return $output962;
};
$arguments960 = array();
$arguments960['if'] = NULL;

$output950 .= '';

$output950 .= '
		';
return $output950;
};
$arguments931 = array();
$arguments931['then'] = NULL;
$arguments931['else'] = NULL;
$arguments931['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array947 = array();
$array948 = array (
);$array947['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array948);

$expression949 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments931['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression949(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array947)
					),
					$renderingContext
				);
$arguments931['__thenClosure'] = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
$output936 = '';

$output936 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments937 = array();
$arguments937['number'] = NULL;
$array939 = array (
);$arguments937['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array939);

$output936 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext);

$output936 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output936;
};
$arguments934 = array();
$arguments934['additionalAttributes'] = NULL;
$arguments934['data'] = NULL;
$arguments934['aria'] = NULL;
$arguments934['class'] = NULL;
$arguments934['dir'] = NULL;
$arguments934['id'] = NULL;
$arguments934['lang'] = NULL;
$arguments934['style'] = NULL;
$arguments934['title'] = NULL;
$arguments934['accesskey'] = NULL;
$arguments934['tabindex'] = NULL;
$arguments934['onclick'] = NULL;
$arguments934['async'] = NULL;
$arguments934['crossorigin'] = NULL;
$arguments934['defer'] = NULL;
$arguments934['integrity'] = NULL;
$arguments934['nomodule'] = NULL;
$arguments934['nonce'] = NULL;
$arguments934['referrerpolicy'] = NULL;
$arguments934['src'] = NULL;
$arguments934['type'] = NULL;
$arguments934['identifier'] = NULL;
$arguments934['priority'] = false;
$arguments934['identifier'] = 'vanilla_default';

$output933 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output933 .= '
			';
return $output933;
};
$arguments931['__elseClosures'][] = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
$output943 = '';

$output943 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure945 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments944 = array();
$arguments944['number'] = NULL;
$array946 = array (
);$arguments944['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array946);

$output943 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments944, $renderChildrenClosure945, $renderingContext);

$output943 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output943;
};
$arguments941 = array();
$arguments941['additionalAttributes'] = NULL;
$arguments941['data'] = NULL;
$arguments941['aria'] = NULL;
$arguments941['class'] = NULL;
$arguments941['dir'] = NULL;
$arguments941['id'] = NULL;
$arguments941['lang'] = NULL;
$arguments941['style'] = NULL;
$arguments941['title'] = NULL;
$arguments941['accesskey'] = NULL;
$arguments941['tabindex'] = NULL;
$arguments941['onclick'] = NULL;
$arguments941['async'] = NULL;
$arguments941['crossorigin'] = NULL;
$arguments941['defer'] = NULL;
$arguments941['integrity'] = NULL;
$arguments941['nomodule'] = NULL;
$arguments941['nonce'] = NULL;
$arguments941['referrerpolicy'] = NULL;
$arguments941['src'] = NULL;
$arguments941['type'] = NULL;
$arguments941['identifier'] = NULL;
$arguments941['priority'] = false;
$arguments941['identifier'] = 'vanilla_default';

$output940 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext);

$output940 .= '
			';
return $output940;
};

$output930 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments931, $renderChildrenClosure932, $renderingContext);

$output930 .= '
	';
return $output930;
};
$arguments928 = array();
$arguments928['if'] = NULL;

$output918 .= '';

$output918 .= '
';
return $output918;
};
$arguments867 = array();
$arguments867['then'] = NULL;
$arguments867['else'] = NULL;
$arguments867['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array915 = array();
$array916 = array (
);$array915['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array916);
$array915['1'] = ' == \'slide\'';

$expression917 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'slide');};
$arguments867['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression917(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array915)
					),
					$renderingContext
				);
$arguments867['__thenClosure'] = function() use ($renderingContext, $self) {
$output869 = '';

$output869 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure871 = function() use ($renderingContext, $self) {
$output872 = '';

$output872 .= '
	// Default - Main.html
	var	  navbarHeight = 0,
			navbarBreakpointWidth = 0,
			viewportWidth = 0,
			onePageLayout = 0,
			fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments873 = array();
$arguments873['number'] = NULL;
$array875 = array (
);$arguments873['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array875);

$output872 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments873, $renderChildrenClosure874, $renderingContext);

$output872 .= ', fixedNavbar, navbarHeight);
	}
';
return $output872;
};
$arguments870 = array();
$arguments870['additionalAttributes'] = NULL;
$arguments870['data'] = NULL;
$arguments870['aria'] = NULL;
$arguments870['class'] = NULL;
$arguments870['dir'] = NULL;
$arguments870['id'] = NULL;
$arguments870['lang'] = NULL;
$arguments870['style'] = NULL;
$arguments870['title'] = NULL;
$arguments870['accesskey'] = NULL;
$arguments870['tabindex'] = NULL;
$arguments870['onclick'] = NULL;
$arguments870['async'] = NULL;
$arguments870['crossorigin'] = NULL;
$arguments870['defer'] = NULL;
$arguments870['integrity'] = NULL;
$arguments870['nomodule'] = NULL;
$arguments870['nonce'] = NULL;
$arguments870['referrerpolicy'] = NULL;
$arguments870['src'] = NULL;
$arguments870['type'] = NULL;
$arguments870['identifier'] = NULL;
$arguments870['priority'] = false;
$arguments870['identifier'] = 'vanilla_default';

$output869 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments870, $renderChildrenClosure871, $renderingContext);

$output869 .= '
	';
return $output869;
};
$arguments867['__elseClosures'][] = function() use ($renderingContext, $self) {
$output876 = '';

$output876 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output896 = '';

$output896 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure898 = function() use ($renderingContext, $self) {
$output899 = '';

$output899 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
$output902 = '';

$output902 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure904 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments903 = array();
$arguments903['number'] = NULL;
$array905 = array (
);$arguments903['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array905);

$output902 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments903, $renderChildrenClosure904, $renderingContext);

$output902 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output902;
};
$arguments900 = array();
$arguments900['additionalAttributes'] = NULL;
$arguments900['data'] = NULL;
$arguments900['aria'] = NULL;
$arguments900['class'] = NULL;
$arguments900['dir'] = NULL;
$arguments900['id'] = NULL;
$arguments900['lang'] = NULL;
$arguments900['style'] = NULL;
$arguments900['title'] = NULL;
$arguments900['accesskey'] = NULL;
$arguments900['tabindex'] = NULL;
$arguments900['onclick'] = NULL;
$arguments900['async'] = NULL;
$arguments900['crossorigin'] = NULL;
$arguments900['defer'] = NULL;
$arguments900['integrity'] = NULL;
$arguments900['nomodule'] = NULL;
$arguments900['nonce'] = NULL;
$arguments900['referrerpolicy'] = NULL;
$arguments900['src'] = NULL;
$arguments900['type'] = NULL;
$arguments900['identifier'] = NULL;
$arguments900['priority'] = false;
$arguments900['identifier'] = 'vanilla_default';

$output899 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output899 .= '
			';
return $output899;
};
$arguments897 = array();

$output896 .= '';

$output896 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
$output908 = '';

$output908 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$output911 = '';

$output911 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments912 = array();
$arguments912['number'] = NULL;
$array914 = array (
);$arguments912['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array914);

$output911 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext);

$output911 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output911;
};
$arguments909 = array();
$arguments909['additionalAttributes'] = NULL;
$arguments909['data'] = NULL;
$arguments909['aria'] = NULL;
$arguments909['class'] = NULL;
$arguments909['dir'] = NULL;
$arguments909['id'] = NULL;
$arguments909['lang'] = NULL;
$arguments909['style'] = NULL;
$arguments909['title'] = NULL;
$arguments909['accesskey'] = NULL;
$arguments909['tabindex'] = NULL;
$arguments909['onclick'] = NULL;
$arguments909['async'] = NULL;
$arguments909['crossorigin'] = NULL;
$arguments909['defer'] = NULL;
$arguments909['integrity'] = NULL;
$arguments909['nomodule'] = NULL;
$arguments909['nonce'] = NULL;
$arguments909['referrerpolicy'] = NULL;
$arguments909['src'] = NULL;
$arguments909['type'] = NULL;
$arguments909['identifier'] = NULL;
$arguments909['priority'] = false;
$arguments909['identifier'] = 'vanilla_default';

$output908 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments909, $renderChildrenClosure910, $renderingContext);

$output908 .= '
			';
return $output908;
};
$arguments906 = array();
$arguments906['if'] = NULL;

$output896 .= '';

$output896 .= '
		';
return $output896;
};
$arguments877 = array();
$arguments877['then'] = NULL;
$arguments877['else'] = NULL;
$arguments877['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array894 = array (
);$array893['0'] = $renderingContext->getVariableProvider()->getByPath('config.navbar.enable', $array894);

$expression895 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments877['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments877['__thenClosure'] = function() use ($renderingContext, $self) {
$output879 = '';

$output879 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
$output882 = '';

$output882 .= '
	// Default - Main.html
	const navbar = document.getElementById(\'main-navbar\'),
			navbarHeight = navbar.clientHeight,
			navbarBreakpointWidth = document.body.getAttribute(\'data-navbar-breakpointwidth\'),
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = navbar.classList.contains(\'sectionMenu\');

	var fixedNavbar = false;
	if ( navbar.classList.contains(\'fixed-top\') || navbar.classList.contains(\'sticky-top\') ) {
		fixedNavbar = true;
	}

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure884 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments883 = array();
$arguments883['number'] = NULL;
$array885 = array (
);$arguments883['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array885);

$output882 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments883, $renderChildrenClosure884, $renderingContext);

$output882 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output882;
};
$arguments880 = array();
$arguments880['additionalAttributes'] = NULL;
$arguments880['data'] = NULL;
$arguments880['aria'] = NULL;
$arguments880['class'] = NULL;
$arguments880['dir'] = NULL;
$arguments880['id'] = NULL;
$arguments880['lang'] = NULL;
$arguments880['style'] = NULL;
$arguments880['title'] = NULL;
$arguments880['accesskey'] = NULL;
$arguments880['tabindex'] = NULL;
$arguments880['onclick'] = NULL;
$arguments880['async'] = NULL;
$arguments880['crossorigin'] = NULL;
$arguments880['defer'] = NULL;
$arguments880['integrity'] = NULL;
$arguments880['nomodule'] = NULL;
$arguments880['nonce'] = NULL;
$arguments880['referrerpolicy'] = NULL;
$arguments880['src'] = NULL;
$arguments880['type'] = NULL;
$arguments880['identifier'] = NULL;
$arguments880['priority'] = false;
$arguments880['identifier'] = 'vanilla_default';

$output879 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);

$output879 .= '
			';
return $output879;
};
$arguments877['__elseClosures'][] = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
$output889 = '';

$output889 .= '
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector(\'html\'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(';
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments890 = array();
$arguments890['number'] = NULL;
$array892 = array (
);$arguments890['number'] = $renderingContext->getVariableProvider()->getByPath('settings.config.sectionmenuAnchorOffset', $array892);

$output889 .= T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$output889 .= ', fixedNavbar, navbarHeight);
	}
				';
return $output889;
};
$arguments887 = array();
$arguments887['additionalAttributes'] = NULL;
$arguments887['data'] = NULL;
$arguments887['aria'] = NULL;
$arguments887['class'] = NULL;
$arguments887['dir'] = NULL;
$arguments887['id'] = NULL;
$arguments887['lang'] = NULL;
$arguments887['style'] = NULL;
$arguments887['title'] = NULL;
$arguments887['accesskey'] = NULL;
$arguments887['tabindex'] = NULL;
$arguments887['onclick'] = NULL;
$arguments887['async'] = NULL;
$arguments887['crossorigin'] = NULL;
$arguments887['defer'] = NULL;
$arguments887['integrity'] = NULL;
$arguments887['nomodule'] = NULL;
$arguments887['nonce'] = NULL;
$arguments887['referrerpolicy'] = NULL;
$arguments887['src'] = NULL;
$arguments887['type'] = NULL;
$arguments887['identifier'] = NULL;
$arguments887['priority'] = false;
$arguments887['identifier'] = 'vanilla_default';

$output886 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output886 .= '
			';
return $output886;
};

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);

$output876 .= '
	';
return $output876;
};

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext);

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
return ' Loading spinner ';
};
$arguments969 = array();

$output866 .= NULL;

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
$output976 = '';

$output976 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure978 = function() use ($renderingContext, $self) {
return '
	// Loading spinner - Main.html
	window.onload = function() {
		let spinner = document.getElementById(\'site-preloader\');
		t3sbFadeOutEffect(spinner);
	};
';
};
$arguments977 = array();
$arguments977['additionalAttributes'] = NULL;
$arguments977['data'] = NULL;
$arguments977['aria'] = NULL;
$arguments977['class'] = NULL;
$arguments977['dir'] = NULL;
$arguments977['id'] = NULL;
$arguments977['lang'] = NULL;
$arguments977['style'] = NULL;
$arguments977['title'] = NULL;
$arguments977['accesskey'] = NULL;
$arguments977['tabindex'] = NULL;
$arguments977['onclick'] = NULL;
$arguments977['async'] = NULL;
$arguments977['crossorigin'] = NULL;
$arguments977['defer'] = NULL;
$arguments977['integrity'] = NULL;
$arguments977['nomodule'] = NULL;
$arguments977['nonce'] = NULL;
$arguments977['referrerpolicy'] = NULL;
$arguments977['src'] = NULL;
$arguments977['type'] = NULL;
$arguments977['identifier'] = NULL;
$arguments977['priority'] = false;
$arguments977['identifier'] = 'vanilla_loadingspinner';

$output976 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments977, $renderChildrenClosure978, $renderingContext);

$output976 .= '
';
return $output976;
};
$arguments971 = array();
$arguments971['then'] = NULL;
$arguments971['else'] = NULL;
$arguments971['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array973 = array();
$array974 = array (
);$array973['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array974);

$expression975 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments971['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression975(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array973)
					),
					$renderingContext
				);
$arguments971['__thenClosure'] = $renderChildrenClosure972;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments971, $renderChildrenClosure972, $renderingContext);

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
$output984 = '';

$output984 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
return '
	// Dark mode - Main.html
	t3sbDarkMode();
';
};
$arguments985 = array();
$arguments985['additionalAttributes'] = NULL;
$arguments985['data'] = NULL;
$arguments985['aria'] = NULL;
$arguments985['class'] = NULL;
$arguments985['dir'] = NULL;
$arguments985['id'] = NULL;
$arguments985['lang'] = NULL;
$arguments985['style'] = NULL;
$arguments985['title'] = NULL;
$arguments985['accesskey'] = NULL;
$arguments985['tabindex'] = NULL;
$arguments985['onclick'] = NULL;
$arguments985['async'] = NULL;
$arguments985['crossorigin'] = NULL;
$arguments985['defer'] = NULL;
$arguments985['integrity'] = NULL;
$arguments985['nomodule'] = NULL;
$arguments985['nonce'] = NULL;
$arguments985['referrerpolicy'] = NULL;
$arguments985['src'] = NULL;
$arguments985['type'] = NULL;
$arguments985['identifier'] = NULL;
$arguments985['priority'] = false;
$arguments985['identifier'] = 'vanilla_darkMode';

$output984 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments985, $renderChildrenClosure986, $renderingContext);

$output984 .= '
';
return $output984;
};
$arguments979 = array();
$arguments979['then'] = NULL;
$arguments979['else'] = NULL;
$arguments979['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array981 = array();
$array982 = array (
);$array981['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.darkMode', $array982);

$expression983 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments979['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression983(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array981)
					),
					$renderingContext
				);
$arguments979['__thenClosure'] = $renderChildrenClosure980;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments979, $renderChildrenClosure980, $renderingContext);

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure988 = function() use ($renderingContext, $self) {
return ' Lazyload ';
};
$arguments987 = array();

$output866 .= NULL;

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
// Rendering ViewHelper T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments991 = array();
$arguments991['number'] = NULL;
$array993 = array (
);$arguments991['number'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoadThreshold', $array993);
return T3SBS\T3sbootstrap\ViewHelpers\IntvalViewHelper::renderStatic($arguments991, $renderChildrenClosure992, $renderingContext);
};
$arguments989 = array();
$arguments989['value'] = NULL;
$arguments989['name'] = NULL;
$arguments989['name'] = 'customthreshold';
$renderChildrenClosure990 = ($arguments989['value'] !== null) ? function() use ($arguments989) { return $arguments989['value']; } : $renderChildrenClosure990;
$output866 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments989, $renderChildrenClosure990, $renderingContext)]);

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
$output1043 = '';

$output1043 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
$output1046 = '';

$output1046 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
$output1063 = '';

$output1063 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
$output1066 = '';

$output1066 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1068 = function() use ($renderingContext, $self) {
$output1069 = '';

$output1069 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array1070 = array (
);
$output1069 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1070);

$output1069 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output1069;
};
$arguments1067 = array();
$arguments1067['additionalAttributes'] = NULL;
$arguments1067['data'] = NULL;
$arguments1067['aria'] = NULL;
$arguments1067['class'] = NULL;
$arguments1067['dir'] = NULL;
$arguments1067['id'] = NULL;
$arguments1067['lang'] = NULL;
$arguments1067['style'] = NULL;
$arguments1067['title'] = NULL;
$arguments1067['accesskey'] = NULL;
$arguments1067['tabindex'] = NULL;
$arguments1067['onclick'] = NULL;
$arguments1067['async'] = NULL;
$arguments1067['crossorigin'] = NULL;
$arguments1067['defer'] = NULL;
$arguments1067['integrity'] = NULL;
$arguments1067['nomodule'] = NULL;
$arguments1067['nonce'] = NULL;
$arguments1067['referrerpolicy'] = NULL;
$arguments1067['src'] = NULL;
$arguments1067['type'] = NULL;
$arguments1067['identifier'] = NULL;
$arguments1067['priority'] = false;
$arguments1067['identifier'] = 'vanilla_lazyload';

$output1066 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1067, $renderChildrenClosure1068, $renderingContext);

$output1066 .= '
			';
return $output1066;
};
$arguments1064 = array();

$output1063 .= '';

$output1063 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1072 = function() use ($renderingContext, $self) {
$output1073 = '';

$output1073 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
$output1076 = '';

$output1076 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array1077 = array (
);
$output1076 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1077);

$output1076 .= ';
	new LazyLoad(';

$output1076 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output1076 .= ');
				';
return $output1076;
};
$arguments1074 = array();
$arguments1074['additionalAttributes'] = NULL;
$arguments1074['data'] = NULL;
$arguments1074['aria'] = NULL;
$arguments1074['class'] = NULL;
$arguments1074['dir'] = NULL;
$arguments1074['id'] = NULL;
$arguments1074['lang'] = NULL;
$arguments1074['style'] = NULL;
$arguments1074['title'] = NULL;
$arguments1074['accesskey'] = NULL;
$arguments1074['tabindex'] = NULL;
$arguments1074['onclick'] = NULL;
$arguments1074['async'] = NULL;
$arguments1074['crossorigin'] = NULL;
$arguments1074['defer'] = NULL;
$arguments1074['integrity'] = NULL;
$arguments1074['nomodule'] = NULL;
$arguments1074['nonce'] = NULL;
$arguments1074['referrerpolicy'] = NULL;
$arguments1074['src'] = NULL;
$arguments1074['type'] = NULL;
$arguments1074['identifier'] = NULL;
$arguments1074['priority'] = false;
$arguments1074['identifier'] = 'vanilla_lazyload';

$output1073 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext);

$output1073 .= '
			';
return $output1073;
};
$arguments1071 = array();
$arguments1071['if'] = NULL;

$output1063 .= '';

$output1063 .= '
		';
return $output1063;
};
$arguments1047 = array();
$arguments1047['then'] = NULL;
$arguments1047['else'] = NULL;
$arguments1047['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1059 = array();
$array1060 = array (
);$array1059['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array1060);
$array1059['1'] = ' && ';
$array1061 = array (
);$array1059['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array1061);

$expression1062 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1047['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1062(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1059)
					),
					$renderingContext
				);
$arguments1047['__thenClosure'] = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
$output1052 = '';

$output1052 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array1053 = array (
);
$output1052 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1053);

$output1052 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output1052;
};
$arguments1050 = array();
$arguments1050['additionalAttributes'] = NULL;
$arguments1050['data'] = NULL;
$arguments1050['aria'] = NULL;
$arguments1050['class'] = NULL;
$arguments1050['dir'] = NULL;
$arguments1050['id'] = NULL;
$arguments1050['lang'] = NULL;
$arguments1050['style'] = NULL;
$arguments1050['title'] = NULL;
$arguments1050['accesskey'] = NULL;
$arguments1050['tabindex'] = NULL;
$arguments1050['onclick'] = NULL;
$arguments1050['async'] = NULL;
$arguments1050['crossorigin'] = NULL;
$arguments1050['defer'] = NULL;
$arguments1050['integrity'] = NULL;
$arguments1050['nomodule'] = NULL;
$arguments1050['nonce'] = NULL;
$arguments1050['referrerpolicy'] = NULL;
$arguments1050['src'] = NULL;
$arguments1050['type'] = NULL;
$arguments1050['identifier'] = NULL;
$arguments1050['priority'] = false;
$arguments1050['identifier'] = 'vanilla_lazyload';

$output1049 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1050, $renderChildrenClosure1051, $renderingContext);

$output1049 .= '
			';
return $output1049;
};
$arguments1047['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1054 = '';

$output1054 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
$output1057 = '';

$output1057 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array1058 = array (
);
$output1057 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1058);

$output1057 .= ';
	new LazyLoad(';

$output1057 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output1057 .= ');
				';
return $output1057;
};
$arguments1055 = array();
$arguments1055['additionalAttributes'] = NULL;
$arguments1055['data'] = NULL;
$arguments1055['aria'] = NULL;
$arguments1055['class'] = NULL;
$arguments1055['dir'] = NULL;
$arguments1055['id'] = NULL;
$arguments1055['lang'] = NULL;
$arguments1055['style'] = NULL;
$arguments1055['title'] = NULL;
$arguments1055['accesskey'] = NULL;
$arguments1055['tabindex'] = NULL;
$arguments1055['onclick'] = NULL;
$arguments1055['async'] = NULL;
$arguments1055['crossorigin'] = NULL;
$arguments1055['defer'] = NULL;
$arguments1055['integrity'] = NULL;
$arguments1055['nomodule'] = NULL;
$arguments1055['nonce'] = NULL;
$arguments1055['referrerpolicy'] = NULL;
$arguments1055['src'] = NULL;
$arguments1055['type'] = NULL;
$arguments1055['identifier'] = NULL;
$arguments1055['priority'] = false;
$arguments1055['identifier'] = 'vanilla_lazyload';

$output1054 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1054 .= '
			';
return $output1054;
};

$output1046 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1047, $renderChildrenClosure1048, $renderingContext);

$output1046 .= '
	';
return $output1046;
};
$arguments1044 = array();

$output1043 .= '';

$output1043 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
$output1080 = '';

$output1080 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1082 = function() use ($renderingContext, $self) {
$output1087 = '';

$output1087 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
	// Magnifying glass icon - Main.html
	var magnify = document.querySelectorAll(\'.zoom-overlay\');
	if ( magnify.length ) ';

$output1090 .= '{
		document.querySelectorAll(\'figure.image\').forEach (
			img => { t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth) }
		)
	}';

$output1090 .= '
			';
return $output1090;
};
$arguments1088 = array();
$arguments1088['additionalAttributes'] = NULL;
$arguments1088['data'] = NULL;
$arguments1088['aria'] = NULL;
$arguments1088['class'] = NULL;
$arguments1088['dir'] = NULL;
$arguments1088['id'] = NULL;
$arguments1088['lang'] = NULL;
$arguments1088['style'] = NULL;
$arguments1088['title'] = NULL;
$arguments1088['accesskey'] = NULL;
$arguments1088['tabindex'] = NULL;
$arguments1088['onclick'] = NULL;
$arguments1088['async'] = NULL;
$arguments1088['crossorigin'] = NULL;
$arguments1088['defer'] = NULL;
$arguments1088['integrity'] = NULL;
$arguments1088['nomodule'] = NULL;
$arguments1088['nonce'] = NULL;
$arguments1088['referrerpolicy'] = NULL;
$arguments1088['src'] = NULL;
$arguments1088['type'] = NULL;
$arguments1088['identifier'] = NULL;
$arguments1088['priority'] = false;
$arguments1088['identifier'] = 'vanilla_magnifying';

$output1087 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);

$output1087 .= '
		';
return $output1087;
};
$arguments1081 = array();
$arguments1081['then'] = NULL;
$arguments1081['else'] = NULL;
$arguments1081['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1083 = array();
$array1084 = array (
);$array1083['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array1084);
$array1083['1'] = ' && ';
$array1085 = array (
);$array1083['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array1085);

$expression1086 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1081['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1086(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1083)
					),
					$renderingContext
				);
$arguments1081['__thenClosure'] = $renderChildrenClosure1082;

$output1080 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1081, $renderChildrenClosure1082, $renderingContext);

$output1080 .= '
	';
return $output1080;
};
$arguments1078 = array();
$arguments1078['if'] = NULL;

$output1043 .= '';

$output1043 .= '
';
return $output1043;
};
$arguments994 = array();
$arguments994['then'] = NULL;
$arguments994['else'] = NULL;
$arguments994['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1039 = array();
$array1040 = array (
);$array1039['0'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoad', $array1040);
$array1039['1'] = ' && ';
$array1041 = array (
);$array1039['2'] = $renderingContext->getVariableProvider()->getByPath('settings.lazyLoad', $array1041);
$array1039['3'] = ' < 3';

$expression1042 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) < 3));};
$arguments994['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1042(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1039)
					),
					$renderingContext
				);
$arguments994['__thenClosure'] = function() use ($renderingContext, $self) {
$output996 = '';

$output996 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
$output1013 = '';

$output1013 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
$output1016 = '';

$output1016 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1018 = function() use ($renderingContext, $self) {
$output1019 = '';

$output1019 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array1020 = array (
);
$output1019 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1020);

$output1019 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output1019;
};
$arguments1017 = array();
$arguments1017['additionalAttributes'] = NULL;
$arguments1017['data'] = NULL;
$arguments1017['aria'] = NULL;
$arguments1017['class'] = NULL;
$arguments1017['dir'] = NULL;
$arguments1017['id'] = NULL;
$arguments1017['lang'] = NULL;
$arguments1017['style'] = NULL;
$arguments1017['title'] = NULL;
$arguments1017['accesskey'] = NULL;
$arguments1017['tabindex'] = NULL;
$arguments1017['onclick'] = NULL;
$arguments1017['async'] = NULL;
$arguments1017['crossorigin'] = NULL;
$arguments1017['defer'] = NULL;
$arguments1017['integrity'] = NULL;
$arguments1017['nomodule'] = NULL;
$arguments1017['nonce'] = NULL;
$arguments1017['referrerpolicy'] = NULL;
$arguments1017['src'] = NULL;
$arguments1017['type'] = NULL;
$arguments1017['identifier'] = NULL;
$arguments1017['priority'] = false;
$arguments1017['identifier'] = 'vanilla_lazyload';

$output1016 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1017, $renderChildrenClosure1018, $renderingContext);

$output1016 .= '
			';
return $output1016;
};
$arguments1014 = array();

$output1013 .= '';

$output1013 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
$output1023 = '';

$output1023 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1025 = function() use ($renderingContext, $self) {
$output1026 = '';

$output1026 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array1027 = array (
);
$output1026 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1027);

$output1026 .= ';
	new LazyLoad(';

$output1026 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output1026 .= ');
				';
return $output1026;
};
$arguments1024 = array();
$arguments1024['additionalAttributes'] = NULL;
$arguments1024['data'] = NULL;
$arguments1024['aria'] = NULL;
$arguments1024['class'] = NULL;
$arguments1024['dir'] = NULL;
$arguments1024['id'] = NULL;
$arguments1024['lang'] = NULL;
$arguments1024['style'] = NULL;
$arguments1024['title'] = NULL;
$arguments1024['accesskey'] = NULL;
$arguments1024['tabindex'] = NULL;
$arguments1024['onclick'] = NULL;
$arguments1024['async'] = NULL;
$arguments1024['crossorigin'] = NULL;
$arguments1024['defer'] = NULL;
$arguments1024['integrity'] = NULL;
$arguments1024['nomodule'] = NULL;
$arguments1024['nonce'] = NULL;
$arguments1024['referrerpolicy'] = NULL;
$arguments1024['src'] = NULL;
$arguments1024['type'] = NULL;
$arguments1024['identifier'] = NULL;
$arguments1024['priority'] = false;
$arguments1024['identifier'] = 'vanilla_lazyload';

$output1023 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1024, $renderChildrenClosure1025, $renderingContext);

$output1023 .= '
			';
return $output1023;
};
$arguments1021 = array();
$arguments1021['if'] = NULL;

$output1013 .= '';

$output1013 .= '
		';
return $output1013;
};
$arguments997 = array();
$arguments997['then'] = NULL;
$arguments997['else'] = NULL;
$arguments997['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1009 = array();
$array1010 = array (
);$array1009['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array1010);
$array1009['1'] = ' && ';
$array1011 = array (
);$array1009['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array1011);

$expression1012 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments997['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1012(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1009)
					),
					$renderingContext
				);
$arguments997['__thenClosure'] = function() use ($renderingContext, $self) {
$output999 = '';

$output999 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
$output1002 = '';

$output1002 .= '
	// LazyLoad & Magnifying glass icon - Main.html
	var customthreshold = ';
$array1003 = array (
);
$output1002 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1003);

$output1002 .= ';
	new LazyLoad({
		elements_selector: \'.lazy\',
		threshold: customthreshold,
		callback_loaded: function(img) {
			t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth);
		}
	});
				';
return $output1002;
};
$arguments1000 = array();
$arguments1000['additionalAttributes'] = NULL;
$arguments1000['data'] = NULL;
$arguments1000['aria'] = NULL;
$arguments1000['class'] = NULL;
$arguments1000['dir'] = NULL;
$arguments1000['id'] = NULL;
$arguments1000['lang'] = NULL;
$arguments1000['style'] = NULL;
$arguments1000['title'] = NULL;
$arguments1000['accesskey'] = NULL;
$arguments1000['tabindex'] = NULL;
$arguments1000['onclick'] = NULL;
$arguments1000['async'] = NULL;
$arguments1000['crossorigin'] = NULL;
$arguments1000['defer'] = NULL;
$arguments1000['integrity'] = NULL;
$arguments1000['nomodule'] = NULL;
$arguments1000['nonce'] = NULL;
$arguments1000['referrerpolicy'] = NULL;
$arguments1000['src'] = NULL;
$arguments1000['type'] = NULL;
$arguments1000['identifier'] = NULL;
$arguments1000['priority'] = false;
$arguments1000['identifier'] = 'vanilla_lazyload';

$output999 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext);

$output999 .= '
			';
return $output999;
};
$arguments997['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1004 = '';

$output1004 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
$output1007 = '';

$output1007 .= '
	// LazyLoad - Main.html
	var customthreshold = ';
$array1008 = array (
);
$output1007 .= $renderingContext->getVariableProvider()->getByPath('customthreshold', $array1008);

$output1007 .= ';
	new LazyLoad(';

$output1007 .= '{
		elements_selector: \'.lazy\',
		threshold: customthreshold
	}';

$output1007 .= ');
				';
return $output1007;
};
$arguments1005 = array();
$arguments1005['additionalAttributes'] = NULL;
$arguments1005['data'] = NULL;
$arguments1005['aria'] = NULL;
$arguments1005['class'] = NULL;
$arguments1005['dir'] = NULL;
$arguments1005['id'] = NULL;
$arguments1005['lang'] = NULL;
$arguments1005['style'] = NULL;
$arguments1005['title'] = NULL;
$arguments1005['accesskey'] = NULL;
$arguments1005['tabindex'] = NULL;
$arguments1005['onclick'] = NULL;
$arguments1005['async'] = NULL;
$arguments1005['crossorigin'] = NULL;
$arguments1005['defer'] = NULL;
$arguments1005['integrity'] = NULL;
$arguments1005['nomodule'] = NULL;
$arguments1005['nonce'] = NULL;
$arguments1005['referrerpolicy'] = NULL;
$arguments1005['src'] = NULL;
$arguments1005['type'] = NULL;
$arguments1005['identifier'] = NULL;
$arguments1005['priority'] = false;
$arguments1005['identifier'] = 'vanilla_lazyload';

$output1004 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext);

$output1004 .= '
			';
return $output1004;
};

$output996 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext);

$output996 .= '
	';
return $output996;
};
$arguments994['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1028 = '';

$output1028 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
$output1035 = '';

$output1035 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
$output1038 = '';

$output1038 .= '
	// Magnifying glass icon - Main.html
	var magnify = document.querySelectorAll(\'.zoom-overlay\');
	if ( magnify.length ) ';

$output1038 .= '{
		document.querySelectorAll(\'figure.image\').forEach (
			img => { t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth) }
		)
	}';

$output1038 .= '
			';
return $output1038;
};
$arguments1036 = array();
$arguments1036['additionalAttributes'] = NULL;
$arguments1036['data'] = NULL;
$arguments1036['aria'] = NULL;
$arguments1036['class'] = NULL;
$arguments1036['dir'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['lang'] = NULL;
$arguments1036['style'] = NULL;
$arguments1036['title'] = NULL;
$arguments1036['accesskey'] = NULL;
$arguments1036['tabindex'] = NULL;
$arguments1036['onclick'] = NULL;
$arguments1036['async'] = NULL;
$arguments1036['crossorigin'] = NULL;
$arguments1036['defer'] = NULL;
$arguments1036['integrity'] = NULL;
$arguments1036['nomodule'] = NULL;
$arguments1036['nonce'] = NULL;
$arguments1036['referrerpolicy'] = NULL;
$arguments1036['src'] = NULL;
$arguments1036['type'] = NULL;
$arguments1036['identifier'] = NULL;
$arguments1036['priority'] = false;
$arguments1036['identifier'] = 'vanilla_magnifying';

$output1035 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1035 .= '
		';
return $output1035;
};
$arguments1029 = array();
$arguments1029['then'] = NULL;
$arguments1029['else'] = NULL;
$arguments1029['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1031 = array();
$array1032 = array (
);$array1031['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array1032);
$array1031['1'] = ' && ';
$array1033 = array (
);$array1031['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array1033);

$expression1034 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1029['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1034(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1031)
					),
					$renderingContext
				);
$arguments1029['__thenClosure'] = $renderChildrenClosure1030;

$output1028 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext);

$output1028 .= '
	';
return $output1028;
};

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments994, $renderChildrenClosure995, $renderingContext);

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
$output1096 = '';

$output1096 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
return ' Sticky footer ';
};
$arguments1097 = array();

$output1096 .= NULL;

$output1096 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
return 'html {
	position:relative;
	min-height:100%
}
#page-footer {
	position:absolute;
	bottom:0;
	width:100%
}
';
};
$arguments1099 = array();
$arguments1099['additionalAttributes'] = NULL;
$arguments1099['data'] = NULL;
$arguments1099['aria'] = NULL;
$arguments1099['class'] = NULL;
$arguments1099['dir'] = NULL;
$arguments1099['id'] = NULL;
$arguments1099['lang'] = NULL;
$arguments1099['style'] = NULL;
$arguments1099['title'] = NULL;
$arguments1099['accesskey'] = NULL;
$arguments1099['tabindex'] = NULL;
$arguments1099['onclick'] = NULL;
$arguments1099['as'] = NULL;
$arguments1099['crossorigin'] = NULL;
$arguments1099['disabled'] = NULL;
$arguments1099['href'] = NULL;
$arguments1099['hreflang'] = NULL;
$arguments1099['importance'] = NULL;
$arguments1099['integrity'] = NULL;
$arguments1099['media'] = NULL;
$arguments1099['referrerpolicy'] = NULL;
$arguments1099['rel'] = NULL;
$arguments1099['sizes'] = NULL;
$arguments1099['type'] = NULL;
$arguments1099['nonce'] = NULL;
$arguments1099['identifier'] = NULL;
$arguments1099['priority'] = false;
$arguments1099['identifier'] = 't3sbs_footerSticky';

$output1096 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1096 .= '
';
return $output1096;
};
$arguments1091 = array();
$arguments1091['then'] = NULL;
$arguments1091['else'] = NULL;
$arguments1091['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1093 = array();
$array1094 = array (
);$array1093['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.footerSticky', $array1094);

$expression1095 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1091['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1095(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1093)
					),
					$renderingContext
				);
$arguments1091['__thenClosure'] = $renderChildrenClosure1092;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output866 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure1102 = function() use ($renderingContext, $self) {
return ' Link to top ';
};
$arguments1101 = array();

$output866 .= NULL;

$output866 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
$output1109 = '';

$output1109 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
return '
	// Link to top - Main.html
	t3sbScrollToTop();
';
};
$arguments1110 = array();
$arguments1110['additionalAttributes'] = NULL;
$arguments1110['data'] = NULL;
$arguments1110['aria'] = NULL;
$arguments1110['class'] = NULL;
$arguments1110['dir'] = NULL;
$arguments1110['id'] = NULL;
$arguments1110['lang'] = NULL;
$arguments1110['style'] = NULL;
$arguments1110['title'] = NULL;
$arguments1110['accesskey'] = NULL;
$arguments1110['tabindex'] = NULL;
$arguments1110['onclick'] = NULL;
$arguments1110['async'] = NULL;
$arguments1110['crossorigin'] = NULL;
$arguments1110['defer'] = NULL;
$arguments1110['integrity'] = NULL;
$arguments1110['nomodule'] = NULL;
$arguments1110['nonce'] = NULL;
$arguments1110['referrerpolicy'] = NULL;
$arguments1110['src'] = NULL;
$arguments1110['type'] = NULL;
$arguments1110['identifier'] = NULL;
$arguments1110['priority'] = false;
$arguments1110['identifier'] = 'vanilla_linktotop';

$output1109 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1110, $renderChildrenClosure1111, $renderingContext);

$output1109 .= '
';
return $output1109;
};
$arguments1103 = array();
$arguments1103['then'] = NULL;
$arguments1103['else'] = NULL;
$arguments1103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1105 = array();
$array1106 = array (
);$array1105['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_linkToTop', $array1106);
$array1105['1'] = ' || ';
$array1107 = array (
);$array1105['2'] = $renderingContext->getVariableProvider()->getByPath('settings.backToTopForAllPages', $array1107);

$expression1108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1105)
					),
					$renderingContext
				);
$arguments1103['__thenClosure'] = $renderChildrenClosure1104;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1103, $renderChildrenClosure1104, $renderingContext);

$output866 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1113 = function() use ($renderingContext, $self) {
$output1117 = '';

$output1117 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1118 = array();
$arguments1118['additionalAttributes'] = NULL;
$arguments1118['data'] = NULL;
$arguments1118['aria'] = NULL;
$arguments1118['class'] = NULL;
$arguments1118['dir'] = NULL;
$arguments1118['id'] = NULL;
$arguments1118['lang'] = NULL;
$arguments1118['style'] = NULL;
$arguments1118['title'] = NULL;
$arguments1118['accesskey'] = NULL;
$arguments1118['tabindex'] = NULL;
$arguments1118['onclick'] = NULL;
$arguments1118['async'] = NULL;
$arguments1118['crossorigin'] = NULL;
$arguments1118['defer'] = NULL;
$arguments1118['integrity'] = NULL;
$arguments1118['nomodule'] = NULL;
$arguments1118['nonce'] = NULL;
$arguments1118['referrerpolicy'] = NULL;
$arguments1118['src'] = NULL;
$arguments1118['type'] = NULL;
$arguments1118['identifier'] = NULL;
$arguments1118['priority'] = false;
$arguments1118['identifier'] = 't3sbmodernizr';
$arguments1118['src'] = 'EXT:t3sbootstrap/Resources/Public/Contrib/Modernizr/modernizr.js';

$output1117 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1118, $renderChildrenClosure1119, $renderingContext);

$output1117 .= '
';
return $output1117;
};
$arguments1112 = array();
$arguments1112['then'] = NULL;
$arguments1112['else'] = NULL;
$arguments1112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1114 = array();
$array1115 = array (
);$array1114['0'] = $renderingContext->getVariableProvider()->getByPath('settings.webp', $array1115);

$expression1116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1114)
					),
					$renderingContext
				);
$arguments1112['__thenClosure'] = $renderChildrenClosure1113;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1112, $renderChildrenClosure1113, $renderingContext);

$output866 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1121 = function() use ($renderingContext, $self) {
$output1125 = '';

$output1125 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1127 = function() use ($renderingContext, $self) {
$output1132 = '';

$output1132 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1133 = array();
$arguments1133['additionalAttributes'] = NULL;
$arguments1133['data'] = NULL;
$arguments1133['aria'] = NULL;
$arguments1133['class'] = NULL;
$arguments1133['dir'] = NULL;
$arguments1133['id'] = NULL;
$arguments1133['lang'] = NULL;
$arguments1133['style'] = NULL;
$arguments1133['title'] = NULL;
$arguments1133['accesskey'] = NULL;
$arguments1133['tabindex'] = NULL;
$arguments1133['onclick'] = NULL;
$arguments1133['async'] = NULL;
$arguments1133['crossorigin'] = NULL;
$arguments1133['defer'] = NULL;
$arguments1133['integrity'] = NULL;
$arguments1133['nomodule'] = NULL;
$arguments1133['nonce'] = NULL;
$arguments1133['referrerpolicy'] = NULL;
$arguments1133['src'] = NULL;
$arguments1133['type'] = NULL;
$arguments1133['identifier'] = NULL;
$arguments1133['priority'] = false;
$arguments1133['identifier'] = 'fontawesome';
$arguments1133['src'] = 'fileadmin/T3SB/Resources/Public/JS/fontawesome.min.js';

$output1132 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1133, $renderChildrenClosure1134, $renderingContext);

$output1132 .= '
	';
return $output1132;
};
$arguments1126 = array();
$arguments1126['then'] = NULL;
$arguments1126['else'] = NULL;
$arguments1126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1128 = array();
$array1129 = array (
);$array1128['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array1129);
$array1128['1'] = ' == \'1\' || ';
$array1130 = array (
);$array1128['2'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array1130);
$array1128['3'] = ' == \'3\' ';

$expression1131 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '1') || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == '3'));};
$arguments1126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1128)
					),
					$renderingContext
				);
$arguments1126['__thenClosure'] = $renderChildrenClosure1127;

$output1125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1126, $renderChildrenClosure1127, $renderingContext);

$output1125 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1136 = function() use ($renderingContext, $self) {
$output1140 = '';

$output1140 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1141 = array();
$arguments1141['additionalAttributes'] = NULL;
$arguments1141['data'] = NULL;
$arguments1141['aria'] = NULL;
$arguments1141['class'] = NULL;
$arguments1141['dir'] = NULL;
$arguments1141['id'] = NULL;
$arguments1141['lang'] = NULL;
$arguments1141['style'] = NULL;
$arguments1141['title'] = NULL;
$arguments1141['accesskey'] = NULL;
$arguments1141['tabindex'] = NULL;
$arguments1141['onclick'] = NULL;
$arguments1141['async'] = NULL;
$arguments1141['crossorigin'] = NULL;
$arguments1141['defer'] = NULL;
$arguments1141['integrity'] = NULL;
$arguments1141['nomodule'] = NULL;
$arguments1141['nonce'] = NULL;
$arguments1141['referrerpolicy'] = NULL;
$arguments1141['src'] = NULL;
$arguments1141['type'] = NULL;
$arguments1141['identifier'] = NULL;
$arguments1141['priority'] = false;
$arguments1141['identifier'] = 'fontawesome';
$arguments1141['src'] = 'fileadmin/T3SB/FA5Pro/js/all.min.js';

$output1140 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1141, $renderChildrenClosure1142, $renderingContext);

$output1140 .= '
	';
return $output1140;
};
$arguments1135 = array();
$arguments1135['then'] = NULL;
$arguments1135['else'] = NULL;
$arguments1135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1137 = array();
$array1138 = array (
);$array1137['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array1138);
$array1137['1'] = ' == \'2\' ';

$expression1139 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '2');};
$arguments1135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1137)
					),
					$renderingContext
				);
$arguments1135['__thenClosure'] = $renderChildrenClosure1136;

$output1125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1135, $renderChildrenClosure1136, $renderingContext);

$output1125 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1144 = function() use ($renderingContext, $self) {
$output1148 = '';

$output1148 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1149 = array();
$arguments1149['additionalAttributes'] = NULL;
$arguments1149['data'] = NULL;
$arguments1149['aria'] = NULL;
$arguments1149['class'] = NULL;
$arguments1149['dir'] = NULL;
$arguments1149['id'] = NULL;
$arguments1149['lang'] = NULL;
$arguments1149['style'] = NULL;
$arguments1149['title'] = NULL;
$arguments1149['accesskey'] = NULL;
$arguments1149['tabindex'] = NULL;
$arguments1149['onclick'] = NULL;
$arguments1149['async'] = NULL;
$arguments1149['crossorigin'] = NULL;
$arguments1149['defer'] = NULL;
$arguments1149['integrity'] = NULL;
$arguments1149['nomodule'] = NULL;
$arguments1149['nonce'] = NULL;
$arguments1149['referrerpolicy'] = NULL;
$arguments1149['src'] = NULL;
$arguments1149['type'] = NULL;
$arguments1149['identifier'] = NULL;
$arguments1149['priority'] = false;
$arguments1149['identifier'] = 'fontawesome';
$arguments1149['src'] = 'fileadmin/T3SB/FA6Pro/js/all.min.js';

$output1148 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1149, $renderChildrenClosure1150, $renderingContext);

$output1148 .= '
	';
return $output1148;
};
$arguments1143 = array();
$arguments1143['then'] = NULL;
$arguments1143['else'] = NULL;
$arguments1143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1145 = array();
$array1146 = array (
);$array1145['0'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.extconf', $array1146);
$array1145['1'] = ' == \'4\' ';

$expression1147 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '4');};
$arguments1143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1145)
					),
					$renderingContext
				);
$arguments1143['__thenClosure'] = $renderChildrenClosure1144;

$output1125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1143, $renderChildrenClosure1144, $renderingContext);

$output1125 .= '
';
return $output1125;
};
$arguments1120 = array();
$arguments1120['then'] = NULL;
$arguments1120['else'] = NULL;
$arguments1120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1122 = array();
$array1122['0'] = '!';
$array1123 = array (
);$array1122['1'] = $renderingContext->getVariableProvider()->getByPath('settings.fontawesome.cdn', $array1123);

$expression1124 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1122)
					),
					$renderingContext
				);
$arguments1120['__thenClosure'] = $renderChildrenClosure1121;

$output866 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1120, $renderChildrenClosure1121, $renderingContext);

$output866 .= '
';
return $output866;
};
$arguments864 = array();
$arguments864['name'] = NULL;
$arguments864['name'] = 'AssetScripts';

$output324 .= NULL;

$output324 .= '
';

return $output324;
}


}
#