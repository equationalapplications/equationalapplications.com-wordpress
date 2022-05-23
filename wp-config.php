<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'utsagcom_wp295' );

/** Database username */
define( 'DB_USER', 'utsagcom_wp295' );

/** Database password */
define( 'DB_PASSWORD', 'HT7!uS7p@6' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'kzsyd2imrn3tackxekombksxgugzjgdvmh91s4f1bl6wqwlp0hiykurmrqrfy3vp' );
define( 'SECURE_AUTH_KEY',  'wt1xwdcqseeu6goex0l74luow6hrjib6g6afqa1kqm1td1v2oqx85ey96lujv4rr' );
define( 'LOGGED_IN_KEY',    'hjn1zhwntddkmvj9mkvsbykfwirmkjfinjbdu8nxe0hczawau161ngjjpd55pybl' );
define( 'NONCE_KEY',        '17kpvf2qmjyawbgh2ihxaun26evhyyh1odtrlhkwkaiumssy5ruqytkebtjdtvun' );
define( 'AUTH_SALT',        'mflwcxu5169eojbxh4otcsfeahyvygilitboh5awklmjzlxwqexfrntlrg2hqp6d' );
define( 'SECURE_AUTH_SALT', 'ekpz6dtjlgcxduge4djjvcaw0vle9qbsyq1bzozlizfg3bgwzvdw9vtmtdqmszdb' );
define( 'LOGGED_IN_SALT',   'la5i5lg4odczv19alwdim6zczk8lty4znkastf4df5lvlz3bonko1scziyealy1f' );
define( 'NONCE_SALT',       'csnllhl8x4kayhut5jnn49uoaotzcjgnu9isgcsvgjwexks0mufxzf6mnxxebv3j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpu5_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
