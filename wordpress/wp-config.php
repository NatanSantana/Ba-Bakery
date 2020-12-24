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
define( 'DB_NAME', 'cake' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Deusabruxam@1234' );

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
define( 'AUTH_KEY',         '*AT -P#sXyf>2@z7OgF5gB?#x>i?@dg2[1FfPKW0VG3zFfmB4N_Rtqo#dEXOIUcn' );
define( 'SECURE_AUTH_KEY',  '3rc>Tl/uli~FQX-cPp7cz8W,D {sRw!Cp_ ,5f-Nt*!%sXLBryB/&N$ l qTP|I;' );
define( 'LOGGED_IN_KEY',    ')^M5s`]g+d(!n ;<!+eOD1XKmqb{~*GJ%S+?t{0>{himRdx,,|_Q`gU#8??R2B8M' );
define( 'NONCE_KEY',        'dd/byP1uBn0MNf.+;ef3x4TXF3H&0,}u< <TVd[+>-8F{K`r3#|Dm9ZlpRlQ-oNS' );
define( 'AUTH_SALT',        '?>ga53Hf;fqzIX$Vl^fleO*`5[fqlWD,J$|[rgxZJ9H$Z9CDeO%Y/rrK}yz @I#G' );
define( 'SECURE_AUTH_SALT', '2#gDSO6DYY~*@WJ _&}d+I4%vabwUttVaNiHzMEph|mK>cr6B<vsY{}#[j]ZWbGG' );
define( 'LOGGED_IN_SALT',   'C0Y@pjER`rmmBJ>t5_,z,MwMkY1]<5}ORV9[h8a`M|XD^+RKI~bES(uT[C,KE-t}' );
define( 'NONCE_SALT',       's-+~~#x=k=:qFidX=CU<zk:MwAg>C7IE9eC`o])~Ic}=[1:Xrj9/#$hh>}Bo&jc0' );

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
