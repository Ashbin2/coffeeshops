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
define( 'DB_NAME', 'coffeeshops' );

/** Database username */
define( 'DB_USER', 'coffeeshops' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@coffeeshops#1' );

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
define( 'AUTH_KEY',         'cKX$n;E~6Hur<mWUH>`90,a,Na2$QF{whj`D6F(W~ (?XP9m._T4vS0mB6W|Yi-D' );
define( 'SECURE_AUTH_KEY',  'MGf&0,1#[8iBB;{Fpv-M2TtUy<As75yA6u,Mh]2J[|/q}wy78Bu`5GB<H(3/jkg=' );
define( 'LOGGED_IN_KEY',    'lHWPx*+b]H?YD[xI Q@nK3W,uj~.(b[)2fDUQ!I3,LWu*RfoD&A9p&O(%HYERZ}i' );
define( 'NONCE_KEY',        'T9Mx|j86GigJ=)e5<f2/(7H&H>&|Yx#H7gAmSskb*yG2CgS2?vQ*Eo%:g{lm>P>X' );
define( 'AUTH_SALT',        'i`3+b(P1b6T6n2G;QNR2|^JY1lOFU)@.%(73u{.%F^i~xZ3]C=QG]@1qiXCi_*M[' );
define( 'SECURE_AUTH_SALT', 'n !dZY1$%r!/ZAWZnRPggI|&FGNT>>JkRn>J<i2(ofoZBY^C4+xj]>!cB_lY1|u*' );
define( 'LOGGED_IN_SALT',   '94[=G85CT?tqgr6fb86(L2wg`z?j(tRJ=V?=|s9s${C%MB8vC57FA5O,OZd ddNV' );
define( 'NONCE_SALT',       '!}=[BAu|`fU[k<Y>#Fs+++,..ZC<=vYL`/:1o!c+.!o3Psk0+8~w|~5$:!>py9RZ' );

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
