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
define( 'DB_NAME', 'degital-agency' );

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
define( 'AUTH_KEY',         ']C_R9E{1(/j3WtgtO6KD4166W&81-OWGM::AoXs$Xr!5.6X,yJh!{s*gCfhK$>o}' );
define( 'SECURE_AUTH_KEY',  '@;WP1$`Z8M0WxRj<J`[J|#PzF=5GjP1-#1 ,Ty]F&e0L_,I?)sEj0tJhl^YVv! E' );
define( 'LOGGED_IN_KEY',    'SFcY4C59r>Qu-lld&DoD+cJ0(Ql=N$d5MX[k2U;%<C54PC/4xXQ,]_q}HPT3G5*0' );
define( 'NONCE_KEY',        ',;Z4+Z[I+]T]*DM}&&me9f0X0lj-%3ayEXDK%P-pt&~Mp~EffS|O&7V^~O0}!UzK' );
define( 'AUTH_SALT',        '$s05yOfv(jP7Hy$JdfSj,Yk;X<)__ QSY`h[b.[9$sbHV!BL/%ta4amJLMB*]HSx' );
define( 'SECURE_AUTH_SALT', '|f!PDVUO~JWR(.dB[p s3-CI(WFtEUR[IjCV)tiz6fkaslofZSTQV~_/[hoR/6h_' );
define( 'LOGGED_IN_SALT',   'Ax_:(3~h[FbA6NE$JxSxj8B<QjuI7>*Zn0PQo;?]Q,7+,fYl.<6~i!hwf5o$@hV}' );
define( 'NONCE_SALT',       'yIU?v,-sYn.0sL/us&!F/B}zM_S3x8,NaRJ>[rN2gq#3(#S;V1;]Dzm4c3D=rrsX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
