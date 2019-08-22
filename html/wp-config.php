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
define('DB_NAME', 'blank0416');

/** MySQL database username */
define('DB_USER', 'blank0416');

/** MySQL database password */
define('DB_PASSWORD', 'bl04161202');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k0?BI95q+h:24w~-%);K~c9%V-X(lTJ`c<^p+js,!A9E`:`z%gta#[YPN>}x;o4,');
define('SECURE_AUTH_KEY',  '%UO05wgLW8MQjduJ}|):}IJm;Nq2-g%#>F@wFUdl_kV6GX=ZcBBZaHvBM<mHtF<(');
define('LOGGED_IN_KEY',    '2Y`i!g[_J- %9wNaeNsPk;lsjYhS]?$d)R11T</F/2A lf]T;2i4lKKDrrtARpD~');
define('NONCE_KEY',        'bNi<>:#gFH?PZ .H*wF7=)p;5xv=7,m>P,8|E)8p;Y}utlewPKt3*$K %T|G_+U<');
define('AUTH_SALT',        '2i1;({x.ZJ!9L)j):gPmtA=s6.o-[G{32Fz_G%M5`)NzbPSw^Y?cT5(h:%U_v?-H');
define('SECURE_AUTH_SALT', 'P6=eK:CTTZq61kO#f~V/DIU3fHi75=KZyQe %vOM+xF1dSTHF?hlS)F|kvCY)OCI');
define('LOGGED_IN_SALT',   '<r2f`uNR1}} EJHjf.WaS !kyO9-@Q=O0Es{n8<YB2`avimsQ2s`/q>j5D24q >/');
define('NONCE_SALT',       '{@R+c42mlrcM5nZ.KUf?Y<:{},0h7)XMQY7%5l/!de0U]0fcsE{7Z#gBUXhlK@/%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
