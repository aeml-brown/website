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
define('DB_NAME', 'd011fc81');

/** MySQL database username */
define('DB_USER', 'd011fc81');

/** MySQL database password */
define('DB_PASSWORD', 'oMZJ7J7ZeXVZwWv5');

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
define('AUTH_KEY',         '-(M#04>Fap3c&Prn_j/!C#Soc|T>wSQ~|;_t-MTu hI~rJk&51A{;v{_()sy5n@%');
define('SECURE_AUTH_KEY',  'Sg,KBfyl#Mn+&`LRE-%bv06;5uFsVH@aH}K4LKSbC,{|K @fGi|n=Q}J+`$<8rv*');
define('LOGGED_IN_KEY',    '}_L|Ju&>q:%r/s]ERxO9>K/Ii}L:i@hBq]B`Z!{M2BI?VGpb_EI|2I,8M+fxxxVt');
define('NONCE_KEY',        '+#TAJ El-yP9+OFSw!+lAeZ!&/|r%A#;OI:BrAYnX8xC9|]kFf<Z0Tm.<|qV@jU(');
define('AUTH_SALT',        'F7Waat~UIU`|_7xjv1Y}.|;j?*ism <10FcEy/-3C.v;i1e3PHnmfo.%!C(;^#][');
define('SECURE_AUTH_SALT', 'v7v*veh6[!-Ub~{ECDzK{s`^+;|J[>y+#y y=22h1az/5M~};!63FT|Pa$Hk:gW=');
define('LOGGED_IN_SALT',   'e9!gg||/D2@;cOkuS58le4)<_gmS6|o/s+O:5D={6zMSj1yP+%QFOB1ou@|5Uj-w');
define('NONCE_SALT',       'yX`lQ(tJn:DQ{}N*m)(ub08#oVy@iSoi-IlihtR+A8!o<[+?VeDR/^*aH;XqGX8`');

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
