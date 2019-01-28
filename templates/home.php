<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>
<header>
<div id="flexH"><!---Первая строка-->
            <?php include ROOT_DIR.'templates/chunks/leftflexH.php'; ?><!--- Левая часть верхней строки-->
            <?php include ROOT_DIR.'templates/chunks/rightflexH.php'; ?><!--- Правая часть верхней строки-->
        </div><br> <!---Верхняя строка-->
</header>
<div class="borderv">
<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>
 </div>


<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>

<?php include ROOT_DIR.'templates/chunks/sliderup.php'; ?><!---- Слайдер --->
<?php include ROOT_DIR.'templates/chunks/block4.php'; ?><!---- Блок из 4 фото --->

    <div class="Lorem">
        <span class="Lorem_ipsum_dolor_sit_amet">
            fetured items
        </span><br>
        <span class="Sed">
            Shop for items based on what we featured in this week
        </span>
    </div>
                     
    <?php include ROOT_DIR.'templates/chunks/galery1r.php'; ?><!---- Первый ряд галереи --->     
    <?php include ROOT_DIR.'templates/chunks/galery2r.php'; ?><!---- Второй ряд галереи --->
                
            
    <div class="Lorem">
        <button type="button" class="btn btn-default dalee" data-toggle="dropdown"><span class="mydal">Brose all product </span> <span class="myacc">&#8594;</span></button>
    </div>

    <div class="cae"><img  src="./img/index/feature.png" alt="First slide"></div>
            
         
    <?php include ROOT_DIR.'templates/chunks/niz.php'; ?><!---- Слайдер с цитатником и subscribe --->
    <?php include ROOT_DIR.'templates/chunks/fother.php'; ?><!---- Прочая часть внизу со ссылками --->
    <?php include ROOT_DIR.'templates/chunks/footer.php'; ?><!---- Footer --->

    </div>
</body>
</html>