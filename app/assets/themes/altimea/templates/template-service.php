<?php

/* Template Name: Service (New) */

get_header();
$contact = get_service_contact();
?>

<main class="altm-service">

	<section class="contact posr">
		<div class="group-bg-img-overlay">
			<div class="bg-img" style="background-image: url('<?php echo esc_url($contact['background']); ?>');"></div>
			<div class="bg-overlay"></div>
		</div>
		<div class="container posab">
			<div class="row">
				<div class="col-xs-12">
					<div class="contact-content">
						<h3 class="text-center"><?php echo $contact['title']; ?></h3>
						<p class="text-center"><?php echo $contact['description']; ?></p>
						<div class="altm-btn outline-secondary js-contact-home"><?php echo $contact['button']; ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
