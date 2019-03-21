<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="public/js/script.js"></script>
</head>
<body>
    <div class="fix"><header class="flex">
        <i>Иконка</i>
        <ul class="menu flex">
            <li class="menu_li"><a href="index.php" class="link"> Главная</a></li>
            <li class="menu_li"><a href="#" class="link">Каталог</a></li>
            <li class="menu_li"><a href="#" class="link">Контакты</a></li>
            <li class="menu_li"><a href="comments.php" class="link" >Отзывы</a></li>
        </ul>
        <div class="cart">корзина</div>
        <div class="admin"> <a href="admin/admin.php"> админка(пока ссылка)</a></div>
    </header></div>
    <div class="container">
        
        <div class="products">
            <?php include "engine/show_catalog.php";?>
        </div>  
        <footer>footer</footer>
    </div>
 
    
</body>
</html>    