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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         '>!lZv2kuaIM%O=huh[b|T!;3(/JTfM1b.:92RA=!(sW06~?}jj*i95O-=M_itxrQ' );
define( 'SECURE_AUTH_KEY',  'qRl0#$hN-`bqz(x(25oo,/H#&FH-,??7bmb6o{S?IQ#RjqW-%FK!7hOJ|!eqU<PJ' );
define( 'LOGGED_IN_KEY',    'q ${*YdoeCN@0mie#I5vk |,}Yz__Gh)v1CcMvuIxBg@Ga*<S2/39.+`Ow731oH-' );
define( 'NONCE_KEY',        'ubYQrMaCI,{qZpB&{}iXoaPl;Yks`aD~H P-&+SA`5~Sw_IoF]~97ab|za,i|{Vh' );
define( 'AUTH_SALT',        'sK4kCAPUN2yoltF9XVl|)D4-|$=&/K&jZdv;,wSP7xt?e5S:}P3% Kbp_V{C|WN5' );
define( 'SECURE_AUTH_SALT', ']I*M@jw c}}y(l9Jc6Dh$h}6aS0k:FC^-#8g3TCBV,=`d# N?^*X[|^QXW:;gO?[' );
define( 'LOGGED_IN_SALT',   '%1d,@k#CBjL@9x2J&uh-g$8pv{]k41U Cnz_*]:2h1ZI3JU`{hw^m:KT1v)5KP?i' );
define( 'NONCE_SALT',       'iqM=K}X06~6(y#H:0-#JY9xM&1cLqDBK+NI?UwQZ_dw?Or6*m~Jh|=6?_q1&7||Z' );

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
