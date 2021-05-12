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
define('DB_NAME', 'openwip510');

/** MySQL database username */
define('DB_USER', 'openwip510');

/** MySQL database password */
define('DB_PASSWORD', 'OpwOpw52');

/** MySQL hostname */
define('DB_HOST', 'openwip510.mysql.db:3306');

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
define('AUTH_KEY',         'DTsAqq8usJtexnnYCzE/1HK8WiB7cryZkOM7UWMN46czkH2HXxZmF6UEqwaM');
define('SECURE_AUTH_KEY',  'MGR0DbQlnHzj/gEjAJgCoGAW0G6f65DMJTx67SbsshAw1mNFuXW8VPT1jz8J');
define('LOGGED_IN_KEY',    'QMPydCdEtrK2RG4K0qV6Ddz5hrwf2gm4wZ7Mcb8XPhodppvVA//L2KrekY8/');
define('NONCE_KEY',        'Sw27g4/9N0ger4AqjcTMM1wQYL1eIwgS/2Yiwt5qJeQtqXCiGftfr68AX629');
define('AUTH_SALT',        'rqHCqT519YO5Ca6tTr8yNEolsu9jY3OvCG/mdih2hvQhYx50G/ga1tK6Fa2C');
define('SECURE_AUTH_SALT', 'sS7Cs+4Me1D5xn80PzgYvl4u1ODhHxjAk2S69mSG5uUWy8omCiqYCJCln3vp');
define('LOGGED_IN_SALT',   'HWikZNkSJhzpc9NRCWmLEkmMsPnwujhYklowcLGbVoWr+JsrgzxZUp/WtpWn');
define('NONCE_SALT',       'Qqj3Df9XZ/JA6iQU2dtySkKNWEyZvoeg0cR62u4JaE6Q4O236Yir4X0U54xW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod364_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
