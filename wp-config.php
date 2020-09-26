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
define( 'WPCACHEHOME', '/Users/andrewyardley/projects/wordpress-timber/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define( 'DB_NAME', 'timber-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '**gss1.jOp7sX[ZQo#X9h[t} fkk$M*+:!50L41|1tg%yd7GAmB*M%=NU^gk)sg[' );
define( 'SECURE_AUTH_KEY',  'W>bY(J|!az%bs`+41B-rU]7X]BXb;yFPmK/RSHW{]!$2K>sqK{*Bc=cTCv]X50NK' );
define( 'LOGGED_IN_KEY',    'jN7=-B5(2%Op />J^jtlK32jH?2jcY6iE F=6FlL4 Fqm2;w!Ta]k&e++/Xi*L5M' );
define( 'NONCE_KEY',        'AFhQX%*%Zzk;e;3-H@_fekCpf`1RYbk9R{+k!/_]g&hRM*rECd-C-+wt*yaB_7?M' );
define( 'AUTH_SALT',        '(2@PQ,~$mgK*Jf+WkMh-X1u[Dp*mN!Dp<dhIkWo(E8~hNMQA}cfm3ma~kW,3>|=A' );
define( 'SECURE_AUTH_SALT', 'gim81<e*jy>wvJq~d.1/k?o> S7U>i#4@%;Aal A.Qso:y^H=87{rjej&_;)yR7B' );
define( 'LOGGED_IN_SALT',   '^1]E/(jG0++jCXJ]14KS35*`@ctKcL?4pAI/&?4jj-YZ?mn=G5t0}1GWUcS$bES8' );
define( 'NONCE_SALT',       '1(/3oh7(eOSL~%YaQkpAWTd<jG{,1fItW2dS,$Iz[xWm1/|vx8ezQVxNC$=)g|:$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'timber_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
