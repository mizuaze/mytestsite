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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         't[)%ex$`m8~x4E[>6huj> A<9Kj.xJeJTA!nqnMA/A7X1BM*c]f%_?}%/Pkn<|Sh' );
define( 'SECURE_AUTH_KEY',  '(zjSUk!/RW<w,5*LJ![,F{G^i;6VJ1H/Nt)B-@%jmGyd,FA0sEe,TM5}BnL#^y:i' );
define( 'LOGGED_IN_KEY',    '%+^9Gf`z~9NbY&@[)j>t&@l&wn]yhjcru7ZA9^`0t=O=;Voe6M>yw#B`M+XeAKLp' );
define( 'NONCE_KEY',        'Z^KEFT^s;/6j(VW-vIp(AaNPHn?1$)&#Qe5=,l$ArgBenT%%)uNYW:>y&A?Unw`o' );
define( 'AUTH_SALT',        'TP!wG,D,bW)/]qy=m20)v]Dw>>wNl3D}wIMd]hAEY:mBf!Y8;+!dQ;}n~{R+KIC=' );
define( 'SECURE_AUTH_SALT', '2:8)?(ht4i2@kQ-sWq<[&md!,N3qxOsbeL1^=?PS)uZXfdAQ6Kvrm>JcKY-K}f6Y' );
define( 'LOGGED_IN_SALT',   'RxEC1ioqp>$cU x[C,gzu_aUV%MLS1 EA}0gh3EFj@sG_<T8Qz:9N}bnW&C`P7xV' );
define( 'NONCE_SALT',       'v)W}RI&DvF1%W{zc9|4HJSm9mNE!E&}Kr3Xu!D^h fiA)o@[)Fc8Z#J->H9]T6#.' );

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
