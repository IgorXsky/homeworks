<?php
/* Вывести таблицу умножения с помощью двух циклов for */

function math_table($strx = '9', $sty = '9'){

    echo "<table border='1'>";

    for($x=1; $x <= $strx; $x++){
        echo "<tr>";
        for($y=1; $y <= $sty; $y++){
            echo "<td>" .$x*$y. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}

math_table(9,9);