<?php
global $nav_Dark;
global $post;

// Get Current post Analytics Code
if(!is_404()) {
    $current_post_analytics = get_field('get_analytics', $post->ID) ? get_field('get_analytics', $post->ID) : false;
    $analytics_id = $current_post_analytics ? get_field('analytics_code', $current_post_analytics->ID) : '';
} else {
    $analytics_id = "G-457SPNH6ZG";
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<title><?php echo is_404() ? "Altimea: We are Digital !" : the_title() ; ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/safari-pinned-tab.svg" color="#002C6B">
<meta name="theme-color" content="#002C6B">
<meta name="msapplication-TileColor" content="#002C6B">

<!-- fira sans -->
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,500,300' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- preload images services -->
<script>
var imgDm = '<?php bloginfo('template_directory'); ?>/images/servicios/digital_marketing.png';
var imgSf = '<?php bloginfo('template_directory'); ?>/images/servicios/software_factory.png';
var imgUx = '<?php bloginfo('template_directory'); ?>/images/servicios/ux_solution.png';
var imgIa = '<?php bloginfo('template_directory'); ?>/images/servicios/ibm_solution.png';
</script>

<!-- Heatmap.me -->
<script>
    (function(h,e,a,t,m,p) {
        m=e.createElement(a);m.async=!0;m.src=t;
        p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
    })(window,document,'script','https://u.heatmap.it/log.js');
</script>
<!-- Ends Heatmap.me -->

<!-- Facebook Pixel Code -->
<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1275627052476727');
        fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1"src="https://www.facebook.com/tr?id=1275627052476727&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


</head>

<body <?php body_class(); ?>>
<!-- Google Analytics -->
<!-- Google tag (gtag.js) -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $analytics_id; ?>', 'auto');
    ga('send', 'pageview');
</script>
<!-- Ends Google Analytics -->

<!--[if lt IE 9]>
  <div class="browsehappy">
	<p>
		Estás utilizando un navegador <strong>incompatible</strong>. <br>
		Por favor <a href="http://browsehappy.com/">Actualiza tu navegador</a> para mejorar tu experiencia y seguridad. <br><br>Navegadores recomendados <br>
		<a href="http://browsehappy.com/">Google Chrome</a>, <a href="http://browsehappy.com/">Mozilla Firefox</a>
	</p>
</div>
<![endif]-->

<!-- template for description copy: via js-->
<div class="project-description-full js-project-description-full">
    <button class="close js-close-view-project">&times;</button>
    <div class="project-description-full__content ">
        <div class="project-description-full__content-table">
            <div class="project-description-full__content-cell js-pp-content">
            </div>
        </div>
    </div>
</div>

<?php
$footer = get_footer_content();
$form = get_contact_form();
?>

    <header class="altm-header <?php if($nav_Dark){ echo "header-dark";} ;?>">
		<div class="alt-header--content">
            <div class="navbar-toggle-menu" data-toggle="open-menu">
				<span class="btn-menu <?php if(is_404()) echo 'hidden' ?>">
					<i class="btn-menu-bar"></i>
					<i class="btn-menu-bar"></i>
					<i class="btn-menu-bar"></i>
				</span>
            </div>
            <a class="logo js-link-logo" href="#home">
                <svg width="187" height="42" viewBox="0 0 187 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.4513 19.2031L33.6923 16.5905L41.5957 0L0.0541992 25.7348V34.6832L19.9105 41.5415L37.742 30.2417H27.226L32.4513 19.2031ZM36.3703 5.87851L30.8837 17.3743L7.89221 23.4487L36.3703 5.87851ZM2.27497 33.1156V28.5434L13.6401 37.0346L2.27497 33.1156ZM30.2306 32.3971L19.9105 38.9941L3.64662 26.8452L29.6427 19.9869L25.2012 29.3272L23.6989 32.4624H30.2306V32.3971ZM57.4676 11.2998L48.1927 30.8948H51.1319L52.2423 28.3475H62.497L63.7381 30.8948H66.6773L57.4676 11.2998ZM53.2221 25.8654L57.4676 17.2436L61.452 25.8654H53.2221ZM77.7159 11.757H74.9725V30.8948H83.4637V28.4128H77.7159V11.757ZM92.3468 14.2391L96.2658 14.3044V30.8948H99.0091V14.3044L102.863 14.2391V11.757H92.4121L92.3468 14.2391ZM112.007 11.757H114.75V30.8948H112.007V11.757ZM124.091 11.4958V31.0255H127.095V19.8563L133.3 26.5839L139.44 19.8563L139.506 31.0255H142.314V11.6264L133.17 22.2077L124.091 11.4958ZM154.202 22.1424H159.558V19.3338H154.202V14.631H160.015L159.95 11.757H151.459V30.8948H159.95L160.015 27.8903H154.202V22.1424ZM177.063 11.2998L167.788 30.8948H170.792L171.903 28.3475H182.157L183.398 30.8948H186.338L177.063 11.2998ZM172.817 25.8654L177.063 17.2436L181.047 25.8654H172.817Z" fill="white"/>
                </svg>
            </a>
            <div class="general">
                <!-- menu desktop -->
                <nav class="<?php if(is_404()) echo 'hidden' ?>">
                    <?php include 'parts/header-common.php'; ?>
                </nav>
                <div class="common-options">
                    <a href="javascript:void(0)" class="navbar-toggle-sidenav animated <?php if(is_404()) echo 'hidden' ?>" data-toggle="open-sidenav">
                        <svg width="49" height="24" viewBox="0 0 49 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="16" y="1" width="32" height="22" stroke="white" stroke-width="2"/>
                            <line x1="16.4903" y1="5.12842" x2="32.4903" y2="14.1284" stroke="white" stroke-width="2"/>
                            <line x1="47.4492" y1="4.77667" x2="31.5511" y2="13.9555" stroke="white" stroke-width="2"/>
                            <path d="M6 18L12 18L12 20L6 20L6 18ZM7.86805e-07 11L12 11L12 13L6.1196e-07 13L7.86805e-07 11ZM6 4L12 4L12 6L6 6L6 4Z" fill="white"/>
                        </svg>
                    </a>
                    <div class="wpml-floating-language-switcher">
                        <?php do_action('wpml_add_language_selector'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="menu-links" class="sidenav-menu-links normal-scroll">
            <svg class="sidenav-menu-logo hidden" width="344" height="344" viewBox="0 0 344 344" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M268.447 158.965L278.636 137.502L344 0L0 212.893V287.308L164.981 344L312.781 250.128H225.088L268.447 158.965ZM301.129 47.8576L255.656 143.519L65.0928 193.923L301.129 47.8576ZM18.1566 274.354V236.307L112.463 306.711L18.1566 274.354ZM250.29 268.284L164.385 322.862L29.4842 222.161L245.467 165.035L208.72 242.377L196.362 268.338H225.088H250.29V268.284Z" fill="#002C6B" fill-opacity="0.05"/>
            </svg>
            <button type="button" class="close" data-toggle="close-menu">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 12.1293L2.54753 19.5817C2.26869 19.8606 1.91381 20 1.48289 20C1.05196 20 0.697084 19.8606 0.41825 19.5817C0.139416 19.3029 0 18.948 0 18.5171C0 18.0862 0.139416 17.7313 0.41825 17.4525L7.87072 10L0.41825 2.54753C0.139416 2.26869 0 1.91381 0 1.48289C0 1.05196 0.139416 0.697084 0.41825 0.41825C0.697084 0.139416 1.05196 0 1.48289 0C1.91381 0 2.26869 0.139416 2.54753 0.41825L10 7.87072L17.4525 0.41825C17.7313 0.139416 18.0862 0 18.5171 0C18.948 0 19.3029 0.139416 19.5817 0.41825C19.8606 0.697084 20 1.05196 20 1.48289C20 1.91381 19.8606 2.26869 19.5817 2.54753L12.1293 10L19.5817 17.4525C19.8606 17.7313 20 18.0862 20 18.5171C20 18.948 19.8606 19.3029 19.5817 19.5817C19.3029 19.8606 18.948 20 18.5171 20C18.0862 20 17.7313 19.8606 17.4525 19.5817L10 12.1293Z" fill="#002C6B"/>
                </svg>
            </button>
            <!-- menu mobile -->
            <nav class="js-mob-menu">
                <?php include 'parts/header-common.php'; ?>
            </nav>
            <div class="sidenav-menu-footer">
                <div class="jobs">
                    <p class="alt-text title"><?php echo $footer['contact']['footer_contact_title']; ?></p>
                    <a class="alt-text description" href="<?php echo $footer['contact']['footer_contact_link']; ?>" target="_blank"><?php echo $footer['contact']['footer_contact_description']; ?></a>
                </div>
                <div class="social-media">
                    <ul>
                        <li class="social-media--group">
                            <a class="social-media--link" href="https://www.facebook.com/altimea/" target="_blank">
                                <div class="social-media--logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/facebook-logo.svg" alt="Facebook" class="img-responsive">
                                </div>
                            </a>
                        </li>
                        <li class="social-media--group">
                            <a class="social-media--link" href="https://www.linkedin.com/company/altimea/" target="_blank">
                                <div class="social-media--logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/linkedin-logo.svg" alt="LinkedIn" class="img-responsive">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- contact form -->
        <div class="sidenav normal-scroll scroll-contact sidenav-form">
            <button type="button" class="close" data-toggle="close-sidenav">&times;</button>
            <!-- form -->
            <div class="sidenav-form-contact">
                <form id="form-contact" action="" method="POST" role="form">
                    <div class="form-contact">
                        <div class="form-contact--text">
                            <svg width="230" height="52" viewBox="0 0 230 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40 24.0377L41.5323 20.7673L51.2903 0L0 32.2138V43.4151L24.5161 52L46.5323 37.8553H33.5484L40 24.0377ZM44.8387 7.35849L38.0645 21.7484L9.67742 29.3522L44.8387 7.35849ZM2.74194 41.4528V35.7296L16.7742 46.3585L2.74194 41.4528ZM37.2581 40.5535L24.5161 48.8113L4.43548 33.6038L36.5323 25.0189L31.0484 36.7107L29.1935 40.6352H37.2581V40.5535ZM70.8871 14.1447L59.4355 38.673H63.0645L64.4355 35.4843H77.0968L78.629 38.673H82.2581L70.8871 14.1447ZM65.6451 32.3774L70.8871 21.5849L75.8064 32.3774H65.6451ZM95.8871 14.717H92.5V38.673H102.984V35.566H95.8871V14.717ZM113.952 17.8239L118.79 17.9057V38.673H122.177V17.9057L126.935 17.8239V14.717H114.032L113.952 17.8239ZM138.226 14.717H141.613V38.673H138.226V14.717ZM153.145 14.3899V38.8365H156.855V24.8553L164.516 33.2767L172.097 24.8553L172.177 38.8365H175.645V14.5535L164.355 27.7987L153.145 14.3899ZM190.323 27.717H196.935V24.2013H190.323V18.3145H197.5L197.419 14.717H186.935V38.673H197.419L197.5 34.9119H190.323V27.717ZM218.548 14.1447L207.097 38.673H210.806L212.177 35.4843H224.839L226.371 38.673H230L218.548 14.1447ZM213.306 32.3774L218.548 21.5849L223.468 32.3774H213.306Z" fill="white"/>
                            </svg>
                            <h3 class="title"><?php echo $form['title']; ?></h3>
                            <div class="line"></div>
                            <div class="description">
                                <?php echo $form['description']; ?>
                            </div>
                        </div>
                        <div class="form-contact--form">
                            <div class="form-container">
                                <div class="alert alert-small alert-msg-send-form"></div>
                                <div class="alert alert-danger alert-small alert-validate"><?php echo $form['errorMessage']; ?></div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo $form['fullname']; ?></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo $form['company']; ?></label>
                                    <input type="text" class="form-control" name="business">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo $form['email']; ?></label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo $form['phone']; ?></label>
                                    <input type="tel" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo $form['message']; ?></label>
                                    <div class="form-control message">
                                        <textarea name="message" id="message" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group fg-policy hidden">
                                    <input type="checkbox" id="checkbox-policy">
                                    <label class="form-label" for="checkbox-policy"><?php echo $form['policy']; ?></label>
                                </div>
                                <div class="mt-20">
                                    <input type="hidden" name="origin" value="contact form">
                                    <input type="hidden" name="action" value="sendContact">
                                    <button type="submit" class="form-button"><?php echo $form['button']; ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-contact--social social-media">
                            <p><?php echo $footer['contact']['footer_contact_social']; ?></p>
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
                </form>
            </div>
        </div>
	</header>