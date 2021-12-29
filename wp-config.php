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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '^.2]AC07T9eMcA%M-~N$@!/AQ288G]B28,g?b|IKA>adtp3@XXb7Gv;nAcMl[uh#' );
define( 'SECURE_AUTH_KEY',  'J@QD%GZ-p93S<Uip 8Yj(T-a%?3,MO](G`SsDOn>_hKzk:44/dif#C=&Tg[=.(59' );
define( 'LOGGED_IN_KEY',    'LlvZ@{AQ5:I<^ nWR)ti3X0[_O/8pLG*t`FOhS^FCdC6$3qXR{??J{0`A8!Rt^Zl' );
define( 'NONCE_KEY',        'U<vbuF$A~yh#]QH?3::QhhniL+Z_Ag4nfS/5aMtceP.cn)^ W=stpD@-k5Ri()[N' );
define( 'AUTH_SALT',        'Fz&iXwni1SCw*Ut;FZ;AM*gDo)_;?R3G0LiCKMY3T_UwRRHgI{n*ZMwCcz&n#jhn' );
define( 'SECURE_AUTH_SALT', 'ZZ(]`]O-V*Z#?OVVxNDl!h))Z.XP^9m}A.`wK9P;pim1cj? {&@]%UrlqiERi(a~' );
define( 'LOGGED_IN_SALT',   '#xg$&1zsi!Y]la8%enWI[o!7y=U(hFp*XO|U`Zcc.HgZ[uD#7w-]=-Y.IivA:|<M' );
define( 'NONCE_SALT',       'SAjvfrF{F9@|Ii9,2bkk) ca1##wT~EN](D&==I{8h1C3nh&F3;6ZHH0{C-_{3ji' );

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
