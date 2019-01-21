<?php
require_once '../engine/init.php';


$search = $_GET['search'] ?? '';
$page = isset($_GET['page']) ? $_GET['page'] : '';

require_once 'Twig/Autoloader.php';
require_once 'Classes/Application.php';
require_once 'Classes/View.php';

Twig_Autoloader::register();

try {
	// Указывает, где хранятся шаблоны
	$loader = new Twig_Loader_Filesystem('templates');
	
	// Инициализируем Twig
	$twig = new Twig_Environment($loader);
	$view = new \Classes\View($twig);
	$app = new \Classes\Application($view);
	$app->title_name1();

	$app->example1();
	$app->example2();
	$app->example3();

} catch (Exception $e) {
	die ('ERROR: ' . $e->getMessage());
}

?>
