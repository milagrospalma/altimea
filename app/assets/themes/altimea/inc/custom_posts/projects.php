<?php
/**
 * Method to create custom post type that was used in the form.
 */
add_action('init', 'create_post_type_projects');
function create_post_type_projects()
{
    $labels = [
        'labels' => [
            'name' => __('Proyectos'),
            'singular_name' => __('Proyecto'),
        ],
        'public' => true,
        'has_archive' => false,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'hierarchical'       => false,
        'show_in_admin_bar' => false,
        'menu_icon' => 'dashicons-feedback',
        'supports' => ['title','editor','page-attributes', 'custom-fields'],
        'taxonomies'  => array( 'category' ),
    ];
    register_post_type('projects', $labels);
}