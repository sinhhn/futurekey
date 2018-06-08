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
define('DB_NAME', 'futurekey');

/** MySQL database username */
define('DB_USER', 'futurekey');

/** MySQL database password */
define('DB_PASSWORD', 'jQPXHsgYC9n8N8xW');

/** MySQL hostname */
define('DB_HOST', 'futurekey.cefy3fkhwtck.ap-northeast-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');


/*** FTP login settings ***/
define("FTP_HOST", "18.182.41.37");
define("FTP_USER", "wordpress");
define("FTP_PASS", "futurekey");
define('FS_METHOD', 'direct');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ASP2/=wb&_4 z6[`8g_+7AwURr}NmQHfw_i $y^b[&2ZtG}mM^1|vjF`Jm?AdUJy');
define('SECURE_AUTH_KEY',  'zt$F+28_m%aV-}fZ}v2}Io/q)AjYFp@-gMYUiYI[ztra&HMIm-r2+UGopWn=SvwE');
define('LOGGED_IN_KEY',    'Ez!Sca@__p8q#_2Zs@N2q85{2tidO@v_lFgOOO{BK^):h6:-5slDddK`r<r+w5C]');
define('NONCE_KEY',        'oYT7*Yf}-8QTzTsT+pK3oiPO~h:+pN=*(w|johggak8cSd~^;[h-;Xe#Ak}uXGyg');
define('AUTH_SALT',        ' t Z&=Tr]da+NP3gYVXn_ZlkZ%o@#FfP{(V]^:Z0%v-|7Vp!WOYd|#YI0gy(a5a)');
define('SECURE_AUTH_SALT', '1~<%N7yiM5}0VJ-v|NN%+Y,T$cY%OJ,~3BtEYW5!&Z%?P`gu Xqkmm^<3QVE]?Mh');
define('LOGGED_IN_SALT',   ']L1W%u+)zzGU.IGE.N}+cgkh>N/7&x8?91/9V8fW4HC?=^C0N9*j:Bk(:4JKmXoN');
define('NONCE_SALT',       '/]4GAO~+DGWmX?v{F`= uwFizhea~!/~0>y,M{AeK`+y|MQ/Mu1 oC6/4)3ls]E-');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
