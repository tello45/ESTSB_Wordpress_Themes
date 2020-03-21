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
define( 'DB_NAME', 'estschool' );

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
define( 'AUTH_KEY',         ',Y-:@uW3;!UTAlm)02 mq+}!LdEmoGt25D7bjuk&@0n|w=fY[qCZaYaO,Ga {l];' );
define( 'SECURE_AUTH_KEY',  '{?y7lc=Xt7O`i|.kz11dTC9^Vc3{!HZB)c56p[I l]}F^q]HO] 4+Ib75m2>1TVd' );
define( 'LOGGED_IN_KEY',    '__>HyVU:2NY#N6>E,G1|ErIo:CA0p6lX((wvHbxI_BkBtR b&sAm*y}F5{d>&,Se' );
define( 'NONCE_KEY',        '4Adt0}M.>Bg1U,6<p8oXZTU<=_{K@3MxP]Q4_6{Ye_4[)..N#]h7H*upC=|c2iQU' );
define( 'AUTH_SALT',        'dOW8_CZvglt=5_KlwQKfm-2rJjU(-t3$IR~e4Yx^2aR~*kD-JeX/`Bt4o^?3EceA' );
define( 'SECURE_AUTH_SALT', 'C.bjf2(G;R;E m@B}p.My}DvFLu;UsOUilJRi9QjWQ7%WH9%Q[c>A@xiiRBzxz`~' );
define( 'LOGGED_IN_SALT',   'A@uj-d$J>;^B9G;,hDsGd`>UQk_*7 E0oAt. mOX3%::|=|,`z^wm:M&Uc/+lR.^' );
define( 'NONCE_SALT',       'ZbOYd88ebr<_D_)A2k$]#Wu SP3}X{5nDe8H kB!FBjsy|JI-1w;Ey-DK1cp9l&G' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
