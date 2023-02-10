
/*globals FB,jsVars,dataLayer*/
// ==== Social Network Plugins ==== //
;( function( $ ) {
	$( function() {
        var Facebook;
        var Whatsapp;

        Facebook = ( function() {
            var run = function() {
                window.fbAsyncInit = function() {
                    FB.init({
                        appId: 118944851465436,
                        xfbml: true,
                        version: 'v2.3'
                    });
                };

				( function( d, s, id ) {
					var js,
						fjs = d.getElementsByTagName( s )[0];
					if ( d.getElementById( id ) ) {
						return;
					}
					js     = d.createElement( s );
					js.id  = id;
					js.src = '//connect.facebook.net/en_US/sdk.js';
					fjs.parentNode.insertBefore( js, fjs );
				}( document, 'script', 'facebook-jssdk' ) );

                function postToFeed( url, msg, target ) {
                    FB.ui({
                            method: 'share',
                            href: url,
                            quote: msg
                        },
                        function( response ) {
                            /*jshint camelcase: false */
                            if ( response && ! response.error_code ) {
                                dataLayer.push({
                                    'event': 'socialEvent',
                                    'network': 'Facebook',
                                    'action': 'share',
                                    'target': target
                                });
                            }
                        }
                    );
                }

                function postToFeedV2( url, msg, target ) {
                    FB.ui({
                            method: 'share',
                            href: url,
                            quote: msg
                        },
                        function( response ) {
                            /*jshint camelcase: false */
                            if ( response && ! response.error_code ) {
                                dataLayer.push({
                                    'event': 'socialEvent',
                                    'socialNetwork': 'Facebook',
                                    'socialAction': 'share',
                                    'socialUrl': target
                                });
                            }
                        }
                    );
                }

                $( document ).on( 'click', '.fa fa-facebook', function() {
                    var _this = $( this );

                    var _url    = _this.data( 'url' );
                    var _msg    = _this.data( 'message' );
                    var _target = _this.data( 'targets' );

                    if ( _this.hasClass( 'post-to-feed-v2' ) === true ) {
                        postToFeedV2( _url, _msg, _target );
                    } else {
                        postToFeed( _url, _msg, _target );
                    }

                });
            };
            return {
                init: function() {
                    run();
                }
            };
        }() );

		Whatsapp = ( function() {
            var run = function() {
                function postToWhatsapp( url, label, category, action ) {
                    dataLayer.push({
                        'event': 'virtualEvent',
                        'category': category,
                        'action': action,
                        'label': label
                    });

                    window.location = url;
                }

                $( document ).on( 'click', '.whatsapp-share-btn', function() {
                    var _this = $( this );

                    var _url    = _this.data( 'whatsapp-message' );
                    var _label  = _this.data( 'label' );
					var _category  = _this.data( 'category' ) ? _this.data( 'category' ) : '';
					var _action  = _this.data( 'action' ) ? _this.data( 'action' ) : 'Enviar por Whatsapp';

                    postToWhatsapp( _url, _label, _category, _action );
                });
            };
            return {
                init: function() {
                    run();
                }
            };
        }() );

        /**
         * Initialize only if data-active-socials="true" is present
         *
         * This will help us improve our site performance
         */
        if ( $( 'body' ).find( $( '[data-activate-socials="true"]' ) ).length > 0 ) {
            Facebook.init();
            Whatsapp.init();
        }
	});
}( jQuery ) );