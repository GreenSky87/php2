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
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?= $galleryMarkup; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" enctype="multipart/form-data" action="/gallery.php">
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select name="gallery" class="form-control" id="exampleFormControlSelect2">
                    <option value="Домашняя страница">Домашняя страница</option>
                    <option value="Страница галерея">Страница галерея</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Картинка</label>
                <input name="picture" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>