<?php 
    $territory = [
        "Московская область" => ["Москва", "Зеленоград", "Клин"],
        "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт" ],
        "Рязанская область"=> ["Рязань", "Ряжск", "Касимов"]
    ];
    //var_dump($territory);
    foreach($territory as $region => $cities) {
        echo "$region : <br>";
        for ($i=0; $i<count($cities); $i++) {
            $word = explode("",$cities[$i]);
            if ($word[0]=="К") {
                if ($i == (count($cities)-1)){
                    echo "$cities[$i].<br>"; 
                } else {    
                    echo "$cities[$i], ";
            }    
        }
    }