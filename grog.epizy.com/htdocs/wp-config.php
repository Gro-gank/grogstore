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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_32476481_w676' );

/** Database username */
define( 'DB_USER', '32476481_1' );

/** Database password */
define( 'DB_PASSWORD', '(p7g7S2[D5' );

/** Database hostname */
define( 'DB_HOST', 'sql300.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'tpqxzrzqrn7zvco7nilfupxsktwu7zblypd54b5canul5q3cehq94vehl6uhoytc' );
define( 'SECURE_AUTH_KEY',  'yf5pkdmdrskq0xfznbuyfplvgxieukv2ptb0ubvwrzb4ng2vh6utyxautjk4c05f' );
define( 'LOGGED_IN_KEY',    'zyqtveow0gyx0m8pcrwuolu4mworzx1wfmcwlgchumlvxcmiur49kwuybcgfbmgg' );
define( 'NONCE_KEY',        'hf2r63jorw9ha2mtfi4gv9bbca6pcxq28w6kmlm9d17m86ergg6deg8qjqnlvhxn' );
define( 'AUTH_SALT',        'jozs9k3f3ufpwdbyfdnyqq5cewt2uirxbiaa4aozcqlnstxkqztf1dp8f0lxzogz' );
define( 'SECURE_AUTH_SALT', '1uulji1jes7kerjwduzxhiztx86pfgwk8nlw33sgoxruhokq82wtuehhlnyk0ydj' );
define( 'LOGGED_IN_SALT',   'btiid9hsu6zbrrfjjitek2nvu4aom52moyjsvugkqxdeyqvpbx58pnp2fbjagvfn' );
define( 'NONCE_SALT',       'hg9r3ga10gyqih9sycs47yf83ieyfjggcxyl8nsbxn9xzqh8dedocbsfwfulc6cr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpls_';

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
