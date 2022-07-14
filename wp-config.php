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
define( 'DB_NAME', 'landing_bds' );

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
define( 'AUTH_KEY',         'wj5F_+IxeRGoFpaOyM6(WXDg4E>hNIr4RZ~9}rR`r(vv/%t4&vxF[GKN-BamW7O1' );
define( 'SECURE_AUTH_KEY',  'Wm  fkF-wD+tp&LQ8|IhLP>ATzJpT_Ry)]z-B5JmnFWQl#>%v]m]Cz|`41JT*4%w' );
define( 'LOGGED_IN_KEY',    'IxM#d;MPV^KZz3Y5bQGjjY=A=z3=qBC +XD)[|-8f1ozyZJ*Y#SX})EPw:atAHmO' );
define( 'NONCE_KEY',        'Oj1BBa;Wh~@Y0h%_Vu2=xl~r[_oqAR~jRIjrb0m#w!_5*L2rKOs/i>77+98tGOY(' );
define( 'AUTH_SALT',        ';L>U,EMYx?4`mF{%Ez]LSS7IJ+oob#wg|ZzfAt7J/4{mZt{YgGqC98#NEXh?R9-N' );
define( 'SECURE_AUTH_SALT', 'p[@P#~z;62!X<L#HE(Jb<&jHRk~t=I-SVB@!p$!omb1^iD+N=`A+0}sogHReTp]V' );
define( 'LOGGED_IN_SALT',   'd2ezGHcX$ h0k`Ico~&W{9p9`za$gcb/X&zD[qqC;=/cCo*GQDS0reD[Sb]Tl]n3' );
define( 'NONCE_SALT',       'h#)|c[2$]@x!s{Z;u]3+wWDVu8kO/y9Pe8fWoxSo(S;(^?)LH:.<2$e`slu?Io^l' );

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
