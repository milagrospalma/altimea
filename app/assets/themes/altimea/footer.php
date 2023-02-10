<?php
$footer = get_footer_content();
?>
<footer class="alt-footer">
    <div class="container">
        <div class="row mt-40 mb-30">
            <div class="col-xs-12 footer-content">
                <div class="about-company">
                    <a class="logo js-link-logo" href="#home">
                        <svg width="118" height="118" viewBox="0 0 118 118" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M92.0252 54.5472L95.5503 47.1258L118 0L0 73.1006V98.5189L56.4025 118L107.053 85.9025H77.1824L92.0252 54.5472ZM103.157 16.6981L87.5723 49.3522L22.2641 66.6069L103.157 16.6981ZM6.30818 94.066V81.0786L38.5912 105.198L6.30818 94.066ZM85.717 92.0252L56.4025 110.764L10.2044 76.2547L84.0472 56.7736L71.4308 83.305L67.1635 92.2107H85.717V92.0252Z" fill="white"/>
                        </svg>
                    </a>
                    <div>
                        <?php 
                        if( !empty($footer['title']) )
                        {
                            ?>
                            <p class="alt-text title"><?php echo $footer['title']; ?></p>
                            <?php
                        }
                        ?>
                        <?php 
                        if( !empty($footer['description']) )
                        {
                            ?>
                            <p class="alt-text description"><?php echo $footer['description']; ?></p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="contact">
                    <div class="jobs">
                        <p class="alt-text title"><?php echo $footer['contact']['footer_contact_title']; ?></p>
                        <a class="alt-text description" href="<?php echo $footer['contact']['footer_contact_link']; ?>" target="_blank"><?php echo $footer['contact']['footer_contact_description']; ?></a>
                    </div>
                    <div class="social-media">
                        <p class="alt-text title"><?php echo $footer['contact']['footer_contact_social']; ?></p>
                        <ul>
                            <li class="social-media--group">
                                <a class="social-media--link" href="https://www.facebook.com/altimea/" target="_blank">
                                    <div class="social-media--logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/facebook-logo-1.svg" alt="Facebook" class="img-responsive">
                                    </div>
                                </a>
                            </li>
                            <li class="social-media--group">
                                <a class="social-media--link" href="https://www.linkedin.com/company/altimea/" target="_blank">
                                    <div class="social-media--logo">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/linkedin-logo-1.svg" alt="LinkedIn" class="img-responsive">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p class="alt-copyright">© 2005 - <?php echo date('Y') ;?> Altimea SAC. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<div class="lock-screem normal-scroll">
	<div class="lock-screem-table">
		<div class="lock-screem-cell">
			<div class="lock-screem-img">
				<img src="<?php bloginfo('template_directory'); ?>/images/altimea-white.png" alt="Altimea" class="img-responsive">
			</div>
		</div>
	</div>
</div>

<div class="backdrop"></div>
<div class="overlayy"></div>
<div class="spinner"></div>

<?php wp_footer(); ?>

<!-- Google Code para etiquetas de remarketing -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1032730647;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="Google Conversion" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1032730647/?guid=ON&amp;script=0"/>
    </div>
</noscript>

</body>
</html>
