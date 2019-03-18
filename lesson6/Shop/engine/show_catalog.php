<?php
    include "config.php";
    include "resize.php";

    $sqlSelectAll = "SELECT * FROM $dtable";
    $resultSelectAll = mysqli_query($connect, $sqlSelectAll);
    if (mysqli_num_rows($resultSelectAll) > 0) {
        while($row = mysqli_fetch_assoc($resultSelectAll)) {
            $str ='<div class="product flex">';
            $str.='<div class="product_name">';
            $str.='<a href="showProduct.php?id='.$row['id'].'" class="link"><h3>'.$row['title'].'</h3>';
            $str.='<img class ="image_prev" src="'.$pathPrevImg.$row['img'].'" alt="'.$row['title'].'"></a>';
            $str.='<p class ="price">Цена : '.$row['price'].'</p>';
            $str.='</div>';
            $str.='<p class ="descr">'.$row['info'].'</p>';
            $str.='</div>';
            echo $str;       
        }
    } else {
        echo "Ничего нету.";
    }
    
    mysqli_close($connect);
    ?> 
