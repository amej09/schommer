<?php

class partial_Page_Jumbotron_d78147ea6166896abfe0f61bb39518a925e5bff9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Default
 */
public function section_808d7dca8a74d84af27a2d6602c3d786de45fe1e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
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
$arguments1['section'] = 'Div';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['section'] = 'Content';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>
';

return $output0;
}
/**
 * section Inside
 */
public function section_8deed4efac89dc1076983f50d9dda54976214d59(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output7 = '';

$output7 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['section'] = 'Div';
$arguments8['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
				<div class="';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array79)]);

$output78 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
							<div class="';
$array98 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array98)]);

$output97 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['renderable'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['debug'] = true;
$arguments99['section'] = 'Content';
$arguments99['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output97 .= '
							</div>
						';
return $output97;
};
$arguments95 = array();

$output94 .= '';

$output94 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['section'] = NULL;
$arguments105['partial'] = NULL;
$arguments105['delegate'] = NULL;
$arguments105['renderable'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['optional'] = false;
$arguments105['default'] = NULL;
$arguments105['contentAs'] = NULL;
$arguments105['debug'] = true;
$arguments105['section'] = 'Content';
$arguments105['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
						';
return $output104;
};
$arguments102 = array();
$arguments102['if'] = NULL;

$output94 .= '';

$output94 .= '
					';
return $output94;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array92);

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
							<div class="';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array83)]);

$output82 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['debug'] = true;
$arguments84['section'] = 'Content';
$arguments84['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output82 .= '
							</div>
						';
return $output82;
};
$arguments80['__elseClosures'][] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['section'] = 'Content';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
						';
return $output87;
};

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output78 .= '
				</div>
			';
return $output78;
};
$arguments76 = array();

$output75 .= '';

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
						<div class="';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array129)]);

$output128 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['section'] = NULL;
$arguments130['partial'] = NULL;
$arguments130['delegate'] = NULL;
$arguments130['renderable'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['optional'] = false;
$arguments130['default'] = NULL;
$arguments130['contentAs'] = NULL;
$arguments130['debug'] = true;
$arguments130['section'] = 'Content';
$arguments130['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output128 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output128 .= '
						</div>
					';
return $output128;
};
$arguments126 = array();

$output125 .= '';

$output125 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['debug'] = true;
$arguments136['section'] = 'Content';
$arguments136['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
					';
return $output135;
};
$arguments133 = array();
$arguments133['if'] = NULL;

$output125 .= '';

$output125 .= '
				';
return $output125;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
						<div class="';
$array114 = array (
);
$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array114)]);

$output113 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['debug'] = true;
$arguments115['section'] = 'Content';
$arguments115['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output113 .= '
						</div>
					';
return $output113;
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['section'] = NULL;
$arguments119['partial'] = NULL;
$arguments119['delegate'] = NULL;
$arguments119['renderable'] = NULL;
$arguments119['arguments'] = array (
);
$arguments119['optional'] = false;
$arguments119['default'] = NULL;
$arguments119['contentAs'] = NULL;
$arguments119['debug'] = true;
$arguments119['section'] = 'Content';
$arguments119['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
					';
return $output118;
};

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
			';
return $output110;
};
$arguments108 = array();
$arguments108['if'] = NULL;

$output75 .= '';

$output75 .= '
		';
return $output75;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
				<div class="';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array14)]);

$output13 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
							<div class="';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array33)]);

$output32 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['section'] = 'Content';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output32 .= '
							</div>
						';
return $output32;
};
$arguments30 = array();

$output29 .= '';

$output29 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['section'] = 'Content';
$arguments40['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
						';
return $output39;
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output29 .= '';

$output29 .= '
					';
return $output29;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
							<div class="';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array18)]);

$output17 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['section'] = 'Content';
$arguments19['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output17 .= '
							</div>
						';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'Content';
$arguments23['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
						';
return $output22;
};

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output13 .= '
				</div>
			';
return $output13;
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
						<div class="';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array62)]);

$output61 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['renderable'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['debug'] = true;
$arguments63['section'] = 'Content';
$arguments63['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output61 .= '
						</div>
					';
return $output61;
};
$arguments59 = array();

$output58 .= '';

$output58 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['debug'] = true;
$arguments69['section'] = 'Content';
$arguments69['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
					';
return $output68;
};
$arguments66 = array();
$arguments66['if'] = NULL;

$output58 .= '';

$output58 .= '
				';
return $output58;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
						<div class="';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array47)]);

$output46 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['section'] = 'Content';
$arguments48['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output46 .= '
						</div>
					';
return $output46;
};
$arguments44['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['section'] = 'Content';
$arguments52['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
					';
return $output51;
};

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
			';
return $output43;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output7 .= '
	</div>
';

return $output7;
}
/**
 * section Outside
 */
public function section_b7efb76a74598f9f246f303d790fc5073191889d(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output139 = '';

$output139 .= '
	<div class="';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array140)]);

$output139 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['section'] = NULL;
$arguments141['partial'] = NULL;
$arguments141['delegate'] = NULL;
$arguments141['renderable'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['optional'] = false;
$arguments141['default'] = NULL;
$arguments141['contentAs'] = NULL;
$arguments141['debug'] = true;
$arguments141['section'] = 'Div';
$arguments141['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output139 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['section'] = NULL;
$arguments144['partial'] = NULL;
$arguments144['delegate'] = NULL;
$arguments144['renderable'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['optional'] = false;
$arguments144['default'] = NULL;
$arguments144['contentAs'] = NULL;
$arguments144['debug'] = true;
$arguments144['section'] = 'Content';
$arguments144['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output139 .= '
		</div>
	</div>
';

return $output139;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output147 = '';

$output147 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
			<div class="';
$array242 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array242)]);

$output241 .= '">
				<div class="jumbotron-content w-100">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['section'] = NULL;
$arguments249['partial'] = NULL;
$arguments249['delegate'] = NULL;
$arguments249['renderable'] = NULL;
$arguments249['arguments'] = array (
);
$arguments249['optional'] = false;
$arguments249['default'] = NULL;
$arguments249['contentAs'] = NULL;
$arguments249['debug'] = true;
$arguments249['partial'] = 'Page/Title';
$arguments249['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
					';
return $output248;
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array246);
$array245['1'] = ' == \'jumbotron\'';

$expression247 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['__thenClosure'] = $renderChildrenClosure244;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output241 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['data'] = NULL;
$arguments271['typoscriptObjectPath'] = NULL;
$arguments271['currentValueKey'] = NULL;
$arguments271['table'] = '';
$arguments271['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array274);
$array273['colPos'] = 3;
$arguments271['data'] = $array273;
$renderChildrenClosure272 = ($arguments271['data'] !== null) ? function() use ($arguments271) { return $arguments271['data']; } : $renderChildrenClosure272;
$output270 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
						';
return $output270;
};
$arguments268 = array();

$output267 .= '';

$output267 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['data'] = NULL;
$arguments278['typoscriptObjectPath'] = NULL;
$arguments278['currentValueKey'] = NULL;
$arguments278['table'] = '';
$arguments278['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array281);
$array280['colPos'] = 3;
$arguments278['data'] = $array280;
$renderChildrenClosure279 = ($arguments278['data'] !== null) ? function() use ($arguments278) { return $arguments278['data']; } : $renderChildrenClosure279;
$output277 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
						';
return $output277;
};
$arguments275 = array();
$arguments275['if'] = NULL;

$output267 .= '';

$output267 .= '
					';
return $output267;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments252['__thenClosure'] = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['data'] = NULL;
$arguments255['typoscriptObjectPath'] = NULL;
$arguments255['currentValueKey'] = NULL;
$arguments255['table'] = '';
$arguments255['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array258);
$array257['colPos'] = 3;
$arguments255['data'] = $array257;
$renderChildrenClosure256 = ($arguments255['data'] !== null) ? function() use ($arguments255) { return $arguments255['data']; } : $renderChildrenClosure256;
$output254 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
						';
return $output254;
};
$arguments252['__elseClosures'][] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['data'] = NULL;
$arguments260['typoscriptObjectPath'] = NULL;
$arguments260['currentValueKey'] = NULL;
$arguments260['table'] = '';
$arguments260['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array263);
$array262['colPos'] = 3;
$arguments260['data'] = $array262;
$renderChildrenClosure261 = ($arguments260['data'] !== null) ? function() use ($arguments260) { return $arguments260['data']; } : $renderChildrenClosure261;
$output259 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
						';
return $output259;
};

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output241 .= '
				</div>
			</div>
		';
return $output241;
};
$arguments239 = array();

$output238 .= '';

$output238 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
			<div class="jumbotron-content w-100">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['section'] = NULL;
$arguments291['partial'] = NULL;
$arguments291['delegate'] = NULL;
$arguments291['renderable'] = NULL;
$arguments291['arguments'] = array (
);
$arguments291['optional'] = false;
$arguments291['default'] = NULL;
$arguments291['contentAs'] = NULL;
$arguments291['debug'] = true;
$arguments291['partial'] = 'Page/Title';
$arguments291['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output290 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

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
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array288);
$array287['1'] = ' == \'jumbotron\'';

$expression289 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['__thenClosure'] = $renderChildrenClosure286;

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['data'] = NULL;
$arguments313['typoscriptObjectPath'] = NULL;
$arguments313['currentValueKey'] = NULL;
$arguments313['table'] = '';
$arguments313['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array316);
$array315['colPos'] = 3;
$arguments313['data'] = $array315;
$renderChildrenClosure314 = ($arguments313['data'] !== null) ? function() use ($arguments313) { return $arguments313['data']; } : $renderChildrenClosure314;
$output312 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
					';
return $output312;
};
$arguments310 = array();

$output309 .= '';

$output309 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['data'] = NULL;
$arguments320['typoscriptObjectPath'] = NULL;
$arguments320['currentValueKey'] = NULL;
$arguments320['table'] = '';
$arguments320['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array322 = array();
$array323 = array (
);$array322['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array323);
$array322['colPos'] = 3;
$arguments320['data'] = $array322;
$renderChildrenClosure321 = ($arguments320['data'] !== null) ? function() use ($arguments320) { return $arguments320['data']; } : $renderChildrenClosure321;
$output319 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
					';
return $output319;
};
$arguments317 = array();
$arguments317['if'] = NULL;

$output309 .= '';

$output309 .= '
				';
return $output309;
};
$arguments294 = array();
$arguments294['then'] = NULL;
$arguments294['else'] = NULL;
$arguments294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array306 = array();
$array307 = array (
);$array306['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array307);

$expression308 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array306)
					),
					$renderingContext
				);
$arguments294['__thenClosure'] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['data'] = NULL;
$arguments297['typoscriptObjectPath'] = NULL;
$arguments297['currentValueKey'] = NULL;
$arguments297['table'] = '';
$arguments297['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array300);
$array299['colPos'] = 3;
$arguments297['data'] = $array299;
$renderChildrenClosure298 = ($arguments297['data'] !== null) ? function() use ($arguments297) { return $arguments297['data']; } : $renderChildrenClosure298;
$output296 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output296 .= '
					';
return $output296;
};
$arguments294['__elseClosures'][] = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['data'] = NULL;
$arguments302['typoscriptObjectPath'] = NULL;
$arguments302['currentValueKey'] = NULL;
$arguments302['table'] = '';
$arguments302['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array305);
$array304['colPos'] = 3;
$arguments302['data'] = $array304;
$renderChildrenClosure303 = ($arguments302['data'] !== null) ? function() use ($arguments302) { return $arguments302['data']; } : $renderChildrenClosure303;
$output301 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
					';
return $output301;
};

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output284 .= '
			</div>
		';
return $output284;
};
$arguments282 = array();
$arguments282['if'] = NULL;

$output238 .= '';

$output238 .= '
	';
return $output238;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array231['0'] = '(';
$array232 = array (
);$array231['1'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array232);
$array231['2'] = ' && !';
$array233 = array (
);$array231['3'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array233);
$array231['4'] = ')
	 || (';
$array234 = array (
);$array231['5'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array234);
$array231['6'] = ' && ';
$array235 = array (
);$array231['7'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array235);
$array231['8'] = ' && ';
$array236 = array (
);$array231['9'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array236);
$array231['10'] = ' == \'Outside\')';

$expression237 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]))) || ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node5"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node7"])) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node9"]) == 'Outside')));};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);
$arguments148['__thenClosure'] = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
			<div class="';
$array151 = array (
);
$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array151)]);

$output150 .= '">
				<div class="jumbotron-content w-100">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['section'] = NULL;
$arguments158['partial'] = NULL;
$arguments158['delegate'] = NULL;
$arguments158['renderable'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['optional'] = false;
$arguments158['default'] = NULL;
$arguments158['contentAs'] = NULL;
$arguments158['debug'] = true;
$arguments158['partial'] = 'Page/Title';
$arguments158['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

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
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array155);
$array154['1'] = ' == \'jumbotron\'';

$expression156 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output150 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['data'] = NULL;
$arguments180['typoscriptObjectPath'] = NULL;
$arguments180['currentValueKey'] = NULL;
$arguments180['table'] = '';
$arguments180['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array183);
$array182['colPos'] = 3;
$arguments180['data'] = $array182;
$renderChildrenClosure181 = ($arguments180['data'] !== null) ? function() use ($arguments180) { return $arguments180['data']; } : $renderChildrenClosure181;
$output179 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
						';
return $output179;
};
$arguments177 = array();

$output176 .= '';

$output176 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['data'] = NULL;
$arguments187['typoscriptObjectPath'] = NULL;
$arguments187['currentValueKey'] = NULL;
$arguments187['table'] = '';
$arguments187['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array190);
$array189['colPos'] = 3;
$arguments187['data'] = $array189;
$renderChildrenClosure188 = ($arguments187['data'] !== null) ? function() use ($arguments187) { return $arguments187['data']; } : $renderChildrenClosure188;
$output186 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
						';
return $output186;
};
$arguments184 = array();
$arguments184['if'] = NULL;

$output176 .= '';

$output176 .= '
					';
return $output176;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array174);

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['data'] = NULL;
$arguments164['typoscriptObjectPath'] = NULL;
$arguments164['currentValueKey'] = NULL;
$arguments164['table'] = '';
$arguments164['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array167);
$array166['colPos'] = 3;
$arguments164['data'] = $array166;
$renderChildrenClosure165 = ($arguments164['data'] !== null) ? function() use ($arguments164) { return $arguments164['data']; } : $renderChildrenClosure165;
$output163 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
						';
return $output163;
};
$arguments161['__elseClosures'][] = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['data'] = NULL;
$arguments169['typoscriptObjectPath'] = NULL;
$arguments169['currentValueKey'] = NULL;
$arguments169['table'] = '';
$arguments169['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array172);
$array171['colPos'] = 3;
$arguments169['data'] = $array171;
$renderChildrenClosure170 = ($arguments169['data'] !== null) ? function() use ($arguments169) { return $arguments169['data']; } : $renderChildrenClosure170;
$output168 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
						';
return $output168;
};

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output150 .= '
				</div>
			</div>
		';
return $output150;
};
$arguments148['__elseClosures'][] = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
			<div class="jumbotron-content w-100">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['section'] = NULL;
$arguments198['partial'] = NULL;
$arguments198['delegate'] = NULL;
$arguments198['renderable'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['optional'] = false;
$arguments198['default'] = NULL;
$arguments198['contentAs'] = NULL;
$arguments198['debug'] = true;
$arguments198['partial'] = 'Page/Title';
$arguments198['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
				';
return $output197;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array195);
$array194['1'] = ' == \'jumbotron\'';

$expression196 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['data'] = NULL;
$arguments220['typoscriptObjectPath'] = NULL;
$arguments220['currentValueKey'] = NULL;
$arguments220['table'] = '';
$arguments220['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array223);
$array222['colPos'] = 3;
$arguments220['data'] = $array222;
$renderChildrenClosure221 = ($arguments220['data'] !== null) ? function() use ($arguments220) { return $arguments220['data']; } : $renderChildrenClosure221;
$output219 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
					';
return $output219;
};
$arguments217 = array();

$output216 .= '';

$output216 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['data'] = NULL;
$arguments227['typoscriptObjectPath'] = NULL;
$arguments227['currentValueKey'] = NULL;
$arguments227['table'] = '';
$arguments227['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array230);
$array229['colPos'] = 3;
$arguments227['data'] = $array229;
$renderChildrenClosure228 = ($arguments227['data'] !== null) ? function() use ($arguments227) { return $arguments227['data']; } : $renderChildrenClosure228;
$output226 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
					';
return $output226;
};
$arguments224 = array();
$arguments224['if'] = NULL;

$output216 .= '';

$output216 .= '
				';
return $output216;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['data'] = NULL;
$arguments204['typoscriptObjectPath'] = NULL;
$arguments204['currentValueKey'] = NULL;
$arguments204['table'] = '';
$arguments204['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array207);
$array206['colPos'] = 3;
$arguments204['data'] = $array206;
$renderChildrenClosure205 = ($arguments204['data'] !== null) ? function() use ($arguments204) { return $arguments204['data']; } : $renderChildrenClosure205;
$output203 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
					';
return $output203;
};
$arguments201['__elseClosures'][] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['data'] = NULL;
$arguments209['typoscriptObjectPath'] = NULL;
$arguments209['currentValueKey'] = NULL;
$arguments209['table'] = '';
$arguments209['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array212);
$array211['colPos'] = 3;
$arguments209['data'] = $array211;
$renderChildrenClosure210 = ($arguments209['data'] !== null) ? function() use ($arguments209) { return $arguments209['data']; } : $renderChildrenClosure210;
$output208 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
					';
return $output208;
};

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output191 .= '
			</div>
		';
return $output191;
};

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
';

return $output147;
}
/**
 * section Div
 */
public function section_fb7c5e4b77643e7474e2d21dd2896fc952052045(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output324 = '';

$output324 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
			<div id="s';
$array339 = array (
);
$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array339)]);

$output338 .= '" class="jumbotron background-image';
$array340 = array (
);
$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array340)]);

$output338 .= '">
		';
return $output338;
};
$arguments336 = array();

$output335 .= '';

$output335 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
			<div class="jumbotron';
$array344 = array (
);
$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array344)]);

$output343 .= '">
		';
return $output343;
};
$arguments341 = array();
$arguments341['if'] = NULL;

$output335 .= '';

$output335 .= '
	';
return $output335;
};
$arguments325 = array();
$arguments325['then'] = NULL;
$arguments325['else'] = NULL;
$arguments325['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.bgImage', $array333);

$expression334 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments325['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression334(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array332)
					),
					$renderingContext
				);
$arguments325['__thenClosure'] = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
			<div id="s';
$array328 = array (
);
$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array328)]);

$output327 .= '" class="jumbotron background-image';
$array329 = array (
);
$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array329)]);

$output327 .= '">
		';
return $output327;
};
$arguments325['__elseClosures'][] = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
			<div class="jumbotron';
$array331 = array (
);
$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array331)]);

$output330 .= '">
		';
return $output330;
};

$output324 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
';

return $output324;
}
/**
 * section JumboBgSlider
 */
public function section_090fbb2c3f7a3566327837f98892a9352bd3411a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output345 = '';

$output345 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return '
	// Carousel - Page/Jumbotron.html
	var jumbotronContent = document.querySelectorAll(\'#jumbotron-content-wrapper .jumbotron-content\')[0];
	var jumbotronCarousels = document.querySelectorAll(\'#carouselJumbotron.carousel .carousel-inner\')[0];
	if( jumbotronCarousels.clientHeight < jumbotronContent.clientHeight ) {
		let slideHeight = jumbotronContent.clientHeight + 30;
		jumbotronCarousels.style.minHeight = slideHeight+\'px\';
	}
		';
};
$arguments352 = array();
$arguments352['additionalAttributes'] = NULL;
$arguments352['data'] = NULL;
$arguments352['aria'] = NULL;
$arguments352['class'] = NULL;
$arguments352['dir'] = NULL;
$arguments352['id'] = NULL;
$arguments352['lang'] = NULL;
$arguments352['style'] = NULL;
$arguments352['title'] = NULL;
$arguments352['accesskey'] = NULL;
$arguments352['tabindex'] = NULL;
$arguments352['onclick'] = NULL;
$arguments352['async'] = NULL;
$arguments352['crossorigin'] = NULL;
$arguments352['defer'] = NULL;
$arguments352['integrity'] = NULL;
$arguments352['nomodule'] = NULL;
$arguments352['nonce'] = NULL;
$arguments352['referrerpolicy'] = NULL;
$arguments352['src'] = NULL;
$arguments352['type'] = NULL;
$arguments352['identifier'] = NULL;
$arguments352['priority'] = false;
$arguments352['identifier'] = 'vanilla_jumbotronCarousel';

$output351 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output351 .= '
	';
return $output351;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
$array349 = array (
);$array348['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.noBgRatio', $array349);

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments346['__thenClosure'] = $renderChildrenClosure347;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output345 .= '
	<div id="jumbotron-background-carousel" class="jumbotron';
$array354 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array354)]);

$output345 .= '" >
		<div id="carouselJumbotron" class="carousel slide" data-bs-ride="carousel" data-bs-interval="';
$array355 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.jumbotronCarouselInterval', $array355)]);

$output345 .= '"
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.jumbotronCarouselPause', $array359);

$expression360 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments356['then'] = ' data-bs-pause="hover"';

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output345 .= '>
			<div class="carousel-indicators">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
					<button type="button" data-bs-target="#carouselJumbotron" data-bs-slide-to="';
$array365 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.index', $array365)]);

$output364 .= '" aria-label="Slide ';
$array366 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array366)]);

$output364 .= '"
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments367['then'] = ' class="active"';

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['then'] = NULL;
$arguments372['else'] = NULL;
$arguments372['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array375);

$expression376 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments372['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
$output377 = '';

$output377 .= ' aria-label="Slide ';
$array378 = array (
);
$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array378)]);

$output377 .= '"';
$arguments372['then'] = $output377;

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output364 .= '></button>
				';
return $output364;
};
$arguments361 = array();
$arguments361['each'] = NULL;
$arguments361['as'] = NULL;
$arguments361['key'] = NULL;
$arguments361['reverse'] = false;
$arguments361['iteration'] = NULL;
$array363 = array (
);$arguments361['each'] = $renderingContext->getVariableProvider()->getByPath('bgSlides', $array363);
$arguments361['as'] = 'slide';
$arguments361['iteration'] = 'iterator';

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output345 .= '
			</div>
			<div id="jumbotron-content-wrapper" class="d-flex card-img-overlay" style="z-index: 1">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
						<div class="';
$array399 = array (
);
$output398 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array399)]);

$output398 .= ' align-self-';
$array400 = array (
);
$output398 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array400)]);

$output398 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['section'] = NULL;
$arguments401['partial'] = NULL;
$arguments401['delegate'] = NULL;
$arguments401['renderable'] = NULL;
$arguments401['arguments'] = array (
);
$arguments401['optional'] = false;
$arguments401['default'] = NULL;
$arguments401['contentAs'] = NULL;
$arguments401['debug'] = true;
$arguments401['section'] = 'Content';
$arguments401['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output398 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output398 .= '
						</div>
					';
return $output398;
};
$arguments396 = array();

$output395 .= '';

$output395 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
						<div class="align-self-';
$array407 = array (
);
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array407)]);

$output406 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['section'] = NULL;
$arguments408['partial'] = NULL;
$arguments408['delegate'] = NULL;
$arguments408['renderable'] = NULL;
$arguments408['arguments'] = array (
);
$arguments408['optional'] = false;
$arguments408['default'] = NULL;
$arguments408['contentAs'] = NULL;
$arguments408['debug'] = true;
$arguments408['section'] = 'Content';
$arguments408['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output406 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output406 .= '
						</div>
					';
return $output406;
};
$arguments404 = array();
$arguments404['if'] = NULL;

$output395 .= '';

$output395 .= '
				';
return $output395;
};
$arguments379 = array();
$arguments379['then'] = NULL;
$arguments379['else'] = NULL;
$arguments379['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array393);
$array392['1'] = ' == \'Inside\'';

$expression394 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Inside');};
$arguments379['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments379['__thenClosure'] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
						<div class="';
$array382 = array (
);
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array382)]);

$output381 .= ' align-self-';
$array383 = array (
);
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array383)]);

$output381 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['section'] = NULL;
$arguments384['partial'] = NULL;
$arguments384['delegate'] = NULL;
$arguments384['renderable'] = NULL;
$arguments384['arguments'] = array (
);
$arguments384['optional'] = false;
$arguments384['default'] = NULL;
$arguments384['contentAs'] = NULL;
$arguments384['debug'] = true;
$arguments384['section'] = 'Content';
$arguments384['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output381 .= '
						</div>
					';
return $output381;
};
$arguments379['__elseClosures'][] = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
						<div class="align-self-';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array388)]);

$output387 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['section'] = NULL;
$arguments389['partial'] = NULL;
$arguments389['delegate'] = NULL;
$arguments389['renderable'] = NULL;
$arguments389['arguments'] = array (
);
$arguments389['optional'] = false;
$arguments389['default'] = NULL;
$arguments389['contentAs'] = NULL;
$arguments389['debug'] = true;
$arguments389['section'] = 'Content';
$arguments389['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output387 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output387 .= '
						</div>
					';
return $output387;
};

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output345 .= '
			</div>
			<div class="carousel-inner h-100" role="listbox">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return '	background-image by css ';
};
$arguments411 = array();

$output345 .= NULL;

$output345 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
					<div id="s';
$array417 = array (
);
$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array417)]);

$output416 .= '-';
$array418 = array (
);
$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array418)]);

$output416 .= '" class="carousel-item background-image h-100 position-absolute"></div>
				';
return $output416;
};
$arguments413 = array();
$arguments413['each'] = NULL;
$arguments413['as'] = NULL;
$arguments413['key'] = NULL;
$arguments413['reverse'] = false;
$arguments413['iteration'] = NULL;
$array415 = array (
);$arguments413['each'] = $renderingContext->getVariableProvider()->getByPath('bgSlides', $array415);
$arguments413['as'] = 'slide';
$arguments413['iteration'] = 'iterator';

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output345 .= '
			</div>
			<button class="carousel-control-prev" data-bs-target="#carouselJumbotron" type="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" data-bs-target="#carouselJumbotron" type="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
';

return $output345;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output419 = '';

$output419 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$output764 = '';

$output764 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return ' SLIDER ';
};
$arguments765 = array();

$output764 .= NULL;

$output764 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['section'] = NULL;
$arguments767['partial'] = NULL;
$arguments767['delegate'] = NULL;
$arguments767['renderable'] = NULL;
$arguments767['arguments'] = array (
);
$arguments767['optional'] = false;
$arguments767['default'] = NULL;
$arguments767['contentAs'] = NULL;
$arguments767['debug'] = true;
$arguments767['partial'] = 'Page/Assets';
// Rendering Array
$array769 = array();
$array769['carousel'] = 'true';
$arguments767['arguments'] = $array769;

$output764 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);

$output764 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
$output919 = '';

$output919 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure921 = function() use ($renderingContext, $self) {
$output988 = '';

$output988 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
$output991 = '';

$output991 .= '
							<div class="';
$array992 = array (
);
$output991 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array992)]);

$output991 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure994 = function() use ($renderingContext, $self) {
$output1009 = '';

$output1009 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
$output1012 = '';

$output1012 .= '
										<div class="';
$array1013 = array (
);
$output1012 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1013)]);

$output1012 .= '">
											<div class="';
$array1014 = array (
);
$output1012 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1014)]);

$output1012 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1016 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1015 = array();
$arguments1015['section'] = NULL;
$arguments1015['partial'] = NULL;
$arguments1015['delegate'] = NULL;
$arguments1015['renderable'] = NULL;
$arguments1015['arguments'] = array (
);
$arguments1015['optional'] = false;
$arguments1015['default'] = NULL;
$arguments1015['contentAs'] = NULL;
$arguments1015['debug'] = true;
$arguments1015['section'] = 'JumboBgSlider';
$arguments1015['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1012 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1015, $renderChildrenClosure1016, $renderingContext);

$output1012 .= '
											</div>
										</div>
									';
return $output1012;
};
$arguments1010 = array();

$output1009 .= '';

$output1009 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
$output1020 = '';

$output1020 .= '
										<div class="';
$array1021 = array (
);
$output1020 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1021)]);

$output1020 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1022 = array();
$arguments1022['section'] = NULL;
$arguments1022['partial'] = NULL;
$arguments1022['delegate'] = NULL;
$arguments1022['renderable'] = NULL;
$arguments1022['arguments'] = array (
);
$arguments1022['optional'] = false;
$arguments1022['default'] = NULL;
$arguments1022['contentAs'] = NULL;
$arguments1022['debug'] = true;
$arguments1022['section'] = 'JumboBgSlider';
$arguments1022['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1020 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext);

$output1020 .= '
										</div>
									';
return $output1020;
};
$arguments1018 = array();
$arguments1018['if'] = NULL;

$output1009 .= '';

$output1009 .= '
								';
return $output1009;
};
$arguments993 = array();
$arguments993['then'] = NULL;
$arguments993['else'] = NULL;
$arguments993['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1006 = array();
$array1007 = array (
);$array1006['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1007);

$expression1008 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments993['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1008(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1006)
					),
					$renderingContext
				);
$arguments993['__thenClosure'] = function() use ($renderingContext, $self) {
$output995 = '';

$output995 .= '
										<div class="';
$array996 = array (
);
$output995 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array996)]);

$output995 .= '">
											<div class="';
$array997 = array (
);
$output995 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array997)]);

$output995 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments998 = array();
$arguments998['section'] = NULL;
$arguments998['partial'] = NULL;
$arguments998['delegate'] = NULL;
$arguments998['renderable'] = NULL;
$arguments998['arguments'] = array (
);
$arguments998['optional'] = false;
$arguments998['default'] = NULL;
$arguments998['contentAs'] = NULL;
$arguments998['debug'] = true;
$arguments998['section'] = 'JumboBgSlider';
$arguments998['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output995 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments998, $renderChildrenClosure999, $renderingContext);

$output995 .= '
											</div>
										</div>
									';
return $output995;
};
$arguments993['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1001 = '';

$output1001 .= '
										<div class="';
$array1002 = array (
);
$output1001 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1002)]);

$output1001 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1004 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1003 = array();
$arguments1003['section'] = NULL;
$arguments1003['partial'] = NULL;
$arguments1003['delegate'] = NULL;
$arguments1003['renderable'] = NULL;
$arguments1003['arguments'] = array (
);
$arguments1003['optional'] = false;
$arguments1003['default'] = NULL;
$arguments1003['contentAs'] = NULL;
$arguments1003['debug'] = true;
$arguments1003['section'] = 'JumboBgSlider';
$arguments1003['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1001 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1003, $renderChildrenClosure1004, $renderingContext);

$output1001 .= '
										</div>
									';
return $output1001;
};

$output991 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments993, $renderChildrenClosure994, $renderingContext);

$output991 .= '
							</div>
						';
return $output991;
};
$arguments989 = array();

$output988 .= '';

$output988 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
$output1027 = '';

$output1027 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1029 = function() use ($renderingContext, $self) {
$output1042 = '';

$output1042 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
$output1045 = '';

$output1045 .= '
									<div class="';
$array1046 = array (
);
$output1045 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1046)]);

$output1045 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1047 = array();
$arguments1047['section'] = NULL;
$arguments1047['partial'] = NULL;
$arguments1047['delegate'] = NULL;
$arguments1047['renderable'] = NULL;
$arguments1047['arguments'] = array (
);
$arguments1047['optional'] = false;
$arguments1047['default'] = NULL;
$arguments1047['contentAs'] = NULL;
$arguments1047['debug'] = true;
$arguments1047['section'] = 'JumboBgSlider';
$arguments1047['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1045 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1047, $renderChildrenClosure1048, $renderingContext);

$output1045 .= '
									</div>
								';
return $output1045;
};
$arguments1043 = array();

$output1042 .= '';

$output1042 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
$output1052 = '';

$output1052 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1053 = array();
$arguments1053['section'] = NULL;
$arguments1053['partial'] = NULL;
$arguments1053['delegate'] = NULL;
$arguments1053['renderable'] = NULL;
$arguments1053['arguments'] = array (
);
$arguments1053['optional'] = false;
$arguments1053['default'] = NULL;
$arguments1053['contentAs'] = NULL;
$arguments1053['debug'] = true;
$arguments1053['section'] = 'JumboBgSlider';
$arguments1053['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1052 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext);

$output1052 .= '
								';
return $output1052;
};
$arguments1050 = array();
$arguments1050['if'] = NULL;

$output1042 .= '';

$output1042 .= '
							';
return $output1042;
};
$arguments1028 = array();
$arguments1028['then'] = NULL;
$arguments1028['else'] = NULL;
$arguments1028['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1039 = array();
$array1040 = array (
);$array1039['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1040);

$expression1041 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1028['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1041(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1039)
					),
					$renderingContext
				);
$arguments1028['__thenClosure'] = function() use ($renderingContext, $self) {
$output1030 = '';

$output1030 .= '
									<div class="';
$array1031 = array (
);
$output1030 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1031)]);

$output1030 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1033 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1032 = array();
$arguments1032['section'] = NULL;
$arguments1032['partial'] = NULL;
$arguments1032['delegate'] = NULL;
$arguments1032['renderable'] = NULL;
$arguments1032['arguments'] = array (
);
$arguments1032['optional'] = false;
$arguments1032['default'] = NULL;
$arguments1032['contentAs'] = NULL;
$arguments1032['debug'] = true;
$arguments1032['section'] = 'JumboBgSlider';
$arguments1032['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1030 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1032, $renderChildrenClosure1033, $renderingContext);

$output1030 .= '
									</div>
								';
return $output1030;
};
$arguments1028['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1035 = '';

$output1035 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['section'] = NULL;
$arguments1036['partial'] = NULL;
$arguments1036['delegate'] = NULL;
$arguments1036['renderable'] = NULL;
$arguments1036['arguments'] = array (
);
$arguments1036['optional'] = false;
$arguments1036['default'] = NULL;
$arguments1036['contentAs'] = NULL;
$arguments1036['debug'] = true;
$arguments1036['section'] = 'JumboBgSlider';
$arguments1036['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1035 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1035 .= '
								';
return $output1035;
};

$output1027 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1028, $renderChildrenClosure1029, $renderingContext);

$output1027 .= '
						';
return $output1027;
};
$arguments1025 = array();
$arguments1025['if'] = NULL;

$output988 .= '';

$output988 .= '
					';
return $output988;
};
$arguments920 = array();
$arguments920['then'] = NULL;
$arguments920['else'] = NULL;
$arguments920['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array985 = array();
$array986 = array (
);$array985['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array986);

$expression987 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments920['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression987(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array985)
					),
					$renderingContext
				);
$arguments920['__thenClosure'] = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
							<div class="';
$array923 = array (
);
$output922 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array923)]);

$output922 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
$output943 = '';

$output943 .= '
										<div class="';
$array944 = array (
);
$output943 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array944)]);

$output943 .= '">
											<div class="';
$array945 = array (
);
$output943 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array945)]);

$output943 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure947 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments946 = array();
$arguments946['section'] = NULL;
$arguments946['partial'] = NULL;
$arguments946['delegate'] = NULL;
$arguments946['renderable'] = NULL;
$arguments946['arguments'] = array (
);
$arguments946['optional'] = false;
$arguments946['default'] = NULL;
$arguments946['contentAs'] = NULL;
$arguments946['debug'] = true;
$arguments946['section'] = 'JumboBgSlider';
$arguments946['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output943 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments946, $renderChildrenClosure947, $renderingContext);

$output943 .= '
											</div>
										</div>
									';
return $output943;
};
$arguments941 = array();

$output940 .= '';

$output940 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
$output951 = '';

$output951 .= '
										<div class="';
$array952 = array (
);
$output951 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array952)]);

$output951 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments953 = array();
$arguments953['section'] = NULL;
$arguments953['partial'] = NULL;
$arguments953['delegate'] = NULL;
$arguments953['renderable'] = NULL;
$arguments953['arguments'] = array (
);
$arguments953['optional'] = false;
$arguments953['default'] = NULL;
$arguments953['contentAs'] = NULL;
$arguments953['debug'] = true;
$arguments953['section'] = 'JumboBgSlider';
$arguments953['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output951 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext);

$output951 .= '
										</div>
									';
return $output951;
};
$arguments949 = array();
$arguments949['if'] = NULL;

$output940 .= '';

$output940 .= '
								';
return $output940;
};
$arguments924 = array();
$arguments924['then'] = NULL;
$arguments924['else'] = NULL;
$arguments924['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array937 = array();
$array938 = array (
);$array937['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array938);

$expression939 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments924['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression939(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array937)
					),
					$renderingContext
				);
$arguments924['__thenClosure'] = function() use ($renderingContext, $self) {
$output926 = '';

$output926 .= '
										<div class="';
$array927 = array (
);
$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array927)]);

$output926 .= '">
											<div class="';
$array928 = array (
);
$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array928)]);

$output926 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure930 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments929 = array();
$arguments929['section'] = NULL;
$arguments929['partial'] = NULL;
$arguments929['delegate'] = NULL;
$arguments929['renderable'] = NULL;
$arguments929['arguments'] = array (
);
$arguments929['optional'] = false;
$arguments929['default'] = NULL;
$arguments929['contentAs'] = NULL;
$arguments929['debug'] = true;
$arguments929['section'] = 'JumboBgSlider';
$arguments929['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output926 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments929, $renderChildrenClosure930, $renderingContext);

$output926 .= '
											</div>
										</div>
									';
return $output926;
};
$arguments924['__elseClosures'][] = function() use ($renderingContext, $self) {
$output932 = '';

$output932 .= '
										<div class="';
$array933 = array (
);
$output932 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array933)]);

$output932 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments934 = array();
$arguments934['section'] = NULL;
$arguments934['partial'] = NULL;
$arguments934['delegate'] = NULL;
$arguments934['renderable'] = NULL;
$arguments934['arguments'] = array (
);
$arguments934['optional'] = false;
$arguments934['default'] = NULL;
$arguments934['contentAs'] = NULL;
$arguments934['debug'] = true;
$arguments934['section'] = 'JumboBgSlider';
$arguments934['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output932 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output932 .= '
										</div>
									';
return $output932;
};

$output922 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext);

$output922 .= '
							</div>
						';
return $output922;
};
$arguments920['__elseClosures'][] = function() use ($renderingContext, $self) {
$output956 = '';

$output956 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
$output971 = '';

$output971 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure973 = function() use ($renderingContext, $self) {
$output974 = '';

$output974 .= '
									<div class="';
$array975 = array (
);
$output974 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array975)]);

$output974 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments976 = array();
$arguments976['section'] = NULL;
$arguments976['partial'] = NULL;
$arguments976['delegate'] = NULL;
$arguments976['renderable'] = NULL;
$arguments976['arguments'] = array (
);
$arguments976['optional'] = false;
$arguments976['default'] = NULL;
$arguments976['contentAs'] = NULL;
$arguments976['debug'] = true;
$arguments976['section'] = 'JumboBgSlider';
$arguments976['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output974 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments976, $renderChildrenClosure977, $renderingContext);

$output974 .= '
									</div>
								';
return $output974;
};
$arguments972 = array();

$output971 .= '';

$output971 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure980 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure983 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments982 = array();
$arguments982['section'] = NULL;
$arguments982['partial'] = NULL;
$arguments982['delegate'] = NULL;
$arguments982['renderable'] = NULL;
$arguments982['arguments'] = array (
);
$arguments982['optional'] = false;
$arguments982['default'] = NULL;
$arguments982['contentAs'] = NULL;
$arguments982['debug'] = true;
$arguments982['section'] = 'JumboBgSlider';
$arguments982['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output981 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments982, $renderChildrenClosure983, $renderingContext);

$output981 .= '
								';
return $output981;
};
$arguments979 = array();
$arguments979['if'] = NULL;

$output971 .= '';

$output971 .= '
							';
return $output971;
};
$arguments957 = array();
$arguments957['then'] = NULL;
$arguments957['else'] = NULL;
$arguments957['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array968 = array();
$array969 = array (
);$array968['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array969);

$expression970 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments957['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression970(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array968)
					),
					$renderingContext
				);
$arguments957['__thenClosure'] = function() use ($renderingContext, $self) {
$output959 = '';

$output959 .= '
									<div class="';
$array960 = array (
);
$output959 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array960)]);

$output959 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments961 = array();
$arguments961['section'] = NULL;
$arguments961['partial'] = NULL;
$arguments961['delegate'] = NULL;
$arguments961['renderable'] = NULL;
$arguments961['arguments'] = array (
);
$arguments961['optional'] = false;
$arguments961['default'] = NULL;
$arguments961['contentAs'] = NULL;
$arguments961['debug'] = true;
$arguments961['section'] = 'JumboBgSlider';
$arguments961['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output959 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output959 .= '
									</div>
								';
return $output959;
};
$arguments957['__elseClosures'][] = function() use ($renderingContext, $self) {
$output964 = '';

$output964 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments965 = array();
$arguments965['section'] = NULL;
$arguments965['partial'] = NULL;
$arguments965['delegate'] = NULL;
$arguments965['renderable'] = NULL;
$arguments965['arguments'] = array (
);
$arguments965['optional'] = false;
$arguments965['default'] = NULL;
$arguments965['contentAs'] = NULL;
$arguments965['debug'] = true;
$arguments965['section'] = 'JumboBgSlider';
$arguments965['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output964 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments965, $renderChildrenClosure966, $renderingContext);

$output964 .= '
								';
return $output964;
};

$output956 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments957, $renderChildrenClosure958, $renderingContext);

$output956 .= '
						';
return $output956;
};

$output919 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments920, $renderChildrenClosure921, $renderingContext);

$output919 .= '
				';
return $output919;
};
$arguments917 = array();

$output916 .= '';

$output916 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1057 = function() use ($renderingContext, $self) {
$output1058 = '';

$output1058 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1059 = array();
$arguments1059['section'] = NULL;
$arguments1059['partial'] = NULL;
$arguments1059['delegate'] = NULL;
$arguments1059['renderable'] = NULL;
$arguments1059['arguments'] = array (
);
$arguments1059['optional'] = false;
$arguments1059['default'] = NULL;
$arguments1059['contentAs'] = NULL;
$arguments1059['debug'] = true;
$arguments1059['section'] = 'JumboBgSlider';
$arguments1059['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1058 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1059, $renderChildrenClosure1060, $renderingContext);

$output1058 .= '
				';
return $output1058;
};
$arguments1056 = array();
$arguments1056['if'] = NULL;

$output916 .= '';

$output916 .= '
			';
return $output916;
};
$arguments770 = array();
$arguments770['then'] = NULL;
$arguments770['else'] = NULL;
$arguments770['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array913 = array();
$array914 = array (
);$array913['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array914);
$array913['1'] = ' == \'Outside\'';

$expression915 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Outside');};
$arguments770['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression915(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array913)
					),
					$renderingContext
				);
$arguments770['__thenClosure'] = function() use ($renderingContext, $self) {
$output772 = '';

$output772 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure774 = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$output844 = '';

$output844 .= '
							<div class="';
$array845 = array (
);
$output844 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array845)]);

$output844 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure847 = function() use ($renderingContext, $self) {
$output862 = '';

$output862 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '
										<div class="';
$array866 = array (
);
$output865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array866)]);

$output865 .= '">
											<div class="';
$array867 = array (
);
$output865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array867)]);

$output865 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments868 = array();
$arguments868['section'] = NULL;
$arguments868['partial'] = NULL;
$arguments868['delegate'] = NULL;
$arguments868['renderable'] = NULL;
$arguments868['arguments'] = array (
);
$arguments868['optional'] = false;
$arguments868['default'] = NULL;
$arguments868['contentAs'] = NULL;
$arguments868['debug'] = true;
$arguments868['section'] = 'JumboBgSlider';
$arguments868['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output865 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments868, $renderChildrenClosure869, $renderingContext);

$output865 .= '
											</div>
										</div>
									';
return $output865;
};
$arguments863 = array();

$output862 .= '';

$output862 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '
										<div class="';
$array874 = array (
);
$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array874)]);

$output873 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments875 = array();
$arguments875['section'] = NULL;
$arguments875['partial'] = NULL;
$arguments875['delegate'] = NULL;
$arguments875['renderable'] = NULL;
$arguments875['arguments'] = array (
);
$arguments875['optional'] = false;
$arguments875['default'] = NULL;
$arguments875['contentAs'] = NULL;
$arguments875['debug'] = true;
$arguments875['section'] = 'JumboBgSlider';
$arguments875['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output873 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments875, $renderChildrenClosure876, $renderingContext);

$output873 .= '
										</div>
									';
return $output873;
};
$arguments871 = array();
$arguments871['if'] = NULL;

$output862 .= '';

$output862 .= '
								';
return $output862;
};
$arguments846 = array();
$arguments846['then'] = NULL;
$arguments846['else'] = NULL;
$arguments846['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array859 = array();
$array860 = array (
);$array859['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array860);

$expression861 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments846['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression861(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array859)
					),
					$renderingContext
				);
$arguments846['__thenClosure'] = function() use ($renderingContext, $self) {
$output848 = '';

$output848 .= '
										<div class="';
$array849 = array (
);
$output848 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array849)]);

$output848 .= '">
											<div class="';
$array850 = array (
);
$output848 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array850)]);

$output848 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments851 = array();
$arguments851['section'] = NULL;
$arguments851['partial'] = NULL;
$arguments851['delegate'] = NULL;
$arguments851['renderable'] = NULL;
$arguments851['arguments'] = array (
);
$arguments851['optional'] = false;
$arguments851['default'] = NULL;
$arguments851['contentAs'] = NULL;
$arguments851['debug'] = true;
$arguments851['section'] = 'JumboBgSlider';
$arguments851['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output848 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments851, $renderChildrenClosure852, $renderingContext);

$output848 .= '
											</div>
										</div>
									';
return $output848;
};
$arguments846['__elseClosures'][] = function() use ($renderingContext, $self) {
$output854 = '';

$output854 .= '
										<div class="';
$array855 = array (
);
$output854 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array855)]);

$output854 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments856 = array();
$arguments856['section'] = NULL;
$arguments856['partial'] = NULL;
$arguments856['delegate'] = NULL;
$arguments856['renderable'] = NULL;
$arguments856['arguments'] = array (
);
$arguments856['optional'] = false;
$arguments856['default'] = NULL;
$arguments856['contentAs'] = NULL;
$arguments856['debug'] = true;
$arguments856['section'] = 'JumboBgSlider';
$arguments856['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output854 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext);

$output854 .= '
										</div>
									';
return $output854;
};

$output844 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments846, $renderChildrenClosure847, $renderingContext);

$output844 .= '
							</div>
						';
return $output844;
};
$arguments842 = array();

$output841 .= '';

$output841 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
$output880 = '';

$output880 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure882 = function() use ($renderingContext, $self) {
$output895 = '';

$output895 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$output898 = '';

$output898 .= '
									<div class="';
$array899 = array (
);
$output898 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array899)]);

$output898 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments900 = array();
$arguments900['section'] = NULL;
$arguments900['partial'] = NULL;
$arguments900['delegate'] = NULL;
$arguments900['renderable'] = NULL;
$arguments900['arguments'] = array (
);
$arguments900['optional'] = false;
$arguments900['default'] = NULL;
$arguments900['contentAs'] = NULL;
$arguments900['debug'] = true;
$arguments900['section'] = 'JumboBgSlider';
$arguments900['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output898 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext);

$output898 .= '
									</div>
								';
return $output898;
};
$arguments896 = array();

$output895 .= '';

$output895 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure904 = function() use ($renderingContext, $self) {
$output905 = '';

$output905 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments906 = array();
$arguments906['section'] = NULL;
$arguments906['partial'] = NULL;
$arguments906['delegate'] = NULL;
$arguments906['renderable'] = NULL;
$arguments906['arguments'] = array (
);
$arguments906['optional'] = false;
$arguments906['default'] = NULL;
$arguments906['contentAs'] = NULL;
$arguments906['debug'] = true;
$arguments906['section'] = 'JumboBgSlider';
$arguments906['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output905 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments906, $renderChildrenClosure907, $renderingContext);

$output905 .= '
								';
return $output905;
};
$arguments903 = array();
$arguments903['if'] = NULL;

$output895 .= '';

$output895 .= '
							';
return $output895;
};
$arguments881 = array();
$arguments881['then'] = NULL;
$arguments881['else'] = NULL;
$arguments881['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array892 = array();
$array893 = array (
);$array892['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array893);

$expression894 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments881['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression894(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array892)
					),
					$renderingContext
				);
$arguments881['__thenClosure'] = function() use ($renderingContext, $self) {
$output883 = '';

$output883 .= '
									<div class="';
$array884 = array (
);
$output883 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array884)]);

$output883 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure886 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments885 = array();
$arguments885['section'] = NULL;
$arguments885['partial'] = NULL;
$arguments885['delegate'] = NULL;
$arguments885['renderable'] = NULL;
$arguments885['arguments'] = array (
);
$arguments885['optional'] = false;
$arguments885['default'] = NULL;
$arguments885['contentAs'] = NULL;
$arguments885['debug'] = true;
$arguments885['section'] = 'JumboBgSlider';
$arguments885['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output883 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments885, $renderChildrenClosure886, $renderingContext);

$output883 .= '
									</div>
								';
return $output883;
};
$arguments881['__elseClosures'][] = function() use ($renderingContext, $self) {
$output888 = '';

$output888 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments889 = array();
$arguments889['section'] = NULL;
$arguments889['partial'] = NULL;
$arguments889['delegate'] = NULL;
$arguments889['renderable'] = NULL;
$arguments889['arguments'] = array (
);
$arguments889['optional'] = false;
$arguments889['default'] = NULL;
$arguments889['contentAs'] = NULL;
$arguments889['debug'] = true;
$arguments889['section'] = 'JumboBgSlider';
$arguments889['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output888 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output888 .= '
								';
return $output888;
};

$output880 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments881, $renderChildrenClosure882, $renderingContext);

$output880 .= '
						';
return $output880;
};
$arguments878 = array();
$arguments878['if'] = NULL;

$output841 .= '';

$output841 .= '
					';
return $output841;
};
$arguments773 = array();
$arguments773['then'] = NULL;
$arguments773['else'] = NULL;
$arguments773['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array838 = array();
$array839 = array (
);$array838['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array839);

$expression840 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments773['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression840(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array838)
					),
					$renderingContext
				);
$arguments773['__thenClosure'] = function() use ($renderingContext, $self) {
$output775 = '';

$output775 .= '
							<div class="';
$array776 = array (
);
$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array776)]);

$output775 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output793 = '';

$output793 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure795 = function() use ($renderingContext, $self) {
$output796 = '';

$output796 .= '
										<div class="';
$array797 = array (
);
$output796 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array797)]);

$output796 .= '">
											<div class="';
$array798 = array (
);
$output796 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array798)]);

$output796 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['section'] = NULL;
$arguments799['partial'] = NULL;
$arguments799['delegate'] = NULL;
$arguments799['renderable'] = NULL;
$arguments799['arguments'] = array (
);
$arguments799['optional'] = false;
$arguments799['default'] = NULL;
$arguments799['contentAs'] = NULL;
$arguments799['debug'] = true;
$arguments799['section'] = 'JumboBgSlider';
$arguments799['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output796 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext);

$output796 .= '
											</div>
										</div>
									';
return $output796;
};
$arguments794 = array();

$output793 .= '';

$output793 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
$output804 = '';

$output804 .= '
										<div class="';
$array805 = array (
);
$output804 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array805)]);

$output804 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure807 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments806 = array();
$arguments806['section'] = NULL;
$arguments806['partial'] = NULL;
$arguments806['delegate'] = NULL;
$arguments806['renderable'] = NULL;
$arguments806['arguments'] = array (
);
$arguments806['optional'] = false;
$arguments806['default'] = NULL;
$arguments806['contentAs'] = NULL;
$arguments806['debug'] = true;
$arguments806['section'] = 'JumboBgSlider';
$arguments806['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output804 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments806, $renderChildrenClosure807, $renderingContext);

$output804 .= '
										</div>
									';
return $output804;
};
$arguments802 = array();
$arguments802['if'] = NULL;

$output793 .= '';

$output793 .= '
								';
return $output793;
};
$arguments777 = array();
$arguments777['then'] = NULL;
$arguments777['else'] = NULL;
$arguments777['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array790 = array();
$array791 = array (
);$array790['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array791);

$expression792 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments777['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression792(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array790)
					),
					$renderingContext
				);
$arguments777['__thenClosure'] = function() use ($renderingContext, $self) {
$output779 = '';

$output779 .= '
										<div class="';
$array780 = array (
);
$output779 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array780)]);

$output779 .= '">
											<div class="';
$array781 = array (
);
$output779 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array781)]);

$output779 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments782 = array();
$arguments782['section'] = NULL;
$arguments782['partial'] = NULL;
$arguments782['delegate'] = NULL;
$arguments782['renderable'] = NULL;
$arguments782['arguments'] = array (
);
$arguments782['optional'] = false;
$arguments782['default'] = NULL;
$arguments782['contentAs'] = NULL;
$arguments782['debug'] = true;
$arguments782['section'] = 'JumboBgSlider';
$arguments782['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output779 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext);

$output779 .= '
											</div>
										</div>
									';
return $output779;
};
$arguments777['__elseClosures'][] = function() use ($renderingContext, $self) {
$output785 = '';

$output785 .= '
										<div class="';
$array786 = array (
);
$output785 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array786)]);

$output785 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments787 = array();
$arguments787['section'] = NULL;
$arguments787['partial'] = NULL;
$arguments787['delegate'] = NULL;
$arguments787['renderable'] = NULL;
$arguments787['arguments'] = array (
);
$arguments787['optional'] = false;
$arguments787['default'] = NULL;
$arguments787['contentAs'] = NULL;
$arguments787['debug'] = true;
$arguments787['section'] = 'JumboBgSlider';
$arguments787['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output785 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output785 .= '
										</div>
									';
return $output785;
};

$output775 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output775 .= '
							</div>
						';
return $output775;
};
$arguments773['__elseClosures'][] = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$output824 = '';

$output824 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$output827 = '';

$output827 .= '
									<div class="';
$array828 = array (
);
$output827 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array828)]);

$output827 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments829 = array();
$arguments829['section'] = NULL;
$arguments829['partial'] = NULL;
$arguments829['delegate'] = NULL;
$arguments829['renderable'] = NULL;
$arguments829['arguments'] = array (
);
$arguments829['optional'] = false;
$arguments829['default'] = NULL;
$arguments829['contentAs'] = NULL;
$arguments829['debug'] = true;
$arguments829['section'] = 'JumboBgSlider';
$arguments829['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output827 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments829, $renderChildrenClosure830, $renderingContext);

$output827 .= '
									</div>
								';
return $output827;
};
$arguments825 = array();

$output824 .= '';

$output824 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$output834 = '';

$output834 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments835 = array();
$arguments835['section'] = NULL;
$arguments835['partial'] = NULL;
$arguments835['delegate'] = NULL;
$arguments835['renderable'] = NULL;
$arguments835['arguments'] = array (
);
$arguments835['optional'] = false;
$arguments835['default'] = NULL;
$arguments835['contentAs'] = NULL;
$arguments835['debug'] = true;
$arguments835['section'] = 'JumboBgSlider';
$arguments835['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output834 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext);

$output834 .= '
								';
return $output834;
};
$arguments832 = array();
$arguments832['if'] = NULL;

$output824 .= '';

$output824 .= '
							';
return $output824;
};
$arguments810 = array();
$arguments810['then'] = NULL;
$arguments810['else'] = NULL;
$arguments810['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array821 = array();
$array822 = array (
);$array821['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array822);

$expression823 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments810['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression823(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array821)
					),
					$renderingContext
				);
$arguments810['__thenClosure'] = function() use ($renderingContext, $self) {
$output812 = '';

$output812 .= '
									<div class="';
$array813 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array813)]);

$output812 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments814 = array();
$arguments814['section'] = NULL;
$arguments814['partial'] = NULL;
$arguments814['delegate'] = NULL;
$arguments814['renderable'] = NULL;
$arguments814['arguments'] = array (
);
$arguments814['optional'] = false;
$arguments814['default'] = NULL;
$arguments814['contentAs'] = NULL;
$arguments814['debug'] = true;
$arguments814['section'] = 'JumboBgSlider';
$arguments814['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output812 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext);

$output812 .= '
									</div>
								';
return $output812;
};
$arguments810['__elseClosures'][] = function() use ($renderingContext, $self) {
$output817 = '';

$output817 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments818 = array();
$arguments818['section'] = NULL;
$arguments818['partial'] = NULL;
$arguments818['delegate'] = NULL;
$arguments818['renderable'] = NULL;
$arguments818['arguments'] = array (
);
$arguments818['optional'] = false;
$arguments818['default'] = NULL;
$arguments818['contentAs'] = NULL;
$arguments818['debug'] = true;
$arguments818['section'] = 'JumboBgSlider';
$arguments818['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output817 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext);

$output817 .= '
								';
return $output817;
};

$output809 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);

$output809 .= '
						';
return $output809;
};

$output772 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments773, $renderChildrenClosure774, $renderingContext);

$output772 .= '
				';
return $output772;
};
$arguments770['__elseClosures'][] = function() use ($renderingContext, $self) {
$output909 = '';

$output909 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure911 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments910 = array();
$arguments910['section'] = NULL;
$arguments910['partial'] = NULL;
$arguments910['delegate'] = NULL;
$arguments910['renderable'] = NULL;
$arguments910['arguments'] = array (
);
$arguments910['optional'] = false;
$arguments910['default'] = NULL;
$arguments910['contentAs'] = NULL;
$arguments910['debug'] = true;
$arguments910['section'] = 'JumboBgSlider';
$arguments910['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output909 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments910, $renderChildrenClosure911, $renderingContext);

$output909 .= '
				';
return $output909;
};

$output764 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments770, $renderChildrenClosure771, $renderingContext);

$output764 .= '
		';
return $output764;
};
$arguments762 = array();

$output761 .= '';

$output761 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1063 = function() use ($renderingContext, $self) {
$output1064 = '';

$output1064 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1066 = function() use ($renderingContext, $self) {
$output1080 = '';

$output1080 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1082 = function() use ($renderingContext, $self) {
$output1083 = '';

$output1083 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1085 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1084 = array();
$arguments1084['section'] = NULL;
$arguments1084['partial'] = NULL;
$arguments1084['delegate'] = NULL;
$arguments1084['renderable'] = NULL;
$arguments1084['arguments'] = array (
);
$arguments1084['optional'] = false;
$arguments1084['default'] = NULL;
$arguments1084['contentAs'] = NULL;
$arguments1084['debug'] = true;
$array1086 = array (
);$arguments1084['section'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array1086);
$arguments1084['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1083 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1084, $renderChildrenClosure1085, $renderingContext);

$output1083 .= '
				';
return $output1083;
};
$arguments1081 = array();

$output1080 .= '';

$output1080 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1091 = array();
$arguments1091['section'] = NULL;
$arguments1091['partial'] = NULL;
$arguments1091['delegate'] = NULL;
$arguments1091['renderable'] = NULL;
$arguments1091['arguments'] = array (
);
$arguments1091['optional'] = false;
$arguments1091['default'] = NULL;
$arguments1091['contentAs'] = NULL;
$arguments1091['debug'] = true;
$arguments1091['section'] = 'Default';
$arguments1091['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1090 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1091, $renderChildrenClosure1092, $renderingContext);

$output1090 .= '
				';
return $output1090;
};
$arguments1088 = array();
$arguments1088['if'] = NULL;

$output1080 .= '';

$output1080 .= '
			';
return $output1080;
};
$arguments1065 = array();
$arguments1065['then'] = NULL;
$arguments1065['else'] = NULL;
$arguments1065['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1076 = array();
$array1077 = array (
);$array1076['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1077);
$array1076['1'] = ' && ';
$array1078 = array (
);$array1076['2'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1078);
$array1076['3'] = ' !== \'none\'';

$expression1079 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) !== 'none'));};
$arguments1065['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1079(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1076)
					),
					$renderingContext
				);
$arguments1065['__thenClosure'] = function() use ($renderingContext, $self) {
$output1067 = '';

$output1067 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1068 = array();
$arguments1068['section'] = NULL;
$arguments1068['partial'] = NULL;
$arguments1068['delegate'] = NULL;
$arguments1068['renderable'] = NULL;
$arguments1068['arguments'] = array (
);
$arguments1068['optional'] = false;
$arguments1068['default'] = NULL;
$arguments1068['contentAs'] = NULL;
$arguments1068['debug'] = true;
$array1070 = array (
);$arguments1068['section'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array1070);
$arguments1068['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1067 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1068, $renderChildrenClosure1069, $renderingContext);

$output1067 .= '
				';
return $output1067;
};
$arguments1065['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1072 = '';

$output1072 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1074 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1073 = array();
$arguments1073['section'] = NULL;
$arguments1073['partial'] = NULL;
$arguments1073['delegate'] = NULL;
$arguments1073['renderable'] = NULL;
$arguments1073['arguments'] = array (
);
$arguments1073['optional'] = false;
$arguments1073['default'] = NULL;
$arguments1073['contentAs'] = NULL;
$arguments1073['debug'] = true;
$arguments1073['section'] = 'Default';
$arguments1073['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1072 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1073, $renderChildrenClosure1074, $renderingContext);

$output1072 .= '
				';
return $output1072;
};

$output1064 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1065, $renderChildrenClosure1066, $renderingContext);

$output1064 .= '
		';
return $output1064;
};
$arguments1062 = array();
$arguments1062['if'] = NULL;

$output761 .= '';

$output761 .= '
	';
return $output761;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array756 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
$array759 = array (
);return $renderingContext->getVariableProvider()->getByPath('bgSlides', $array759);
};
$arguments757 = array();
$arguments757['subject'] = NULL;
$renderChildrenClosure758 = ($arguments757['subject'] !== null) ? function() use ($arguments757) { return $arguments757['subject']; } : $renderChildrenClosure758;$array756['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments757, $renderChildrenClosure758, $renderingContext);
$array756['1'] = ' > 1';

$expression760 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression760(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array756)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return ' SLIDER ';
};
$arguments429 = array();

$output428 .= NULL;

$output428 .= '
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
$arguments431['partial'] = 'Page/Assets';
// Rendering Array
$array433 = array();
$array433['carousel'] = 'true';
$arguments431['arguments'] = $array433;

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output428 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output652 = '';

$output652 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
							<div class="';
$array656 = array (
);
$output655 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array656)]);

$output655 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
										<div class="';
$array677 = array (
);
$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array677)]);

$output676 .= '">
											<div class="';
$array678 = array (
);
$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array678)]);

$output676 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments679 = array();
$arguments679['section'] = NULL;
$arguments679['partial'] = NULL;
$arguments679['delegate'] = NULL;
$arguments679['renderable'] = NULL;
$arguments679['arguments'] = array (
);
$arguments679['optional'] = false;
$arguments679['default'] = NULL;
$arguments679['contentAs'] = NULL;
$arguments679['debug'] = true;
$arguments679['section'] = 'JumboBgSlider';
$arguments679['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output676 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output676 .= '
											</div>
										</div>
									';
return $output676;
};
$arguments674 = array();

$output673 .= '';

$output673 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output684 = '';

$output684 .= '
										<div class="';
$array685 = array (
);
$output684 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array685)]);

$output684 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['section'] = NULL;
$arguments686['partial'] = NULL;
$arguments686['delegate'] = NULL;
$arguments686['renderable'] = NULL;
$arguments686['arguments'] = array (
);
$arguments686['optional'] = false;
$arguments686['default'] = NULL;
$arguments686['contentAs'] = NULL;
$arguments686['debug'] = true;
$arguments686['section'] = 'JumboBgSlider';
$arguments686['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output684 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output684 .= '
										</div>
									';
return $output684;
};
$arguments682 = array();
$arguments682['if'] = NULL;

$output673 .= '';

$output673 .= '
								';
return $output673;
};
$arguments657 = array();
$arguments657['then'] = NULL;
$arguments657['else'] = NULL;
$arguments657['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array670 = array();
$array671 = array (
);$array670['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array671);

$expression672 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments657['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression672(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array670)
					),
					$renderingContext
				);
$arguments657['__thenClosure'] = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
										<div class="';
$array660 = array (
);
$output659 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array660)]);

$output659 .= '">
											<div class="';
$array661 = array (
);
$output659 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array661)]);

$output659 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments662 = array();
$arguments662['section'] = NULL;
$arguments662['partial'] = NULL;
$arguments662['delegate'] = NULL;
$arguments662['renderable'] = NULL;
$arguments662['arguments'] = array (
);
$arguments662['optional'] = false;
$arguments662['default'] = NULL;
$arguments662['contentAs'] = NULL;
$arguments662['debug'] = true;
$arguments662['section'] = 'JumboBgSlider';
$arguments662['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output659 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments662, $renderChildrenClosure663, $renderingContext);

$output659 .= '
											</div>
										</div>
									';
return $output659;
};
$arguments657['__elseClosures'][] = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
										<div class="';
$array666 = array (
);
$output665 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array666)]);

$output665 .= '">
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
$arguments667['section'] = 'JumboBgSlider';
$arguments667['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output665 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments667, $renderChildrenClosure668, $renderingContext);

$output665 .= '
										</div>
									';
return $output665;
};

$output655 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output655 .= '
							</div>
						';
return $output655;
};
$arguments653 = array();

$output652 .= '';

$output652 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
$output709 = '';

$output709 .= '
									<div class="';
$array710 = array (
);
$output709 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array710)]);

$output709 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['section'] = NULL;
$arguments711['partial'] = NULL;
$arguments711['delegate'] = NULL;
$arguments711['renderable'] = NULL;
$arguments711['arguments'] = array (
);
$arguments711['optional'] = false;
$arguments711['default'] = NULL;
$arguments711['contentAs'] = NULL;
$arguments711['debug'] = true;
$arguments711['section'] = 'JumboBgSlider';
$arguments711['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output709 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output709 .= '
									</div>
								';
return $output709;
};
$arguments707 = array();

$output706 .= '';

$output706 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
$output716 = '';

$output716 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments717 = array();
$arguments717['section'] = NULL;
$arguments717['partial'] = NULL;
$arguments717['delegate'] = NULL;
$arguments717['renderable'] = NULL;
$arguments717['arguments'] = array (
);
$arguments717['optional'] = false;
$arguments717['default'] = NULL;
$arguments717['contentAs'] = NULL;
$arguments717['debug'] = true;
$arguments717['section'] = 'JumboBgSlider';
$arguments717['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output716 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments717, $renderChildrenClosure718, $renderingContext);

$output716 .= '
								';
return $output716;
};
$arguments714 = array();
$arguments714['if'] = NULL;

$output706 .= '';

$output706 .= '
							';
return $output706;
};
$arguments692 = array();
$arguments692['then'] = NULL;
$arguments692['else'] = NULL;
$arguments692['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array703 = array();
$array704 = array (
);$array703['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array704);

$expression705 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments692['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression705(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array703)
					),
					$renderingContext
				);
$arguments692['__thenClosure'] = function() use ($renderingContext, $self) {
$output694 = '';

$output694 .= '
									<div class="';
$array695 = array (
);
$output694 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array695)]);

$output694 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments696 = array();
$arguments696['section'] = NULL;
$arguments696['partial'] = NULL;
$arguments696['delegate'] = NULL;
$arguments696['renderable'] = NULL;
$arguments696['arguments'] = array (
);
$arguments696['optional'] = false;
$arguments696['default'] = NULL;
$arguments696['contentAs'] = NULL;
$arguments696['debug'] = true;
$arguments696['section'] = 'JumboBgSlider';
$arguments696['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output694 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext);

$output694 .= '
									</div>
								';
return $output694;
};
$arguments692['__elseClosures'][] = function() use ($renderingContext, $self) {
$output699 = '';

$output699 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['section'] = NULL;
$arguments700['partial'] = NULL;
$arguments700['delegate'] = NULL;
$arguments700['renderable'] = NULL;
$arguments700['arguments'] = array (
);
$arguments700['optional'] = false;
$arguments700['default'] = NULL;
$arguments700['contentAs'] = NULL;
$arguments700['debug'] = true;
$arguments700['section'] = 'JumboBgSlider';
$arguments700['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output699 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output699 .= '
								';
return $output699;
};

$output691 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output691 .= '
						';
return $output691;
};
$arguments689 = array();
$arguments689['if'] = NULL;

$output652 .= '';

$output652 .= '
					';
return $output652;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array649 = array();
$array650 = array (
);$array649['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array650);

$expression651 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression651(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array649)
					),
					$renderingContext
				);
$arguments584['__thenClosure'] = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
							<div class="';
$array587 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array587)]);

$output586 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
										<div class="';
$array608 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array608)]);

$output607 .= '">
											<div class="';
$array609 = array (
);
$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array609)]);

$output607 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments610 = array();
$arguments610['section'] = NULL;
$arguments610['partial'] = NULL;
$arguments610['delegate'] = NULL;
$arguments610['renderable'] = NULL;
$arguments610['arguments'] = array (
);
$arguments610['optional'] = false;
$arguments610['default'] = NULL;
$arguments610['contentAs'] = NULL;
$arguments610['debug'] = true;
$arguments610['section'] = 'JumboBgSlider';
$arguments610['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output607 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);

$output607 .= '
											</div>
										</div>
									';
return $output607;
};
$arguments605 = array();

$output604 .= '';

$output604 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
										<div class="';
$array616 = array (
);
$output615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array616)]);

$output615 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['section'] = NULL;
$arguments617['partial'] = NULL;
$arguments617['delegate'] = NULL;
$arguments617['renderable'] = NULL;
$arguments617['arguments'] = array (
);
$arguments617['optional'] = false;
$arguments617['default'] = NULL;
$arguments617['contentAs'] = NULL;
$arguments617['debug'] = true;
$arguments617['section'] = 'JumboBgSlider';
$arguments617['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output615 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output615 .= '
										</div>
									';
return $output615;
};
$arguments613 = array();
$arguments613['if'] = NULL;

$output604 .= '';

$output604 .= '
								';
return $output604;
};
$arguments588 = array();
$arguments588['then'] = NULL;
$arguments588['else'] = NULL;
$arguments588['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array601 = array();
$array602 = array (
);$array601['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array602);

$expression603 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments588['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression603(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array601)
					),
					$renderingContext
				);
$arguments588['__thenClosure'] = function() use ($renderingContext, $self) {
$output590 = '';

$output590 .= '
										<div class="';
$array591 = array (
);
$output590 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array591)]);

$output590 .= '">
											<div class="';
$array592 = array (
);
$output590 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array592)]);

$output590 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['section'] = NULL;
$arguments593['partial'] = NULL;
$arguments593['delegate'] = NULL;
$arguments593['renderable'] = NULL;
$arguments593['arguments'] = array (
);
$arguments593['optional'] = false;
$arguments593['default'] = NULL;
$arguments593['contentAs'] = NULL;
$arguments593['debug'] = true;
$arguments593['section'] = 'JumboBgSlider';
$arguments593['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output590 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output590 .= '
											</div>
										</div>
									';
return $output590;
};
$arguments588['__elseClosures'][] = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
										<div class="';
$array597 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array597)]);

$output596 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['section'] = NULL;
$arguments598['partial'] = NULL;
$arguments598['delegate'] = NULL;
$arguments598['renderable'] = NULL;
$arguments598['arguments'] = array (
);
$arguments598['optional'] = false;
$arguments598['default'] = NULL;
$arguments598['contentAs'] = NULL;
$arguments598['debug'] = true;
$arguments598['section'] = 'JumboBgSlider';
$arguments598['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output596 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output596 .= '
										</div>
									';
return $output596;
};

$output586 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output586 .= '
							</div>
						';
return $output586;
};
$arguments584['__elseClosures'][] = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output635 = '';

$output635 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
									<div class="';
$array639 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array639)]);

$output638 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['section'] = NULL;
$arguments640['partial'] = NULL;
$arguments640['delegate'] = NULL;
$arguments640['renderable'] = NULL;
$arguments640['arguments'] = array (
);
$arguments640['optional'] = false;
$arguments640['default'] = NULL;
$arguments640['contentAs'] = NULL;
$arguments640['debug'] = true;
$arguments640['section'] = 'JumboBgSlider';
$arguments640['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output638 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output638 .= '
									</div>
								';
return $output638;
};
$arguments636 = array();

$output635 .= '';

$output635 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$output645 = '';

$output645 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['section'] = NULL;
$arguments646['partial'] = NULL;
$arguments646['delegate'] = NULL;
$arguments646['renderable'] = NULL;
$arguments646['arguments'] = array (
);
$arguments646['optional'] = false;
$arguments646['default'] = NULL;
$arguments646['contentAs'] = NULL;
$arguments646['debug'] = true;
$arguments646['section'] = 'JumboBgSlider';
$arguments646['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output645 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output645 .= '
								';
return $output645;
};
$arguments643 = array();
$arguments643['if'] = NULL;

$output635 .= '';

$output635 .= '
							';
return $output635;
};
$arguments621 = array();
$arguments621['then'] = NULL;
$arguments621['else'] = NULL;
$arguments621['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array632 = array();
$array633 = array (
);$array632['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array633);

$expression634 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments621['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array632)
					),
					$renderingContext
				);
$arguments621['__thenClosure'] = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
									<div class="';
$array624 = array (
);
$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array624)]);

$output623 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments625 = array();
$arguments625['section'] = NULL;
$arguments625['partial'] = NULL;
$arguments625['delegate'] = NULL;
$arguments625['renderable'] = NULL;
$arguments625['arguments'] = array (
);
$arguments625['optional'] = false;
$arguments625['default'] = NULL;
$arguments625['contentAs'] = NULL;
$arguments625['debug'] = true;
$arguments625['section'] = 'JumboBgSlider';
$arguments625['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output623 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output623 .= '
									</div>
								';
return $output623;
};
$arguments621['__elseClosures'][] = function() use ($renderingContext, $self) {
$output628 = '';

$output628 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['section'] = NULL;
$arguments629['partial'] = NULL;
$arguments629['delegate'] = NULL;
$arguments629['renderable'] = NULL;
$arguments629['arguments'] = array (
);
$arguments629['optional'] = false;
$arguments629['default'] = NULL;
$arguments629['contentAs'] = NULL;
$arguments629['debug'] = true;
$arguments629['section'] = 'JumboBgSlider';
$arguments629['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output628 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext);

$output628 .= '
								';
return $output628;
};

$output620 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
						';
return $output620;
};

$output583 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output583 .= '
				';
return $output583;
};
$arguments581 = array();

$output580 .= '';

$output580 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
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
$arguments723['section'] = 'JumboBgSlider';
$arguments723['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output722 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext);

$output722 .= '
				';
return $output722;
};
$arguments720 = array();
$arguments720['if'] = NULL;

$output580 .= '';

$output580 .= '
			';
return $output580;
};
$arguments434 = array();
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$arguments434['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array577 = array();
$array578 = array (
);$array577['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array578);
$array577['1'] = ' == \'Outside\'';

$expression579 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Outside');};
$arguments434['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression579(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array577)
					),
					$renderingContext
				);
$arguments434['__thenClosure'] = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
							<div class="';
$array509 = array (
);
$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array509)]);

$output508 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
$output529 = '';

$output529 .= '
										<div class="';
$array530 = array (
);
$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array530)]);

$output529 .= '">
											<div class="';
$array531 = array (
);
$output529 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array531)]);

$output529 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['section'] = NULL;
$arguments532['partial'] = NULL;
$arguments532['delegate'] = NULL;
$arguments532['renderable'] = NULL;
$arguments532['arguments'] = array (
);
$arguments532['optional'] = false;
$arguments532['default'] = NULL;
$arguments532['contentAs'] = NULL;
$arguments532['debug'] = true;
$arguments532['section'] = 'JumboBgSlider';
$arguments532['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output529 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output529 .= '
											</div>
										</div>
									';
return $output529;
};
$arguments527 = array();

$output526 .= '';

$output526 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '
										<div class="';
$array538 = array (
);
$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array538)]);

$output537 .= '">
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
$arguments539['section'] = 'JumboBgSlider';
$arguments539['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output537 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output537 .= '
										</div>
									';
return $output537;
};
$arguments535 = array();
$arguments535['if'] = NULL;

$output526 .= '';

$output526 .= '
								';
return $output526;
};
$arguments510 = array();
$arguments510['then'] = NULL;
$arguments510['else'] = NULL;
$arguments510['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array524);

$expression525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments510['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array523)
					),
					$renderingContext
				);
$arguments510['__thenClosure'] = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
										<div class="';
$array513 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array513)]);

$output512 .= '">
											<div class="';
$array514 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array514)]);

$output512 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['section'] = NULL;
$arguments515['partial'] = NULL;
$arguments515['delegate'] = NULL;
$arguments515['renderable'] = NULL;
$arguments515['arguments'] = array (
);
$arguments515['optional'] = false;
$arguments515['default'] = NULL;
$arguments515['contentAs'] = NULL;
$arguments515['debug'] = true;
$arguments515['section'] = 'JumboBgSlider';
$arguments515['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output512 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$output512 .= '
											</div>
										</div>
									';
return $output512;
};
$arguments510['__elseClosures'][] = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
										<div class="';
$array519 = array (
);
$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array519)]);

$output518 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['section'] = NULL;
$arguments520['partial'] = NULL;
$arguments520['delegate'] = NULL;
$arguments520['renderable'] = NULL;
$arguments520['arguments'] = array (
);
$arguments520['optional'] = false;
$arguments520['default'] = NULL;
$arguments520['contentAs'] = NULL;
$arguments520['debug'] = true;
$arguments520['section'] = 'JumboBgSlider';
$arguments520['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output518 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output518 .= '
										</div>
									';
return $output518;
};

$output508 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output508 .= '
							</div>
						';
return $output508;
};
$arguments506 = array();

$output505 .= '';

$output505 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
									<div class="';
$array563 = array (
);
$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array563)]);

$output562 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['section'] = NULL;
$arguments564['partial'] = NULL;
$arguments564['delegate'] = NULL;
$arguments564['renderable'] = NULL;
$arguments564['arguments'] = array (
);
$arguments564['optional'] = false;
$arguments564['default'] = NULL;
$arguments564['contentAs'] = NULL;
$arguments564['debug'] = true;
$arguments564['section'] = 'JumboBgSlider';
$arguments564['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output562 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output562 .= '
									</div>
								';
return $output562;
};
$arguments560 = array();

$output559 .= '';

$output559 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['section'] = NULL;
$arguments570['partial'] = NULL;
$arguments570['delegate'] = NULL;
$arguments570['renderable'] = NULL;
$arguments570['arguments'] = array (
);
$arguments570['optional'] = false;
$arguments570['default'] = NULL;
$arguments570['contentAs'] = NULL;
$arguments570['debug'] = true;
$arguments570['section'] = 'JumboBgSlider';
$arguments570['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
								';
return $output569;
};
$arguments567 = array();
$arguments567['if'] = NULL;

$output559 .= '';

$output559 .= '
							';
return $output559;
};
$arguments545 = array();
$arguments545['then'] = NULL;
$arguments545['else'] = NULL;
$arguments545['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array556 = array();
$array557 = array (
);$array556['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array557);

$expression558 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments545['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression558(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array556)
					),
					$renderingContext
				);
$arguments545['__thenClosure'] = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
									<div class="';
$array548 = array (
);
$output547 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array548)]);

$output547 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['section'] = NULL;
$arguments549['partial'] = NULL;
$arguments549['delegate'] = NULL;
$arguments549['renderable'] = NULL;
$arguments549['arguments'] = array (
);
$arguments549['optional'] = false;
$arguments549['default'] = NULL;
$arguments549['contentAs'] = NULL;
$arguments549['debug'] = true;
$arguments549['section'] = 'JumboBgSlider';
$arguments549['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output547 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output547 .= '
									</div>
								';
return $output547;
};
$arguments545['__elseClosures'][] = function() use ($renderingContext, $self) {
$output552 = '';

$output552 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['section'] = NULL;
$arguments553['partial'] = NULL;
$arguments553['delegate'] = NULL;
$arguments553['renderable'] = NULL;
$arguments553['arguments'] = array (
);
$arguments553['optional'] = false;
$arguments553['default'] = NULL;
$arguments553['contentAs'] = NULL;
$arguments553['debug'] = true;
$arguments553['section'] = 'JumboBgSlider';
$arguments553['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output552 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= '
								';
return $output552;
};

$output544 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '
						';
return $output544;
};
$arguments542 = array();
$arguments542['if'] = NULL;

$output505 .= '';

$output505 .= '
					';
return $output505;
};
$arguments437 = array();
$arguments437['then'] = NULL;
$arguments437['else'] = NULL;
$arguments437['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array502 = array();
$array503 = array (
);$array502['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array503);

$expression504 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments437['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array502)
					),
					$renderingContext
				);
$arguments437['__thenClosure'] = function() use ($renderingContext, $self) {
$output439 = '';

$output439 .= '
							<div class="';
$array440 = array (
);
$output439 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array440)]);

$output439 .= '">
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
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
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array461)]);

$output460 .= '">
											<div class="';
$array462 = array (
);
$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array462)]);

$output460 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['section'] = NULL;
$arguments463['partial'] = NULL;
$arguments463['delegate'] = NULL;
$arguments463['renderable'] = NULL;
$arguments463['arguments'] = array (
);
$arguments463['optional'] = false;
$arguments463['default'] = NULL;
$arguments463['contentAs'] = NULL;
$arguments463['debug'] = true;
$arguments463['section'] = 'JumboBgSlider';
$arguments463['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output460 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output460 .= '
											</div>
										</div>
									';
return $output460;
};
$arguments458 = array();

$output457 .= '';

$output457 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
										<div class="';
$array469 = array (
);
$output468 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array469)]);

$output468 .= '">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['section'] = NULL;
$arguments470['partial'] = NULL;
$arguments470['delegate'] = NULL;
$arguments470['renderable'] = NULL;
$arguments470['arguments'] = array (
);
$arguments470['optional'] = false;
$arguments470['default'] = NULL;
$arguments470['contentAs'] = NULL;
$arguments470['debug'] = true;
$arguments470['section'] = 'JumboBgSlider';
$arguments470['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output468 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output468 .= '
										</div>
									';
return $output468;
};
$arguments466 = array();
$arguments466['if'] = NULL;

$output457 .= '';

$output457 .= '
								';
return $output457;
};
$arguments441 = array();
$arguments441['then'] = NULL;
$arguments441['else'] = NULL;
$arguments441['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array454 = array();
$array455 = array (
);$array454['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array455);

$expression456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments441['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array454)
					),
					$renderingContext
				);
$arguments441['__thenClosure'] = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
										<div class="';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array444)]);

$output443 .= '">
											<div class="';
$array445 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array445)]);

$output443 .= '">
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['section'] = NULL;
$arguments446['partial'] = NULL;
$arguments446['delegate'] = NULL;
$arguments446['renderable'] = NULL;
$arguments446['arguments'] = array (
);
$arguments446['optional'] = false;
$arguments446['default'] = NULL;
$arguments446['contentAs'] = NULL;
$arguments446['debug'] = true;
$arguments446['section'] = 'JumboBgSlider';
$arguments446['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output443 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output443 .= '
											</div>
										</div>
									';
return $output443;
};
$arguments441['__elseClosures'][] = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
										<div class="';
$array450 = array (
);
$output449 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array450)]);

$output449 .= '">
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
$arguments451['section'] = 'JumboBgSlider';
$arguments451['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output449 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output449 .= '
										</div>
									';
return $output449;
};

$output439 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output439 .= '
							</div>
						';
return $output439;
};
$arguments437['__elseClosures'][] = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$output491 = '';

$output491 .= '
									<div class="';
$array492 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array492)]);

$output491 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['section'] = NULL;
$arguments493['partial'] = NULL;
$arguments493['delegate'] = NULL;
$arguments493['renderable'] = NULL;
$arguments493['arguments'] = array (
);
$arguments493['optional'] = false;
$arguments493['default'] = NULL;
$arguments493['contentAs'] = NULL;
$arguments493['debug'] = true;
$arguments493['section'] = 'JumboBgSlider';
$arguments493['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output491 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output491 .= '
									</div>
								';
return $output491;
};
$arguments489 = array();

$output488 .= '';

$output488 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['section'] = NULL;
$arguments499['partial'] = NULL;
$arguments499['delegate'] = NULL;
$arguments499['renderable'] = NULL;
$arguments499['arguments'] = array (
);
$arguments499['optional'] = false;
$arguments499['default'] = NULL;
$arguments499['contentAs'] = NULL;
$arguments499['debug'] = true;
$arguments499['section'] = 'JumboBgSlider';
$arguments499['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output498 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);

$output498 .= '
								';
return $output498;
};
$arguments496 = array();
$arguments496['if'] = NULL;

$output488 .= '';

$output488 .= '
							';
return $output488;
};
$arguments474 = array();
$arguments474['then'] = NULL;
$arguments474['else'] = NULL;
$arguments474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array485 = array();
$array486 = array (
);$array485['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array486);

$expression487 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression487(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array485)
					),
					$renderingContext
				);
$arguments474['__thenClosure'] = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
									<div class="';
$array477 = array (
);
$output476 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array477)]);

$output476 .= '">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['section'] = NULL;
$arguments478['partial'] = NULL;
$arguments478['delegate'] = NULL;
$arguments478['renderable'] = NULL;
$arguments478['arguments'] = array (
);
$arguments478['optional'] = false;
$arguments478['default'] = NULL;
$arguments478['contentAs'] = NULL;
$arguments478['debug'] = true;
$arguments478['section'] = 'JumboBgSlider';
$arguments478['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output476 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output476 .= '
									</div>
								';
return $output476;
};
$arguments474['__elseClosures'][] = function() use ($renderingContext, $self) {
$output481 = '';

$output481 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['section'] = NULL;
$arguments482['partial'] = NULL;
$arguments482['delegate'] = NULL;
$arguments482['renderable'] = NULL;
$arguments482['arguments'] = array (
);
$arguments482['optional'] = false;
$arguments482['default'] = NULL;
$arguments482['contentAs'] = NULL;
$arguments482['debug'] = true;
$arguments482['section'] = 'JumboBgSlider';
$arguments482['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output481 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output481 .= '
								';
return $output481;
};

$output473 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
						';
return $output473;
};

$output436 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output436 .= '
				';
return $output436;
};
$arguments434['__elseClosures'][] = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['section'] = NULL;
$arguments574['partial'] = NULL;
$arguments574['delegate'] = NULL;
$arguments574['renderable'] = NULL;
$arguments574['arguments'] = array (
);
$arguments574['optional'] = false;
$arguments574['default'] = NULL;
$arguments574['contentAs'] = NULL;
$arguments574['debug'] = true;
$arguments574['section'] = 'JumboBgSlider';
$arguments574['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output573 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output573 .= '
				';
return $output573;
};

$output428 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output428 .= '
		';
return $output428;
};
$arguments426['__elseClosures'][] = function() use ($renderingContext, $self) {
$output726 = '';

$output726 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments746 = array();
$arguments746['section'] = NULL;
$arguments746['partial'] = NULL;
$arguments746['delegate'] = NULL;
$arguments746['renderable'] = NULL;
$arguments746['arguments'] = array (
);
$arguments746['optional'] = false;
$arguments746['default'] = NULL;
$arguments746['contentAs'] = NULL;
$arguments746['debug'] = true;
$array748 = array (
);$arguments746['section'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array748);
$arguments746['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output745 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
				';
return $output745;
};
$arguments743 = array();

$output742 .= '';

$output742 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
$output752 = '';

$output752 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments753 = array();
$arguments753['section'] = NULL;
$arguments753['partial'] = NULL;
$arguments753['delegate'] = NULL;
$arguments753['renderable'] = NULL;
$arguments753['arguments'] = array (
);
$arguments753['optional'] = false;
$arguments753['default'] = NULL;
$arguments753['contentAs'] = NULL;
$arguments753['debug'] = true;
$arguments753['section'] = 'Default';
$arguments753['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output752 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext);

$output752 .= '
				';
return $output752;
};
$arguments750 = array();
$arguments750['if'] = NULL;

$output742 .= '';

$output742 .= '
			';
return $output742;
};
$arguments727 = array();
$arguments727['then'] = NULL;
$arguments727['else'] = NULL;
$arguments727['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array738 = array();
$array739 = array (
);$array738['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array739);
$array738['1'] = ' && ';
$array740 = array (
);$array738['2'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array740);
$array738['3'] = ' !== \'none\'';

$expression741 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) !== 'none'));};
$arguments727['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression741(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array738)
					),
					$renderingContext
				);
$arguments727['__thenClosure'] = function() use ($renderingContext, $self) {
$output729 = '';

$output729 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['section'] = NULL;
$arguments730['partial'] = NULL;
$arguments730['delegate'] = NULL;
$arguments730['renderable'] = NULL;
$arguments730['arguments'] = array (
);
$arguments730['optional'] = false;
$arguments730['default'] = NULL;
$arguments730['contentAs'] = NULL;
$arguments730['debug'] = true;
$array732 = array (
);$arguments730['section'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array732);
$arguments730['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output729 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext);

$output729 .= '
				';
return $output729;
};
$arguments727['__elseClosures'][] = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['section'] = NULL;
$arguments735['partial'] = NULL;
$arguments735['delegate'] = NULL;
$arguments735['renderable'] = NULL;
$arguments735['arguments'] = array (
);
$arguments735['optional'] = false;
$arguments735['default'] = NULL;
$arguments735['contentAs'] = NULL;
$arguments735['debug'] = true;
$arguments735['section'] = 'Default';
$arguments735['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output734 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output734 .= '
				';
return $output734;
};

$output726 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);

$output726 .= '
		';
return $output726;
};

$output425 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output425 .= '
';
return $output425;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.enable', $array423);

$expression424 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression424(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = $renderChildrenClosure421;

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1095 = function() use ($renderingContext, $self) {
$output1096 = '';

$output1096 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1097 = array();
$arguments1097['section'] = NULL;
$arguments1097['partial'] = NULL;
$arguments1097['delegate'] = NULL;
$arguments1097['renderable'] = NULL;
$arguments1097['arguments'] = array (
);
$arguments1097['optional'] = false;
$arguments1097['default'] = NULL;
$arguments1097['contentAs'] = NULL;
$arguments1097['debug'] = true;
$arguments1097['section'] = 'Div';
$arguments1097['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1096 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1097, $renderChildrenClosure1098, $renderingContext);

$output1096 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1100 = array();
$arguments1100['section'] = NULL;
$arguments1100['partial'] = NULL;
$arguments1100['delegate'] = NULL;
$arguments1100['renderable'] = NULL;
$arguments1100['arguments'] = array (
);
$arguments1100['optional'] = false;
$arguments1100['default'] = NULL;
$arguments1100['contentAs'] = NULL;
$arguments1100['debug'] = true;
$arguments1100['section'] = 'Content';
$arguments1100['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1096 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1100, $renderChildrenClosure1101, $renderingContext);

$output1096 .= '
	</div>
';
return $output1096;
};
$arguments1094 = array();
$arguments1094['name'] = NULL;
$arguments1094['name'] = 'Default';

$output419 .= NULL;

$output419 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
$output1105 = '';

$output1105 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1106 = array();
$arguments1106['section'] = NULL;
$arguments1106['partial'] = NULL;
$arguments1106['delegate'] = NULL;
$arguments1106['renderable'] = NULL;
$arguments1106['arguments'] = array (
);
$arguments1106['optional'] = false;
$arguments1106['default'] = NULL;
$arguments1106['contentAs'] = NULL;
$arguments1106['debug'] = true;
$arguments1106['section'] = 'Div';
$arguments1106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1105 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1106, $renderChildrenClosure1107, $renderingContext);

$output1105 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
$output1173 = '';

$output1173 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1175 = function() use ($renderingContext, $self) {
$output1176 = '';

$output1176 .= '
				<div class="';
$array1177 = array (
);
$output1176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1177)]);

$output1176 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1179 = function() use ($renderingContext, $self) {
$output1192 = '';

$output1192 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1194 = function() use ($renderingContext, $self) {
$output1195 = '';

$output1195 .= '
							<div class="';
$array1196 = array (
);
$output1195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1196)]);

$output1195 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1197 = array();
$arguments1197['section'] = NULL;
$arguments1197['partial'] = NULL;
$arguments1197['delegate'] = NULL;
$arguments1197['renderable'] = NULL;
$arguments1197['arguments'] = array (
);
$arguments1197['optional'] = false;
$arguments1197['default'] = NULL;
$arguments1197['contentAs'] = NULL;
$arguments1197['debug'] = true;
$arguments1197['section'] = 'Content';
$arguments1197['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1195 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1197, $renderChildrenClosure1198, $renderingContext);

$output1195 .= '
							</div>
						';
return $output1195;
};
$arguments1193 = array();

$output1192 .= '';

$output1192 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1201 = function() use ($renderingContext, $self) {
$output1202 = '';

$output1202 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1203 = array();
$arguments1203['section'] = NULL;
$arguments1203['partial'] = NULL;
$arguments1203['delegate'] = NULL;
$arguments1203['renderable'] = NULL;
$arguments1203['arguments'] = array (
);
$arguments1203['optional'] = false;
$arguments1203['default'] = NULL;
$arguments1203['contentAs'] = NULL;
$arguments1203['debug'] = true;
$arguments1203['section'] = 'Content';
$arguments1203['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1202 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1203, $renderChildrenClosure1204, $renderingContext);

$output1202 .= '
						';
return $output1202;
};
$arguments1200 = array();
$arguments1200['if'] = NULL;

$output1192 .= '';

$output1192 .= '
					';
return $output1192;
};
$arguments1178 = array();
$arguments1178['then'] = NULL;
$arguments1178['else'] = NULL;
$arguments1178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1189 = array();
$array1190 = array (
);$array1189['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1190);

$expression1191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1189)
					),
					$renderingContext
				);
$arguments1178['__thenClosure'] = function() use ($renderingContext, $self) {
$output1180 = '';

$output1180 .= '
							<div class="';
$array1181 = array (
);
$output1180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1181)]);

$output1180 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1182 = array();
$arguments1182['section'] = NULL;
$arguments1182['partial'] = NULL;
$arguments1182['delegate'] = NULL;
$arguments1182['renderable'] = NULL;
$arguments1182['arguments'] = array (
);
$arguments1182['optional'] = false;
$arguments1182['default'] = NULL;
$arguments1182['contentAs'] = NULL;
$arguments1182['debug'] = true;
$arguments1182['section'] = 'Content';
$arguments1182['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1180 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1182, $renderChildrenClosure1183, $renderingContext);

$output1180 .= '
							</div>
						';
return $output1180;
};
$arguments1178['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1185 = '';

$output1185 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1186 = array();
$arguments1186['section'] = NULL;
$arguments1186['partial'] = NULL;
$arguments1186['delegate'] = NULL;
$arguments1186['renderable'] = NULL;
$arguments1186['arguments'] = array (
);
$arguments1186['optional'] = false;
$arguments1186['default'] = NULL;
$arguments1186['contentAs'] = NULL;
$arguments1186['debug'] = true;
$arguments1186['section'] = 'Content';
$arguments1186['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1185 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext);

$output1185 .= '
						';
return $output1185;
};

$output1176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1178, $renderChildrenClosure1179, $renderingContext);

$output1176 .= '
				</div>
			';
return $output1176;
};
$arguments1174 = array();

$output1173 .= '';

$output1173 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1207 = function() use ($renderingContext, $self) {
$output1208 = '';

$output1208 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1210 = function() use ($renderingContext, $self) {
$output1223 = '';

$output1223 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1225 = function() use ($renderingContext, $self) {
$output1226 = '';

$output1226 .= '
						<div class="';
$array1227 = array (
);
$output1226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1227)]);

$output1226 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1228 = array();
$arguments1228['section'] = NULL;
$arguments1228['partial'] = NULL;
$arguments1228['delegate'] = NULL;
$arguments1228['renderable'] = NULL;
$arguments1228['arguments'] = array (
);
$arguments1228['optional'] = false;
$arguments1228['default'] = NULL;
$arguments1228['contentAs'] = NULL;
$arguments1228['debug'] = true;
$arguments1228['section'] = 'Content';
$arguments1228['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1226 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1228, $renderChildrenClosure1229, $renderingContext);

$output1226 .= '
						</div>
					';
return $output1226;
};
$arguments1224 = array();

$output1223 .= '';

$output1223 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1232 = function() use ($renderingContext, $self) {
$output1233 = '';

$output1233 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1234 = array();
$arguments1234['section'] = NULL;
$arguments1234['partial'] = NULL;
$arguments1234['delegate'] = NULL;
$arguments1234['renderable'] = NULL;
$arguments1234['arguments'] = array (
);
$arguments1234['optional'] = false;
$arguments1234['default'] = NULL;
$arguments1234['contentAs'] = NULL;
$arguments1234['debug'] = true;
$arguments1234['section'] = 'Content';
$arguments1234['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1233 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1234, $renderChildrenClosure1235, $renderingContext);

$output1233 .= '
					';
return $output1233;
};
$arguments1231 = array();
$arguments1231['if'] = NULL;

$output1223 .= '';

$output1223 .= '
				';
return $output1223;
};
$arguments1209 = array();
$arguments1209['then'] = NULL;
$arguments1209['else'] = NULL;
$arguments1209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1220 = array();
$array1221 = array (
);$array1220['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1221);

$expression1222 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1220)
					),
					$renderingContext
				);
$arguments1209['__thenClosure'] = function() use ($renderingContext, $self) {
$output1211 = '';

$output1211 .= '
						<div class="';
$array1212 = array (
);
$output1211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1212)]);

$output1211 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1213 = array();
$arguments1213['section'] = NULL;
$arguments1213['partial'] = NULL;
$arguments1213['delegate'] = NULL;
$arguments1213['renderable'] = NULL;
$arguments1213['arguments'] = array (
);
$arguments1213['optional'] = false;
$arguments1213['default'] = NULL;
$arguments1213['contentAs'] = NULL;
$arguments1213['debug'] = true;
$arguments1213['section'] = 'Content';
$arguments1213['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1211 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1213, $renderChildrenClosure1214, $renderingContext);

$output1211 .= '
						</div>
					';
return $output1211;
};
$arguments1209['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1216 = '';

$output1216 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1217 = array();
$arguments1217['section'] = NULL;
$arguments1217['partial'] = NULL;
$arguments1217['delegate'] = NULL;
$arguments1217['renderable'] = NULL;
$arguments1217['arguments'] = array (
);
$arguments1217['optional'] = false;
$arguments1217['default'] = NULL;
$arguments1217['contentAs'] = NULL;
$arguments1217['debug'] = true;
$arguments1217['section'] = 'Content';
$arguments1217['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1216 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1217, $renderChildrenClosure1218, $renderingContext);

$output1216 .= '
					';
return $output1216;
};

$output1208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1209, $renderChildrenClosure1210, $renderingContext);

$output1208 .= '
			';
return $output1208;
};
$arguments1206 = array();
$arguments1206['if'] = NULL;

$output1173 .= '';

$output1173 .= '
		';
return $output1173;
};
$arguments1109 = array();
$arguments1109['then'] = NULL;
$arguments1109['else'] = NULL;
$arguments1109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1170 = array();
$array1171 = array (
);$array1170['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1171);

$expression1172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1170)
					),
					$renderingContext
				);
$arguments1109['__thenClosure'] = function() use ($renderingContext, $self) {
$output1111 = '';

$output1111 .= '
				<div class="';
$array1112 = array (
);
$output1111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1112)]);

$output1111 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1114 = function() use ($renderingContext, $self) {
$output1127 = '';

$output1127 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1129 = function() use ($renderingContext, $self) {
$output1130 = '';

$output1130 .= '
							<div class="';
$array1131 = array (
);
$output1130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1131)]);

$output1130 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1132 = array();
$arguments1132['section'] = NULL;
$arguments1132['partial'] = NULL;
$arguments1132['delegate'] = NULL;
$arguments1132['renderable'] = NULL;
$arguments1132['arguments'] = array (
);
$arguments1132['optional'] = false;
$arguments1132['default'] = NULL;
$arguments1132['contentAs'] = NULL;
$arguments1132['debug'] = true;
$arguments1132['section'] = 'Content';
$arguments1132['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1130 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext);

$output1130 .= '
							</div>
						';
return $output1130;
};
$arguments1128 = array();

$output1127 .= '';

$output1127 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1136 = function() use ($renderingContext, $self) {
$output1137 = '';

$output1137 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1138 = array();
$arguments1138['section'] = NULL;
$arguments1138['partial'] = NULL;
$arguments1138['delegate'] = NULL;
$arguments1138['renderable'] = NULL;
$arguments1138['arguments'] = array (
);
$arguments1138['optional'] = false;
$arguments1138['default'] = NULL;
$arguments1138['contentAs'] = NULL;
$arguments1138['debug'] = true;
$arguments1138['section'] = 'Content';
$arguments1138['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1138, $renderChildrenClosure1139, $renderingContext);

$output1137 .= '
						';
return $output1137;
};
$arguments1135 = array();
$arguments1135['if'] = NULL;

$output1127 .= '';

$output1127 .= '
					';
return $output1127;
};
$arguments1113 = array();
$arguments1113['then'] = NULL;
$arguments1113['else'] = NULL;
$arguments1113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1124 = array();
$array1125 = array (
);$array1124['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1125);

$expression1126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1124)
					),
					$renderingContext
				);
$arguments1113['__thenClosure'] = function() use ($renderingContext, $self) {
$output1115 = '';

$output1115 .= '
							<div class="';
$array1116 = array (
);
$output1115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1116)]);

$output1115 .= '">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1117 = array();
$arguments1117['section'] = NULL;
$arguments1117['partial'] = NULL;
$arguments1117['delegate'] = NULL;
$arguments1117['renderable'] = NULL;
$arguments1117['arguments'] = array (
);
$arguments1117['optional'] = false;
$arguments1117['default'] = NULL;
$arguments1117['contentAs'] = NULL;
$arguments1117['debug'] = true;
$arguments1117['section'] = 'Content';
$arguments1117['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1117, $renderChildrenClosure1118, $renderingContext);

$output1115 .= '
							</div>
						';
return $output1115;
};
$arguments1113['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1120 = '';

$output1120 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1121 = array();
$arguments1121['section'] = NULL;
$arguments1121['partial'] = NULL;
$arguments1121['delegate'] = NULL;
$arguments1121['renderable'] = NULL;
$arguments1121['arguments'] = array (
);
$arguments1121['optional'] = false;
$arguments1121['default'] = NULL;
$arguments1121['contentAs'] = NULL;
$arguments1121['debug'] = true;
$arguments1121['section'] = 'Content';
$arguments1121['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1120 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1121, $renderChildrenClosure1122, $renderingContext);

$output1120 .= '
						';
return $output1120;
};

$output1111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1113, $renderChildrenClosure1114, $renderingContext);

$output1111 .= '
				</div>
			';
return $output1111;
};
$arguments1109['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1141 = '';

$output1141 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1143 = function() use ($renderingContext, $self) {
$output1156 = '';

$output1156 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1158 = function() use ($renderingContext, $self) {
$output1159 = '';

$output1159 .= '
						<div class="';
$array1160 = array (
);
$output1159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1160)]);

$output1159 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1161 = array();
$arguments1161['section'] = NULL;
$arguments1161['partial'] = NULL;
$arguments1161['delegate'] = NULL;
$arguments1161['renderable'] = NULL;
$arguments1161['arguments'] = array (
);
$arguments1161['optional'] = false;
$arguments1161['default'] = NULL;
$arguments1161['contentAs'] = NULL;
$arguments1161['debug'] = true;
$arguments1161['section'] = 'Content';
$arguments1161['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1161, $renderChildrenClosure1162, $renderingContext);

$output1159 .= '
						</div>
					';
return $output1159;
};
$arguments1157 = array();

$output1156 .= '';

$output1156 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1165 = function() use ($renderingContext, $self) {
$output1166 = '';

$output1166 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1167 = array();
$arguments1167['section'] = NULL;
$arguments1167['partial'] = NULL;
$arguments1167['delegate'] = NULL;
$arguments1167['renderable'] = NULL;
$arguments1167['arguments'] = array (
);
$arguments1167['optional'] = false;
$arguments1167['default'] = NULL;
$arguments1167['contentAs'] = NULL;
$arguments1167['debug'] = true;
$arguments1167['section'] = 'Content';
$arguments1167['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1166 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1167, $renderChildrenClosure1168, $renderingContext);

$output1166 .= '
					';
return $output1166;
};
$arguments1164 = array();
$arguments1164['if'] = NULL;

$output1156 .= '';

$output1156 .= '
				';
return $output1156;
};
$arguments1142 = array();
$arguments1142['then'] = NULL;
$arguments1142['else'] = NULL;
$arguments1142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1153 = array();
$array1154 = array (
);$array1153['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1154);

$expression1155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1153)
					),
					$renderingContext
				);
$arguments1142['__thenClosure'] = function() use ($renderingContext, $self) {
$output1144 = '';

$output1144 .= '
						<div class="';
$array1145 = array (
);
$output1144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1145)]);

$output1144 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1146 = array();
$arguments1146['section'] = NULL;
$arguments1146['partial'] = NULL;
$arguments1146['delegate'] = NULL;
$arguments1146['renderable'] = NULL;
$arguments1146['arguments'] = array (
);
$arguments1146['optional'] = false;
$arguments1146['default'] = NULL;
$arguments1146['contentAs'] = NULL;
$arguments1146['debug'] = true;
$arguments1146['section'] = 'Content';
$arguments1146['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1144 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);

$output1144 .= '
						</div>
					';
return $output1144;
};
$arguments1142['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1149 = '';

$output1149 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1150 = array();
$arguments1150['section'] = NULL;
$arguments1150['partial'] = NULL;
$arguments1150['delegate'] = NULL;
$arguments1150['renderable'] = NULL;
$arguments1150['arguments'] = array (
);
$arguments1150['optional'] = false;
$arguments1150['default'] = NULL;
$arguments1150['contentAs'] = NULL;
$arguments1150['debug'] = true;
$arguments1150['section'] = 'Content';
$arguments1150['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1150, $renderChildrenClosure1151, $renderingContext);

$output1149 .= '
					';
return $output1149;
};

$output1141 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1142, $renderChildrenClosure1143, $renderingContext);

$output1141 .= '
			';
return $output1141;
};

$output1105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1109, $renderChildrenClosure1110, $renderingContext);

$output1105 .= '
	</div>
';
return $output1105;
};
$arguments1103 = array();
$arguments1103['name'] = NULL;
$arguments1103['name'] = 'Inside';

$output419 .= NULL;

$output419 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1238 = function() use ($renderingContext, $self) {
$output1239 = '';

$output1239 .= '
	<div class="';
$array1240 = array (
);
$output1239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1240)]);

$output1239 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1241 = array();
$arguments1241['section'] = NULL;
$arguments1241['partial'] = NULL;
$arguments1241['delegate'] = NULL;
$arguments1241['renderable'] = NULL;
$arguments1241['arguments'] = array (
);
$arguments1241['optional'] = false;
$arguments1241['default'] = NULL;
$arguments1241['contentAs'] = NULL;
$arguments1241['debug'] = true;
$arguments1241['section'] = 'Div';
$arguments1241['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1239 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1241, $renderChildrenClosure1242, $renderingContext);

$output1239 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1244 = array();
$arguments1244['section'] = NULL;
$arguments1244['partial'] = NULL;
$arguments1244['delegate'] = NULL;
$arguments1244['renderable'] = NULL;
$arguments1244['arguments'] = array (
);
$arguments1244['optional'] = false;
$arguments1244['default'] = NULL;
$arguments1244['contentAs'] = NULL;
$arguments1244['debug'] = true;
$arguments1244['section'] = 'Content';
$arguments1244['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1239 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext);

$output1239 .= '
		</div>
	</div>
';
return $output1239;
};
$arguments1237 = array();
$arguments1237['name'] = NULL;
$arguments1237['name'] = 'Outside';

$output419 .= NULL;

$output419 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1248 = function() use ($renderingContext, $self) {
$output1249 = '';

$output1249 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1251 = function() use ($renderingContext, $self) {
$output1340 = '';

$output1340 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1342 = function() use ($renderingContext, $self) {
$output1343 = '';

$output1343 .= '
			<div class="';
$array1344 = array (
);
$output1343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1344)]);

$output1343 .= '">
				<div class="jumbotron-content w-100">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1346 = function() use ($renderingContext, $self) {
$output1350 = '';

$output1350 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1351 = array();
$arguments1351['section'] = NULL;
$arguments1351['partial'] = NULL;
$arguments1351['delegate'] = NULL;
$arguments1351['renderable'] = NULL;
$arguments1351['arguments'] = array (
);
$arguments1351['optional'] = false;
$arguments1351['default'] = NULL;
$arguments1351['contentAs'] = NULL;
$arguments1351['debug'] = true;
$arguments1351['partial'] = 'Page/Title';
$arguments1351['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1351, $renderChildrenClosure1352, $renderingContext);

$output1350 .= '
					';
return $output1350;
};
$arguments1345 = array();
$arguments1345['then'] = NULL;
$arguments1345['else'] = NULL;
$arguments1345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1347 = array();
$array1348 = array (
);$array1347['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array1348);
$array1347['1'] = ' == \'jumbotron\'';

$expression1349 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments1345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1347)
					),
					$renderingContext
				);
$arguments1345['__thenClosure'] = $renderChildrenClosure1346;

$output1343 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1345, $renderChildrenClosure1346, $renderingContext);

$output1343 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1355 = function() use ($renderingContext, $self) {
$output1369 = '';

$output1369 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1371 = function() use ($renderingContext, $self) {
$output1372 = '';

$output1372 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1373 = array();
$arguments1373['data'] = NULL;
$arguments1373['typoscriptObjectPath'] = NULL;
$arguments1373['currentValueKey'] = NULL;
$arguments1373['table'] = '';
$arguments1373['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1375 = array();
$array1376 = array (
);$array1375['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1376);
$array1375['colPos'] = 3;
$arguments1373['data'] = $array1375;
$renderChildrenClosure1374 = ($arguments1373['data'] !== null) ? function() use ($arguments1373) { return $arguments1373['data']; } : $renderChildrenClosure1374;
$output1372 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1373, $renderChildrenClosure1374, $renderingContext);

$output1372 .= '
						';
return $output1372;
};
$arguments1370 = array();

$output1369 .= '';

$output1369 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1378 = function() use ($renderingContext, $self) {
$output1379 = '';

$output1379 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1380 = array();
$arguments1380['data'] = NULL;
$arguments1380['typoscriptObjectPath'] = NULL;
$arguments1380['currentValueKey'] = NULL;
$arguments1380['table'] = '';
$arguments1380['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1382 = array();
$array1383 = array (
);$array1382['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1383);
$array1382['colPos'] = 3;
$arguments1380['data'] = $array1382;
$renderChildrenClosure1381 = ($arguments1380['data'] !== null) ? function() use ($arguments1380) { return $arguments1380['data']; } : $renderChildrenClosure1381;
$output1379 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1380, $renderChildrenClosure1381, $renderingContext);

$output1379 .= '
						';
return $output1379;
};
$arguments1377 = array();
$arguments1377['if'] = NULL;

$output1369 .= '';

$output1369 .= '
					';
return $output1369;
};
$arguments1354 = array();
$arguments1354['then'] = NULL;
$arguments1354['else'] = NULL;
$arguments1354['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1366 = array();
$array1367 = array (
);$array1366['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array1367);

$expression1368 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1354['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1366)
					),
					$renderingContext
				);
$arguments1354['__thenClosure'] = function() use ($renderingContext, $self) {
$output1356 = '';

$output1356 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1357 = array();
$arguments1357['data'] = NULL;
$arguments1357['typoscriptObjectPath'] = NULL;
$arguments1357['currentValueKey'] = NULL;
$arguments1357['table'] = '';
$arguments1357['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1359 = array();
$array1360 = array (
);$array1359['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1360);
$array1359['colPos'] = 3;
$arguments1357['data'] = $array1359;
$renderChildrenClosure1358 = ($arguments1357['data'] !== null) ? function() use ($arguments1357) { return $arguments1357['data']; } : $renderChildrenClosure1358;
$output1356 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1357, $renderChildrenClosure1358, $renderingContext);

$output1356 .= '
						';
return $output1356;
};
$arguments1354['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1361 = '';

$output1361 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1362 = array();
$arguments1362['data'] = NULL;
$arguments1362['typoscriptObjectPath'] = NULL;
$arguments1362['currentValueKey'] = NULL;
$arguments1362['table'] = '';
$arguments1362['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1364 = array();
$array1365 = array (
);$array1364['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1365);
$array1364['colPos'] = 3;
$arguments1362['data'] = $array1364;
$renderChildrenClosure1363 = ($arguments1362['data'] !== null) ? function() use ($arguments1362) { return $arguments1362['data']; } : $renderChildrenClosure1363;
$output1361 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1362, $renderChildrenClosure1363, $renderingContext);

$output1361 .= '
						';
return $output1361;
};

$output1343 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1354, $renderChildrenClosure1355, $renderingContext);

$output1343 .= '
				</div>
			</div>
		';
return $output1343;
};
$arguments1341 = array();

$output1340 .= '';

$output1340 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1385 = function() use ($renderingContext, $self) {
$output1386 = '';

$output1386 .= '
			<div class="jumbotron-content w-100">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1388 = function() use ($renderingContext, $self) {
$output1392 = '';

$output1392 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1393 = array();
$arguments1393['section'] = NULL;
$arguments1393['partial'] = NULL;
$arguments1393['delegate'] = NULL;
$arguments1393['renderable'] = NULL;
$arguments1393['arguments'] = array (
);
$arguments1393['optional'] = false;
$arguments1393['default'] = NULL;
$arguments1393['contentAs'] = NULL;
$arguments1393['debug'] = true;
$arguments1393['partial'] = 'Page/Title';
$arguments1393['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1392 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1393, $renderChildrenClosure1394, $renderingContext);

$output1392 .= '
				';
return $output1392;
};
$arguments1387 = array();
$arguments1387['then'] = NULL;
$arguments1387['else'] = NULL;
$arguments1387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1389 = array();
$array1390 = array (
);$array1389['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array1390);
$array1389['1'] = ' == \'jumbotron\'';

$expression1391 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments1387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1389)
					),
					$renderingContext
				);
$arguments1387['__thenClosure'] = $renderChildrenClosure1388;

$output1386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1387, $renderChildrenClosure1388, $renderingContext);

$output1386 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1397 = function() use ($renderingContext, $self) {
$output1411 = '';

$output1411 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1413 = function() use ($renderingContext, $self) {
$output1414 = '';

$output1414 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1415 = array();
$arguments1415['data'] = NULL;
$arguments1415['typoscriptObjectPath'] = NULL;
$arguments1415['currentValueKey'] = NULL;
$arguments1415['table'] = '';
$arguments1415['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1417 = array();
$array1418 = array (
);$array1417['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1418);
$array1417['colPos'] = 3;
$arguments1415['data'] = $array1417;
$renderChildrenClosure1416 = ($arguments1415['data'] !== null) ? function() use ($arguments1415) { return $arguments1415['data']; } : $renderChildrenClosure1416;
$output1414 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1415, $renderChildrenClosure1416, $renderingContext);

$output1414 .= '
					';
return $output1414;
};
$arguments1412 = array();

$output1411 .= '';

$output1411 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1420 = function() use ($renderingContext, $self) {
$output1421 = '';

$output1421 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1422 = array();
$arguments1422['data'] = NULL;
$arguments1422['typoscriptObjectPath'] = NULL;
$arguments1422['currentValueKey'] = NULL;
$arguments1422['table'] = '';
$arguments1422['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1424 = array();
$array1425 = array (
);$array1424['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1425);
$array1424['colPos'] = 3;
$arguments1422['data'] = $array1424;
$renderChildrenClosure1423 = ($arguments1422['data'] !== null) ? function() use ($arguments1422) { return $arguments1422['data']; } : $renderChildrenClosure1423;
$output1421 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1422, $renderChildrenClosure1423, $renderingContext);

$output1421 .= '
					';
return $output1421;
};
$arguments1419 = array();
$arguments1419['if'] = NULL;

$output1411 .= '';

$output1411 .= '
				';
return $output1411;
};
$arguments1396 = array();
$arguments1396['then'] = NULL;
$arguments1396['else'] = NULL;
$arguments1396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1408 = array();
$array1409 = array (
);$array1408['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array1409);

$expression1410 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1410(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1408)
					),
					$renderingContext
				);
$arguments1396['__thenClosure'] = function() use ($renderingContext, $self) {
$output1398 = '';

$output1398 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1399 = array();
$arguments1399['data'] = NULL;
$arguments1399['typoscriptObjectPath'] = NULL;
$arguments1399['currentValueKey'] = NULL;
$arguments1399['table'] = '';
$arguments1399['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1401 = array();
$array1402 = array (
);$array1401['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1402);
$array1401['colPos'] = 3;
$arguments1399['data'] = $array1401;
$renderChildrenClosure1400 = ($arguments1399['data'] !== null) ? function() use ($arguments1399) { return $arguments1399['data']; } : $renderChildrenClosure1400;
$output1398 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1399, $renderChildrenClosure1400, $renderingContext);

$output1398 .= '
					';
return $output1398;
};
$arguments1396['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1403 = '';

$output1403 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1404 = array();
$arguments1404['data'] = NULL;
$arguments1404['typoscriptObjectPath'] = NULL;
$arguments1404['currentValueKey'] = NULL;
$arguments1404['table'] = '';
$arguments1404['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1406 = array();
$array1407 = array (
);$array1406['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1407);
$array1406['colPos'] = 3;
$arguments1404['data'] = $array1406;
$renderChildrenClosure1405 = ($arguments1404['data'] !== null) ? function() use ($arguments1404) { return $arguments1404['data']; } : $renderChildrenClosure1405;
$output1403 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1404, $renderChildrenClosure1405, $renderingContext);

$output1403 .= '
					';
return $output1403;
};

$output1386 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1396, $renderChildrenClosure1397, $renderingContext);

$output1386 .= '
			</div>
		';
return $output1386;
};
$arguments1384 = array();
$arguments1384['if'] = NULL;

$output1340 .= '';

$output1340 .= '
	';
return $output1340;
};
$arguments1250 = array();
$arguments1250['then'] = NULL;
$arguments1250['else'] = NULL;
$arguments1250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1333 = array();
$array1333['0'] = '(';
$array1334 = array (
);$array1333['1'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1334);
$array1333['2'] = ' && !';
$array1335 = array (
);$array1333['3'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1335);
$array1333['4'] = ')
	 || (';
$array1336 = array (
);$array1333['5'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1336);
$array1333['6'] = ' && ';
$array1337 = array (
);$array1333['7'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1337);
$array1333['8'] = ' && ';
$array1338 = array (
);$array1333['9'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array1338);
$array1333['10'] = ' == \'Outside\')';

$expression1339 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]))) || ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node5"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node7"])) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node9"]) == 'Outside')));};
$arguments1250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1333)
					),
					$renderingContext
				);
$arguments1250['__thenClosure'] = function() use ($renderingContext, $self) {
$output1252 = '';

$output1252 .= '
			<div class="';
$array1253 = array (
);
$output1252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignItem', $array1253)]);

$output1252 .= '">
				<div class="jumbotron-content w-100">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1255 = function() use ($renderingContext, $self) {
$output1259 = '';

$output1259 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1260 = array();
$arguments1260['section'] = NULL;
$arguments1260['partial'] = NULL;
$arguments1260['delegate'] = NULL;
$arguments1260['renderable'] = NULL;
$arguments1260['arguments'] = array (
);
$arguments1260['optional'] = false;
$arguments1260['default'] = NULL;
$arguments1260['contentAs'] = NULL;
$arguments1260['debug'] = true;
$arguments1260['partial'] = 'Page/Title';
$arguments1260['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1259 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1260, $renderChildrenClosure1261, $renderingContext);

$output1259 .= '
					';
return $output1259;
};
$arguments1254 = array();
$arguments1254['then'] = NULL;
$arguments1254['else'] = NULL;
$arguments1254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1256 = array();
$array1257 = array (
);$array1256['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array1257);
$array1256['1'] = ' == \'jumbotron\'';

$expression1258 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments1254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1256)
					),
					$renderingContext
				);
$arguments1254['__thenClosure'] = $renderChildrenClosure1255;

$output1252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1254, $renderChildrenClosure1255, $renderingContext);

$output1252 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1264 = function() use ($renderingContext, $self) {
$output1278 = '';

$output1278 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1280 = function() use ($renderingContext, $self) {
$output1281 = '';

$output1281 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1282 = array();
$arguments1282['data'] = NULL;
$arguments1282['typoscriptObjectPath'] = NULL;
$arguments1282['currentValueKey'] = NULL;
$arguments1282['table'] = '';
$arguments1282['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1284 = array();
$array1285 = array (
);$array1284['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1285);
$array1284['colPos'] = 3;
$arguments1282['data'] = $array1284;
$renderChildrenClosure1283 = ($arguments1282['data'] !== null) ? function() use ($arguments1282) { return $arguments1282['data']; } : $renderChildrenClosure1283;
$output1281 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1282, $renderChildrenClosure1283, $renderingContext);

$output1281 .= '
						';
return $output1281;
};
$arguments1279 = array();

$output1278 .= '';

$output1278 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1287 = function() use ($renderingContext, $self) {
$output1288 = '';

$output1288 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1289 = array();
$arguments1289['data'] = NULL;
$arguments1289['typoscriptObjectPath'] = NULL;
$arguments1289['currentValueKey'] = NULL;
$arguments1289['table'] = '';
$arguments1289['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1291 = array();
$array1292 = array (
);$array1291['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1292);
$array1291['colPos'] = 3;
$arguments1289['data'] = $array1291;
$renderChildrenClosure1290 = ($arguments1289['data'] !== null) ? function() use ($arguments1289) { return $arguments1289['data']; } : $renderChildrenClosure1290;
$output1288 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1289, $renderChildrenClosure1290, $renderingContext);

$output1288 .= '
						';
return $output1288;
};
$arguments1286 = array();
$arguments1286['if'] = NULL;

$output1278 .= '';

$output1278 .= '
					';
return $output1278;
};
$arguments1263 = array();
$arguments1263['then'] = NULL;
$arguments1263['else'] = NULL;
$arguments1263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1275 = array();
$array1276 = array (
);$array1275['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array1276);

$expression1277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1275)
					),
					$renderingContext
				);
$arguments1263['__thenClosure'] = function() use ($renderingContext, $self) {
$output1265 = '';

$output1265 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1266 = array();
$arguments1266['data'] = NULL;
$arguments1266['typoscriptObjectPath'] = NULL;
$arguments1266['currentValueKey'] = NULL;
$arguments1266['table'] = '';
$arguments1266['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1268 = array();
$array1269 = array (
);$array1268['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1269);
$array1268['colPos'] = 3;
$arguments1266['data'] = $array1268;
$renderChildrenClosure1267 = ($arguments1266['data'] !== null) ? function() use ($arguments1266) { return $arguments1266['data']; } : $renderChildrenClosure1267;
$output1265 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1266, $renderChildrenClosure1267, $renderingContext);

$output1265 .= '
						';
return $output1265;
};
$arguments1263['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1270 = '';

$output1270 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1271 = array();
$arguments1271['data'] = NULL;
$arguments1271['typoscriptObjectPath'] = NULL;
$arguments1271['currentValueKey'] = NULL;
$arguments1271['table'] = '';
$arguments1271['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1273 = array();
$array1274 = array (
);$array1273['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1274);
$array1273['colPos'] = 3;
$arguments1271['data'] = $array1273;
$renderChildrenClosure1272 = ($arguments1271['data'] !== null) ? function() use ($arguments1271) { return $arguments1271['data']; } : $renderChildrenClosure1272;
$output1270 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1271, $renderChildrenClosure1272, $renderingContext);

$output1270 .= '
						';
return $output1270;
};

$output1252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1263, $renderChildrenClosure1264, $renderingContext);

$output1252 .= '
				</div>
			</div>
		';
return $output1252;
};
$arguments1250['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1293 = '';

$output1293 .= '
			<div class="jumbotron-content w-100">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1295 = function() use ($renderingContext, $self) {
$output1299 = '';

$output1299 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1300 = array();
$arguments1300['section'] = NULL;
$arguments1300['partial'] = NULL;
$arguments1300['delegate'] = NULL;
$arguments1300['renderable'] = NULL;
$arguments1300['arguments'] = array (
);
$arguments1300['optional'] = false;
$arguments1300['default'] = NULL;
$arguments1300['contentAs'] = NULL;
$arguments1300['debug'] = true;
$arguments1300['partial'] = 'Page/Title';
$arguments1300['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1299 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1300, $renderChildrenClosure1301, $renderingContext);

$output1299 .= '
				';
return $output1299;
};
$arguments1294 = array();
$arguments1294['then'] = NULL;
$arguments1294['else'] = NULL;
$arguments1294['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1296 = array();
$array1297 = array (
);$array1296['0'] = $renderingContext->getVariableProvider()->getByPath('config.general.pageTitle', $array1297);
$array1296['1'] = ' == \'jumbotron\'';

$expression1298 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'jumbotron');};
$arguments1294['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1296)
					),
					$renderingContext
				);
$arguments1294['__thenClosure'] = $renderChildrenClosure1295;

$output1293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1294, $renderChildrenClosure1295, $renderingContext);

$output1293 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1304 = function() use ($renderingContext, $self) {
$output1318 = '';

$output1318 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1320 = function() use ($renderingContext, $self) {
$output1321 = '';

$output1321 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1322 = array();
$arguments1322['data'] = NULL;
$arguments1322['typoscriptObjectPath'] = NULL;
$arguments1322['currentValueKey'] = NULL;
$arguments1322['table'] = '';
$arguments1322['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1324 = array();
$array1325 = array (
);$array1324['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1325);
$array1324['colPos'] = 3;
$arguments1322['data'] = $array1324;
$renderChildrenClosure1323 = ($arguments1322['data'] !== null) ? function() use ($arguments1322) { return $arguments1322['data']; } : $renderChildrenClosure1323;
$output1321 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1322, $renderChildrenClosure1323, $renderingContext);

$output1321 .= '
					';
return $output1321;
};
$arguments1319 = array();

$output1318 .= '';

$output1318 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1327 = function() use ($renderingContext, $self) {
$output1328 = '';

$output1328 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1329 = array();
$arguments1329['data'] = NULL;
$arguments1329['typoscriptObjectPath'] = NULL;
$arguments1329['currentValueKey'] = NULL;
$arguments1329['table'] = '';
$arguments1329['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1331 = array();
$array1332 = array (
);$array1331['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1332);
$array1331['colPos'] = 3;
$arguments1329['data'] = $array1331;
$renderChildrenClosure1330 = ($arguments1329['data'] !== null) ? function() use ($arguments1329) { return $arguments1329['data']; } : $renderChildrenClosure1330;
$output1328 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1329, $renderChildrenClosure1330, $renderingContext);

$output1328 .= '
					';
return $output1328;
};
$arguments1326 = array();
$arguments1326['if'] = NULL;

$output1318 .= '';

$output1318 .= '
				';
return $output1318;
};
$arguments1303 = array();
$arguments1303['then'] = NULL;
$arguments1303['else'] = NULL;
$arguments1303['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1315 = array();
$array1316 = array (
);$array1315['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.slide', $array1316);

$expression1317 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1315)
					),
					$renderingContext
				);
$arguments1303['__thenClosure'] = function() use ($renderingContext, $self) {
$output1305 = '';

$output1305 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1306 = array();
$arguments1306['data'] = NULL;
$arguments1306['typoscriptObjectPath'] = NULL;
$arguments1306['currentValueKey'] = NULL;
$arguments1306['table'] = '';
$arguments1306['typoscriptObjectPath'] = 'lib.dynamicContentSlide';
// Rendering Array
$array1308 = array();
$array1309 = array (
);$array1308['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1309);
$array1308['colPos'] = 3;
$arguments1306['data'] = $array1308;
$renderChildrenClosure1307 = ($arguments1306['data'] !== null) ? function() use ($arguments1306) { return $arguments1306['data']; } : $renderChildrenClosure1307;
$output1305 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1306, $renderChildrenClosure1307, $renderingContext);

$output1305 .= '
					';
return $output1305;
};
$arguments1303['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1310 = '';

$output1310 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure1312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1311 = array();
$arguments1311['data'] = NULL;
$arguments1311['typoscriptObjectPath'] = NULL;
$arguments1311['currentValueKey'] = NULL;
$arguments1311['table'] = '';
$arguments1311['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array1313 = array();
$array1314 = array (
);$array1313['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array1314);
$array1313['colPos'] = 3;
$arguments1311['data'] = $array1313;
$renderChildrenClosure1312 = ($arguments1311['data'] !== null) ? function() use ($arguments1311) { return $arguments1311['data']; } : $renderChildrenClosure1312;
$output1310 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1311, $renderChildrenClosure1312, $renderingContext);

$output1310 .= '
					';
return $output1310;
};

$output1293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1303, $renderChildrenClosure1304, $renderingContext);

$output1293 .= '
			</div>
		';
return $output1293;
};

$output1249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1250, $renderChildrenClosure1251, $renderingContext);

$output1249 .= '
';
return $output1249;
};
$arguments1247 = array();
$arguments1247['name'] = NULL;
$arguments1247['name'] = 'Content';

$output419 .= NULL;

$output419 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1427 = function() use ($renderingContext, $self) {
$output1428 = '';

$output1428 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1430 = function() use ($renderingContext, $self) {
$output1439 = '';

$output1439 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1441 = function() use ($renderingContext, $self) {
$output1442 = '';

$output1442 .= '
			<div id="s';
$array1443 = array (
);
$output1442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array1443)]);

$output1442 .= '" class="jumbotron background-image';
$array1444 = array (
);
$output1442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array1444)]);

$output1442 .= '">
		';
return $output1442;
};
$arguments1440 = array();

$output1439 .= '';

$output1439 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1446 = function() use ($renderingContext, $self) {
$output1447 = '';

$output1447 .= '
			<div class="jumbotron';
$array1448 = array (
);
$output1447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array1448)]);

$output1447 .= '">
		';
return $output1447;
};
$arguments1445 = array();
$arguments1445['if'] = NULL;

$output1439 .= '';

$output1439 .= '
	';
return $output1439;
};
$arguments1429 = array();
$arguments1429['then'] = NULL;
$arguments1429['else'] = NULL;
$arguments1429['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1436 = array();
$array1437 = array (
);$array1436['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.bgImage', $array1437);

$expression1438 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1429['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1438(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1436)
					),
					$renderingContext
				);
$arguments1429['__thenClosure'] = function() use ($renderingContext, $self) {
$output1431 = '';

$output1431 .= '
			<div id="s';
$array1432 = array (
);
$output1431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array1432)]);

$output1431 .= '" class="jumbotron background-image';
$array1433 = array (
);
$output1431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array1433)]);

$output1431 .= '">
		';
return $output1431;
};
$arguments1429['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1434 = '';

$output1434 .= '
			<div class="jumbotron';
$array1435 = array (
);
$output1434 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array1435)]);

$output1434 .= '">
		';
return $output1434;
};

$output1428 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1429, $renderChildrenClosure1430, $renderingContext);

$output1428 .= '
';
return $output1428;
};
$arguments1426 = array();
$arguments1426['name'] = NULL;
$arguments1426['name'] = 'Div';

$output419 .= NULL;

$output419 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1450 = function() use ($renderingContext, $self) {
$output1451 = '';

$output1451 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1453 = function() use ($renderingContext, $self) {
$output1457 = '';

$output1457 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure1459 = function() use ($renderingContext, $self) {
return '
	// Carousel - Page/Jumbotron.html
	var jumbotronContent = document.querySelectorAll(\'#jumbotron-content-wrapper .jumbotron-content\')[0];
	var jumbotronCarousels = document.querySelectorAll(\'#carouselJumbotron.carousel .carousel-inner\')[0];
	if( jumbotronCarousels.clientHeight < jumbotronContent.clientHeight ) {
		let slideHeight = jumbotronContent.clientHeight + 30;
		jumbotronCarousels.style.minHeight = slideHeight+\'px\';
	}
		';
};
$arguments1458 = array();
$arguments1458['additionalAttributes'] = NULL;
$arguments1458['data'] = NULL;
$arguments1458['aria'] = NULL;
$arguments1458['class'] = NULL;
$arguments1458['dir'] = NULL;
$arguments1458['id'] = NULL;
$arguments1458['lang'] = NULL;
$arguments1458['style'] = NULL;
$arguments1458['title'] = NULL;
$arguments1458['accesskey'] = NULL;
$arguments1458['tabindex'] = NULL;
$arguments1458['onclick'] = NULL;
$arguments1458['async'] = NULL;
$arguments1458['crossorigin'] = NULL;
$arguments1458['defer'] = NULL;
$arguments1458['integrity'] = NULL;
$arguments1458['nomodule'] = NULL;
$arguments1458['nonce'] = NULL;
$arguments1458['referrerpolicy'] = NULL;
$arguments1458['src'] = NULL;
$arguments1458['type'] = NULL;
$arguments1458['identifier'] = NULL;
$arguments1458['priority'] = false;
$arguments1458['identifier'] = 'vanilla_jumbotronCarousel';

$output1457 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1458, $renderChildrenClosure1459, $renderingContext);

$output1457 .= '
	';
return $output1457;
};
$arguments1452 = array();
$arguments1452['then'] = NULL;
$arguments1452['else'] = NULL;
$arguments1452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1454 = array();
$array1455 = array (
);$array1454['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.noBgRatio', $array1455);

$expression1456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1454)
					),
					$renderingContext
				);
$arguments1452['__thenClosure'] = $renderChildrenClosure1453;

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1452, $renderChildrenClosure1453, $renderingContext);

$output1451 .= '
	<div id="jumbotron-background-carousel" class="jumbotron';
$array1460 = array (
);
$output1451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.class', $array1460)]);

$output1451 .= '" >
		<div id="carouselJumbotron" class="carousel slide" data-bs-ride="carousel" data-bs-interval="';
$array1461 = array (
);
$output1451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.config.jumbotronCarouselInterval', $array1461)]);

$output1451 .= '"
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1462 = array();
$arguments1462['then'] = NULL;
$arguments1462['else'] = NULL;
$arguments1462['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1464 = array();
$array1465 = array (
);$array1464['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.jumbotronCarouselPause', $array1465);

$expression1466 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1462['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1466(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1464)
					),
					$renderingContext
				);
$arguments1462['then'] = ' data-bs-pause="hover"';

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1462, $renderChildrenClosure1463, $renderingContext);

$output1451 .= '>
			<div class="carousel-indicators">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1468 = function() use ($renderingContext, $self) {
$output1470 = '';

$output1470 .= '
					<button type="button" data-bs-target="#carouselJumbotron" data-bs-slide-to="';
$array1471 = array (
);
$output1470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.index', $array1471)]);

$output1470 .= '" aria-label="Slide ';
$array1472 = array (
);
$output1470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array1472)]);

$output1470 .= '"
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1473 = array();
$arguments1473['then'] = NULL;
$arguments1473['else'] = NULL;
$arguments1473['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1475 = array();
$array1476 = array (
);$array1475['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array1476);

$expression1477 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1473['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1477(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1475)
					),
					$renderingContext
				);
$arguments1473['then'] = ' class="active"';

$output1470 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1473, $renderChildrenClosure1474, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1478 = array();
$arguments1478['then'] = NULL;
$arguments1478['else'] = NULL;
$arguments1478['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1480 = array();
$array1481 = array (
);$array1480['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isFirst', $array1481);

$expression1482 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1478['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1480)
					),
					$renderingContext
				);
$output1483 = '';

$output1483 .= ' aria-label="Slide ';
$array1484 = array (
);
$output1483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array1484)]);

$output1483 .= '"';
$arguments1478['then'] = $output1483;

$output1470 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1478, $renderChildrenClosure1479, $renderingContext);

$output1470 .= '></button>
				';
return $output1470;
};
$arguments1467 = array();
$arguments1467['each'] = NULL;
$arguments1467['as'] = NULL;
$arguments1467['key'] = NULL;
$arguments1467['reverse'] = false;
$arguments1467['iteration'] = NULL;
$array1469 = array (
);$arguments1467['each'] = $renderingContext->getVariableProvider()->getByPath('bgSlides', $array1469);
$arguments1467['as'] = 'slide';
$arguments1467['iteration'] = 'iterator';

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1467, $renderChildrenClosure1468, $renderingContext);

$output1451 .= '
			</div>
			<div id="jumbotron-content-wrapper" class="d-flex card-img-overlay" style="z-index: 1">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1486 = function() use ($renderingContext, $self) {
$output1501 = '';

$output1501 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1503 = function() use ($renderingContext, $self) {
$output1504 = '';

$output1504 .= '
						<div class="';
$array1505 = array (
);
$output1504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1505)]);

$output1504 .= ' align-self-';
$array1506 = array (
);
$output1504 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array1506)]);

$output1504 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1507 = array();
$arguments1507['section'] = NULL;
$arguments1507['partial'] = NULL;
$arguments1507['delegate'] = NULL;
$arguments1507['renderable'] = NULL;
$arguments1507['arguments'] = array (
);
$arguments1507['optional'] = false;
$arguments1507['default'] = NULL;
$arguments1507['contentAs'] = NULL;
$arguments1507['debug'] = true;
$arguments1507['section'] = 'Content';
$arguments1507['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1504 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1507, $renderChildrenClosure1508, $renderingContext);

$output1504 .= '
						</div>
					';
return $output1504;
};
$arguments1502 = array();

$output1501 .= '';

$output1501 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1511 = function() use ($renderingContext, $self) {
$output1512 = '';

$output1512 .= '
						<div class="align-self-';
$array1513 = array (
);
$output1512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array1513)]);

$output1512 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1514 = array();
$arguments1514['section'] = NULL;
$arguments1514['partial'] = NULL;
$arguments1514['delegate'] = NULL;
$arguments1514['renderable'] = NULL;
$arguments1514['arguments'] = array (
);
$arguments1514['optional'] = false;
$arguments1514['default'] = NULL;
$arguments1514['contentAs'] = NULL;
$arguments1514['debug'] = true;
$arguments1514['section'] = 'Content';
$arguments1514['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1512 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1514, $renderChildrenClosure1515, $renderingContext);

$output1512 .= '
						</div>
					';
return $output1512;
};
$arguments1510 = array();
$arguments1510['if'] = NULL;

$output1501 .= '';

$output1501 .= '
				';
return $output1501;
};
$arguments1485 = array();
$arguments1485['then'] = NULL;
$arguments1485['else'] = NULL;
$arguments1485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1498 = array();
$array1499 = array (
);$array1498['0'] = $renderingContext->getVariableProvider()->getByPath('config.jumbotron.containerposition', $array1499);
$array1498['1'] = ' == \'Inside\'';

$expression1500 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Inside');};
$arguments1485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1500(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1498)
					),
					$renderingContext
				);
$arguments1485['__thenClosure'] = function() use ($renderingContext, $self) {
$output1487 = '';

$output1487 .= '
						<div class="';
$array1488 = array (
);
$output1487 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.container', $array1488)]);

$output1487 .= ' align-self-';
$array1489 = array (
);
$output1487 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array1489)]);

$output1487 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1490 = array();
$arguments1490['section'] = NULL;
$arguments1490['partial'] = NULL;
$arguments1490['delegate'] = NULL;
$arguments1490['renderable'] = NULL;
$arguments1490['arguments'] = array (
);
$arguments1490['optional'] = false;
$arguments1490['default'] = NULL;
$arguments1490['contentAs'] = NULL;
$arguments1490['debug'] = true;
$arguments1490['section'] = 'Content';
$arguments1490['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1487 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1490, $renderChildrenClosure1491, $renderingContext);

$output1487 .= '
						</div>
					';
return $output1487;
};
$arguments1485['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1493 = '';

$output1493 .= '
						<div class="align-self-';
$array1494 = array (
);
$output1493 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('config.jumbotron.alignment', $array1494)]);

$output1493 .= ' w-100">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1495 = array();
$arguments1495['section'] = NULL;
$arguments1495['partial'] = NULL;
$arguments1495['delegate'] = NULL;
$arguments1495['renderable'] = NULL;
$arguments1495['arguments'] = array (
);
$arguments1495['optional'] = false;
$arguments1495['default'] = NULL;
$arguments1495['contentAs'] = NULL;
$arguments1495['debug'] = true;
$arguments1495['section'] = 'Content';
$arguments1495['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output1493 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1495, $renderChildrenClosure1496, $renderingContext);

$output1493 .= '
						</div>
					';
return $output1493;
};

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1485, $renderChildrenClosure1486, $renderingContext);

$output1451 .= '
			</div>
			<div class="carousel-inner h-100" role="listbox">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure1518 = function() use ($renderingContext, $self) {
return '	background-image by css ';
};
$arguments1517 = array();

$output1451 .= NULL;

$output1451 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1520 = function() use ($renderingContext, $self) {
$output1522 = '';

$output1522 .= '
					<div id="s';
$array1523 = array (
);
$output1522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array1523)]);

$output1522 .= '-';
$array1524 = array (
);
$output1522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array1524)]);

$output1522 .= '" class="carousel-item background-image h-100 position-absolute"></div>
				';
return $output1522;
};
$arguments1519 = array();
$arguments1519['each'] = NULL;
$arguments1519['as'] = NULL;
$arguments1519['key'] = NULL;
$arguments1519['reverse'] = false;
$arguments1519['iteration'] = NULL;
$array1521 = array (
);$arguments1519['each'] = $renderingContext->getVariableProvider()->getByPath('bgSlides', $array1521);
$arguments1519['as'] = 'slide';
$arguments1519['iteration'] = 'iterator';

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1519, $renderChildrenClosure1520, $renderingContext);

$output1451 .= '
			</div>
			<button class="carousel-control-prev" data-bs-target="#carouselJumbotron" type="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" data-bs-target="#carouselJumbotron" type="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
';
return $output1451;
};
$arguments1449 = array();
$arguments1449['name'] = NULL;
$arguments1449['name'] = 'JumboBgSlider';

$output419 .= NULL;

$output419 .= '
';

return $output419;
}


}
#