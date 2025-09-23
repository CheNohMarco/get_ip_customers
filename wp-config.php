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
define( 'DB_NAME', 'get_ip_customers_project' );

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
define( 'AUTH_KEY',         'XrM,fh`0J-s8^q:~#K#nEUUlmp-g6V,*keXZlo8[u~OT^/2mT?Q/O{Y#;XKFV+td' );
define( 'SECURE_AUTH_KEY',  'aJVhmA#0Xmq#A0b9WsA,/K]#Y%RAzuSTok1xO{-86 92Q_CX4Ouas,n8.v4D~T3B' );
define( 'LOGGED_IN_KEY',    '(j5b5PpH,#Lv)A-q7|/AbagH;Ba>NIy JO!<Zfzz@fvPKl;*<DQ8gox9?#>$z6il' );
define( 'NONCE_KEY',        '.$#gf|{d>O#pqLf!#MZy`2>kuldkF6SNeZDGXgy/7%[CN`JqfTUq6$<@/X5E>-GR' );
define( 'AUTH_SALT',        'n{!Sre3S7J]h/ryVj1NGI*2p6 :WHqVGASjM?@4P#AuA(j]F4B3_.4x,J8aVdN&m' );
define( 'SECURE_AUTH_SALT', '3x^yTS3<6g_Cqk4FG$X4s5@BtH{HT|JW=*$hHW!q4))gH6JFo&</U2F*{0f55)$E' );
define( 'LOGGED_IN_SALT',   '}|JJl|%xo]$jyyKA++!9nfAvaBw~.#Z?m8l25B9{,~n<QZz9t4,a~4@lDvHkIzFT' );
define( 'NONCE_SALT',       '?Jo,7GghYylZsth %c?Ju]ZGbB(xNtwiQT#%z_cEbyheB+^z>jf2VR|ys^)_SLH9' );

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
