<?php

echo "<table><tr>";
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++)
        echo "<td> $x*$y </td>";
    if ($x != 10) echo "</tr><tr>";    };
echo "</tr></table>";

