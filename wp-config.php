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
define( 'DB_NAME', 'caucasus' );

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
define( 'AUTH_KEY',         '06-`qp,Jro=|Cp:1di$<l!sRb[ {Z;|,wBPQ]P..Xa(SU^XmVn:OW#kTL9:Pk[E5' );
define( 'SECURE_AUTH_KEY',  '+s_tn^Li (H|>A[}5w36.J#f}m/vE$lHOr:jMj5=K<NB&1_OCfh&O+sRR7Oy-/s]' );
define( 'LOGGED_IN_KEY',    '-8(!D(N]lA`#yk}[[Q[h7n}`~HiSxA-&g_C:~3~?+ym(&?fzMtIY17tKi;ig$<p ' );
define( 'NONCE_KEY',        'X<8d+L?GA-NgE^bGfUTde0C:H9nlf&8)toS34}xSYuOYW+XD/R+r4+LCQk^Y6Kp3' );
define( 'AUTH_SALT',        '=AeM[K||kG7;N+@A;G|NuqFo!6Jb j/X|Lh8{#mYJZmPU?2,^#!i(gz8:qvz68cw' );
define( 'SECURE_AUTH_SALT', 'EI;M9_3sqJ7,%L.aAKx#N-{%B%jsB0^OapxY[pO/3_|?y, W,@`xZZ|p[[I]i4j ' );
define( 'LOGGED_IN_SALT',   'RJ4gZ$OHT:TtweXAQP5IJ@!uIqH7{4le5[ygZz%AJt]aHc$G(W(ri!/8&Vk<71>F' );
define( 'NONCE_SALT',       '!jf&fx1nA73@S2q0UvZ,|qu4vbHX->O@$8%s~p~ lSLYDl)<#Il:c>w^QaocornR' );

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
