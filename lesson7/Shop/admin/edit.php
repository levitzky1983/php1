<?php
    include_once "../engine/config.php";
    //print_r ($_GET);
    $id_product = (int)($_GET['id']);
    $sqlGetProduct = "SELECT * FROM $dtable WHERE id=$id_product";
    $res = query_get_product($connect,$sqlGetProduct);
   // print_r($res);
    $str = "<form action='#' method='POST'>";
    $str.= "<p name = 'id' > ID товара :".$res['id']."</p>";
    $str.=" <p> Title : </p>";
    $str.="<input type='text' name='title' value='".$res['title']."'>";
    $str.=" <p> Price : </p>";
    $str.="<input type='number' name='price' value='".$res['price']."'>";
    $str.=" <p> img : </p>";
    $str.="<input type='text' name='img' value='".$res['img']."'>";
    $str.=" <p> Info : </p>";
    $str.="<textarea  name='info'>".$res['info']."</textarea>";
    $str.=" <p> Descr : </p>";
    $str.="<textarea  name='descr'>".$res['descr']."</textarea>";
    $str.="<p><input type='submit' name='submit' value='SAVE'></p>";
    $str.= "</form>";
    
    if ($_POST['submit']) {
        $title = strip_tags($_POST['title']);
        $price = (int)($_POST['price']);
        $img = strip_tags($_POST['img']);
        $info = strip_tags($_POST['info']);
        $descr = strip_tags($_POST['descr']);
        $sqlUpdateProduct = "UPDATE $dtable SET title='".$title."',price='".$price."',img='". $img."',info='".$info."',descr='".$descr."' WHERE id=$id_product";
    //$resUpdate = mysqli_query($connect,$sqlUpdateProduct);
        $resUpdate = query_update($connect,$sqlUpdateProduct);
    }
    echo $str;
    echo $sqlUpdateProduct;
    mysqli_close($connect);

