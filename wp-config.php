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
define( 'DB_NAME', 'testdb' );

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
define( 'AUTH_KEY',         'szhJw>$l}1riZ.[[tG~JpT&[5TnGZcJAQ4,$5HhF56(dNys_%c6ma%2NCe2~x#>6' );
define( 'SECURE_AUTH_KEY',  '72O~ QO)~Mfw#T!5%kK&yxVWNDEsL 0i#8OwCgpa7.H1)w|Gv!^!5k3N*RF}|yJQ' );
define( 'LOGGED_IN_KEY',    '=Da~H_/]ju-Qg]P1@yCr%~8)@Ji}|/0; ~D$0M){!DihF=?C-CA`yfb/1Djuz3,5' );
define( 'NONCE_KEY',        '1I7XufSbdby{@UrX:Nu,q#CV>,UZ@VwNkHQZSoroM=HJ`p;7hr)1fUcn8;U^{O+K' );
define( 'AUTH_SALT',        ':lVK0^8|CYrO<-fe[,Qj3CN,UP]TWKf{iC6c?R}~>~MRA #XzgI;oMCJGtDYWJ;S' );
define( 'SECURE_AUTH_SALT', ' 4StrvaDtr7Y!f ;@k%[RyrhVV)FmqY:${,A&1R,eCL2X&,[1abmb:VCy)FM!Zu:' );
define( 'LOGGED_IN_SALT',   'H3|yoN=M%H[@H-(w,7c.JF@qA&*4^1=)ylPQzeT;Vcd2#cG9c*_h@4:otoRfmFbW' );
define( 'NONCE_SALT',       'q, y;)7IUCv1AL20W>?}.{;0V,dnRNB_AKi4U.DSM95M1*!(y-L@`n!HLE1B%P9,' );

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
