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
define('DB_NAME', 'newira');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v9|40B8lZ.f4`~j8|~Tl0g.YG97g!` A-TZ=SQdi^&SU?reg99j7z+OE&q.V,o/U');
define('SECURE_AUTH_KEY',  '9kk/ UbEH!`QZW_=Vbs7@X$C8 fI $n%(:3( g#Kgco<eX-GnTdAg-)2*K$n.i=j');
define('LOGGED_IN_KEY',    'r<>ti5lbK2Y[LFS,5BJ)=O]k[y)C?Jo_X~)`b{P1nxR`4Y.|(hh?<TX_*bMI_mL_');
define('NONCE_KEY',        '2&xn9NWK@y+I!152rTaC8ZY:hBPeGaUoRG,lFF8tO]QqogjO`@p++n< @eZ-YMnJ');
define('AUTH_SALT',        '5{>v4?GjthCr?cLkn)Pei%FXTlfCaY?%>##kE`/:14.b(RLK2jQhlZtm^(af*K *');
define('SECURE_AUTH_SALT', 'ubZ~<M0N)}np;T#m&MGF0X<NYeQ16}RYTfk1w?t{FN=.L)|H<CVq:j`[Xvwi7LD7');
define('LOGGED_IN_SALT',   'B4umL^$%AT8#HVgT.2>oCn{}*e*$4Y;THpGqp:4U5q1TdwAZ.} <%-bwe(x+OUG9');
define('NONCE_SALT',       'L:P+>^7L:NufJoeT-~r#M]Jc6nyJMFK_?7pE=4Sz+L3`3Tf3i>trS5:9.z&=)lnD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
