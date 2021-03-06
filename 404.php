<?php require_once(__DIR__ . '/php/Db.php'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 404 - страница не найдена</title>
    <meta name="description" 
    content="Строим вместе: cтраница не найдена.">
    <link rel="stylesheet" href="/css/main.css">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <script src="/js/lib/typed.min.js" defer></script>
    <script src="/js/index.js" defer></script>
</head>
<body>
    <? include('./components/Header/header.php'); ?>
    
    <div class="content" style="display: flex; justify-content: center; align-items: center;">
        <div class="container" style="column-count: 1; height: 100%; grid-template-columns: 1fr;">

            <h3 style="font-size: 4vw; text-align: center; color: #000000;"> СТРАНИЦА ЕЩЕ СТРОИТСЯ</h3>
            
        </div>
    </div>

    <? include('./components/Footer/footer.php'); ?>
</body>
</html>