<?php
// ==== ASSETS ==== //

// Now that you have efficiently generated scripts and stylesheets for your theme, how should they be integrated?
// This file walks you through the approach I use but you are free to do this any way you like

// Enqueue front-end scripts and styles
function altimea_enqueue_scripts() {

    if(is_page_template('templates/template-somos-belcorp.php')) {
        $script_name = "-somos-belcorp";
    }
    
    $script_name = '';                // Empty by default, may be populated by conditionals below; this is used to generate the script filename
    $script_vars = array();           // An empty array that can be filled with variables to send to front-end scripts
    $script_handle = 'altimea';         // A generic script handle used internally by WordPress
    $ns = 'altimea';                  // Namespace for scripts; this should match what is specified in your `gulpconfig.js` (and it's safe to leave alone)

    // Figure out which script bundle to load based on various options set in `src/functions-config-defaults.php`
    // Note: bundles require fewer HTTP requests at the expense of addition caching hits when different scripts are requested on different pages of your site
    // You could also load one main bundle on every page with supplementary scripts as needed (e.g. for commenting or a contact page); it's up to you!


    // Plugins bundle
    $script_name = '-plugins';
    $handle_plugin = $script_handle . $script_name;
    $file_name_out_ext = "{$ns}{$script_name}";
    $file_name = "{$file_name_out_ext}.js";
    $plugins_hash_md5 =  file_exists( get_stylesheet_directory() . "/js/{$file_name}" ) === true ? substr(md5_file(get_stylesheet_directory() . "/js/{$file_name}"), 0, 10) : $file_name;
    $script_file_name = WP_ENV == 'dev' ? "{$file_name}" : "{$file_name_out_ext}_{$plugins_hash_md5}.js";

    // add if file exist
    if ( file_exists( get_stylesheet_directory() . "/js/{$script_file_name}" ) === true ) {
        $theme_file_handler = get_stylesheet_directory_uri() . "/js/{$script_file_name}";
        wp_enqueue_script($handle_plugin, $theme_file_handler, array('jquery'), false, true);
    }

    // Load theme-specific JavaScript bundles with versioning based on last modified time; http://www.ericmmartin.com/5-tips-for-using-jquery-with-wordpress/
    // The handle is the same for each bundle since we're only loading one script; if you load others be sure to provide a new handle
    $script_name = '-core';
    $file_name_out_ext = "{$ns}{$script_name}";
    $file_name = "{$file_name_out_ext}.js";
    $script_hash_md5 = substr(md5_file(get_stylesheet_directory() . "/js/{$file_name}"), 0, 10);
    $script_file_name = WP_ENV == 'dev' ? "{$file_name}" : "{$file_name_out_ext}_{$script_hash_md5}.js";

    // add if file exist
    if ( file_exists( get_stylesheet_directory() . "/js/{$script_file_name}" ) === true ) {
        $theme_file_handler = get_stylesheet_directory_uri() . "/js/{$script_file_name}";
        $dependence = file_exists( get_stylesheet_directory() . "/js/{$handle_plugin}") ? $handle_plugin : 'jquery';
        wp_enqueue_script( $script_handle . $script_name, $theme_file_handler, array($dependence), false, true);
    }

    // Pass variables to JavaScript at runtime; see: http://codex.wordpress.org/Function_Reference/wp_localize_script
    $script_vars = apply_filters('theme_script_vars', $script_vars);

    if (!empty($script_vars)) {
        $dependence = file_exists( get_stylesheet_directory() . "/js/{$handle_plugin}") ? $handle_plugin : $file_name_out_ext;
        wp_localize_script($dependence, 'jsVars', $script_vars);
    }

    // Load Google Maps API with its key
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyATE1YO92zLKxWHJWi61UOaepXWYyXHtYA&callback=initMaps', array(), false, true);

    // Load scripts and styles only when loading a Blog page
    if(is_blog()){
        // Enqueue Styles
        wp_enqueue_style( 'blog-main', get_stylesheet_directory_uri() . '/external_developments_assets/blog/css/main.css' );
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/external_developments_assets/blog/css/font-awesome-4.2.0/css/font-awesome.css' );
        wp_enqueue_style( 'blog-responsive', get_stylesheet_directory_uri() . '/external_developments_assets/blog/css/768.css' );
        wp_enqueue_style('normalize' , get_stylesheet_directory_uri() . '/external_developments_assets/blog/css/normalize.css');
        wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/owl.carousel/owl.carousel.css');
        wp_enqueue_style('blog-flexslider' , get_stylesheet_directory_uri(). '/external_developments_assets/blog/js/flexslider/flexslider.css');


        // Enqueue Scripts
        wp_enqueue_script( 'blog-js-validate', get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/jquery.validate.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'blog-js-fitvids', get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/jquery.fitvids.js', array('jquery'), null, true );
        wp_enqueue_script( 'blog-flexslider' , get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/flexslider/jquery.flexslider-min.js', array('jquery'), null, true );
        wp_enqueue_script('blog-socialstream' , get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/socialstream.jquery.js', array('jquery'), null, true );
        wp_enqueue_script('blog-owl.carousel' , get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/owl.carousel/owl.carousel.js', array('jquery'), null, true );
        wp_enqueue_script('social.js' , get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/social.js', array('jquery'), null, true );        
        wp_enqueue_script( 'blog-js-main', get_stylesheet_directory_uri() . '/external_developments_assets/blog/js/main.js', array('jquery'), null, true );

    }

    // Register and enqueue our main stylesheet with versioning based on last modified time
    $style_hash_md5 = substr(md5_file(get_stylesheet_directory() . '/style.css'), 0, 10);
    $style_file_name = WP_ENV == 'dev' ? "style.css" : "style_{$style_hash_md5}.css";

    // add if file exist
    if ( file_exists( get_stylesheet_directory() . "/$style_file_name" ) === true ) {
        $theme_style_file_handler = get_stylesheet_directory_uri() . "/{$style_file_name}";
        wp_register_style('theme-style', $theme_style_file_handler, $dependencies = array(), false);
        wp_enqueue_style('theme-style');
    }

}
add_action( 'wp_enqueue_scripts', 'altimea_enqueue_scripts' );

// Provision the front-end with the appropriate script variables
function altimea_update_script_vars( $script_vars = array() ) {

    // Non-destructively merge script variables if a particular condition is met (e.g. `is_archive()` or whatever); useful for managing many different kinds of script variables
    return array_merge( $script_vars, array(
        'baseUrl'    => get_bloginfo( 'url' ),
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'mapsMarker' => get_bloginfo( 'template_directory' ) . '/images/altimea-o.png',
        'country'    => 'PE'
    ) );
}
add_filter( 'theme_script_vars', 'altimea_update_script_vars' );

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

add_theme_support( 'post-thumbnails' ); 

function add_editor_acf_settings_capability( $path ) {
 
    $roles = ['administrator', 'editor'];
    $current_user = wp_get_current_user();
    if( !empty($current_user) && !empty($current_user->roles) && in_array( $current_user->roles[0], $roles ) ) {
      return $current_user->roles[0]; 
    }
    return 'administrator';
 }
 
 add_filter('acf/settings/capability', 'add_editor_acf_settings_capability');
 

