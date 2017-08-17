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
define('DB_NAME', 'myWordPressdb');

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
define('AUTH_KEY',         'tZq3p9:uIYs&R9Wd(s0[FpN$g|A}j9z&^(-9-0b<I[LIZ<+2G42z;w[vA+?L)+CY');
define('SECURE_AUTH_KEY',  'f>m0FsO/d2V0$a,qVPi0?sFEF88F_V:;osMcxTp[gahejxH}xK~-yV6Pv>/dqn_a');
define('LOGGED_IN_KEY',    '`YU1B(FaA/7q4u{}YDUH$QCLIzTM20R(tWf(VwtI?3H]0f+D[shfK;l*/(7%Y>@2');
define('NONCE_KEY',        'c0Xw9hm]dJSX*k>zG;D,K.GD3n.V:r>f:fIn]O1f/.?}]Uy~O7OVExOjGCg<v1]i');
define('AUTH_SALT',        'L0Y07b,;muX]:Gn38>9Ww( 7|CL6X1lNS5(iO]yyw$1sr9uQ@!EseEFx2IVg&b&o');
define('SECURE_AUTH_SALT', 'o^@8j^%69ff|5av$@uWm-;amJDYIQ9%StPTdesF_Oy? 2[mV@7>@,=^w)*^ Pq[*');
define('LOGGED_IN_SALT',   'MTfhI./H:]:S@{`!P#J=.t}^hwPgA@!WbpQ!)nvl.d=!IZ~[~Jpnb:0?H<<;HV2D');
define('NONCE_SALT',       '(Qwrw=v;1Q*(lL}m>b_rwqy!mhIn+JvEv/v`Oe{W%WDNqkwqq#@A$Z^^{ytnp#]H');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
