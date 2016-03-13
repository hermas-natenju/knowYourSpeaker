<?php
    $arr_dir = explode("/", str_replace('\\', '/', dirname(__FILE__)));
    $arr_dir[3] == 'files' ? $index = '../index.php' : $index = 'index.php';

?>
<header class="page-header">
    <h1><a href="<?= $index ?>">
            <img width="60" src="<?= $index == 'index.php' ? '../brand-img.png' : 'brand-img.png'; ?>" alt="KYS">
        </a>
        KYS
        <small>&Tab; Know Your Speaker, an exercise to persuade</small>
    </h1>
</header>