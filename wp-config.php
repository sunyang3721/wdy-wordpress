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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'Mo< nf}nG+qTI*eSKU-xB,)8*n?Z.Y1wsj?u)BoF U]MEI[% /L98->@agMq+.Dp');
define('SECURE_AUTH_KEY',  '&G}_KBG0~LkLLJ*_S^v|/eo/,|w.;-*&@</[us4V8Wd%yF$au_H?y`>K4XC7P23|');
define('LOGGED_IN_KEY',    '+q![7qAB1q }NfG<0p3jLA[30Cyw$B| `V0agz+d+2K7gLf+]Ginqj>:~OQ|]:*Z');
define('NONCE_KEY',        '7Q6)TdA$qcBP[Sar)-8uVNg]O@RYUe+.sAH_?G`[.||xRs;p,@k+;a,J|+tCjf4W');
define('AUTH_SALT',        'C`jf^~b.[$dFPPW-H<r(xAHP%hFo1VSQoFQW/{[|@A`#&Wq5|yy|jT<D7Y$Qr|Pl');
define('SECURE_AUTH_SALT', 'aGy^U+7``AJKoH;S,O2r-L/S~nks*R|}^<RQV@PSTKMi`8M9KDT~BVbo3E Pq{cI');
define('LOGGED_IN_SALT',   'ck*%[7dGJgH6p+[~p,h.5P+,hs{f]-$oB#B]e*%)TGWsXI,(3W#D)q1~9+Wyi+|_');
define('NONCE_SALT',       'vut2vMZ1 lS,f9Yz2]DyNxq0tcC6qskSPYY&F|u?XrUuIDcLi,`9-j{(`3O=}+v<');

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
