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
define('DB_NAME', 'xpgraph6_wp783');

/** MySQL database username */
define('DB_USER', 'xpgraph6_wp783');

/** MySQL database password */
define('DB_PASSWORD', '02.p(XLS34');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lh0seqli62w1ykuvcoixnn8aphmdqvt0ppxx2onye7rr4hrtbfewoosrx9picpbw');
define('SECURE_AUTH_KEY',  'acj42tfc3ks4ldnzdxxmlfafn1csqqc3bunq6f6aykzldvodle1ya2jqirtqbjxm');
define('LOGGED_IN_KEY',    'fh2k2midvr0kgrmghhjrb6rqlfjz5nwt0485mveaj3oqayrj2ossjczzhnr1xsjw');
define('NONCE_KEY',        '6jfr1fulu9yygavucmqlvktslvys7eq5egfkbmopikmhrdvurx5pjwbpmqfqtidy');
define('AUTH_SALT',        '2ck6oigmc0xnqkxjtrbrkxrnpepdj0pxt4xooxflq4kbi4xszrgdhecrqdxeafvz');
define('SECURE_AUTH_SALT', 'ali3yrd1a4jyab1dcctyyaj7p8khtwbljjts3dl3ux90um11rwqndqzblzdm6woj');
define('LOGGED_IN_SALT',   'uu8wgmysgyv79ujd8zymsu5nsqbmd39uivbwnc8hvifaqrressoxftkk6kyw0gfs');
define('NONCE_SALT',       'ubiaccv0m2yncgfytmhxevydm4pkmxvrzyrgal5txadezswbwusikfugfyyaacqd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpkz_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
