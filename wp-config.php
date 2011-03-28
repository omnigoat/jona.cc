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
define('DB_NAME', 'jona_cc');

/** MySQL database username */
define('DB_USER', 'jona_ccer');

/** MySQL database password */
define('DB_PASSWORD', '4GreatJustice!');

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
define('AUTH_KEY',         '8bORBNRNbZq1B!IN,Mnr:n=u0UZrEg{i8IiC@cgDpjSwi2hp&0~wvM+1f!Y.xC@H');
define('SECURE_AUTH_KEY',  '%pjolu%2B0~MWc+.{xB0*XnAT3OI^G-`cIq9w#G/~+.|}<!{+@H<_Ff<z$k?Lh*~');
define('LOGGED_IN_KEY',    '|.{r6p#}8+FXjDd6CH*Xr.];ttP_x[E3Of2kW3)r?HPXo>gjc9vDdL uTW5M$/?[');
define('NONCE_KEY',        ':.uM#|y$9MQ0U>qz!]G9~{?^3,4ip7-@v13XU4Ws/8![$(X5Vb7N<g9dyScw$Qzt');
define('AUTH_SALT',        'SG~MtK~U{{mD-`XrF{mCd/ap-oHSeqjS`s1l[(sj39;E?v5Q{x+#+X5KQ!+w1*KS');
define('SECURE_AUTH_SALT', '1`QZu2W-lfpr]z 62/G7bWmymgCm>*r J_p^Aiv:p:WR]O{2|Dk}PSB_9%txf{]v');
define('LOGGED_IN_SALT',   ':>mGS`r]c)N9u<_g4w([>=ZC:UH}G&Y,Ck>Ve<PVg!)KL/ntiRcXdQ,C-wMQH%O<');
define('NONCE_SALT',       'a%V*eb]F4q$)h}Zf>rl7cgd8j)q8.>_y>Uca>X76pXT[-l#E`Az|TVb8!>45i1l9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog_';

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
