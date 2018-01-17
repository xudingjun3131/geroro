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


define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\web\geroro\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'geroro');

/** MySQL database username */
define('DB_USER', 'geroro');

/** MySQL database password */
define('DB_PASSWORD', 'wangjingjing3131');

/** MySQL hostname */
define('DB_HOST', 'localhost:3377');

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
define('AUTH_KEY',         '!jK>5?6}cp}%,rvG:96P|`yA&|( S !8)^YP8?iaz)/a]_PsbWP?4sl>cR&fSv4R');
define('SECURE_AUTH_KEY',  'pHx|0_r1Hf!LSlho}8j8Md`E3rWt$)x&q3H;G+*LQAORtAF_4+=6,pWTu/v}=7-o');
define('LOGGED_IN_KEY',    'hDgJ(`Tu>#J`UK<`0IwPTN37q~RZ)F).1iG9U2amYmVgq;;&E|K~qXONYZ/uWHkR');
define('NONCE_KEY',        'E?Vhtsq`=a;JR*v3)7Tmk$CE0403Vaa[UBw/QA*VeLhJw}G xm{3I8ev|N5%J$=_');
define('AUTH_SALT',        'yr3*i(QK5_bEU;opzyS]`$>_C<YJ)ng$SI#ggb0)GoiLj&#78O)E ]T.MVyWk{Iv');
define('SECURE_AUTH_SALT', 'LO7kalt~`!Wll_12km9|a=gV`77;AnT!z6C7E}ZoU6v(A$q&O<wU2kUQ8`kX]J');
define('LOGGED_IN_SALT',   '@W)J&lIVYULhLRyi}9hm>_sj$:(uHD1dT>d-T3WMFu^!)Pb<Kry{{IBzx1T*)@y}');
define('NONCE_SALT',       '_):[3&a. Xs_OLETTs@v0ZE7Rp]zVYV%W?-}yr>`^ ;g)9zk+t.rLXlFa?3!AR76');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ge_';

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
define( 'WP_MEMORY_LIMIT', '64M' );
/* That's all, stop editing! Happy blogging. */

/* subdomain */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'www.geroro.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
#define('WP_ALLOW_REPAIR', true);
/* 同时http和https访问 */
$site_url = (isset($_SERVER['SERVER_PORT']) && ('443' == $_SERVER['SERVER_PORT']) ? "https://" : "http://") . "www.geroro.com";
define('WP_SITEURL', $site_url);
define('WP_HOME', $site_url);
define("WP_CONTENT_URL", $site_url . "/wp-content");
/* 强制后台和登录使用 SSL */
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

#define('NOBLOGREDIRECT', 'https://www.geroro.com/');
/* 到此为止，别再修改了！开始写博客吧。 */

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define(‘CONCATENATE_SCRIPTS’, false ); 
require_once(ABSPATH . 'wp-settings.php');


//Disable File Edits
define('DISALLOW_FILE_EDIT', false);