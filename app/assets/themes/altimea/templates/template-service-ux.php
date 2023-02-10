<?php

/* Template Name: Servicio - Service UX */

// Get Category Object selected on the template page
$categoryProjectLanding = get_field( 'landing_ux_category_projects' );
// query projects
$args           = array(
	'post_type' => 'projects',
	'cat'       => $categoryProjectLanding
);
$query_projects = new WP_Query( $args );

get_header();

?>

    <main class="service-page">


        <!-- section home service ux -->
        <section id="ux-home" class="section section-ux-page section-full-screem-container service-home">
            <div class="container">
                <div class="container-content">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                            <div class="text-center">
                                <h1 class="service-home-title wow fadeInUp" data-wow-delay="0.3s">
                                    Potencia el impacto de tu negocio generando nuevas experiencias.
                                </h1>
                                <p class="mt-20 wow fadeInUp" data-wow-delay="1s">
                                    Ya sea que tu objetivo sea convertir, obtener ventas, generar branding, o awareness.
                                    <br/>
                                    Necesitas de un servicio para llegar a ese objetivo. Necesitas UX Solutions.
                                </p>
                                <div class="mt-30 wow fadeInUp" data-wow-delay="1.2s">
                                    <a href="#section-steps" class="btn btn-line upper scroll-down btn-analitics"
                                       data-section="Seccion1" data-action="Click" data-label="Conoce_mas">
                                        Conoce más
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <a href="#section-steps" class="btn-down scroll-down">
                    <span class="glyphicon glyphicon-menu-down"></span>
                </a>
            </div>
        </section>


        <!-- section info steps -->
        <section class="service-steps" id="section-steps" data-section-id="sec2" data-ga-label="Seccion2">
            <div class="service-step-text text-center-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="service-step-text-caption">
                                <h2 class="service-step-text-caption-title wow fadeInUp" data-wow-delay="0.4s">Analítica
                                    de resultados</h2>
                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <p>Medimos <strong>El resultado de la estrategia </strong> para desarrollar otra con
                                        mayor impacto. &nbsp;
                                        <a target="_blank"
                                           href="https://s3-us-west-2.amazonaws.com/altimea/documentos-web/brochure-service-ux-altimea.pdf"
                                           class="btn-analitics" data-section="Seccion2" data-action="Click"
                                           data-label="Ver_brochure">Ver brochure</a>.
                                    </p>
                                    <a href="#" data-toggle="active-contact"
                                       class="btn btn-line btn-line-dark btn-lg btn-analitics" data-section="Seccion2"
                                       data-action="Click" data-label="Quiero_contactar"> Quiero contactar </a>
                                </div>
                                <div class="service-step-tools wow fadeInUp" data-wow-delay="1.2s">
                                    <h5 class="service-step-tools-title">Herramientas que utilizamos</h5>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/analytics.jpg"
                                                 alt="analytics" title="analytics">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/woorank.jpg"
                                                 alt="woorank" title="woorank">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/sem_rush.jpg"
                                                 alt="sem rush" title="sem rush">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/localytics.jpg"
                                                 alt="localytics" title="localytics">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-step-img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-step-col col-xs-12 col-sm-offset-6 col-sm-6 col-md-offset-5 col-md-7">
                            <div class="service-step-bg"
                                 style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/analitica-resultados.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 2 -->
        <section class="service-steps" id="section-steps" data-section-id="sec3" data-ga-label="Seccion3">
            <div class="service-step-text text-right text-center-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-sm-offset-6 col-md-offset-7 col-lg-offset-8">
                            <div class="service-step-text-caption">
                                <h2 class="service-step-text-caption-title wow fadeInUp" data-wow-delay="0.4s">Analítica
                                    de<br>interacciones</h2>
                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <p>Seguimos <strong>las interacciones del usuario</strong> para entender mejor los
                                        resultados. &nbsp;
                                        <a target="_blank"
                                           href="https://s3-us-west-2.amazonaws.com/altimea/documentos-web/brochure-service-ux-altimea.pdf"
                                           class="btn-analitics" data-section="Seccion3" data-action="Click"
                                           data-label="Ver_brochure">Ver brochure</a>.
                                    </p>
                                    <a href="#" data-toggle="active-contact"
                                       class="btn btn-line btn-line-dark btn-lg btn-analitics" data-section="Seccion3"
                                       data-action="Click" data-label="Quiero_contactar"> Quiero contactar </a>
                                </div>
                                <div class="service-step-tools wow fadeInUp" data-wow-delay="1.2s">
                                    <h5 class="service-step-tools-title">Herramientas que utilizamos</h5>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/heatmap.jpg"
                                                 alt="heatmap" title="heatmap">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/user-testing.jpg"
                                                 alt="user-testing" title="user-testing">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/clic_tale.jpg"
                                                 alt="clic tale" title="clic tale">
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/heatmap_tracker.jpg"
                                                 alt="heatmap tracker" title="heatmap tracker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-step-img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-step-col col-xs-12 col-sm-6 col-md-7">
                            <div class="service-step-bg"
                                 style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/analitica-de-interacciones.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 3 -->
        <section class="service-steps" id="section-steps" data-section-id="sec4" data-ga-label="Seccion4">
            <div class="service-step-text text-center-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="service-step-text-caption">
                                <h2 class="service-step-text-caption-title wow fadeInUp" data-wow-delay="0.4s">Analítica
                                    de comportamiento</h2>
                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <p>Analizamos <strong>el comportamiento visual y emocional</strong> del usuario.
                                        <br>
                                        <a target="_blank"
                                           href="https://s3-us-west-2.amazonaws.com/altimea/documentos-web/brochure-service-ux-altimea.pdf"
                                           class="btn-analitics" data-section="Seccion4" data-action="Click"
                                           data-label="Ver_brochure">Ver brochure</a>.
                                    </p>
                                    <a href="#" data-toggle="active-contact"
                                       class="btn btn-line btn-line-dark btn-lg btn-analitics" data-section="Seccion4"
                                       data-action="Click" data-label="Quiero_contactar"> Quiero contactar </a>
                                </div>
                                <div class="service-step-tools wow fadeInUp" data-wow-delay="1.2s">
                                    <h5 class="service-step-tools-title">Herramientas que utilizamos</h5>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/altimea.jpg"
                                                 alt="altimea"
                                                 title="Analizamos el comportamiento visual y emocional del usuario">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-step-img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="service-step-col col-xs-12 col-sm-offset-6 col-sm-6 col-md-offset-5 col-md-7">
                            <div class="service-step-bg"
                                 style="background-image: url('<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/analitica-de-comportamiento.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- section category ux -->
        <section class="page-projects__section-list section-full-screem-container">
            <div class="scroll-indicator hidden-xs">
                <a href="#sec5" class="btn-down scroll-down">
                    <span class="glyphicon glyphicon-menu-down"></span>
                </a>
            </div>

            <div class="pp-projects js-projects-slick">
				<?php
				while ( $query_projects->have_posts() ) :
					$query_projects->the_post();

					$count    = $count + 1;
					$query_ID = $query_projects->post->ID;

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
                                    background-image: url(<?php echo $project_background_mobile; ?>);
                                }
                            }
                        </style>
                        <div class="pp-projects__caption">
                            <div class="pp-projects__caption-info hidden-xs">
	                            <div>
	                                <b>Proyecto</b>
	                                <strong><?php echo $project_name; ?></strong>
	                            </div>
	                            <div class="pp-projects__caption-info-client">
	                                <b>Cliente</b>
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
                                        data-project="project-<?php echo $query_ID; ?>__description">Ver proyecto
                                </button>
                            </div>
                        </div>
                        <!-- template for description -->
                        <div class="hidden" id="project-<?php echo $query_ID; ?>__description">
                            <div class="project-description-full__client">Cliente: <?php echo $project_client; ?></div>
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

        <div class="end-page"></div>

        <!-- section contact -->
        <section id="sec5" class="service-contact" data-section-id="sec5" data-ga-label="Contacto">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                        <div class="text-center wow fadeInUp posr">
                            <button type="button" class="close" data-toggle="active-contact">&times;</button>
                            <h2 data-toggle="active-contact">Contáctanos</h2>
                            <p>Tienes un caso similar o deseas potenciar tu negocio con algunas de las acciones vistas,
                                completa el siguiente formulario y nos pondremos en contacto contigo.</p>
                        </div>
                        <div class="service-contact-form text-center wow fadeInUp" data-wow-delay="0.5s">
                            <form id="form-contact-service" action="" method="POST" role="form">
                                <div class="row">
                                    <div class="alert alert-small alert-msg-send-form"></div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Nombre"
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="tel" class="form-control input-lg" placeholder="Teléfono"
                                                   name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="Email"
                                                   name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-20">
                                    <input type="hidden" name="origin" value="landing_ux">
                                    <input type="hidden" name="action" value="sendContact">
                                    <button type="submit" class="btn btn-primary upper">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="service-contact-call text-center wow fadeIn" data-wow-delay="1s">
                            <div style="opacity:0.7;">ó</div>
                            <br>
                            <p>Comunícate directamente con alguno de nuestros consultores UX.</p>
                            <div class="service-contact-user">
                                <img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/ux/gustavo.jpg"
                                     alt="Gustavo Altimea" width="80">
                                <div class="service-contact-user-caption">
                                    <strong>Gustavo Gonzales</strong>
                                    <p>
                                        m:
                                        <a href="mailto:gustavo.gonzales@altimea.com">gustavo.gonzales@altimea.com</a>
                                        <br>
                                        t: <a href="tel:+516373326">(+51) 637 - 3326</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php
get_footer();
?>
