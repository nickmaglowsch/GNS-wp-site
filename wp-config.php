<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u943160499_NMleK' );

/** MySQL database username */
define( 'DB_USER', 'u943160499_csuNW' );

/** MySQL database password */
define( 'DB_PASSWORD', '1y0dqQIHDX' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'L3|x+#<^KU9v8Q-oq#:R8FwCM;R~Vn ] ]::K|4X`FQSR+N^F;yUTPoe(o,~vlg|' );
define( 'SECURE_AUTH_KEY',   '7:1$v7/<Ws?Ic pas!][J2P,/)~p=0aVAMVcei.DR)].rP;i~&:gDMFNav_*@acx' );
define( 'LOGGED_IN_KEY',     '>$n~iBg]&uSp9|wh+BfoS{q84O45d5>fZsS`p_m[& R$DIqtSz@hBoU6T@_DFnI&' );
define( 'NONCE_KEY',         '-Du,lES--qVc_/p-),}idOJ+*@ @d)/^f%HZaFGR|6vYsl#CK?t>L}pR@wqKh/c ' );
define( 'AUTH_SALT',         'CkeUsx&iZmG{Q<61M4k1V(cQlcQBmwy4N5+fS>[q|Ygt#2(b7aOxpL-Ut4g)xs;{' );
define( 'SECURE_AUTH_SALT',  'JT)Tj}iIN{ZnE{0*S5:}%&LC){lm-aG^@=sO*{{6T3P;Q,I/xe9]!.8[,$Q?Dvmg' );
define( 'LOGGED_IN_SALT',    'L7ti_) gmW,@NP2O3N|(-2I1qf%sg3_c4%eu#N30Nx-gPhy&m?/{i 7zg@K_naYf' );
define( 'NONCE_SALT',        'bHvdL$Cou:`7XB}lI4Ozo&sG1EF64m$Okqi|I,#B0)pA3;A?&hX0jV_^2<Lm)]6O' );
define( 'WP_CACHE_KEY_SALT', '_C95(k5sR:-/bapJ9X|}8D%OK{%j>#D@eV@DQy^zU.^d9<-5G),jmr>]%$ y[V>+' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
