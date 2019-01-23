<nav class="navbarDZ navbar-expand-lg navbar-light bg-light rounded">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <?php
            $menu = require(ROOT_DIR.'engine/menu_builder.php');
            include ROOT_DIR.'templates/chunks/menu_ul.php';
            ?>

            
        </div>
    </div>
</nav>

<?php if (isset($_SESSION['success_message'])): ?>
    <div class="text-success">
        <?= $_SESSION['success_message']; ?>
    </div>
    <?php
    unset($_SESSION['success_message']);
endif;
?>