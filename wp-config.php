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
define( 'DB_NAME', 'priefwordpress' );

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
define( 'AUTH_KEY',         '^~eBG!6nYc3Bu/v:bsh^wW@k+UyyOkmsCdb)BQP0B+MW;MG?TP,SMITDOEM|Kqkz' );
define( 'SECURE_AUTH_KEY',  'gF^-KzP_)fO}5n_Bp#c_ |YGT2v)%%j!:<;&Z.GbD1u;P}wo^ x^Xf%Jxrk{t#xc' );
define( 'LOGGED_IN_KEY',    'pkn{{H9JO(!+wJV#U&fWtDHA=d-k(1NAV.M@^B;AsR@,/)2MXwvWA^hxHjp]C1Nf' );
define( 'NONCE_KEY',        'sgT(>]9y_Fs8taswEN3sV)p8G|&z$|:Z}GZ2%P6uwIQOu3<|%o`WVl/uj0nI8J5l' );
define( 'AUTH_SALT',        'n-gsR2Q%S~#}@_!r].RHLB2JcW>,{++{[qX/9w8+J~Y=x2j>,%)cNl=o2(<g~clp' );
define( 'SECURE_AUTH_SALT', 'B>ik[Kz7ER,7l#-TTg/~{pr9LJc~yF>:>rG^F28`0xzRIAO)Qif;Jbs$_^%9k,I<' );
define( 'LOGGED_IN_SALT',   '^[3]q!SdAL].xXX246FY]eqw>CT{p*Tm2P]< 4S1-AX|Wwe,n!.Hg^)ICtE13gFC' );
define( 'NONCE_SALT',       '+`+b!HR1H &X#g9p-Y5F6!q0a;`O#YQGP`$:)t&b6xd>sY3g_VA@N0J6)Fd*x3B9' );

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
