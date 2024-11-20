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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'securitygards' );

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
define( 'AUTH_KEY',         '%(rR`C+!6B}h/z2w/WP ._3bjC%^~8-O]$e=?zw}.pmUJcbRd0t}E.~HcOe{5KZ$' );
define( 'SECURE_AUTH_KEY',  'TaQj[]BZnZPt_=~/$T6+L)m[Y}owL]%}![t|IX]+Qn&WhxqE=k?P 2RXT&s~[D|6' );
define( 'LOGGED_IN_KEY',    '$l:Byto%lP>;YQPWeVD_S&-K7b(:z u:.^mg:ZTi#T.:wzfeH{ZXQNjO0U4E.g^}' );
define( 'NONCE_KEY',        'Y?!x#=dZq_2lnnR-Vq@%2Z<Oa.HiSjDhyTIJ^i7X/g_/fjDUqi?O@teq)%$ybShp' );
define( 'AUTH_SALT',        'f@#Rm}Ww@9&k)H|J<o}eyAU.ACjNp2J-/IhAj`mLj>6|-*s8,5P)+x=f7:yk>yj?' );
define( 'SECURE_AUTH_SALT', 'F|H/XWn~9 ^+bu=*59`@,C$v@V(O,cVqh}fM{_x|T$DV~HV>9R%WW%JVj#Eog88F' );
define( 'LOGGED_IN_SALT',   'KQmj+PVeyHPij,t>;5$5JN:U:&U|]*Y9b0($-*)A]f6Swc~qVhp7{Icg@nOP/AVh' );
define( 'NONCE_SALT',       'As&${^~[_`{Cn>VQ#pmaG/JgnI!s,`lt?]!aPTt7CW&(k9{DAal|zn9MJ|TJs1`a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'scrtgrds_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
