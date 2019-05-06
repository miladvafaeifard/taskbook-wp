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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'g8hN5selYgAj1+MLK1LauBfEmmewE83Zsa0q2Fucnp25sAvEovu2QnlIvVeHIps1R0Bn00TexhpaKyvmwbZK0w==');
define('SECURE_AUTH_KEY',  'MSOHN9CuE40Vpk2Tkn+HnixUAmJeaxt54VA6gYtTbKDaXvDTbRV6QzuYEhs3aQv7jiRn9Rl1aH/Fyq/PxHv0vw==');
define('LOGGED_IN_KEY',    'Q7Jout2x9Uh68ObBdKZ8CX2VIF/DWTxMfsnPYFrUcvG/zVmZNA+5V0tuICB8bduBkretsgtF3LdFYIe//wYNuQ==');
define('NONCE_KEY',        'HK6hNEGbBdjp2SwfVCODSNwDVASzM7ih39G6HqWsgy+JTkoIyU6x+R/+PkjXQeBPVRkDbFX8PWV22jIjts+Drw==');
define('AUTH_SALT',        'IEeISJebfX5YOlIODC/ZQ2fbDjkr4+Yk/wDThsqKn8fk1NQcPAWFQ9vjDZr21kHiHYHDaLTSM/FEQ4ZEUfwuGg==');
define('SECURE_AUTH_SALT', '3JkaMXlib1pojQIurNj+JC8CYfL5uZpaBpnMckEW8WG4CZH2IcJxeapJeWysYoqvpWim7BS21J/cYCz2jMbJxg==');
define('LOGGED_IN_SALT',   'mVwaUOMW0UOWMzA9OZv3hddgD701ZH24GdEvaaUJs+jCLTEPWfNx204UxJyP2hvzFWqE4+2kO7bDLSmusmciYw==');
define('NONCE_SALT',       'qvfhuLIutadt+LdmKCK4PDMWeB/NIb85U+LhyOKlFN+CC+gfLBKCLLcVYlV4T8K889PM8iG936R/CCkW2kB6+w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
