<?php

/** Set vendor dir path */
define('WEB_DIR', dirname(__FILE__));
define('VENDORS_DIR', realpath(WEB_DIR . '/vendor'));

/** Setup dotenv */
require_once VENDORS_DIR. '/autoload.php';
require_once realpath(WEB_DIR . '/config/set-env.php');

/**
 * WP Config defaults
 * You can add conditional config definitions here using the 'WP_ENV'
 * i.e if (WP_ENV == 'dev') { define('SOME_API_KEY', 'key') }
 */

/** WP still requires the table prefix here */
$table_prefix = 'wp_';

 /** Set wp-content to root path */
 define('CONTENT_DIR', '/wp-content');
 define('WP_CONTENT_DIR', dirname(__FILE__) . CONTENT_DIR);
  
if (isset($_SERVER['HTTP_HOST'])) {
    $protocol = 'http';
   // Change the protocol to HTTPS if available
    if (isset($_SERVER['HTTPS'])) {
        $protocol = 'https';
    }
    define('WP_CONTENT_URL', $protocol.'://' . $_SERVER['HTTP_HOST'] . CONTENT_DIR);
};

 /** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/wp');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
