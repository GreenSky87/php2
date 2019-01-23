<?php
session_start();
define('ROOT_DIR', __DIR__.'/../');
define('CALC_OPERATION_SUM', 'sum');
define('CALC_OPERATION_SUB', 'sub');
define('CALC_OPERATION_MULT', 'mult');
define('CALC_OPERATION_DIV', 'div');
$distConfig = require ROOT_DIR.'config/config.dist.php';
if (!file_exists(ROOT_DIR.'config/config.php')) {
    echo 'Создайте конфиг сайта';
    $localConfig = [];
} else {
    $localConfig = require ROOT_DIR.'config/config.php';
}
$config = array_merge($distConfig, $localConfig);
$mysqlConnect = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
autoload(ROOT_DIR.'engine/', ['init.php', 'menu_builder.php']);
$user = null;
if (isset($_SESSION['user_id'])) {
    $user = getUser($mysqlConnect, $_SESSION['user_id']);
}
function autoload($dir, $excludeFiles = [])
{
    $excludeFiles = array_merge(['.', '..'], $excludeFiles);
    $files = scandir($dir);
    foreach ($files as $file) {
        if (!in_array($file, $excludeFiles)) {
            if (is_dir($dir.$file)) {
                autoload($dir.$file.'/', $excludeFiles);
            } else {
                if ("text/x-php" == mime_content_type($dir.$file)) {
                    require_once $dir.$file;
                }
            }
        }
    }
}
?>