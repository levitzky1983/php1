<?php
    $path = "public/img/preview/";
    $arrPreview = scandir($path);
    echo "<ul class = 'preview'>";
    for ($i = 2; $i<count($arrPreview); $i++) {
        echo "<li><img class='imagePreview' src=".$path.$arrPreview[$i]." width='200' height='200' alt=".str_replace('preview_','', $arrPreview[$i])."></li>";  
    }
    echo "</ul>";
?>