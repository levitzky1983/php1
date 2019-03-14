<?php
    $pathToDelete = "../public/img/";
    $pathToDeletePreview = "../public/img/preview/";
    delete($pathToDeletePreview);
    delete($pathToDelete);
    echo "<p><a href = '../index.php'>Вернуться</a></p>";
    //Удаление файлов с сервера
    function delete($path) {
        $arr = scandir($path);
        //print_r($arr);
        foreach($arr as $value) {
            if ((pathinfo($value,PATHINFO_EXTENSION))) {
               // echo "файл есть ";
                unlink($path.$value);
                if (file_exists(!$path.$value)) {
                    echo  "Файл $value удален<br>";
                } else {
                    echo "Файл $value не удален<br>";
                }
                
            }
        }
    }


?>