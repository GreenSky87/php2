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

<main role="main" class="site-main main">

    <div class="container">
        <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
    </div>

    <div class="album py-5 bg-light">
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><?= $product['price'] ?> руб</span></h2>
                    <p class="lead"><?= $product['description'] ?></p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" alt="500x500" src="<?= $product['image'] ?>" data-holder-rendered="true" style="">
                </div>
                <div class="col-md-5 order-md-1">
                    <form method="post" action="/cart/add.php">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <button type="submit" class="btn btn-primary">Купить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>