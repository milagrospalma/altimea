<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.altimea.com
 * @since      1.0.0
 *
 * @package    AltimeaContact
 * @subpackage AltimeaContact/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    AltimeaContact
 * @subpackage AltimeaContact/includes
 * @author     Altimea <apps@altimea.com>
 */
class AltimeaContact {

	public static $slug = 'contacts';
//	public static $post_type = 'altimea-contacts';
	public static $post_type = 'contacts';
	protected $public_class;

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      AltimeaContactLoader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $altimea_contacts    The string used to uniquely identify this plugin.
	 */
	protected $altimea_contacts;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->altimea_contacts = self::$post_type;
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - AltimeaContactLoader. Orchestrates the hooks of the plugin.
	 * - AltimeaContacti18n. Defines internationalization functionality.
	 * - AltimeaContactAdmin. Defines all hooks for the admin area.
	 * - AltimeaContactPublic. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-altimea-contacts-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-altimea-contacts-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-altimea-contacts-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-altimea-contacts-public.php';

		$this->loader = new AltimeaContactLoader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the AltimeaContacti18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new AltimeaContacti18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new AltimeaContactAdmin( $this->get_altimea_contacts(), $this->get_version() );

		$this->loader->add_action( 'init', $plugin_admin, 'register_post_types' );
		$this->loader->add_action( 'init', $plugin_admin, 'include_custom_fields' );
		$this->loader->add_action('manage_edit-contacts_columns', $plugin_admin, 'set_contact_columns');
		$this->loader->add_action('manage_contacts_posts_custom_column', $plugin_admin, 'add_content_contact_columns', 10, 2);
		$this->loader->add_action('admin_menu', $plugin_admin, 'add_my_options_pages');
		$this->loader->add_filter('manage_edit-contacts_sortable_columns', $plugin_admin, 'set_sortable_contact_columns');
		$this->loader->add_filter('acf/location/rule_types', $plugin_admin, 'acf_location_rules_types');
		$this->loader->add_filter('acf/location/rule_values/admin_contacts', $plugin_admin, 'acf_location_rules_values_options_page');
		$this->loader->add_filter('acf/location/rule_match/admin_contacts', $plugin_admin,'rule_match_admin_menu', 10, 3);

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new AltimeaContactPublic( $this->get_altimea_contacts(), $this->get_version() );
		$this->public_class = $plugin_public;

		$this->loader->add_action('wp_ajax_sendContact', $plugin_public, 'sendContact');
		$this->loader->add_action('wp_ajax_nopriv_sendContact', $plugin_public, 'sendContact');
		$this->loader->add_filter( 'wp_mail_content_type', $plugin_public, 'format_send_mail');


		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_altimea_contacts() {
		return $this->altimea_contacts;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    AltimeaContactLoader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	public function get_public_class() {
		return $this->public_class;
	}

}
