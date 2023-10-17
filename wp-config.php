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
define( 'DB_NAME', 'wp_2023' );

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
define( 'AUTH_KEY',         '5Z>Cwf<)VmEc<)35sah9L^~GTF@W^/ej>KH{7CSa>zLb?3Ci-:~S,C5jsXbwh&2o' );
define( 'SECURE_AUTH_KEY',  '#yDq.ak=4V_LR&1h}??9HY0sP33#f[}rqEUi^stJ^GZLHv:=-C;Vh4kp?ii|EdoW' );
define( 'LOGGED_IN_KEY',    '9LBM*XPrRk?-7&s8W?ALT_qhSlwsvcpYAJ&3Ep0Y@J<ULH*%Ri/cvgy66mpI0B(y' );
define( 'NONCE_KEY',        '?dF[HtB_cI!#}pg=.(0g|&;m8I9y%+2:@bCFQ;U{7F4>Lgz,C9t^nk]/3]`*)5]V' );
define( 'AUTH_SALT',        'UQo(?5YL=2CA9m[awsUEN HEvLXUDeruQVH?|:wg/_kyw.egA4QOQ|4WM;FV.2G<' );
define( 'SECURE_AUTH_SALT', 'H/}D4fbefMmRl08,EpGE(zgmZfr}0ZxS:d]jI%a%!9XW|9cIM)R/G6K*+4MM(RqP' );
define( 'LOGGED_IN_SALT',   'k,4>bM^tsQ-7c.xwJ1:l#HwSgB,g1DfOe`rm/{9Q{b|.V<-NvlIu.:?6{g|%![1U' );
define( 'NONCE_SALT',       'J#rLKhoGBW>6mgr(brZ}W[ST?qMe}0aKX{~nl+jC(|{x8N4QiqMz^nGwzZtYzi<e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_v631';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
