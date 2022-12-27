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
define( 'DB_NAME', 'nafis' );

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
define( 'AUTH_KEY',         '[%|Jk%;^r{lG6MwW)E!g=z[HcX4{Aoz;]xm[L{|)d|yD2oQOq,CI=R8+m^-h)qa{' );
define( 'SECURE_AUTH_KEY',  'G])Y([^GoKBWI*i2Ejp-]IK))`;<<{ZWqI]J1&@B@X(XW+_d39=h#YW?+e^^he_i' );
define( 'LOGGED_IN_KEY',    ':p!%to Z|I~f5/eUAn@EH_{mUs*S&i#P:dd*;_kW>yM7`#W$K,N/^unavf&V!XI@' );
define( 'NONCE_KEY',        '#8~qVbfT:kVUsSg;FHxY^zGaP1x4s{n+h#&/iuYjdQ7j3?L ??wG3hM2g~uxG|+F' );
define( 'AUTH_SALT',        'fw/[5trHJI#b/{ >fgR_AlZ+7`HB@}^]fYHV$fk~;)pH3/jpsnrm@D;NZT}y}4%Y' );
define( 'SECURE_AUTH_SALT', 'Je:Hz}W@MGStBr}0f}&_Q!1IOErP7P~h)-!1K<+}ehZL]`PC90MWuY-ZhuuLuFZc' );
define( 'LOGGED_IN_SALT',   'I (bLw.qWU?S5d!~MB=&aw,XfU+xQP:E]KksK/)k|-,$9L l{.Vf< eC4wMUg+?J' );
define( 'NONCE_SALT',       '5qhR!~VSi/A/I3D8a3? SrK}3Oq+nSF)_A|2IX-JTc=T.s{i6dO+I0/s,bP1o 7B' );

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
