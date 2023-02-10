/* global ga */

( function( $ ) {
    $( function() {

        //Click Events Mark
        $( '.experimentos-prev' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion5', 'Click', 'Click en Carrete derecha' );
        });
        $( '.experimentos-next' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion5', 'Click', 'Click en Carrete izquierda' );
        });
        $( '.open-video.cont-image.video' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion5', 'Click', 'Click en video youtube' );
        });
        $( '.view-tab-home' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion7', 'Click', 'Click en Seccion home' );
        });
        $( '.view-tab-pedidos' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion7', 'Click', 'Click en Seccion pedidos' );
        });
        $( '.view-tab-productos' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion7', 'Click', 'Click en Seccion productos' );
        });
        $( '.view-tab-responsive' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion7', 'Click', 'Click en Seccion responsive' );
        });
        $( '.send-button' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'seccion8', 'Click', 'Click on Contact us' );
        });
        $( '.contact-area a' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'Contact', 'Click', 'Contact en header' );
        });
        $( '.service-contact.active .btn-contacto' ).click( function( event ) {
            event.preventDefault();
            ga( 'send', 'event', 'Contact', 'Click', 'Contact en footer' );
        });
    });
}( jQuery ) );
