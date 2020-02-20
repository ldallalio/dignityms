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
define( 'DB_NAME', 'i6361753_wp2' );

/** MySQL database username */
define( 'DB_USER', 'i6361753_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'X.MdF6QYIswjpHAAt2h06' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6WgIssnfK2AldNLRRjY5NZTRab2i1E3pVvXsiFoN20tFS3lgFjcXO22B97qvcizd');
define('SECURE_AUTH_KEY',  'PBAoFu8b64GbFyEI12G5j3stMwpKATb8wzRGM6DtNEOisrzRLNsCQtzjAleFWurU');
define('LOGGED_IN_KEY',    'ygfE3l3d6Ljdjpt5cQZKYG8amk307luYL0mgEckeetspnpHX88yuZCZfFvC2X2bp');
define('NONCE_KEY',        'bueD6IPNWdAtmVrglI8d09CB04Wyb7l0tOteWki9RNGJxut4NxTVEj5MohNXk0oK');
define('AUTH_SALT',        'KmAg0iEkHfVX6iRJPfq5ckOlpPppgT4AiikGBhPYIhpfRorFgmZrNvKmAkP1LcHv');
define('SECURE_AUTH_SALT', 'ftk84jnd1pzYlNgCUTpy30Z7K6Bfq9JUHPKicucHArLnLqWDHcNsfhooMuIi5N5z');
define('LOGGED_IN_SALT',   'Ysiz0x2FnB0LGQKSW6pjHz7eChoyl8L46SUcOmqiVy0DFay6l2ZuN7uadsqkZ7fA');
define('NONCE_SALT',       'ZKftilSYCHBLo3b8CaNCl3tUa9tZKcUn1cnGzb5oWGT6LtsPZIgOxlIFTvmy4j0Y');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
