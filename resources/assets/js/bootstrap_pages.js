$(document)
.ready(function() {

    // create sidebar and attach to menu open
    $('.ui.sidebar').sidebar('attach events', '.toc.item');

    // dropdown menu
    $('.ui.dropdown').dropdown();
});