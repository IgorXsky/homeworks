<?php

//С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$en = [];
$ru = [];

    foreach($arr as $key => $item){
        $en[] = $key;
        $ru[] = $item;
    }