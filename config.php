<?php
// HTTP
define('HTTP_SERVER', 'http://tdirect.dev2.local/');

// HTTPS
define('HTTPS_SERVER', 'http://tdirect.dev2.local/');

// DIR
define('DIR_APPLICATION', '/home/dev2/domains/tdirect.dev2.local/public_html/tenderdirect/catalog/');
define('DIR_SYSTEM', '/home/dev2/domains/tdirect.dev2.local/public_html/tenderdirect/system/');
define('DIR_IMAGE', '/home/dev2/domains/tdirect.dev2.local/public_html/tenderdirect/image/');
define('DIR_STORAGE', '/home/dev2/domains/tdirect.dev2.local/public_html/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'dev2');
define('DB_PASSWORD', '3KSJLtWmUZKXZir');
define('DB_DATABASE', 'tdirect_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');