<?php
    $nickname=" Alexander!";
    $hello="Привет, ";
    $hellow="Продолжаем наш курс по обучению PHP";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Получение данных из HTML. Методы GET и POST</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

    <header class="title">
        <?php
            echo "<h3>", $hello . $nickname, "</h3>";
            echo "<h4>", $hellow, "</h4>";
        ?>
        <h2>Получение данных из HTML. Методы GET и POST.</h2>

    </header>
    <div class="text__lesson">
        
    </div>
    
    
    
</body>
</html>