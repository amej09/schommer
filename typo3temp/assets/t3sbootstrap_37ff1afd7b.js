
// Scroll anchor - Main.html
function t3sbScrollToAnchor(sectionmenuAnchorOffset, fixedNavbar, navbarHeight, sectionhash=false) {
	var hash = window.location.hash;
	if (sectionhash) {
		hash = sectionhash;
	}
	if (hash.length) {
		var idArr = hash.split('#');
		var targetElement = document.getElementById(idArr[1]);
		if ( targetElement === null ) {
			idArr = hash.split('#c');
			targetElement = document.getElementById('tab-'+idArr[1]);
		}
		if ( targetElement != null ) {
			var	offsetSize = sectionmenuAnchorOffset;
			if ( fixedNavbar ) {
				offsetSize += navbarHeight;
			}
			var scrollTo = Math.round(t3sbOffsetTop(targetElement)-offsetSize);
			window.scroll({ top: scrollTo, behavior: 'smooth' });
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
	Object.defineProperty(Object.prototype, 'forEach', {
		value: function (callback, thisArg) {
			if (this == null) {
				throw new TypeError('Not an object');
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



// Link to top - Main.html
function t3sbScrollToTop() {
	document.addEventListener('scroll', t3sbHandleScroll);
}

function t3sbHandleScroll() {
	var scrollToTopBtn = document.querySelector('.back-to-top'),
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollToTopBtn != null) {
		scrollToTopBtn.addEventListener('click', t3sbScrollIt);
		if (scrollTop > 100) {
			scrollToTopBtn.classList.add('st-block');
			scrollToTopBtn.classList.remove('st-none');
		} else {
			scrollToTopBtn.classList.add('st-none');
			scrollToTopBtn.classList.remove('st-block');
		}
	}
}

function t3sbScrollIt(e) {
	e.preventDefault();
	window.scroll({ top: 0, behavior: 'smooth' });
}
	


// Sticky footer - Page/Footer.html
function t3sbStickyFooter(footerExtraHeight) {
	const footer = document.getElementById('page-footer');
	var footerHeight = footer.clientHeight;
	if ( footerExtraHeight > 0 ) {
		footerHeight += footerExtraHeight;
	}
	if ( footer.classList.contains('footer-sticky') ) {
		document.body.style.paddingBottom = footerHeight+'px';
	}
}
	


function ready(fn) {
	if (document.readyState != 'loading'){
fn();
	} else {
document.addEventListener('DOMContentLoaded', fn);
	}
}
ready(() => {
	// Default - Main.html
	const navbar = false,
			navbarHeight = false,
			navbarBreakpointWidth = 99999,
			viewportWidth = parseFloat(getComputedStyle(document.querySelector('html'), null).width.replace("px", "")),
			onePageLayout = 0;

	var fixedNavbar = false;

	// Scroll anchor - Main.html
	if (window.location.hash) {
		t3sbScrollToAnchor(29, fixedNavbar, navbarHeight);
	}
				

	// Link to top - Main.html
	t3sbScrollToTop();

});
