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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '&K1JM1E_U(,v%|~:GA>|rshJHmT#A^&,zv8,=Nkioe1sQ83WSsVn.tH.&:Tzff)X');
define('SECURE_AUTH_KEY',  'q53}Ou|Bh3=^5g{BNi}{:aG@Lh%GfD[vQGp,lZ@xmLw(xt!ZVjsXfkDW47`Svj/e');
define('LOGGED_IN_KEY',    'bi{LI -wT5qjzR0AlknY%Bk109vta}H0g5K8`DZ)dWp3,gBPkzij*M}.n7HBVAg~');
define('NONCE_KEY',        'msYfX:g2i}8-8pkJM?FfeZShm^:1Js4(+_HS3>^Wr1$8!mx)hN^2Vcn9~d :0^6-');
define('AUTH_SALT',        'QFm:zvUcZ+`0sdlJJ90Bxdp5j#g%-%z~t5^2YZHR--U^LW7p4uGC7^d{YdJs;_J)');
define('SECURE_AUTH_SALT', '|MAa6* .>`;1< A8)qCifJe$Qo[!$~E<10b|M,26D64`tsI05/cc1A%nhNb>WlA~');
define('LOGGED_IN_SALT',   'bDt{Ptik9-?Q,B~5%[e}rt~(N$w6ipv7}-RnrnIt)gg,X,Lcm*r(!0JE_[^d&yeO');
define('NONCE_SALT',       'mqE;ATj)_PS`68>alA4F+rL{B RVq?UYqh0H5AHRGpEW^+PQ,lEx*H,)LZb&L;`^');

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
