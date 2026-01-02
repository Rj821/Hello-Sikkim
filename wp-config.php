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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hellosikkim' );

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
define( 'AUTH_KEY',         'Anc46tyEKXH$O<Pp&YBKQ*,B-0YL`:a?SSd{gi%1/ie|Qe[Fj22K}HnZx9H{oll7' );
define( 'SECURE_AUTH_KEY',  'Bc/IbKZYUGoS-iWx<Y+G!Xk EjQO<PEWmntFj}NfiY ?E<<NA9 mWM_?3;d<V5$9' );
define( 'LOGGED_IN_KEY',    'fqr%)R)bJl3zD496?[@pP$uF*u:3^XI{XjvCs[T%PPbG$F9q*|Tkjnm,S0FL<t&j' );
define( 'NONCE_KEY',        'HrL}5cE8ocRf=iZjuFjfPsp+)@K#QjVD|*JZ9A&Q/,a!fD@s/7@bBV6=d,y6i:*6' );
define( 'AUTH_SALT',        ';!v2Es:ks3)=|o@y/5 p,iV=;?a^[{ Xoh:r4hE3/ `2?p{0, G8?>ZDq1Ga5oop' );
define( 'SECURE_AUTH_SALT', 'z?[AvF;I@[#Dk}wK^D:usiJYONA5KZ,lmB$2)FWT46vp7R^=yB9~>o.y<)L.mMzT' );
define( 'LOGGED_IN_SALT',   'm:>erk ?|O,BUEl8ubfPv)x<90LmT)U8$q5(Yj`;A=M6uTj&TO_O5yJ1jh{,2>O!' );
define( 'NONCE_SALT',       'yMb4wV9SyNLi T)jcyf[L0u @C2YUTd+IpuH>6}TOp/jD *ox}Ky4E)2qOr5ge>/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
