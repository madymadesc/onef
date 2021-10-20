<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'onef_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/^5O/@kfZ<,:4w/m>uUdI0.Z>1E5}5BUT0bSZvi_]F_h>E4jTK]FL^q@-p^?M-<y' );
define( 'SECURE_AUTH_KEY',  'P?K$*Qq&[k6J5(QNra{x<}39@zr=z/9%27JlR}O(/g>C]U)h#yA&HW{sl{KG8O]?' );
define( 'LOGGED_IN_KEY',    'EL L/Xi;ovv]A9ihWorL9N{yeO c`z_lLI>5#9+<rw/a@d>De7pDN<:b=C} *y2^' );
define( 'NONCE_KEY',        '},KRh_ylZ=h U?;s$mueX %Rp__,x{ZO@v&j>0y>UxS4rHSV9:6/Nt(G=`FcfuB1' );
define( 'AUTH_SALT',        '~}O{fWn]o;jRM`cZCF5YaJfE3A{;7uMIcO9h3hz9km}cD{Rhp5]}p[g/vdILK{jG' );
define( 'SECURE_AUTH_SALT', '2elHZq]2*yu)])-~yyXy/]=)$2}(gHn@eHV;NCq+K>`Q_M)%kq7~Zi_ p+P~*.?{' );
define( 'LOGGED_IN_SALT',   '^uP`cE{ra]o$JHeuK]}AdwSQa&Cw#D:fw%rw6#t-b5o5:rPyvDG$P0#K7D?1kG#;' );
define( 'NONCE_SALT',       'Zw{/_ %;oQ;)2}& pZ+siH3OeEsK{^Hb$amuOjZvn$DD^[%2t-jN.f5;^4HV&.Vr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
