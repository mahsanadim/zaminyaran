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
define( 'DB_NAME', 'zaminyaran' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't{&Yxx$D,=A=%YT_7A=eFVbX$&:6?X}$fW7Z]YW]xYmoe_#W_>BYi`gs,>sdk3(M' );
define( 'SECURE_AUTH_KEY',  '!4KEWked<g2<O*%k8URY@A,)J.4-U*RiQ%-_H$yZ6y*S3tk>H&A;^=v34K0y)[O7' );
define( 'LOGGED_IN_KEY',    'RE5G?%O@GfE35 UpA#R@2jyDc7B3O%~}]T;`cS&$OT9ZaiUp(rLk; #o)De6l(x_' );
define( 'NONCE_KEY',        'Jj,T};[V(]2]|t7Qyob.{kn|/bWLMb~*P<~~?Z]4-FR}ndvj*0KMy/Z6.BjbW$nO' );
define( 'AUTH_SALT',        'HWq(%,H?9MhA8fBk/?.B2?:_rR76z/4@1FlIZBL`.H36yr^#;?D|HB!X1`pm:(4E' );
define( 'SECURE_AUTH_SALT', 'GR=ebN%?YR!e>|j*jjn|8gn`VUS2>{Xi(@Qb,ly;o1<,tq$()J.(`L7[;0_5eaT6' );
define( 'LOGGED_IN_SALT',   'M:uXB8O-t,Z4Koq4}lIW3u|*Co}#]G$&zllXKUvYp3u~0&h9Y}cy1u$iappUHuc@' );
define( 'NONCE_SALT',       'IEBAc[gcZF85A5~Hn_(vEma$B<^+F8W)pWBDJLPdq*vq(M@!DZpoCK5a7R5,LNNH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
