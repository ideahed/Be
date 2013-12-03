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
 
define('WP_HOME', 'http://nj.id2.thommeredith.com'); // no trailing slash
define('WP_SITEURL',WP_HOME);  // no trailing slash
 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db77152_nj');

/** MySQL database username */
define('DB_USER', 'db77152_nj');

/** MySQL database password */
define('DB_PASSWORD', 'artcenter');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s77152.gridserver.com');

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
define('AUTH_KEY',         'n}*gnb)u2-1Hnau?%-#RAC]{(qSa{2uu3#t|O^?,y0,h0WqQg2])OvItke$c?gEz');
define('SECURE_AUTH_KEY',  'FA;_mh:tM>-,J#Qo+{+|I<i;]-H~g>fbpkFLt:At;KO~FY|e1aPRxIXWx>#j+mf$');
define('LOGGED_IN_KEY',    '5#0f lOW^U-}}#S;pW<sv+4No-t}y@{%756e1ev*-)B.(-}R?k5ym#jl5kZhXPbE');
define('NONCE_KEY',        'f$:EeI[6uyi9f;Gf!G:j?B_DFNwToy)%c &-U9BFs8|KYxZBRY:m[9c3J92N-ugs');
define('AUTH_SALT',        't+cKj2)i|-t|F02m=O}-abE*A*yNa!eOPj|+?Dd[jHEw|S1}&KgszgIkqq>hwWTe');
define('SECURE_AUTH_SALT', '!B~O{3%5d78-.Wk%VdV[AmT6Ju_Q-sVa-+1y2x[>[%$^@C=nG|%V|p|DCCFG!BsJ');
define('LOGGED_IN_SALT',   'DIUASqh1gt;Z|`myx xMD$D+;$jY8pIGYRcJ*RM|){Vs.=Zn^S5@o+^8[d^rGy#{');
define('NONCE_SALT',       '-J(<DdPXH.wY;maV^d&`h!={|2W)0Irl+X[JLQP`K{G+_xPD#`R>]m-H*qS+SN~-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'be_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
