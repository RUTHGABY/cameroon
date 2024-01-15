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
define( 'DB_NAME', 'cameroon_db' );

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
define( 'AUTH_KEY',         ',TRV=kA`/#3K/P|Ya]z&u5{/[~7#qa>47F0hemr4?[9c+dS%x@CwZ(`;8WS}LNt7' );
define( 'SECURE_AUTH_KEY',  'Nz>!+xHvBMm9hoduf#nt]]dRv;9`LhQ1E9+}>SF~*&.)^`mgT0=@f]U1H=$x,~3$' );
define( 'LOGGED_IN_KEY',    'Ajtg$#Vcrv6[m$D6S?dqWlrdOoBt&4.(tmc`lUd-//=7Z1VHEqpXut}I@~%2SO<F' );
define( 'NONCE_KEY',        'cb}JM08DJQqxhnl^H7ry0S0~rIs0B)rC{yz14fa{RT0m*cp X1^dR#hbZOkb/7Qz' );
define( 'AUTH_SALT',        'gF}lQK.UGYUW8DA{KK3y/W#$/-g}naYO42P?[*a|q79^Lo2`3&Q=M[hJ0)r43BKl' );
define( 'SECURE_AUTH_SALT', '6g1@[-{U9U9VA<@xatX.(6pRrzMj-nvuchon52C5::iGTu+?tV^rkU]/Db_E*]K@' );
define( 'LOGGED_IN_SALT',   'jr6bs`6GYyVmz0z_h;l{FSt~;H8MNVMh%eF@kc.<,$._7z._`/0ibbsHC5t$g(mL' );
define( 'NONCE_SALT',       'Y:<z7N#s@:n{>(0w%IS)H^0C$Us7G?!aPrS/yyRRt%Ep2[!v2/D>v?[l5Kvm_Y8A' );

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
