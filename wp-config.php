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
define('DB_NAME', 'ramirez-wp');

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
define('AUTH_KEY',         '4^>L~eaE|`DeomVsDJ~1N&JnqrG1(ZROfJqT>Jx0lQfbVQ_+2 t47T~gB|5$@Q)x');
define('SECURE_AUTH_KEY',  '8cG{Cm9jkzlpE+P}og[+C.Lva+ptt|) >>M9r^yY<[gdmpNy;Xe[G,0~<v_8D6oe');
define('LOGGED_IN_KEY',    ' ^z*Xy&WpfK.}H~#P9{[9B_H;.KWHIcES&bmx}b!(=-N;3PaY2&&L^u5swpRWT{(');
define('NONCE_KEY',        'mIG5n$}D)[Vr;7Xzp.~B-WtQfb3>y]q7]CKwjX.cw<U**36t|9NL2Ts7nn9)-cX&');
define('AUTH_SALT',        's0]?6Dk eRe-ssoaXJOb$inWR*s?aG{uc+5DwW?:-.r3IFV!qIV^TbpppF1>4wL(');
define('SECURE_AUTH_SALT', 'CfI61VK?~EXL*FRt/sIH1_@~-xP~Z WjB<GDW0$*T3!APitB`vvjBn6Gv Qm@^l}');
define('LOGGED_IN_SALT',   'im:aabo&NYlmI!w }qye0ays{*=i]EQFC3c@:*IU~+ hHie[xfeu_z|9N7s,Q/W1');
define('NONCE_SALT',       'en(3P9i{V2<:U:Fa?}O0T|5/2;dq]5_wb9SDaE_1uP*oj5AW_S=a%uKziK5$,[V_');

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
