<?php 
    $urlHeader = explode('/', $_SERVER['REQUEST_URI']);
?>

<header class="header">
    <div class="container">
        <div> 
            <!-- <div class="phoneWrapper">
                <div class="phone"> </div>
                <a style="display: inline-block; font-weight: bold;"> +78005553535 </a>
            </div> -->
            
            <h1 class="header__heading"> <a href="/"> Строим вместе! </a> </h1> 
        </div>

        <ul class="header__menu">
            <div class="dropdown__wrapper"> 
                <p class="dropdown__hover  <?=($urlHeader[2] == 'category') ? 'active' : ''?>"> Категории </p>
                <ul class="menu__dropdown">
                <?php foreach(DB::queryAll("SELECT * FROM `category`;") as $category)
                { ?>
                    <li class="dropdown__item"> <a href="/<?=$category['category_techname'].'/'.'category'.'/'.$category['id_category']?>"> <?=$category['category_name']?> </a> </li>
                <?php } ?>
                </ul> 
            </div>

            <li class="menu__item <?=($urlHeader[1] == '' || $urlHeader[1] == 'index') ? 'active' : ''?>"> <a href="/"> Все статьи </a> </li>
            <li class="menu__item <?=($urlHeader[1] == 'about') ? 'active' : ''?>" > <a href="/about.php"> О сайте </a> </li>
        </ul>
    </div>
</header>