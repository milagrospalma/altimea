<?php

/* Template Name: Servicio - Software Factory */

$nav_Dark = true;
get_header();

?>

<main class="page-sfactory">
    <section id="software-factory" class="alt-softwf section-sf-spacer section-sf-header sectionaltimea" section-id="sect-soft">
        <div class="container">
            <div class="alt-softwf__flex">
				<div class="alt-softwf__flex__col">
					<div class="back-home-services">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13 9"><g><g><path fill="#002c6b" d="M-.003 5.4h9.55L5.934 8.997h2.554L13.003 4.5 8.488.002H5.934L9.547 3.6h-9.55z"/></g></g></svg>
                        <?php echo get_post_meta(get_the_ID(),'back_home_link', true); ?>
                    </div>
					<div class="alt-category-general">
						<span><?php echo get_post_meta(get_the_ID(),'software_factory_title', true); ?></span>
					</div>
					<h2 class="alt-title-general title">
                        <?php echo get_post_meta(get_the_ID(),'software_factory_sub_title', true); ?>
					</h2>
					<div class="atl-Mob">
						<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/sofware-factory.svg" alt="Sofware Factoty" class="img-responsive">
					</div>
					<p class="alt-excert-general excert">
                        <?php echo get_post_meta(get_the_ID(),'software_factory_solutions_text1', true); ?>
					</p>
				</div>
				<div class="alt-softwf__flex__col">
					<div class="atl-Deskt">
						<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/sofware-factory.svg" alt="Sofware Factory" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

    <section id="seccion3" class="alt-softwf-section3 alt-method section-method section-sf-spacer section-sf-inverse sectionaltimea"
             data-ga-label="seccion3">
        <div class="container">
            <div class="img-method-scrum text-center-xs">
                <div class="method-caption">
					<h2 class="title-line alt-title-general"><?php echo get_post_meta(get_the_ID(),'metodologia_title', true); ?></h2>
					<h3 class="sf-subtitle">
                        <?php echo get_post_meta(get_the_ID(),'metodologia_sub_title_1', true); ?>
						<span><?php echo get_post_meta(get_the_ID(),'metodologia_sub_title_2', true); ?></span>
					</h3>
					<p class="alt-excert-general"><?php echo get_post_meta(get_the_ID(),'metodologia_text', true); ?></p>
                </div>
                <!-- Img mobile -->
                <div class="visible-xs">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/<?php echo get_post_meta(get_the_ID(),'grafica_mb_file_name', true)?>"
                         alt="metodología SCRUM" title="metodología SCRUM" class="img-responsive">
                </div>
                <!-- Img desktop -->
                <div class="hidden-xs">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/<?php echo get_post_meta(get_the_ID(),'grafica_file_name', true)?>"
                         alt="metodología SCRUM" title="metodología SCRUM" class="img-responsive">
                </div>

			</div>
			<div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn-green.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

	<section id="seccion2" class="alt-softwf-section2 section-factory-process section-sf-inverse sectionaltimea" data-ga-label="seccion2">
		<div class="banner">
			<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/banner-slider.jpg" alt="Proceso Fábrica" class="img-responsive">
		</div>
		<div class="alt-softwf-process">
			<h2 class="alt-title-general"><?php echo get_post_meta(get_the_ID(),'card_block_title', true); ?></h2>
			<div class="alt-softwf-process-slide">
				<div class="alt-softwf-process-slide__info">
					<h2 class="alt-title-general"><?php echo get_post_meta(get_the_ID(),'card_block_title', true); ?></h2>
					<div class="title">
						<h2>
							<span>1</span>
							<span><?php echo get_post_meta(get_the_ID(),'card_1_title', true); ?></span>
						</h2>
						<img
							src="<?php bloginfo('template_directory'); ?>/images/s-factory/proceso/proceso-1.jpg"
							title="Identificar las necesidades"
							alt="Identificar las necesidades"
							class="img-responsive"
						>
					</div>
					<p class="alt-excert-general">
                        <?php echo get_post_meta(get_the_ID(),'card_1_text', true); ?>
					</p>
				</div>
				<div class="alt-softwf-process-slide__info">
					<div class="title">
						<h2>
							<span>2</span>
							<span><?php echo get_post_meta(get_the_ID(),'card_2_title', true); ?></span>
						</h2>
						<img
							src="<?php bloginfo('template_directory'); ?>/images/s-factory/proceso/proceso-1.jpg"
							title="Definir los requerimientos"
							alt="Definir los requerimientos"
							class="img-responsive"
						>
					</div>
					<p class="alt-excert-general">
                        <?php echo get_post_meta(get_the_ID(),'card_2_text', true); ?>
					</p>
				</div>
				<div class="alt-softwf-process-slide__info">
					<div class="title">
						<h2>
							<span>3</span>
							<span><?php echo get_post_meta(get_the_ID(),'card_3_title', true); ?></span>
						</h2>
						<img
							src="<?php bloginfo('template_directory'); ?>/images/s-factory/proceso/proceso-1.jpg"
							title="Implementar mejoras o soluciones"
							alt="Implementar mejoras o soluciones"
							class="img-responsive"
						>
					</div>
					<p class="alt-excert-general">
                        <?php echo get_post_meta(get_the_ID(),'card_3_text', true); ?>
                    </p>
				</div>
				<div class="alt-softwf-process-slide__info">
					<div class="title">
						<h2>
							<span>4</span>
							<span><?php echo get_post_meta(get_the_ID(),'card_4_title', true); ?></span>
						</h2>
						<img
							src="<?php bloginfo('template_directory'); ?>/images/s-factory/proceso/proceso-1.jpg"
							title="Pruebas de calidad"
							alt="Pruebas de calidad"
							class="img-responsive"
						>
					</div>
					<p class="alt-excert-general">
                        <?php echo get_post_meta(get_the_ID(),'card_4_text', true); ?>
					</p>
				</div>
				<div class="alt-softwf-process-slide__info">
					<div class="title">
						<h2>
							<span>5</span>
							<span><?php echo get_post_meta(get_the_ID(),'card_5_title', true); ?></span>
						</h2>
						<img
							src="<?php bloginfo('template_directory'); ?>/images/s-factory/proceso/proceso-1.jpg"
							title="Puesta en producción"
							alt="Puesta en producción"
							class="img-responsive"
						>
					</div>
					<p class="alt-excert-general">
                        <?php echo get_post_meta(get_the_ID(),'card_5_text', true); ?>
					</p>
				</div>
			</div>
			<div class="arrows-content">
				<button type="button" class="slick-left">
					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
						<g>
							<g>
								<path d="M-.004 5.399h19.55l-3.612 3.599h2.554L23.003 4.5 18.488 0h-2.554l3.612 3.6H-.004z"/>
							</g>
						</g>
					</svg>
				</button>
				<button type="button" class="slick-right">
					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
						<g>
							<g>
								<path d="M23.004 5.399H3.454l3.612 3.599H4.512L-.003 4.5 4.512 0h2.554l-3.612 3.6h19.55z"/>
							</g>
						</g>
					</svg>
				</button>
			</div>
		</div>
		<div class="alt-plus-bottom">
			<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
		</div>
	</section>

    <section id="seccion4" class="alt-softwf-section4 section-sf-spacer section-tools sectionaltimea" data-ga-label="seccion4">
        <div class="container">
			<h2 class="alt-title-general title-line"><?php echo get_post_meta(get_the_ID(),'herramientas_title', true); ?></h2>
            <div class="grid-tools">
                <!-- Jira -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/jira.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'jira_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'jira_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/jira.svg"
                             alt="Jira" title="Jira" class="img-responsive" width="100">
                    </div>
                </div>
                <!-- Git -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/git.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'git_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'git_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/git.svg"
                             alt="Git" title="Git" class="img-responsive" width="110">
                    </div>
                </div>
                <!-- SonarQube -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/SonarQube.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'sonarqube_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'sonarqube_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/SonarQube.svg"
                             alt="SonarQube" title="SonarQube" class="img-responsive" width="200">
                    </div>
                </div>
                <!-- Jenkins -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/jenkins.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'jenkins_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'jenkins_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/jenkins.svg"
                             alt="Jenkins" title="Jenkins" class="img-responsive" width="80">
                    </div>
                </div>

                <!-- AWS -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/aws.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'aws_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'aws_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/aws.svg"
                             alt="AWS" title="AWS" class="img-responsive" width="130">
                    </div>
                </div>
                <!-- Gulp -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/gulp.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'gulp_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'gulp_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/gulp.svg"
                             alt="Gulp.js" title="Gulp.js" class="img-responsive" width="90">
                    </div>
                </div>
                <!-- Raml -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/raml.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'raml_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'raml_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/raml.svg"
                             alt="Raml" title="Raml" class="img-responsive" width="120">
                    </div>
                </div>
                <!-- AWS CodeDeploy -->
                <div class="grid-tool-item" data-toggle="tool-info"
                     data-img="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/aws-codedeploy.svg"
                     data-title="<?php echo get_post_meta(get_the_ID(),'aws_sub_title', true); ?>"
                     data-info="<?php echo get_post_meta(get_the_ID(),'aws_description', true); ?>">
                    <div class="grid-tool-item-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/aws-codedeploy.svg"
                             alt="AWS CodeDeploy" title="AWS CodeDeploy" class="img-responsive" width="80">
                    </div>
                </div>

                <!-- Tool info default = Jira -->
                <div class="grid-tool-info" data-transfer>
                    <span class="close">&lsaquo;</span>
                    <div data-center>
                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/s-factory/herramientas/jira.svg"
                             alt="Jira" title="Jira" class="img-responsive">
                        <h4 class="grid-tool-info-title">
                            <?php echo get_post_meta(get_the_ID(),'jira_sub_title', true); ?>
                        </h4>
                        <p class="grid-tool-info-text">
                            <?php echo get_post_meta(get_the_ID(),'jira_description', true); ?>
                        </p>
                    </div>
                </div>
            </div>
			<div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

    <!-- section category software factory -->
    <section id="seccion5"
             class="section-proyectos sectionaltimea page-projects__section-list section-full-screem-container"
             data-ga-label="seccion5" section-id="sect-soft">
        <div class="scroll-indicator hidden-xs">
            <a href="#sec5" class="btn-down scroll-down">
                <span class="glyphicon glyphicon-menu-down"></span>
            </a>
        </div>

        <div class="pp-projects js-projects-slick">
			<?php

            // Get Category Object selected on the template page
            $categoryProjectLanding = get_field( 'landing_ux_category_projects' );
            // query projects
            $args           = array(
                'post_type' => 'projects',
                'cat'       => $categoryProjectLanding
            );
            $query_projects = new WP_Query( $args );
            $count          = 0;

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
    <section id="sec5" class="alt-softwf-section5 service-contact sectionaltimea" data-section-id="sec5" data-ga-label="Contacto">
        <?php include_once 'template-footer_services.php'; ?>
    </section>
</main>

<?php
get_footer();
?>
