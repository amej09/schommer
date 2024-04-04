<?php

class partial_FunctionAssets_1f64b71e1dc2da235de61f4597b9016f18017081 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
// Scroll anchor - Main.html
function t3sbScrollToAnchor(sectionmenuAnchorOffset, fixedNavbar, navbarHeight, sectionhash=false) {
	var hash = window.location.hash;
	if (sectionhash) {
		hash = sectionhash;
	}
	if (hash.length) {
		var idArr = hash.split(\'#\');
		var targetElement = document.getElementById(idArr[1]);
		if ( targetElement === null ) {
			idArr = hash.split(\'#c\');
			targetElement = document.getElementById(\'tab-\'+idArr[1]);
		}
		if ( targetElement != null ) {
			var	offsetSize = sectionmenuAnchorOffset;
			if ( fixedNavbar ) {
				offsetSize += navbarHeight;
			}
			var scrollTo = Math.round(t3sbOffsetTop(targetElement)-offsetSize);
			window.scroll(';

$output3 .= '{ top: scrollTo, behavior: \'smooth\' }';

$output3 .= ');
		}
	}
}

function t3sbOffsetTop(el) {
	var rect = el.getBoundingClientRect(),
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		return rect.top + scrollTop;
}

/**
 * Object.prototype.forEach(TYPO3.settings.ADDHEIGHT) polyfill
 * https://gomakethings.com/looping-through-objects-with-es6/
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!Object.prototype.forEach) {
	Object.defineProperty(Object.prototype, \'forEach\', {
		value: function (callback, thisArg) {
			if (this == null) {
				throw new TypeError(\'Not an object\');
			}
			thisArg = thisArg || window;
			for (var key in this) {
				if (this.hasOwnProperty(key)) {
					callback.call(thisArg, this[key], key, this);
				}
			}
		}
	});
}
';
return $output3;
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
$arguments1['async'] = NULL;
$arguments1['crossorigin'] = NULL;
$arguments1['defer'] = NULL;
$arguments1['integrity'] = NULL;
$arguments1['nomodule'] = NULL;
$arguments1['nonce'] = NULL;
$arguments1['referrerpolicy'] = NULL;
$arguments1['src'] = NULL;
$arguments1['type'] = NULL;
$arguments1['identifier'] = NULL;
$arguments1['priority'] = false;
$arguments1['identifier'] = 'default_function';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return '
// Loading spinner - Main.html
function t3sbFadeOutEffect(fadeTarget) {
	var fadeEffect = setInterval(function () {
		if (!fadeTarget.style.opacity) {
			fadeTarget.style.opacity = 1;
		}
		if (fadeTarget.style.opacity > 0) {
			fadeTarget.style.opacity -= 0.1;
		} else {
			clearInterval(fadeEffect);
		}
	}, 60);
	fadeTarget.classList.add(\'d-none\');
}
	';
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
$arguments10['async'] = NULL;
$arguments10['crossorigin'] = NULL;
$arguments10['defer'] = NULL;
$arguments10['integrity'] = NULL;
$arguments10['nomodule'] = NULL;
$arguments10['nonce'] = NULL;
$arguments10['referrerpolicy'] = NULL;
$arguments10['src'] = NULL;
$arguments10['type'] = NULL;
$arguments10['identifier'] = NULL;
$arguments10['priority'] = false;
$arguments10['identifier'] = 'loadingspinner_function';

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
';
return $output9;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.loadingSpinner', $array7);

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return '
// Magnifying glass icon - Main.html
function t3sbMagnifying(img, viewportWidth, navbarBreakpointWidth) {
	var zoomOverlay = img.parentElement.parentElement.querySelectorAll(\'div.zoom-overlay\');
	if ( zoomOverlay.length ) {
		var imgwidth = Math.round(img.getBoundingClientRect().width)+\'px\',
			imgheight = img.clientHeight+\'px\';
		if ( viewportWidth < navbarBreakpointWidth ) {
			imgwidth = \'100%\';
		}
		zoomOverlay[0].classList.add(\'card-img-overlay\');
		if ( imgwidth ) {
			zoomOverlay[0].style.maxWidth = imgwidth;
		}
		if ( imgheight ) {
			zoomOverlay[0].style.maxHeight = imgheight;
		}
	}
}
	';
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['aria'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['async'] = NULL;
$arguments19['crossorigin'] = NULL;
$arguments19['defer'] = NULL;
$arguments19['integrity'] = NULL;
$arguments19['nomodule'] = NULL;
$arguments19['nonce'] = NULL;
$arguments19['referrerpolicy'] = NULL;
$arguments19['src'] = NULL;
$arguments19['type'] = NULL;
$arguments19['identifier'] = NULL;
$arguments19['priority'] = false;
$arguments19['identifier'] = 'magnifying_function';

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
';
return $output18;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.magnifying', $array15);
$array14['1'] = ' && ';
$array16 = array (
);$array14['2'] = $renderingContext->getVariableProvider()->getByPath('settings.config.lightboxSelection', $array16);

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
// Link to top - Main.html
function t3sbScrollToTop() {
	document.addEventListener(\'scroll\', t3sbHandleScroll);
}

function t3sbHandleScroll() {
	var scrollToTopBtn = document.querySelector(\'.back-to-top\'),
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollToTopBtn != null) {
		scrollToTopBtn.addEventListener(\'click\', t3sbScrollIt);
		if (scrollTop > 100) {
			scrollToTopBtn.classList.add(\'st-block\');
			scrollToTopBtn.classList.remove(\'st-none\');
		} else {
			scrollToTopBtn.classList.add(\'st-none\');
			scrollToTopBtn.classList.remove(\'st-block\');
		}
	}
}

function t3sbScrollIt(e) {
	e.preventDefault();
	window.scroll(';

$output30 .= '{ top: 0, behavior: \'smooth\' }';

$output30 .= ');
}
	';
return $output30;
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
$arguments28['async'] = NULL;
$arguments28['crossorigin'] = NULL;
$arguments28['defer'] = NULL;
$arguments28['integrity'] = NULL;
$arguments28['nomodule'] = NULL;
$arguments28['nonce'] = NULL;
$arguments28['referrerpolicy'] = NULL;
$arguments28['src'] = NULL;
$arguments28['type'] = NULL;
$arguments28['identifier'] = NULL;
$arguments28['priority'] = false;
$arguments28['identifier'] = 'linktotop_function';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
';
return $output27;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_t3sbootstrap_linkToTop', $array24);
$array23['1'] = ' || ';
$array25 = array (
);$array23['2'] = $renderingContext->getVariableProvider()->getByPath('settings.backToTopForAllPages', $array25);

$expression26 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return '
// Sticky footer - Page/Footer.html
function t3sbStickyFooter(footerExtraHeight) {
	const footer = document.getElementById(\'page-footer\');
	var footerHeight = footer.clientHeight;
	if ( footerExtraHeight > 0 ) {
		footerHeight += footerExtraHeight;
	}
	if ( footer.classList.contains(\'footer-sticky\') ) {
		document.body.style.paddingBottom = footerHeight+\'px\';
	}
}
	';
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
$arguments37['identifier'] = 'stickyfooter_function';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.footerSticky', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
// Section Menu Navbar - Page/Navbar/Navbar.html
function t3sbSectionMenu(fixedNavbar,sectionmenuAnchorOffset,navbarHeight,offcanvas) {
	var scrollTrigger = document.querySelectorAll(\'.section-menu a.js-scroll-trigger\');
	if (offcanvas && !scrollTrigger.length) {
		scrollTrigger = document.querySelectorAll(\'.offcanvas a.js-scroll-trigger\');
	}
	scrollTrigger.forEach( st => {
		st.addEventListener(\'click\', (event) => {
			event.preventDefault();
			var anchor = event.currentTarget.getAttribute(\'href\');
			if (anchor.length) {
				var offsetSize = sectionmenuAnchorOffset;
				if ( fixedNavbar ) {
					offsetSize = navbarHeight+offsetSize;
				}
				var targetElement = document.getElementById(anchor.split(\'#\')[1]);
				var scrollTo = Math.round(t3sbOffsetTop(targetElement)-offsetSize);
				window.scroll(';

$output47 .= '{ top: scrollTo, behavior: \'smooth\' }';

$output47 .= ');
			}
		});
	});
	if (!offcanvas) {
		const navLinks = document.querySelectorAll(\'.nav-item:not(.dropdown)\');
		const menuToggle = document.getElementById(\'navbarToggler\');
		const bsCollapse = new bootstrap.Collapse(menuToggle, ';

$output47 .= '{toggle: false}';

$output47 .= ');
		navLinks.forEach((l) => {
			l.addEventListener(\'click\', () => ';

$output47 .= '{ bsCollapse.toggle() }';

$output47 .= ');
		});
	}
}
	';
return $output47;
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
$arguments45['async'] = NULL;
$arguments45['crossorigin'] = NULL;
$arguments45['defer'] = NULL;
$arguments45['integrity'] = NULL;
$arguments45['nomodule'] = NULL;
$arguments45['nonce'] = NULL;
$arguments45['referrerpolicy'] = NULL;
$arguments45['src'] = NULL;
$arguments45['type'] = NULL;
$arguments45['identifier'] = NULL;
$arguments45['priority'] = false;
$arguments45['identifier'] = 'navbarsection_function';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
';
return $output44;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarSectionmenu', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return '
// Navbar transparent - Navbar/Assets.html
function t3sbTransparentNavbar(colorschemes, gradient) {
	window.onscroll = function(){
		var navbar = document.getElementById(\'main-navbar\');
		var top =	 window.pageYOffset || document.documentElement.scrollTop;
		if (top > 100) {
			navbar.classList.remove(\'bg-transparent\');
			navbar.classList.add(colorschemes);
			if (gradient) {
				navbar.classList.add(gradient);
			}
		} else {
			navbar.classList.add(\'bg-transparent\');
			navbar.classList.remove(colorschemes);
			if (gradient) {
				navbar.classList.remove(gradient);
			}
		}
	};
}
	';
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['aria'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['async'] = NULL;
$arguments54['crossorigin'] = NULL;
$arguments54['defer'] = NULL;
$arguments54['integrity'] = NULL;
$arguments54['nomodule'] = NULL;
$arguments54['nonce'] = NULL;
$arguments54['referrerpolicy'] = NULL;
$arguments54['src'] = NULL;
$arguments54['type'] = NULL;
$arguments54['identifier'] = NULL;
$arguments54['priority'] = false;
$arguments54['identifier'] = 'navbartransparent_function';

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarTransparent', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return '
// Shrinking Navbar on scrolling - Navbar/Assets.html
function t3sbShrinkingNavbar(navbar, padding) {
	let navShrinkColorschemes = navbar.getAttribute(\'data-shrinkcolorschemes\'),
		navShrinkColor = navbar.getAttribute(\'data-shrinkcolor\'),
		navColorschemes = navbar.getAttribute(\'data-colorschemes\'),
		navColor = navbar.getAttribute(\'data-color\');
	window.addEventListener(\'scroll\', function() {
		if ( t3sbOffsetTop(navbar) > 100) {
			navbar.classList.remove(\'py-\'+padding, navColorschemes, navColor);
			navbar.classList.add(\'navbar-shrink\', navShrinkColor, navShrinkColorschemes);
		} else {
			navbar.classList.remove(\'navbar-shrink\', navShrinkColor, navShrinkColorschemes);
			navbar.classList.add(\'py-\'+padding, navColorschemes, navColor);
		}
	});
}
	';
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
$arguments62['async'] = NULL;
$arguments62['crossorigin'] = NULL;
$arguments62['defer'] = NULL;
$arguments62['integrity'] = NULL;
$arguments62['nomodule'] = NULL;
$arguments62['nonce'] = NULL;
$arguments62['referrerpolicy'] = NULL;
$arguments62['src'] = NULL;
$arguments62['type'] = NULL;
$arguments62['identifier'] = NULL;
$arguments62['priority'] = false;
$arguments62['identifier'] = 'navbarshrinkcolor_function';

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
';
return $output61;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarShrinkcolor', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return '
// Extra Row - Navbar/Assets.html
function t3sbExtraRow(vw, bp) {
	let extraRow = document.querySelector(\'.navbar .extra-row\');
	if (extraRow) {
		if ( vw < bp ) {
			extraRow.classList.add(\'flex-row\',\'me-auto\',\'mt-4\',\'mb-0\');
			extraRow.classList.remove(\'ms-auto\');

		} else {
			extraRow.classList.remove(\'flex-row\',\'me-auto\',\'mt-4\',\'mb-0\');
			extraRow.classList.add(\'ms-auto\');
		}
	}
}
	';
};
$arguments70 = array();
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['aria'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['async'] = NULL;
$arguments70['crossorigin'] = NULL;
$arguments70['defer'] = NULL;
$arguments70['integrity'] = NULL;
$arguments70['nomodule'] = NULL;
$arguments70['nonce'] = NULL;
$arguments70['referrerpolicy'] = NULL;
$arguments70['src'] = NULL;
$arguments70['type'] = NULL;
$arguments70['identifier'] = NULL;
$arguments70['priority'] = false;
$arguments70['identifier'] = 'navbarExtraRow_function';

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
';
return $output69;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarExtraRow', $array67);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '
// Offcanvas - Navbar/Assets.html
function t3sbOffcanvas(vw, bp, utilColorArr) {
	var navbarToggler = document.getElementById(\'navbarToggler\');
	if ( vw > bp ) {
		navbarToggler.classList.remove(utilColorArr[0]);
		navbarToggler.classList.remove(utilColorArr[1]);
	} else {
		navbarToggler.classList.add(utilColorArr[0]);
		navbarToggler.classList.add(utilColorArr[1]);
	}
	let extraRow = document.querySelector(\'.navbar .extra-row\');
	if (extraRow) {
		if ( vw < bp ) {
			extraRow.classList.add(\'ms-3\');
		} else {
			extraRow.classList.remove(\'ms-3\');
		}
	}
}
	';
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['aria'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['async'] = NULL;
$arguments78['crossorigin'] = NULL;
$arguments78['defer'] = NULL;
$arguments78['integrity'] = NULL;
$arguments78['nomodule'] = NULL;
$arguments78['nonce'] = NULL;
$arguments78['referrerpolicy'] = NULL;
$arguments78['src'] = NULL;
$arguments78['type'] = NULL;
$arguments78['identifier'] = NULL;
$arguments78['priority'] = false;
$arguments78['identifier'] = 'offcanvas_function';

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
';
return $output77;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarOffcanvas', $array75);

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = $renderChildrenClosure73;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return '
// Searchbox in Navbar - Navbar/Assets.html
function t3sbNavbarSearchbox(vw, bp) {
	let	form = document.querySelector(\'.navbar form\');
	if ( vw < bp ) {
		if (form.classList.contains(\'ms-auto\')) {
			form.classList.remove(\'ms-auto\');
			form.classList.add(\'xl-ms-auto\');
		}
		form.classList.add(\'mt-3\');
	} else {
		if (form.classList.contains(\'xl-ms-auto\')) {
			form.classList.add(\'ms-auto\');
			form.classList.remove(\'xl-ms-auto\');
		}
		form.classList.remove(\'mt-3\');
	}
}
	';
};
$arguments86 = array();
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['aria'] = NULL;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['async'] = NULL;
$arguments86['crossorigin'] = NULL;
$arguments86['defer'] = NULL;
$arguments86['integrity'] = NULL;
$arguments86['nomodule'] = NULL;
$arguments86['nonce'] = NULL;
$arguments86['referrerpolicy'] = NULL;
$arguments86['src'] = NULL;
$arguments86['type'] = NULL;
$arguments86['identifier'] = NULL;
$arguments86['priority'] = false;
$arguments86['identifier'] = 'navbarSearchbox_function';

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.navbarSearchbox', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return '
// Dark mode - Main.html
function t3sbDarkMode() {
	let dark = window.matchMedia("(prefers-color-scheme: dark)").matches;
	let body = document.querySelector(\'body\');
	if (dark) {
		body.classList.add(\'dark-mode\');
	} else {
		body.classList.remove(\'dark-mode\');
	}
}
';
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['aria'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['async'] = NULL;
$arguments94['crossorigin'] = NULL;
$arguments94['defer'] = NULL;
$arguments94['integrity'] = NULL;
$arguments94['nomodule'] = NULL;
$arguments94['nonce'] = NULL;
$arguments94['referrerpolicy'] = NULL;
$arguments94['src'] = NULL;
$arguments94['type'] = NULL;
$arguments94['identifier'] = NULL;
$arguments94['priority'] = false;
$arguments94['identifier'] = 'darkMode_function';

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('settings.config.darkMode', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#