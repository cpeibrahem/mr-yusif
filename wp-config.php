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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u590566464_qz0AQ' );

/** Database username */
define( 'DB_USER', 'u590566464_aQ7sT' );

/** Database password */
define( 'DB_PASSWORD', 'HGP6hKHrVf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'U?oVP0%HJpw1MY-P!.LBk}BVFdlf0&E7sj_Qt{A>;$)>){U9x1>Z<.Y`Hx//ZL7,' );
define( 'SECURE_AUTH_KEY',   '@_H>^L5{K]/Q*buYv&YRc|TZ~8!&+~GC]SH}pm5NlHQ(:b*R-[wlVES$uMXgB@o/' );
define( 'LOGGED_IN_KEY',     'vc(EmW_B7dgjCN ;@AzXLDAj*4?<]coEV>yB1j%7N?Hh: WZCiL)]&:GD<;+QYeY' );
define( 'NONCE_KEY',         'K|vLNOXlR)YxTafqS=`d<%48Cf[]Ro;R:OyANf@rMk=LGRC Tsc7)*K%z{C$MH#w' );
define( 'AUTH_SALT',         'd>vA5}s#Go@b^#J?+.uG9tGSLeU#( W/.3Z-Part;dFUi0z8LEKf(V:m4:koHSmf' );
define( 'SECURE_AUTH_SALT',  '2$`.Oo-fr14v2~^7XmnCGLT(BO9R@BOFV2}y%8vL4r{mfuQ:U$6w*jQ/sXd4}oKu' );
define( 'LOGGED_IN_SALT',    '5>}k&9)[(xW)4~%cp30PpiF/|Y@[KWYSnnO<1ENr)cF.|?Kj{+<tP&v[C]?5Zu!X' );
define( 'NONCE_SALT',        'fMSOcT;^yEEa;+o2K6:TZ<mT0a} e3)dxp|x4t6jLom;qD*MlU<]FXP$ toyh5@/' );
define( 'WP_CACHE_KEY_SALT', '^z7j0TAzm~%n[ECW]`hx;S>hmjWEk!pjx@]w8V>N_9vWNBw-x eTJ_s[=hXDXvDS' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
