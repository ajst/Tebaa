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
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$[Nbg)WSZXgYMn!mY$O|Nh#d+sc`-H^`T<u`L8AZ|shGpy{`&FAN~72eMhl#Z[A3');
define('SECURE_AUTH_KEY',  'VXO)1Dp-#wxp3%T|||]iT<m@|u|IrP8]!,oAdD1jt81>%Q?ap&MSWlt/&X~,Y0&M');
define('LOGGED_IN_KEY',    '0/=yi4Qx~}hGy!U2T&M}FH90cx`/EXs&Uz]8$iX.GYt>IXLx+MRuA$@>Mx=@O6r*');
define('NONCE_KEY',        '[L+drufjS/[$G@[JKO,8#)&dW*W.uNkLqidJD@C()HECA7>*t.LRl|V[NyopJ$_.');
define('AUTH_SALT',        'sJ^:5;<i7LE;sEBD.wheT>>Oxrp{ >dEjUQ|{;^D-<XcKaOu87t,VM~_F,wzqc6u');
define('SECURE_AUTH_SALT', 'XuU`.`IrxNKyy{Xs4W~r@!aNE@lPypkB~zo>IW~p=T}G,)hI|5[K5=]MKY&wR55 ');
define('LOGGED_IN_SALT',   ';gJD/28YTN1 ~S:.lv:qz@Azqzx3(RpvrCVo.x)Cvi>wq{IOn<Ig?9;6U-zu!s;O');
define('NONCE_SALT',       'jg7-{R89?QLB F7-r}0}mD9E=kM?PXFDtoINpA)mMYJmIBP|%PJm-TK?35s3SJ@B');

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

