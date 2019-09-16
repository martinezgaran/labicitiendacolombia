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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbwebdos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JM9f{8%o#[b7HOLw8hD>XP%s62VnSteEyC|YOwFo#:y648]ocvCh&/~gQD1jWCPU' );
define( 'SECURE_AUTH_KEY',  'x$g^0/$JxjxRk/0xQzxlL6`GB}i#?nY!.&kb?-W?7y9gW4;nbJA:5]-JS],Is+Cl' );
define( 'LOGGED_IN_KEY',    'cm#W`9jBZh)RXFY`o7[cr^:hnDq.<t0H:50+ZZ%WR3D^~,b+QB2FfcsYtbwy)LR`' );
define( 'NONCE_KEY',        '] {/I@4c5l1_}NyQHS0 %:79kdgSUkiFVkZCu/eQpRK8@HkS8lE#%^X:DIOQ>vMp' );
define( 'AUTH_SALT',        'I_)TdMQ`!F3`(0Mpl;rX`ec/.agRSl6V#;h|~8dHsflWc_HJisOlApJu6fg/{g94' );
define( 'SECURE_AUTH_SALT', 'BMq}d08@IFWt NKUC!Ba+,:!N}|MMRGbe`9!c7*hcu%YNf4 }vxA0U!0xH]lm[Wb' );
define( 'LOGGED_IN_SALT',   'xuNVJ;OZMxx0dWK=BRC.~3V>!w!:kCC1uJ875zE-k#W#OV#$u}X&IEM kE%V:2DM' );
define( 'NONCE_SALT',       '](0b4gEPr1JD!VRaJpc4n$*q8b(7i-;6oK,+NNXTw]F~oxG`[R81VI[5[p:*d8Cb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
