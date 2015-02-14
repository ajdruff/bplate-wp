<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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

include('wp-config-db.php');

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
define('AUTH_KEY',         ':Q6j+Kf=/#GuQrP`:|>k cs)B?HfN:(d/BHyl)R:R([2VqK&1OT7$zZp>%2~<}>/');
define('SECURE_AUTH_KEY',  '!4~^VV?eJrtT[gKR(]|lhe)S)KJ.5b2aj4y5jykIoA;[uZ3+:!3o/`Q(2M++AV&S');
define('LOGGED_IN_KEY',    'osErq:,T%FW5bf]O`74?g2Ov|8w6XjO0}%#!MW0/|Kk1=GxyZ~}D}x:fXg~H`s+z');
define('NONCE_KEY',        'uCK7|}*_dC9D)a+fC Kg6fEW>bn ~Q@---w6LU;+vdd./+1@e%xqV3v3)p5OcR8+');
define('AUTH_SALT',        ')3AF{n[qtw7osLhxhp-_QuITs+z>otb34a%`eG.r:hVi~I:TXQ{B|Ihb9F/wq+w^');
define('SECURE_AUTH_SALT', '*NV|ur6S;.}vMg)]_Tl9ac)vj-G*<VX]D-#T(=H>Bj-%x+?e9|YN3L9rBP62Cwl(');
define('LOGGED_IN_SALT',   '9m(-}7-0j3MPs6+&kJBwH7QspDB-zVBh>UQ@M+?WpuW/=hBuEz2[^^xJ#L6/-0[d');
define('NONCE_SALT',       '-$wHCQR|38+c!g;ppe~y!SM4`=[1&:a|Y>rU9:&UIp-E<17AI1gR*-*n)^It*5+`');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
