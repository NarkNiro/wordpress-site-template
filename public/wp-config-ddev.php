<?php

if (getenv('IS_DDEV_PROJECT') == 'true') {
  /** The name of the database for WordPress */
  define('DB_NAME', getenv('DB_NAME'));
  
  /** MySQL database username */
  define('DB_USER', getenv('DB_USER'));
  
  /** MySQL database password */
  define('DB_PASSWORD', getenv('DB_PASSWORD'));
  
  /** MySQL hostname */
  define('DB_HOST', getenv('DB_HOST'));

  /** WP_HOME URL */
  define('WP_HOME', getenv('WP_HOME'));
  
  /** WP_SITEURL location */
  define('WP_SITEURL', WP_HOME . '/');
}

/** Enable debug */
define('WP_DEBUG', true);


/** Define the database table prefix */
$table_prefix  = 'wp_';
