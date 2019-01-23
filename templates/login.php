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

<div class="text-center">
    <form class="form-signin form-horizontal" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72"
             height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизуйтесь</h1>

        <?php if ($error): ?>
            <script type="text/javascript">alert('<?= $error ?>');</script></p>
        <?php endif; ?>

        <label for="inputEmail" class="sr-only ">Email</label>
        <input type="email" name="email" value="<?= $email ?? '' ?>" id="inputEmail" class="form-control email <?php if ($error) {echo 'is-invalid';} ?>" placeholder="Email" required autofocus>

        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" name="password" id="inputPassword" class="form-control confirm_password  <?php if ($error) {echo 'is-invalid';} ?>" placeholder="Пароль" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>

        <button class="btn btn-lg btn-secondary btn-block" type="submit">Войти</button>
        <div style="margin-top:10px;">
            <a href="/registration.php">Зарегистрироваться</a>
        </div>

        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div>
</body>
</html>