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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'E`3gr(JrQadA&#+Rb@>|$>JcmiC;+O`R5j`0,_.2?+`^e:0Q2#CJ_uNxJa@jO#Tn' );
define( 'SECURE_AUTH_KEY',   '%,aa#m:;sRAZUx9Gk:G{.iP_{K X{dNU)uk5VI~n]4N7 BX? $VdYf9=lG=N?rqj' );
define( 'LOGGED_IN_KEY',     '66vb9IGs%<VugW>RuwOZ7HJyZa@D^?IvO {=R{S+Y.sIRW*%LK%~N_ct9B,tAWHI' );
define( 'NONCE_KEY',         'T@`UX9|2rQ.M!#$969*$tp2)$u5HtG$bJT!}<T(YT_xy<)|R[d@is_@7.jTt-/MD' );
define( 'AUTH_SALT',         't/a/$+O]a/7EzUD)_jGvEU$TXr4NW,!#TTrcLCSLh@a Iuq6/rtrjD7M4g>h`{1C' );
define( 'SECURE_AUTH_SALT',  '4Vm$Fe`mf3TG1.7E3wOvn`>gq8@}p];HEem~$yR.Zr;#quG#=0Zi%>Q[@GthW5|d' );
define( 'LOGGED_IN_SALT',    ']A(;Wsi,ssft6g~*TZD`(`:,F!IXFH*:gNWu}BFvdtP?t1N. ?]{1(-haWit#WR|' );
define( 'NONCE_SALT',        ')Gr`[WNpQ.<}6]#{?bbU)khPE/Mj60,&#re1ah!>^a/7D)zY36KL;U|JHz*Dn)/j' );
define( 'WP_CACHE_KEY_SALT', 'VvW-!27mexHxGRTyg)oeNZs|9z8ey5_:(~<n0)jI@Xcz7Nl;>[-l.Nie~hP:!W,9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
