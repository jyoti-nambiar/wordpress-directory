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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


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
define('AUTH_KEY',         'KUx].T%[>wB^2Lcnk+hXN<v16j;SUbN~:G%1VT.!LN?8^$T>x6Mt=#h!4=[*J&a?');
define('SECURE_AUTH_KEY',  'M]*_)fN|Kh;-!(iSRaH?wHS>[^p?3+wDbq)JBk(f5x;wCN69DowaE!tQ&,fm_}9P');
define('LOGGED_IN_KEY',    'M!uNT<_yom}tVC1qYl=a*8;TZ30;+z2<0-u#WwBcQm8pHxEIg~}^]-WLzJv@_H y');
define('NONCE_KEY',        'jgFIJ;oFRgXff#kEtfFY<`hC Edc&hGZaj=Ds%l9Qijw?|8^59I;]Dzl!K]vtV^=');
define('AUTH_SALT',        ';!CWKdfIgKSd1LLEy9-ERRA0Ny6R13i~FQy6ug?Tfp%Hvt.}ubW16hH;Lz )vxzb');
define('SECURE_AUTH_SALT', '~1@vmoU0+rXdFEW7+yTp58O:1<J5:t)sk@}y#N A5b&r4)kiKF`|UjA6@3V< TvC');
define('LOGGED_IN_SALT',   'KBei]Mz}%6;+d5 /ZwH[~uL24kWN)HN$Qr9XZ|Qx$Ik>fpTTcBO~-[WWgl-]J[H8');
define('NONCE_SALT',       'G+gWW]:P-2Cgk}vC[Q78]8u!E=Sm+Pt^+anaa]Zoe2-BXmd7gE}u!u@[n{gb*|:~');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
