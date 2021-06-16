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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itmac' );

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
define( 'AUTH_KEY',         'PZY.R:&ouihYv +b1_rl:jC=/AFKOh{{$pSv,?Mh_3Qz%0#$#.z|*SSo&<R#hlpK' );
define( 'SECURE_AUTH_KEY',  '!2ykjw>|H)*tyKL-Ak?1wdi~wbAeuC 2X+~&jLeK||Ng(cI$1h3xb~rxeZdQV;OX' );
define( 'LOGGED_IN_KEY',    'Zr8QrJa%bwM `%v,+maSL,n3IrVn.?`XIv)1yGo?YCgS=f*TF?~qDic7$d/w5B$o' );
define( 'NONCE_KEY',        'EN$ tl(s]5BnHb{(-,{MuZ{a9%A<sK;wvWNKq6z6d=_o#<j_9KynK~*iQ9r<JHjY' );
define( 'AUTH_SALT',        '?cDVukV`h0N(^|98-_eYqA]1gcD_Z& <?n?uv1+1A_IlxUHl1rHbnn/^2#r%f6&F' );
define( 'SECURE_AUTH_SALT', 'B?}Oat u K,Em, l>oB&exrJEW~e5%O~Th6L#zEMl2,Z`5V:U1(f ?KPFY|.IaF|' );
define( 'LOGGED_IN_SALT',   '*Bq]5G~/?j3ij5sm!|Y/XT5e6e2RfrORhUeU:<[JT>p!d6b^Lw0XU|rUyu#}sH`H' );
define( 'NONCE_SALT',       'q7?B5{K&=0r64$62gjJEazy^Rk0NvsjI)aD!T@~ntR@I0-[0D(kVw0Z$oJ,=@p05' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
