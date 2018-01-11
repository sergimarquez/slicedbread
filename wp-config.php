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
define('DB_NAME', 'slicedbread');

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
define('AUTH_KEY',         'Qo+;jEM:!m-tM)&0}Iy|yQbMEo-{URG HBK2k,7]<.5.TS-2<y![gC<tXN3mf_Rn');
define('SECURE_AUTH_KEY',  '!&^BNC`l@4$Q:.<c$!U1E_Fft}y%+`8jRpFv+Cx5#0#FrURpIG|ix~F]l!!)(]|f');
define('LOGGED_IN_KEY',    '/:VU+5e+o*1g*P|_M$kkVhy82q`B^F]^Tb_Nwl[Rr|A#B*UEp|m=u<ep.,w60+uG');
define('NONCE_KEY',        '=14sY-f&D#+)(=8G2V5v<BLWP8e3u0O`n1:I=&M^d7$e5KnE]`0aK}|{dvB%Zqp`');
define('AUTH_SALT',        'XSH3+5D|pAV0uJ*2r22yD4oN``>lF(g-s-Wl/w4?aV^FPP^8:k:Gs<hNj]^A@BO(');
define('SECURE_AUTH_SALT', '{m|%H:Wi8Lq5~iC5e$]QQhgelp3c3k|`KEo7JHCR9E_^]m66)i9el{;Bum_RlsTR');
define('LOGGED_IN_SALT',   'jl?>:d]Id/$X^mC<xs1YmXTj3Pk4|y]}Cn_tKu&fs+&~Yp(x5pb$@B= %FGX+Uo*');
define('NONCE_SALT',       'y=shSU4i7WnSw-#C3(Vn<F&3-=`)A(+(f]+Xp=/#_|gglNKcXSdX+B-!jCUukta<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
