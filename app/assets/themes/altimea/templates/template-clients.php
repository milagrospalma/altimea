<?php

/* Template Name: Clientes */

get_header();

?>

<div class="fullpage-clientes">

<!-- contacto -->
<section class="section section-clientes">
	<div class="section-content-clients">
		<div class="container-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-lg-4 col-lg-offset-1 mt-10">
						<div class="text-center-xs">
							<h2>Nuestros clientes</h2>
							<p class="mt-20">Más de 10 años de experiencia brindando soluciones a problemas de desarrollo tecnológico y de contenido digital en Francia, Canadá y Perú.</p>
						</div>
					</div>
					<div class="col-sm-7 col-md-offset-1 col-md-6 col-lg-5">
						<div class="row">
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/intercorp.png" alt="Intercorp" title="Intercorp" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/belcorp.png" alt="Belcorp" title="Belcorp" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/prima.png" alt="Prima AFP" title="Prima AFP" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/cencosud.png" alt="Cencosud" title="Cencosud" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/saga.png" alt="SagaFalabella" title="SagaFalabella" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/entel.png" alt="Entel" title="Entel" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/tottus.png" alt="Tottus" title="Tottus" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/el_comercio.png" alt="El Comercio" title="El Comercio" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4">
								<div class="text-center mt-5">
									<img src="<?php bloginfo('template_directory'); ?>/images/clientes/sodimac.png" alt="Sodimac" title="Sodimac" class="img-responsive">
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
							<div class="cell-middle">
								<h3><a href="tel:+51 1 222 - 2010">+51 1 222 - 2010</a></h3>
								<address>
									Prol. Arenales 413 Of. 102 San Isidro <br>
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
						</div>
						<a href="<?php echo getMapsLink(); ?>" class="btn-map">¿Cómo Llegar?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-address visible-xs ">
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

</div>

<?php
get_footer();
?>
