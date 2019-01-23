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
<div class="dz3">
<main role="main" class="site-main main">
    <div class="container">
      <h1><?= $pageH1 ?></h1>
    </div>
    <div class="container">
        <form method="post" action="/calc.php">
            <div class="form-group">
                <label for="exampleFormControlInput1">Аргумент 1</label>
                <input name="arg1" type="number" value="<?= $arg1 ?>" class="form-control" id="exampleFormControlInput1" placeholder="Аргумент 1" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Аргумент 2</label>
                <input name="arg2" type="number" value="<?= $arg2 ?>" class="form-control" id="exampleFormControlInput2" placeholder="Аргумент 2" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Тип операции</label>
                <select name="operation" class="form-control" id="exampleFormControlSelect2">
                    <?php 
                        foreach ($operationsSelect as $key => $value): 
                    ?>
                        <option value="<?= $key ?>"
                    <?php if ($key == $operation) { 
                        echo 'selected'; } ?>
                        >
                        <?= $value ?>                            
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn ">Отправить</button>
            </div>
        </form>
    </div>
    <div class="container">
        <h2 class="jumbotron-heading">Результат:</h2>
        <h2 class="jumbotron-heading"><?= $result ?></h2>
    </div>
</main>
</div>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>