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
define('DB_NAME', 'wp_local');

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
define('AUTH_KEY',         '# 4=nnv:CfQ`enn_t<.>oDSs!zNJr|gZ/|(2#5vZs,(,{msJX<>3fV[e;=G,hDjs');
define('SECURE_AUTH_KEY',  '^Ze3U74R;E|);O`*u]@W:qk/0*0tzBr7b)=;g<HqOs5>!H#Yi5|Oh| oi_BJT:x!');
define('LOGGED_IN_KEY',    'yNLFsc4K&+Q&>6,zL7_?{!8<i;[iNt00*Kts;SX=E^G,KDS>X-U94%^oQ1FozVdf');
define('NONCE_KEY',        'u]:X;bSar_2MZ&u:|v}xH&lG2eCIYuYV1{qg=>^h07KFxj1P9F?l2O@y:/p{(e&C');
define('AUTH_SALT',        '(%+wj3?}Hx`*@lYU+Bt=T!KYxzK*t*l10y0~5TBYG|z:.XHBg3}A0};&!CWsaVvM');
define('SECURE_AUTH_SALT', 'yhX*/jvA;.L2[.={cSKUnloj.)Aiv(|Mz+oq|0%&Dg8hFEl~=SQ8W]-jS4<7F>W<');
define('LOGGED_IN_SALT',   ' S#),RScAn)8H*NOG2M!nMw#a)VC^]z#}d!z&B1H6FryK;?(np;MG_T6jfZBLTom');
define('NONCE_SALT',       'wzyyqe0jZa41~2L %#(s1#?fGxvhR` o7G.WQel6h@mP.iZU /oX{_OrZ,o]|oh)');

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
