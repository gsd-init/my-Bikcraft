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
define( 'DB_NAME', 'db_bikcraft' );

/** MySQL database username */
define( 'DB_USER', 'bikcraft_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '1^,4A)=~7D2>xh8B UC=#,D4}I3(P6{ILoDo0z5`u zVl4)Qdy%fliH6i0uqT`pO' );
define( 'SECURE_AUTH_KEY',  '6(8 -Qq;tL}RX]qt5sNM[}82*6-Rde^,aRs![xI`_6Jhb)AxX9d/p]~!i}ev5`=|' );
define( 'LOGGED_IN_KEY',    '~|x4`XU]&rq5Q%(!mEleAu4?]YW5S0IO_INYFW9^`80NCV>m$re!o5nlv8n-o?26' );
define( 'NONCE_KEY',        'gL7Q+0$}XtLEv|3U_a(2_Hf~}+x1:GcJ>gD{@p4)(E9gw8Y/.C/ Uf8[v(~/g<KE' );
define( 'AUTH_SALT',        'Tb!${*Lu@D>qer)$Iog}mMmrpu_RXX.23s:;O$By)`_1+{]cx/J4,>Re:,X&lj!1' );
define( 'SECURE_AUTH_SALT', '0_+#d`6?G}pVpaTDm|^Xh{Kt,qOw^p0^0);{-qy*d|^?t/X*RN|=wI~2bjl`Kf+N' );
define( 'LOGGED_IN_SALT',   'Z?Xh+JZrl>u,~_,n[/np%ZkpvV4*wION:hl6{l)fOMDcKDQG4~M=C>C>RLiI~.KC' );
define( 'NONCE_SALT',       '=f?o;Z9aM~LgrT837<veegK$qvk]}tj%f(Cr{N;sp2MMGK$Vw4RV@X/Q=UZh8v08' );

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
