<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tailwinddemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H<]oph97=mni:=>nj_`8kv9IFr1(t4VcxLU({/B`CXjSZqf(EA+.fmSelF19kE4K' );
define( 'SECURE_AUTH_KEY',  '(,$N^RcT_|{fc!.W!nBv/I)YLG-9^YC~hn$REM3YTgcI6^KI{H^ZzbrV!P6m#=+g' );
define( 'LOGGED_IN_KEY',    'a(pL_i bFRI.NvSj[BRJo.j&uk?ZvS93Gcz[(fui*8xwey839fg|J3$ f=$ C<x{' );
define( 'NONCE_KEY',        'tvxI]7$bEI;]PNznu5;pLScXBlyH.gL6nG3%`Qb9U{{[m4c!]u:HP%<`3V%EjkEw' );
define( 'AUTH_SALT',        '!iLvv9?#3oWvt:75)sd?qX9;9oY4%D%xKRK?a|_@$-ACv46kp3A=V[$yhYOixPq&' );
define( 'SECURE_AUTH_SALT', '6M<}BmWMP$hO0mXM$OIuMX)Uu[WUHBSV6C>?a0=A]]ir?d8-~wzu.}{Q( d4ABmo' );
define( 'LOGGED_IN_SALT',   '~OG$)j>Qk%X^L83hvIXu*n0nP*TtGq~m2rgW(#J@N`65!LI`=,~=;Aek8H(dm<gO' );
define( 'NONCE_SALT',       '6|%v(,NUU>9!Czc|iS;av%+iKva/l*s^689~[Y 2.z6C.B{F2}_%BCPmX:R~GL,1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
