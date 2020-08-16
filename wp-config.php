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
define( 'DB_NAME', 'wordpress_vue_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#s1PY(CY^TQ7^AcqgU9U+WJ9CRL:14*E:B)xOSI N8n/j|J~ZepiH7AUH*tm`j,0' );
define( 'SECURE_AUTH_KEY',  '1}+iBxWnVQ]S&3Sr1[5.b,/&u<;}Rh&jN1bi@;O3CMRI{1RW]8iaDeVBmkY=E|^N' );
define( 'LOGGED_IN_KEY',    'iel}eno|B}5{=;mP^P Xx|?m><e^ !f3j@7W:1$VVc-)AOYSzWzHM1/AX@+_E|+l' );
define( 'NONCE_KEY',        'Y|jde}(=&:z48G[]rWs89ed:HYe@p2Tn$D-pspguDwVD}$jf!GE6.natC(}-h*-8' );
define( 'AUTH_SALT',        '1y}jo+??twPq(RcD:CCp%j[Om]H`F*qmwK;MRdH-6xmm]12j|xO>Q0^$)7:?=:N`' );
define( 'SECURE_AUTH_SALT', '0kuIIgR[*iwwEF(z:G =.oe^v@h#|J<T*L9`w9Y1daqY~6/}y4ehk=xSHJXLH<e*' );
define( 'LOGGED_IN_SALT',   '`KRRZjXcZic?h6Jfc||.&^I09#(/z~Nl[H_U_`!4Dn#zTvy7!|ZiCl$(KN!ML`%v' );
define( 'NONCE_SALT',       '|Iqs>bS`ay]q``>3R#~io8%5tq V?G9&|7ubJl>;0wV?rbNNQ}/!H^%G)Et2V;V+' );

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
