<ul class="navbar-nav mr-auto">
<?php
    foreach ($menu as $i => $menuItem) {
    $attrs = [];
        if (array_key_exists('attrs', $menuItem)) {
        $attrs = $menuItem['attrs'];
        }                                    
    $podmenu = [];
        if (isset($menuItem['podmenu'])) {
        $podmenu = $menuItem['podmenu'];
        }
    $security = $menuItem['security'] ?? null;    
        include 'menu_li.php';
    }
    ?>
</ul>