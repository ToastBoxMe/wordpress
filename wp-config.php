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
define( 'DB_NAME', 'testSite1' );

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
define( 'AUTH_KEY',         '>}#v}K9drP`NaW6l=O/+n$srR{$BKR4Q=h[3psRd$?uaU6T&9iHk)r?3a0|O%9n;' );
define( 'SECURE_AUTH_KEY',  'BpVLY[+#>M94R=2GN1a>Tk4fpq/[V-(F^Z`i%v9yMOpz1J=4xE?:!>J)$_jRHWb+' );
define( 'LOGGED_IN_KEY',    'r#tp%J:bH&N/Vcv.XA4*>#CMPzq~VMLKv8w!V0MZe=_FUtB?1Z!]q6rMOTTid3M4' );
define( 'NONCE_KEY',        'S;?ay)o_/p;=Q?J!0s0}Z`dxY`Yk92dkmY@Xf$ZUhcWzfV~i8[pl&,X|P4b:d`RV' );
define( 'AUTH_SALT',        'bG9x@([qa4g(~8R~[}_/xTrWXu>+-;$U%.CX9;|^#*@ySVl0sm3,O+mAPB5n+5Kb' );
define( 'SECURE_AUTH_SALT', 'U{).hb|)4SX|$v~8B9I2O0c3&:CrwO&bi)4^<=l+@oDvd<H*JXHfSS+N>p;2zHY?' );
define( 'LOGGED_IN_SALT',   'q d9C#b,;iI[U8-Zo$SHn9vE[hyi _A1X9hOk)CQA^zZm2G[[b)RR<%{$v`MmL<O' );
define( 'NONCE_SALT',       'amAt.nwffj!eT%<:Y@ZaatS5Nq4D{(%7F$}L^+y!9*W$u!M!YuoKZ4)^:;.U@<m#' );

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
