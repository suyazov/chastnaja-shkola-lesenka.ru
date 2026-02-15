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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chastnaja_sh' );

/** Database username */
define( 'DB_USER', 'chastnaja_sh' );

/** Database password */
define( 'DB_PASSWORD', 'FxjkaHcX7nGEujZI' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'h=sDL#9!Tz{fZ[6#?9X@jBjC:b{1!]{;bA~)oW{4hG^x|AKAx)E3]j}0xh}5[V.+' );
define( 'SECURE_AUTH_KEY',   'ToVBJLbX{y`NOPh`3[Vi&#`Q&:(q4J@(0l*xvPAnOk%Ny1w8NWH63M;xhBn}bcGP' );
define( 'LOGGED_IN_KEY',     'eY8!?9W?Dy(ln$s=9fM`ug}v(.hE0V/!9~{*=e~EiwWwvVlI!ko`usz>/RCp=D>$' );
define( 'NONCE_KEY',         '?=o}ysrJ58b}W*&HZeTiLD^nLPo6wH/3vaz/G(~fbGk[]_,AXF#)I[-1NU6i`iiV' );
define( 'AUTH_SALT',         'O~y mI|t`gX9_Ks=9NAUIPhfEjqGa)|c<75?!9~ifOAl&8l%tsY`~UWB D)//BB1' );
define( 'SECURE_AUTH_SALT',  '*`OkMvXH7 [nFy_P%{_HLNevV!qSNHBo?,r00*:C|$^KF 32wh XB[Zj-g$,!P:_' );
define( 'LOGGED_IN_SALT',    '}$I@TkLk-cCpP%oB+n010&1hdUj[1y6D$5lf8!JDP4]*zqdR*+UnC<kk-1e`nTHV' );
define( 'NONCE_SALT',        '?NahtS7NmC2NC.02|N62QS,SSyBe8[56~ E.YF2DDU2d0p_5e? p>G IZM`VaMKA' );
define( 'WP_CACHE_KEY_SALT', '`|?|z>F}jSh^nzyQiDRt%y@XlKjviNQC3/^f{oa)%wEW0Q}w#S}4SV[um.6L$.us' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'ACF_PRO_LICENSE', 'full' );