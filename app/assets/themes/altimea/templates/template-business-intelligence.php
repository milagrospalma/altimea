<?php

/* Template Name: Servicio - Business Intelligence*/

// Get Category Object selected on the template page
$categoryProjectLanding = get_field('landing_ux_category_projects');
// query projects
$args = array(
    'post_type' => 'projects',
    'cat' => $categoryProjectLanding
);
$query_projects = new WP_Query( $args );

get_header();

?>

<main class="service-page">

<!-- section home service ux -->
<section id="ux-home" class="section section-full-screem-container bi-home sectionaltimea highlight">
	<div class="container">
		<div class="container-content">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
					<div class="text-center">
						<h1 class="service-home-title wow fadeInUp" data-wow-delay="0.3s">
							Ayudamos a tomar las <br class="hidden-xs"> mejores decisiones para <br class="hidden-xs"> tu negocio
						</h1>
						<p class="mt-20 wow fadeInUp" data-wow-delay="1s">
							ya sean estratégicas u operativas, te proporcionamos soluciones de alto nivel, <br class="hidden-xs"> mediante el uso de tecnologías de información de última generación.
						</p>
						<div class="mt-40 wow fadeInUp" data-wow-delay="1.2s">
							<br>
							<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/ibm-partner.svg"
                                 alt="Ayudamos a tomar las mejores decisiones para tu negocio"
                                 title="Ayudamos a tomar las mejores decisiones para tu negocio"
                                 width="200">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-indicator">
		<a href="#section-next" class="btn-down scroll-down">
			<span class="glyphicon glyphicon-menu-down"></span>
		</a>
	</div>
</section>
<div id="section-next"></div>


<section id="seccion2" class="section-bi-captions sectionaltimea">
	<div class="container posr">
		<div class="row">
			<div class="col-sm-6 col-md-5 col-md-offset-1">
				<div class="bi-captions wow fadeInLeft">
					<div class="text-center">
						<h2 class="title-line-orange">
							Planning analytics
						</h2>
					</div>
					<div class="text-justify">
						<p>Con nuestro servicio de planificación empresarial, transforma todo el ciclo de tu negocio integrando la planificación operativa y financiera.</p>
						<p>Nos Apoyamos en las mejores prácticas tales como <strong>planificación basada en drivers, Rolling forecast y análisis de rentabilidad</strong>, entre muchas otras aplicaciones.</p>
					</div>
					<div class="text-center mt-30">
						<div class="mb-30">
							<a href="http://www-03.ibm.com/software/products/es/planning-analytics" target="_blank">
								<span class="css-icon-wrapper"> <i class="glyphicon glyphicon-link"></i></span>
								Conoce más
							</a>
						</div>
						<h4 class="text-primary">Herramientas que utilizamos</h4>
						<div class="bi-captions-tools mt-30">
							<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/logo-ibm-planning.svg" alt="IBM planning" title="Planning analytics" width="155">
							<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/logo-ibm-cognos.svg" alt="IBM cognos" title="IBM cognos" width="155">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-captions-img right">
			<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/planning-analytics.png" alt="Planning analytics" title="Planning analytics" width="620" class="img-responsive img-filter-gray wow fadeInRight">
		</div>
	</div>
</section>

<section id="seccion3" class="section-bi-captions sectionaltimea">
	<div class="container posr">
		<div class="row">
			<div class="col-sm-6 col-md-5 col-sm-offset-6 col-md-offset-6">
				<div class="bi-captions wow fadeInRight">
					<div class="text-center">
						<h2 class="title-line-orange">
							Business intelligence
						</h2>
					</div>
					<div class="text-justify">
						<p>Permanentemente las necesidades de la información hacen que los sistemas de inteligencia de negocio innoven y sobrepasen las expectativas de las organizaciones. </p>
						<p>Por eso te apoyamos con la próxima generación en inteligencia empresarial, <strong>el autoservicio más inteligente que interpreta tus intenciones</strong> guiándote en la obtención de resultados de forma rápida y eficiente.</p>
					</div>
					<div class="text-center mt-30">
						<div class="mb-30">
							<a href="http://www-03.ibm.com/software/products/es/ba-business-intelligence" target="_blank">
								<span class="css-icon-wrapper"> <i class="glyphicon glyphicon-link"></i></span>
								Conoce más
							</a>
						</div>
						<h4 class="text-primary">Herramientas que utilizamos</h4>
						<div class="bi-captions-tools mt-30">
							<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/logo-ibm-infoSphere.svg" alt="IBM infoSphere" title="IBM infoSphere" width="155">
							<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/logo-ibm-cognos.svg" alt="IBM cognos" title="IBM cognos" width="155">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bi-captions-img left">
			<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/business-intelligence.png" alt="Business intelligence" title="Business intelligence" width="620" class="img-responsive img-filter-gray wow fadeInLeft">
		</div>
	</div>
</section>

<section id="seccion4" class="section-graph sectionaltimea">
	<div class="container">
		<div class="text-center">
			<h2 class="title-line-orange">
				Próxima generación en BI
			</h2>
		</div>
		<div class="text-center mt-20">
			<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/grafica-bi.png" alt="Próxima generación en BI" title="Próxima generación en BI" class="img-responsive img-filter-gray" >
		</div>
	</div>
</section>

<section id="seccion5" class="section-bi-videos hidden">
	<div class="bi-slick-videos">
		<?php for ($i=0; $i < 3; $i++) { ?>
		<div class="bi-slick-videos__item">
			<div class="embed-responsive embed-responsive-16by9">
			 	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I7HahVwYpwo"></iframe>
			</div>
		</div>
		<?php } ?>
	</div>
</section>

<div class="end-page"></div>

<!-- section contact -->
<section id="sec5" class="service-contact sectionaltimea" data-section-id="sec5" data-ga-label="Contacto">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div class="text-center wow fadeInUp posr">
					<button type="button" class="close" data-toggle="active-contact">&times;</button>
					<h2 data-toggle="active-contact">Contáctanos</h2>
					<p>Tienes un caso similar o deseas potenciar tu negocio con algunas de las acciones vistas, completa el siguiente formulario y nos pondremos en contacto contigo.</p>
				</div>
				<div class="service-contact-form text-center wow fadeInUp" data-wow-delay="0.5s">
					<form id="form-contact-service" action="" method="POST" role="form">
						<div class="row">
                            <div class="alert alert-small alert-msg-send-form"></div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control input-lg" placeholder="Nombre" name="name">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="tel" class="form-control input-lg" placeholder="Teléfono" name="phone">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="email" class="form-control input-lg" placeholder="Email" name="email">
								</div>
							</div>
						</div>

						<div class="mt-20">
                            <input type="hidden" name="origin" value="landing_BI">
                            <input type="hidden" name="action" value="sendContact">
							<button type="submit" class="btn btn-primary upper">Enviar</button>
						</div>
					</form>
				</div>
				<div class="service-contact-call text-center wow fadeIn" data-wow-delay="1s">
					<div style="opacity:0.7;">ó</div>
					<br>
					<p>Comunícate directamente con nuestra Gerencia de Analytic Solutions.</p>
					<div class="service-contact-user">
						<img src="<?php bloginfo('template_directory'); ?>/images/bussinnes-in/john-fredy.jpg" alt="John Fredy Cortés Triana" title="John Fredy Cortés Triana" width="80">
						<div class="service-contact-user-caption">
							<strong>John Fredy Cortés Triana</strong>
							<p>
								m: <a href="mailto:john.cortes@altimea.com">john.cortes@altimea.com</a> <br>
								t: <a href="tel:+5116373327">(+511) 637 - 3327</a> / 988 292 095
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
