<?php
    $pathToMove = "public/img/";
    $pathPreview= "public/img/preview/";
    $fileNamesTmp = $_FILES["images"]["tmp_name"];
    $fileNames = $_FILES["images"]["name"];
    $fileSizes = $_FILES["images"]["size"];
    $message = '';
    $messageDb='';

    //БД
    $server = "localhost";
    $login = "root";
    $pass = "";
    $db = "lesson5";
    $dtable = "gallery";
    $connect = mysqli_connect($server,$login,$pass,$db);
   

    //запросы
    //$sql = "select * from gallery";
    //$sqlAdd = "INSERT INTO ".$dtable." (addres,name,size,count) VALUES ('$pathToMove','$fileNames[$i]',' $fileSizes[$i]','0')";
    //$sqlView
    //$sqlSort