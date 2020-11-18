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
define( 'DB_NAME', 'rdangoy' );

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
define( 'AUTH_KEY',         'frX|]zB.Q=j}@O~Es2-arz^!{N;Ri.5~8;n:H.:Cf]t&i:]z3yGH{-7MVxPmv%PZ' );
define( 'SECURE_AUTH_KEY',  '1d6|KdR~yX8Rf^em0I)i_K%V>z?Y5e;MK79vP&DrCp58w^UqB6)##m|m20^FeH83' );
define( 'LOGGED_IN_KEY',    'D/<U$9oE2eK0fqvy1Ok{E9F]kTa}5rjl7tG9)XJ0&`$Jns:o]k9Qo>e10VBikMy}' );
define( 'NONCE_KEY',        '>bRh`!G#r;4x)z6pz|TvAqI`WGaN=H+5/5HEY.vQq%V``M$1K6,N`t{zDEW;!%n:' );
define( 'AUTH_SALT',        '&M9|:i&kz)gEu%6,%=W$n#Qr7h(;OUrZFwzJLn#()>pNY;k+&Tnem$!k&-iN(SL=' );
define( 'SECURE_AUTH_SALT', 'red?gt%6lRY/W}%mW$]v!`<IE0Ya&-<3qnTY V^3!ndWa5~GI</qGoDyLws%4}3U' );
define( 'LOGGED_IN_SALT',   '7eCp>9hA#KN&&QFS(zqp5 P*f?-ANts~nD v0kk_rG4ISeQ 8Q>?`]wq8In-o)T>' );
define( 'NONCE_SALT',       'KX9,;0wnTv1Tlq>Wii51FR=EQD@+X7+2&Z)5i}4wrxI!J8?pegD=Xr>i,6y^<Dz3' );

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
