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
define( 'DB_NAME', 'netclaimsnow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4n8lBzONO9ZnLtjsvXNLhOV5JvbAoxShgUTiquGeZjIHIaXBllxd8hdFojvy89LU' );
define( 'SECURE_AUTH_KEY',  'KMZrE6mG0FyckIEzJ4vVSxmlJAyKFBML4qGWXHqpP5X1kCt5fDaTv47aGLf0nYvg' );
define( 'LOGGED_IN_KEY',    'nX5tdjeuLw0TVIYj9C25PHvCPzj7rz0TIb9WSuxy41muRvOKaD9syC2CT7MFd1W0' );
define( 'NONCE_KEY',        'bF8bW89hpkGeN2aMFEzfm42qgKJsreTz4okyOY1hmwxGdsrYJVK6gY8xrRQd9v4U' );
define( 'AUTH_SALT',        'g1VrQ7MLtnmkQ6edOVyo4pg632os5wX4Ht9iUY1YHTTrUw6aNZxwgeIhW5R6yNfH' );
define( 'SECURE_AUTH_SALT', '6fUokCFiPasJmpTELXNpgKChPyNkzG4WgdQpvwDy6QKVBWLemsTm0cPxkFLUsrJy' );
define( 'LOGGED_IN_SALT',   'Wq7VJclvED6RXXKD1r2sZRe8sYWRx1xXFwN6N8P1D2swn5n6S8p5iJIOGmV7X5kg' );
define( 'NONCE_SALT',       'wvAKb8wxMx5hrkafqUw017kYMvcH1gLxN7MEKzMGtmDxkso532sP33RUY6bxt1w7' );

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
