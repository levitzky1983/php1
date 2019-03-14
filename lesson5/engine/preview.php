<?php
   
    //Превью формируется через БД
    $preview = "<ul class = 'preview'>";
    if ($connect) {
        print_r ($_GET);
        $idCount = $_GET['id'];
        $count = mysqli_query($connect,"select count from $dtable where id=$idCount");
        echo $count;
        $count++;
        mysqli_query($connect,"update $dtable set count=$count where id=$idCount");
        $dataPreviewRes = mysqli_query($connect,"select * from $dtable");
        while($dataPreview = mysqli_fetch_assoc($dataPreviewRes)) {
            $preview.= "<li><img id =".$dataPreview['id']." class='imagePreview' src=".$pathPreview."preview_".$dataPreview['name']." width='200' height='200' alt=".str_replace('preview_','', $pathPreview.$dataPreview['name'])."></li>";     
        } 
             
    } /*else {
        die (mysqli_error());
    }*/
    $preview.= "</ul>";
?>