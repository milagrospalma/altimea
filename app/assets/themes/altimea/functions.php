<?php
// ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if (is_readable(trailingslashit(get_stylesheet_directory()).'functions-config.php')) {
    require_once trailingslashit(get_stylesheet_directory()).'functions-config.php';
}

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once trailingslashit(get_stylesheet_directory()).'functions-config-defaults.php';

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once trailingslashit(get_stylesheet_directory()).'inc/assets.php';

// loading custom post type
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_posts/projects.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_posts/analytics.php';

// loading custom fields
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/category_projects_landings.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/analytics.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/acf_settings.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/acf_homepage.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/acf_header.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/acf_footer.php';
require_once trailingslashit(get_stylesheet_directory()).'inc/custom_fields/acf_service.php';


// Only the bare minimum to get the theme up and running
function altimea_setup()
{

  // Language loading
  load_theme_textdomain('altimea', trailingslashit(get_template_directory()).'languages');

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support('html5', array('search-form', 'gallery'));

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
    if (!isset($content_width) || !is_int($content_width)) {
        $content_width = (int) 960;
    }
}
add_action('after_setup_theme', 'altimea_setup', 11);


// Get Google Maps link
function getMapsLink()
{
	global $linkMaps;

	return $linkMaps;
}

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}


function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function get_footer_content() {
    $title = '';
    $description = '';
    $contact = [];
    if( function_exists('get_field')) {
        $title = get_field('alt_footer_title', 'options');
        $description = get_field('alt_footer_description', 'options');
        $contact = get_field('alt_footer_contact', 'options');
    }
    return [
        "title" => $title,
        "description" => $description,
        "contact" => $contact
    ];
}

function get_menu_content() {
    $menu = [];
    if( function_exists('get_field')) {
        $menu = get_field('alt_header_menu', 'options');
    }
    return $menu;
}

function get_contact_form() {
    $title = '';
    $description = '';
    $labelFullname = '';
    $labelCompany = '';
    $labelEmail = '';
    $labelPhone = '';
    $labelMessage = '';
    $policy = '';
    $button = '';
    $errorMessage = '';
    if( function_exists('get_field')) {
        $title = get_field('alt_cf_title', 'options');
        $description = get_field('alt_cf_description', 'options');
        $labelFullname = get_field('alt_cf_fullname', 'options');
        $labelCompany = get_field('alt_cf_company', 'options');
        $labelEmail = get_field('alt_cf_email', 'options');
        $labelPhone = get_field('alt_cf_telephone', 'options');
        $labelMessage = get_field('alt_cf_message', 'options');
        $policy = get_field('alt_cf_policy', 'options');
        $button = get_field('alt_cf_button', 'options');
        $errorMessage = get_field('alt_cf_val_error', 'options');
    }
    return [
        "title" => $title,
        "description" => $description,
        "fullname" => $labelFullname,
        "company" => $labelCompany,
        "email" => $labelEmail,
        "phone" => $labelPhone,
        "message" => $labelMessage,
        "policy" => $policy,
        "button" => $button,
        "errorMessage" => $errorMessage
    ];
}

function get_service_contact() {
    $bgImg = [];
    $title = '';
    $description = '';
    $button = '';
    if( function_exists('get_field')) {
        $bgImg = get_field('alt_serv_contact_background', 'options');
        $title = get_field('alt_serv_contact_title', 'options');
        $description = get_field('alt_serv_contact_description', 'options');
        $button = get_field('alt_serv_contact_button', 'options');
    }
    return [
        "background" => $bgImg,
        "title" => $title,
        "description" => $description,
        "button" => $button
    ];
}