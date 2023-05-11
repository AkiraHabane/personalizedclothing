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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clothingshop' );

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
define( 'AUTH_KEY',         '$Ui}k/8GI<*IveR!|^Y^8YF]g{X770-3Mhj5=wfaJ%;)7KSdbg`FN=o4N,2;;-p8' );
define( 'SECURE_AUTH_KEY',  '-04&k5Y]ovMI)Ebu<4,{*.!]-=LS8^nA(uez*<a;?OORhg:J?>n7qaHI?b!wHFL(' );
define( 'LOGGED_IN_KEY',    'iv)0 ?>5bQ&L$*G(F#*A~Kqwxg^,zR}m?oCgTof|WDC2rl1T!H`({<2QC{b8`^.J' );
define( 'NONCE_KEY',        'R/U36;vI;rqpf{erT!0v4(h8^2.)V7+w8KT!o{>zWA4y;hR:1EiVCoyPwF>6;`TY' );
define( 'AUTH_SALT',        'cq8M}p-jpGqDEB]bq{}j:[^:UW*CvF{E/-VU*AO8z1g@ #mmw+Xkz!=_u $O@-``' );
define( 'SECURE_AUTH_SALT', 'H-[c<y<aX[]HP;oyBMfaOD<KT%N57x?K+3<O7l x`Lji8+1E^E}v8_txzi}KX]rX' );
define( 'LOGGED_IN_SALT',   'k2Jcm6+YT$|1h`y;IY1n#v#!$ *8ZQ*lY/FE(%:03&;i$pD>Kx/cPMb}h=M;y9#2' );
define( 'NONCE_SALT',       'zi}W1S.4I#QV$xI12W_ydE|OFTM_>qd2|@Gob.z@8KkC%^JVyhW}<i%~A=es=-uR' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
