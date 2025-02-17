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
define( 'DB_NAME', 'u849931008_UjcEp' );

/** Database username */
define( 'DB_USER', 'u849931008_aoTFs' );

/** Database password */
define( 'DB_PASSWORD', 'Qvlm1R9haU' );

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
define( 'AUTH_KEY',          '_/Olzbq$qT2|O6kFwJ+-,:n(oBW,o.{[GmF2mKrd[P/[,pCfokqgw@ci0eIl/k)e' );
define( 'SECURE_AUTH_KEY',   '%RrbBdkVFNXF5WXuD|+-iQv7 > ?|-zLvDwX+Y??D-{igNeP*VcOaJEBL4``1&jP' );
define( 'LOGGED_IN_KEY',     'SEZ!,^pLox}NOUotc$mZ_I@ye!lSi<q9,O%@Rf)ncPqlOcoHqTKds[NOi9enq@kC' );
define( 'NONCE_KEY',         'fmTcY~j=L~4L/=- /LNm#PTOrif`!M?38l>;~z7B?iBXs;:BikLXNmB5Vx_LYu)A' );
define( 'AUTH_SALT',         'iG6QDs9}ZWr$bu@sYD)}9x{Ql#eySr:|J_4 !T`t&Tn=QH,L g`4yIUgVyITgFIH' );
define( 'SECURE_AUTH_SALT',  'EWwzV::FY>3z}pFC{ti@^l&:n.`n|ACN]F$1MiQIc!?:UZhOCj|>0Y-ab#Hmnz[$' );
define( 'LOGGED_IN_SALT',    '5Cq-a;{(&TVY?J1Xj0L4)k;d(<%SF-P]m}]XU$(/me7,y}%G[N;UT0Lf1Y1Xiylj' );
define( 'NONCE_SALT',        'hBG:Q]$oYx;_G7-Ljq-cQ1#r.>QI6GGG60AHJ0Y|vSUJ$,waSbJ#WT/G[q9dkSUq' );
define( 'WP_CACHE_KEY_SALT', ';wEXjKxoT{D>pl^w~ru|d|*LnsiC6{w0H@f-(vc.d;9c@f,( wnRvBK1XpdgT4gY' );


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
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '48c6192aaea8b621ed61cde9622a4dcd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
