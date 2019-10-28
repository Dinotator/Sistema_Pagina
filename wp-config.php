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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SistemaTi' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3a04632fab0820c5091a8fd5d9716e19e13f4c5f74c72de7' );

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
define( 'AUTH_KEY',         '%7GlK^e4EfS1!ozq83{$+h6GfaGr&ET-|;eAr#5];R<T}J_FYk-OF$r!Yv)1qHUN' );
define( 'SECURE_AUTH_KEY',  'OH7J^1_k[oV)a2Go<J0lH]8jG{H8l;nqhDel;,S.7xcjCr+(O/9$A~nJ]1>VO)49' );
define( 'LOGGED_IN_KEY',    'Ue+&{Ny &s~OH*_R>Op@lM>`#ORq}B18N=w>ATmm?(`>!yV6?iz%I1tq&_|Ty@I1' );
define( 'NONCE_KEY',        'WtOZ7Ufm)=~:hn|CE=,x]z#3:&5G(~5`HfC1J}1Q0x`x#k@*&=1rBf&/*Kmu?ohE' );
define( 'AUTH_SALT',        'urz^_:OH{c4u>KZgvi0@in#i5Jv,2lY39g1!C]g|ZKb:vca1%,$56D<QNub.=U?X' );
define( 'SECURE_AUTH_SALT', '=uS1sFxY#8@D/h[7W&ui9B[9;j5K3e7;cXxl[ojQ._H4]v2@Y9@h}*&_!RU.Y_Kt' );
define( 'LOGGED_IN_SALT',   '^;?&O}W8tb(4,8{WatVc2~lX<.&u|UN7hl  iAGwz|a.jra*rmY0=[X(MSD!>0Jh' );
define( 'NONCE_SALT',       '<,I4#kokgj{L!2=z!fb`su-M-dwd24ZG7.$MvbJ3tJ3=)e8P( ZfIeY^$(fIsO]/' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
