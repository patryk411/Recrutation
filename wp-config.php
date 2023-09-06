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
define( 'DB_NAME', 'recrutation_db' );

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
define( 'AUTH_KEY',         'k4-~ ]QYaBGf~l>oik%grlfm|M9CHIBB>z=KLPBJNWAOHyI%F_ow Sa@L-Jl+6H+' );
define( 'SECURE_AUTH_KEY',  'A el2&vuCx3WsbZbR5F0:,&)VSDu:8=x6B(adnX $$_f9+Vf@#Jb|J~E!X*a4%>!' );
define( 'LOGGED_IN_KEY',    '(bXw:<~%Z)GL<(2[uZZIRfCL&SSeAv>1?yweEj3y{kgOu9gm0_F{93v-+eT_dxuf' );
define( 'NONCE_KEY',        '4;=I3de,vl[I;*v4adJ5.d zz0elKXj/..$+SozA8mK#Al426Fil1nDK2&7;u.tj' );
define( 'AUTH_SALT',        'nuy+lY&WE?KSx:ez3:Q4/@xZTpge;rp*xppBi3SOI.#X7V&I{+ -lx|NKEVCCS)&' );
define( 'SECURE_AUTH_SALT', '>yki0 t<7mZ|+Y=v=B=UKmwD4(GrNl77&M5BI_I4m{a70mzsTVn[MzlqYD6`%|:+' );
define( 'LOGGED_IN_SALT',   'X4Vb*YvCI}$c#BrdM4iDa(`fS13kv$$1Y`5]@{&|6:h@a!zatxEr7?Vlg#+f`|sQ' );
define( 'NONCE_SALT',       '3Y./4hFp[m!N+/&dC8ed%-ci{qD3{vk}O~_gf@IN}2ux&w~=zbaGD54-F-PFlWP:' );

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
