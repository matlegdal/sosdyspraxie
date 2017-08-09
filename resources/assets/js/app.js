$(document)
.ready(function() {

    // fix menu when passed
    $('.masthead')
    .visibility({
        once: false,
        onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
        }
    });

    // create sidebar and attach to menu open
    $('.ui.sidebar').sidebar('attach events', '.toc.item');

    // initialise the slider 
    $('.slider-hidden').removeClass('slider-hidden');
    $('.slider').slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000
    });
    
    // dropdown menu
    $('.ui.dropdown').dropdown();
    
});