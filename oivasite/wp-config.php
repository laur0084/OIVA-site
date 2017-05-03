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
define('DB_NAME', 'deltaiso_oiva');

/** MySQL database username */
define('DB_USER', 'deltaiso_oivadd');

/** MySQL database password */
define('DB_PASSWORD', 'Rollerstar1');

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
define('AUTH_KEY',         'f!Px87AsC^X0.+$Ev2>} ^!m2-x/#Ai- =6hgA#f53J&ttr~HD3D}2kk.S.;ElSZ');
define('SECURE_AUTH_KEY',  'yls)w|-[ QQzH`sp<}(w49dV*Dc{ @`<]Fx`}D2Ay^1jWN_wZIqN/? ~aK0,DCzA');
define('LOGGED_IN_KEY',    'xc4N<e.>EP@`7vtze3JvxNdpy)Sl1_?#]XF1Q2^`=VJ[(#vCqq:F<>Z@Y%w9r7!7');
define('NONCE_KEY',        '#dN!T2W0I 97Zssf=59|z,N5]~-]t4_a=Yv3&B(PVSjS-JJ;LNOIlE~@OaJ$1;u6');
define('AUTH_SALT',        '9gM,TZ: RhFuz1}h9yg?uvNawl6;3 $CxqC!FsZ-4v}jY]aDD m)!#.s8sDC?:ST');
define('SECURE_AUTH_SALT', 'GrE15+BC?}57P;a>-h7}Db]?(>s<D{:f}+0z9u ],<.VI{h*;N<#~ x*82.xPV*s');
define('LOGGED_IN_SALT',   '6&.[W!@o[u}v,UOdc1[fGsHJ8HA tte&,mwh;Vjy2Gm|QWjo}z0;,V{zQM/Zysj:');
define('NONCE_SALT',       '4s_p>AcN$IEW6dr/~6[}<9uTgPcBv_0VlNfLe+:S5_ya[nfl0xb>_d*3sgVCHlCu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_oiva';

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
