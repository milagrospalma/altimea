<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.altimea.com
 * @since      1.0.0
 *
 * @package    AltimeaContact
 * @subpackage AltimeaContact/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    AltimeaContact
 * @subpackage AltimeaContact/admin
 * @author     Altimea <apps@altimea.com>
 */
class AltimeaContactAdmin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $altimea_contacts    The ID of this plugin.
	 */
	private $altimea_contacts;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $altimea_contacts       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $altimea_contacts, $version ) {

		$this->altimea_contacts = $altimea_contacts;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in AltimeaContactLoader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The AltimeaContactLoader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->altimea_contacts, plugin_dir_url( __FILE__ ) . 'css/altimea-contacts-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in AltimeaContactLoader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The AltimeaContactLoader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->altimea_contacts, plugin_dir_url( __FILE__ ) . 'js/altimea-contacts-admin.js', array( 'jquery' ), $this->version, false );

	}

	public static function register_post_types() {
		self::post_type_contacts();
	}

	public static function post_type_contacts() {
		$labels = [
			'labels' => [
				'name' => __('Contactos'),
				'singular_name' => __('Contacto'),
			],
			'public' => true,
			'has_archive' => false,
			'show_in_menu' => true,
			'show_in_nav_menus' => false,
			'hierarchical'       => false,
			'show_in_admin_bar' => false,
			'menu_icon' => 'dashicons-email',
			'supports' => ['title','editor','page-attributes'],
		];
		register_post_type(AltimeaContact::$post_type, $labels);
	}

	public function add_my_options_pages(){
		if( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page(array(
				'page_title' => __('Configuración'),
				'menu_title' => __('Configuración'),
				'menu_slug' => 'menu-contact-configuration',
				'parent_slug' => 'edit.php?post_type=' . AltimeaContact::$post_type
			));
		}
	}

	public function include_custom_fields() {
		include_once __DIR__ . '/acf/configuration.php';
		include_once __DIR__ . '/acf/contacts.php';
	}

	/**
	 * Define which columns to show
	 * @param [array] $columns
	 */
	public function set_contact_columns( $columns )
	{
		$columns = [
			'cb' => '<input type="checkbox" />',
			'title' => __('Nombre'),
			'email' => __('Email'),
			'business' => __('Empresa'),
			'origin' => __('Origen de registro'),
			'date' => __('Date'),
		];
		return $columns;
	}

	/**
	 * Add the content of our custom columns
	 * @param [string] $column
	 * @param [integer] $post_id
	 */
	public function add_content_contact_columns($column, $post_id)
	{
		switch ($column) {
			case 'email':
				echo get_field('contact_email', $post_id);
				break;
			case 'business':
				echo get_field('contact_business', $post_id);
				break;
			case 'origin':
				echo get_field('contact_origin', $post_id);
				break;
		}
	}

	/**
	 * Mark our custom columns as sortable
	 * @param [array] $columns
	 */
	public function set_sortable_contact_columns($columns)
	{
		$columns['email'] = 'email';
		$columns['business'] = 'business';
		$columns['origin'] = 'origin';
		return $columns;
	}

	public function acf_location_rules_types($choices) {
		$choices['Contactos']['admin_contacts'] = 'Contactos';

		return $choices;
	}

	public function acf_location_rules_values_options_page($choices) {
		$choices = array();
		$choices['menu-contact-configuration'] = 'Contactos - Configuración';

		return $choices;
	}

	public function rule_match_admin_menu($match, $rule, $options){
		global $plugin_page;

		if (substr($rule['value'], 0, 13) == 'menu-contact-') {
			if ($rule['operator'] == '==') {
				$match = ($plugin_page === $rule['value']);
			} else if ($rule['operator'] == '!=') {
				$match = ($plugin_page !== $rule['value']);
			}

		}

		return $match;
	}

}
