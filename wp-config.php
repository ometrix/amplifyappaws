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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HardwareActual' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'QUpT4WBRd9aP' );

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
define( 'AUTH_KEY',         'zL+*+7N_rjBFn##bL<x^u1}!IZ+p@%?M~plQ?B(GF]7iS 9jK}.1Wf)2p#YBk;h|' );
define( 'SECURE_AUTH_KEY',  '_yU*7[pcJ(O -|>.=1sEIIG06hX4&pCck(M~]4O=RuBh+~Ky@eOTd=?]G;)=mrmS' );
define( 'LOGGED_IN_KEY',    'Hj5XvRUpO0`}_k2*[W7%{!t.utOkZYC==|Q}>`~t dqOuH9!CO<O=.;xN9hxq Iy' );
define( 'NONCE_KEY',        'HJt{:y)gHq>/t~$T!;i{#@r3;7+?3s01$>]BR#T zp.2as4^LuPXE][li#ypARxb' );
define( 'AUTH_SALT',        's^hz5cVf47mS+Qk9H=HF[E&q_u~Q[WYnUYCa+{&loiSY$F;WqYE /waUOn iIO 1' );
define( 'SECURE_AUTH_SALT', '_6e/<qJa4&$_4r)iv(*iBQ3E-h7,)dp#m6BD<3+tOA2K&cTw987RUMaxQT>EwOX`' );
define( 'LOGGED_IN_SALT',   'I?P$8b9?JNUm@@0EBIDMS>vg(BA{OP~_YlngX6l^E)k]nhl9dn&m.@:=F+X7rn1w' );
define( 'NONCE_SALT',       '3d*M,lOiOI}rp!na,ljh)=$gd<F1/9Ce4c`H~U.hwuMD?9uT3kk~7XX:xbD4g71#' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
