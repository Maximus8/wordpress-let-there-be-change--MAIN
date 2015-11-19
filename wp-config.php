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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '}W22u)5[i.YScgFpi9dsoj-!No~kBN,}c^6#O-h`Qw>N_2QxKl)@0u=;=-+N8aIe');
define('SECURE_AUTH_KEY',  'EDp`,lN$){zxs?d?Q&->=#fToy!(NOwTF86uHaTM2-**TL-do{y*`4R|.iLh1oR1');
define('LOGGED_IN_KEY',    '@{koJj/_>psOO}7k4_3Wss4*]IK(fUm3Q*qi6WI{2:9UY}&6:q`Cb`M)=W$Nq$&(');
define('NONCE_KEY',        'pRl-2w`cK1n~C+2!]+**-bH:h^swz{Ek5j@i=$]$6CRx(GK7#[uY+l2@4<Lm_+F_');
define('AUTH_SALT',        'W4/${IF]V)&;GsS?!+N$|RSDn+yx5X+%O[BD~_M)Cn*su&/JpIY8alz]8EL#Gs[^');
define('SECURE_AUTH_SALT', '1)TItrw9s o~{&N]|h(Vmi,a(`GQc<kr@GhE{N&8Xf6L=D){`Q}EA_|lvN@-+tS`');
define('LOGGED_IN_SALT',   '<</!ro74>n!YqP{bSN1BI)S`Mnr[jSb-j`Q3UB9IO#j(tuz@B3QaW`<@Ev$fQi-%');
define('NONCE_SALT',       'QTKN|*F@1hhHK3P%HZaS8s `?|a4<;%H>})>;|+6.r__/:r56$pia]]$fZ|Pz8L%');

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
