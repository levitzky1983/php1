<?php
   
    include_once "resize.php";
    include_once "config.php";
    
    $sqlSelectAll = "SELECT * FROM $dtable";
    $catalog = query_select($connect,$sqlSelectAll);
    if($catalog) {
        foreach($catalog as $good) {
            $str ='<div class="product flex">';
            $str.='<div class="product_name">';
            $str.='<a href="showProduct.php?id='.$good['id'].'" class="link"><h3>'.$good['title'].'</h3>';
            $str.='<img class ="image_prev" src="'.$pathPrevImg.$good['img'].'" alt="'.$good['title'].'"></a>';
            $str.='<p class ="price">Цена : '.$good['price'].'</p>';
            $str.='</div>';
            $str.='<p class ="descr">'.$good['info'].'</p>';
            $str.='</div>';
            echo $str;       
        }
    } else {
        echo "<p> Каталог пуст.</p>";
    } 
    mysqli_close($connect);
?> 
