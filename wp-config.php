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
define('DB_NAME', 'covoarch');

/** MySQL database username */
define('DB_USER', 'covoarch');

/** MySQL database password */
define('DB_PASSWORD', 'covo123!');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'YQ1*|}JQ:>;e!~`p:X)b#0VqG}UN7NZH0K&SvBg1Sy%&d0~;}<<8(JX@)2dBlL~f');
define('SECURE_AUTH_KEY',  'e@lHEWn@IeA{6).%K|>SJx MFJj^cm{0DHM0B6A6Te/eZPulaFB.#&7MWAKNK%m+');
define('LOGGED_IN_KEY',    '9X)G=hX^>l{1je*F:BT<Jju5kS)u[<gNn&mk|rM=BNKPE+J8oRgG1F_y]3, m<nT');
define('NONCE_KEY',        'nP%s+^LrBCPUvR:@f:!eyBId%2&}W5^/n~NOi%GQ~Kd]FR-&0SI<<7-AHlGoYk~I');
define('AUTH_SALT',        '@ BxX(v,pN[+l|DiZtOF%HUgx9tpk*4|[<Ok;cMUL.tpD(;g79Rr`8wI8Qd+K9fb');
define('SECURE_AUTH_SALT', 'rP[0C#ZZ2`230!Q=BX|lip_ZWpTbO3`T_hC,YqIy8{BWvTp#:;E<U)m,c~MX1a$X');
define('LOGGED_IN_SALT',   '$=`pA)8$Y%%#d;xMAO>|+a!EX9A2ywMH-X8J XuJhD5V=(1T%a+M@s<|0cMgE: #');
define('NONCE_SALT',       '1LW2}#xcC%~fQ/8vO|_t{vr3`DBiWX7(objt>xOz0</oA]EGZF_Nyl,dROsc2XLK');

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
