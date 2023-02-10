<?php

/* Template Name: Home */

$bannerBgImg = '';
$bannerTitle = [];
$bannerDescription = '';
$bannerBtnText = '';
$serviceTitle = '';
$serviceDescription = '';
$serviceList = [];
$testimonyTitle = '';
$testimonyList = [];
$customerTitle = '';
$customerDescription = '';
$customerList = [];
if (function_exists('get_field')) {
	$bannerBgImg = get_field('alt_bg_desk');
	$bannerTitle = get_field('alt_title');
	$bannerDescription = get_field('alt_description');
    $bannerBtnText = get_field('btn_text');
    $serviceTitle = get_field('alt_services_title');
    $serviceDescription = get_field('alt_services_description');
    $serviceList = get_field('alt_services_list');
    $testimonyTitle = get_field('alt_testimony_title');
    $testimonyList = get_field('alt_testimony_list');
    $customerTitle = get_field('alt_customer_title');
    $customerDescription = get_field('alt_customer_description');
    $customerList = get_field('alt_customer_list');
}

get_header();

$currentPageID = $post->ID;
?>

<div class="fullpage-home">

	<!-- home -->
    <section class="section section-home" id="section-bganimate-">
        <div class="group-bg-img-overlay">
            <div class="bg-img" style="background-image: url('<?php echo esc_url($bannerBgImg); ?>');"></div>
            <div class="bg-overlay"></div>
        </div>

		<div class="container home-container-position">
            <div class="home-content">
                <div class="text-services">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 306.2 86.9" style="enable-background:new 0 0 306.2 86.9;" xml:space="preserve">
                        <style type="text/css">
                            .st0 { fill: #FFF; }
                            .st1 { fill: #FFF; }
                        </style>
                        <g><g><path class="st0" d="M60.4,40l1.9-4l12.1-25.4L10.8,50v13.7l30.4,10.5l27.3-17.3H52.4L60.4,40z M66.4,19.6L58,37.2l-35.2,9.3 L66.4,19.6z M14.2,61.3v-7l17.4,13L14.2,61.3z M57,60.2L41.2,70.3L16.3,51.7l39.8-10.5l-6.8,14.3l-2.3,4.8h5.3H57z"/>
                            </g>
                            <path class="st1" d="M98.7,27.9l-14.2,30H89l1.7-3.9h15.7l1.9,3.9h4.5L98.7,27.9z M92.2,50.2L98.7,37l6.1,13.2H92.2z"/>
                            <polygon class="st1" points="129.7,28.6 125.5,28.6 125.5,57.9 138.5,57.9 138.5,54.1 129.7,54.1 	"/>
                            <polygon class="st1" points="152.1,32.4 158.1,32.5 158.1,57.9 162.3,57.9 162.3,32.5 168.2,32.4 168.2,28.6 152.2,28.6 	"/>
                            <rect x="182.2" y="28.6" class="st1" width="4.2" height="29.3"/>
                            <polygon class="st1" points="200.7,28.2 200.7,58.1 205.3,58.1 205.3,41 214.8,51.3 224.2,41 224.3,58.1 228.6,58.1 228.6,28.4 214.6,44.6 	"/>
                            <polygon class="st1" points="246.8,44.5 255,44.5 255,40.2 246.8,40.2 246.8,33 255.7,33 255.6,28.6 242.6,28.6 242.6,57.9 255.6,57.9 255.7,53.3 246.8,53.3 	"/>
                            <path class="st1" d="M281.8,27.9l-14.2,30h4.6l1.7-3.9h15.7l1.9,3.9h4.5L281.8,27.9z M275.3,50.2l6.5-13.2l6.1,13.2H275.3z"/></g>
                    </svg>
                    <?php 
                    if( $bannerTitle )
                    {
                        ?>
                        <p class="title">
                            <?php foreach ( $bannerTitle as $row ) { ?>
                                <span style="color:<?php echo $row['title_color']; ?>"><?php echo $row['title_text']; ?></span>
                            <?php } ?>
                        </p>
                        <?php
                    }
                    ?>
                    <p class="subtitle"><?php echo $bannerDescription; ?></p>
                    <div class="button-container">
                        <div class="altm-btn outline-secondary btn-home js-contact-home"><?php echo $bannerBtnText; ?></div>
                    </div>
                </div>
            </div>
		</div>
	</section>

	<!-- somos -->
	<section class="section section-somos">
		<div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-center logo-somos hidden-xs hidden-sm">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/images/somos_v3.png"
                            alt="Somos una agencia tecnodigital" title="Somos una agencia tecnodigital"
                            class="img-responsive" width="300">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="scrolling-item text-weare">
                        <h1 class="title-weare">
                            <span><?php echo get_post_meta($post->ID, 'somos_title', true);?></span>
                            <br>
                            <?php echo get_post_meta($currentPageID, 'somos_sub_title_1', true);?>
                        </h1>
                        <br class="visible-xs">
                        <div class="img-weare text-center visible-xs visible-sm">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/somos_v3.png" alt="Somos una agencia tecnodigital" title="Somos una agencia tecnodigital" class="img-responsive " width="300">
                        </div>
                        <div class="font-300 text-dsc-weare"><?php echo get_post_meta($currentPageID, 'somos_text_1', true);?></div>
                        <div class="hidden-xs hidden-sm">
                            <h4 class="mt-20 bold-weare"><?php echo get_post_meta($currentPageID, 'somos_sub_title_2', true);?></h4>
                            <p class="font-300"><?php echo get_post_meta($currentPageID, 'somos_text_2', true);?></p>
                            <div class="section-link-bottom">
                                <a href="#proyectos" class="link-right">
                                    <?php echo get_post_meta($currentPageID, 'button_to_projects', true);?>
                                    <i class="arrow_new">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9"><g><g><path fill="#002c6b" d="M-.003 5.4h9.55L5.934 8.997h2.554L13.003 4.5 8.488.002H5.934L9.547 3.6h-9.55z"/></g></g></svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
		</div>
	</section>

	<!-- servicios-->
    <?php 
    if( $serviceList )
    {
        ?>
        <section class="section section-services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="alt-home-title"><?php echo $serviceTitle; ?></h2>
                        <div class="alt-home-description"><?php echo $serviceDescription; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="service-list">
                            <?php foreach ( $serviceList as $service ) { ?>
                                <li>
                                    <a class="service-link js-item-service" href="<?php echo $service['servlist_link']; ?>">
                                        <div class="serv-content">
                                            <img class="serv-icon-default" src="<?php echo $service['servlist_icon']['default']; ?>" alt="">
                                            <img class="serv-icon-hover hidden" src="<?php echo $service['servlist_icon']['hover']; ?>" alt="">
                                            <h3><?php echo $service['servlist_name']; ?></h3>
                                            <span></span>
                                            <p><?php echo $service['servlist_description']; ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="description-services hidden hidden-xs hidden-sm">
                        <div class="description-services-content">
                            <div class="description-services-content-middle">
                                <div class="col-xxs col-xs-11 col-sm-7 col-md-7 col-lg-6 col-sm-offset-1 hidden-xs hidden-sm">
                                    <div class="service-description-tabs">
                                        <button class="btn btn-primary alt-btn js-home-serv-back">
                                            Back
                                        </button>
                                        <!-- tabs content -->
                                        <ul class="tab-content animated slideInRight-">
                                            <li class="tab-pane animated fadeInRight" id="tab-ux-solutions">
                                                <div class="service-tabs-icon text-center visible-xxs">
                                                    <i class="icon-analytics"></i>
                                                </div>
                                                <h2 class="service-tabs-title"><?php echo get_post_meta(get_the_ID(),'ux_solutions_tab_title', true); ?></h2>
                                                <p class="font-300 text-justify"><?php echo get_post_meta(get_the_ID(),'ux_solutions_tab_text', true); ?></p>
                                                <div class="tabs-numbers">
                                                    <ul class="tabs-numbers-head row">
                                                        <li class="col-md-4 col-xs-6 active">
                                                            <a href="#uxs-1" data-toggle="tab">
                                                                <strong class="tabs-numbers-title"><?php echo get_post_meta(get_the_ID(),'ux_solutions_tab_number_1', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#uxs-2" data-toggle="tab">
                                                                <strong class="tabs-numbers-title"><?php echo get_post_meta(get_the_ID(),'ux_solutions_tab_number_2', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#uxs-3" data-toggle="tab">
                                                                <strong class="tabs-numbers-title"><?php echo get_post_meta(get_the_ID(),'ux_solutions_tab_number_3', true); ?></strong>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="tab-pane animated fadeInRight" id="tab-software-factory">
                                                <div class="service-tabs-icon text-center visible-xxs">
                                                    <i class="icon-software-factory"></i>
                                                </div>
                                                <h2 class="service-tabs-title"><?php echo get_post_meta(get_the_ID(),'sfactory_tab_title', true); ?></h2>
                                                <p class="font-300 text-justify"><?php echo get_post_meta(get_the_ID(),'sfactory_tab_text', true); ?></p>
                                                <div class="tabs-numbers">
                                                    <ul class="tabs-numbers-head row">
                                                        <li class="col-md-4 col-xs-6 active">
                                                            <a href="#sf-1" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta(get_the_ID(),'sfactory_tab_number_1', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#sf-2" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta(get_the_ID(),'sfactory_tab_number_2', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#sf-3" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta(get_the_ID(),'sfactory_tab_number_3', true); ?></strong>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="tab-pane animated fadeInRight" id="tab-digital-marketing">
                                                <div class="service-tabs-icon text-center visible-xxs">
                                                    <i class="icon-digital-marketing"></i>
                                                </div>
                                                <h2 class="service-tabs-title"><?php echo get_post_meta(get_the_ID(),'content_managmt_tab_title', true); ?></h2>
                                                <p class="font-300 text-justify"><?php echo get_post_meta(get_the_ID(),'content_managmt_tab_text', true); ?></p>
                                                <div class="tabs-numbers">
                                                    <ul class="tabs-numbers-head row">
                                                        <li class="col-md-6 col-xs-6 active">
                                                            <a href="#cm-1" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-70"><?php echo get_post_meta(get_the_ID(),'content_managmt_tab_number_1', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-6 col-xs-6">
                                                            <a href="#cm-2" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-70"><?php echo get_post_meta(get_the_ID(),'content_managmt_tab_number_2', true); ?></strong>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="tab-pane animated fadeInRight" id="tab-analytics">
                                                <div class="service-tabs-icon text-center visible-xxs">
                                                    <i class="icon-ux-solutions"></i>
                                                </div>
                                                <h2 class="service-tabs-title"><?php echo get_post_meta(get_the_ID(),'digital_analytics_tab_title', true); ?></h2>
                                                <p class="font-300 text-justify"><?php echo get_post_meta(get_the_ID(),'digital_analytics_tab_text', true); ?></p>
                                                <div class="tabs-numbers">
                                                    <ul class="tabs-numbers-head row">
                                                        <li class="col-md-4 col-xs-6 active">
                                                            <a href="#analytics-1" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta(get_the_ID(),'digital_analytics_tab_number_1', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#analytics-2" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta(get_the_ID(),'digital_analytics_tab_number_2', true); ?></strong>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-4 col-xs-6">
                                                            <a href="#analytics-3" data-toggle="tab">
                                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta(get_the_ID(),'digital_analytics_tab_number_3', true); ?></strong>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>

                                        <!-- head tbs -->
                                        <ul class="tabs-vertical-icons animated fadeInLeft hiddden-xs hidden-sm">
                                            <li>
                                                <a href="#tab-ux-solutions" data-toggle="tab"
                                                data-image="<?php bloginfo('template_directory'); ?>/images/servicios/ux_solution_2.png">
                                                    <?php echo get_post_meta($currentPageID, 'ux_solutions_tab_menu', true);?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-software-factory" data-toggle="tab"
                                                data-image="<?php bloginfo('template_directory'); ?>/images/servicios/software_factory_2.png">
                                                    <?php echo get_post_meta($currentPageID, 'sfactory_tab_menu', true);?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-digital-marketing" data-toggle="tab"
                                                data-image="<?php bloginfo('template_directory'); ?>/images/servicios/digital_marketing_4.png">
                                                    <?php echo get_post_meta($currentPageID, 'content_managmt_tab_menu', true);?>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#tab-analytics" data-toggle="tab"
                                                data-image="<?php bloginfo('template_directory'); ?>/images/servicios/analytics.png">
                                                    <?php echo get_post_meta($currentPageID, 'digital_analytics_tab_menu', true);?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-services-img animated zoomInRight hidden-xs hidden-sm">
                            <img src="<?php bloginfo('template_directory'); ?>/images/servicios/digital_marketing_4.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
                        </div>
                    </div>
                    <div class="description-services-mob hidden row">
                        <a href="javascript:void(0)" class="back-arrow js-home-serv-back">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13 9"><g><g><path fill="#002c6b" d="M-.003 5.4h9.55L5.934 8.997h2.554L13.003 4.5 8.488.002H5.934L9.547 3.6h-9.55z"/></g></g></svg>
                        </a>
                        <ul class="content-services">
                            <li class="col-xs-12">
                                <h2 class="service-tabs-title"><?php echo get_post_meta($currentPageID, 'ux_solutions_tab_title', true);?></h2>
                                <div class="description-services-img-mb animated zoomInRight">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/servicios/3.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
                                </div>
                                <p class="font-300 mt-30 text-justify"><?php echo get_post_meta($currentPageID, 'ux_solutions_tab_text', true);?></p>
                                <div class="tabs-numbers">
                                    <ul class="tabs-numbers-head row">
                                        <li class="col-md-4 col-xs-6 active">
                                            <a href="#uxs-1" data-toggle="tab">
                                                <strong class="tabs-numbers-title"><?php echo get_post_meta($currentPageID, 'ux_solutions_tab_number_1', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#uxs-2" data-toggle="tab">
                                                <strong class="tabs-numbers-title"><?php echo get_post_meta($currentPageID, 'ux_solutions_tab_number_2', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#uxs-3" data-toggle="tab">
                                                <strong class="tabs-numbers-title"><?php echo get_post_meta($currentPageID, 'ux_solutions_tab_number_3', true);?></strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <h2 class="service-tabs-title"><?php echo get_post_meta($currentPageID, 'sfactory_tab_title', true);?></h2>
                                <div class="description-services-img-mb animated zoomInRight">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/servicios/2.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
                                </div>
                                <p class="font-300 mt-30 text-justify"><?php echo get_post_meta($currentPageID, 'sfactory_tab_text', true);?></p>
                                <div class="tabs-numbers">
                                    <ul class="tabs-numbers-head row">
                                        <li class="col-md-4 col-xs-6 active">
                                            <a href="#sf-1" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-110 text-center"><?php echo get_post_meta($currentPageID, 'sfactory_tab_number_1', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#sf-2" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta($currentPageID, 'sfactory_tab_number_2', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#sf-3" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta($currentPageID, 'sfactory_tab_number_3', true);?></strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <h2 class="service-tabs-title"><?php echo get_post_meta($currentPageID, 'content_managmt_tab_title', true);?></h2>
                                <div class="description-services-img-mb animated zoomInRight">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/servicios/1.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
                                </div>
                                <p class="font-300 mt-30 text-justify"><?php echo get_post_meta($currentPageID, 'content_managmt_tab_text', true);?></p>
                                <div class="tabs-numbers">
                                    <ul class="tabs-numbers-head row">
                                        <li class="col-md-4 col-xs-6 active">
                                            <a href="#cm-1" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta($currentPageID, 'content_managmt_tab_number_1', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#cm-2" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-110"><?php echo get_post_meta($currentPageID, 'content_managmt_tab_number_2', true);?></strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="col-xs-12">
                                <h2 class="service-tabs-title"><?php echo get_post_meta($currentPageID, 'digital_analytics_tab_title', true);?></h2>
                                <div class="description-services-img-mb animated zoomInRight">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/servicios/4.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
                                </div>
                                <p class="font-300 mt-30 text-justify"><?php echo get_post_meta($currentPageID, 'digital_analytics_tab_text', true);?></strong></p>
                                <div class="tabs-numbers">
                                    <ul class="tabs-numbers-head row">
                                        <li class="col-md-4 col-xs-6 active">
                                            <a href="#analytics-1" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta($currentPageID, 'digital_analytics_tab_number_1', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#analytics-2" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta($currentPageID, 'digital_analytics_tab_number_2', true);?></strong>
                                            </a>
                                        </li>
                                        <li class="col-md-4 col-xs-6">
                                            <a href="#analytics-3" data-toggle="tab">
                                                <strong class="tabs-numbers-title mh-90"><?php echo get_post_meta($currentPageID, 'digital_analytics_tab_number_3', true);?></strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

    <!-- testimonios -->
    <?php 
    if( $testimonyList )
    {
        ?>
        <section class="section section-testimonies">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="alt-home-title color-secondary"><?php echo $testimonyTitle; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="testimony-list">
                            <?php foreach ( $testimonyList as $item ) { ?>
                                <li class="card">
                                    <svg class="card--deco__top" width="47" height="34" viewBox="0 0 47 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6612 0C13.6877 0 16.2713 1.17458 18.4119 3.51326C19.4348 4.60395 20.2363 5.91487 20.8373 7.47748C21.4384 9.02961 21.7337 10.6027 21.7337 12.1758C21.7337 15.5003 20.6475 18.8667 18.4647 22.2751C16.2818 25.6835 13.3608 28.578 9.71214 30.9587C6.62239 32.9827 4.18645 34 2.43594 34C1.72941 34 1.14943 33.7903 0.695984 33.3708C0.231995 32.9513 0 32.3849 0 31.6928C0 30.644 0.664348 29.7736 2.00359 29.0709C5.19879 27.4244 7.53983 25.7989 9.01615 24.1943C10.4187 22.6946 11.1252 21.5935 11.1252 20.8908C11.1252 20.2301 10.5979 19.8211 9.54341 19.6848L8.85798 19.5799L8.06709 19.5275C5.77877 19.1814 3.92282 18.1221 2.49921 16.3498C1.07561 14.5774 0.358537 12.438 0.358537 9.92104C0.358537 7.33066 1.23379 5.09685 2.99484 3.20913C5.00897 1.06971 7.56091 0 10.6612 0Z" fill="#00F9C1"/>
                                        <path d="M35.9275 0C38.954 0 41.5376 1.17458 43.6782 3.51326C44.7011 4.60395 45.5026 5.91487 46.1036 7.47748C46.7047 9.02961 47 10.6027 47 12.1758C47 15.5003 45.9138 18.8667 43.731 22.2751C41.5481 25.6835 38.6271 28.578 34.9784 30.9587C31.8782 32.9827 29.4528 34 27.7023 34C26.9957 34 26.4157 33.7903 25.9623 33.3708C25.5089 32.9513 25.2769 32.3954 25.2769 31.6928C25.2769 30.644 25.9412 29.7736 27.2804 29.0709C30.4756 27.4244 32.8167 25.7989 34.293 24.1943C35.6955 22.6946 36.4021 21.5935 36.4021 20.8908C36.4021 20.2301 35.8748 19.8211 34.8203 19.6848L34.1348 19.5799L33.3439 19.5275C31.0556 19.1814 29.1997 18.1221 27.7761 16.3498C26.3525 14.5879 25.6354 12.438 25.6354 9.92104C25.6354 7.33066 26.5106 5.09685 28.2717 3.20913C30.2858 1.06971 32.8272 0 35.9275 0Z" fill="#00F9C1"/>
                                    </svg>
                                    <div>
                                        <div class="card--logo">
                                            <img src="<?php echo $item['alt_testm_customer'] ;?>" alt="">
                                        </div>
                                        <p class="card--text text-justify">“<?php echo $item['alt_testm_testimony'];?>”</p>
                                    </div>
                                    <div>
                                        <p class="card--author"><?php echo $item['alt_testm_author'];?></p>
                                        <p class="card--text"><?php echo $item['alt_testm_role'];?></p>
                                    </div>
                                    <svg class="card--deco__bottom" width="47" height="34" viewBox="0 0 47 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M36.3388 34C33.3123 34 30.7287 32.8254 28.5881 30.4867C27.5652 29.3961 26.7637 28.0851 26.1627 26.5225C25.5616 24.9704 25.2663 23.3973 25.2663 21.8242C25.2663 18.4997 26.3525 15.1333 28.5353 11.7249C30.7182 8.31647 33.6392 5.42196 37.2879 3.04133C40.3776 1.01727 42.8136 8.95092e-07 44.5641 8.95092e-07C45.2706 8.95092e-07 45.8506 0.209746 46.304 0.629241C46.768 1.04873 47 1.61505 47 2.30722C47 3.35595 46.3357 4.2264 44.9964 4.92906C41.8012 6.57557 39.4602 8.20111 37.9838 9.80568C36.5813 11.3054 35.8748 12.4065 35.8748 13.1092C35.8748 13.7699 36.4021 14.1789 37.4566 14.3152L38.142 14.4201L38.9329 14.4725C41.2212 14.8186 43.0772 15.8779 44.5008 17.6502C45.9244 19.4226 46.6415 21.562 46.6415 24.079C46.6415 26.6693 45.7662 28.9031 44.0052 30.7909C41.991 32.9303 39.4391 34 36.3388 34Z" fill="#00F9C1"/>
                                        <path d="M11.0725 34C8.04601 34 5.46243 32.8254 3.32175 30.4867C2.29887 29.3961 1.49743 28.0851 0.896353 26.5225C0.295277 24.9704 1.22578e-05 23.3973 1.22578e-05 21.8242C1.22578e-05 18.4997 1.08617 15.1333 3.26903 11.7249C5.45188 8.31647 8.37291 5.42196 12.0216 3.04133C15.1218 1.01727 17.5472 8.95092e-07 19.2977 8.95092e-07C20.0043 8.95092e-07 20.5843 0.209746 21.0377 0.629241C21.4911 1.04873 21.7231 1.60456 21.7231 2.30722C21.7231 3.35595 21.0588 4.2264 19.7196 4.92906C16.5244 6.57557 14.1833 8.20111 12.707 9.80568C11.3045 11.3054 10.5979 12.4065 10.5979 13.1092C10.5979 13.7699 11.1252 14.1789 12.1797 14.3152L12.8652 14.4201L13.6561 14.4725C15.9444 14.8186 17.8003 15.8779 19.2239 17.6502C20.6475 19.4121 21.3646 21.562 21.3646 24.079C21.3646 26.6693 20.4894 28.9031 18.7283 30.7909C16.7142 32.9303 14.1728 34 11.0725 34Z" fill="#00F9C1"/>
                                    </svg>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

	<!-- proyectos -->
	<section class="section page-projects__section-list section-full-screem-container">
		<div class="pp-projects js-projects-slick">
			<?php
			// query projects
			$args = array(
				'post_type' => 'projects'
			);

			$query_projects = new WP_Query( $args );
			$count          = 0;

			while ( $query_projects->have_posts() ) :
				$query_projects->the_post();

				$count    = $count + 1;
				$query_ID = $query_projects->post->ID;
                $project_skills = [];

				// data project
				$project_background        = get_field( 'project_image_desktop', $query_ID );
				$project_background_mobile = get_field( 'project_image_mobile', $query_ID );
				$project_color_theme       = get_field( 'project_color_theme', $query_ID );
				$project_name              = get_field( 'project_name', $query_ID );
				$project_client            = get_field( 'project_client', $query_ID );
				$project_description       = get_field( 'project_description', $query_ID );
				$project_skills            = get_field( 'project_skills', $query_ID );
				?>


				<div class="item" id="project-<?php echo $query_ID; ?>"
					 style="background-image: url(<?php echo $project_background; ?>);">
					<style type="text/css">
						@media (max-width: 767px) {
							#project-<?php echo $query_ID; ?> {
								background-image: url("<?php echo $project_background_mobile; ?>") !important;
							}
						}
					</style>
					<div class="pp-projects__caption">
						<div class="pp-projects__caption-info hidden-xs">
							<div>
								<b><?php echo get_post_meta($currentPageID, 'project_title', true);?></b>
								<strong><?php echo $project_name; ?></strong>
							</div>
							<div class="pp-projects__caption-info-client">
								<b><?php echo get_post_meta($currentPageID, 'client_proyecto', true);?></b>
								<strong><?php echo $project_client; ?></strong>
							</div>
						</div>
						<!-- visible xs -->
						<div class="pp-projects__caption-info visible-xs-inline-block">
							<div>
								<b><?php echo $project_name; ?></b>
								<strong><?php echo $project_client; ?></strong>
							</div>
						</div>
						<div class="pp-projects__caption-btn">
							<button type="button" class="btn btn-line btn-lg btn-square js-view-project"
									data-project="project-<?php echo $query_ID; ?>__description">
                                <?php echo get_post_meta($currentPageID, 'button_see_project', true);?>
							</button>
						</div>
					</div>
					<!-- template for description -->
					<div class="hidden" id="project-<?php echo $query_ID; ?>__description">
						<div class="project-description-full__client"><?php echo get_post_meta($currentPageID, 'client_proyecto', true);?>: <?php echo $project_client; ?></div>
						<h2 class="project-description-full__title"><?php echo $project_name; ?></h2>
						<div>
							<?php echo wpautop( $project_description ); ?>
						</div>
						<hr>
						<div class="project-description-full__skills">
							<h4 class="text-normal">Skills:</h4>
							<div class="project-description-full__skills-list">
								<?php foreach ( $project_skills as $skill ) : ?>
									<figure>
										<img src="<?php echo $skill['project_skill_image']['url']; ?>"
											 alt="<?php echo $skill['project_skill_image']['alt']; ?>">
										<figcaption><?php echo $skill['project_skill_name']; ?></figcaption>
									</figure>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>

				<?php
			endwhile;
			?>
		</div>
	</section>

	<!-- clientes -->
    <?php 
    if( $customerList )
    {
        ?>
        <section class="section section-customers">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="alt-home-title"><?php echo $customerTitle; ?></h2>
                        <div class="alt-home-description"><?php echo $customerDescription; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="customer-list">
                            <?php foreach ( $customerList as $item ) { ?>
                                <li class="card"><img src="<?php echo $item['alt_customer_logo'];?>" alt="<?php echo $item['alt_customer_name'];?>" title="<?php echo $item['alt_customer_name'];?>"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
</div>

<?php
get_footer();
?>
