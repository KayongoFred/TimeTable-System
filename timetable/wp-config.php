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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'timetable' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fwnfw/w_<VIQSahKwQ2W}WiBReA$%J-^5hs_E_.V kAAH02-8@>nur+q~Sy)LyJf' );
define( 'SECURE_AUTH_KEY',  'f{21McE~1PZrzncjVFNZ{F*n8zlqnQNIdEu-C270r/ncGhgif67*hgk2d_|pt4Ce' );
define( 'LOGGED_IN_KEY',    'Bj:Hb5Fl23?Orugufoky,i+M=1`z5ydzkNlm|=1/f9/9t.x?Cue~<XojnelG- >[' );
define( 'NONCE_KEY',        'Vr`<O|tVa<X{1b`q475FMguOG(pg.,Aja}gZY=S38thb{.DGHcb%S;v,^J>e9mGD' );
define( 'AUTH_SALT',        ']8*Ck(.19RX%w%w> _2EtyWq+-Y[GqpGz<PLO]Im~iZQh ,;<x#t=Ha|D%gIV7V9' );
define( 'SECURE_AUTH_SALT', 'KHw-.sG/v!@sta~7$tIL):YabI@q_$K9Lh3i%G=0~nTQqTibmM3[2Ej3lX5dwt|<' );
define( 'LOGGED_IN_SALT',   '{O<ku8w?G60a`kST:8 I3eK`OO+W~`~H)/V)r2k4!>y;>K4%wKM6_3H<s+X1_.RU' );
define( 'NONCE_SALT',       '7ndb5iXJexef(.P(.){>juo&ym0;PIC-K89qB-KN9{HgVP,l9jL]uAsj:Lc]0P,C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fred';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
