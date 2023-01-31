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
define( 'DB_NAME', 'my_wp' );

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
define( 'AUTH_KEY',         'ECQ5@R8ZcR%cV[!Hqawx84[ot<vZ8f`3I5Y6g!i<uD{Ent|RgGl>VB;stM`=Qp[+' );
define( 'SECURE_AUTH_KEY',  ';c*g5DG>hLq0}:Cwjp~o*1>3OC^]i|z|  q7kV@O&GC0~S>ev63)A?}6!e#4m&Wp' );
define( 'LOGGED_IN_KEY',    '`h*N@z%YO*z+Y248.3i?Ii=)>l+<x8B`BHqf=BY8=f>aZk667itXEEV4Pt>Wjn?+' );
define( 'NONCE_KEY',        'rJ$>qZqA<M|wI E@.,#(wgGq?CU/Z/8P{%g/WQwP>6^w<A_h}?5z6O}9,IXwOJ(T' );
define( 'AUTH_SALT',        'M8E^LG`3Ip@M=d;is3Ts}Q4a7oFqrv0j:x60zqW3Tz]roRj97db$v1a?+4LLlOsb' );
define( 'SECURE_AUTH_SALT', 'Zy5R;dHW]v=hz[zNt@89{bIju>:5Ms(@K20TLT/I<>]Vf>s:,|Cj`^V{^Q*VJ<Zi' );
define( 'LOGGED_IN_SALT',   'HA:P6yd.5|VMeB]p2Ri%.mgnCc=4oWq40:_~qF]UA7*_c(48bLwrI{=c:Qmwn@*H' );
define( 'NONCE_SALT',       'l)Pzcp>H&#x2^~GutRA1Z}gtnN:% VJtLN}8Z85Cyn:rR$e+F>f}Jr@@t:)`DZEC' );

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
