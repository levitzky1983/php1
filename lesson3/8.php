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
            $word = mb_substr($cities[$i],0,1);
            if ($word=="К") {
                if ($i == (count($cities)-1)){
                    echo "$cities[$i].<br>"; 
                } else {    
                    echo "$cities[$i], ";
                }    
            }
        }
    }