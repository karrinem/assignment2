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
define('DB_NAME', 'assignment2');

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
define('AUTH_KEY',         'E_kEfjDU.]9A@bs{2K>bALC6pR?mZ3uweqwh6rd=Kztp9 A9>bt6)heUdbx/_tz#');
define('SECURE_AUTH_KEY',  'Y(>;UdhlPO9Q%RWj3pX[ymn?uu8>F62Sh>-YCaZ4vX7|mfpfrv0:)VRb`JBSfssp');
define('LOGGED_IN_KEY',    '96y^twAyfh]q}*Yw/<|w}/2R4B!El{<aUv1Ebk0.EJR3% /?p25vS_8Ii0So#QjH');
define('NONCE_KEY',        '`0SnHPG%#@i{_`:(x9KU8y$r-)g(j.TSON5$DfeT3kURA.$137]R1cz9$MqEbY9J');
define('AUTH_SALT',        ',8p-{iv[[;_2@(i+^Te@4*Kjr<v y6]7^pv~}e^Y:eDft] Z7QV9nkY^~Td)-,`=');
define('SECURE_AUTH_SALT', 'RU8T=G:7tBQP|d7s]~1xw1%3_=yIdgOl0S0b&ymV^#YJH5Bb.IvaLgRDg6`^1K?a');
define('LOGGED_IN_SALT',   '(Yv|/hJ9dV)W.Q:,s:V,Q7<4x0=~^7oMDCiQB:F*ob+vIPWHF>fqMBIr)$vIe+T8');
define('NONCE_SALT',       'AkMR]e9qby+83`<x-OC^0d<L>5x3iSah]5O5w/r ]}V3v^aFJRrlQZy<ZVIMiA]V');

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
