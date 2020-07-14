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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'erBrYT>7+)+X5(kgx10zykk)2bBPZ_}y<=KgemgX/#x+}&UAq~yquEE*[X@{$6kR' );
define( 'SECURE_AUTH_KEY',  '$tT3f![]Es&>ZQCwvoB1S+|jjRR^vJ=q_$=&_}iqh;p=E<8nMo=V?D)&.}Bt6)W ' );
define( 'LOGGED_IN_KEY',    '=1}cJn|PvixX95%G3wMuwb]YxqlvI.x YGj[gZlW*;)(1UH~>Y&,2VKf9vVBGY/M' );
define( 'NONCE_KEY',        'Q8?$YU8!}FvXSu]+XMQ#CnFe[6&Ae0SXl}_<#&U+/-ewA |zA2%P$aSQ:{pp>I$q' );
define( 'AUTH_SALT',        'j&^f8>E55 [V]YO( !!;oLF7h1P5Pnp/cR?HA3Z6PJvZSJ6c<Y}A25``*T)_%&!K' );
define( 'SECURE_AUTH_SALT', 'ZGIw{=^ndlo+iY? }g]XuVW$638KGMQ ^?s$0G4F{ye+nBc:X5`oQd?WUHRNi+{G' );
define( 'LOGGED_IN_SALT',   '?Owrks!gsnYleAiMH7(B2B*||{]1 4Mu+sT?;YKF7a7Yy-a%3y;ZINn%4~APfB64' );
define( 'NONCE_SALT',       '/jRr81h,7L)XM}({!w,]<Y-y+c!bT[@r]N/g[`3yA)fY&N1-T4X2r+/DfPA& 1li' );

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
