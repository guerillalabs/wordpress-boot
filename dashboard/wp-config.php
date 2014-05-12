<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
$environments = array(
    'development' => 'dev.',
    'staging' => 'stage.'
);
// Get Server name
$server_name = $_SERVER['SERVER_NAME'];

foreach($environments AS $key => $env){
    if(strstr($server_name, $env)){
        define('ENVIRONMENT', $key);
        break;
    }
}

// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

// Define different DB connection details depending on environment
switch(ENVIRONMENT){
    case 'development':
        define('DB_NAME', 'wp-bootstrap');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_HOST', 'localhost');
    break;
    case 'staging':
        define('DB_NAME', 'wp-bootstrap');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_HOST', 'localhost');
    break;
}
// If database isn't defined then it will be defined here.
// Put the details for your production environment in here.

/** The name of the database for WordPress */
if(!defined('DB_NAME'))define('DB_NAME', 'wp-bootstrap');

/** MySQL database username */
if(!defined('DB_USER')) define('DB_USER', 'root');

/** MySQL database password */
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'root');

/** MySQL hostname */
if(!defined('DB_HOST')) define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
if(!defined('DB_CHARSET')) define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
if(!defined('DB_COLLATE')) define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M~pq e(-H-s|0TQR.jN1+e/ag5uA_r7rF_+V[@6eq|^`GuT0(aY;Hx=ik6nmk?by');
define('SECURE_AUTH_KEY',  'qe2_7QI?]l:[~x-T%eCT-{X-OX4I3=J#i}V%%{stS;]V(4[|o8ch9zz[WmK!725q');
define('LOGGED_IN_KEY',    '0BUr2r+0J-(}DeDi;6wG?~=0G7*h!bIt!F@[_?-}o_Y^Ba4zzo@M+Y!Roib#TU,[');
define('NONCE_KEY',        'dD%@a~dsG+u6vPAC98T3`_mtOyus` >CWJ=l,IF7U>l8U[fj;x}8U|-r%&/zrB@H');
define('AUTH_SALT',        'Z,`;u$ReAt3 4Hi!*u,io>p:MK$&9%T+}6Ih|*>8aH1hT:$|dd /x-0Xl?npupR>');
define('SECURE_AUTH_SALT', 'QADe*l@c`5#S[I/6F4A&GnHj?Jr11v/j`=_ aN=DVLHY*uAAm89dN:qfjsU4dG R');
define('LOGGED_IN_SALT',   'ZMhjT1mCZhV%]go+bc|o~HC.b8}c_(nArMdaQ.P$VSL:&Xe%&7)_]P-y#b]_7<Fi');
define('NONCE_SALT',       'A(iLHd2bH=?A*g#gou&B3z*MS/-Ba$Iuq;-4!A(+I^BXg5R1-d/t.mZNzjY=a-yX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
