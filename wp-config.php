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
define( 'DB_NAME', 'robata' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SRnJ04NcPbna2SlJsciu' );

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
define( 'AUTH_KEY',         '|tHQ._Fi&p$*8gvdKh8vg7WJxIKjL_Q}W0aIQ([*Y!SRzPm8^gu!5pA_=Ie<ny&F' );
define( 'SECURE_AUTH_KEY',  'XyzcB6>yH OukG,5M)aHMelI=Qi<qmjh?K+k1fDqCK6VY{Mz<]N<8:6kW$4t@gjY' );
define( 'LOGGED_IN_KEY',    '#V )g?GRlwrV}uUEEKf);]}q+~IBx/u|GR+7Buv<K<s&ok>BHI[>{uFW`J^g1}zV' );
define( 'NONCE_KEY',        'Vjvx3_#{wHG^_dBx^EI]<11i_$`+v5Gl6d~VVtB, u;~|a{vR=m,L`j:@xqH2}IO' );
define( 'AUTH_SALT',        'cDh2ETp|kNwRFyPM^~-)c)l.| /uOMnlEzyP,dxJ/m01o+^Y@?2z%gD|s(Xz>pC,' );
define( 'SECURE_AUTH_SALT', 'wlykTxz>Yn/#$WTHc2p>is uI& n#K?Ir&6 wbbQB,ikVmr)i%%dpg+d?+N)HAUW' );
define( 'LOGGED_IN_SALT',   '8Z#(/KS_>4t,m2:IDfM&N6[7X3QnWh<J4cY+Nk.J{hutbDdU0]qCl?=3w6N<8tHG' );
define( 'NONCE_SALT',       '>~N))7W2E8NI0B; 1HX=Et~pk?{XWiapq$[5).wgau0z:b*R3!qletmYGW@@Wt=;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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
