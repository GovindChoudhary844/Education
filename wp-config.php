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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'education_db' );

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
define( 'AUTH_KEY',         'X7TLZf}5VZ9)hbVq]f?#mYla/}c!O!@<aY/5H:^30OU&;t!`$$}o]I=NINw?7Mem' );
define( 'SECURE_AUTH_KEY',  '(ALm4z&V/U%VmJVw1V|EH3?PU}K(IQb5ja$D95Av]eox9uqJ-tao7}_=3Eufvv^%' );
define( 'LOGGED_IN_KEY',    'a{x%uSy|RCqI;U^a8?EmsOe/m=htmm(K3`k-`!?y+^yrUNzy$NSuR{[uWQ?7eINu' );
define( 'NONCE_KEY',        '#)+VQid-DK1`VU)T<grT!_E}i}clrFT=I<7nt>j4g%]vY?>jSlnAc@!nwmcW~E0`' );
define( 'AUTH_SALT',        'l:Bt0t1?h?&?VO-V%ekgmt`VCyk?>Myr-U|e% r:!_pThfw1ATmh_zf[KyL:.YWa' );
define( 'SECURE_AUTH_SALT', '/^x8|[>m,Y4`&Xo7YwW:S`g}[2%|<%omPe`mA&J|[>]|x+z >*0qZjsMPkZB5*Kw' );
define( 'LOGGED_IN_SALT',   '{8Ab[)fk/C Y9R5Usg;ng1hY<REC2cBDBxO$+^P?|1Vvl{)6enl,crBfS)9#i.J)' );
define( 'NONCE_SALT',       'Y2bol#UU2oK]y-`1 VQYq`wXyDgf5lScu=SOh5f+>M>|.iM*n8 VhMw[^]DR>mDh' );

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
