<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('DB_NAME', 'rosewat2_WPTG5');

/** MySQL database username */
define('DB_USER', 'rosewat2_WPTG5');

/** MySQL database password */
define('DB_PASSWORD', 't6iheY_.{w5tJ1=ku');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'd83d7c22ae4a016961ca9ebc82a31f669f0edb5d2acd77832ec579a9c9d792b3');
define('SECURE_AUTH_KEY', '854e59be423dab4ddbe9b34bdfde739d4799885048c10bbc7cf279a61b13d001');
define('LOGGED_IN_KEY', '5757e1850ae69d87d359b57b7248bbe5eebfafb2342f4d49925783e192554117');
define('NONCE_KEY', 'f41be42e51fdd4bb911330d06f88644f79fb1b85a9af41e499dfb149c3acfd59');
define('AUTH_SALT', '334ec8d7b88591deb09b61c1676a57124f15d3411d214aaba3b7022bdab85a60');
define('SECURE_AUTH_SALT', '04d4558a17b2621e31a7a61d8ea379dfd59de74f57d25785011ca8ba828d73df');
define('LOGGED_IN_SALT', '489b1cd1a0aeb50c5c10f84eb1143d4aeab4d10cbc650c7082ff16927cd12401');
define('NONCE_SALT', 'd4109cf6ddccf23dd96567177174e529cf86193afc6e1c6af8d940d2ba1dba51');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ycw_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
