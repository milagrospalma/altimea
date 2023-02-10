/* global ga, jsVars, imgSf, imgUx, imgIa, imgDm, WOW */

// ==== MAIN ==== //

function validateEmail( email ) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test( email );
}

function validateFormContact( form, isLanding ) {
    var result = true;
    var name = form.find( 'input[name=name]' );
    var business = form.find( 'input[name=business]' );
    var email = form.find( 'input[name=email]' );
    var message = form.find( 'textarea[name=message]' );

    if ( $.trim( name.val() ) === '' ) {
        result = false;
        name.addClass( 'error' );
    } else {
        name.removeClass( 'error' );
    }

    if ( ! isLanding ) {
        if ( $.trim( business.val() ) === '' ) {
            result = false;
            business.addClass( 'error' );
        } else {
            business.removeClass( 'error' );
        }
    }

    if ( $.trim( email.val() ) === '' || ! validateEmail( email.val() ) ) {
        result = false;
        email.addClass( 'error' );
    } else {
        email.removeClass( 'error' );
    }

    if ( ! isLanding ) {
        if ( $.trim( message.val() ) === '' ) {
            result = false;
            message.parent().addClass( 'error' );
        } else {
            message.parent().removeClass( 'error' );
        }
    }

    if ( ! result ) {
        form.find( '.alert-validate' ).css( 'display', 'block' );
    } else {
        form.find( '.alert-validate' ).css( 'display', 'none' );
    }

    return result;
}

function isScrolledIntoView( aaa ) {
    var bbb = $( document ).scrollTop(),
        ccc = bbb + 400,
        ddd = $( aaa ).position().top + 100;

    return ccc > ddd && ddd > bbb;
}

/* Cookie Helpers */
function setCookie( name, value, daysToExpire ) {
	var date, expires;
    if ( daysToExpire ) {
        date = new Date();
        date.setTime( date.getTime() + ( daysToExpire * 24 * 60 * 60 * 1000 ) );
        expires = '; expires=' + date.toGMTString();
    } else {
		expires = '';
	}
    document.cookie = name + '=' + value + expires + '; path=/';
}

function getCookie( name ) {
	var value = document.cookie.match( '(^|;) ?' + name + '=([^;]*)(;|$)' );
	return value ? value[2] : null;
}

// eslint-disable-next-line
function deleteCookie( name ) {
	var value = getCookie( name );
	setCookie( name, value, '-1' );
}

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
( function( $ ) {
    $( function() {

        /**
         * Initialize vars
         */
        // Initialize projects interval
        var projectsInterval;

        // Initialize home sections timer
        var homeTimer;


        /**
         * Initialize plugins
         * @type {int,string,boolean}
         */

        $.preloadImages = function() {
			var i;
            for ( i = 0; i < arguments.length; i++ ) {
                $( '<img />' ).attr( 'src', arguments[i]);
            }
        };

        $.preloadImages( imgSf, imgUx, imgIa, imgDm );

        // Bootstrap initialize plugins
        $( '[data-toggle="popover"]' ).popover();
        $( '[data-toggle="tooltip"]' ).tooltip();

        // fullpage home
        $( '.fullpage-home' ).fullpage({
            verticalCentered: true,
            anchors: [ 'home', 'somos', 'servicios', 'testimonios', 'proyectos', 'clientes' ],
            css3: true,
            scrollOverflow: false,
            slidesNavigation: true,
            slidesNavPosition: 'top',
            normalScrollElements: 'normal-scroll',
            autoScrolling: false,
            fitToSection: false,
            afterRender: function() {

                // autoplay slide
                projectsInterval = setInterval( function() {
                    $.fn.fullpage.moveSlideRight();
                }, 8000 );
            },
            afterLoad: function( anchor ) {

                // >>>Home sections scroll events for Analytics
                if ( $( '.fullpage-home' ).length > 0 ) {
                    clearTimeout( homeTimer );
                    homeTimer = setTimeout( function() {
                        ga( 'send', 'event', 'scroll_seccion_vista', 'scroll', anchor );
                    }, 2000 );
                }

            }
        });

        // fullpage home
        $( '.fullpage-proyectos' ).fullpage({
            verticalCentered: true,
            anchors: [ 'proyecto' ],
            css3: true,
            scrollOverflow: true,
            slidesNavigation: true,
            slidesNavPosition: 'top',
            normalScrollElements: 'normal-scroll',
            afterRender: function() {

                // autoplay slide
                projectsInterval = setInterval( function() {
                    $.fn.fullpage.moveSlideRight();
                }, 8000 );
            }
        });

		$( 'a.to-contact' ).on( 'click', function( event ) {
			event.preventDefault();
			document.querySelector( '#contacto' ).scrollIntoView({
				behavior: 'smooth'
			});
		});

        $( '.fp-slidesNav ul li a' ).on( 'click', function() {
            clearInterval( projectsInterval );
        });

        /**
         * Dom events run
         */

        // active links
		// eslint-disable-next-line
        var currentLocation = location.href;
		// eslint-disable-next-line
        var linkCurrentLocation = $( '.actives a[href=\'' + currentLocation + '\']' );
        if ( linkCurrentLocation.attr( 'href' ) === currentLocation ) {
            linkCurrentLocation.addClass( 'active' );
			// eslint-disable-next-line
            var parent = linkCurrentLocation.parent();
            parent.addClass( 'active' );
        }

        $( window ).scroll( function() {
            if ( $( window ).scrollTop() > 0 ) {
              $( '.altm-header' ).addClass( 'bgcolor-on-scroll' );
            } else {
              $( '.altm-header' ).removeClass( 'bgcolor-on-scroll' );
            };
        });

        /**
         * Open/Close contact form sidebar
         */
        $( '[data-toggle="open-sidenav"]' ).on( 'click', function( event ) {
            event.preventDefault();

            // Analytics
            ga( 'send', 'event', 'Contact', 'Click', 'Click on contact button' );

            /* Act on the event */
            $( '.navbar-toggle-sidenav' ).addClass( 'zoomOut' );
            $( '.sidenav' ).addClass( 'open' );
            $( 'body' ).css( 'overflow', 'hidden' );
            if ( $( window ).width() < 1200 ) {
                setTimeout( function() {
                    $( '.altm-header' ).addClass( 'pos-initial' );
                }, 500 );
			}
        });
        $( '[data-toggle="close-sidenav"]' ).on( 'click', function( event ) {
            event.preventDefault();

            /* Act on the event */
            $( '.navbar-toggle-sidenav' ).removeClass( 'zoomOut' );
            $( '.sidenav' ).removeClass( 'open' );
            $( 'body' ).css( 'overflow', 'visible' );
            if ( $( window ).width() < 1200 ) {
                $( '.altm-header' ).removeClass( 'pos-initial' );
			}
        });

        $( 'body' ).on( 'click', '.js-contact-home', function() {
            $( 'body .sidenav-form' ).addClass( 'open' );
        });

        /**
         * Open/Close mobile menu
         */

        $( '[data-toggle="open-menu"]' ).on( 'click', function( event ) {
            event.preventDefault();

            /* Act on the event */
            $( '.navbar-toggle-menu' ).addClass( 'zoomOut' );
            $( '#menu-links' ).addClass( 'open' );
            $( 'body' ).css( 'overflow', 'hidden' );
        });

        $( '[data-toggle="close-menu"]' ).on( 'click', function( event ) {
            event.preventDefault();

            /* Act on the event */
            $( '.navbar-toggle-menu' ).removeClass( 'zoomOut' );
            $( '#menu-links' ).removeClass( 'open' );
            $( 'body' ).css( 'overflow', 'visible' );
            $( '.menu-options a' ).removeClass( 'active' );
            $( '.menu-arrow' ).removeClass( 'rotated' );
            $( '.container-submenu' ).css( 'display', 'none' );
        });

		/**
		 *  Links menu
		 */
        $( 'body' ).on( 'click', '.js-link-logo, .js-main-menu li a', function( event ) {
			event.preventDefault();
            if ( ! $( this ).hasClass( 'js-submenu' ) ) {
                if ( $( this ).parents( ':eq(2)' ).hasClass( 'js-mob-menu' ) ) {
                    $( '.navbar-toggle-menu' ).removeClass( 'zoomOut' );
                    $( '#menu-links' ).removeClass( 'open' );
                    $( 'body' ).css( 'overflow', 'visible' );
                }
                window.location.href = jsVars.baseUrl + $( this ).attr( 'href' );
            }
		});

        $( 'body' ).on( 'click', '.js-submenu', function( event ) {
			event.preventDefault();
            $( '.container-submenu' ).removeClass( 'active' ).slideUp();
            $( '.js-submenu' ).not( $( this ) ).removeClass( 'active' );
            $( '.js-submenu' ).find( '.menu-arrow' ).removeClass( 'rotated' );
            if ( $( this ).hasClass( 'active' ) ) {
                $( this ).removeClass( 'active' );
                $( this ).find( '.menu-arrow' ).removeClass( 'rotated' );
                $( this ).next().slideUp();
                $( this ).next().removeClass( 'active' );
            } else {
                $( this ).addClass( 'active' );
                $( this ).find( '.menu-arrow' ).addClass( 'rotated' );
                $( this ).next().slideDown( 'slow' );
                $( this ).next().addClass( 'active' );
            }
        });

        $( 'body' ).on( 'click', '.container-submenu.active a', function( event ) {
			event.stopPropagation();
            window.location.href = jsVars.baseUrl + $( this ).attr( 'href' );
        });

        $( document ).on( 'click', function( event ) {
            if ( ! event.target.classList.contains( 'active' ) ) {
                $( '.container-submenu' ).removeClass( 'active' );
                $( '.container-submenu' ).slideUp();
                $( '.js-submenu' ).removeClass( 'active' );
                $( '.js-submenu' ).find( '.menu-arrow' ).removeClass( 'rotated' );
            }
        });

		/**
		 * Services
         * @type {[type]}
         */
        if ( $( window ).width() > 1200 ) {
            $( '.js-item-service' ).on({
                mouseover: function() {
                    $( this ).find( '.serv-icon-default' ).addClass( 'hidden' );
                    $( this ).find( '.serv-icon-hover' ).removeClass( 'hidden' );
                },
                mouseleave: function() {
                    $( this ).find( '.serv-icon-default' ).removeClass( 'hidden' );
                    $( this ).find( '.serv-icon-hover' ).addClass( 'hidden' );
                }
            });
        }

        $( 'body' ).on( 'click', '.js-item-service', function() {
            var link = $( this ).attr( 'href' );
            var isSection = link.includes( '#' );
            var sectionName = link.slice( 1 );

            if ( isSection ) {
                $( this ).attr( 'data-targetclick', sectionName );

                // prevent active class
                $( '.js-item-service' ).removeClass( 'active' );
                $( this ).parents( ':eq(3)' ).addClass( 'hidden' );
                $( this ).parents( ':eq(3)' ).prev().addClass( 'hidden' );
                $( '.section-services' ).addClass( 'bg-to-description' );
                $( this ).addClass( 'active' );

                setTimeout( function() {
                    if ( $( window ).width() < 1200 ) {
                        $( '.description-services-mob' ).removeClass( 'hidden' );

                        // Slick services description - mobile
                        $( '.content-services' ).slick({
                            dots: true,
                            fade: false,
                            arrows: false,
                            infinite: false,
                            autoplay: false,
                            speed: 700,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            adaptiveHeight: false
                        });
                    } else {
                        $( '.description-services' ).removeClass( 'hidden' );
                        $( '.tabs-vertical-icons' ).find( '[href="' + link + '"]' ).parent().addClass( 'active' );
                        $( '.tab-content' ).find( link ).addClass( 'active' );
                    }
                }, 1400 );
            }
        });

        $( 'body' ).on( 'click', '.js-home-serv-back', function() {
            $( '.tabs-vertical-icons' ).children().removeClass( 'active' );
            $( '.tab-content' ).children().removeClass( 'active' );
            $( '.section-services' ).removeClass( 'bg-to-description' );
            $( '.section-services' ).find( '.row' ).removeClass( 'hidden' );

			if ( $( window ).width() < 1200 ) {
				$( '.description-services-mob' ).addClass( 'hidden' );
			} else {
				$( '.description-services' ).addClass( 'hidden' );
                $( '.js-item-service' ).removeClass( 'active' );
				$( '.description-services-mob' ).addClass( 'hidden' );
            }
		});

        $( '.back-home' ).on( 'click', function() {
			window.location.href = jsVars.baseUrl;
		});

		$( '.back-home-services' ).on( 'click', function() {
			window.location.href = jsVars.baseUrl + '/#servicios';
		});

        /**
         * Changes service image
         * @type {String}
         */
        $( '.tabs-vertical-icons > li > [data-toggle="tab"]' ).on( 'click', function( e ) {
			var _title = $( this ).data( 'title' ),
				img = $( this ).data( 'image' );
            e.preventDefault();

            // Analytics
            ga( 'send', 'event', 'Services', 'Click', 'Click en Servicios de ' + _title );

            /* Act on the event */
            $( '.description-services-img img' ).attr( 'src', img );

            // anim img
            $( '.description-services-img' ).addClass( 'hidden' );
            setTimeout( function() {
                $( '.description-services-img' ).removeClass( 'hidden' );
            }, 100 );

        });

        /**
         * Clone contact info block to be used on some mobile devices as separate
         * sections of Full Page.
         */
        $( '.section-content-contact-info' ).clone().appendTo( '.clone-contact-info-address' );


        /**
         * Contact form sidebar
         */
		// eslint-disable-next-line
        var formContact = $( '#form-contact' );
        formContact.submit( function() {
            var validate = validateFormContact( formContact ),
                alertMessage = $( '.alert-msg-send-form' );

            if ( validate ) {
                formContact.find( 'button' ).prop( 'disabled', true );
                $( '.ovelayy' ).css( 'display', 'block' );
                $( '.spinner' ).css( 'display', 'block' );
                alertMessage.removeClass( 'alert-danger' );
                alertMessage.removeClass( 'alert-success' );

                $.post( jsVars.ajaxUrl, formContact.serialize(), function( response ) {

                    // The form was saved successfully
                    if ( response.status === 'success' ) {

                        // Analytics
                        ga( 'send', 'event', 'Contact', 'Send', 'Send form contact' );

                        $( 'input[type=text], input[type=email], input[type=tel], textarea' ).val( '' );
                        $( '.ovelayy' ).css( 'display', 'none' );
                        $( '.spinner' ).css( 'display', 'none' );

                        alertMessage.html( response.msg );
                        alertMessage.addClass( 'alert-success' );
                        alertMessage.css( 'display', 'block' );
                        formContact.find( 'button' ).prop( 'disabled', false );

                        setTimeout( function() {
                            alertMessage.css( 'display', 'none' );
                            $( '.close' ).click();
                        }, 3000 );
                    } else {
                        alertMessage.html( response.msg );
                        alertMessage.addClass( 'alert-danger' );
                        alertMessage.css( 'display', 'block' );
                        formContact.find( 'button' ).prop( 'disabled', false );

                        $( '.ovelayy' ).css( 'display', 'none' );
                        $( '.spinner' ).css( 'display', 'none' );
                    }
                }, 'json' );
            }
            return false;
        });

        /**
         * Contact form landing
         */
        // eslint-disable-next-line
        var formContactLanding = $( '#form-contact-service' );
        formContactLanding.submit( function() {
            var validate = validateFormContact( formContactLanding, true ),
                alertMessage = $( '.alert-msg-send-form' );

            if ( validate ) {
                formContactLanding.find( 'button' ).prop( 'disabled', true );
                $( '.ovelayy' ).css( 'display', 'block' );
                $( '.spinner' ).css( 'display', 'block' );
                alertMessage.removeClass( 'alert-danger' );
                alertMessage.removeClass( 'alert-success' );

                $.post( jsVars.ajaxUrl, formContactLanding.serialize(), function( response ) {

                    // The form was saved successfully
                    if ( response.status === 'success' ) {

                        // Analytics
                        ga( 'send', 'event', 'Contact_footer', 'Send', 'Send form contact' );

                        $( 'input[type=text], input[type=email], input[type=tel], textarea' ).val( '' );
                        $( '.ovelayy' ).css( 'display', 'none' );
                        $( '.spinner' ).css( 'display', 'none' );

                        alertMessage.html( response.msg );
                        alertMessage.addClass( 'alert-success' );
                        alertMessage.css( 'display', 'block' );
                        formContactLanding.find( 'button' ).prop( 'disabled', false );

                        setTimeout( function() {
                            alertMessage.css( 'display', 'none' );
                        }, 3000 );
                    } else {
                        alertMessage.html( response.msg );
                        alertMessage.addClass( 'alert-danger' );
                        alertMessage.css( 'display', 'block' );
                        formContactLanding.find( 'button' ).prop( 'disabled', false );

                        $( '.ovelayy' ).css( 'display', 'none' );
                        $( '.spinner' ).css( 'display', 'none' );
                    }
                }, 'json' );
            }
            return false;
        });


        // orientation
		// eslint-disable-next-line
        var mql = window.matchMedia( '(orientation: portrait)' );

        function readDeviceOrientation() {
            if ( Math.abs( window.orientation ) === 90 ) {

                // Landscape
                $( 'body.home' ).addClass( 'orientation-active' );
            } else {

                // Portrait
                $( 'body.home' ).removeClass( 'orientation-active' );
            }
        }

		// eslint-disable-next-line
        function orientationChange() {
            if ( $( window ).width() < 767 ) {
                window.onorientationchange = readDeviceOrientation;

                // init load detect
                if ( mql.matches ) {

                    // Portrait orientation
                    $( 'body.home' ).removeClass( 'orientation-active' );
                } else {

                    // Landscape orientation
                    $( 'body.home' ).addClass( 'orientation-active' );
                }
            } else {
                $( 'body.home' ).removeClass( 'orientation-active' );
            }
        }

        orientationChange();

        new WOW().init();

        //Somos Belcorp Section --//

        //Modal
        $( '.close-modal' ).click( function( e ) {
			var modal = $( '.modal-custom' ),
				modalBlockQuote = $( '.modal-custom blockquote' );
            e.preventDefault();

            modalBlockQuote.removeClass( 'fadeInUp' );
            setTimeout( function() {
                modalBlockQuote.addClass( 'fadeOutDown' );
            }, 0 );

            setTimeout( function() {
                modalBlockQuote.addClass( 'disable' );
                modal.fadeOut( '' );
                $( 'body' ).css( 'overflow', 'visible' );
            }, 900 );
        });


        $( '.open-modal' ).click( function( e ) {
			var dataModal = $( this ).attr( 'data-idmodal' ),
				modal = $( '#' + dataModal ),
				blockQuote = $( 'blockquote' );
            e.preventDefault();

            $( 'body' ).css( 'overflow', 'hidden' );
            modal.fadeIn( '' ).removeClass( 'disable' );
            modal + blockQuote.addClass( 'disable' ).removeClass( 'fadeOutDown' );
            setTimeout( function() {
                modal + blockQuote.removeClass( 'disable' );
            }, 499 );
            setTimeout( function() {
                modal + blockQuote.addClass( 'fadeInUp' );
            }, 500 );
        });


        //Video Modal
        $( '.close-video' ).click( function() {
            var _videoView = $( '#video_view' );

            _videoView.attr( 'src', _videoView.attr( 'src' ) );
        });


        //Slider
        $( '.slider' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            adaptiveHeight: true,
            fade: false
        });

        $( '.responsive' ).slick({
            dots: true,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [ {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


        $( '.slider-view' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            arrows: false,
            responsive: [ {
                breakpoint: 1024,
                settings: {
                    asNavFor: '.slider-select'
                }
            },
                {
                    breakpoint: 980,
                    settings: {
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });


        $( '.slider-select' ).slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            asNavFor: '.slider-view',
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            nextArrow: '.slick-prev',
            prevArrow: '.slick-next'
        });

        //Config Scroll Progresive - template-somos-belcorp
        $.fn.progressScroll = function( options ) {
            var settings = $.extend({}, options );

            // namespace
            var progress = {};
            progress.targetScroll = 0;
            progress.headHeight = $( '.inicio' ).outerHeight();
            progress.screenh = screen.height;
            progress.divHeight = $( this ).outerHeight();

            $( window ).scroll( function() {
                var scrollAmount = $( this ).scrollTop() - progress.headHeight + 120;
                var scrollPercent = ( ( scrollAmount ) / ( progress.divHeight - progress.screenh ) ) * 100;

                //calculate scroll amount
                $( '.view-state .detail .scroll-bar' ).css( 'width', scrollPercent + '%' );
                if ( scrollAmount >= progress.targetScroll ) {
                    $( '.scrollWrapper' ).removeClass( 'fadeOutUp disable' );
                    setTimeout( function() {
                        $( '.scrollWrapper' ).addClass( 'fadeInDown' );
                    }, 500 );
                } else {
                    $( '.scrollWrapper' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
                    setTimeout( function() {
                        $( '.scrollWrapper' ).addClass( 'disable' );
                    }, 800 );
                }

            });

            //end window scroll

            return $( '.scroll-bar' ).css( settings );
        };


        //Config View - Scroll process
        $( function() {
            $( '.sm-belcorp' ).progressScroll({
                backgroundColor: '#3498DB',
                height: '5px'
            });
        });


        //SmothScroll
        $( 'a.goto' ).click( function() {
			var target;
            if ( location.pathname.replace( /^\//, '' ) === this.pathname.replace( /^\//, '' ) && location.hostname === this.hostname ) {
                target = $( this.hash );
                target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );

                if ( target.length ) {
                    $( 'html, body' ).animate({
                        scrollTop: target.offset().top
                    }, 1000 );

                    return false;
                }
            }
        });

        // scroll marcaciones
		// eslint-disable-next-line
        var timeVar = '',
            sec = null,
            currentSectionVar = 'ux-home',
            $section2 = $( '[data-section-id="sec2"]' ),
            $section3 = $( '[data-section-id="sec3"]' ),
            $section4 = $( '[data-section-id="sec4"]' ),
            $section5 = $( '[data-section-id="sec5"]' ),
            $section6 = $( '[data-section-id="sec6"]' ),
            $section7 = $( '[data-section-id="sec7"]' ),
            $section8 = $( '[data-section-id="sec8"]' );
		// eslint-disable-next-line
        var firstSection = $( 'section:first' ).attr( 'id' );

        function sectionVistaGA( label ) {
            clearTimeout( timeVar );
            timeVar = setTimeout( function() {
                if ( typeof label !== 'undefined' ) {
                    ga( 'send', 'event', 'scroll_seccion_vista', 'scroll', label );
                }

            }, 500 );
        }

        function currentSection( sectionId, sectionSelect ) {
            if ( currentSectionVar !== sectionId ) {
                currentSectionVar = sectionId;
                sectionVistaGA( sectionSelect.data( 'ga-label' ) );
            }
        }


        $( window ).scroll( function() {
            if ( $section2.is( ':in-viewport(100)' ) ) {
                sec = $section2.data( 'section-id' );
                if ( sec === 'sec2' ) {
                    currentSection( 'sec2', $section2 );
                }
            } else if ( $section3.is( ':in-viewport(100)' ) ) {
                sec = $section3.data( 'section-id' );
                if ( sec === 'sec3' ) {
                    currentSection( 'sec3', $section3 );
                }
            } else if ( $section4.is( ':in-viewport(100)' ) ) {
                sec = $section4.data( 'section-id' );
                if ( sec === 'sec4' ) {
                    currentSection( 'sec4', $section4 );
                }
            } else if ( $section5.is( ':in-viewport(100)' ) ) {
                sec = $section5.data( 'section-id' );
                if ( sec === 'sec5' ) {
                    currentSection( 'sec5', $section5 );
                }
            } else if ( $section6.is( ':in-viewport(100)' ) ) {
                sec = $section6.data( 'section-id' );
                if ( sec === 'sec6' ) {
                    currentSection( 'sec6', $section6 );
                }
            } else if ( $section7.is( ':in-viewport(100)' ) ) {
                sec = $section7.data( 'section-id' );
                if ( sec === 'sec7' ) {
                    currentSection( 'sec7', $section7 );
                }
            } else {

                // footer
                currentSection( 'sec8', $section8 );
            }
        });

        $( '.btn-analitics' ).click( function() {
            var category = $( this ).attr( 'data-section' );
            var action = $( this ).attr( 'data-action' );
            var label = $( this ).attr( 'data-label' );
            ga( 'send', 'event', category, action, label );
        });


        /*
         *
         * Page software-factory
         *
         */
		// eslint-disable-next-line
        var verify = false, section2 = false, section3 = false, section4 = false, section5 = false, section6 = false;

        $( window ).scroll( function() {
			var b = this;

            /**************************************************************************************************/
            //Marcaciones de Secciones SF - BI
            clearTimeout( $.data( b, 'scrollTimer' ) ), $.data( this, 'scrollTimer', setTimeout( function() {
                var scrollFlag = ! 0;
                $( 'section.sectionaltimea:not(.highlight)' ).each( function() {
					var cid;
                    if ( isScrolledIntoView( this ) ) {
                        if ( $( '.sectionaltimea' ).removeClass( 'highlight' ), $( this ).addClass( 'highlight' ), scrollFlag ) {

                            cid = $( this ).attr( 'id' );
                            if ( firstSection === cid ) {
                                sectionVistaGA( 'seccion1' );
                            } else {
                                if ( cid !== 'sec5' ) {
                                    sectionVistaGA( cid );
                                }
                            }
                            scrollFlag = ! 1;

                        }
                        clearTimeout( $.data( b, 'scrollTimer' ) );
                    }
                });
            }, 50 ) );

            /******************************************************************************************************/
        });

        $( '[data-toggle=tool-info]' ).on( 'click', function( event ) {
            event.preventDefault();

            /* Act on the event */
			// eslint-disable-next-line
            var img = $( this ).data( 'img' ),
                title = $( this ).data( 'title' ),
                info = $( this ).data( 'info' ),
                imgWidth = $( this ).find( 'img' ).width();

			// eslint-disable-next-line
            var transfer = $( '[data-transfer]' );

            transfer.addClass( 'active' );

            transfer.find( 'img' ).attr({
                'src': img,
                'width': imgWidth
            });
            transfer.find( '.grid-tool-info-title' ).text( title );
            transfer.find( '.grid-tool-info-text' ).text( info );
        });

        $( '[data-transfer] .close' ).on( 'click', function( event ) {
            event.preventDefault();

            /* Act on the event */
            $( this ).parent().removeClass( 'active' );
        });

        // Slick videos - template-business-inteligence
        $( '.bi-slick-videos' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            fade: false,
            infinite: true,
            centerMode: true,
            centerPadding: '0px'
        });

        // Slick testimonies
        if ( $( '.testimony-list' ).children().length > 0 ) {
            $( '.testimony-list' ).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 1000,
                responsive: [
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }

        // Slick customers
        if ( $( '.customer-list' ).children().length > 0 ) {
            $( '.customer-list' ).slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 1000,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }

    });
}( jQuery ) );
