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
define('DB_NAME', 'u288761383_vuxus');

/** MySQL database username */
define('DB_USER', 'u288761383_babug');

/** MySQL database password */
define('DB_PASSWORD', 'LyzeRavuHe');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'JXWID8QuDwG43qY1yOPFTxUn4RCUlyopgvyOlDS8dQ5e0EKapbGHeuGDWPH8pezm');
define('SECURE_AUTH_KEY',  'QhsTWcm0yz4VvPtYhXG62ywTo6ZZfk6QnBPEpmZkou0GoohtrefP0JwGPbbqMjI4');
define('LOGGED_IN_KEY',    'VKUqDEwLzG27gIPaxbUmvM1noM71pkRjifJ8BzM7mbxdLBJq9ZFWKJKKfS96HPKx');
define('NONCE_KEY',        'J1dh5qQldTXslXXQVb5kiWxHi3yEQ2rHXFSygWAuHvlZIoOCQ3pEouGi0YdM8cRb');
define('AUTH_SALT',        'NXWvnNhJmcyaMu1g9PcSbnZXcs6rMzl6fDk8A5w0tzM1YqaW5Mm5K16sgZ0qGSxd');
define('SECURE_AUTH_SALT', 'A3kT6Tbzdj7SDKvNVZ9PNMF3klV5p8QC65u5iC9Ked9MCNeowtl7Ytlkrb36Zj6l');
define('LOGGED_IN_SALT',   'z0z58ulwyUyycEEgeCsPLvWn1AGn7NAKBz2ZpHpzEpdKZMm9YZhwu6ijg8bsxfcQ');
define('NONCE_SALT',       'lAuvW1VE4VxyJ4LL64wIo52hbjFJjcdo1vbUlL7twDWhu5dbrbd3ZpDmxOOfTgYZ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alsa_';

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
