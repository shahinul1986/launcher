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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'launcher' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$2(+3(c[BRn5zYx9qa.KD-.$U[^_ieh{oDF|fO(b!F,mISbw?cE}ay7NULJ{NmB{' );
define( 'SECURE_AUTH_KEY',  'Y*cY@qY91~Bj>P8u`ROoRSf0b7Z-m|[]^!vd38Gpcr #rL8UwC{fDYKCC=?JqMb2' );
define( 'LOGGED_IN_KEY',    'U.4S_I[P=CZPq]L*VG3wYWzCf@<H>]7}Bpe6rW%0Qc&2E9dc0.TZ7rpMk{yQDu^w' );
define( 'NONCE_KEY',        '8hytOIA`:fe6.3iS0jsl8Z,DSR0oMmGt{VwJXLudVVja1bdRw:wICRarQb%WQm:$' );
define( 'AUTH_SALT',        ');hm|Lo6oo[2,jZ$Xywk{Q*|7:QRnLUovd+xzS`8d*KwBm]u??.<.xF~(TxF mvw' );
define( 'SECURE_AUTH_SALT', 'Q;BidU!NA68@7W$s(-$g@rRE# <2z2J6aV/HlxdAEn9^q>.J9yxGHBAqb0B+=$+q' );
define( 'LOGGED_IN_SALT',   'd0&>,%Nj5&SqrkQS.^/~Ph~!*`:: u<EG3+cinHxAQD%~p %5H??xg;!`k :PFGz' );
define( 'NONCE_SALT',       '44nV7)*Xv*),^5kcN3GW_:=ld.{t5yN(]vqA/]j|^Dz[h`k&]ExX>a.pwZb%|%I.' );

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
