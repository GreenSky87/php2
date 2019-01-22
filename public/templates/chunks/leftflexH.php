<div> <!--- Левая часть верхней строки-->
    <img src="<?= '/img/index/logo.png';?>" alt="logo" class="logo">
    <?php $year=date('Y');
$h1='bran<span class="lastD">d</span>'.$year; ?>
    <h1><? echo $h1;?></h1>
    <nav class="navbar navbar-light bg-light">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="Browse">Browse</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php $menu = require ROOT_DIR.'./engine/menu_builder.php'; ?>
            <ul>
             <?php
                foreach ($menu as $i => $menuItem) {                                 
                    if (array_key_exists('podmenu', $menuItem)) {
                    $podmenu = [];
                    if (isset($menuItem['podmenu'])) {
                    $podmenu = $menuItem['podmenu'];
                    }    
                        
                    
                ?>
                    <li><a class="dropdown-item" href="<?php echo $menuItem['href']; ?>"><?= $menuItem['name']; ?></a>
                        <div class="dropdown-divider"></div>
                        <ul class="subnav">
                            
                        <?php foreach ($podmenu as $punkt) : ?>
                                <a class="dropdown-item" href="<?php echo $punkt['href']; ?>">
                            <?php echo $punkt['name'] ?></a>
                                <?php endforeach; ?>                                
        
                        </ul>
                    </li>

                <?php  
                         } /*arr....*/                                  
                } /*foreach....*/
                ?>


            </ul>
        </div>
        <form class="form-inline" method="get">
        <input name="search" class="form-control" type="search" placeholder="Search for item..." aria-label="Search">
        <button class="btn2" type="submit">&#128269;</button>
        </form>
    </nav>
</div> <!--- Левая часть верхней строки-->