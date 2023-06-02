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
define( 'DB_NAME', 'pweb' );

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
define( 'AUTH_KEY',         'z?Z;f;-GIiAOvOr226!~| <AB=;&8Sf;GfIBymD+&H<gqV(bCWl]ti91Q%OxFH~P' );
define( 'SECURE_AUTH_KEY',  '4Z^T=t5itp(0x8wyRWj2Q3hqw*-ISd=nuLS22JBEJp@i;TT+X bI(~t?EuQj8r.Z' );
define( 'LOGGED_IN_KEY',    'UY) ^`-7Csg0i:lL@SFFGD336QwyY8Q7i@K25xty3IBV syy&n<GmLl1fm5UQM-x' );
define( 'NONCE_KEY',        '<Z^oe=niO5odW^DbPx!V]o$|>;;j7h<LK;>pD@:N?Na~Y&+`dGi{`3y_CbK?|NxV' );
define( 'AUTH_SALT',        '&|fU(rC|I%C<_Xj)X][GxjB2MJSlt`lURrTyS-N7BL2C3uxc<)Mw@u_meCcJUYDy' );
define( 'SECURE_AUTH_SALT', 'RQ?KZL>;~q_ <=/=FiOVa]]:(ae~[E|_[=@iMYfc7F]jl2u*;8W1nf(B@9W<{*yX' );
define( 'LOGGED_IN_SALT',   '9VFYT:b0iI[sUH/s52bLF,_}udlvcB7bP%(5Ck(VAEXLmsU,26D,0j#r.];7oo-(' );
define( 'NONCE_SALT',       '=vukW@2ysw4GCBsGc5cVM7CGc38@2=sHZ_]0:F +q6;8er6J<s;Onq3 Cg2TJkz?' );

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
