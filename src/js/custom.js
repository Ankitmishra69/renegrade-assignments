import '../scss/style.scss';

(function() {
    const franchiseProcessCards = {
        init: function() {
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
                jQuery('.franchise-process__wrapper').owlCarousel({
                    loop: true,
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
                    items: 1,             // Display one item at a time
                    dots: true,            // Show navigation dots
                    autoplay: true,        // Enable autoplay

                });
            } else {
                console.error("Owl Carousel library is not loaded.");
            }
        }
    };

    document.addEventListener("DOMContentLoaded", function() {
        franchiseProcessCards.init();
        testimonialSlider.init();
    });

})();
