import '../scss/style.scss';

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
