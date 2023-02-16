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
define( 'DB_NAME', 'LAA1481136-nakamurawp' );

/** Database username */
define( 'DB_USER', 'LAA1481136' );

/** Database password */
define( 'DB_PASSWORD', '9tt25efY4ki' );

/** Database hostname */
define( 'DB_HOST', 'mysql211.phy.lolipop.lan' );

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
define( 'AUTH_KEY',         '2~WsdN}g!972<Ll47#Fm{b6w/-Lo{H3%H9m>VG#)]ux?3V:{zf,eQCE8h1Aag+h%' );
define( 'SECURE_AUTH_KEY',  'W.2R@0WFFdkbEFZw*2x3Wg[JB/)Gbjh,Fc/hhm]|yO7LMky6}.z`YM6hNx]7=a<F' );
define( 'LOGGED_IN_KEY',    'ol@}]BDBz%CkyD|C)kzmdw_!|W3bd5,Ll]*{29rCZok^t4|~X{cD13J+F::>`OO`' );
define( 'NONCE_KEY',        '{df4ib=9PBb4ss/e`jUf!]UM;Ukp(w*n6W%hH<$=I2cS(&pgcc)X8`+=|J_k$M|_' );
define( 'AUTH_SALT',        ';v4ca~BPm]Y(jQ*k _:^0vz}T3sJA}4@Njef4pZrWC8s~q.ybI(qs?MjE;:sx6[u' );
define( 'SECURE_AUTH_SALT', 'kz?8Ves`:):/k$QIhbQxTnD2GKg-8z1`uGw<#L @#P!-`5(!9R]a*tJ%VgGFN:)k' );
define( 'LOGGED_IN_SALT',   'js}~Xdu4Ckhq}&g[L|Vf%H7,iD<{*b/ EQ,s0qE A4;q~vMgqj(0lT>?9,?I/R2B' );
define( 'NONCE_SALT',       '?3A$n|K}p@iyX7M@V/X?t<&IEAUDFqzopdv#N_n?,e<kMgUmn^b<j?9Y2i:vVWj^' );

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
