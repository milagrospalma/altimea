<?php

/* Template Name: Proyectos */

// query projects
$args = array(
	'post_type' => 'projects'
);

$query_projects = new WP_Query( $args );
$count          = 0;

get_header();

?>

<main class="page-projects">

    <section class="page-projects__section-list section-full-screem-container">
        <div class="scroll-indicator hidden-xs">
            <a href="#clientes" class="btn-down scroll-down">
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

    <!-- Section footer copy home -->
    <!-- contacto -->
    <section class="section section-clientes" id="clientes">
        <div class="section-content-clients">
            <div class="container-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-lg-4 col-lg-offset-1 mt-10">
                            <div class="text-center-xs">
                                <h2>Nuestros clientes</h2>
                                <p class="mt-20">Más de 10 años de experiencia brindando soluciones a problemas de
                                    desarrollo tecnológico y de contenido digital en Francia, Canadá, Colombia y
                                    Perú.</p>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-offset-1 col-md-6 col-lg-5">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/cencosud.png"
                                             alt="Cencosud" title="Cencosud" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/saga.png"
                                             alt="SagaFalabella" title="SagaFalabella" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/el_comercio.png"
                                             alt="El Comercio" title="El Comercio" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/belcorp.png"
                                             alt="Belcorp" title="Belcorp" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/entel.png"
                                             alt="Entel" title="Entel" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/sodimac.png"
                                             alt="Sodimac" title="Sodimac" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/prima.png"
                                             alt="Prima AFP" title="Prima AFP" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/renault.png"
                                             alt="Renault" title="Renault" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div class="text-center mt-5">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/clientes/nissan.png"
                                             alt="Nissan" title="Nissan" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content-contact">
            <div class="container-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 main-map">
                            <div class="section-content-contact-map">
                                <div class="map-full map-address"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="section-content-contact-info">
                                <div class="cell-middle country-info country-info__PE">
                                    <h3><a href="tel:+51 1 222 - 2010">+51 1 222 - 2010</a></h3>
                                    <address>
                                        Prol. Arenales 413 Of. 102 <br class="visible-xs"/>San Isidro <br>
                                        Lima - Perú
                                    </address>

                                    <div class="social-buttons">
                                        <a href="https://www.facebook.com/altimea" target="_blank">
                                            <span class="icon-facebook" aria-hidden="true"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/company/altimea" target="_blank">
                                            <span class="icon-linkedin" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="cell-middle country-info country-info__CO">
                                    <h3><a href="tel:+51 1 222 - 2010">+57 317 847 8758</a></h3>
                                    <address>
                                        Calle 10 # 80F 40 t2 <br class="visible-xs"/>Apt. 603 <br>
                                        Bogotá - Colombia
                                    </address>

                                    <div class="social-buttons" style="visibility: hidden;">
                                        <a href="https://www.facebook.com/altimea" target="_blank">
                                            <span class="icon-facebook" aria-hidden="true"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/company/altimea" target="_blank">
                                            <span class="icon-linkedin" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo getMapsLink(); ?>" class="btn-map hidden-xs">¿Cómo Llegar?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-address visible-xs">
        <div class="section-content-contact">
            <div class="container-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="section-content-contact-map">
                                <div class="map-full map-address-mobile"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="clone-contact-info-address">
                            </div>
                            <a href="<?php echo getMapsLink(); ?>" class="btn-map">¿Cómo Llegar?</a>
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
