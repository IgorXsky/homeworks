<?php
/* Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами. */

$numbers = 9;//количество елементов в массиве

$arr = array();

for ($i=0; $i <= $numbers; $i++){
    $arr[$i] = rand(1, 24);
 }

echo "<pre>";
print_r($arr);
echo "</pre>";

$min = min($arr);
$max = max($arr);

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo "<pre>";
print_r($arr);
echo "</pre>";
