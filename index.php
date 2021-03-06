<?php 
    require_once(__DIR__ . '/php/Db.php');
    define('URL', $_SERVER['HTTP_HOST']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Строим вместе - главная </title>
    <meta name="description" 
    content="Мы - пишем статьй про строительство.">

    <link rel="stylesheet" href="/css/main.css">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <script src="./js/lib/typed.min.js" defer></script>
    <script src="./js/index.js" defer></script>
</head>
<body>
    <? include('./components/Header/header.php'); ?>

    <div class="textAnimated">
        <div class="container">
            <p id="typeText"></p>
        </div>
    </div>
    
    <div class="content">
        <div class="container" id="forArticles">
            <?php
                foreach(DB::queryAll("SELECT * FROM `articles`;") as $article)
                { ?>
                    <a href='/<?=$article['article_url'].'/'.'article'.'/'.$article['id_article']?>'>
                        <div class='content__article'>
                        <img class='article__image' alt='изображение статьй' src='<?=$article['article_img']?>'>
                            <div class='article__textContent'> 
                                <span> <?=$article['article_title']?> </span>
                                <p> <?=$article['article_pretext']?> </p>
                            </div>
                        </div> 
                    </a>
                <?php }
            ?>
        </div>
    </div>
    
    <? include('./components/Footer/footer.php'); ?>
</body>
</html>