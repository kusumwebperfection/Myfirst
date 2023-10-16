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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Kf::q.Wol&2G)8-N&?!6ASc5?}VTC.fj(.@Ly}9~mDsnrN3UIPqs{boVd{*DOS=a' );
define( 'SECURE_AUTH_KEY',  'i~dX_nsQ?W7zy)B6R5Y;%`2M|fcLK+S60RaPz=G:4!3mgt<~DVvm$v]-uI;>$*[z' );
define( 'LOGGED_IN_KEY',    '-Ft02:B4d~c^_KbbSKo!&|~4(Da+fjJaH6h)6xB;#T<Oo^Stfk;u^wu#:sE6v[v1' );
define( 'NONCE_KEY',        'P`Ytp-waSv_g]T4G_JKcWD&=>Coj_abWg,<uLC8sU`MR+CH!wyi]+^H5{s%9O`%z' );
define( 'AUTH_SALT',        'Fm^ve&;OE+:e=XId IR1`}#]xt=3O_)5pCh)-itM@9&x`#YhF[&x3bPH@]Ln}9 8' );
define( 'SECURE_AUTH_SALT', 'JmGu)PAp#|(F:};N{MJ;:/$i@: r9y>Y,:l4f@rn`$S`X &cP5d)DEw7:L!IRu{Y' );
define( 'LOGGED_IN_SALT',   ' =ci>cs.kel/e~?&`@2btaY0*C,f1W9~iVQD>1 pK,Y<ozB@<zM0V>@)+UIsOMeT' );
define( 'NONCE_SALT',       '6B(3gea,Wc|<;$J7@1+FJJr}7lj_rU]ME.8J`N-/ac=Fgu7:MuV70D3iW@!O>|yX' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME','http://localhost/wordpres');
define('WP_SITEURL','http://localhost/wordpres');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
