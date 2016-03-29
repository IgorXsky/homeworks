<?php
/* Создать генератор случайных таблиц.
Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число. */



function some_table($rov = '5', $cols = '5'){

    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    echo "<table>";
        for($x=0; $x < $rov; $x++){
            echo "<tr>";
            for($y=0; $y < $cols; $y++){
                $col = $colors[array_rand($colors,1)];
                echo "<td style = 'background-color: $col'>" . rand(1,99) . "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
}

some_table(9,9);