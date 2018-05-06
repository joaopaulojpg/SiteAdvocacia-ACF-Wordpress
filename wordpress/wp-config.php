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
define('FS_METHOD','direct');
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=LDu.A($6V3$+ eg&eJ+Qv]*`o.d^:|/`f;Q-DicM^/<<dE0{*]%! E(koG6ZN(f');
define('SECURE_AUTH_KEY',  '7%&8x;SsGR91<,m)@_sesqnwQ-2_.EhrHLQbP~TI,~xsAa$&v{p$k= OE(y.](yp');
define('LOGGED_IN_KEY',    'X tuJwe;jy-4r^&D$`>E?L~|j<; aN;qW<C,ngkdF(Vb:eWa9AKS(_QL^)^r<x}M');
define('NONCE_KEY',        '[+veJ$?zHI!vV`@ptW;zgf5RJta{WC1OMI9?f!{K6`/-z7%(,Hm4t>-Qb6q%f,n8');
define('AUTH_SALT',        'S}x<UJPNr*P|C%i`TAL]6gt@a|>D-RCjbHkOhopSa<:H#I@N;bre34}QG=^GwBZG');
define('SECURE_AUTH_SALT', 'cym.b:nq2H:ARP{hpKoVEi]+$kT0hqz.5R&i;5Qmg(e?9TxC<jNA&ze$%66+.) ^');
define('LOGGED_IN_SALT',   '~Q1@+*v$Tn% {ExO#OuTlRE8+6RG[>XX=9)ZHwxHt:bX[hqy6 1uc!hZ7j_b&`VU');
define('NONCE_SALT',       'p<O9U!X~u;`9tH7:M@PRqz8fw&VU>A86~]H M-mJZU^<mOPJYB}eD/:GY~R,4nnO');

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
