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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|Ivw3-4G^e#WscYOAwIVQEw@+D<Y4WYmE!EYl}+DNKd4/Z3Rk!w5kmA?P#2(&&e;' );
define( 'SECURE_AUTH_KEY',  'L5f!~1hll7h]aNuII=%q&:sU$(!$o&.Ke`Ysn+Uc3$3o.|dSInpip,8@i]Kl;1Od' );
define( 'LOGGED_IN_KEY',    '+ePfhO|a]F&BqN.n)-meOJ5%Vb;F1o}rS-EO(ji~w@U(J4oawBah#=le3[@!1^Q#' );
define( 'NONCE_KEY',        '-ct,xwpm?,Cs~+*m:RBD#p>P?=Ay5M9Cn~zTW]g8|{)v6Vq<H_9ni`UwfE9mr)i9' );
define( 'AUTH_SALT',        '97a`|_M#P-92o(G.?.8.1DV~k|<<eT./9[hkZHS?9ZdXt<OBy^xRMOLV~{BFwF([' );
define( 'SECURE_AUTH_SALT', 'F7rgu}#R,+_:~T[UH0N$+2$e[eN~fdf+k:+!=9KW9iEe{z_{65-ex]h6^S}ZL{C.' );
define( 'LOGGED_IN_SALT',   'yttxIh {^&dle2t?mVnHHVh)`@&(ea@E1#Y_doDhr8K1hjziH)<&4RU4U6cG<0`+' );
define( 'NONCE_SALT',       '=k.Tj[k{~RGCj*l#P([pd~2^V;}Hae=BTaDN9hkicg3vY(:c>LLjTOAKC;Mb:*G?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
