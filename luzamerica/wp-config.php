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
define( 'DB_NAME', 'dc_luzamerica' );

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
define( 'AUTH_KEY',         'Bt6TC)1c6dGcHOTvC JjOJ95;U!cCb+(q$iCU#Ef4KETpm{De)yWg)uJ[*7CA!9_' );
define( 'SECURE_AUTH_KEY',  '_xi DWz-YSI.-m*kOn&PSqz{x9/h$1TWW9^R.037M$zy(Ly!yav>)NGG_X<X?+m}' );
define( 'LOGGED_IN_KEY',    'NY|k.#u&IhHW6sGo|3Er!@foJyonKT^dV|rSeu2GHDbjjp@|^8>;YS949)]d+7^ ' );
define( 'NONCE_KEY',        'p`byMsUJVrPF&dXH6jzz#];7X7dhw$._ux0RBj0>K$hF6_e_NiWu~@GhZPq670aV' );
define( 'AUTH_SALT',        '|rQya7qzHc=QGD3wi,X&xvjL#sLqnImf#q~YHr/z}R-.Lio!#CE~VgUZ*YkLX{k+' );
define( 'SECURE_AUTH_SALT', '`r_4ht!v^|F%xmTv3DJ9v !tifn`~G=!7&p@:G=(YgCG.3_]PVDT;1{~MN#D/OJI' );
define( 'LOGGED_IN_SALT',   '2d6V[{3qz~dF nN.ZiMi+k<@+X.Y[!b{uI1iBkFrq6JjC1Qh<N3y_ejin5q N8kd' );
define( 'NONCE_SALT',       'GjV:w wkGI/ZF)>-2Gmo?X6FvniI5Lb3roJu@r}+t3L^pB`T3ns2![8hi1#xFvrx' );

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
