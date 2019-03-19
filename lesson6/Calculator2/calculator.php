<?
    function sum($x,$y) {
        return $x+$y;
    }
    function sub($x,$y) {
        return $x-$y;
    }
    function mult($x,$y) {
        return $x*$y;
    }
    function div($x,$y) {
           return ($y!=0)?($x/$y):"error";   
    }


    $a = $_POST['param1'];
    $b = $_POST['param2'];
    $op = $_POST['op'];
    if  (!isset($a)||!(isset($b) )) {
        $result = "";
    } elseif (is_numeric($a) && is_numeric($b)) {
        switch ($op) {
            case "+" :  
            $result = sum($a,$b);
            break; 
            case "-" :  
            $result = sub($a,$b);
            break;
            case "*" :  
            $result = mult($a,$b);
            break;
            case "/" :  
            $result = div($a,$b);
            break; 
            default :
            $result = "Выберите операцию";
            break;  
        }
    } else {
        $result = "Один из параметров не число";
    }

    //print_r($_POST);
    //echo $result;
    