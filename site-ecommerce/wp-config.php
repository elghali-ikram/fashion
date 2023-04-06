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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'AKKu4|+}h#f$ mam9&ydGyn0JD3.RO7D,vxcya]bF_^x!Yvx5*U#85!8wyC,iQbx' );
define( 'SECURE_AUTH_KEY',  '`)+5#gUYT4chQeU|VsFfZYj-{@5fJeSqc_s,LUi#{h4 x}%L8Y@o&#~bTIo,d7Fp' );
define( 'LOGGED_IN_KEY',    'O+o}&^NLGjBq5z6~hEoVjzflL#^qRRPW|=lon2H>!jIyG-0!sLUs*du,B0x,uiYo' );
define( 'NONCE_KEY',        '4U]!STLo$<e }3Ex8P Z:me_|)~t=ePk!{_kdt2kaB)B4Cn$-a,&F|<I&_c~m8_>' );
define( 'AUTH_SALT',        'zQ@iPr|7,x9z&FpV3C9+FOh9~d)|uc~F0;P~?aTQO5W1W#WZ[[,:ZmSeWygjzj_s' );
define( 'SECURE_AUTH_SALT', 'dGkbr9a<rFeUKCzb5xEV4GZ=7*7>67_*8GOA*,O>5>A0;T81<<}$NV1vVd172!MF' );
define( 'LOGGED_IN_SALT',   '%FCr8Nx$;@qG{^O$*=3/0#P7p3d.B2l5v~O~CgKZwDh~JN}D(V*y9~e_jXY)MN*R' );
define( 'NONCE_SALT',       ';!]Lns7:YiIpIbx^|tUwZc<Nre;Z, XxHmAW]VG%dTh`k~~-scHOdjag7aaei .s' );

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
define('FS_METHOD','direct');
