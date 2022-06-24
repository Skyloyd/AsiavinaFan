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
define( 'DB_NAME', 'mrq' );

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
define( 'AUTH_KEY',         '1T{a*fJ,{U=YEZ1oqgcN9+m5#pemwt(Jv_nx<4/UY!dR3Ozu/VENrB8L>Sm=iw+o' );
define( 'SECURE_AUTH_KEY',  'G`/^q2{9^t3iyNLOet>`Z(v#tER6gV LDu`~KSiLWVW`a~{_#6h7hk3zI7ZRo>41' );
define( 'LOGGED_IN_KEY',    'c*~xi,5q{V!2t6$^5=N.E17=+DbQX_IFmnN<)%ogDQRM-c,C.w%66!9 w?8c+^|&' );
define( 'NONCE_KEY',        'x6kKbo=@pCw]X:ByQ:dK^1C#Q@e#& K,Kfs b:8T_=Swes[VOmfy_:]g-{)hz{gR' );
define( 'AUTH_SALT',        'p[#/CBIgRTk-8_vDT OKpxBt_?Kx-1]Cn!*MiH152dF!XzN#hX-0QwJ] }lJg4XJ' );
define( 'SECURE_AUTH_SALT', 'j=?A<}G=;u3z08=L~D).OjCFC@XK!?Rlt?K[vzC]=(I5=[N4T6=BX$pV](K-|6pC' );
define( 'LOGGED_IN_SALT',   '!K$s,}OreiAK5TI<V~w?[NuPPoHn{*C%cF/?2U.5.=>5/{1-y@f4Fpco-@Z}x<RB' );
define( 'NONCE_SALT',       '4E}VdEZ.YZIZh|oyWFO=<HS|>-Gek!eDc4-Kwq`b[/DA+YtB28;^Jjf-HJzY@O56' );

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
