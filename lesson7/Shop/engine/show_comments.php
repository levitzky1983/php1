<?php
    include_once "config.php";
    if ($_POST['submit']) {
        $fio = strip_tags($_POST['fio']);
        $email = strip_tags($_POST['email']);
        $comment = strip_tags($_POST['comment']);
        $date = $_POST['date'];
        $addComment = "INSERT INTO $dtablecomment (fio,email,comment,date_comment) VALUES ('$fio','$email','$comment','$date')";
        query_add($connect,$addComment);
    }
    $sqlSelectAllComment = "SELECT * FROM $dtablecomment ORDER BY id_comment DESC";
    $comments = query_select($connect,$sqlSelectAllComment);
    //print_r($comments);
    
    foreach($comments as $comment) {
        $str ='<div class="flex user_comments_modul">';
        $str .='<p class="user_comment">'.$comment['comment'].'</p>';
        $str .='<p class ="user_fio">'.$comment['fio'].'</p>';
        $str .='<p class ="user_date">'.$comment['date_comment'].'</p>';
        $str .='</div>';   
        echo $str;    
    }
    mysqli_close($connect);
?> 