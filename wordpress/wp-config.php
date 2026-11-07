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
define( 'DB_NAME', 'db_wp_nusantara-craft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FuVKRT7rXDZmigPp<bO1r@UPzTT0jyEeSdN]Oi:#XW)F@7T`#~ZUPTrp%(%4c=t ' );
define( 'SECURE_AUTH_KEY',  '*ctpb/ bMd!2}+T2GAw8(w^]*psZ}kL7b7h/j0ErkZVGJl$Wf9U{!2/uOL5g(Z.u' );
define( 'LOGGED_IN_KEY',    'lEH)ti<8?v{7HB!%k>!ERD~dO%=yE,maM -gNWj8ZB16iol<e:c{a+jMkm)A!Xn/' );
define( 'NONCE_KEY',        '}!}%Cft|9lc4%VD^f@+e5N8)lu{(32CKn:|s$r[/escWj<w1k.dnq1;rD`:*:z;#' );
define( 'AUTH_SALT',        'qM.n]fym~x43N]xtqNjl=|h{ak% sU43{8HRjUIF2[>Eai(i{LxqwQJy2@Sjo^NW' );
define( 'SECURE_AUTH_SALT', '.cY@|A/_^?(:D`k3UL9I?3:,^30B0It}$-l,7f=Zc9IWZX*dbu)Q8Ed<OR7wxQvV' );
define( 'LOGGED_IN_SALT',   '+FwDMu%T%-f6f9)9aZ0{xA?@VVNBjYX}^Aqsf~j5HcvMKvoxqDyyIkc,h;$A%mr#' );
define( 'NONCE_SALT',       'g~<@{EiF+x744>pqlkq#&F#.:_3{y/.tf=!Akx49{fhZ^?kH.(|FZ0To~,MA2bKu' );

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
