<?php
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
define( 'DB_NAME', 'pcmdmevi_wl2oqgk' );

/** Database username */
define( 'DB_USER', 'pcmdmevi_wl2oqgk' );

/** Database password */
define( 'DB_PASSWORD', 'p!S124]49e' );

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
define( 'AUTH_KEY',         'fehatu9xp3vughqbavpsfhjsbh6tlmvuwyy6otavn6zmflkhfdr14ircnylrvyck' );
define( 'SECURE_AUTH_KEY',  'rqzwzkaaavoa8bp2awnq7ftaz5oe8wskya4vpqolqks43qg1abcpaikagetpuzkm' );
define( 'LOGGED_IN_KEY',    'ayobnstynfoyzptidaacpovnhix6ai86jjejewxzrebqk2fwxj4anrqtunla7qmo' );
define( 'NONCE_KEY',        'zf72naoggvvpb9kvljzkcefx5xkizbvtwgyypmextfrpeekziklytosx7yqrpfui' );
define( 'AUTH_SALT',        'hpnsdkkslnxjv1hikhhulzbmqqcqoeakajai5oc1td7kviluzdhyv1kys0olnibf' );
define( 'SECURE_AUTH_SALT', 'gl953pukgdmp7u2e2tovyfvihwi5xpmei8i6kvzvuizmj3kzilxnyeivsygeqdfz' );
define( 'LOGGED_IN_SALT',   'f4gsulpzjidjravs6m4jnfjn5agakplyx3xr4olzy3v0dvinhj8qiymf3mfezqtg' );
define( 'NONCE_SALT',       'u2vailapssr62ctt5bfybszpf09xjgljxn1szuflj7ge0zzrwtet6wgjkihyg4qr' );

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
