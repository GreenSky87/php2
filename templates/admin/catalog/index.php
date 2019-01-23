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
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Deleted At</th>
                    </thead>
                    <tbody>
                    <?php
                    $products = getProducts($mysqlConnect);
                    foreach ($products as $product) :
                        ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td>
                                <a href="/admin/catalog/edit.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a>
                            </td>
                            <td><?= $product['category'] ?></td>
                            <td><?= $product['short_description'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td>
                                <?php if ($product['image']): ?>
                                <img src="<?= $product['image'] ?>" width="60">
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($product['deleted_at']): ?>
                                    <span class="small"><?= $product['deleted_at'] ?></span>
                                <?php else: ?>
                                    <form method="post" action="/admin/catalog/delete.php">
                                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <h3>Добавить товар</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя</label>
                    <input name="name" type="text" class="form-control" placeholder="Имя" required>
                </div>

                <div class="form-group">
                    <label>Короткое описание</label>
                    <textarea name="short_description" class="form-control" rows="5" required
                              placeholder="Короткое описание"></textarea>
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea name="description" class="form-control" rows="5" required
                              placeholder="Описание"></textarea>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input name="price" type="text" class="form-control" placeholder="Цена" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Категоря товаров</label>
                    <select name="category" class="form-control">
                        <option value="men">Мужская одежда</option>
                        <option value="women">Женская одежда</option>
                        <option value="kids">Детская одежда</option>
                        <option value="acss">Аксессуары</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка</label>
                    <input name="image" type="file" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>

</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>