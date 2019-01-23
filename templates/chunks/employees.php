<ul>
    <?php
    foreach($employees as $employee):
        ?>
        <li>
            <strong><?= $employee['id_employee'] ?></strong>
            <?= $employee['first_name'] ?>
            <?= $employee['middle_name'] ?>
            <?= $employee['last_name'] ?>
        </li>
    <?php
    endforeach;
    ?>
</ul>