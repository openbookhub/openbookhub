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
define( 'DB_NAME', 'openbookhub_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'oU:u`G,5 IT#<@af#YsD@b8-8~hv9gXumR;ijS!>tg;MU.i;JY5D@ WQ=VM} GSR' );
define( 'SECURE_AUTH_KEY',  'V5D(%F,DBsmtnHw-%7x,,B*MNOoxq8aS>!ey$#UsCmbQm8>zBc_H=|c5R?bNx_zf' );
define( 'LOGGED_IN_KEY',    'IN:vD)AcfYm=m)+Ww0%gH|byQPmhkbv>OcS*.{=VXE9n[AW@v%bVAh~}]x$cl4NY' );
define( 'NONCE_KEY',        'k]KpovR&+E$5QZ3?J>#9en$z1A^y61@yi-$Gz7vcD$~2^;~:-+w`k1cz~n&qRIn6' );
define( 'AUTH_SALT',        '0>B?ngvx-}|az{?);XX6Yz+BZHZY%v+7H!*;-Hu`NTfA;fHG$$]Qt?sax:]?g!QA' );
define( 'SECURE_AUTH_SALT', 'jKL7F@=S&fpH`H1Fj a7B||Q4o9n;;}cd0 )Qn>+7t}%$I4&4Z`L-iBFjOo<zjbP' );
define( 'LOGGED_IN_SALT',   'I,7e U{&x_8zL;KU+)w/K51;3yi9H]t+L%*11c8IV@$oolx{{st3b[kp)uok6Nm[' );
define( 'NONCE_SALT',       '{mh{ h~J{Dr<^.j%roaug*j>I;1+dY2MAD]]$y1v|)=vw.Q:q}`oW (Wao;2?(T:' );

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
