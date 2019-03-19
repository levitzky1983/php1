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
            <li class="menu_li"><a href="catalog.php" class="link">Каталог</a></li>
            <li class="menu_li"><a href="#" class="link">Контакты</a></li>
            <li class="menu_li"><a href="comments.php" class="link" >Отзывы</a></li>
        </ul>
        <div class="cart">корзина</div>
        <div class="admin">админка</div>
    </header></div>
    <div class="container">
        
        <div class="comments">
            <form class = "form_user_comment" action="#" method = "POST">
                <input type="hidden" name ="date" value ="<?php echo($date = date("m.d.y"))?>">
                <label for="fio">Введите Ваше имя : </label>
                <input type="text" id = 'fio' name="fio" placeholder ="Иванов Иван Иванович" required>
                <label for="email">Почта : </label>
                <input type="email" id="email" name="email" placeholder="user@gmail.com">
                <p>Ваш коментарий : </p>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Не более 300 символов" maxlength="300" required ></textarea>
                <div class="submit_reset flex"><input type="submit" value = "Отправить">
                <input type="reset" value = "Сброс"></div>
            </form>
            <div class="user_comments"><?php include "engine/show_comments.php"?></div>
        </div>  
        <footer>footer</footer>
    </div>
   
</body>
</html>