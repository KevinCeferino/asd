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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         'WgX!]l=1@SH?Vo&k(o!7bH9N,[a$y _%wnXj&ZNEUTqw-?Lr`4+j3w6vCJm{uW,K' );
define( 'SECURE_AUTH_KEY',  'Z:C$*>ZkS<zOhGHS@s))ugo/aHv^!rs,+)Qho>KIl=1<!tS12>,u&oBm&=M4=ULi' );
define( 'LOGGED_IN_KEY',    'C7V])K]5QvR4,3i~EYIMljWM.NIuLNN9Ka|uExE6C>kvmm`<:;G6mm!4g-1m-L[N' );
define( 'NONCE_KEY',        'k5x!u(FVhXFIF5^fK9wsSGL~Gt7Unm(Y1_LiJmo3S+ ps30J{NW]6isM{mfMvW;.' );
define( 'AUTH_SALT',        'Ui`K-[cMem;p!W@W7%|5rrUr@`d0qM`^^O4RO=`OsmF(XL-^}c0{U}vA5|=kw!-S' );
define( 'SECURE_AUTH_SALT', 'k=r]kKQ[g0;+YH5fz#5Qva*1|:c]U*T.E+NQJe4w~M{E[Ji~)(o<{npM*//iONdJ' );
define( 'LOGGED_IN_SALT',   'E7/TIi!F^LF6C&b7GJ*VM(8D7#QpX=A|a; ]>ix[&CmJ [!=VO[8`(PS+NxO[mI{' );
define( 'NONCE_SALT',       'n2p9I4I]~2l?~W$VzDmX %3e2{__9zUTxXtQ:RKbbS/}w8u;K5<y$ae}h}$!8FUd' );

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
