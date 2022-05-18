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
define( 'DB_NAME', 'ospinhasDev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ospinhas' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         ':b=Q X2^5w}hFK+0fVULi?o>;4cewwzv^DkswXhP&{1R]&#M%e{G V]kEOi+QcXb');
define('SECURE_AUTH_KEY',  'BS&<,nE&S$Cm6udH}P_|SMPv%$9-y+WkZHz/IsE+m/W_MS|/*F8MJ?u%;5~dAd-A');
define('LOGGED_IN_KEY',    'RL|`J|*Ie_Q;|mp/k-M%GrJAf^a-nQ]|+fI9PPiY`ir:WOXM:8 _/usuS=)^.Ym:');
define('NONCE_KEY',        '+P{6dPm5vM?03*?<X2/z]^ .(q+*|)MvgPSO8LAO}oD%J$t-@`d1yyA,*KZ!SO^6');
define('AUTH_SALT',        '4y-ppWE67n{2;=ax4b+|7#t9pTVH/M4+t4Y>uIzR*fnj!?3n0QX2xVfkJgJ1ypZ+');
define('SECURE_AUTH_SALT', 'bhX4;I`bOac<b*^li`50j_NDeYjMt3+2[_=Z`n*`.$%~,L$KPN+VqYYIub~Vaz3I');
define('LOGGED_IN_SALT',   'B6_5m+E+F4;a(4u4;%sOojQ~$+7-on~Zg)OsKR6S|`7DhzF()wSc!% %~Yv~]:`9');
define('NONCE_SALT',       'O@~FG)#/pKyDPZ;wE|jv-e2#E7o{Q%^v_,sfCg=z+Y?5:YI2i?pVL<8+zEAYpd4W');


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
