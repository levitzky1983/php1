<?php
       
        //var_dump ($_POST['send']);
        //print_r ($_FILES);
        if (isset($_POST['send'])) {
            for($i = 0; $i < count($fileNames); $i++) {        
                if ($_FILES['images']['error'][$i]) {
                    $message .= 'Загрузка не удалась.<br>';
                } elseif ($_FILES['images']['size'][$i] > 10000000) {
                    $message .= 'Файл слишком большой.<br>';
                } elseif(!nameСomparison($fileNames[$i],$pathToMove)) {
                    if(move_uploaded_file($fileNamesTmp[$i],$pathToMove.$fileNames[$i])) {
                        if ($connect) {
                            //Если соединение успешно, то добавляем в БД новую строку с данными
                            $result = mysqli_query($connect, "INSERT INTO ".$dtable." (addres,name,size,count) VALUES ('$pathToMove','$fileNames[$i]',' $fileSizes[$i]','0')");  
                            if ($result) {
                                $messageDb = "Данные успешно добавлены в БД.";
                            } else {
                                $messageDb = "Данные не добавлены в БД.";
                            }
                        } else {
                            $messageDb = "Соединение с БД не удалось : ".mysqli_error();
                            die (mysqli_error());
                        }
                        $message .= "Файл :".$fileNames[$i]." успешно передан в галерею.<br>";
                        imageResize($pathPreview."preview_".$fileNames[$i], $pathToMove.$fileNames[$i], 200, 200, 75);
                    } else {
                        $message .=  "Загрузка не удалась.<br>";
                    }
                } else {
                    $message .= " Файл с именем ".$fileNames[$i]." уже существует.<br>";
                }
                 
            }   
        } else {
            $message .= "Ничего не передано.<br>";
        }
        $arrImages = array_slice(scandir($pathToMove),2);
       
       
        //Проверка на совпадение имен файлов
        function nameСomparison($name,$path) {
            $arrName = scandir($path);
            if (in_array($name,$arrName)) {
                return true; 
            }
            return false;    
        }

        //Изменение размера картинки
        function imageResize($outfile,$infile,$neww,$newh,$quality) {
            $im=imagecreatefromjpeg($infile);
            $im1=imagecreatetruecolor($neww,$newh);
            imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
            imagejpeg($im1,$outfile,$quality);
            imagedestroy($im);
            imagedestroy($im1);
        }
?>