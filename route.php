<?php
    $isCategory = false;
    $isArticle = false;

    define('URL', $_SERVER['HTTP_HOST']);
    $url = explode('/', $_SERVER['REQUEST_URI']);

    if ($url[2] === 'article')
    {
        require_once(__DIR__ . '/php/Db.php');
        $id = $url[3];

        $article = DB::query("SELECT * FROM `articles` WHERE `id_article` = $id;");
        ($article == null) ? header("Location: /404.php") :  $isArticle = true;
    }
    else if ($url[2] === 'category')
    {
        require_once(__DIR__ . '/php/Db.php');
        $categoryName = DB::query("SELECT * FROM `category` WHERE `id_category` = $url[3];")['category_name'];
        ($categoryName == null) ? header("Location: /404.php") :  $isCategory = true;
    }
    else
    {
        header("Location: /404.php");
    }

    $title = ($isArticle) ? $article['article_title'] : $categoryName;
?>
   

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$title?> </title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/lib/typed.min.js" defer></script>
    <script src="/js/index.js"defer></script>
</head>
<body>
    <? include('./components/Header/header.php'); ?>

    <?php if ($isCategory)
    { ?>
        <div class="textAnimated">
            <div class="container">
                <p id="typeText"></p>
                <p id="temptext"> <?=$title?> </p>
            </div>
        </div>
    <?php }
    ?>
    <div class="content">
    
    <?php if ($isArticle)
    { ?>
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
    <?php } ?>

    <?php if ($isCategory)
    { ?>
        <div class="container" id="forArticles">
            <?php
                
                foreach(DB::queryAll("SELECT * FROM `articles` WHERE `id_category` = $url[3];") as $article)
                { ?>
                    <a href='<?=$article['article_url'].'/'.'article'.'/'.$article['id_article']?>'>
                        <div class='content__article'>
                        <img class='article__image' src='<?=$article['article_img']?>'>
                            <div class='article__textContent'> 
                                <span> <?=$article['article_title']?> </span>
                                <p> <?=$article['article_pretext']?> </p>
                            </div>
                        </div> 
                    </a>
                <?php }
            ?>
        </div>
    <?php } ?>

    </div>

    <? include('./components/Footer/footer.php'); ?>
</body>
</html>


