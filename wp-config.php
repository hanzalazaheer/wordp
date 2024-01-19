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
define( 'DB_NAME', 'qasim' );

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
define( 'AUTH_KEY',         'i?U>gXKH1(Y>%aYhs!vlFV_yoLDY5.9o%9?{r^LSS/^1W_^,]N94{*)enUEcpUdo' );
define( 'SECURE_AUTH_KEY',  'sM4|z6vc+;_-!85{vs.<4/}WBp:AkJ&;$|?,mY7mNzE[q8V1*mxmU;5Ulala<ulw' );
define( 'LOGGED_IN_KEY',    't+z|x0C7SbW^24}CJ}53,D &?CzV4XR`9#_:e:`m*^$,EN*N3%?s`OZ/?/gno9LV' );
define( 'NONCE_KEY',        'XBD%|dA]*Ew;Kc;b6#_<=oy?t|,]C/#Ocr_YJ#he>FE1xZ38Am$+)jD=`74!~qp&' );
define( 'AUTH_SALT',        '/K M>L6@KR M!s,)K K#Gn.VK}-bC*gw!}LrJlvaBolu&Azw<CNNF#Zs;Wz9k~{]' );
define( 'SECURE_AUTH_SALT', '#-h-Bu[GK<wQy/+Xm4(3|^;_<vDe1F2x_PtiCtLJg(XUdjj1nIC0k_H[hA:oMMt:' );
define( 'LOGGED_IN_SALT',   'o] .srOy,MmpN(-3nj%<b~{($4k?*0J:t~mtb%7XA4+8cO|a6WSzDaCktE+<Y8]I' );
define( 'NONCE_SALT',       'b<RX9Rn[P]#I80u4 v<(9!:7 &nEg{PpCcjX?;g/vCt}&d>i(Lf`#<<_RA9^fgEw' );

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
