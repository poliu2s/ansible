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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'selena');

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
define('AUTH_KEY',         'og2 Eh6f+[R#!`J2flLay[%d&T?#D[| Y?)9QhC>h&~pQ3iwdo~cBo=&ui}3W+E|');
define('SECURE_AUTH_KEY',  's-=t]{M77~d>PV&b~qHe8h4fqv}4|+X(8^C&(Qk!z:ZR%|d38@Kh4@~i{(icSc.b');
define('LOGGED_IN_KEY',    'A[@zN+$upT#b/&iAbWK!2t-M!e8%wy`v9h!f+~z1so`SYD8dlZ[HhnDIb^&5HS%o');
define('NONCE_KEY',        'oB+83@K~Psy<}bx=BM:#;UTU*UZ}GF^JT.3Zv5+wcf4</uR<O]8;D2Gqyy;|wlP%');
define('AUTH_SALT',        'GNLd-J@y~SX+,.9U:6t}33d++RuqIr?XN!iCmBumJM$*doTaiR$tQc^iA/~{F0.M');
define('SECURE_AUTH_SALT', 'Q5^|`Lq/`T-6v89FO5$5]ef${UABg;gr|q(Rza<A3-To9mrG8!8BQ|sa**@lC@fo');
define('LOGGED_IN_SALT',   '8BVf-`$<RN:tQsuf~bE&p8(-+IBI`^y,`A,`D%to|{d}b^.HX,7&(.,$Tei^-X.e');
define('NONCE_SALT',       '`Q/MocAqFkfz&vtc@k|-Ih@%hV+I-pV$,tBd=C3Ow4K4S%N[F,%|KhL+MBB?uW?j');

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
