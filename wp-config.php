<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'interwork');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E-ihlc X{O?^!625DaQ(BBW]0w~b/8>zoJwS0>0ePgtEv>QD3imO8_[U7W-zxgg{');
define('SECURE_AUTH_KEY',  'ala;*sR)!s?ide Y!IYwEg#,m)Yf?$O|:G0-U>-rh6mI|}[9FFSkwW%mko-Y@1;j');
define('LOGGED_IN_KEY',    ']&%]jKB-{@bZSt1ft(;md$//!2dc9a4|9BDP.+?SO<(AU5bQdQi*M|C[Zc57ISI%');
define('NONCE_KEY',        'Cx,4 @RHRt6 ?|!SuC{N=Xb+|Yg>&s5SH2O-Z?^r&^|%o`CaY&E)~r$[kyYkxUT:');
define('AUTH_SALT',        '?ko[!;MH2>(b.J><2tpaA3$O,O:Q93;NUHPcZ-.$jRJZtp.k<oAZ9Ff_b!;<z8#{');
define('SECURE_AUTH_SALT', '6NdpVz9w;Rl0r|yIGg??HOo~?MqFp1RQ:9Q>:{-I,)sH?v3+/*o-h[#pz|I&B%9:');
define('LOGGED_IN_SALT',   '>LoZyGJZ2X&OAQqV!w)(K&9 i-KT!43~P26}|1q^!.NyGbVjZ_d%Tk_e}2bL(UQt');
define('NONCE_SALT',       '9Kp:k,dQX[9$![_@Hzx,Dm@koio(53<F_oa-;{+Ed2N4K+5tDk(x bS9%&S:v.]P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
