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
define( 'AUTH_KEY',         'v<ev7AqJ/1!=Qg{^,M+CBNkF@Y$lhO}F}QsS$z Fw*%Ct!qH68CyhE)n]&oy]=Q<' );
define( 'SECURE_AUTH_KEY',  'W=R@8TrGIXA8K]Es3%hRjw6[bci<92@kjtIu-+I%`1R>U&#`qVr#+/IG.wL&`j^e' );
define( 'LOGGED_IN_KEY',    'Ize[Nn{y>d6~ntL}[92tHkq:`;a%z?QNKy}<.+dq+/o&sp08L+{;v.jzzFMFDIxE' );
define( 'NONCE_KEY',        'MHU7cuR4x]}>PI^%}idNF )2)??gKaxG B:pB37J! *z1RfavZ7.15|dcz m|G,W' );
define( 'AUTH_SALT',        'CA RglV$#`vuX~1,>{c$CO@wU8e&z4OAb{]V^mBQBt8*TRARcCY*=pDE(lIW3o^s' );
define( 'SECURE_AUTH_SALT', 'O40gKcj|Q5nBG5[16b[e4N,>o](|x+<~>_VGWue#-.ETva.zt/B b=JLlriM4Wpx' );
define( 'LOGGED_IN_SALT',   'A_+z5l3MNR$}[`<2 LfMJ>KO<D?fb_!~swc-4y IgS)`|j.RshSd.#FA.K;Kf$L(' );
define( 'NONCE_SALT',       'SX4gVLvsT0{ii U`#&g&Z1Kbg&&@,}~wI51:Iypkn`;i(@bB:pEy9xQP<. !HZ;;' );

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
