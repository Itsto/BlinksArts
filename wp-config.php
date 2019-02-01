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
define('DB_NAME', 'BlinksArts_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Y9>L kl/$a;E|f:u3Xu,|{zZ 1bn ! oeJs>*SbXE$a,y/3y40qJ#3dagN=Fz<GF');
define('SECURE_AUTH_KEY',  '|;8|ax1Y.W{^KhT)A,pm3^y*f(vF|G1IoR5WF]=)q:K*q:&eE=3lBM6oM1s}=`2C');
define('LOGGED_IN_KEY',    '+G&dV[pF%Dvu5y$Zi7TlRoJIu%x:v,`Wgh Sie1xsiS$,<!@eG1TqdPYSG<c5(d.');
define('NONCE_KEY',        'AOS7; zy Y8XvVFbuRLOBb]77#}HE_7VoO5_j#:Of9mT^s98UW=h2([!M0@R(y(?');
define('AUTH_SALT',        '!``Iv`;H=B77Vk zhWts|esui?OSnB@Pk[4az`xcS-J;a,6=~9{&$>/`[#[D|C@$');
define('SECURE_AUTH_SALT', 'nlK{Wb61d,ey/oeZiP<F?X`#cNf9NJSU|elDEC^0KhIsH4)69v)>mOvegFq4Gj d');
define('LOGGED_IN_SALT',   '64d#DxN#!#iTP&sCl8B.(?L;X)h[8B>r|2M3J!:.3+<brh)3>@Zrhal2E<ok?[8Q');
define('NONCE_SALT',       'K]1T2ZX)|cQY#F(FGHQSwXo>l#y;@L{l@Y{ja82o/4*BoAb)jN>_fN_@E4#$;65e');

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
