<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.altimea.com
 * @since      1.0.0
 *
 * @package    AltimeaContact
 * @subpackage AltimeaContact/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    AltimeaContact
 * @subpackage AltimeaContact/public
 * @author     Altimea <apps@altimea.com>
 */
class AltimeaContactPublic {

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
	 * @param      string    $altimea_contacts       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $altimea_contacts, $version ) {

		$this->altimea_contacts = $altimea_contacts;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		$fileName = 'altimea-contacts-main.css';
		$newFileName = AltimeaContactGulpfile::getFileNameMD5( $fileName );

		if ( file_exists( plugin_dir_path( ALTIMEA_CONTACTS_FILE ) . 'public/assets/css/' . $newFileName ) ) {
			wp_enqueue_style( $this->altimea_contacts, plugin_dir_url( ALTIMEA_CONTACTS_FILE ) . 'public/assets/css/' . $newFileName, array(), $this->version, 'all' );
		} else {
			wp_enqueue_style( $this->altimea_contacts, plugin_dir_url( ALTIMEA_CONTACTS_FILE ) . 'public/assets/css/' . $fileName, array(), $this->version, 'all' );
		}

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		$fileName = 'altimea-contacts-main.js';
		$newFileName = AltimeaContactGulpfile::getFileNameMD5( $fileName );

		if ( file_exists( plugin_dir_path( ALTIMEA_CONTACTS_FILE ) . 'public/assets/js/' . $newFileName ) ) {
			wp_enqueue_script( $this->altimea_contacts, plugin_dir_url( ALTIMEA_CONTACTS_FILE ) . 'public/assets/js/' . $newFileName, array( 'jquery' ), $this->version, false );
		} else {
			wp_enqueue_script( $this->altimea_contacts, plugin_dir_url( ALTIMEA_CONTACTS_FILE ) . 'public/assets/js/' . $fileName, array( 'jquery' ), $this->version, false );
		}

	}

	public function sendContact() {

		$data = [
			'name'		    =>	addslashes($_POST['name']),
			'business'      =>	addslashes($_POST['business']),
			'phone'		    =>	addslashes($_POST['phone']),
			'email'		    =>	addslashes($_POST['email']),
			'message'       =>	addslashes($_POST['message']),
			'origin'       =>	$_POST['origin'] != '' ? addslashes($_POST['origin']) : 'sidebar',
		];

		$newpost = [
			'post_type' => 'contacts',
			'post_title' => ucwords(strtolower($data['name'])),
			'post_content' => '',
			'post_status' => 'private',
			'comment_status' => 'closed',
			'ping_status' => 'closed',
		];
		$post_id = wp_insert_post($newpost);
		// Update new post with fields information
		update_field('field_contact_name', ucwords(strtolower($data['name'])), $post_id);
		update_field('field_contact_email', strtolower($data['email']), $post_id);
		update_field('field_contact_phone', strtolower($data['phone']), $post_id);
		update_field('field_contact_business', strtolower($data['business']), $post_id);
		update_field('field_contact_message', strtolower($data['message']), $post_id);
		update_field('field_contact_origin', $data['origin'], $post_id);

		$result = [
			'status' => $post_id > 0 ? 'success' : 'error',
			'msg' => $post_id > 0 ? "Thank you / Gracias / Merci 🚀🚀🚀🚀🚀" : "Error 😮😮😮😮😮 WhatsApp Us 😊",
			'type' => ''
		];

		if($post_id){
			$email  = get_field('contact_email_recipient', 'options');
			if(!empty($email)) {
				$email  = explode(',', $email);
				$from       = $email[0];
				$subject    = "Ha recibido un nuevo mensaje en altimea.com";
				$headers[] = 'From: Altimea <no-reply@altimea.com>'."\r\n";
				foreach($email as $i=>$value) {
					if($i > 0) {
						$headers[] = 'Cc: <'.$value.'>';
					}
				}
				$html   = $this->getHtml($data);

				wp_mail( $from, $subject, $html , $headers);
			}

		}

		wp_send_json($result);
	}

	public function format_send_mail() {
		return 'text/html';
	}

	public function getHtml($data) {
		$html   = '
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Altimea</title>
</head>
<body>
<table cellpadding="5" cellspacing="0" align="center" border="0" width="600" style="border: 1px solid #ececec;">
    <tr>
        <td colspan="2">
            <table cellspacing="0" cellspacing="0" width="100%">
                <tr>
                    <td align="center" valign="middle" style="font-size: 18px; font-weight: bold; font-family: Arial;">FORMULARIO CONTACTO WEBSITE</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="20">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150">Nombre</td>
        <td style="font-size: 12px; font-family: Arial;">'. ucwords(strtolower($data['name'])) .'</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150">Email</td>
        <td style="font-size: 12px; font-family: Arial;">'. $data['email'] .'</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150">Empresa</td>
        <td style="font-size: 12px; font-family: Arial;">'. ucwords(strtolower($data['business'])) .'</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150">Teléfono</td>
        <td style="font-size: 12px; font-family: Arial;">'.$data['phone'].'</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150" valign="top">Mensaje</td>
        <td style="font-size: 12px; font-family: Arial;">'. $data['message'] .'</td>
    </tr>
    <tr>
        <td style="font-size: 12px; font-family: Arial; font-weight: bold;" bgcolor="#FAFAFA" width="150" valign="top">Origen del mensaje</td>
        <td style="font-size: 12px; font-family: Arial;">'. $data['origin'] .'</td>
    </tr>
</table>
</body>
</html>
';
		return $html;
	}

}
