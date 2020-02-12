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
define( 'DB_NAME', 'bt2wp' );

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
define( 'AUTH_KEY',         'L@]iVg8h+WWFBjLa!2RE_HEsGld*7kfVkV,Jw5^3Hc8cqEMv+$R<:/k[~K.@P+Q)' );
define( 'SECURE_AUTH_KEY',  'X0^~}+B8fIu^t?!TxS77xp_LhzFsCe~LmJw#6=79?C /b-$d`}{S]@BF^JpkM*-e' );
define( 'LOGGED_IN_KEY',    'S@|Ona7QoUrp/KE+n8]^S7kxrD,c-mTZSqS,;YwExJlMh/sw5$mU[V+Zf8NbBp D' );
define( 'NONCE_KEY',        'Spm@H+qGWQ8Z1A-I364`^.@KnU(r7x4+Xl;Mk-MRC=#!PU4?f|<+w4@;H)*?lYRH' );
define( 'AUTH_SALT',        'sGd:oa^Orns~<1b&h1)-0REb)k2r7/),NFSJ-wZ1T20VWA@}_5aPnM@GqxIOPZ(_' );
define( 'SECURE_AUTH_SALT', 'Rjia1#i^41z p;G_/hPj2}/3_52NJ}_X!i+$-Px@NvOOB=,|tiZE86H5J#?`j@_7' );
define( 'LOGGED_IN_SALT',   '#c4Uq@wP_Fr9^-mTpBG-*_|+H]bg9<xnVjS&u(.@:dDEw)f(J3@xqzGF3:_Q{O81' );
define( 'NONCE_SALT',       'E<H%j,mpp2kPkFD-%Ht8kMk7YVY~PnBx62h}$_-8m,1~oL(Ls+*/E|zj}11IrhOe' );

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
