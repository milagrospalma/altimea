<?php

/* Template Name: Servicios */

get_header();

?>

<div class="fullpage-servicios">

<!-- servicios -->
<section class="section section-full-screem-container section-services ">
	<div class="container-fluid">
		<div class="container-content">
			<div class="row services-full">
				<div class="col-xs-12 col-sm-3 services-full-item " data-title="Marketing Digital">
					<div class="services-full-item-content">
						<a href="#tab-dm" data-targetclick=".tab-dm" class="services-full-item-link">
							<i class="icon-digital-marketing"></i>
							<strong>Content Magagement</strong>
							<strong>Service</strong>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 services-full-item" data-title="Software Factory">
					<div class="services-full-item-content">
						<a href="#tab-sf" data-targetclick=".tab-sf" class="services-full-item-link">
							<i class="icon-software-factory"></i>
							<strong>Software</strong>
							<strong>Factory</strong>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 services-full-item" data-title="UX Solutions">
					<div class="services-full-item-content">
						<a href="#tab-uxs" data-targetclick=".tab-uxs" class="services-full-item-link">
							<i class="icon-ux-solutions"></i>
							<strong>Ux</strong>
							<strong>Solutions</strong>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 services-full-item" data-title="Analytics Solutions">
					<div class="services-full-item-content">
						<a href="#tab-ia" data-targetclick=".tab-ai" class="services-full-item-link">
							<i class="icon-analytics"></i>
							<strong>Analytics</strong>
							<strong>E-commerce</strong>
						</a>
					</div>
				</div>
			</div>
			<div class="description-services hidden">
				<div class="description-services-img animated zoomInRight">
					<img src="<?php bloginfo('template_directory'); ?>/images/servicios/digital_marketing.png" alt="Servicios" title="Servicios" width="550" data-pagespeed-no-transform>
				</div>
				<div class="description-services-content">
					<div class="description-services-content-middle ">
						<div class="col-xxs col-xs-10 col-sm-7 col-md-6 col-lg-5 col-sm-offset-1">
							<div class="service-description-tabs">

								<!-- tabs content -->
								<ul class="tab-content animated slideInRight-">
									<li class="tab-pane animated fadeInRight" id="tab-ux-solutions">
										<div class="service-tabs-icon text-center visible-xxs">
											<i class="icon-analytics"></i>
										</div>
										<h2 class="service-tabs-title">UX<br>Solutions</h2>
										<p class="font-300">El motor de todo negocio es el usuario, por eso creamos experiencias de usuario únicas en el entorno digital de tu negocio.</p>
										<div class="tabs-numbers">
											<ul class="tabs-numbers-head row">
												<li class="col-xs-4 active">
													<a href="#uxs-1" data-toggle="tab">
														<span class="tabs-numbers-num">1</span>
														<strong class="tabs-numbers-title">Analítica de Resultados</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#uxs-2" data-toggle="tab">
														<span class="tabs-numbers-num">2</span>
														<strong class="tabs-numbers-title">Analítica de Interacciones</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#uxs-3" data-toggle="tab">
														<span class="tabs-numbers-num">3</span>
														<strong class="tabs-numbers-title">Analítica del Comportamiento</strong>
													</a>
												</li>
											</ul>

										</div>
									</li>
									<li class="tab-pane animated fadeInRight" id="tab-software-factory">
										<div class="service-tabs-icon text-center visible-xxs">
											<i class="icon-software-factory"></i>
										</div>
										<h2 class="service-tabs-title">Software<br>Factory</h2>
										<p class="font-300">Con el apoyo de las metodologías ágiles (scrum) y un equipo multidisciplinario de primera, podemos crear productos digitales optimizando tiempos y esfuerzo, generando impacto para tu negocio.</p>
										<div class="tabs-numbers">
											<ul class="tabs-numbers-head row">
												<li class="col-xs-4 active">
													<a href="#sf-1" data-toggle="tab">
														<span class="tabs-numbers-num">1</span>
														<strong class="tabs-numbers-title">EQUIPO A1, METODOLOGÍAS ÁGILES</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#sf-2" data-toggle="tab">
														<span class="tabs-numbers-num">2</span>
														<strong class="tabs-numbers-title">QA / PERFORMANCE, USABILIDAD (UX) Y DISEÑO (UI)</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#sf-3" data-toggle="tab">
														<span class="tabs-numbers-num">3</span>
														<strong class="tabs-numbers-title">ARQUITECTURA E INFRAESTRUCTURA, MICROSERVICIOS, API</strong>
													</a>
												</li>
											</ul>

										</div>
									</li>

									<li class="tab-pane animated fadeInRight active" id="tab-digital-marketing">
										<div class="service-tabs-icon text-center visible-xxs">
											<i class="icon-digital-marketing"></i>
										</div>
										<h2 class="service-tabs-title">Content Management<br>Service</h2>
										<p class="font-300">Las empresas que cuenta con plataformas Web o digitales tienen como principal dificultad generar y mantener el interés de los usuarios por sus contenidos.
										<br><br>
										Nuestro servicio  de soporte y administración de contenidos web para aplicaciones digitales internas o externas, incrementan ampliamente sus posibilidades de éxito.
										</p>
										<div class="tabs-numbers">
											<ul class="tabs-numbers-head row">
												<li class="col-xs-4 active">
													<a href="#dm-1" data-toggle="tab">
														<span class="tabs-numbers-num">1</span>
														<strong class="tabs-numbers-title">Estimación de Flujos</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#dm-3" data-toggle="tab">
														<span class="tabs-numbers-num">2</span>
														<strong class="tabs-numbers-title">Soporte y gestión</strong>
													</a>
												</li>
											</ul>

										</div>
									</li>

									<li class="tab-pane animated fadeInRight" id="tab-analytics">
										<div class="service-tabs-icon text-center visible-xxs">
											<i class="icon-ux-solutions"></i>
										</div>
										<h2 class="service-tabs-title">Analytics<br>Solutions</h2>
										<p class="font-300">Tomar decisiones a nivel de negocio puede ser algo complicado, por eso te brindamos soluciones que te permitan una efectiva toma de decisiones y cumplimiento de los objetivos corporativos.</p>
										<div class="tabs-numbers">
											<ul class="tabs-numbers-head row">
												<li class="col-xs-4 active">
													<a href="#analytics-1" data-toggle="tab">
														<span class="tabs-numbers-num">1</span>
														<strong class="tabs-numbers-title">FPM Planning Analytics</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#analytics-2" data-toggle="tab">
														<span class="tabs-numbers-num">2</span>
														<strong class="tabs-numbers-title">BI Cognos Analytics</strong>
													</a>
												</li>
												<li class="col-xs-4 ">
													<a href="#analytics-3" data-toggle="tab">
														<span class="tabs-numbers-num">3</span>
														<strong class="tabs-numbers-title">PREDICTIVE Watson Analytics</strong>
													</a>
												</li>
											</ul>

										</div>
									</li>

								</ul>

								<!-- head tbs -->
								<ul class="tabs-vertical-icons animated fadeInLeft">
									<li>
										<a href="#tab-ux-solutions" data-title="UX Solutions" class="tab-uxs" data-toggle="tab"
										data-image="<?php bloginfo('template_directory'); ?>/images/servicios/ux_solution.png">
											<i class="icon-ux-solutions"></i>
										</a>
									</li>
									<li>
										<a href="#tab-software-factory" data-title="Software Factory" class="tab-sf" data-toggle="tab"
										data-image="<?php bloginfo('template_directory'); ?>/images/servicios/software_factory.png">
											<i class="icon-software-factory"></i>
										</a>
									</li>
									<li class="active">
										<a href="#tab-digital-marketing" data-title="Marketing Digital" class="tab-dm" data-toggle="tab"
										data-image="<?php bloginfo('template_directory'); ?>/images/servicios/digital_marketing.png">
											<i class="icon-digital-marketing"></i>
										</a>
									</li>
                                    <li>
                                        <a href="#tab-analytics" data-title="Analytics Solutions" class="tab-ai" data-toggle="tab"
                                           data-image="<?php bloginfo('template_directory'); ?>/images/servicios/ibm_solution.png">
                                            <i class="icon-analytics"></i>
                                        </a>
                                    </li>
								</ul>
							</div>
						</div>
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
