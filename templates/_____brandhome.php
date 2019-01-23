<!DOCTYPE html>
<html lang="en">
<?php 

$year=date('Y');
$title='Brand';
$h1='bran<span class="lastD">d</span>'.$year;

?>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
	<div class="containerS">


		<header>
		<div id="flexH"><!---Первая строка-->
			<?php include '../templates/leftflexH.php'; ?><!--- Левая часть верхней строки-->
			<?php include '../templates/rightflexH.php'; ?><!--- Правая часть верхней строки-->
		</div> <!---Верхняя строка-->

		</header>
	</div>
	<div class="borderv"><!---Горизонтальное меню верх-->
	
			<nav class="navbarDZ navbar-expand-lg"">
			<?php
				$menu = require('../engine/menu_builder.php');
            	include '../templates/menu_ul.php';
            ?>				  	
	
			</nav>

	</div><!---Горизонтальное меню низ-->
	
	<div class="dz5">
		<span class="Browse">
			Домашнее задание 5 <br>
			<?php 
			$tip_gal='gal_top';
			echo(showgallery($tip_gal)); /*Выводит галлерею из папки и отображает как в дз*/
			echo '<br>';
			$tip_gal='gal_bottom';
			echo(showgallery($tip_gal)); /*Выводит галлерею из папки и отображает как в дз*/
			echo '<br>';
			

			?>			

			</span>
	</div>


	<?php include '../templates/sliderup.php'; ?><!---- Слайдер --->
	<?php include '../templates/block4.php'; ?><!---- Блок из 4 фото --->
		
					
	<div class="Lorem">
		<span class="Lorem_ipsum_dolor_sit_amet">
			fetured items
		</span><br>
		<span class="Sed">
			Shop for items based on what we featured in this week
		</span>
	</div>
					 
	<?php include '../templates/galery1r.php'; ?><!---- Первый ряд галереи ---> 	
	<?php include '../templates/galery2r.php'; ?><!---- Второй ряд галереи --->
				
			
	<div class="Lorem">
		<button type="button" class="btn btn-default dalee" data-toggle="dropdown"><span class="mydal">Brose all product </span> <span class="myacc">&#8594;</span></button>
	</div>

	<div class="cae"><img  src="./img/index/feature.png" alt="First slide"></div>
		    
		 
	<?php include '../templates/niz.php'; ?><!---- Слайдер с цитатником и subscribe --->
	<?php include '../templates/fother.php'; ?><!---- Прочая часть внизу со ссылками --->
	<?php include '../templates/footer.php'; ?><!---- Footer --->

	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
<?php ?>
</html>