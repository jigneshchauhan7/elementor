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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         '[0OaVu<7Jd+vY:p1+.Z{~:k}CiE~{UN]FMm>%e$agbn*B/ay[!LdZXR&W~<W!F0/' );
define( 'SECURE_AUTH_KEY',  'Amw}@.fZ=BrP<gB!=+*9`u^IdKv=@b~EOa}0Vb}wm}RDGQwp:@$$VY0TxBNA?KJ=' );
define( 'LOGGED_IN_KEY',    'K:0,#a.TyHPl {~#Ri4i:brXP*k^iKC< ^4BkEP25iW7R5js*jlZS_Q0e}>=Prgb' );
define( 'NONCE_KEY',        '+IG!/2.QC*K Cpb7f%Pn.q3Xk?vy,n.d@;@o|ow`Z,2=yW*Cg{~Y6d7])7qjX5vc' );
define( 'AUTH_SALT',        '*b)jv.:GVGKEHPzFKS5I$|j[Vva.q2hys4itr7_j^]~yOfg ?zPjl6f) 3NjDfI:' );
define( 'SECURE_AUTH_SALT', 'fJ4?g|Q$gdK=&ac#6{{y=a@.KlW6K+2B$`|E4KN BN`K%l6Z3?0.z-^24QF0^Gv$' );
define( 'LOGGED_IN_SALT',   '|vqRU>Kg<+Fo,5V9;4@LaiLT12GC4AX8O,P|Wg0eE<5+xdg<=8 ER;NU;1;TKB>e' );
define( 'NONCE_SALT',       '`~: OBbNl $&}%aA3!8dyK]b&4%9,&}#|EoW|=)7Jzxu}O{ezeA5V,+Q1UK+sCSA' );

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
