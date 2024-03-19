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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecobagsdesign' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Design6068@' );

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
define( 'AUTH_KEY',         'N^e~b4Tc:fBxq]{~c~A@1*b7AAoxR+:c3al7g[wz]IHAA_{l?*Np~VS+ZM(Cg=2Q' );
define( 'SECURE_AUTH_KEY',  '0QRuc_Gxso|OrH.&UzXRvQI?/QE$|uLy6v6bCt<14uT }8T0i &Hk3-CZzgan`aM' );
define( 'LOGGED_IN_KEY',    'Cmp>M*2E6R/_Mvoc#Mb)2{$%won=a?L9K_3xuS:.OxJRz-;?go.LP,~vc<]9yZ:c' );
define( 'NONCE_KEY',        'ju-eEecGoFTj4]kiqBxNyEw-V`f.I|2Bv`,(0@/(!Ew4y:1Q}V[9?-TqQ`!_?A[o' );
define( 'AUTH_SALT',        'U;[1[N0 ->qhNK%]_j &/2udF.^yJzY7ix`U~y>Qulx|M.%(X){M)z]lb=*/v]/H' );
define( 'SECURE_AUTH_SALT', '^O>VcAdz_2laZ5J<b86*qn0$<vQe>UL}sITj7l*W)1+}/=_+w+,4ev.kK-]AWH3j' );
define( 'LOGGED_IN_SALT',   ',yZOeklpf8 :oez? zJ|6VV(mGoXM,/ |<WkgzvL$|`?0gs+,E&?<3=a]R}+}f]:' );
define( 'NONCE_SALT',       'mKV?MlsysS8U6aB-VJ~L`_{tWj4f`+,gWCxn8(lt5qDA>m!yrB`W1N>x;>;`Vs7D' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
