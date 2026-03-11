<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FastTravelSite' );

/** Database username */
define( 'DB_USER', 'admintest' );

/** Database password */
define( 'DB_PASSWORD', '23051401' );

/** Database hostname */
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
define( 'AUTH_KEY',         '].Jn|p8(sst@}:Z ,C/Wu2s{=)?YbM`%6HQi1wo+g ;#_XsiV:xX8p@(9l@c@z~B' );
define( 'SECURE_AUTH_KEY',  'ggJVl{JXjth~ e>jw.RR,gE6|| (7hY`AsY9fE^Tt}sL4w{?KoJrid`Uu~[2AIS(' );
define( 'LOGGED_IN_KEY',    '{C1v>*^) V=sh!C8pu4`P~idD|nh|WnzT&p0c$Wn*pwBAl3C>|xj!,j5<IYZ-bv;' );
define( 'NONCE_KEY',        'JsmKJT$]-b-{SbMV t?h=&ai70Y6-(cddDr!7iQFI)lF&rP+!<?hw=iDcuiPx3sc' );
define( 'AUTH_SALT',        'u.MW0HxngiEva$|Ek,^*h;Rf:B<^,~@oE}I&w6@HqjAA7bQPtnv_C#B>-S]UrM]?' );
define( 'SECURE_AUTH_SALT', '{Hfz#538U;${:joUb N]_5Tn>ps.RQ;#sunJM4 lstl[ad=n_P-&zLS3v~S}[c7(' );
define( 'LOGGED_IN_SALT',   'P:R1Xs+?%GL6xTC*O%D;L<5AC`#)#><9|gG&8;n_u+tJ.==|_Lp($LCWIo&vH|dZ' );
define( 'NONCE_SALT',       's{VaE(CN:C<o@I$+H(}ygF.N}W-?>`OPZS5$p{mR {pn<MgI|3Y`Dn5xs&Bn`6(|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
