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
define( 'AUTH_KEY',         '2=lSD^(:]~;`.At>Vn*%`tuQldcHc/1RQC8$?oLczn|f9?K~24vbRQ6QZ$wX=AB-' );
define( 'SECURE_AUTH_KEY',  '(jk:CP|v/B1q)NG7KxJ;w@A1K&?r;)#QJ0TzV139dBZ_WzE{T5DBwfpi)Gl^;h&t' );
define( 'LOGGED_IN_KEY',    'iM#^ObbltyH;cTbWYHzdKN>@!g(%oEd+yMS8Y,ad>7soh.xrJzZK$37B c%3U-.D' );
define( 'NONCE_KEY',        'Tm{kgfQ-6x],x>2wDGSC##CG{?+AmozBaa|VH)w3:+<?I^R/-i$yi:0vpz.v8<@+' );
define( 'AUTH_SALT',        'eft~xDL~,R2k^PK!k3r49 d5km>Hq|HG?=L$VAZqsYl,rI5J7L~E-E EI8rhL=C+' );
define( 'SECURE_AUTH_SALT', 'p<O,zHzL|x+M*olWpm?RQ_,Y+nfG@D%y1s5Lct3&3H_t?LHejb&W#ssU]e,8>54+' );
define( 'LOGGED_IN_SALT',   'yekW %wyA~#.yGB6VvKCJoL2xOZ1e=916~D<];_r>}nPcZvj?9KGD.Ztwv[WgBo=' );
define( 'NONCE_SALT',       'W(0kts}1pN!;xta>W(ilv~[9U()|LE)^E5J)j#a1,*g#^|kQ%ox3gW!+)5kvOoG^' );

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
