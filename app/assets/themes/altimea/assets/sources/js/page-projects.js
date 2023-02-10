( function( $ ) {
	$( function() {
		var projectTemplate = $( '.js-project-description-full' );
		var genericOptions = {
			arrows: false,
			dots: true,
			centerMode: true,
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerPadding: '0px',
			variableWidth: false,
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						dots: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false,
						arrows: false,
						centerMode: true,
						variableWidth: false
					}
				}
			]
		};

		// Slick proyects
        $( '.js-projects-slick' ).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            fade: false
        });

		$( '.js-view-project' ).on( 'click', function() {
			var projectId = $( this ).data( 'project' );
			var projectIdHtml = $( '#' + projectId ).html();
			projectTemplate.find( '.js-pp-content' ).html( projectIdHtml );
			projectTemplate.addClass( 'open' );
		});
		$( '.js-close-view-project' ).on( 'click', function() {
			projectTemplate.removeClass( 'open' );
		});

		//new slide process
		$( '.alt-softwf-process-slide' ).slick({
			arrows: true,
			dots: true,
			centerMode: true,
			infinite: false,
			centerPadding: '38px',
			slidesToShow: 1,
			variableWidth: true,
			nextArrow: $( '.slick-left' ),
			prevArrow: $( '.slick-right' ),
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						dots: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false,
						arrows: false,
						centerMode: true,
						centerPadding: '15px',
						variableWidth: false
					}
				}
			]
		});

		$( '.analytic-carousel' ).slick({
			arrows: false,
			dots: true,
			centerMode: true,
			infinite: false,
			centerPadding: '15px',
			slidesToShow: 1,
			variableWidth: false,
			appendDots: $( '.carousel-card-nav' )
		});

		$( '.analytic-carousel' ).on( 'afterChange', function( event, slick, currentSlide ) {
			var index = currentSlide + 1;
			$( '.slick-dots li:nth-child(' + index + ')' ).addClass( 'slick-active' );
		});

		$( '.js-alt-agile-tables-slides__advantages' ).slick({
			arrows: false,
			dots: true,
			centerMode: false,
			infinite: false,
			slidesToShow: 2,
			variableWidth: false,
			nextArrow: $( '.slick-left' ),
			prevArrow: $( '.slick-right' ),
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						dots: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: false,
						arrows: false,
						centerMode: false,
						variableWidth: false
					}
				}
			]

		});

		$( '.js-alt-agile-tables-slides__methods' ).slick( genericOptions );

		$( '.js-alt-agile-tables-slides__case__macbook' ).slick( genericOptions );

		$( '.js-alt-agile-tables-slides__case__iphone' ).slick( genericOptions );

	});

}( jQuery ) );
