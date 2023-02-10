<?php

/* Template Name: Somos */

get_header();

$my_current_lang = apply_filters( 'wpml_current_language', NULL );

if($my_current_lang == 'es') {
    $text404 = "Hola ¿Vienes del futuro? <br>Aun no está lista esta página.";
    $buttonText404 ="Regresar al inicio";
} else {
    $text404 = "Hello, are you from the future? <br>This page is not ready yet.";
    $buttonText404 ="Back Home";
}

?>

<!-- 404 -->
<section class="section-404">
	<div class="container">
		<div class="container-content">
			<div class="text-center">
				<div class="img-404">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="-220 217.3 409 169.6" style="enable-background:new -220 217.3 409 169.6;" xml:space="preserve">
						<style type="text/css">
							.st0{opacity:0.25;}
							.st1{fill:#FFFFFF;}
							.st2{opacity:0.2;fill:none;enable-background:new;}
							.st3{enable-background:new    ;}
						</style>
						<g class="st0">
							<path class="st1" d="M71.5,243.3l-139.5,83.5V356L-1,378.3l59.9-36.8H23.3L71.5,243.3z M54.2,262.1l-17.7,36v0l-41.1,11l-35.6,9.5
								L54.2,262.1z M-22.7,363.4l-38-12.6V336v0L-22.7,363.4z M33.2,348.7l-34.5,21.2l-1.4-1L-56,330.4l45.7-12.2l42.7-11.4l-20.6,42
								H33.2z"/>
						</g>
						<path class="st2" d="z"/>
						<g class="st3">
							<path class="st1" d="M-89.4,363.4h-17.5v19.9h-26.5v-19.9h-78.8l105.3-140.1v117.7h17.5V363.4z M-133.4,340.9v-41.7l-31.5,41.7
								H-133.4z"/>
						</g>
						<g>
							<g class="st3">
								<path class="st1" d="M187.6,363.4h-17.5v19.9h-26.5v-19.9H64.8l105.3-140.1v117.7h17.5V363.4z M143.6,340.9v-41.7l-31.5,41.7
									H143.6z"/>
							</g>
						</g>
					</svg>
				</div>
				<p class="text-404">
                    <?php echo $text404?>
				</p>
				<div class="mt-30">
					<a href="<?php echo get_home_url(); ?>" class="btn btn-line btn-lg">
						<span>&larr;</span> <?php echo $buttonText404?>
					</a>
				</div>
			</div>
		</div>	
	</div>	
</section>

<?php
get_footer();
?>