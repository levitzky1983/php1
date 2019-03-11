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
                <form action="engine/images.php" method = "POST" enctype = "multipart/form-data">
            
                        <p>Выберите файлы для просмотра</p> 
                        <label>
                            <input type="file" name="images[]" accept ="image/*" multiple >
                        </label>
                        <label>
                           <input type="submit" value = "Передать в галерею">
                        </label>
                       
                </form>
                <form action="engine/delete.php" method ="POST">
                    <input type="submit" name="delete" value = "Удалить файлы">
                </form>
            </section>
            <section class="previewSection" >
                <div id = "modal" class="modal">
                    <button id ="close">X</button>
                </div>
                <?php include "engine/preview.php";?>
            </section>
        </div>
        
    </div>
   
    
    
</body>
</html>