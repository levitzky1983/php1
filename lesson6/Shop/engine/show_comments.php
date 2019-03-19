<?php
    include "config.php";
    //print_r($_POST);
    $fio = strip_tags($_POST['fio']);
    $email = strip_tags($_POST['email']);
    $comment = strip_tags($_POST['comment']);
    $date = $_POST['date'];
    print_r ($_POST);
    $addComment = "INSERT INTO $dtablecomment (fio,email,comment) VALUES ($fio,$email,$comment)";
    $addCommentResult = mysqli_query($connect,$addComment);
    if ($addCommentResult == true) {
        echo "<p>УСПЕХ</p>";
    } else {
        echo "<p>ERROR</p>";
    }
    $sqlSelectAllComment = "SELECT * FROM $dtablecomment ORDER BY date_comment DESC";
    $resultSelectAllComment = mysqli_query($connect, $sqlSelectAllComment); 
    if (mysqli_num_rows($resultSelectAllComment) != 0) {
        while($row = mysqli_fetch_assoc($resultSelectAllComment)) {
            $str .='<div class="user_comments_modul">';
            $str .= '<h3>'.$answer.'</h3>';
            $str .='<p>'.$row['comment'].'</p>';
            $str .='<p>'.$row['fio'].'</p>';
            $str .='<p>'.$row['date'].'</p>';
            $str .='</div>';
            
            echo $str;       
        }
    } else {
        echo "Ничего нету.";
    }
    
    mysqli_close($connect);
    ?> 