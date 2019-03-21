<?php
    include_once "../engine/config.php";

    $sqlSelectAll = "SELECT * FROM $dtable";
    $catalog = query_select($connect,$sqlSelectAll);
    if($catalog) {
        foreach($catalog as $good) {
            $str ='<div class="flex product ">';
            $str.='<div class="product_name">';
            $str.='<a href="../showProduct.php?id='.$good['id'].'" class="link"><h3>'.$good['title'].'</h3>';
            $str.='<img class ="image_prev" src="../'.$pathPrevImg.$good['img'].'" alt="'.$good['title'].'"></a>';
            $str.='<p class ="price">Цена : '.$good['price'].'</p>';
            $str.='</div>';
            $str.='<div class="link_admin_div"><p class ="descr">'.$good['info'].'</p>';
            $str.='<ul><li><a class="link link_admin" href="edit.php?id='.$good['id'].'">Редактировать</a></li>';
            $str.='<li><a class="link link_admin" href="delete.php?id='.$good['id'].'">Удалить</a></li></ul></div>';
            $str.='</div>';
            echo $str;       
        }
    } else {
        echo "<p> Каталог пуст.</p>";
    } 
    mysqli_close($connect);