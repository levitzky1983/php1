<?php 
    $i=0;
    do {
        if ($i%2 == 0){
            echo "$i - 'это четное число<br>";
        } else {
            echo "$i - 'это нечетное число<br>";
        }
        $i++;
    } while ($i<=10);