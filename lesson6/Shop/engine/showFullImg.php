<?php
    include "config.php";
    $id = (int)$_GET['id'];
    //print_r ($_GET['id']);
    $sqlProduct = "SELECT * FROM $dtable WHERE id = $id";
    $resultProduct = mysqli_query($connect,$sqlProduct);
    if (mysqli_num_rows($resultProduct) != 0) {
        $row = mysqli_fetch_assoc($resultProduct);
        $str = '<h1>'.$row['title'].'</h1>';
        $str.= '<img  src="'.$pathImg.$row['img'].'" alt="'.$row['title'].'" width = "80%">';
        $arrDescr = explode('•',$row['descr']);
        $str.='<div class="descr">';
        $str.='<p class ="descr_header">'.$arrDescr[0].' :</p>';
        for($i=1;$i<count($arrDescr);$i++) {
            $str.= '<p>-'.$arrDescr[$i].'</p>';
        }
        $str.='</div>';
        $str.='<p class="price">ЦЕНА : '.$row['price'].' межгалактических единиц.</p>';
        $str.='<input class = "button" type="button" name="buy" value="Купить">';
        echo $str;
        mysqli_close($connect);

    }
