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
define('DB_NAME', 'crisp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(&0Sxu/jp y.0NdP+HFYz;i43MW+(Apr+H: <1SQ&1~5H*$o8rI=tpaiE{fZJ|>D');
define('SECURE_AUTH_KEY',  '~=B<UzzOn:lZ`+kjR p^vh0`[-+*c$X#s8 l}Y5cJcMQ)Pl0nvs;Q|`5SJp{b?J0');
define('LOGGED_IN_KEY',    'C/EYKq|O;H*0W0S+0 1#V>q>~yXRz[r`$c3vDQT&U|K !8l[FwFy{v}Sq|W*PN@T');
define('NONCE_KEY',        'oIO./*3<z4kAcd2|R:2DC:b6qnMxHZkH 5Q MX@}M`yNRa3i2pW2ywMh^W9FU1b?');
define('AUTH_SALT',        'H,9[TC`*.]Nu10<5Y8x}LA/5}L :%7-zu&3$!3eEO3; RrX8W[(l~slh.6 wH{D@');
define('SECURE_AUTH_SALT', 'qzT|7~,|E^p/o-QRV3X%T!-% 6#+fsX3i}h4CN8iXwNWW}m$$G24Pfx;.BJw{ll=');
define('LOGGED_IN_SALT',   'uCMjKf~fU@@0Nq6P+.w&u7F|CftS=xJl[Tt1:a`6`I{!DmbBgws(5(U*yAUJPs*(');
define('NONCE_SALT',       '=b?v1]yk?/_Ll%?R!LfroRvpU@4vmONtxa3#H?;{|VhMqj`,-)?[qg<Ngs1PgF=D');

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
