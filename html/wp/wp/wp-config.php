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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'tIE27DB3' );

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
define( 'AUTH_KEY',          'FoYbj6RTlCPQYN=[KTIL]zn+ MhT4Hk+VVQFG@OTWo@Grfqwe)x#0?g;H|q`!:Md' );
define( 'SECURE_AUTH_KEY',   'K~+PjtuHYUSC@YI1+rbgOlWk<48SHgjdJ2=}_gsXc:9Y+H=S4&|WUxA7z?$,E*~3' );
define( 'LOGGED_IN_KEY',     'DcX&3yx:|z!EfdvNcV$Sr9i(`Gni3gTMO3cHdBMb+5P6&l-B^eFZ~%mWd.1&=TA:' );
define( 'NONCE_KEY',         ']F_5-}}<1YgkZd* t(Att#7J!tV;t[b}P[W?]}#SY8o$0qz4$qf_ {dU4D;x?j?L' );
define( 'AUTH_SALT',         'y</c+B4,g2QJgkIK;sXqY.|}F39>3u]D$Z)GRAV`/7[:x(A3mQ%Ck2*NcQ6|]EAN' );
define( 'SECURE_AUTH_SALT',  ' AVwi5B]HkWoL nH*TudOd#g2Z=!4ZAHs6Y7Gc+Dgst]x}/*.n`>lx~@di2P[}zn' );
define( 'LOGGED_IN_SALT',    'pzA{ p(0c(yeN57?HE?.v(kBehZQe<UGH|*y4]PJ!;2^(s7k^A4F6<y;Tl~C3{iv' );
define( 'NONCE_SALT',        'Uy)eanxvUk`R0uX!&dT*UV]HXSg2AX@SC}<U+dDX~h>TCWovL3J6xKX|g6aLPzE(' );
define( 'WP_CACHE_KEY_SALT', 'J~7/l%Z(e<LjK4:3M2m,Z}`>.w|&n:5;UZ~7 x#]H!qjs `&Rx.NaMO3<IH=m8L*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
