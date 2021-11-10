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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woocommerce_project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ':mP1CSYG<UhFrIvsaJOQ-n]QJm,8MJUdPGt_aUMZ9U01~xP{(*vOJ?s<!XP}V`i#');
define('SECURE_AUTH_KEY',  '6ZPw1N@u|evF=RgNzd|n<[0W7sMXj<N?OlYd1>A-OmM>2/o@Wrg0[]QBqXm&D7M)');
define('LOGGED_IN_KEY',    'Z<iH9[g6M,.~_a=,#P=^FH@`9m)nBu~x46&:Z/y,@LJ,WcwhP+vl,QR[@9cwMu5A');
define('NONCE_KEY',        '6-vJ}{xcl-0Bci3|#NyX{)2H*D?|W|.-:&!OYeG!ZCkIFk1xg2ZolRr6uaaX]W/$');
define('AUTH_SALT',        'EG-Kk~%&*5K<I2#!3{_0:1}`3Ns/}s|o0D[$o4PX-.e-Qz?6eYx(l}kK<-]`)5C>');
define('SECURE_AUTH_SALT', '.4L}lSFub3DyW`V$cdp;b<L @1s;iA8[HZuZcC%F%$T{K(Mhh},@,:aatLxyVUv!');
define('LOGGED_IN_SALT',   ',wDy1lt*7$+>RI`K~=gd@X;|y3 u <JLv:mT0Cq<;hHxi)tD7Ujq<RK<87pSY{pf');
define('NONCE_SALT',       ':zZSP%%M5-l(mmB>T:fiv@Y~Y8!TcQxdY5q 4r69NeP=nB3C^Z73%@xkQR8fFS7e');

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
