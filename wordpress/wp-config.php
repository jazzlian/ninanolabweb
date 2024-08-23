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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define('AUTH_KEY',         'GpBTd:mm2+J+]7d3**(HOb1mp}yMxK$4RxO4=X%Rg26Wq)3u(ZHMZo?gg7wQ/;!-');
define('SECURE_AUTH_KEY',  'yUhHG4rb#>HIHcZ]3myz&[m+nS*-?AXr_ UPCnQv#0JK]/FX=xlJTO+J^?xqC)=Q');
define('LOGGED_IN_KEY',    ' 5vG+ZKKp(Y{to{6@2j_h|U/FWz m%} ZhO@g4>-Ue3g-40}=z|K-Ph&[V|@1}1t');
define('NONCE_KEY',        'EUxp~A7^wg*igX5!//@)Nf,mv5LcKy1m6U+^3ZFR_)`mBNOE9{v1O.FCC++My5{%');
define('AUTH_SALT',        'rp?HuW|$It|/eL;}92KmE6D{l,?[DP`^dd9+k3;i[Sk~BobnkF_<yv$U(%UI1g;^');
define('SECURE_AUTH_SALT', 'LMJ8-`.woc+@Pz+%lm_]r|>Z.5Ga@Jl]/E2|X}n*EOx1T*8+8|?jFBPn?. s:^^1');
define('LOGGED_IN_SALT',   'WC?^eF4-3JQPB#c$ 3}++se[;H&~,SOj?OErmU)IrEA)E8|qQb:0*Ik~6+9#8`dO');
define('NONCE_SALT',       '#c7/Z5HtAQ[?lwrYh^q]6o@QQNnLMEL/E0AKl)CyAAweAaey&[x%92e`jVp:>JR3');
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
