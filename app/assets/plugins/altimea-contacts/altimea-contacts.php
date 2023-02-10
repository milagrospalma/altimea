<?php

/**
 * WordPress plugin generator by Altimea
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.altimea.com
 * @since             1.0.0
 * @package           AltimeaContact
 *
 * @wordpress-plugin
 * Plugin Name:       Altimea Contacts
 * Plugin URI:        http://www.altimea.com
 * Description:       Plugin developed by Altimea for their beloved client
 * Version:           1.0.0
 * Author:            Altimea
 * Author URI:        http://www.altimea.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       altimea-contacts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'ALTIMEA_CONTACTS_FILE' ) ) {
	define( 'ALTIMEA_CONTACTS_FILE', __FILE__ );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-altimea-contacts-activator.php
 * @param Boolean $networkwide status multisite
 * @return Void
 */
function activate_altimea_contacts($networkwide) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altimea-contacts-activator.php';
	AltimeaContactActivator::activate($networkwide);
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-altimea-contacts-deactivator.php
 * @param Boolean $networkwide status multisite
 * @return Void
 */
function deactivate_altimea_contacts($networkwide) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altimea-contacts-deactivator.php';
	AltimeaContactDeactivator::deactivate($networkwide);
}

register_activation_hook( __FILE__, 'activate_altimea_contacts' );
register_deactivation_hook( __FILE__, 'deactivate_altimea_contacts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/libraries/class-altimea-contacts-gulpfile.php';
require plugin_dir_path( __FILE__ ) . 'includes/class-altimea-contacts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_altimea_contacts() {
	global $altimea_contacts;

	$plugin = new AltimeaContact();
	$altimea_contacts = $plugin->get_public_class();
	$plugin->run();

}
run_altimea_contacts();
