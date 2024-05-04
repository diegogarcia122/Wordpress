<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Agri' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '12haTyEWuh1WkoFxKGmANJLjKBLjOqTTOzZ5Ge1NfQr4mt53IWxCJNkJ7V9mvAri' );
define( 'SECURE_AUTH_KEY',  'vLYJrubvy0jhLH2H2SS89BCviRlaFo4Zi40TxFXNKOgjCMrQOMMWsRS6UqnWBfqm' );
define( 'LOGGED_IN_KEY',    'GcfAZXgX6rGDwO3DN1SXZKA9aL9eYlxQEHhyrIZAecSQIs4sw7xx6iwSfBqBPFy8' );
define( 'NONCE_KEY',        'C1OSlfCJbuVf7bbzXSrQGTQVIyFFEEGTHrM6agspHJjOt1E7JD7jpPFQDkvXyiAS' );
define( 'AUTH_SALT',        'F9Isi9kluaJeLqgZWodcXxs8UUlq0MuRo97HtyIIaGQ5TCKeGzg1nOze1M6s3P09' );
define( 'SECURE_AUTH_SALT', 'YTnBrbNEe6GYApcqv0qwobMbslfNhxEBoI3qXmvZEvxTFmRj0jCuDGYrkGBi10Pp' );
define( 'LOGGED_IN_SALT',   'K79NzWU7MRwFYHEcQ1Vo3VV5vQRSckOfBz3Tmfc5bG3hFy8cFMH7A1IYk6qYhji8' );
define( 'NONCE_SALT',       'BYA8uZHYqW0xTpze6GxZYpfFSB373wikCpsoz3hpIzAOwi8j5W6Fl4PdPlueVUw6' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
