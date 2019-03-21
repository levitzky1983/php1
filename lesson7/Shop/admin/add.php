<?php
    include_once "../engine/config.php";
    //include_once "../engine/resize.php";

    $str = "<form action='#' method='POST' enctype='multipart/form-data'>";
    //$str.= "<p name = 'id' > ID товара :".$res['id']."</p>";
    $str.=" <p> Введите название : </p>";
    $str.="<input type='text' name='title'>";
    $str.=" <p>Введите цену : </p>";
    $str.="<input type='number' name='price'>";
    $str.=" <p> Выберите файл картинку : </p>";
    $str.="<input type='file' name='img' accept='image/*'  >";
    $str.=" <p> Краткое описание : </p>";
    $str.="<textarea  name='info'></textarea>";
    $str.=" <p> Полное описание : </p>";
    $str.="<textarea  name='descr'></textarea>";
    $str.="<p><input type='submit' name='submit' value='Добавить'></p>";
    $str.= "</form>";
    print_r($_POST);
    print_r($_FILES);

    echo $str;

    $fileNamesTmp = $_FILES["img"]["tmp_name"];
    $fileName = $_FILES["img"]["name"];
    $fileSize =$_FILES["img"]["size"];
    $title = strip_tags($_POST['title']);
    $price = (int)($_POST['price']);
    $info = strip_tags($_POST['info']);
    $descr = strip_tags($_POST['descr']);

    if($_POST['submit']) {
        if($_FILES['img']['error']) {
            $message .= "Загрузка не удалась.";
        } elseif($_FILES['images']['size'] > 10000000) {
            $message .= 'Файл слишком большо.';
        } elseif (nameСomparison($fileName,'../'.$pathImg)) {
            $message .= 'Файл с таким именем уже существует.';
        }   elseif (move_uploaded_file($fileNamesTmp,'../'.$pathImg.$fileName)) {
                $addsql = "INSERT INTO  $dtable (title,price,img,info,descr) VALUES ('$title','$price','$fileName','$info',' $descr')";
                $result = mysqli_query($connect,$addsql);
                if(!$result){
                    $message .= 'Товар не добавлен в БД.';
                    die(mysqli_error($connect));
                } else {
                    $message .= 'Товар добавлен в БД.'; 
                }
            }
    }
    echo $addsql;
    echo $message;