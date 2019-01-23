<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>

<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>

<main role="main" class="site-main main">

    <div class="container">
        <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя</label>
                    <input name="name" type="text" value="<?= $product['name'] ?>" class="form-control" placeholder="Имя" required>
                </div>

                <div class="form-group">
                    <label>Короткое описание</label>
                    <textarea name="short_description" class="form-control" rows="5" required
                              placeholder="Короткое описание"> <?= $product['short_description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea name="description" class="form-control" rows="5" required
                              placeholder="Описание"> <?= $product['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input name="price" type="text" value="<?= $product['price'] ?>" class="form-control" placeholder="Цена" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Категоря товаров</label>
                    <select name="category" class="form-control">
                        <option value="men" <?php if ($product['category'] == 'men') {echo 'selected';} ?>>Мужская одежда</option>
                        <option value="women" <?php if ($product['category'] == 'women') {echo 'selected';} ?>>Женская одежда</option>
                        <option value="kids" <?php if ($product['category'] == 'kids') {echo 'selected';} ?>>Детская одежда</option>
                        <option value="acss" <?php if ($product['category'] == 'acss') {echo 'selected';} ?>>Аксессуары</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка (<?= $product['image'] ?>)</label>
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