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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'DD@ylJ@zZ])S&x(];iqCo{nB]&]!Ryl~-p!4x&q$&T_&37|4XkKO)| aUGlqRYaw' );
define( 'SECURE_AUTH_KEY',  'IS@O2z5=Yl{7Q3W. `^!g(1SkP*l0lY@dgZe1&W]8%?|ho9|[%VU8t<#YiPiblXr' );
define( 'LOGGED_IN_KEY',    'pl~K^n:@iZNK>C+h!Or}3LS7gOyS?{Ql3M,k}NhBpFH&um08_8S]/#u&8!^h4POr' );
define( 'NONCE_KEY',        'gLNMlAp1/E%>2qcu2&&4pFy@`XKRV-kA3W{/p@w3w[-yt1@k~+q0(C=U@0GsWJBD' );
define( 'AUTH_SALT',        '%YK&YU8`kK=^(~#5{30wfGX*Vp]qq-5sl$,VHKPS~=,E8j7$k;Td~_0:K;[Iyjr~' );
define( 'SECURE_AUTH_SALT', '~ CA[w=~s/hOW/e+~ktMT8UJ,}hbYd*cni/+sm=t=0L,mfmF2Z|L#%^`)Ys3!&4@' );
define( 'LOGGED_IN_SALT',   'L5a[;clbL*v%aFIi+))ee1d&D_~D|:,_5];&]3G^#UBj6Hg@)8VPp,an7w(B8duP' );
define( 'NONCE_SALT',       'R_agh67`.1p,XSK$qS,^)D_W@HhdB@||rY.NLC?X|EQ<?)>ojbGwgJB4>(doKv+{' );

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
