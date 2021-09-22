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
define( 'DB_NAME', 'Real Estates' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Rr4d7P@tuwFj8!aE4_C3{ggU=,m]#GaQDq>=rT^Cu_0Zj/q%WE)Lz4~7oUBaRbQi' );
define( 'SECURE_AUTH_KEY',  'LhHG~as&+hOf|]]QQ1JY;/f/7DGj6XnAst$3`+.[qe_(;EY}8RU^SsN,6eQX=r32' );
define( 'LOGGED_IN_KEY',    'puHISS@HUc}2_1b5Z/Uon!d~b1-qVbT`45*?COlwt&nxbUikT:<p-/MHlRh*N=?]' );
define( 'NONCE_KEY',        '_ujjM>*N@sl!S!KG}arixv}q?IjLhEwk*{Z>S/~]`n3q@1%-GAjI=!enPQSI2,(2' );
define( 'AUTH_SALT',        '},B8>c:r/1_^vH+,cIw4W`;2F0*cSz!{?dBhvvZHBUQv?26nIi}@{<)W2|a2+!9S' );
define( 'SECURE_AUTH_SALT', 'Sb x^/1/qJ!D!mQir=c4 :pbQ6b !>#<&VPV,[Be{)_F950Cb^*[;X:3vACgu[?d' );
define( 'LOGGED_IN_SALT',   '%1(;Py{EPyW?N,y~D@Oww4tI<sc|`E@eYr1 O}ls_pD7q3:|oG~&-kaF83O8OG*;' );
define( 'NONCE_SALT',       '_v{ZG<G=zjtDH<W#02!`$+>.Y<On!/]Awj]39k?;I`$o,n[4aoI?UYJnb/*>O5kK' );

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
