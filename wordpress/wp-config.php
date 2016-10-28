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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'monti_l');

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
define('AUTH_KEY',         'C+-d:[7yMxR=Q1<nwuPI|y0C:bW~H|2RN%%:C6x77n,YBKp>=GU4+tSFw9@Uo|KE');
define('SECURE_AUTH_KEY',  '%TZ*6<Fc]o`h{;DOu@31CndR.%ya+UfQVv~n,A-(YayYHE-5p^oO+H9Ipg&)~X2d');
define('LOGGED_IN_KEY',    '{91q:#p-r2(a24HJX._O&K0,]BK@s1iiL7L4cVKz/oBG}ZGq[KNM_EF)0y<tm3Vc');
define('NONCE_KEY',        'rKF,&tS#UV-z@?4*{d}0hgN|T91wKdxUOTWIQ(<Bp<w^IsH-]Z6P4VP|S8g_b&IL');
define('AUTH_SALT',        '}Vp4j)`&NX38*`}{K>7od/Tp.+ngL+zmzXZ5+cx5H)ccV-a|Y`M<9hpRco]Z:jB ');
define('SECURE_AUTH_SALT', '?FV&zZhQ?[[& zo2NI5&5e6HH?oy9v(8.xpXVc6&ti}J6(oWQ|^.08Stt]D,<6tF');
define('LOGGED_IN_SALT',   'GYsEsk{8$e)v1MfE+8Ng(~xq}J,=i(2TEF):K+P`t(r4+bs)zR(<:N /CxNW66I<');
define('NONCE_SALT',       '5kW`B|-)g-^==eiKxLI2L)D{G|-Dim#`z:1~Bx?-PR+d_rH(5R&C~I)C[7:|n$X!');

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
