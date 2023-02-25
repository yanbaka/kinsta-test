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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kinstaTest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ZFiSTrzNyS9yrpSH' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '0f?/b+P/Bv@Skl;?gxUTK;AinCKgDO;^>K6o^D;k}i`Vbu{fM=^;cVc?J^A)m/a{' );
define( 'SECURE_AUTH_KEY',   'nB#EWH/!2s!^7Qakh/NdB=8|beAm#*M1D7&>9?;C-{%FZrq]r5e-h<<mY$i0/waP' );
define( 'LOGGED_IN_KEY',     'RItD_b@g|U)Eb^$aoZy}*V/<k+xS(NMeij_hYRE(cyTNk:l8 7yWetibdD4vY*~B' );
define( 'NONCE_KEY',         '[;i]XwpR5Ikrfj%[G4VXdXG<UH=U>3AR*zSnI,o&HTcFJOI98n<v%P@p@>[jiRiw' );
define( 'AUTH_SALT',         'tjJ!wyJC,wnLX-ZA9|jxb0`wu#Cv#Ia=q80l%A=OmI~S8Ie2C/<C)|+hyi$c6AVp' );
define( 'SECURE_AUTH_SALT',  'O(6K#xV)04L`#^$Je!$+IW#m8_A]%!Ti50#CQp0GY9ZF[GeK@t`5vGZxP%$0Nir6' );
define( 'LOGGED_IN_SALT',    'Xo{pPKE<g5=@7C/,(3?>$t(.J-a]8{wO,y38n2K%awLe9v+fqNT?c=&``FG(dsG@' );
define( 'NONCE_SALT',        'aBE7h5NV.V;f@J6lgB,P [W%f0f|g6f>C7zK!FH90U9vn`S#NEx_u|n.tO|vaWR(' );
define( 'WP_CACHE_KEY_SALT', 'a[R;!{d[}Dnu<#Gy2s_<`JGk2,???tQPX9GpY*uZ,1>1rz6Xs0C(L/M;_r82i`GA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
