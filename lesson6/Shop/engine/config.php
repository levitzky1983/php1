<?php   
    $pathImg = "public/img/upload/";
    $pathPrevImg = "public/img/upload/prev/";

    $sqlserver = "localhost";
    $sqluser = "root";
    $sqlpass = "";
    $sqlbase = "planets";
    $dtable = "shop";
    $dtablecomment = "comments";

    $connect = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);
    if (!$connect) {
        echo "Нет подключения к БД.<br>";
        echo "Код : " . mysqli_connect_errno();
        echo "<br>Ошибка : " . mysqli_connect_error();
        exit;
    }

    



