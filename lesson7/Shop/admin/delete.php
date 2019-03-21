<?php
    include_once "../engine/config.php";
    $id = (int)($_GET['id']);
    
    $sqlNameFIleForDelete = "SELECT img FROM $dtable WHERE id = $id";
    $img  = query_get_product($connect,$sqlNameFIleForDelete);
    $fileTodelete = '../'.$pathImg.$img['img'];
    $fileTodeletePrev = '../'.$pathPrevImg.$img['img'];
    //echo $fileTodelete;
    //echo $fileTodeletePrev;
    //print_r($img);
//удаляем картинки
    if(file_exists($fileTodelete)&&file_exists($fileTodeletePrev)) {
        if(unlink($fileTodelete)&&unlink($fileTodeletePrev)) {
            $str = "Файлы изображений удалены. ";
        } else {
            $str = "Файлы изображений не удалены. ";            
        }
    } else {
        $str = "Файлы изображений не сущесвуют. ";          
    }
//удаляем из БД
    $sqlDelete = "DELETE FROM $dtable WHERE id=$id";
    query_update($connect,$sqlDelete);
//Проверяем удалено ли из БД    
    $res = mysqli_query($connect,$sqlNameFIleForDelete);
    if (mysqli_num_rows($res) > 0) {
        $str.=" Данные из БД не удалены.";
    } else {
        $str.=" Данные из БД  удалены.";
    }
    mysqli_close($connect);   
 
