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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wyobrazsobie' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%,Mv$#R@-QM!eH3*$psi-!2wS>Db`v6oz=k,!QqXR!.2;IgWT!2c:]B38~TS)qIU' );
define( 'SECURE_AUTH_KEY',  'K +1</>eNJQW-MvxfeqG+HF{lA AcwM1F>E3zr)ZabUqq0nn,6&k=L~O& ZGhvE+' );
define( 'LOGGED_IN_KEY',    'EHa*v!]J6M:p,~ztk6L%7~}X3u^,yvCWoR>!As_juQEj>`nE FLS`o>=0vYNRdgY' );
define( 'NONCE_KEY',        '6Rw%8>w@r$hfMaFiD$]HtUQi}U?S3<%-yh]$ w:`4jR#~^EDCmu;(hd^=Xz@AE^0' );
define( 'AUTH_SALT',        '5>=y_L+%2Vn@Qd_?{}*3^wn)n}cGFZy%_$K#)b4/cBnde,/Ee:oB+q]tW/&CR<k#' );
define( 'SECURE_AUTH_SALT', '%$`w?mE&_vQb%J:`pAu42Z0s;Cmvm#@~#X~ob<4$Ffj!buz3ht=pT&Th[I*CGk_f' );
define( 'LOGGED_IN_SALT',   'mS}z:ur{io-&4NC0k*x +XG2w;&+Hv{+$xs$j@g-%4*#zh5Q?AUNx35sprzjbzGR' );
define( 'NONCE_SALT',       'mNq#+ZDZFXgQ5IxRuDi>MN.,2x~_pte. *9{dbn6FpbS2P0;AWZxGli/F$T*m,{h' );

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
