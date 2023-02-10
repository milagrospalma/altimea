<?php

/* Template Name: Servicio - UX */

$nav_Dark = true;
get_header();

?>

<main class="page-ux">
    <section id="software-factory" class="alt-softwf section-sf-spacer section-sf-header sectionaltimea" section-id="sect-soft">
        <div class="container">
			<div class="alt-softwf__flex">
				<div class="alt-softwf__flex__col">
					<div>
						<div class="back-home-services">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13 9"><g><g><path fill="#002c6b" d="M-.003 5.4h9.55L5.934 8.997h2.554L13.003 4.5 8.488.002H5.934L9.547 3.6h-9.55z"/></g></g></svg>
                            <?php echo get_post_meta(get_the_ID(),'back_home_link', true); ?>
						</div>
						<div class="alt-category-general">
							<span><?php echo get_post_meta(get_the_ID(),'ux_solutions_title', true); ?></span>
						</div>
					</div>
					<h2 class="alt-title-general title">
                        <?php echo get_post_meta(get_the_ID(),'ux_solutions_sub_title', true); ?>
					</h2>
					<div class="atl-Mob">
						<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/ux-solutions.svg" alt="UX Solutions" class="img-responsive">
					</div>
					<p class="alt-excert-general excert">
                        <?php echo get_post_meta(get_the_ID(),'ux_solutions_text1', true); ?>
					</p>
				</div>
				<div class="alt-softwf__flex__col">
					<div class="atl-Deskt">
						<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/ux-solutions.svg" alt="UX Solutions" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

    <section id="seccion3" class="section-analytic section-sf-header sectionaltimea" data-ga-label="seccion3">
        <div class="container">
            <div class="analytic-block">
			<div id="card-1" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/results.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
					<h2><?php echo get_post_meta(get_the_ID(),'card_1_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
					<p><?php echo get_post_meta(get_the_ID(),'card_1_text', true); ?></p>
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary upper to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<div id="card-2" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/interaction.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
					<h2><?php echo get_post_meta(get_the_ID(),'card_2_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
					<p><?php echo get_post_meta(get_the_ID(),'card_2_text', true); ?></p>
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<div id="card-3" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/behavior.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
                    <h2><?php echo get_post_meta(get_the_ID(),'card_3_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
                    <p><?php echo get_post_meta(get_the_ID(),'card_3_text', true); ?></p>
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
    	</div>
        </div>

        <div class="analytic-carousel">
			<div id="card-1" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/results.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
                    <h2><?php echo get_post_meta(get_the_ID(),'card_1_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
					<p><?php echo get_post_meta(get_the_ID(),'card_1_text', true); ?></p>
				</div>
				<div class="carousel-card-nav">
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<div id="card-2" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/interaction.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
                    <h2><?php echo get_post_meta(get_the_ID(),'card_2_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
                    <p><?php echo get_post_meta(get_the_ID(),'card_2_text', true); ?></p>
				</div>
				<div class="carousel-card-nav">
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

            <div id="card-3" class="carousel-card">
				<div class="carousel-card-icon">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/analytics/behavior.png" alt="Analytic Result" class="img-responsive">
				</div>
				<div class="carousel-card-title">
                    <h2><?php echo get_post_meta(get_the_ID(),'card_3_title', true); ?></h2>
				</div>
				<div class="carousel-card-description">
                    <p><?php echo get_post_meta(get_the_ID(),'card_3_text', true); ?></p>
				</div>
				<div class="carousel-card-nav">
				</div>
				<div class="carousel-card-btn">
					<a class="btn btn-primary to-contact alt-btn alt-btn--form">
                        <?php echo get_post_meta(get_the_ID(),'contactar_button', true); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16">
							<g>
								<g>
								<path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
		</div>
		<div class="alt-plus-bottom">
			<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn-green.svg" alt="boton plus" class="img-responsive">
		</div>
	</section>

    <section id="seccion4" class="alt-softwf-section4 section-sf-spacer section-tools sectionaltimea" data-ga-label="seccion4">
        <div class="container">
			<h2 class="alt-title-general title-line"><p><?php echo get_post_meta(get_the_ID(),'herramientas_title', true); ?></p></h2>
            <div class="grid-tools">
                <!-- Locatylics -->
                <div class="grid-tool-item"
                 	data-toggle="tool-info"
					data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/localytics.png"
					data-title="Locatylics"
					data-info="<?php echo get_post_meta(get_the_ID(),'localytics_tool_description', true); ?>">
					<div class="grid-tool-item-img">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/localytics.png"
							 alt="Locatylics" title="Locatylics" class="img-responsive" width="150">
					</div>
				</div>
                <!-- User testing -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/user-testing.png"
                     data-title="User testing"
                     data-info="<?php echo get_post_meta(get_the_ID(),'user_testing_tool_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/user-testing.png"
                             alt="User-Testing" title="User-Testing" class="img-responsive" width="150">
                    </div>
                </div>
                <!-- Clic -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/clic.png"
                     data-title="Clic"
                     data-info="<?php echo get_post_meta(get_the_ID(),'clic_tools_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/clic.png"
                             alt="Clic Tale" title="Clic Tale" class="img-responsive" width="160">
                    </div>
                </div>
                <!-- Heatmap -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/heatmap-tracker.png"
                     data-title="Heatmap tracker"
                     data-info="<?php echo get_post_meta(get_the_ID(),'heatmap_traker_tool_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/heatmap-tracker.png"
                             alt="Heatmap-tracker" title="Heatmap-tracker" class="img-responsive" width="150">
                    </div>
                </div>

                <!-- Google -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/google-analytics.png"
                     data-title="Google analytics"
                     data-info="<?php echo get_post_meta(get_the_ID(),'google_analityc_tool_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/google-analytics.png"
                             alt="Google" title="Google" class="img-responsive" width="130">
                    </div>
                </div>
                <!-- Woorank -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/woorank.png"
                     data-title="Woorank"
                     data-info="<?php echo get_post_meta(get_the_ID(),'woorank_tool_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/woorank.png"
                             alt="Woorank" title="Woorank" class="img-responsive" width="150">
                    </div>
                </div>
                <!-- Heatmap -->
				<div class="grid-tool-item"
					data-toggle="tool-info"
					data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/heatmap.png"
					data-title="Heatmap"
					data-info="<?php echo get_post_meta(get_the_ID(),'heatmap_tool_description', true); ?>">
					<div class="grid-tool-item-img">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/heatmap.png"
							 alt="Heatmap" title="Heatmap" class="img-responsive" width="150">
					</div>
				</div>
				<!-- Semrush -->
				<div class="grid-tool-item"
					data-toggle="tool-info"
					data-img="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/semrush.png"
					data-title="Semrush"
					data-info="<?php echo get_post_meta(get_the_ID(),'semrush_tool_description', true); ?>">
					<div class="grid-tool-item-img">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/semrush.png"
							 alt="Semrush" title="Semrush" class="img-responsive" width="150">
					</div>
				</div>

                <!-- Tool info default = Locatylics -->
                <div class="grid-tool-info" data-transfer>
                    <span class="close">&lsaquo;</span>
                    <div data-center>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/ux-solutions/tools/localytics.png"
                             alt="Locatylics" title="Locatylics" class="img-responsive">
                        <h4 class="grid-tool-info-title">
                            Locatylics
                        </h4>
                        <p class="grid-tool-info-text"><?php echo get_post_meta(get_the_ID(),'localytics_tool_description', true); ?>"</p>
                    </div>
                </div>
            </div>
            <div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

    <section id="seccion-track" class="section-track section-sf-spacer sectionaltimea">
    	<div class="image">
    		<div class="image-layer"></div>
    		<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/tracker.png" alt="eye_tracker">
    	</div>
    	<div class="track-left">
    		<div class="track-cont">
    			<div class="logo-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/ux-solutions/logo-blue.png" alt="Analytic Result" width="150" class="img-responsive">
				</div>
				<h2><?php echo get_post_meta(get_the_ID(),'eye_tracking_title', true); ?></h2>
				<p><?php echo get_post_meta(get_the_ID(),'eye_tracking_text', true); ?></p>
    		</div>
    	</div>
	</section>


    <div class="end-page"></div>
    <!-- section contact -->
    <section id="contacto" class="section-contact alt-softwf-section5 service-contact sectionaltimea" data-section-id="sec5" data-ga-label="Contacto">
        <?php include_once 'template-footer_services.php'; ?>
	</section>
</main>

<?php
get_footer();
?>
