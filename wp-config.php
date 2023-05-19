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
define( 'DB_NAME', 'acf' );

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
define( 'AUTH_KEY',         '7_!x1ZVJA$ :03Y.1_<~cDbLvXHJWM# jv}H8<b*aueSIi$jl~3Ru8t=&nrYTQ`^' );
define( 'SECURE_AUTH_KEY',  'Ll hh(*fZY2j5LQDx6 ]HSG:1qg72d~]}VgH-}G1TGuB<x6zI,cDS{<|kCe89x<`' );
define( 'LOGGED_IN_KEY',    '?bu@SjYnE;~NSN_e}IG(Em/sX3#XR|Db.:nZadu5%uXt6E@<FCHD-;/~N5$p_(/P' );
define( 'NONCE_KEY',        'M3vG5D7dEyXbsHE&xsZqh-i$iXM}|W6/.~(F<PkQ-e->ezZr5<]FF7nEpa|MX^|D' );
define( 'AUTH_SALT',        'V1*;LOt<6F75?Oc 6!-@MOa~5nvrpdgRx4Tf%2RsJCrcOO-Ef}NeKT*B!]-RW|-T' );
define( 'SECURE_AUTH_SALT', '~^?TN#=6$v0AUyb5l8*5eO`Cs.i*i<`q_rPoqbjei@d:r4A[T/Np|s+z4xJ>pc@{' );
define( 'LOGGED_IN_SALT',   's[U8$,tm .p~g&#mZl)!?q]S-guNY31E:Sn(nS$&{JiQ0v+~0P._hz]6x;1,w?^p' );
define( 'NONCE_SALT',       'gk2fuS;cj( auoJQvgZBHfQIn9#Zn}I{l?*fUo6{dL7)i]jA%M}iC7lHqvXGb[fh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acf_';

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
