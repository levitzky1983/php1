<?php 
function tranliter($string) {
    $converter = [
       ' '=>'_'  
    ];
    return strtr($string,$converter);
}    

$str = "Дело было в Январе,<br>5 апреля,<br>Сухо было во дворе,<br>Грязи по колено.";

echo tranliter($str); 