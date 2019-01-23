<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>
<header>
<div id="flexH"><!---Первая строка-->
            <?php include '../templates/chunks/leftflexH.php'; ?><!--- Левая часть верхней строки-->
            <?php include '../templates/chunks/rightflexH.php'; ?><!--- Правая часть верхней строки-->
        </div><br> <!---Верхняя строка-->
</header>
<div class="borderv">
<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>
 </div>

<main role="main" class="site-main main">
    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
            </div>
        </section>
    </div>
    <div class="container">
        <ul>
            <?php
            $reviews = getReviews($mysqlConnect);
            ?>
            <?php foreach ($reviews as $review): ?>
                <li>
                    <strong><?= $review['name'] ?>:</strong>
                    <p><?= $review['text'] ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="container">
        <form method="post" action="/reviews.php">
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Отзыв</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Отправить</button>
            </div>
        </form>
    </div>
</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>
