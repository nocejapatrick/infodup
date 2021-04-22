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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'infodup');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', '');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', 'ed92baf56c6a2264a55c06c448d12bd6f2bde582a8c470e321c085aefd33ca53');

define('SECURE_AUTH_KEY', '689fd01fd21cae522a47885c65457221d3dd105b1d08b4d6f9f1e5b92ce0c9e7');

define('LOGGED_IN_KEY', '20fb5de37bdcdf6ff62b40a0324e95e2eed6c8e8670cbf943c39713a07c571bd');

define('NONCE_KEY', 'a7c8a9d19d593d109ff4df398227e2a43a18a099a8ee6b3282faa606013a654e');

define('AUTH_SALT', 'fb888545b4df7916658b4fa9482cc82273da9701b36e952f52b22ac09ed71f95');

define('SECURE_AUTH_SALT', '17aee028e3217b81665ad26b4dbbb8a4b557554d47f55b5808e528a8aba16a4d');

define('LOGGED_IN_SALT', '226fa6041da8b877c9da470ee2368e22bab513040451551bc5bb74e87cd7a9f7');

define('NONCE_SALT', 'd78037cf0ef073978b42c3e1bba690d72159b7680e0abc7397aa2bc67dba2204');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'iEb_';

define('WP_CRON_LOCK_TIMEOUT', 120);

define('AUTOSAVE_INTERVAL', 300);

define('WP_POST_REVISIONS', 5);

define('EMPTY_TRASH_DAYS', 7);

define('WP_AUTO_UPDATE_CORE', true);



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

