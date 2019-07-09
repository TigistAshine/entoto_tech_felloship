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
define( 'DB_NAME', 'Photo_Abera' );

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
define( 'AUTH_KEY',         'amhD/W6(h(99I5)Md}blM{M!9!oJ|eryYh Dbn55mh>Lw-!HMQyFw#)9!{3eH@Sy' );
define( 'SECURE_AUTH_KEY',  'b|H,9V7,4G>oeGbx_<Iv]Tr53IS$YxU6``Z&!Jc96awtfc#9RO>}PEZB<Q0/&K}|' );
define( 'LOGGED_IN_KEY',    'x@|J2n4C%~QHJWKf0` FMk8-;wHY3!ZPl/tZ5mE?cEK|vsv}4$.+Hc=eZSc06}@N' );
define( 'NONCE_KEY',        '7^|?xQOpKQxAnO?]v{;w9]7[mo.z$XvI8wr7#U%4Y$OYm{i(JvH5aX:qt?+ZVS.Z' );
define( 'AUTH_SALT',        'D&=qw]Yp>K/xc;`YaX3AP&19Yu|/|H~?cP[Jy&9=<_2HhId#,,nTbqP<pv$IXVoo' );
define( 'SECURE_AUTH_SALT', 'Jem,<Tb,7wkapR:l0f_2m5WdvJg@8hY>i5;fw[c&mCMTi&tchg@6E1Ae=Y_bQInl' );
define( 'LOGGED_IN_SALT',   'Q%Jr3W3VoLTNv*0uDCLY$g6il)qW%+eiQ^~h3=#^6ENHmh[9W$>tn5P:|<~9j`u?' );
define( 'NONCE_SALT',       'TQg=UEp^.lC|T6Mo,1I?X`GWH^Z3! Ur^)G%D{lwYEU^Fa6Eu*oDS0<[XeN][{z&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
