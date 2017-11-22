// $(function () {
//     $.scrollUp({
//         scrollName: 'scrollUp',      // Element ID
//         scrollDistance: 300,         // Distance from top/bottom before showing element (px)
//         scrollFrom: 'top',           // 'top' or 'bottom'
//         scrollSpeed: 300,            // Speed back to top (ms)
//         easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
//         animation: 'fade',           // Fade, slide, none
//         animationSpeed: 200,         // Animation speed (ms)
//         scrollTrigger: true,        // Set a custom triggering element. Can be an HTML string or jQuery object
//         scrollTarget: true,         // Set a custom target element for scrolling to. Can be element or number
//         scrollText: 'Scroll to top', // Text for element, can contain HTML
//         scrollTitle: false,          // Set a custom <a> title if required.
//         scrollImg: true,            // Set true to use image
//         activeOverlay: true,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
//         zIndex: 2147483647           // Z-Index for the overlay
//     });
// });
// /*!
//     jQuery scrollTopTop v1.0 - 2013-03-15
//     (c) 2013 Yang Zhao - geniuscarrier.com
//     license: http://www.opensource.org/licenses/mit-license.php
// */
// (function(a){a.fn.scrollToTop=function(c){var d={speed:800};c&&a.extend(d,{speed:c});return this.each(function(){var b=a(this);a(window).scroll(function(){100<a(this).scrollTop()?b.fadeIn():b.fadeOut()});b.click(function(b){b.preventDefault();a("body, html").animate({scrollTop:0},d.speed)})})}})(jQuery);