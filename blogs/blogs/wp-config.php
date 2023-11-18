<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sagartec_wp275' );

/** Database username */
define( 'DB_USER', 'sagartec_wp275' );

/** Database password */
define( 'DB_PASSWORD', 'SC9!Q7Rp.2' );

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
define( 'AUTH_KEY',         'cxv74vyntnenrymoiw5lj4jr0vkv5zqtsfxhmg2t5z8gfdrvtv19mfkjccftrw3i' );
define( 'SECURE_AUTH_KEY',  'zsvtnwvlfjkloysdlsqohgry7htjckye1hro2cfzg5xkk2jwja3obzh00h6kpj4i' );
define( 'LOGGED_IN_KEY',    'fild1xmzxtxvwxbizk2mqhpwoikfwi6pwb1tj0txtyeaobi7srhrvaog50wu1mud' );
define( 'NONCE_KEY',        'jbvghjdbxlabv9aagegjtkuuk1fpznh8xcnv2saqxbqzs6vqxtkk6gzbzxpqbppj' );
define( 'AUTH_SALT',        'v0b5psww3vfrd0m6g02egmezoqpsr0xdwfk1sme1wp1rk3a0wnswc2axblaqgwbv' );
define( 'SECURE_AUTH_SALT', 'bgws0vgccglttljsluqaogyfgnpfejd7rm4laedubvkij40pqkdvjhftbpsttdkd' );
define( 'LOGGED_IN_SALT',   'iqgdcentfw8ul58tix6wauhghbipam4fgtz43glz5ypwwwoddly2lkvxypyykkcr' );
define( 'NONCE_SALT',       'o9qf0fuizvxdarlhw7fkerhrakrqmgw8lybjjw6s6pwbydzzmrbu6qatxx1xk6on' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpne_';

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
