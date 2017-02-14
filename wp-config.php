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
define('DB_NAME', 'noahkarvelis');

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
define('AUTH_KEY',         'Xh}CGm#HJ>K0!.AP0e#eP/U>(XnlQ*x~>z+{mh~_IlBLVIB :oO-3usNjon25`0/');
define('SECURE_AUTH_KEY',  'XIFO@SVl8nop!~Jkx&U.z1 =[*#H}K%aJO&yuL!AJ9wx+>.b^Up[IeY]X.k&<jmI');
define('LOGGED_IN_KEY',    'C#0HS06)e%u8SIuq}85kW>2wS;U^BxTBT+GZswXZ^ZW<%8tZhckCM]jH.=j zM[A');
define('NONCE_KEY',        '>>%qCHj|0w`x90bI~C`;gm+^tAmC]4uHP!E0ZiB!=mfEch_.j{(*/&G(mwE:-(@D');
define('AUTH_SALT',        'Nb4Ab5al >k1u+uE^kf6% IFG(@:7(*NFL@0*#KTRv6/:RtC-sqAC;4rA-r=RjWA');
define('SECURE_AUTH_SALT', 'gn$23/f6[2W?1by)a?0e@p}xY@{Hn/.[McZa<Eijt[z4Q.fO>HxGgh#uj*(fA1/q');
define('LOGGED_IN_SALT',   '.6u:a%9)4g)izM%_m>]}eaFQ@<ZG2_EqlklZ^1=$LN5w;igUTuW@j?MhI9)%*BmV');
define('NONCE_SALT',       'D,RMq/Ss}5y2g.MuFbXF#1E1.>m7#B>(}9hY0>7hlwo-VD7$HLD%4_RKCtwF#qn*');

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
