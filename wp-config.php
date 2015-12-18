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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HL+S} :o+YjS/<;/o$-&0t<wU@=:+9&mc#w6 IIH|KQyX#cWT|KK,g$?eqZhKrsa');
define('SECURE_AUTH_KEY',  '[IN/*|xk<^PpkdNYQQ*J49jt4B`pZ1&Y]aPI-{H!ra$W+0[%S*CbbX(Gj7l:`]9p');
define('LOGGED_IN_KEY',    'bT2wDxT[7TRV[Z=D*OMEi+b,+c4B9P-pEPFhl]FE4>5TcRaTQ%U1SQDX*]NT&y*H');
define('NONCE_KEY',        '/uanuhs7o8o{>9IFQBL$ov!{kt.Q<?|8-wGPT3{q;qqZ+zD?v&HR@1_OS+0rT!aU');
define('AUTH_SALT',        '@A?VHbT-c|R-IOYXwSe+XaiZ;<Q2g8xzkWoG&dCf $bpU(G0-kPGDi/OS#!vc}=j');
define('SECURE_AUTH_SALT', 'd^5g)G-}IyVg3_Si: H+qfttV*:)dsg4&~)Q$!+<=N#(s_M^owNs4 ^e/Fyn=y+&');
define('LOGGED_IN_SALT',   '}`SjWI%/B(0OL^hg:3j&DlM#RC;*p@M4>VU20w+<qi^5!oU&H>|(d|I=dsw<ZNWA');
define('NONCE_SALT',       'B5y|`0Z?O<br%JP71VH4|;fA S47nQaK~Q%]fCMUdN`w-?QBpFU0q?&{kL?HZ)C-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
