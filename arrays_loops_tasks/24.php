<?php
/* Вам нужно разработать программу, которая считала бы количество вхождений
какойнибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза. */

function how_many($x, $y){
    $res = substr_count($x, $y);
    echo "Цифра {$y} встречаэться в числе {$x} - {$res} раза";
}

how_many('442158755745','5' );



