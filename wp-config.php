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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bradycapital' );

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
define( 'AUTH_KEY',         'yv*`a#ACb`6& c<[1=no)>W>!+NX+forf.nL!|lvPD{C|IJAEf.S3y1UbMa8)S(M' );
define( 'SECURE_AUTH_KEY',  'oeuAcCKt:ONaoxws5V9AI)V`ht*o$!<<w8>*/-mcWwc)CQ;uT<<Ny9GLen*{wA{F' );
define( 'LOGGED_IN_KEY',    'UdlDhneP6u!(f8YXFrfILofhQ&,{rFn: N%2ba,~;;g^<-7p2()xLoqR=W0S,Kdc' );
define( 'NONCE_KEY',        'mKq0-Ny-62J9uC-DJ~h_Xq?kDk2 J/}0Cxv@Y~/WWzWQ6Gn@3FM)2$#TS@_u=Q+a' );
define( 'AUTH_SALT',        'vr}^hygsG,lPkx^<aV058[,4q?B/BU#GWPU(mbnV3G!VACgiY`a{z=s8Ze3_9z%-' );
define( 'SECURE_AUTH_SALT', '{?e3C.ZP_SmO:@tk?BIAXt/Pj,#$yb_}[Hm+3L)L/Qj.(zHkx9s}Jso8H8?5bs:e' );
define( 'LOGGED_IN_SALT',   '3-xN*+otevX`Yg7PItJF)H}WrLb5:J~pMhwI_jwD.U^<z;X_^IA%J[z>?UY095c/' );
define( 'NONCE_SALT',       'RD/o81HLS8&wN8&k#N:9:dN[>/eedQ!TQKkmG#tm]=a:{C]WnQ@rW*ErB*!;,bHC' );

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
define('FS_METHOD', 'direct');
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


// sending mails

define( 'SMTP_USER', 'theartisiamsmart@gmail.com' );
define( 'SMTP_PASS', 'yqxpbskuoprpsezg' );
define( 'SMTP_HOST', 'smtp.gmail.com' );
define( 'SMTP_FROM', 'theartisiamsmart@gmail.com' );
define( 'SMTP_NAME', 'Brady Capital Advisors' );
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_AUTH', true );
