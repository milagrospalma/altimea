<?php
/**
 * Method to create custom post type for Google Analytics ID's.
 */
add_action('init', 'create_post_type_analytics');

function create_post_type_analytics()
{
    $labels = [
        'labels' => [
            'name' => __('Google Analytics'),
            'singular_name' => __('Google Analytics'),
        ],
        'public' => true,
        'has_archive' => false,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'hierarchical'       => false,
        'show_in_admin_bar' => false,
        'menu_icon' => 'dashicons-chart-area',
        'supports' => ['title','editor','page-attributes'],
    ];
    register_post_type('analytics', $labels);
}
