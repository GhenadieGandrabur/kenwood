<?php
// HTTP
define('HTTP_SERVER', 'https://kenwood.md/');

// HTTPS
define('HTTPS_SERVER', 'https://kenwood.md/');

// DIR
define('DIR_APPLICATION', '/var/www/vhosts/tahograf.md/kenwood.md/catalog/');
define('DIR_SYSTEM', '/var/www/vhosts/tahograf.md/kenwood.md/system/');
define('DIR_IMAGE', '/var/www/vhosts/tahograf.md/kenwood.md/image/');
define('DIR_STORAGE', '/var/www/vhosts/tahograf.md/storage_k/');
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
define('DB_USERNAME', 'tahograf_admin');
define('DB_PASSWORD', 'Cni336$');
define('DB_DATABASE', 'tahograf_kenwood');
define('DB_PORT', '3306');
define('DB_PREFIX', 'ken_');