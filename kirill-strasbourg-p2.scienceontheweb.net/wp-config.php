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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk1/2804437/www/kirill-strasbourg-p2.scienceontheweb.net/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', '2804437_wpress49abf63a');

/** MySQL database username */
define('DB_USER', '2804437_wpress49abf63a');

/** MySQL database password */
define('DB_PASSWORD', 'bJ9HpvWKDV5KAQcYfBrcAPIxfmwAVrLs');

/** MySQL hostname */
define('DB_HOST', 'fdb22.runhosting.com');

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
define('AUTH_KEY',         'pQW;BzV$jED;#3Cnd^R>~;v@&Df nB]s,kk>x9P%eFQWpA:[|JpLsBcM7g1+,Thh');
define('SECURE_AUTH_KEY',  'hal;KG9H$Xlf9|-r!=f6<Y7{%+-Gskd`iD/U-%D8;jE-U97Ux!V+=o^?VTQ:#9Nu');
define('LOGGED_IN_KEY',    'FtBf474yJdC=lIe=Kl=-TH6V].(v]-%R*~.:l,I7ToD?`f i~box!Q<q#}B`FU(0');
define('NONCE_KEY',        '2hCNLvjkoxJ%yX^|9I0!_s#-BH]{]Ir/L:R(!#vJ_801h6xYI@?g%0mgc^M3l8g<');
define('AUTH_SALT',        'H9o,%m7j9&<A<TW/[uuD@#WfJYR&vRzZjPc9KXxehX:<w5N>&N N`@OA7O2ilY@7');
define('SECURE_AUTH_SALT', '}Q_FZ2n)6g S*c3XwEu[hn9<J4@]]8}]PF0I0.O&Bu,9fMk(Gs?0H j*{sp8k^8*');
define('LOGGED_IN_SALT',   'y0T>B;V9OyR3&;]Dn5Td|,7 *H08_o8(hog=y#m1S+&^L=brjV[Z+o?xZz(Phe.E');
define('NONCE_SALT',       'T:oRHbK7M$;2v=&|}vvO1R2ph5jhW #B+x+Z/$,EDE+ZZuE5!,e-V1sg]L i[@hQ');

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
