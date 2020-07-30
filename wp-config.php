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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moncms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Uwm`rL>[sUfaX|%3_,{QwjA3f};PUF<v #WaU^b7VTq]knCIJ]rY(zHb{)E~j$-V' );
define( 'SECURE_AUTH_KEY',  'K3P :&&qAk4!K>YC9Q#fb}j[%Mh?Bx*4*%lq%zYoYYyIY/XV0-zV_C4iZ2aKD7 K' );
define( 'LOGGED_IN_KEY',    'Hz,|>1e>G]]7WmlB&|`UU(`m>=fFm!Fu<;w6$dmUvmT9av[g5mV/{!zhpFc$D7_=' );
define( 'NONCE_KEY',        '#^Wyqox];NSHuy3#<yk+KSpxn6=sv,w*oOx5H`sX6e71SVDz:=,j6yUV;l!DB30m' );
define( 'AUTH_SALT',        'am!MP:_`RM+*lFCVC?uVX^UG6k[t)}EYy^E@q9.;(i)qJsvVec(#FrW/x&5Lc7).' );
define( 'SECURE_AUTH_SALT', '{GgdYotwVN>Dv,Qc8AF,&Rx/X(G7XX]!Hv8oFKQ_8P%lJ;TEL=h[c;XE1B>BY,zZ' );
define( 'LOGGED_IN_SALT',   'bLq`l6AV6P>gVi.$b#*^F>5<BSqI4]<WWB/#o5EK[)g_n+r{DQyoZqZ#pa.|WkbI' );
define( 'NONCE_SALT',       '_3dYw Mv]R[?i0Y_#V9b5r |H{B3Z:d=dtqq+.wF5EK85HQ;#,PD(2MPnkOmro7R' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
