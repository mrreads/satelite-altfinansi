<?php
    define('URL', $_SERVER['HTTP_HOST']);
    
    $url = explode('/', $_SERVER['REQUEST_URI']);
    
    if ($url[2] === 'article')
    {
        require_once(__DIR__ . '/php/Db.php');
        $id = $url[3];

        $article = DB::query("SELECT * FROM `articles` WHERE `id_article` = $id;");

        if (!$article)
        {
            header("Location: /404.php");
        }
    }
    else
    {
        header("Location: /404.php");
    }
?>
   

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$article['article_title']?> </title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <? include('./components/Header/header.php'); ?>

    <div class="content">
        <div class="container" id="forArticle">
            <a href="/" class="back"> ОБРАТНО К СПИСКУ СТАТЕЙ </a>

            <div class="content__article">
                <h1> <?=$article['article_title']?> </h1>
                <img class="article__image" src="<?=$article['article_img']?>">
                <div class="article__textContent">
                    <p> <?=$article['article_text']?> </p>
                </div>
            </div>
        </div>
    </div>

    <? include('./components/Footer/footer.html'); ?>
</body>
</html>


