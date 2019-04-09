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
define( 'DB_NAME', 'Africa_Ecom_bd' );

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
define( 'AUTH_KEY',         '5,Ljko-p}5C-<9[qQLv*L:?&GSrkk*a.OA&Oc}4xi|>(?r{*M3pj1}T;8<cWJQ<~' );
define( 'SECURE_AUTH_KEY',  'q:cpKj/w.u>XgO,?j@N,z#?4[LM.o#R9PqP3mlk}@1iq|!<%JhP,yhz?LTIhYyHl' );
define( 'LOGGED_IN_KEY',    'k7@$/FP;QM5PF}t.8og3H8lzfAYvH 3}v-x_^J&#aTMmOOX8[ef,c[p*0WOds1>m' );
define( 'NONCE_KEY',        '32ZT ?l=K+b_*Fi/KQH MTD9Yv.z}Rcd0JqRY~S4D{3&u-dTx0Rd;@!.7fREN$o}' );
define( 'AUTH_SALT',        'QZmrEeVIIs:jtm=c@W0zn:  bJ4UK~yXm>S!Jck`$[`+l)4L-;GgH#,(7:}-U@;U' );
define( 'SECURE_AUTH_SALT', 'boAyE`;^R0VD7}4EFY L)o qd~DTIz2Bzq=%4}=dgNXw%_GEoiB.B$zsxcGAK`au' );
define( 'LOGGED_IN_SALT',   'FT&Doc5uM,<o2/.nLH``%xj_&i.bFj-@qz7?$>1qOZ+_6fW*?sOZI.447Ke>H=*X' );
define( 'NONCE_SALT',       '5wZ<<=B]p{xR$Md.=iBa1+dY>YD3qIC([F/13uA}<=y],K!U.r KHNIR*MDm*A|*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Africa';

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
