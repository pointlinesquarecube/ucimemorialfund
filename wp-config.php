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
define('DB_NAME', 'ucidb');

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
define('AUTH_KEY',         'sk++wYqJlx/(l,w]9q1ZE9?J2L^?YXl*~|Zru+sM:hhv(Yo+W~#k+g1pH-%kklag');
define('SECURE_AUTH_KEY',  'o,k9+2)@3upr|`RU-uWzI9pvz5LsnbC?}?C#:UW2_`/8iW+/O8vQTP ,U3%wzdD4');
define('LOGGED_IN_KEY',    '-?KmahagjAoivZVTzl.G=aw|w.fL2r%Dzj^f*zASgm^%l(&t9WHFxj*G-!0B9~0#');
define('NONCE_KEY',        '@+]+r1RshNL)l)[/nmO:|k5>9L-]47r6}K@q-im%%V52K7kJLQaG,5xTY?^d(9oK');
define('AUTH_SALT',        '3|=.ajIr:Gh-^NS%WR*r2+DTpQEw$bCR=Vn|<IWx*h7VMe+*jhi+u8.%8&r,m)uQ');
define('SECURE_AUTH_SALT', 'Yur9R* &lHleg=fXd<`CE{wE!e21+t4amLya?R?3VGYX<6La3^V~6&- Z@z,rO(Y');
define('LOGGED_IN_SALT',   'aC^+q<KY<k_/_vS>+S_Go]7a0 tp7ZBTt:D;{a Fys42dFe(uLZv=k!`fHVj<1=z');
define('NONCE_SALT',       '@2%#QIuJJecSOCLQ[Ypae-3}2Y=$c]}3SK5KWLT1E(,hmxdm)C+(+03G2@e<-<sc');

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
