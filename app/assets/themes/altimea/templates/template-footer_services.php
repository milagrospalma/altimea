<?php
    /* Template Name: Footer - Contact Servicios */

wp_reset_postdata()
?>

<div class="container">
    <div class="alt-softwf__flex">
        <div class="alt-softwf__flex__col">
            <div class="wow fadeInUp posr">
                <button type="button" class="close" data-toggle="active-contact">&times;</button>
                <h2 class="alt-title-general" data-toggle="active-contact"><?php echo get_field('title_contacto_footer'); ?></h2>
                <p class="alt-excert-general"><?php echo get_field('contacto_text1'); ?></p>
            </div>
            <div class="service-contact-call wow fadeIn atl-Deskt" data-wow-delay="1s">
                <p class="alt-excert-general mt-25"><?php echo get_field('contacto_text_2'); ?></p>
                <div class="row service-contact-user">
                    <div class="service-contact-user-caption col-md-6 col-sm-12 col-xs-12">
                        <h3 class="service-contact-user-caption__title">Eric Monnier</h3>
                        <ul class="service-contact-user-caption__info">
                            <li>
                                <a href="mailto:eric@altimea.com">eric@altimea.com</a>
                            </li>
                            <li>
                                <a href="tel:+51987561654">+51 987 561 654</a>
                            </li>
                        </ul>
                    </div>

                    <div class="service-contact-user-caption col-md-6 col-sm-12 col-xs-12">
                        <h3 class="service-contact-user-caption__title">Carlos García</h3>
                        <ul class="service-contact-user-caption__info">
                            <li>
                                <a href="mailto:carlos.garcia@altimea.com">carlos.garcia@altimea.com</a>
                            </li>
                            <li>
                                <a href="tel:+51985561707">+51 985 561 707</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="alt-softwf__flex__col">
            <div class="service-contact-form text-center wow fadeInUp" data-wow-delay="0.5s">
                <form id="form-contact-service" class="alt-form-contact" action="" method="POST" role="form">
                    <div class="form-contact-body">
                        <div class="row">
                            <div class="alert alert-small alert-msg-send-form"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo get_field('placehoder_nombre'); ?>" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="<?php echo get_field('placeholder_telefono'); ?>" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo get_field('placeholder_correo'); ?>" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="alert alert-danger alert-small alert-validate">
                                <?php echo get_field('service_contact_form_mandatory_fields_error_message')?>
                            </div>
                        </div>
                        <div class="mt-20">
                            <input type="hidden" name="origin" value="short contact form send from service page: <?php echo wp_title() ?>">
                            <input type="hidden" name="action" value="sendContact">
                            <button type="submit" class="btn btn-primary upper alt-btn alt-btn--form">
                                <?php echo get_field('buton_enviar'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16">
                                    <g>
                                        <g>
                                            <path fill="#002c6b" d="M.494 9.598h17.63l-6.668 6.398h4.714l8.336-7.997L16.17.002h-4.714L18.124 6.4H.494z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="service-contact-call text-center wow fadeIn atl-Mob" data-wow-delay="1s">
                <p class="alt-excert-general"><?php echo get_field('contacto_text_2'); ?></p>
                <div class="service-contact-user">
                    <div class="service-contact-user-caption">
                        <h3 class="service-contact-user-caption__title">Eric Monnier</h3>
                        <ul class="service-contact-user-caption__info">
                            <li>
                                <a href="mailto:eric@altimea.com">eric@altimea.com</a>
                            </li>
                            <li>
                                <a href="tel:+51987561654">+51 987 561 654</a>
                            </li>
                        </ul>
                    </div>
                    <div class="service-contact-user-caption">
                        <h3 class="service-contact-user-caption__title">Carlos García</h3>
                        <ul class="service-contact-user-caption__info">
                            <li>
                                <a href="mailto:carlos.garcia@altimea.com">carlos.garcia@altimea.com</a>
                            </li>
                            <li>
                                <a href="tel:+51985561707">+51 985 561 707</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
