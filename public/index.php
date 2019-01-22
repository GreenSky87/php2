<?php
require_once '../engine/init.php';
require_once 'templates/head.chunk.php';

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
	$app->example1();
	//$app->example2();
	//$app->example3();


} catch (Exception $e) {
	die ('ERROR: ' . $e->getMessage());
}
include 'templates/chunks/javascript.chunk.php';

include 'templates/chunks/sliderup.php';
include 'templates/chunks/block4.php';

    ?><div class="Lorem">
        <span class="Lorem_ipsum_dolor_sit_amet">
            fetured items
        </span><br>
        <span class="Sed">
            Shop for items based on what we featured in this week
        </span>
    </div>

    <?php
    $app->example4();?>
    </div>
<div class="Lorem">
    <button type="button" class="btn btn-default dalee" data-toggle="dropdown"><span class="mydal">Brose all product </span> <span class="myacc">&#8594;</span></button>
</div>
    <div class="cae"><img  src="./img/index/feature.png" alt="First slide"></div>
<?php include 'templates/chunks/niz.php';
include 'templates/chunks/fother.php';
include 'templates/chunks/footer.php';
?>



<!--
1. Создать галерею изображений, состоящую из двух страниц:
### а) Просмотр всех фотографий (уменьшенных копий);
### б) Просмотр конкретной фотографии (изображение оригинального размера)
### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.
### г) *Реализовать хранение ссылок и информации по картинкам в БД.

2. *Для примера 6 из сегодняшнего урока реализовать хранение в БД, которое позволит логике example6.php работать.
{{ "now"|date("d M Y h:i") }}<br />
{{ "now"|date("d/M/Y") }}

{{ "hello world"|upper }}<br />
{{ "hello world"|capitalize }}<br />
{{ "hello world"|title }}<br />
{{ "hello world"|lower }}<br />
{{ "<div>hello world</div>"|striptags }}<br />
{{ "<div>hello world</div>"|striptags|replace({"world" : "Welt"}) }}<br />
*/-->
