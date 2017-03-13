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
define('DB_NAME', 'oilivi');

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
define('AUTH_KEY',         '7tp9a!okNYdiyG)KRHAMQ~gMH[KWrj&zSBy 4vV},@f%,,-UK# /QI_I@/s7rK9f');
define('SECURE_AUTH_KEY',  'Y)e BRebwz7mHqV^6a P^2LL![cJPd@iR!FD3%p9XI3d.|M.yr<)!%M!>-(Y`{&r');
define('LOGGED_IN_KEY',    '6Y6:M-_(K&TW*jkeP(?O:{aT4TgBPH[v!VE.b0olX^Edj?V!(Aam7GE!sNs%i<ER');
define('NONCE_KEY',        'SK1MGo2fr&3<mF&}F}d,,>P4*,aL6e~;5OQV4Js*jn58u ,8bM$~rTb-vgo_teu(');
define('AUTH_SALT',        'v1H:h9f.b$(c{(TuB_GR(U_$oIrmZj.l{b=,>&z$MWPj2Miv0-*K@%Mhvdx7ro^r');
define('SECURE_AUTH_SALT', 'oLXd+1juq%WI,;!X9h-$Y-dQs]69oYK[tk[|X`_a.BhV[5e9nSG&_X!D]f4mQdU{');
define('LOGGED_IN_SALT',   'sK(Ik7R|u?2>-:.&xsG3iuxo}5f1~ccQ@_%xA8slp^0F=;<g)w_j4J[luKDg1dmr');
define('NONCE_SALT',       'JrUN6{*)MA-pF8<C1|!m&@g8W9Fz.{ =.G9L0gfz>jTEe`C@iN=xREA2VT.#]>/&');

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
