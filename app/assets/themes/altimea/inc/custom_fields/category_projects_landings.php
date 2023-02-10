<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_proyectos-ux',
        'title' => 'Proyectos UX',
        'fields' => array (
            array (
                'key' => 'landing_ux_category_projects',
                'label' => 'Categoría de proyectos',
                'name' => 'landing_ux_category_projects',
                'type' => 'taxonomy',
                'required' => 1,
                'taxonomy' => 'category',
                'field_type' => 'select',
                'allow_null' => 0,
                'load_save_terms' => 0,
                'return_format' => 'object',
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'templates/template-service-ux.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'default',
            'hide_on_screen' => array (
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
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
