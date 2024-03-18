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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'kTzv#i*z|v@0}FVTxh;%&Wk Ztdf{?gDR]m}P*@l!2<G5t~XCW/i6P,7>GdiJpnv' );
define( 'SECURE_AUTH_KEY',  '?ZY`5J*^8iw^^;kB1!8ce,j5~_)GkM6)xq?D>jQODK P9s!MUDRjH#(->7EcsO8Q' );
define( 'LOGGED_IN_KEY',    'I-hx#Yh i^%mrV ^]xn3:1=BBtc?UD;_UVWSb{8+j0PH4Tj|1G@hb$>(M`>@mW3u' );
define( 'NONCE_KEY',        'qVD184W)QYx_u1_fo6/m8EJa8giUX Te0d7LY0nBR/8W6_t(,.T9U}gd(ImV6v#@' );
define( 'AUTH_SALT',        '$y _`We^m8jz>V8wc/L_QlAo@6HDrD[]Hq}#&<,G.SE.Xb?Wz26LdHKlIvT>jPMI' );
define( 'SECURE_AUTH_SALT', 'J3S:#PH?gQ~L;z(O~DUUW5#Z*( }^8(2z[-GR-Lp>-#?V>R{U*EX`b.)psAGptjB' );
define( 'LOGGED_IN_SALT',   ' u=6J-8,Yh%p)LXH=DEg}6IKY}.:$nh@DVJ#l0*knQJ^Hi9PKG,)L0nh<]9si~{ ' );
define( 'NONCE_SALT',       'imU.+*x{2ciI>UDrSG<<B%p]l?b3@}7pBlBv<jE Z97|x,a^ei-Ch!FF)C]Jp/&>' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';