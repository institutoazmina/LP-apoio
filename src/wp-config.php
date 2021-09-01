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
define( 'DB_NAME', 'instituto_azmina' );

/** MySQL database username */
define( 'DB_USER', 'app' );

/** MySQL database password */
define( 'DB_PASSWORD', 'app' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'dxQoudT?V^r*fn5u{oRQ1e]s]aC+??4XX]-_(sa155 J>jwHj9ZKovFJHoCP+}DJ' );
define( 'SECURE_AUTH_KEY',  'PY8@|YXVLpcBy>qIbKcOQ:CNVFLJm`6mdF-K1Kqx3@IE{8aofP`hVI*9@Q5]+Pu@' );
define( 'LOGGED_IN_KEY',    'X$>$lC{0Ht=XhW;R^?NA%91Sj}%);hF}Iq{kI<f~[U3/G<zH<;|>3Y454ofsrrK{' );
define( 'NONCE_KEY',        '^ r*dG!STJk%*-56y1e>ZVW{J}bSss,)W1Pc1y4Cn1yJV6Uq8>X/k~{u=_t?Dso|' );
define( 'AUTH_SALT',        'F+@(Z!< /sF22ZE#r93W`#(eH]0hflC#}TPW-e.0TWP5o!Vfqs7IUX#J*1SKC~<C' );
define( 'SECURE_AUTH_SALT', '6wOozj2ie#{};nbG#s#SdpaW,vfo_E.dt|8|yNP/?6$^Sj^7853)DqXM~zPN,CTe' );
define( 'LOGGED_IN_SALT',   'T,QhyZbRSKM?5TjXv-Q(,O@9V%fCpdlgSbnwXDKMj+ Z)G8%3#Ga*;.*lGC`Cdt%' );
define( 'NONCE_SALT',       '/-u3D-!`dH#vo92x2 gUpn0m#hA?Gj5#:v08@>+{0i~zg;l:;G)WD])Qc-!nk0!f' );

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
