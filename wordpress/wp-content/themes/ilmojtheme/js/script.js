jQuery( document ).ready(function($) {
    "use strict";

    // Menu functionality section
    var menuStateDetector = false;

    function openMenu() {
        if ( ! menuStateDetector ) {
            $( ".binder" ).addClass( "open-menu" );
        }
        menuStateDetector = true;
    }

    function closeMenu() {
        if ( menuStateDetector ) {
            $( ".binder" ).removeClass( "open-menu" );
        }
        menuStateDetector = false;
    }

    $( document ).on( "mouseenter", ".menu-buffer", function() {
        openMenu();
    }).on( "mouseenter", ".binder", function() {
        closeMenu();
    });
});
