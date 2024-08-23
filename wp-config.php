<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mmm1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pJk PZl{*O!;bw]w|-LDb*+|DUiy39m4.#=CGt0`fE?l_Y|V V3Z>H~ae:_=i!EG' );
define( 'SECURE_AUTH_KEY',  'ECO^zb}L9}S/[Vg?&FsQ@32{-[lh`Ak[;ZACaR3JQ8`9&Je*7^3~5XDk3zbDTRmK' );
define( 'LOGGED_IN_KEY',    '!rf1[1239a vH(2-6[{L@n0YWtXQtari:RR#nc^;(`KEW$~qGUU`Ca(zFCDh<oZ7' );
define( 'NONCE_KEY',        '$OG.FV`m}ytX~` <li2[G6&B&{W}Jk[b3p].h;?8NjTFWby`mQ.+rnU!pZTn$9;K' );
define( 'AUTH_SALT',        '(]<zdc^xcHY*.mkRy7qcvP$*zl~oU],ujs?)yb6lQNkCmC`t5A9y4SaYoLFQt6z;' );
define( 'SECURE_AUTH_SALT', 'd|z /||vBWBoQSHmK}h&{)trv}vmhCy=<WeLkyMH1;GDK}mqWF.abCTCG&N)C=m%' );
define( 'LOGGED_IN_SALT',   'PX7(:6]P<hB&waIW_$>U)bQSY3}!PY~xucwV_gvzE1S=lY3a)?PN.f4D]|e3Ud?]' );
define( 'NONCE_SALT',       'k:$U1hQFS?iSFK.)&G/!_wZfC(%E:|eHQ>:e[91hAsbj4<;$gIL?Y<Z.t;V1`^y^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
