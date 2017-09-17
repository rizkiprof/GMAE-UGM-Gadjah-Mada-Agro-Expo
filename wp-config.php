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
define('DB_NAME', 'u874254998_ytaru');

/** MySQL database username */
define('DB_USER', 'u874254998_ybuvu');

/** MySQL database password */
define('DB_PASSWORD', 'aRydyDygaN');

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
define('AUTH_KEY',         'hCyqEO70sxljQmjRUvQ0sUjDlRjvTa8kCesgLNMkV9cx091QVWOfhcq1iEeukup5');
define('SECURE_AUTH_KEY',  'VEHi3okAMBZkjP3oQLJC2TVEhxiW7X9r70A9uEpCVND7JOOzAYvDCOfrmcc4mtXv');
define('LOGGED_IN_KEY',    'cIqfIjDuIg4dAJk9hJyUKkZnnf1IeI27sP5ydq8Na1St8BliMU42oggjdIj6N0SG');
define('NONCE_KEY',        'IU2JxvVjtcxGl1lHhxgYiUsppOQowyQx6I33dbSGWDYkhyUdvV8AHd3TzRXf8tLV');
define('AUTH_SALT',        '1vbLS8AUHyKxQ3K0i53QhngDb7gyBQUgCSvFiiE480UJrz2Z8sK5FFpj1gE6SgLK');
define('SECURE_AUTH_SALT', 'QhbSitnIBgGdm088CDtxsYoiTBpsvxVLQO40KMNR8Q2yUdvVoq2BgBgP3WvgJujW');
define('LOGGED_IN_SALT',   'wQc4ZZQ1mtcdAmjCjSIVz2Cl3xjDppJ6SSC3nBJaSoRbUSvAs6uzjsoARkNjrdNu');
define('NONCE_SALT',       'EzVjkYzuEY5zvkUPInf7R9uGL12BRwT0btfE2tJNqBBz9ygKRv55ln3Coh4Pogou');

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
$table_prefix  = 'j7bv_';

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
