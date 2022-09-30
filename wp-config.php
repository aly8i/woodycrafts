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
define( 'DB_NAME', 'way2go' );

/** Database username */
define( 'DB_USER', 'way2goadmin' );

/** Database password */
define( 'DB_PASSWORD', 'adminway2go' );

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
define( 'AUTH_KEY',         'h5SWQ(,#Aod1jr37x.eACy(._X~eyZ]h+#2FxBI$$E+GXnYC3gHg]F`_Eo<NPGks' );
define( 'SECURE_AUTH_KEY',  'tD!6MYg>!4e_dt7cGtF:zl>^uAj$uB%(;59.<g fF #4=q~x{$ 4F#(lQu?Zy;BI' );
define( 'LOGGED_IN_KEY',    '#IwIRh*24ol=&uiFeQ.<_sk,N+A_{yw>2M8H~}NC//&xFKkZrlZ*W{Dgzxn9GQnn' );
define( 'NONCE_KEY',        'I8[%4CpREOYPouT$q#4HX8R?B|}<f<4(F-8O`?:i&6a]yGA3IV D{{G3Kdjob^*~' );
define( 'AUTH_SALT',        '0AZGhp9axb1eMefj3kY,=P;rUlw,kpCfY!JSu@g>]X7*:rdh#wH-5xi7/64yc,i]' );
define( 'SECURE_AUTH_SALT', '`3 dgK)XR)Xqk^L4&b{Xm^}@aLpUn[7zbS},.M2HR EeM2{BH+Mq^u,_jE7?x%IN' );
define( 'LOGGED_IN_SALT',   'LS%OY^|A]U*,c07bs5~Z6D]-QyNL!-4L/?``>CoDMn5)tmyzN,(YE~V`]h9}QXGh' );
define( 'NONCE_SALT',       '7v#@YdPkm+vI$0P}6(2,WHWY3za7_es$k5F-{E6Ifn8$Lj|MDp_s63A3eVO?DX}V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w2g_';

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
