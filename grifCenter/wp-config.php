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
define( 'DB_NAME', 'grif' );

define( 'FS_METHOD', 'direct' );
/** Database username */
define( 'DB_USER', 'imad' );

/** Database password */
define( 'DB_PASSWORD', 'halimabouroud4316' );

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
define( 'AUTH_KEY',         '%PHn$_%@(j2A~->F&AQGhHFHd?8I@{q9%ysL!E1Z*=]#;*!KcC[]]t6)w(Vz_([:' );
define( 'SECURE_AUTH_KEY',  '_]&+AY;JmBY.q5`EB-}+2MftiL2NE=XN20eloiF_L7a#jL.[AB%+$:^&r]R_=Gur' );
define( 'LOGGED_IN_KEY',    '/YvnH7=ahpWu|?^Swoe]a1l)4lVwyl),W%v;?+<%mw P=~Vdf;p`+7owYf%=Vz%1' );
define( 'NONCE_KEY',        ';YFK2dUS$ya.kt_Lu|;Rsa[^Y)iKX[b7MR%=*(xW~f;-Tgk=DyK[L j%cbP^L$:3' );
define( 'AUTH_SALT',        'z]veoG,_p6V:RX8|wp>^M$KkhG^c2]q7us/aZ9<2(OZKJ[LV@p8HG+e0l2!wIu%r' );
define( 'SECURE_AUTH_SALT', 'XWgW_8vk-(`r:{kv&BfEg1Pm]g)u.S@/hJw??b&H+>u[h~2M`[.H9bxB0abYKvLt' );
define( 'LOGGED_IN_SALT',   'd:lUu2g*2dv+{8l(.sX<n&DP/!wVi,7;N? (ym-!_5WP`?*/(]=rR4A/cz{:C8tg' );
define( 'NONCE_SALT',       'C,MtSj;iKp2x8#V7,i.0Yut+bn@hm,kb|MOSsh.cgHv#z?y^L^)<L<)&c^{~FoI[' );

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
