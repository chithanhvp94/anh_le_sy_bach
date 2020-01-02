<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ladystars_v_34fb');

/** MySQL database username */
define('DB_USER', 'ladystarsv34fb');

/** MySQL database password */
define('DB_PASSWORD', 'f2d9822a6b6f2445');

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
define('AUTH_KEY',         '4~ 3O37dBG99s^,nm2uYs+n*?O,uyzPXwL[}4&iRv{22[R~*+V*&+TU%E {|ZUL%');
define('SECURE_AUTH_KEY',  'ws.#d,.1+~bNg}EH>c.`}Zz4RwkC;3_BaRvN1V{KZFI(M?0Eyj|DhzT1dxG*>nm ');
define('LOGGED_IN_KEY',    '|XRN]3mv>Vhhz4XjzQW[XNd01m- B->r(uP}3TsaTyqOVSWQ]SFC=1#wj.PKUVPg');
define('NONCE_KEY',        'VjuSi[[ Wz5>`A4`48l#2Tn&g.IRhPj,RGodbl]kJdiZx~cE;GS^*}.igIlI(<HD');
define('AUTH_SALT',        '(Hb9EJsP)0&u1tNjFGNYEMz hc;Q(c)k70h?5GK,642;N.!^:W*kI>1Br]SDFyRR');
define('SECURE_AUTH_SALT', 'XjLK]:[|Q>}s@QDVL5Bj|sY>TK ^/&myP<`&7B!0ONOOM,#5~Yr!$;}P7Y,Mw(|&');
define('LOGGED_IN_SALT',   'vqxa)c59I9-;W?C^(Q-NEZ*y)?.NJ0]tWOvd:AROZVpv1TEO(:DrYT2y_cXw 5*#');
define('NONCE_SALT',       's 4E;r[<6sHScH%-`2RQiST3=tEDAYZW$dGRxg#9lX@. jQ{~O@)r7w_>kcWbpCq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'luxyhair_';

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
define('SAVEQUERIES', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

