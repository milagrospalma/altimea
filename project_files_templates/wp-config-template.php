<?php
/** Enable W3 Total Cache */
// define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Define la url del site
define('WP_HOME','http://local.altimea.com/');
define('WP_SITEURL','http://local.altimea.com/');

// Especifica la carpeta wp-contents
define ('WP_CONTENT_FOLDERNAME', 'assets');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
define ('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'altimea');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|>>hWvRjc5&.<p2@kU0gv:FKdeu7,B4rd~wVK73j.oh-G{.bt.4dl.Oqqd>bE2Ol');
define('SECURE_AUTH_KEY',  ',n_r8wvdDxz*P:l=akfhN*Sj?:Lt=jWR)r5>5d[18u2fsNvG}5QVQ|+c[=|&zN-;');
define('LOGGED_IN_KEY',    ' me<-7EYQp{4><*p@d#3tWyVxMY=Svk?K{w-7S@1+|H14sF>/;=9Fxt6K(t+=LJB');
define('NONCE_KEY',        'qfM7{rR5q[MLC;,;0)Au$ GHZJQ(*GE<~P*5@+Xg#_SZ)}?cl8<%<OpQT)@!a&29');
define('AUTH_SALT',        'e.D;-W`AQO%$KW+CWN$OB-GX19qRz{?X/+-d[yIx-i_[x <T/dQ80Qdfpji*ut9}');
define('SECURE_AUTH_SALT', '6^j9+`IY{u<Hl0D%siC:X[Bl=T=Sb2W8N^6rrg>rb@w{zT/#d6|T2kBIvy` j3^A');
define('LOGGED_IN_SALT',   'dQ6|{gITo>,di6b|&lcJKQfWm.}zDrj9G]i%GE; EoT|~X0h/;+qFy?v bsn{v@V');
define('NONCE_SALT',       '@+55}fn(/Sp{Kro%_J$EPlrfM/ipN1StT5WeW;;!s&V%MRD!5)H5.NKyH]0@A<m@');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'altm_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
define( 'WP_ENV', 'dev' );

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');