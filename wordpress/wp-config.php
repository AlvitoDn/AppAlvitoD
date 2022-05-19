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
define( 'DB_NAME', 'alvitod' );

/** MySQL database username */
define( 'DB_USER', 'sayu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sayucakep18' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?/ .7S*4!.[)tfCK#&ZNn0`;eggV+l59~T%M|R]1q!{!MQcPI!Vj[5qIfI:/wz}O' );
define( 'SECURE_AUTH_KEY',  'z>{&<?svCGC1q]z<^i ,^$;JS_#pdboh@>n:WA;8DI2+=Gb%P@v$Izb1tf99ZJ86' );
define( 'LOGGED_IN_KEY',    'Jn:JQ8npbK70+l7W -Ma4a4rtT_~oK:jX0?vxnLW[7][5yz$]ae-n*7p%RG,Ps~o' );
define( 'NONCE_KEY',        ',&3WS3j31R]4ZD%(QY0i&9S*3CF6aaEj(!O< MQ2Ry<gZr}xk>(@XI;h9[C=O090' );
define( 'AUTH_SALT',        'w&6GpNB{Y,E+=;)UIA]0z157F^yhP{vqF/2aKcai@Lg`6#M,Hh#8%iN%_8bx7@74' );
define( 'SECURE_AUTH_SALT', 'hsdQBiQiA0HI8sSdCjF-{=%7N/Lw,EY#:3c_?FvnK]7Vb5=Vsh&e)uN([$P+ ^7Z' );
define( 'LOGGED_IN_SALT',   'Ry%>Ym5u$CD@T;c@h/|_CTyVv>xIEEXV?:=/1?5pV1H,Z}nE{e7l1_:qpjh3;nB-' );
define( 'NONCE_SALT',       '-_YOue6HYg#Oe8t%=5T)FcBkb4Eh5h3;^6.S/ccHH28PTI[$JV4hC7|Sc9M7@4hQ' );

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
