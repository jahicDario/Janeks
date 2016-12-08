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
define('DB_NAME', 'janeks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'soSOMlgh@R?5}^AVycw#(`TOy[$1B_j;i-<hZprfU(&lIsneGM5bfGTz327!s %N');
define('SECURE_AUTH_KEY',  'zLE*blVA}f:pJhSB!az6}#~qN#XdLZ491(^eBQeBuz@T>j-@hA!LHWGq4k`p#>@#');
define('LOGGED_IN_KEY',    'k;u7~ 9=+ sO^,MD@h($Z)xZ.,!W}GW~*e7!m-O0L0N}90H/wQQyld1B1DM%F$=}');
define('NONCE_KEY',        'l/8}eyT[]o~kWNkT1u%@QTig=DuSc@EJXZQ;4MY@l^V}X_+_ > z*H1FtktYE4Uq');
define('AUTH_SALT',        'gOd)GEJUtL*+xZ<=^$lz`)E(hc@mWx)vs[Hs=)6qxD`ok?$4~XF#Y:,G1yyKY|cr');
define('SECURE_AUTH_SALT', 'EUzy@TR7P= ZU_T{]sX2^7g{c H>$Z.Q7wpMx6B(uf8[|nKz]g`n{J0beOTA?<g^');
define('LOGGED_IN_SALT',   'PTOvx=K{K^Mn`!_#)EDubjF0~?2SH/{=(K/ae^ucnL4?LoIj1^p+q~x#ho> f!;Y');
define('NONCE_SALT',       'oL;X,jkWb0,NADe;Ux.1wySwCfP7PhKLNcf`lzaRGjM$k^;Q;3K|S=s83VY|WB-8');

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
