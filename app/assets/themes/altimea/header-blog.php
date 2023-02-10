<?php
global $post;

// Get Current post Analytics Code
$current_post_analytics = get_field('get_analytics', $post->ID) ? get_field('get_analytics', $post->ID) : false;
$analytics_id = $current_post_analytics ? get_field('analytics_code', $current_post_analytics->ID) : '';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<title><?php
    if(is_home()){
        echo 'Blog Altimea';
    }else{
        wp_title();
    }
     ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/images/favicons/safari-pinned-tab.svg" color="#f05a26">
<meta name="theme-color" content="#f05a26">
<meta name="msapplication-TileColor" content="#f05a26">

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

<?php
/**
 * Load different types of headers attending at its template
 */
if(!is_page_template( 'templates/template-somos-belcorp.php' )) {
	include_once 'parts/header-common.php';
}
?>

<!-- template for description copy: via js-->
<div class="project-description-full js-project-description-full demoxs">
    <button class="close js-close-view-project">&times;</button>
    <div class="project-description-full__content ">
        <div class="project-description-full__content-table">
            <div class="project-description-full__content-cell js-pp-content">
            </div>
        </div>
    </div>
</div>
