<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.7809681444867971');
define('WP_SITEURL','https://diy-pwa.com/scope:0.7809681444867971');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','^G0+[_NiH4z>PoAICegu.Bs<N*xpWfCMT)9#T*Wi');
define( 'SECURE_AUTH_KEY','!Lf53]pitQ694m_kW,OCz!FdigE]@!O=bru7XD,S');
define( 'LOGGED_IN_KEY','RXPm&P)%]U%t2tCx_v=RTWN5!yvE,/qbWN,yFy(8');
define( 'NONCE_KEY','c!p?$QM$Yil?mSIX^r,s<+U]Kz<ey.D1VIOON@-m');
define( 'AUTH_SALT','*VZDz.b4iw]TafJ0)dk08yXy,4,q4BK?kK3F]WYv');
define( 'SECURE_AUTH_SALT','e_6ywWiK[!*=/R-He2xGB_!!7?N/#>SXs^M%Xi+9');
define( 'LOGGED_IN_SALT','U-6g>#ia6m(1p_1ieL^5Dw6uGyGJ*rLzzu*id)5u');
define( 'NONCE_SALT','v@9<r?(w@3csg8sEVwm0#4Yc-V1.#l1oEINfAzWR');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
