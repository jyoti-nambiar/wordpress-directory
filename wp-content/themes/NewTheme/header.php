<?php

?>

<head>
    <?php wp_head(); ?>
</head>


<header class="header">
    <nav class="header__topnav" id="myTopnav">
        <a href="index.html" class="active">My Page</a>
        <?php wp_nav_menu() ?>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>