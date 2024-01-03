<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sletbewtstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',+WVk|M[] (sX$TW%EIn`QblN[p=+H1DX%n,4.vai`UWX]CvAEOV-j ^6wc5T:=^' );
define( 'SECURE_AUTH_KEY',  'yF2&9ZENGcAN6l%f:=IF.EN*&%{30*8`g*[Az.CQck!tKucn@Pc,23aH$7qI3kR%' );
define( 'LOGGED_IN_KEY',    'M1xCsftMZlPuXMJ/{3e<G}n:xAA >5t2h3l.s&Zi1Uy~d|_xKAV1~UPNdOz6gpR=' );
define( 'NONCE_KEY',        '69WMa*J$b,<S7lm@C|r-]zz3Q/1HzHKY0drZQ:mKKsZ^eST9;>k*RtdE*^Gl?RHx' );
define( 'AUTH_SALT',        '{6U]m.XSm0>eACZ$sk9=d%;ON`l#QLD1lyZhZa)N4NNj1Rh![Ao,:tRd>zYc]A%E' );
define( 'SECURE_AUTH_SALT', '&B:>B0;;Z#1}VDG&my9obC1(_rnH:Dq&@4 ;r4G!@jOip_pO0KbN-^qaRPu%Q=;@' );
define( 'LOGGED_IN_SALT',   'o&4?|*W]RD:psGtk`dtmdGL1}W3_]<x!.)ba|_}AM)Rigv_>`UYIZCZ$|yH<*])K' );
define( 'NONCE_SALT',       'Qbp6VZX!R3@^R9dU|uResC##Os?F8>yFy+4*mejNEDMKat?61*H!(,_UdAe.q7C`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
