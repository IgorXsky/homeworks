<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo "<table><tr><td>";

foreach($arr as $key => $items){
    echo "Ключи массива: {$key} <br> ";
}
    echo "</td><td>";

foreach($arr as $keys => $value){
    echo "Елементы массива: {$value} <br> ";
}
    echo "</td></tr></table>";