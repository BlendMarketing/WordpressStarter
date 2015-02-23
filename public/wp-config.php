<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'a%nTkf|rVB2VM@/*052qsSFylj@>XI8N_dtM.T%#4J[yy4VMi1f%F%Y@9p~QF)@f');
define('SECURE_AUTH_KEY',  'F)q2al{I!!W-0&p,AL*gO>A-F;9,2HfZc:8qPgRa3xEm8HH-!+k41A5fbtlIh[O+');
define('LOGGED_IN_KEY',    '|M~Xmgv&]rVCBP}VW!cVzKHL|xx<v|*aM3^JR[b_u{[wL38dY|W|Z?fwA{i?7P{=');
define('NONCE_KEY',        'Hv5i^ eByTPK~k%rC--+!xu_lJ[b}=Q^l#;*B>r7+j{T:%Ht]ABd1gP:M|#Yh-H_');
define('AUTH_SALT',        'RQ9ly?B2rq&`8|Jdc2}1om}+[m_=~^>Ta+w5-bDL+8cnrBjT_u]l!-c9aOVQoG0S');
define('SECURE_AUTH_SALT', 'BSRH<x&IsX7h5e =7mB^r,Ejv!y$3lh}pd>6h8E6i4`4C~]D9Wa,u0M+=@}>/GFd');
define('LOGGED_IN_SALT',   'J5U?DSA+4)gD>0[ K2fSrKCGJ$Pj|>Uv~i>T qq$8KFgYBgY1<T8x/u>m?rU_sa~');
define('NONCE_SALT',       ';$z@`z+v5Z+3/8=rjfsXU-lhX8`grq-U7gSVZnq9;^doI$Rd8&n.>B$/aB*(Z5y_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
