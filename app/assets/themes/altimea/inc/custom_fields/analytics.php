<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_google-analytics',
        'title' => 'Google Analytics',
        'fields' => array (
            array (
                'key' => 'field_analytics_code',
                'label' => 'ID Analytics',
                'name' => 'analytics_code',
                'type' => 'text',
                'instructions' => 'Código de seguimiento de Google Analytics',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'analytics',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}




if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_set_analytics',
        'title' => 'ID Analytics',
        'fields' => array (
            array (
                'key' => 'field_get_analytics',
                'label' => 'Código Google Analytics',
                'name' => 'get_analytics',
                'type' => 'post_object',
                'instructions' => 'Seleccione el Código de Google Analytics que se desea usar para esta página. Por defecto se usará General.',
                'required' => 1,
                'post_type' => array (
                    0 => 'analytics',
                ),
                'taxonomy' => array (
                    0 => 'all',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
