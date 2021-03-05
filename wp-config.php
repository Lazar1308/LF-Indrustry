<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LF-industry' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0LB2NG2pvkjyJqFU91A4FlHTdrqdRjqSf3Azz1mMmSlJUdv8dMF7v6QNVoHcXxeo' );
define( 'SECURE_AUTH_KEY',  'HxmEM6i8sRhJxX9zyFtiSWtvhjILbrFw103XqDdlbWmFVcUofbzJRVdQnFRHBs5u' );
define( 'LOGGED_IN_KEY',    'hAw8oqrjK36rtInSZJd5zs2zbXOmsgeHXdam296bVUeU2t9WefnCWweUexOIXXV8' );
define( 'NONCE_KEY',        'dANpMxI2H7AjE7qGPFBh1sCV5ehUaxOzR7KXnUhsHblZ8VTVsvXdYswe2Cccy9ph' );
define( 'AUTH_SALT',        'oprcYbSc1LRke17RPsR5tzlg9scw4d4wFoKaufOAuW769JLKfI69oWC3xHWeXnBQ' );
define( 'SECURE_AUTH_SALT', 'TlRLyWjHUDrVhklTNJcWxiy23cIuV9Dr12Z3WVt3jDAsJWiTlgkhPqjJKytWVz4k' );
define( 'LOGGED_IN_SALT',   'xBDBIh9329ATpxwqyCLidw7cCtlMCRTg1A3ZZmUZ0La71djvcdbjUlKQW9uOCE3j' );
define( 'NONCE_SALT',       'cGLwigMAbh9siWWALVR12CfelTLELNOOpEisqKx3YfglGgdfZ1GPUDRjn99u1sqV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
