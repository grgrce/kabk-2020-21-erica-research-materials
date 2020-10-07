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
define( 'AUTH_KEY',         'Ln>Q`%&8EaHrfxs,Fbblm(I@ik@P5^u`l>5ppYiT.]Jt3eX=]j)OgrSll<F!*|du' );
define( 'SECURE_AUTH_KEY',  'G+F^06%Vh6/(*=yVs7[SjmCBk6Zu@QMl:PkCuL>otv(RPOV/bzW*o_-^-uA,1+5u' );
define( 'LOGGED_IN_KEY',    '.GV4V2y*1qi?(@?!=NrlNW8jY/o:JJRXx,@pR?4~R!y?o:/v@ZOJt=RXSFeacAEf' );
define( 'NONCE_KEY',        '`W)%G#3Q6kn%r*}]zd<k<D:~~J]z1T/pp4<rOR;NF(j%0sl?3ZP@y_TatIA+&5%;' );
define( 'AUTH_SALT',        '$HttMWn/26+:=PrcNhU0+fjXS-e=xrX91sT$n4s@DO0NYT#}r;cEavldY0(o[V>i' );
define( 'SECURE_AUTH_SALT', 'L*SY/Ir-Oa_8?FkuJAhTDk$2=&&P)eYSIn[qZa4EC/-M,wZ[#7Cq@S9& B-GK>5b' );
define( 'LOGGED_IN_SALT',   'nZn>TRVeceXx|f+5c}8;LI*/mLxAo|!7={F< +?hOhf#pN`~m*w-=pAYS/pb)Mwx' );
define( 'NONCE_SALT',       'qW`E-}dT`mfqk8>=!S<k,Cj%x/yJLOKulPdh-u @${D.QZC{`Wn6Z(fpbqnTa|g7' );

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
