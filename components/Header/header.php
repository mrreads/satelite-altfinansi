<?php 
    $url = explode('/', $_SERVER['REQUEST_URI'])[1];
?>

<header class="header">
    <div class="container">
        <h1 class="header__heading"> <a href="/"> Строим вместе! </a> </h1>

        <ul class="header__menu">
            <li class="menu__item <?=($url == '' || $url == 'index') ? 'active' : ''?>"> <a href="/"> Все статьи </a> </li>
            <li class="menu__item <?=($url == 'about') ? 'active' : ''?>" > <a href="/about.php"> О сайте </a> </li>
        </ul>
    </div>
</header>