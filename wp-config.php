<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce_hellobizer' );

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
define( 'AUTH_KEY',         'R?SUoJ%Cf|4M^!pWR5%I(ZMf:LWE<C*M4Qw`P:Q6$0,4d0J%3(vF1#7Yqj0,*cs ' );
define( 'SECURE_AUTH_KEY',  'h.^@2usf#K@R4X5DOH)H =(<&DumUy#hd6S6VMT,OMzqw,PN?c}g>)Jtj[=cyN@~' );
define( 'LOGGED_IN_KEY',    '~RHn^!H&T8Ot9 nzwx8(c;F<>/f-AE[4JnjFfPm7oRv:[ms:<CUq9G>2PgW?~gdv' );
define( 'NONCE_KEY',        'OIT7[Ln+f(vTR^V0&%2jOSl9j`T9N}p*=f1`!cXvj8&vm9H.7C4J~,adL-|a1DRg' );
define( 'AUTH_SALT',        'sWk/hDqYc|R(+NItM5=5?4,cc:O=@3B@6{YqX%weqt14vJuuW<5F#cp?}XLlvQ2G' );
define( 'SECURE_AUTH_SALT', '0UB3{J;o~5bLq2<IbE+,5ZBKjO{g[o_ }?cONIY`JKh6F :|q!!?B?wRHlPT3|=6' );
define( 'LOGGED_IN_SALT',   'obj@qW:4qwMUN}@ tR+Y9Vf27H)zYIvaB&I`i&M_{AQ@c[)X~LfB+&yw#!g&Ne3T' );
define( 'NONCE_SALT',       ')e5#q+2@0CJE)9bP,O7BSaUTS-yp7HlbDcyA|]Zq.YOJEgT[0.~??PakGkB-ftmT' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
