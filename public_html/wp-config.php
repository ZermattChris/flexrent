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
define('DB_NAME', 'wp_flexrent');

/** MySQL database username */
define('DB_USER', 'flexrent');

/** MySQL database password */
define('DB_PASSWORD', 'tmvT6Qn4bdHfnzcE');

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
define('AUTH_KEY',         '?h`=RH,)wGJnI$`CQ9,l.8>>-:SN`o`}Pe_7STWRD7HX@YW_FM`w8{HA/)ygoZ?k');
define('SECURE_AUTH_KEY',  'sYS-kU3,)Q9(`)OoN]y<8!D*]+~Tt/l3HnL@~6GDSuvF{_OzR)|^|CR0:@4SCvEM');
define('LOGGED_IN_KEY',    'zBBLcPqg-FJ>0|G8oz7!p4[{9OiCG3wuQr[@yJw?fr&-ov+4d+Jq_,Q&>Ude1/JV');
define('NONCE_KEY',        'SvhbQ].#LqQsK~Y/[cD=UFe@@?Vlkq~bL}x)UJ<xM7oo e>JtVH}t6eq}y5<y}-b');
define('AUTH_SALT',        'xb<ppRIk|5y>V&rB0FGJ=F`>I$(hGXWj{x`lMvG-:*+V6)1uTw`.ydQK-$]&nwK`');
define('SECURE_AUTH_SALT', '=2`SiRQXNXkR0(d4=yyu_M*U0|YFbVs|7SaP807>19<jn01<`qr/Yr#@~hfrY8A@');
define('LOGGED_IN_SALT',   'hF4N)D|IN^>l/#W8QGg;{ f<$StPh~7hKO8 Hh%~>XF_(uBPH`jXkA4^cWW<.AY1');
define('NONCE_SALT',       ')XK3D(ldy*Vs*M5bzE4 8t@ZU+?e=_f]^e<:9:1nW%(uA?IY[7iKw0QNaG+k9@vO');

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
