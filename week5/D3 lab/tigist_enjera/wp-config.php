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
define( 'DB_NAME', 'tigist_enjera' );

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
define( 'AUTH_KEY',         'ejoB9Mtj,QMtW<tqlhnGiSdVk-HgI qDuI;JF:BW26j}8lbQ#F*+wIzycLy&KYwI' );
define( 'SECURE_AUTH_KEY',  'Z&Xoe;FDt{7;&Ctet2uzvLd##pinEEZSZE(~<%~D{ZyMf9DS9vk)L4^t#2v9Et)r' );
define( 'LOGGED_IN_KEY',    'IO[NGRw|4u?]:|$<x(rC0q2%;<WYrIgD:5G7~joip5Ku)D]!GS=%%TgXDyi{0(oB' );
define( 'NONCE_KEY',        '{9]6fZ^5;uI2BLH] (kE-1cE`DH$deYr%bIRU^//.v4O6n[nIA+)wAq5qqMk< ci' );
define( 'AUTH_SALT',        '^Nv]?dy-ehIWJ1cxSLJ$(pPaiupE/iO2]xa-]fDfzg~V=p~1FdP3w`HFg]/a3bBP' );
define( 'SECURE_AUTH_SALT', 'quiLdC`qHwI=b*2R|T!e^)Md}^a97cqSv)G~jSz(XdsM?n{=olzlnW(1oT(+e}I<' );
define( 'LOGGED_IN_SALT',   '[B>#1=+,fWVV?`L,MY{:W.kH},C<1e#d  !+?0c`9AvmJW#vF.jh*P@9>9}8uwDP' );
define( 'NONCE_SALT',       'Gxwhvo9m_~RJ@*S4*!uZ*g+D7EhK*W@wXYRr0W!X08U^,JENZv0@NQ/yvpmyHlx7' );

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
