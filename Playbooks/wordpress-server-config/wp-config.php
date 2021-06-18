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
define( 'DB_NAME', '{{ db_name }}' );

/** MySQL database username */
define( 'DB_USER', '{{ db_user }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ db_password }}' );

/** MySQL hostname */
define( 'DB_HOST', '{{ db_host }}' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Filesystem access **/
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '35674514604fe1281e7c299dbdd343f8d1f8af7f');
define('SECURE_AUTH_KEY',  '8e6f2fe8937188399a6fd75d2fe6f621c81b14aa');
define('LOGGED_IN_KEY',    '19ed937c9b3cd8bd95c1e294c30a9c7744877971');
define('NONCE_KEY',        '3f41d12cee1d61837ac8f2dd3dc08223c330b7a5');
define('AUTH_SALT',        '9f5961e9f68eacb68d4e9e99df2273454ebd4ae2');
define('SECURE_AUTH_SALT', '3cdb47f70f62c8650298994fb5a67b587ea550fa');
define('LOGGED_IN_SALT',   '34fc724c76f90aeb9d61ec852953a81699b8a3e8');
define('NONCE_SALT',       'cfec12a44cc071a33731b2f58083f78837881236');

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

