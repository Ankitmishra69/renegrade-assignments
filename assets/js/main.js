/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**************************!*\
  !*** ./src/js/custom.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ "./src/scss/style.scss");


(function() {
    const franchiseProcessCards = {
        init: function() {
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
                jQuery('.franchise-process__wrapper').owlCarousel({
                    loop: true,
                    dots: false,
                    margin: 12,
                    responsive: {
                        0: {
                            items: 1,
                            stagePadding: 24
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
            } else {
                console.error("Owl Carousel library is not loaded.");
            }
        }
    };

    const testimonialSlider = {
        init: function() {
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
                jQuery('.testimonial__wrapper').owlCarousel({
                    loop: true,
                    margin: 12,
                    items: 1,
                    dots: true,
                    autoplay: true,
                });
            } else {
                console.error("Owl Carousel library is not loaded.");
            }
        }
    };
    const hamburgerToggler = () => {
        let DOM = {};

        function activeMobileNav(e) {
            e.preventDefault();
            DOM.mobile_navigation.classList.toggle('mobile-nav--active');
        }

        function hideMobileNav(e) {
            e.preventDefault();
            DOM.mobile_navigation.classList.remove('mobile-nav--active');
        }

        function eventListeners() {
            DOM.hamburger.addEventListener('click', activeMobileNav);
            DOM.btn_close.addEventListener('click', hideMobileNav);
        }

        function cacheDOM() {
            DOM.hamburger = document.querySelector('.toggle-btn');
            DOM.btn_close = document.querySelector('.btn-close');
            DOM.mobile_navigation = document.getElementById('mobileNav');
        }

        function init() {
            cacheDOM();
            eventListeners();
        }

        return {
            init,
        };
    }

    const subMenuToogler = () => {
        let DOM = {};

        function toggleSubMenu(e) {
            e.preventDefault();
            const parentMenuItem = e.currentTarget.closest('.menu-item-has-children');
            const subMenu = parentMenuItem.querySelector('.sub-menu');

            if (subMenu) {
                subMenu.classList.toggle('sub-menu--active');
            }
        }

        function eventListeners() {
            DOM.items.forEach(item => {
                item.addEventListener('click', toggleSubMenu);
            });
        }


        function cacheDOM() {
            DOM.subMenu = document.querySelector('.sub-menu');
            DOM.items = document.querySelectorAll('.menu-item-has-children a');
        }

        function init() {
            cacheDOM();
            eventListeners();
        }

        return {
            init,
        };
    }


    document.addEventListener("DOMContentLoaded", function() {
        franchiseProcessCards.init();
        testimonialSlider.init();
        hamburgerToggler().init();
        subMenuToogler().init();
    });

})();

})();

/******/ })()
;
//# sourceMappingURL=main.js.map