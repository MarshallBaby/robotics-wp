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

define( 'DB_NAME', 'robotics' );

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
define( 'AUTH_KEY',         'F86tk&bB=mHk2c]o~n@a-pHDCcUYzA=j./<MD6Tpmr!^0}HR?P:4mEQaM-4A;[&.' );
define( 'SECURE_AUTH_KEY',  'rLdhKxRX.K3>pV+VxrZhW.!ZYS>bAV5OEW,A;ZWHdOrr>jd3]KTYc&fDb@5q{daR' );
define( 'LOGGED_IN_KEY',    'la1`uN?=$5Hg?YOPhSHQH;;rEd(-o`hAr<j0|<sAV`I=|Gfm3&Bf5.<:x@Yj?F}z' );
define( 'NONCE_KEY',        '^&3f&>6(Ro2`%R@/6e0ZtZo}9R1DMIJ&eA81?9q$h(!OSl>sj@n/E,EKy^sPGQ2d' );
define( 'AUTH_SALT',        'X~w-UYD]Vk`B6G&CVw}Q<ORi^~3)VD{?|KJ{]-^+anU%kNSi*s5.Hn)gCYd[.^~o' );
define( 'SECURE_AUTH_SALT', ' Y-3c/#_LzmFXV<^(N^d2(~3.0%f0Uso2Qw$5L.qX7WIQ@,xWpw$IckqE-wAhDKe' );
define( 'LOGGED_IN_SALT',   'x.F=i(&Vfo{GrLdS9,{:D|ppU:>5rz)~o&jnD($[#Tp5F#(WDM4>0dFW<Tm@@U@X' );
define( 'NONCE_SALT',       '$P)T:iZXqXi6i)v2YxJLsyJRlL$FJ:{rL&d>z_*9ECtYRShxdHSISal<PUuRH5s)' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

