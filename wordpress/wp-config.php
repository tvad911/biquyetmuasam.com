<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'biquyetmuasam.com');

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
define('AUTH_KEY',         'fAnuu8|bs,T=*L.J#d7tLeW?J+9}Dc1*W{}B&w?>FW<IGzcIcMz-M7x]V]rBvaf^');
define('SECURE_AUTH_KEY',  'wOBJo{wQ$eA;4]!|l!EN&9:BzDGSo%e7t6vlPv=%tY (wThY|lP,.ys98GEe+-.e');
define('LOGGED_IN_KEY',    'HWwMsUd(i1QU0^=&|oalkna [AK[H(g2G3-Q- pDAOcrLqNq4l?`xLRwRKM~)|^-');
define('NONCE_KEY',        'e>ItEf4M#8Hkp5Uz*m;[V>^SU`v&->n#OKyI!G)QM;0~]nff6zX~g@#_`9j83F,|');
define('AUTH_SALT',        '*|JK|,7i0F>nw`9K-%n`E._<E@B2fPiDe08b:ta|_uNa}`hReAqiGI_<@028Ar|Y');
define('SECURE_AUTH_SALT', 'EZ.9_K44aYoO .=G iT1A[hGM)gEs5|:zfy)KJ]Ltc+w?4Z^iicv@OiQgI6GHT%Q');
define('LOGGED_IN_SALT',   '{H}3^`8y7n3y/8P1{Mg[*a-)7;XoJU$$5:;Eg Zkj@d:9XX=3c[uz8`Qgjw_aVaK');
define('NONCE_SALT',       'E}4S2Li)0s<[,-KUuT%2xv*g>]rML}; wH5Dri<Ri3q/Ss>P.4bV~v;-)GGiWpX+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
