<?php
/* Написать функцию insert($connection, $table, $data).
Функция должна добавлять в таблицу $table новую запись с данными из
массива $data где ключ массива это поле (колонка),
а значение массива это сама запись. */

$connection = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($connection));
mysqli_select_db($connection, 'homework') or die('Could not select database');
$data = ['id' => '1',
        'name' => 'Igor',
        'surname' => 'Pavliuk',
        ];

function insert($connection, $table, $data)
{
    $keys = "'id', 'name', 'value'";
    $values = "'{$data['id']}', '{$data['name']}', '{$data['surname']}'";
    $query = "INSERT INTO {$table}  ( {$keys} )
              VALUES ( {$values} )";
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}

insert($connection, 'students', $data);
print_r($result);

