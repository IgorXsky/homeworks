<?php
/* Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6. */

$var = 123456;
$varArray = str_split($var); // Число в массив
$sumArray = array_sum($varArray);
echo "Сумма чисел {$var} равна {$sumArray}";
