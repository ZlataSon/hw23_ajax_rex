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
define('DB_NAME', 'apple1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '662775');

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
define('AUTH_KEY',         ' =m3x)+mygk4}TOZ6)-i=or)AIMVjxD%{dumZOklnXO:[Sx51/(}DU`H/<2`_}>s');
define('SECURE_AUTH_KEY',  '7r``]*GKa~5JK?RmA<nVuLqtlkxH{ny[p|.D-$-:#7{ c]Ra~?05-WzUs>d@*m;s');
define('LOGGED_IN_KEY',    '+^I#nrm^&c&u1zz,;X0%XA%h{tx/uy)@!y?^arjSN8c <~TqE,s>xnm7S?%4&MyB');
define('NONCE_KEY',        ']5j+0[HW0ez[? YH(OUTYt6Wrd 7/?iD-PUFKM_T1MI |Bz#:(,N9g1N+wQlSzr+');
define('AUTH_SALT',        'RRNLCH}f[OkQej8cDo}SO8e6;C<-Y?8IO-~3*2w*PYgExvI&1_.WmK,kGgL5U0IA');
define('SECURE_AUTH_SALT', '>=L$V|qa5yeeh<cYIV|A[Z`@IK}i6;d8@#d4v6qY@r(c#zePgu8Yw+(B?WAz.WBT');
define('LOGGED_IN_SALT',   'G2e)9*!dM|-[u)78^|_D-;8QL)upA8p^~qr.bNM:Zp#|c_(?bSOv-#X-S3rBh.I4');
define('NONCE_SALT',       '!_lo_*[333z~C3yS;WOab3K<H/ `DP!E8@wDnL-},ozDU_L8i0+npGYUg6VSuU|Y');

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
