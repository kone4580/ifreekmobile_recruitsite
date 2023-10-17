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
define( 'DB_NAME', 'i-freek-recruit_wp' );

/** Database username */
define( 'DB_USER', 'i-freek-recruit' );

/** Database password */
define( 'DB_PASSWORD', '1if15exE5ki' );

/** Database hostname */
define( 'DB_HOST', 'mysql57.i-freek-recruit.sakura.ne.jp' );

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
define( 'AUTH_KEY',         '0lA,HM=/8%h<<#vJY3{keY0#g{Ak]U(e)[?[E(5qYKx30>$ rOF5XMZ(K~%T8LSt' );
define( 'SECURE_AUTH_KEY',  'vQY1s~K=)3^}K=ew$>qM$xi uO8hoofvNk)dS:Q33r}5F^<iW)xz_h%-9En@t8a%' );
define( 'LOGGED_IN_KEY',    ']bsGInNPSFx>P<d*g_9~@f^t.o#g~;vDN-6QUe^oy0,dV& g1|D~N7nvK1KQhAj5' );
define( 'NONCE_KEY',        'DdO(DPj ?;dj,cRR[6=:olY#IXp0S#wBvn&dD|{CDPx;V1Del;:_z7N02}#SB`bu' );
define( 'AUTH_SALT',        'i(f[aet#x2O^)o4tYg@cPe5jS(9a?T5]SPiA]0Xe ISu~x6u+111jke0gTI==jqb' );
define( 'SECURE_AUTH_SALT', '2)$3)u]*m!|I3;YTya%`e`/@2=7d{OUDt-8!c xL(2_6R~TQ{-uGGTSi!NAg^P/h' );
define( 'LOGGED_IN_SALT',   'bJf,=B01g=ctXQ/*H[P3p3+T>;alfjE:0l}`k?&QhA;:eC1S7=1!RX{C wPSDqAd' );
define( 'NONCE_SALT',       '6*3%B/eu/f|S|j&7m{>C E;WlMpN:c#cplkJd}kob)n9sh!>ft,^haMJ|Bf`PB_u' );

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
