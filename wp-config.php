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
define( 'DB_NAME', 'wp_site' );

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
define( 'AUTH_KEY',         '4$^ <{nOIM<k`kDYqoxX^vRRXuYB[CgRzhEl(zf>Y{ZAb/8P{3h#)@m.p_A`eF5o' );
define( 'SECURE_AUTH_KEY',  '-(<MQK/X:v(Kv-`qFq!f-(+~&9Q>w)5KU>_ahF}Xtj]`[GaC3,!rN]DtX(X# oyR' );
define( 'LOGGED_IN_KEY',    '-iJ*p{}:&I@Uib5WKr8:2u*F9it50!Wk=.UWNT$bwg0D_C[i%-UUBkiw7&q,E[UR' );
define( 'NONCE_KEY',        'taUK:-VgoNT)9|Ml[nTe!e2K7aIDG]K{j~.tsD?/Gzop{naJi_EXsW_ cplP5P=g' );
define( 'AUTH_SALT',        'QV4xm$>(ZMZAl*EtXm3b-mc?90Xe5(v[hz_xm-&}cXPbTbXXfT7xFrt<r}pSD2:j' );
define( 'SECURE_AUTH_SALT', 'F4O$*jo82<XT o_@ 6eW@lZQMb(S6m+&>IM3+1x|#s1O@Sn2%pD&6ftWU3lLM^0o' );
define( 'LOGGED_IN_SALT',   ';F}@9*5*Y Ihxr,mp3.RO/bPPr17s-bZiwC4yQh^^v^Ea%$V[<m,?!;@|a*!>ExM' );
define( 'NONCE_SALT',       '&E.MyD;# 5^444D<Guui!n<fg+8cH&g)&z%qQnF><rX0=cbQWg*u.iKJjc:r_XJd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
