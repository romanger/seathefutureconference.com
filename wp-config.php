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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jKELBZyn/FSLi1rVW9Tp+SU0LJCDbzINi96IKKNq648poqs53XeR9FkgqL3xzoNxdN/AcF9KIjtYHjEwER8V9A==');
define('SECURE_AUTH_KEY',  'sLpeMM32mwKfFk1CxQ0C82nD3cADg6B6RAGAT0omuVb2p6F+QPrULQ/qjP+/4ZHs8eL7d4wbwqslNlP4lLX2gg==');
define('LOGGED_IN_KEY',    'kFTmJDniLBBeW4ugz9cOkjXWdVuMiw/3MNulx2C3ry4+Y3sRWlWkBfLYGErRNX9TyRDfO9JupJ6F7roOkrFRzg==');
define('NONCE_KEY',        'QWzk562EalJERhD0XLygQIEa07KgCpkz30x7KmMYp92alAEKuuWzplRImtmdr0BwqjEJdcdcCxT/daIFJPu3nw==');
define('AUTH_SALT',        '8Wdi7w3XX+YyjN7prKg0pvawhc7vfQxP6aEegmx8HCA1dNAvACqHGs45qREkuBsVFsjgrwqNvU3r4tF2W0+ybQ==');
define('SECURE_AUTH_SALT', '5IaS0NtuHeRW9sD5nJx+dfv0bVsXF7+kdi3CcpRhXvae4lQdCThqu/A+AFmWk/0lSYioFlENLN4Hc3pIwk8P0A==');
define('LOGGED_IN_SALT',   'z5GOEAvHhqqpkuV+5uq/sNzVzcPkR4NHY/wtq7PwgcTm2elxmoSJN/CwRlZV4kWGt4Nz6XPsuWzy0u9tf62VUg==');
define('NONCE_SALT',       'ttbQ2ZYKbHPAfPpBw3DOZpw1KHKj+AYP5miKxFGMUnJYibwlrhpSlclfwiufjumN5wd/5cguPiJboYxMaYtspg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_f8akl8jbyg_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
