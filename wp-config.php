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
define( 'DB_NAME', 'wordpress_portfolio_db' );

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
define( 'AUTH_KEY',         'zIm11!`?/ZBNYYgHZPavwm>CCXyBhQwCXcz~)!NX/fJu5*%6NGEeR!?1_;O;!xCG' );
define( 'SECURE_AUTH_KEY',  'a~7gP%pLMjbrRnx6t8xmy3>)tU#>PUH$:HT$5r;H|=C^[Qrf!;z(IBS.zzMx*|:Q' );
define( 'LOGGED_IN_KEY',    '2C#G;c.NtuD=)Z]8[WC g![]h]z+A(@sq4)f-S}-XeIJdkLieT=D`R6KUNu_q<Z*' );
define( 'NONCE_KEY',        ':Dk-$ r]g(HaX1@~D/}rTcx@*.m?R1ufP8m.yY+b(T*0v3i&jGto-nO-w(DXHVwP' );
define( 'AUTH_SALT',        'g5_qbF1]3}Hp)%K.jF3h]IaM_0X*jJH;YM9&h@T*<~Bs$6E|K?YXfi?s^%ON& xs' );
define( 'SECURE_AUTH_SALT', '(f&lS>M}5h$^&eVJ/VI8,G}x+4Bdu8D.cCeg@t[Lc6zJ8ZUY20$dbapu/#FU:5)3' );
define( 'LOGGED_IN_SALT',   ')[]sbMi[cDRwmEY/:lH7g.+79h[3AP/<juvFcZ%G16L+9w(}fO)(bZw3~!yi9x^ ' );
define( 'NONCE_SALT',       '_!8<VhvWpAlg1(X0s&JA2-y/A=}vWc,RHT2O@yL5$%UpNG]+$:xy+)8d`izgeaAo' );

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
