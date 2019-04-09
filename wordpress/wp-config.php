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
define( 'DB_NAME', 'exafin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')8n% OpF]EB~nY+vWHi0*_R^4<.O7}N0JVn3F>;mHO2XGGQEC)%]Qx(E9:?7C9{f' );
define( 'SECURE_AUTH_KEY',  '6M<Zk84.0}nz#:hAJ:G ;%?5aK`4X_yq(jyb~MX}fpC;qm -8Bul6[Ba+.gr]wJ7' );
define( 'LOGGED_IN_KEY',    'pFo9<y-)>+J`.Z<;LXv#,!6IoQ[+oB67bWt-sPP>j:D,yG/,*T,o2S3we;*dN@4Z' );
define( 'NONCE_KEY',        'lJwz%fB#/7F]%?1vEL927U(<Ub=tZ*BbJKl!f;--5YL+]Vl[7*LPp^3M&w^QIImn' );
define( 'AUTH_SALT',        'nAQs!s 6<7D]I0W?J(FqK5amF-V:pY]EdO<>eSs.g-]~}u6lKI 6<PkT4$rE/>u+' );
define( 'SECURE_AUTH_SALT', 'Oz,P+aw,>e$x7.#`{v:.Z?*O>QJ/h?qz4#~v4`TBr*!S!Ef}UaDCg5DvbiNG+_[i' );
define( 'LOGGED_IN_SALT',   'U~RaGsPFV)IRnQD^fq#J]@pC(%(Fi6PgmgUl_)/PD+Ro<xlbX;~1t4HyqEh)hi5~' );
define( 'NONCE_SALT',       '?X{Cl%>h+<PXcDjiiDqf%13/LbuktpNy.x;1Svht>NLRl6n/BJ[an?k!F@V^fQHB' );

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
