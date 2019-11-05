<?php
/**
 * The base configuration for WordPress
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();


// /*------------------------------------*\
// DB INFO
// \*------------------------------------*/
define('DB_NAME',     'database_name_here');
define('DB_USER',     'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix  = 'wp_9nevfc_';
define('WP_POST_REVISIONS',  10);
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
	$proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
	define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
	define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}



if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
