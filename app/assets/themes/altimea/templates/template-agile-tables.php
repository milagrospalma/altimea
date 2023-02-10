<?php

/* Template Name: Servicio - Agile Boards */

$nav_Dark = true;
get_header();

?>

<main class="alt-agile-tables">
    <section id="agile-tables" class="alt-agile-tables__section1 sectionaltimea" section-id="sect-agile-tables">
        <div class="container">
            <div class="alt-softwf__flex">
                <div class="alt-softwf__flex__col">
                    <div class="back-home-services back-home--contrast">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13 9"><g><g><path fill="#ffffff" d="M-.003 5.4h9.55L5.934 8.997h2.554L13.003 4.5 8.488.002H5.934L9.547 3.6h-9.55z"/></g></g></svg>
                        <?php echo get_post_meta(get_the_ID(),'back_home_link', true); ?>
                    </div>
					<div class="alt-agile-tables__types">
						<div class="alt-agile-tables__types__type"><?php echo get_post_meta(get_the_ID(), 'metodologia_1_nombre', true);?></div>
						<div class="alt-agile-tables__types__type"><?php echo get_post_meta(get_the_ID(), 'metodologia_2_nombre', true);?></div>
						<div class="alt-agile-tables__types__type"><?php echo get_post_meta(get_the_ID(), 'metodologia_3_nombre', true);?></div>
					</div>
					<h2 class="alt-agile-tables__title alt-agile-tables__title--big">
                        <?php echo get_post_meta(get_the_ID(), 'main_title', true);?>
					</h2>
					<div class="alt-agile-tables__team--mb">
						<img src="<?php bloginfo('template_directory'); ?>/images/servicios/agile-tables/team.png" alt="Agile Table Team" class="img-responsive">
					</div>
					<p class="alt-agile-tables__text">
                        <?php echo get_post_meta(get_the_ID(), 'text_below_main_title', true);?>
					</p>
					<div class="alt-agile-tables__button">
						<a class="btn upper alt-btn alt-btn--white" href="#contact-us">
                            <?php echo get_post_meta(get_the_ID(), 'button_contact_us', true);?>
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16"> <g> <g> <path fill="#fff" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path> </g> </g> </svg>
						</a>
					</div>
				</div>
				<div class="alt-agile-tables__flex__col alt-agile-tables__team">
					<img src="<?php bloginfo('template_directory'); ?>/images/servicios/agile-tables/team.png" alt="Agile Table Team" class="img-responsive">
				</div>
			</div>

			<div class="alt-plus-bottom">
				<img src="<?php bloginfo('template_directory'); ?>/images/s-factory/plus-btn.svg" alt="boton plus" class="img-responsive">
			</div>
        </div>
	</section>

	<section id="seccion2" class="alt-agile-tables__section2 sectionaltimea" data-ga-label="seccion2">
		<div class="container alt-agile-tables__advantages">
			<span class="alt-agile-tables__rectangle"></span>
			<h2 class="alt-agile-tables__title"><?php echo get_post_meta(get_the_ID(), 'title_ventajas', true);?></h2>
			<div class="alt-agile-tables__advantages__slides js-alt-agile-tables-slides__advantages">
				<div class="alt-agile-tables__slide alt-agile-tables__slide--one">
					<div class="alt-agile-tables__slide__title">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_white_1', true);?><span> <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_green_1', true);?></span>
					</div>
					<p class="alt-agile-tables__slide__content">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_text_1', true);?>
					</p>
				</div>
				<div class="alt-agile-tables__slide alt-agile-tables__slide--two">
					<div class="alt-agile-tables__slide__title">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_white_2', true);?><span> <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_green_2', true);?></span>
					</div>
					<p class="alt-agile-tables__slide__content">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_text_2', true);?>
                    </p>
				</div>
				<div class="alt-agile-tables__slide alt-agile-tables__slide--three">
					<div class="alt-agile-tables__slide__title">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_white_3', true);?><span> <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_green_3', true);?></span>
					</div>
					<p class="alt-agile-tables__slide__content">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_text_3', true);?>
					</p>
				</div>
				<div class="alt-agile-tables__slide alt-agile-tables__slide--four">
					<div class="alt-agile-tables__slide__title">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_white_4', true);?><span> <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_green_4', true);?></span>
					</div>
					<p class="alt-agile-tables__slide__content">
                        <?php echo get_post_meta(get_the_ID(), 'ventajas_sub_title_text_4', true);?>
                    </p>
				</div>
			</div>
		</div>
	</section>

    <section id="seccion3" class="alt-agile-tables__section3 sectionaltimea" data-ga-label="seccion3">
        <div class="container alt-agile-tables__methodologies">
			<span class="alt-agile-tables__rectangle alt-agile-tables__rectangle--green"></span>
			<div class="alt-agile-tables__flex">
				<div class="alt-agile-tables__flex__col">
					<h2 class="alt-agile-tables__title">
                        <?php echo get_post_meta(get_the_ID(), 'que_son_las_metodologias_title', true);?>
                    </h2>
					<div class="alt-agile-tables__flex__col alt-agile-tables__methodologies__graphic--mb">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/agile-graphic.png" class="img-responsive">
					</div>
					<p class="alt-agile-tables__text alt-agile-tables__text--contrast">
                        <?php echo get_post_meta(get_the_ID(), 'que_son_las_metodologias_text', true);?>
                    </p>
				</div>
				<div class="alt-agile-tables__flex__col alt-agile-tables__methodologies__graphic">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/agile-graphic.png" class="img-responsive">
				</div>
			</div>

			<div class="alt-agile-tables__methods__separator"></div>

			<div class="alt-agile-tables__methods js-alt-agile-tables-slides__methods">
				<div class="alt-agile-tables__methods__slide">
					<div class="alt-agile-tables__methods__slide__image">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/desktop/scrum.jpg" class="img-responsive" alt="Scrum">
					</div>

					<div class="alt-agile-tables__methods__slide__content">
						<div class="alt-agile-tables__methods__slide__title">
                            <?php echo get_post_meta(get_the_ID(), 'tipos_metodologias_title', true);?>
						</div>
						<div class="alt-agile-tables__methods__slide__image--mb">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/mobile/scrum-mb.jpg" class="img-responsive" alt="Scrum">
						</div>
						<div class="alt-agile-tables__methods__slide__tag">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_1_nombre', true);?>
                        </div>
						<p class="alt-agile-tables__methods__slide__text">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_1_text', true);?>
						</p>
					</div>
				</div>
				<div class="alt-agile-tables__methods__slide">
					<div class="alt-agile-tables__methods__slide__image">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/desktop/lean.jpg" class="img-responsive" alt="Lean UX">
					</div>

					<div class="alt-agile-tables__methods__slide__content">
						<div class="alt-agile-tables__methods__slide__title">
                            <?php echo get_post_meta(get_the_ID(), 'tipos_metodologias_title', true);?>
						</div>
						<div class="alt-agile-tables__methods__slide__image--mb">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/mobile/lean-mb.jpg" class="img-responsive" alt="Lean UX">
						</div>
						<div class="alt-agile-tables__methods__slide__tag">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_2_nombre', true);?>
						</div>
						<p class="alt-agile-tables__methods__slide__text">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_2_text', true);?>
						</p>
					</div>
				</div>
				<div class="alt-agile-tables__methods__slide">
					<div class="alt-agile-tables__methods__slide__image">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/desktop/kanban.jpg" class="img-responsive" alt="Kanban">
					</div>

					<div class="alt-agile-tables__methods__slide__content">
						<div class="alt-agile-tables__methods__slide__title">
                            <?php echo get_post_meta(get_the_ID(), 'tipos_metodologias_title', true);?>
						</div>
						<div class="alt-agile-tables__methods__slide__image--mb">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/mobile/kanban-mb.jpg" class="img-responsive" alt="Kanban">
						</div>
						<div class="alt-agile-tables__methods__slide__tag">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_3_nombre', true);?>
                        </div>
						<p class="alt-agile-tables__methods__slide__text">
                            <?php echo get_post_meta(get_the_ID(), 'metodologia_3_text', true);?>
						</p>
					</div>
				</div>
			</div>
        </div>
	</section>

    <section id="seccion4" class="alt-agile-tables__section4 sectionaltimea" data-ga-label="seccion4">
		<div class="container alt-agile-tables__case">
			<span class="alt-agile-tables__rectangle alt-agile-tables__rectangle--green"></span>
			<div class="alt-agile-tables__case__title">
                <?php echo get_post_meta(get_the_ID(), 'caso_exito_title', true);?>
				<span><?php echo get_post_meta(get_the_ID(), 'caso_exito_sub_title', true);?></span>
			</div>

			<div class="alt-agile-tables__case__contents">
				<p>
                    <?php echo get_post_meta(get_the_ID(), 'caso_exito_text_1', true);?>
				<p>
                    <?php echo get_post_meta(get_the_ID(), 'caso_exito_text_2', true);?>
				</p>
				<p>
                    <?php echo get_post_meta(get_the_ID(), 'caso_exito_text_3', true);?>
                </p>
			</div>

			<div class="alt-agile-tables__case__macbook js-alt-agile-tables-slides__case__macbook">
				<div class="alt-agile-tables__case__macbook__slide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/macbook/macbook-1.png" class="img-responsive" alt="MacBook 1">
				</div>
				<div class="alt-agile-tables__case__macbook__slide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/macbook/macbook-2.png" class="img-responsive" alt="MacBook 2">
				</div>
				<div class="alt-agile-tables__case__macbook__slide">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/macbook/macbook-3.png" class="img-responsive" alt="MacBook 3">
				</div>
			</div>

			<div class="alt-agile-tables__case__wrapper">
				<div class="alt-agile-tables__case__iphone js-alt-agile-tables-slides__case__iphone">

					<div class="alt-agile-tables__case__iphone__slide">
						<div class="alt-agile-tables__case__iphone__content">
                            <?php echo get_post_meta(get_the_ID(), 'solucion_title', true);?>
							<p>
                                <?php echo get_post_meta(get_the_ID(), 'solution_text_1', true);?>
							</p>
						</div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/iphone/iphone-1.png" class="img-responsive" alt="iPhone 1">
					</div>

					<div class="alt-agile-tables__case__iphone__slide">
						<div class="alt-agile-tables__case__iphone__content">
                            <?php echo get_post_meta(get_the_ID(), 'solucion_title', true);?>
                            <p>
                                <?php echo get_post_meta(get_the_ID(), 'solution_text_2', true);?>
							</p>
						</div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/iphone/iphone-2.png" class="img-responsive" alt="iPhone 2">
					</div>

					<div class="alt-agile-tables__case__iphone__slide">
						<div class="alt-agile-tables__case__iphone__content">
                            <?php echo get_post_meta(get_the_ID(), 'solucion_title', true);?>
                            <p>
                                <?php echo get_post_meta(get_the_ID(), 'solution_text_3', true);?>
							</p>
						</div>
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/sliders/iphone/iphone-3.png" class="img-responsive" alt="iPhone 3">
					</div>

				</div>

				<div class="alt-agile-tables__case__accomplishments">
					<span><?php echo get_post_meta(get_the_ID(), 'logros_title', true);?></span>
					<p><?php echo get_post_meta(get_the_ID(), 'logros_text', true);?></p>
					<div class="alt-agile-tables__case__accomplishments__buttons">
						<span class="btn alt-btn"><?php echo get_post_meta(get_the_ID(), 'logros_bullet_point_1', true);?></span>
						<span class="btn alt-btn"><?php echo get_post_meta(get_the_ID(), 'logros_bullet_point_2', true);?></span>
						<span class="btn alt-btn"><?php echo get_post_meta(get_the_ID(), 'logros_bullet_point_3', true);?></span>
					</div>
				</div>

			</div>

		</div>
	</section>

    <section id="seccion5" class="alt-agile-tables__section5 sectionaltimea" data-ga-label="seccion5">
        <div class="container alt-agile-tables__magazines">


			<div class="alt-agile-tables__magazines__contents">
				<span class="alt-agile-tables__rectangle alt-agile-tables__rectangle--green"></span>
				<h2 class="alt-agile-tables__magazines__title">
                    <?php echo get_post_meta(get_the_ID(), 'press_white_title', true);?>
					<span><?php echo get_post_meta(get_the_ID(), 'press_green_title', true);?></span>
				</h2>
				<p class="alt-agile-tables__text alt-agile-tables__text--contrast">
                    <?php echo get_post_meta(get_the_ID(), 'press_text', true);?>
                </p>
			</div>

			<div class="alt-agile-tables__magazines__links">

				<a class="alt-agile-tables__magazines__link" href="https://issuu.com/gigabitmagazine/docs/gigabit_feb2020/190" target="_blank">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/desktop/magazines/gigabit.png" class="img-responsive" alt="Gigabit">
					<p><?php echo get_post_meta(get_the_ID(), 'press_name_1', true);?><br> <span><?php echo get_post_meta(get_the_ID(), 'press_1_page', true);?></span></p>
				</a>

				<a class="alt-agile-tables__magazines__link" href="https://issuu.com/businessreviewusa/docs/bc_usa_feb2020/162" target="_blank">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/servicios/agile-tables/desktop/magazines/business-chief.png" class="img-responsive" alt="Business Chief">
                    <p><?php echo get_post_meta(get_the_ID(), 'press_name_2', true);?><br> <span><?php echo get_post_meta(get_the_ID(), 'press_2_page', true);?></span></p>
				</a>
			</div>

		</div>
	</section>
    <div class="end-page"></div>
    <!-- section contact -->
    <section id="contact-us" class="alt-softwf-section5 service-contact sectionaltimea" data-section-id="sec5" data-ga-label="Contacto">
        <?php include_once 'template-footer_services.php'; ?>
    </section>
</main>

<?php
get_footer();
?>
