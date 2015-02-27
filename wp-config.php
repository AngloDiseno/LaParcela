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
define('DB_NAME', 'laparcela');

/** MySQL database username */
define('DB_USER', 'laparcela');

/** MySQL database password */
define('DB_PASSWORD', 'laparcela');

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
define('AUTH_KEY',         '/2fXba(JtjpHJY}Uk9|4^Njc4u&TTbX65L8/~KD/!t[f-.DE;UdW$@pT*P(<B4(i');
define('SECURE_AUTH_KEY',  '>F)i_Fl~C 5cDzi8zeIO!{i!!tv4=t7%uF!!L1)[{=+=e8<~^d,A,O!lSa,r7/oG');
define('LOGGED_IN_KEY',    'RM@5e}c4>C8,aQBzZ0BQEr`lif.tEbD:X?*B]HVN5]T2a2p+ojJ0if63merT}(ZE');
define('NONCE_KEY',        '[Sp;PgM*MIdFA+3,]PaHex(<n1zMAAx/_Dny/3^UDzjA_6B{Gh@K8%7O$&yWc)Ud');
define('AUTH_SALT',        '^gvuOv(Ob{W5oiUEju_|Z^{!)sUmX1/.jY(p=-$LqAhE=u3oBXh2G^t{7UsG*8);');
define('SECURE_AUTH_SALT', 'PF[CokuvtkiVrL!3#1OgVu%C5q&=MHIzuV ~t 65d:5{/vr1w)D)(N11YbDCq-3q');
define('LOGGED_IN_SALT',   'i(s,4LA@S6bVc{7*%rHDOA}j}8,AN>V[D:>W$dG3H+49,bj/skGPk>4C;h0[Azq1');
define('NONCE_SALT',       '@b<&OIN3!8=oxR{3#+Lz,wN9%K=z>Q x25*}=NMo35^ s*$jlRjdKNLEJ<A=nn:)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lp_';

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
