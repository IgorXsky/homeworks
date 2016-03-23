<?php

$arr = [26, 17, 136, 12, 79, 15];
$result = '';

foreach($arr as $value){
    $result += $value*$value;
}

echo "Сумма квадратов элементов массива равна $result";