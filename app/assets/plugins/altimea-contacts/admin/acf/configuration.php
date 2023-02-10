<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contact-configuration',
		'title' => 'Configuración de contacto',
		'fields' => array (
			array (
				'key' => 'settings_contact_recipient',
				'label' => 'Email Destinatario',
				'name' => 'contact_email_recipient',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'menu-contact-configuration',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
