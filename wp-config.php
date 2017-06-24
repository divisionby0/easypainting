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
define('DB_NAME', 'easypainting');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kljh76RRenJh7');

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
define('AUTH_KEY',         '5&_iHUxtn|d#$#EJ!?1#*8PtOfXfpS>LiwIi>.8Q?LDCN1mjNAe/8;?V}fL(9reO');
define('SECURE_AUTH_KEY',  '>v<IjL6JFMy}|tZ_^pD}[JS,P!Zv}mFgM!xGHf$1w^zj!T$fb)f<5S(sQEU)>/F1');
define('LOGGED_IN_KEY',    '[&?W1]RVR0~Czz{Lr-*haU+ZZvpssIHgGt1C~/r<vB];onp VW806oe_zvuvPMz,');
define('NONCE_KEY',        '%Jh)U,HlOM5O:h+6; yY!}Urt.0*TCrH@}kS=~cN9gm[XN>(`g>3|n+ {W<M@`wW');
define('AUTH_SALT',        'xs$2/|t*-(?faRPT? CA8B)/qrx[d3Y4$WwDQZ{E3y8gAH^6-YE$,ZgxyJD^|il-');
define('SECURE_AUTH_SALT', '[kiNt#NHC.M A:,,h1S;?Um=_;!Tm6gY;3 lOF2F}-!b>0-O[Hz-p::2@p,Sn1kR');
define('LOGGED_IN_SALT',   '|Z($u|P<^1:!:lX*=7!)S}-d.;>TROL{T:iZVTH)#8aXUQ7GqWZX;2wz;k?Oyf@*');
define('NONCE_SALT',       'jb6o5EcaV}5j-aZ;S=$al[^9O)zoxe]m>^sC;0} p>q~>2N!mA-6./;!UaavQ@#e');

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
