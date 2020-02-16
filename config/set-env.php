<?php

/** Check if local files exists */
$dotenv_path = (file_exists(WEB_DIR.'/config/local.php')) ? WEB_DIR : WEB_DIR.'/../../';

/** Load the .env file */
$dotenv = Dotenv\Dotenv::create($dotenv_path);
$dotenv->load();

/** Check against required variables */
$dotenv->required(['WP_ENV', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST']);

/** Set the config environment variables */
require_once realpath(WEB_DIR . '/config/config-settings.php');
