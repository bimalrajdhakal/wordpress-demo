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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WvCUghiN3QBjKa3Q' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '99NlckN9#0A,qb[P!|%MCX,FLtT)SAp@v74,W^Be,mj yI|x?}H/ti`C9 e1}VI&');
define('SECURE_AUTH_KEY',  ',kj_7vO{QW9~Q//*1j*=#uDP-;wD*)L$ WpL/NX+.pIM$alSUL)>CS~[=QqKKzue');
define('LOGGED_IN_KEY',    '{9I?%rfYCn*|sf@<Q+gu3l|^|f}@E=gpbANw@7MBr|v@&+~~#.Z@~YC/yP$qpeqa');
define('NONCE_KEY',        'LLKVej(p>sw~SCD{w-6?6BtLQz[+nX.0vnAkNry#m q.C#h]3eI8zo*Md50Po-:J');
define('AUTH_SALT',        '-~,9#N(^ciY`1fBF7Kd c.}MN vT/,Z)^}Skb&0-|zDytBv#[!eHj-%C)=O4rj8g');
define('SECURE_AUTH_SALT', '|m|*8Hk-a8J)s*/pb03am5J5[S3v3E|Ba6.7jxEfy/nICbD 8a-byZNUlSQuFYa6');
define('LOGGED_IN_SALT',   'Z3q=cXI==M5ve6`%q%J7wlj!ha_CaY3Nqfw]^sG3RS4U(724svT,E@S~C`+n2:T6');
define('NONCE_SALT',       ':{[$O0q:6/^re1nwU!Q|/.%,_cbEUi9=`uMttF?H6dR0uNSvD$$1?t+t-gV iYDJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbs_';

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
