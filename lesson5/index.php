<?php
    include_once 'engine/config.php';
    include_once 'engine/preview.php';
    include_once 'engine/images.php';
   //$res = mysqli_query($connect,$sql);
   //print_r($res);
?>
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

    <div class="container">
        <header>
            <h1>Фотогалерея</h1>
        </header>
        <div class="main">
            <section class="formSection">
                <form action="#" method = "POST" enctype = "multipart/form-data">
            
                        <p>Выберите файлы для просмотра</p> 
                        <label>
                            <input type="file" name="images[]" accept ="image/*" multiple >
                        </label>
                        <label>
                           <input type="submit" name='send' value = "Передать в галерею">
                        </label>  
                        <span><?=$message?></span><br>
                        <span><?=$messageDb?>
                </form>
            </section>
            <section class="previewSection" >
                <div id = "modal" class="modal"></div>
                <?=$preview?>
            </section>
        </div>
    </div>  
</body>
</html>
