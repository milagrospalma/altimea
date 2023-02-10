<?php

/* Template Name: Somos */

get_header();

?>

<div class="fullpage-somos">

<!-- somos -->
<section class="section section-full-screem-container section-somos ">
	<div class="container">
		<div class="container-content">
			<div class="row">
				<div class="col-sm-5 text-center logo-somos">
					<img src="<?php bloginfo('template_directory'); ?>/images/somos.svg" alt="Altimea nosotros" title="Altimea nosotros" class="img-responsive" width="300">
				</div>
				<div class="col-sm-7 col-md-6 text-center-xs" style="margin-top:50px;">
					<div class="scrolling-item">
						<h1>Somos<br> una agencia<br> tecno digital</h1>
						<br class="visible-xs">
						<br class="visible-xs">
						<p class="font-300">Más de 10 años de experiencia brindando soluciones a problemas de desarrollo tecnológico y de contenido digital en Francia, Canadá y Perú.</p>
						<h4 class="mt-20">Así trabajamos</h4>
						<p class="font-300">Colaboradores y clientes tienen igual importancia en el proceso, rompiendo las barreras verticales que limitan el trabajo. De esta forma logramos involucrarnos tanto con los objetivos como con la emoción de cumplirlos.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-link-bottom hidden-xs">
			<a  href="<?php echo get_site_url(); ?>/proyectos" class="link-right">
				Ver proyectos <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div class="scroll-indicator hidden">
		<a href="#servicios" class="btn-down">
			<span class="glyphicon glyphicon-menu-down"></span>
		</a>
	</div>
</section>
</div>

<?php
get_footer();
?>
