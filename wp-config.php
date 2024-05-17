<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'myg' );

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
define( 'AUTH_KEY',         '#;qK>rr@*6TAEw>iXJx>g&n;u+0XMDnJtiKR4Nm^UY<+]:d0jtA{%ddK-:-C*oFO' );
define( 'SECURE_AUTH_KEY',  'JW=$JPeeC9q,|2;T_0` Tl U%`?>(Yc6iJ~(mu[*.KRm-vANwK:;_)a*;&;T9+B:' );
define( 'LOGGED_IN_KEY',    'Xmv79{NwHtPomn6jmO.U=FH<0,8[vE^quu8(>)wG]UbGA, Q. ?Y :rUM -,YR^=' );
define( 'NONCE_KEY',        'X$?ta/>$c?g:+^TIEb2f1Wi~PF}JF/DL}{!:;WU,Jg;kFcbY2RUaJ43)Y#S`~N?*' );
define( 'AUTH_SALT',        'Q#]@=r~QpF.K;*o}>&!otP`)y=S,)[8-y/#!N8S.:4&*aq,@>1rM7^=~cA:C)~{{' );
define( 'SECURE_AUTH_SALT', 'IgOM0q4^<B0`/]bGQDU>y381?%O+>U:Px5fO2{Z_]#.O%+>3ujcXsx[cnR}<~w.Z' );
define( 'LOGGED_IN_SALT',   'p~ 3-Ln:0lG{mDFb^DiKo%sL2E|QmsTQ<DL$2i}L;@Fie{ tV+E&(OfcUKcodGh{' );
define( 'NONCE_SALT',       'TO:ug@XlPORc&B0*{S[im*BPez:s:eM,Fduzml]7muT0?si8El.:qJD_v=M%2+J ' );

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG_DISPLAY', false);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
