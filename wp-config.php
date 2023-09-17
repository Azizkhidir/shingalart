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
define( 'DB_NAME', 'shingalart' );

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
define( 'AUTH_KEY',         '2<G`f@ZGP.qsBT5Z<&^g$YlYMMH2!NsV2pY/^;bRD)e!{wAW^hO@6cYelQI_4_$_' );
define( 'SECURE_AUTH_KEY',  '8Sm*7c^0@n4Z+p[k[Sedode8293IE359Y#_,`bgM84PA>H@Dw?Pr:W`NgW=6ljg9' );
define( 'LOGGED_IN_KEY',    ']NSB2+ {PE`cs~Q9%/EvY1w->1zY%2SB9![T$J/|N?gX|+1xrePQG?r$Z(Lr(Lci' );
define( 'NONCE_KEY',        'V@D48qe0-I<+Y&LI7#rQRyO&vl- .Q404?,_d!sDW{^sDR+FZ0?:{-U)y*hNK82{' );
define( 'AUTH_SALT',        'Jd&-umR|OCX9O8}R4|C,ek^AP [I [_`VFyMh^IlN{mra|EHQ%~u#mr[4xfT[RP<' );
define( 'SECURE_AUTH_SALT', ' m*yISr?}$T08,9zUFtgMZsLy2Si5M+vjtGnpr6yg9Qx(R]IfE=b2gBi5*7G|q7X' );
define( 'LOGGED_IN_SALT',   '[1S~d{Rh`+thF4X~1ri+=f7PRc(QPL_ ]SzCwf`_U0(yf]O8OUnQ&  |$ACr}6<,' );
define( 'NONCE_SALT',       '`ECVGK08kC[o+nQiZm~)3W7n*;%N$6]PR2nIy!#)Xn8UBM0 0{HEX0j)J@X5J3Q ' );

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
