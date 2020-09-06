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
define( 'DB_NAME', 'photowebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'ut[FzR-8_#`15q{VRXU8axXyxhVB1t{Oq~yhAd#6FkLaI:>R?lb!16~)XgxJO^pX' );
define( 'SECURE_AUTH_KEY',  '1:oqXq%LcOfv36E^>*v~ucg+aJBJ:W]ZP,,-*-xa[,6tQin]zY+ @ri=w9g93,sm' );
define( 'LOGGED_IN_KEY',    ')}R@Or/d>Tx5kDzQ;|o8H{y`G[x{ZCD}TP}.yN{D/Y;x^N#vAQ}e+|=4t@H5HXvA' );
define( 'NONCE_KEY',        'c~ `7U+?bXV$?8nr.+=sey:&5Hli&Q!YOnb9]i=Q6u*w6PJzHWPJ=dY&[l[4bpx3' );
define( 'AUTH_SALT',        'MZ<7+PFwb2!cacUC3^2:d}3]hd+x=|g *!3aXH8{56sE;o=mjjRN@<%q;VI2QSm1' );
define( 'SECURE_AUTH_SALT', 'bgsYfeHZw-g`i $:HeAs:@Nk9,bA$hYF0?h$qXv6E09Y|lBc;TG8ZrMXxU~;$*2^' );
define( 'LOGGED_IN_SALT',   'hQL1,P>j>Gk~;%}mr=p>QKM#{|D3~y,P`F-!sQo LjuyA{Q%F:eR !LlBLys{:wV' );
define( 'NONCE_SALT',       '~t_PW%g&h~eduTgX^q/~KTce%),oh<)@&^z:B+Q>Hu?kjaPj*p/Tq35~3`6VI1QQ' );

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
