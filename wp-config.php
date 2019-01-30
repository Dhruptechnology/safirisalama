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
define('DB_NAME', 'safirisalama');

/** MySQL database username */
define('DB_USER', 'safirisalama');

/** MySQL database password */
define('DB_PASSWORD', '9kiy69yWIkZbrnR');

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
define('AUTH_KEY',         'fkq/2dZt3wjH`c1-mGb)I}Z{]Q)/<N/qtibRg43[X6r-jvc/!H/XD2U/Lxa;5=<E');
define('SECURE_AUTH_KEY',  ':We&SXO]KB7yf6KoQ0= =s5_StHqz]cWQ5n/CC]mqokm.2 zWJN5Ca#gzN2>!eGJ');
define('LOGGED_IN_KEY',    'rT.0$rcc<Ih+g/Ib@gynRTKt(5ydKo7)_LB4j.Z!vs(:^j*fV+?B@SVQqPhp4,*t');
define('NONCE_KEY',        ')}ql,;HFV:PDBGAYV4>LcX_oG1324Sv&B^ry7_Rp{9~(}@rZ}8Pku8w!<a>av6<z');
define('AUTH_SALT',        '3e_/#-sIR9w/w%Pk^9WKb<aU3g!~8Zbc`t:7|pBAGmnuGjsgS,guRN+J^lm2aNW4');
define('SECURE_AUTH_SALT', '>d2}>0$Zj,T]SLnh,J0a=^r[=9OfyhK5R/:X:oeK,oskoF_gQ&b4/]9:AyDC3Fhp');
define('LOGGED_IN_SALT',   ')?Ttn9,{??a?R)@Qs (01uMAr<)RGxtX+q[*!_SVAVoUe-Okw{tdNjUy)rujm4/U');
define('NONCE_SALT',       'Nmc1i.9T|c9r`1Lh3=J!Sc4GTf)-]L/`~=+3Uz: Vzn8%;a1!?n=_*:Vp0B*;=M8');

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
