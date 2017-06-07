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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '9H,#3Z8wYTb+8dlcV3RhMLO95V|z/sBBw8sxQVO3ARV&W4Eos{@GtxoaN;ZDpe:7');
define('SECURE_AUTH_KEY',  'p=;Cb!9)zbj+|gh-s%b:hJ|i8Y0?@N]m1Czz=`ewk,L{pjGY,5cvh[iT[x=O<st9');
define('LOGGED_IN_KEY',    'IG5M{1y3$Ta&8jL/qzmQUglg!/h1nA)Alw2qF.dG!URc|4P -lh,wAOjBKJzDtji');
define('NONCE_KEY',        'd7n8!OHA|<dS4cJe(m4}_&7N,|@(epoD1gXH3nB:M:yDU@=%=c3alhaI^8D!P~;3');
define('AUTH_SALT',        'rj [dX*>}?#KG./7L@&?0qCQ:X6K`F|_@!xm(T-qV;ayckfI3(m`E{X-X,(sdlb:');
define('SECURE_AUTH_SALT', ']O^QE){MDRo>}2^`mqX;@aID$C(V2miDmOVe^^e99#44{LCo7UK (,E<_~BSf a ');
define('LOGGED_IN_SALT',   'J)|SFga~/Sa;ozAnK3y{q08@;OFLDJ}$cv=kDVGL qA37RtG>LeHH}`QNC^t8Z!!');
define('NONCE_SALT',       '+56v+Z(=&A@1xN({0igIZX8BRpcG^}Hv3-T{#95Vkp}&K=uzzRzFEI^(qv`6rmpD');

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

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
