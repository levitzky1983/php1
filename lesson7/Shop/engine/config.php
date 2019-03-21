<?php   
    $pathImg = "public/img/upload/";
    $pathPrevImg = "public/img/upload/prev/";

    $sqlserver = "localhost";
    $sqluser = "root";
    $sqlpass = "";
    $sqlbase = "planets";
    $dtable = "shop";
    $dtablecomment = "comments";

    $connect = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);
    if (!$connect) {
        echo "Нет подключения к БД.<br>";
        echo "Код : " . mysqli_connect_errno();
        echo "<br>Ошибка : " . mysqli_connect_error();
        exit;
    }

    function query_select($connect,$query) {
        $res = mysqli_query($connect,$query);
        $data = array();
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] =$row; 
            }
            return $data;
        }
        return die(mysqli_error($connect));
    }
    function query_add($connect,$query) {
        $result = mysqli_query($connect,$query);
        if(!$result){
            die(mysqli_error($connect));
        }else{
            header("Location: ../comments.php");
        }
    }
    
    function query_update($connect,$query) {
        $result = mysqli_query($connect,$query);
        if(!$result){
            die(mysqli_error($connect));
           // header("Location: admin.php");
        }else{
            header("Location: admin.php");
        }
    }    

    function query_get_product($connect,$query) {
        $res = mysqli_query($connect,$query);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data =$row; 
            }
            return $data;
        }
        return die(mysqli_error($connect));
    }

    function nameСomparison($name,$path) {
        $arrName = scandir($path);
        if (in_array($name,$arrName)) {
            return true; 
        }
        return false;    
    }


    



