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
define( 'DB_NAME', 'bd_bs4wp' );

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
define( 'AUTH_KEY',         '%H[wyx_E%~m9@&2u&)-${pB/S++(NiU,D}SrF!W=Pg<U@s;09%`fH[<rvN6rwgjH' );
define( 'SECURE_AUTH_KEY',  'u/X_O)VW+amWZqa7f9=NW_=Y]i:~+`~ ~vNkmb7252$,5<2xX=w<>l`LKru=.*GH' );
define( 'LOGGED_IN_KEY',    'HJQ5i!VL[QL>t J&m4it/}9*Yq[M#BY(%J{1}` 9oH$f0Am[&JFtEl9;ov5y|qis' );
define( 'NONCE_KEY',        'RuV>l&:HD @o,vF8w&9,7R5n{tg;]34q~-|S%{A%ZVuX>KRqI,CfkRfWWf3`J XO' );
define( 'AUTH_SALT',        'AO}!#A7iK]aa@FZ*D@^$):&5saImXH@`jQ17w:xZ5l|r#T5(u|=Bpv4kq+5z$&?}' );
define( 'SECURE_AUTH_SALT', '&2L=|YIs4Cy:3Di<MR4Y%i)bT4hwSWat*Ef8B0x8+~@-Y$G6{d!K7AxkR1F2K~@#' );
define( 'LOGGED_IN_SALT',   '#yIY^[8jDr5%Wj444I,^T}-F0V;u]O3]2R#ILG)fO63mB6}}dIuZGZBp3WP(XucI' );
define( 'NONCE_SALT',       'fJ6q&})9PYY}+fZ&;D`3uO0zr2l@wSbVUci0)m@v1wi?:3{c0<MJR|~?sXQ<C8gz' );

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
