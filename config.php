<?php

/**
 * Project: PHP Simple Core
 * Author: Паутов Вячеслав
 * Date: 08.07.2018
 * Time: 21:34
 */

// FRAMEWORK CONST'S
define('ROOTPATH', __DIR__);

// DB CONFIG
define('DB_HOST', 'localhost');
define('DB_PORT', 8889);
define('DB_NAME', 'travico');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// CRON CONFIG
define('CRON_HOST', '52.165.5.182');
define('CRON_PORT', '22');
define('CRON_USER', 'neiko');
define('CRON_PASS', 'Waisel91270000');



// PHP Settings
ini_set('memory_limit', '2048M');
ini_set('max_execution_time', 1800);
ini_set('allow_url_fopen', true);
