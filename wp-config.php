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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('CONCATENATE_SCRIPTS', false);
define( 'DB_NAME', 'makgolo2_wpdb' );

/** Database username */
define( 'DB_USER', 'makgolo2_wpdb' );

/** Database password */
define( 'DB_PASSWORD', 'g(0S)kWp56' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jmrkuigzfm5fbpsbwsjey8likbbqoybuq4ilrmyiex1kpnzro9lmfvjalarc1meh' );
define( 'SECURE_AUTH_KEY',  'jbyikrt7ewfqlcp4zgsyds7fft2sifsq5cmckk6kcbcz3gt5due4bqaf30orok33' );
define( 'LOGGED_IN_KEY',    'lhxoaqaf2visbmjndttcyqfqmgmmglfyzxbgscythi23agvn6xvd2vbgsenw6ouv' );
define( 'NONCE_KEY',        'afttinur4rc9uwatthmuqjj9nvjzjmtboqg4oixt8lax3nphsgyjgyq1d2frc4fc' );
define( 'AUTH_SALT',        'q4o6kr1da5k1n5knv2pibhlipr89qxozsots0eyirhdyj5kts4hrveffkbeobecy' );
define( 'SECURE_AUTH_SALT', '3bxvnkde9o0hx4i2q6tzvuskoeg3mb9chmf4qoe8gnfku9ljmenhobrsmyglcrra' );
define( 'LOGGED_IN_SALT',   '3irlj5qz3lccej10ercfowbmwbxm1ppq8d82zw9uts6uaewpu1t4aycvohcqker3' );
define( 'NONCE_SALT',       'qnyf71nh1kgje15dkuvotpen0dydggdhctsguwawgii7jl8jydfpzdq4empmyijy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'dbpref_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
