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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'gEn(AM9h/(e]g&:*:Hz0ZMXYo+fL8]T{e~oQPn+XGM`jtQEGuZ_e{~cHebiW(!.l' );
define( 'SECURE_AUTH_KEY',   'rq(Q8Om+d^Pj:b,V,=O]t7:J_x=!>z]qM!hON2Z|RQ~FtOv~cW;nIu@i/DVU/%sq' );
define( 'LOGGED_IN_KEY',     'Rg@8H:?y+R]V$d]*.PWbLqa>j-C^5ovm<>k.xBZZZ75qZ-zb!e^S`/3i67lG;Hx]' );
define( 'NONCE_KEY',         '}gwpngNdt s}t01,fM$nj;Ofy?t<J~2sR4OwyErv@<`}qvTD7<zV^81QyempiKVX' );
define( 'AUTH_SALT',         'UEfj8geLXozY /ek^8Dfo4+zDPkih/+D$/H@%Hh IJo.ZybKO7*T,Vaoj6n pA``' );
define( 'SECURE_AUTH_SALT',  'w]?b)LOK> KYB%8^WX802v1N%Y+P>ev:x9oVwm7UYdr}[|{FNrWK]todr[n(O=gD' );
define( 'LOGGED_IN_SALT',    '9[Ji:G0-jePeIR(FwpsVuD:wBI!.l$zr(tvK=cR^`XWK<HatcKko7FdIkvDf_CBa' );
define( 'NONCE_SALT',        'RnAhkJ@FZ~*V]JG!/2!r9g`!!sCniQhkD^zz$19YDu,8WS9k~::%.J{  Ho.xNyv' );
define( 'WP_CACHE_KEY_SALT', '/oq^R0TbVm#34C=:Q.}e_,E:GZM{%+;H;jyH([1STOK{l43+Um50D1$:a4aXo9K8' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
