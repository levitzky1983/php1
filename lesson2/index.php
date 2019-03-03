<?php
//ПЕРВОЕ ЗАДИНИЕ
    function sum($x,$y) {
        return 'Сумма чисел '.$x.' и '.$y.' равна: '.($x+$y).'<br><hr>';
    }
    function sub($x,$y) {
        return 'Разность чисел '.$x.' и '.$y.' равна: '.($x-$y).'<br><hr>';
    }
    function mult($x,$y) {
        return 'Произведение чисел '.$x.' и '.$y.' равно: '.$x*$y.'<br><hr>';
    }

    $a = rand(-100,100);
    $b = rand(-100,100);
    
    if (is_numeric($a) && is_numeric($b)) {
        if ($a>= 0 && $b>=0) {
            echo sub($a,$b);
        }
        elseif ($a<0 && $b<0) {
            echo mult($a,$b);
        }
        elseif (($a>= 0 && $b<0)||($a< 0 && $b>=0)){
            echo sum($a,$b);
        }
    } else {
        echo 'Переменная а или b не являются числом<br><hr>';
    } 

    //ВТОРОЕ ЗАДАНИЕ
    $c = rand(0, 15);
    switch($c){
        case 0:
            echo $c++.' ';       
        case 1:
            echo $c++.' '; 
        case 2:
            echo $c++.' ';       
        case 3:
            echo $c++.' '; 
        case 4:
            echo $c++.' ';       
        case 5:
            echo $c++.' ';
        case 6:
            echo $c++.' ';       
        case 7:
            echo $c++.' '; 
        case 8:
            echo $c++.' ';       
        case 9:
            echo $c++.' '; 
        case 10:
            echo $c++.' ';       
        case 11:
            echo $c++.' ';
        case 12:
            echo $c++.' '; 
        case 13:
            echo $c++.' ';       
        case 14:
            echo $c++.' '; 
        case 15:
            echo $c++.' ';         
        default:
            echo '<hr>';  
    }
// ТРЕТЬЕ ЗАДИНИЕ ФУНКЦИЯ ДЕЛЕНИЯ. ОСТАЛЬНОЕ СМ. ЗАДАНИЕ ПЕРВОЕ
function div($x,$y) {
    if ($y!=0) {
        return  'Результат деления чисел '.$x.' и '.$y.' равно: '. $x/$y.'<br><hr>';
    } else{
        return  'Делитель равен нулю, деление невозможно <br><hr>';
    }    
}
$d = rand(-5,5);
echo div($a,$d);
// ЧЕТВЕРТОЕ ЗАДАНИЕ
$operationArray = array('+','-','*','/');
$operation = $operationArray[rand(0,3)];
$d = rand(-10,10);
$e = rand(-10,10); 
function mathOperation($x,$y,$operation) {
    switch($operation) {
        case '+':
            echo sum($x,$y);
            break;
        case '-':
            echo sub($x,$y);
            break;
        case '*':
            echo mult($x,$y);
            break;
        case '/':
            echo div($x,$y);
            break;
        default:
            echo 'Что-то пошло не так<br><hr>';     
    }
}   
mathOperation($d,$e,$operation);
// ПЯТОЕ ЗАДАНИЕ СМ УРОК 1
// ШЕСТОЕ ЗАДАНИЕ
function power($val, $pow) {
    $currentPow = $pow;
    $currentVal = $val;
    if ($pow == 0){
        return 1;
    } elseif ($pow == 1) {
        return $val;
    } else {
        $pow--;
        return power($val, $pow)*$val;
    }
}
$f = rand(0,10);
$g = rand(0,5);
echo 'Результат возведения числа '.$f.' в степень '.$g. ' равно: '.power($f,$g).'<br><hr>';
// CЕДЬМОЕ ЗАДАНИЕ
function currentTime() {
    $timeHours = date('H');
    $timeMinutes = date('i');
    $reg1 = "/[0-5][05-9]/";
    $reg2 = "/[02-5]1/";
    $reg3 = "/1[0-9]/";
    if ($timeHours==1 || $timeHours==21 ) {
        $timeHours =  date('H').' час';
    } elseif (($timeHours>1 && $timeHours<5) || ($timeHours>21 && $timeHours<25)) {
        $timeHours =  date('H').' часа';
    } else {
        $timeHours =  date('H'). ' часов';
    }

    if (preg_match($reg1,$timeMinutes) || preg_match($reg3,$timeMinutes)) {
        $timeMinutes =  date('i').' минут';
    } elseif (preg_match($reg2,$timeMinutes)) {
        $timeMinutes =  date('i').' минута';
    } else {
        $timeMinutes =  date('i').' минуты';
    }
    return 'Текущее время '.$timeHours.' : '.$timeMinutes.'<br><hr>';
}
echo currentTime();




