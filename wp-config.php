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
define( 'DB_NAME', 'silvercrest' );

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
define( 'AUTH_KEY',         '.kGdt=sF!7@ghKT[npMq0:$9` SPRB`QShCMr%gsMjT!]|[scc3kh@IBmQ[T{[Ti' );
define( 'SECURE_AUTH_KEY',  'p}F-OIY*p;6mCC$_O(cJ(9VV0&0rQZoyDu~PzgG#V9TTD+C3l_:=9.rbb6aK31%9' );
define( 'LOGGED_IN_KEY',    'H!#)*QqY $oO;1-MzfLWhoU*K]7!PHo[Y7V3_,z)x0mU-tFWbgtja_A:ZeS.+eT$' );
define( 'NONCE_KEY',        ',IWo1P?Ot`oimrj)&G5:=Q^L2;H}TTEi}QqYc,a<dA! Dx:uyKcR5|(7Zh@tvk^Y' );
define( 'AUTH_SALT',        'XLR[{NgQ|;Z)CZEWq<>z%w,OpM @BB{xRd)a]PtLRV826-,kjE(URzRE*5?M=cMG' );
define( 'SECURE_AUTH_SALT', '?)U0`M!oM?]Lj^6<F|Z-0$oLi.$v5cBb?xCEzs`)<ykTZ)!qXz%|L$?Lgcr-B:z2' );
define( 'LOGGED_IN_SALT',   '1y/s,i9X WCf<,:GKM/nq#22OQ$dzHK5x<XF;gxW>1@gD8nAkKTN>k-{j_Dlr*tK' );
define( 'NONCE_SALT',       'pCpVgNWp@]7+<o]]o+oSkLuW:Bypn)([u8p6X<]Sng;qOl{+(ph{e@3mF=9Z?xW}' );

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
