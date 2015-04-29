<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_bootstrap');

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
define('AUTH_KEY',         '`+=V]MuNEEzI,Fq~Zo}w+yHd8P`RZ9W}I^y,y ue[KX~|#<~y;O++sT-]H>UV@v8');
define('SECURE_AUTH_KEY',  '.wJ!vkQ)ScSU+eJA{HtFp/y:G}=qep E,o6n<X3fV+bQVy4HS+Ex-qU[iq@)|l^i');
define('LOGGED_IN_KEY',    'UC>?)U6-MP*X2<o+%Z>r3T%Rt0+S$-oQB){+:ItUl=DvUxk0b}?:Aw}*|b<~`iW`');
define('NONCE_KEY',        'I#zXg4Uw<?Y*hq._(lDSx:m#{LXi$2,w6,u)^[7KE[Qqq`VqJm,KK*f7X&}U3I&_');
define('AUTH_SALT',        'g|y8Rlc-1Hdd7^v^8Z>w`mn|QU{lt0vcDv*6z{|P!;//ngGaG8ZN/d(Dj$# cOAi');
define('SECURE_AUTH_SALT', 'UDLPr+>Gcr8(-Tq6*;nLH)ldyzu,{dqph/RkM39H7&##@BMl/z3_0qlk4qRdWf-G');
define('LOGGED_IN_SALT',   '$;-FPu%Ro?d;S4d!4{s%&&r[o,9rGGi%=Z|5x4VXLy`c.~FC}vRI.BYc&9Tn /s-');
define('NONCE_SALT',       '|kTc [+& >xspuatE<. _E>^d.s6.GT66.|?(Ks>>/U})Ki7jK_S F}X2FYH))`a');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
