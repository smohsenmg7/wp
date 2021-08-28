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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w4/$4l!itDRB|g5n}XYSHYd*KUFX9^%3}qA8E# nLux.-)dH2QVX7Mm.X0c#z$*)' );
define( 'SECURE_AUTH_KEY',  'FW^ed~|J*X9SWx_:pI%(_~.Vq_~aMkO(%,{r?b,@flSxVqIwc[dPh^OfYAWY$LDT' );
define( 'LOGGED_IN_KEY',    '2zWu]0p=iZ/tmh)(t<%bY.X*d_U%KER|KFSDV)utat?$^Z#-}7x#W]|SD:,|^H+)' );
define( 'NONCE_KEY',        '-1fJJZtUg$St~nT}L34YZ^|pCt@I$?K;`*%^2I3E?XS1E~r[9a6RfX;mlt7=afyr' );
define( 'AUTH_SALT',        'i2ZzO;r0.LD$rJEkEU;Wiw_|~Fagp]rU`7^!Zz;s#EwaYK?P 9jD5=cchufXZ>@(' );
define( 'SECURE_AUTH_SALT', '+K>>!d!MkCpYq]KSF;m^IQ-%X/myrtwg<!I#]xoTr$*%Jg,(<.lJbzXo*b# 70 S' );
define( 'LOGGED_IN_SALT',   'ffw:y6RWVTqc6_wUfRmK@c(TVll80o*]~7Ew*Ia-Rb :VL(Ulmy(WIG6;kVxJo1x' );
define( 'NONCE_SALT',       '++KKn!#G${/3z/k1]k9xJTvY9#<oIq16#D[Uz.p}8?=lc <HiP|<hk$txXANMLHC' );

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
