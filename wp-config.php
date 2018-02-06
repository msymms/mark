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
define('DB_NAME', 'mark');

/** MySQL database username */
define('DB_USER', 'mark_root');

/** MySQL database password */
define('DB_PASSWORD', 'mark');

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
define('AUTH_KEY',         '~mWtz)g*[%z~W}a,+#-]xLMU.7?,5EExYB,co5Km+Z(mT;{./CC$`;{`xjc.~>)D');
define('SECURE_AUTH_KEY',  '4$q}_,d=jX%OTE)mD$V13#JJTB<yYlh7hV.+;PPW?I,3YHoclG|*vR%3KM;$K_XR');
define('LOGGED_IN_KEY',    'BWu&bb2gB*,QUkA(s/WfVaNEq)gs%:Fujp`!iqvS=:U2+=rGgR%(L^9o`lQBsUES');
define('NONCE_KEY',        'wm6IR.3]`FZ||HP:d%|p,><rUx0@EH,.F!!,7?~TXLi`V}9yfDOOrqbctP!U <1H');
define('AUTH_SALT',        ',lhi*POUP:+hbMOUK6@C%XbXBas4M{Y!7r`{iZxXyyIv(!Q,=%S<T*,1aKUKC`V]');
define('SECURE_AUTH_SALT', 'O/o|gdtH);)D;SmMn${o>d]Y}qG(W@5U)6$ZM9Q~59pa$*i4Nj7H[jo@FG8U>_+.');
define('LOGGED_IN_SALT',   'roQ7K7,dv0ExGs>Xb#km0-;Y@hUS>i,Q^Q)=CsS06z.A=P *qm)oIh}joY9yJz(s');
define('NONCE_SALT',       'uqB!$S#4I0XheHbI{AI1ULeICR7_qs!fa bqB/x6@opXEr]+VFjOxhb=7V P=^i ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mk_';

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
