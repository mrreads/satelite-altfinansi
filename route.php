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
?>
   

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <? include('./components/Header/header.html'); ?>

    <?php
        print_r($article);
    ?>

    <? include('./components/Footer/footer.html'); ?>
</body>
</html>


