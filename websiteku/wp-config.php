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
define( 'AUTH_KEY',         '#t[LZ0^<h*i[_q==y>ca_X6i;/+$I7F>f#0:ntnn|pEkUeCG8EN&;di`L_M6s6sk' );
define( 'SECURE_AUTH_KEY',  '}?OHq}WAFSe]8?$-u->GXnf`lAqh*fix<Nw@HAYu#q~xA9D~;/vR#>x2S2[ f#Zq' );
define( 'LOGGED_IN_KEY',    'pLdT*&&qHV& T;WNmG103YK;+?jR#>[J,JipgS+glOR>O^%h8a9[p+9~8RSR7bbs' );
define( 'NONCE_KEY',        'ikTF}:a%+_lm& Ky?[},Dcn$(u%e0&ph/|D#f-8njgOU L>[D<`T@TITJu-FW3*;' );
define( 'AUTH_SALT',        'BPvY,8$IK[S;1>-*K[7%UFk;48l,AZAO5x_1buqLVLctrz>2COW7C>}V+?Z`hT4:' );
define( 'SECURE_AUTH_SALT', '~Ez=BBN3 PX6j68+$6CGy<T{V><Mj}jNMsowz637KzB,rl5]CTLM;]0LZG,07qTs' );
define( 'LOGGED_IN_SALT',   '+nWqV7fXLAH>Sxq`y;^`1d_]20}+g}Zx0E,1=^B/fpjaom@Q4bDfVDN$G0@|`;B+' );
define( 'NONCE_SALT',       'w%(|;[u2Cl%4SQC!Q1L*Q{g^ ^QABgH&-F$P91Pg-iD#RaE-2{*ZIym61[c$%3,|' );

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
