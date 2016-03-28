<?php

//Вывести таблицу умножения

$strx = 10;
$sty = 10;

echo "<table border='1'>";

for($x=1; $x < $strx; $x++){
    echo "<tr>";
    for($y=1; $y < $sty; $y++){
        echo "<td>" .$x*$y. "</td>";
    }
    echo "</tr>";
}

echo "</table>";


