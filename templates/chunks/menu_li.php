<?php if(!$security || $security == $user['role']): ?>
<li class="nav-item Home <?php if ($podmenu) { echo 'dropdown'; } ?>">
    <a class="nav-link Home <?php if ($podmenu) {echo 'dropdown-toggle'; } ?>"
        
        href="<?= $menuItem['href'] ?? ''; ?>"
    
        <?php 
        if ($podmenu) { echo 'id="dropdown'.$i.'" data-toggle="dropdown"';} 
        ?>
    >
        <?php echo $menuItem['name']; ?>                           
    </a>
    <?php if ($podmenu){ ?>
        <div class="dropdown-menu" aria-labelledby="<?php echo 'dropdown'.$i; ?>">
                <?php 
                    foreach ($podmenu as $punkt) : 
                ?>
            <a class="dropdown-item" href="<?php echo $punkt['href']; ?>">
        <?php echo $punkt['name'] ?></a>
            <?php endforeach; ?>
        </div>
    <?php } ?>
</li>
<?php endif ?>