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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/andrewyardley/projects/wordpress-headless/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'headless-wordpress');

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
define('AUTH_KEY',         '}8$:3v[3Fd)%, YtwhV_-f~d$P j)rb[=H!1CDY)0-_m`o90-E`l{4s^X>n;Fa`N');
define('SECURE_AUTH_KEY',  '/2l&s,QSGL%|W`HW^Z:?ApR.iXdSXF}t&`:w M@0Wh,thcQDmgN8zobc)P[rv%hb');
define('LOGGED_IN_KEY',    '*Mu>~[_Y:/B 9D]AzP3$=/kcHwlQj~W<.qTehDC{J$R/Q3VK;&7KR1r[Q.f9/$E6');
define('NONCE_KEY',        'ga7vD;7z!rSde];SQx~;ZI6Jr8t`^=:NqFsvk_/a@EMEMSE?s|CM&57c_rKWCJC*');
define('AUTH_SALT',        'eE_+F6d=)*uRogOS>o-OL x|DW9auQi)hzSKvY>X{EVjZ1?BEM/?j!#z}&4lFI7?');
define('SECURE_AUTH_SALT', 'KS8ze&gc%+P5Y/]Tnk)-gtg6:FG3.WEyP=,24:M!=Qy3MkfXV.] =~<Bc-z6x{DR');
define('LOGGED_IN_SALT',   'n=iTwQN }::=T0#w[ Yw.4,R A(uMSP:;jPGgjgv//`<YNW1ur dsO_MT[]gKC.0');
define('NONCE_SALT',       'gKb`;z*s*YS-g*kss.jm`Ih`Vx1`y7;dmiqyF!T2GS=%<{li|OL7 @IhAoqyao|n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'headless_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
