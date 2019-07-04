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
define( 'DB_NAME', 'w5d3homework' );

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
define( 'AUTH_KEY',         '=/|hrHp66G6!u=6|]+Kz~[G]4d~?StXO;x5<:w8s$l;}ZE;>6R>drd4!zoAHwLyg' );
define( 'SECURE_AUTH_KEY',  ')S<T$/Sfy9U&!v1Fz;&RL]R{Yw}MWu#{!kVpgN/B{Sz/as|/d?|r[pPG~>eM<,dm' );
define( 'LOGGED_IN_KEY',    '~QP*,88*`a9 |_[m<*0d_ag6+Kg!H6z]Sd~N&Gs_%^1x}T?m<DkBTWR4R]WIhWPD' );
define( 'NONCE_KEY',        '.gOj,b#Ex=]:@}hOwBgDcMak_`yK~ ^g5]!2WrWHx`Qv&Tb/HeV)c<Yvf]V^Z~*1' );
define( 'AUTH_SALT',        '+i?B,lL=.s^kl5i>d+uko?O!g39Vl9%E34(2AZdhpA0+Z_e/cf8Y,z[|iOi47 $G' );
define( 'SECURE_AUTH_SALT', 'Nzchf!~iVSEL]bNbI*Cn^_4.iP$>P*7Ag2)]Q$lwl-sSFZ^ArGdrH|x_%gP#M&H@' );
define( 'LOGGED_IN_SALT',   '1G(ag3>E9el-k9`#&i]%jN&o}Ry`A/yt[2|B&5X{n?UG&&/}4b^cJ`[x`/n|)9ym' );
define( 'NONCE_SALT',       'r;CiS ,A3/Le]{w-v$R4S--@b*qs9*rar] E8{N~KBM9A>,e`gj$ z`)6><Zo`~A' );

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
