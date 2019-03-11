<?php
        $pathToMove = "../public/img/";
        $fileNamesTmp = $_FILES["images"]["tmp_name"];
        $fileNames = $_FILES["images"]["name"];

        for($i = 0; $i < count($fileNames); $i++){
            if(!nameСomparison($fileNames[$i],$pathToMove)) {
                if(move_uploaded_file($fileNamesTmp[$i],$pathToMove.$fileNames[$i])) {
                    echo "<p>Файл :".$fileNames[$i]." успешно передан в галерею.</p>";
                    imageresize($pathToMove."/preview//"."preview_".$fileNames[$i], $pathToMove.$fileNames[$i], 200, 200, 75);
                } else {
                     echo "<p>Загрузка не удалась.</p>";
                }
            } 
        } 
        echo "<p><a href = '../index.php'>Вернуться</a></p>";
        //Проверка на совпадение имен файлов
        function nameСomparison($name,$path) {
            $arrName = scandir($path);
            if (in_array($name,$arrName)) {
                echo "<p> Файл с именем $name уже существует";
                return true; 
            }
            return false;    
        }

        //Изменение размера картинки
        function imageresize($outfile,$infile,$neww,$newh,$quality) {
            $im=imagecreatefromjpeg($infile);
            $im1=imagecreatetruecolor($neww,$newh);
            imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
            imagejpeg($im1,$outfile,$quality);
            imagedestroy($im);
            imagedestroy($im1);
        }
?>