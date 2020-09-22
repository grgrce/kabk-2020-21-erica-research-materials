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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'research_materials' );

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
define( 'AUTH_KEY',         'q; W%5i8vvvbt[.w++nr^]q[#T{DkHmn[cyw}M!R2g%&b1s+0ESu.kdtKYM4u{Fi' );
define( 'SECURE_AUTH_KEY',  '$b@J^Oz.bUaO.|bV*T=tFmMrf=LxXyQd>^wt4*&X{tv)pXhCqtm naPDDr+qu=Mz' );
define( 'LOGGED_IN_KEY',    ';qz]~c6Zg_aBqDa<<?:OY|peBrU[zj_$S4,|GaR{^Mip6+/lNGp*`Wl_Y!?^UF9F' );
define( 'NONCE_KEY',        '_b(g/ZesFfJ?bTH,9kbdYu&1E!>(IbA1qFGsg?}63Cu}e2Tatftru7<6(~X~Xfr@' );
define( 'AUTH_SALT',        '@=,Y>/RP+_PS%-291hYd4*f>$F8Zi/YT0H`)64{iW/X!Y~hjZXgjl^d+DtvA{P4z' );
define( 'SECURE_AUTH_SALT', '`6GHw+KuPTs&(s8A;^Q XxKG)J(C|H)P~ 3w5;Rxdt}Dn3ZMvwms*&:znV0ebFU!' );
define( 'LOGGED_IN_SALT',   'bXp/yEu+]flD~84;p[:/gwm([CXV1L ;oT.u@1z]a!_@2Hpn3lC)ynGb3gcB=@=W' );
define( 'NONCE_SALT',       'g5`G!;r]}4P9{5`0!dvBr<pKZ,YEY6,0|0-x7%XpP%=C_cnxX13Aua)LXH4fMh:F' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
