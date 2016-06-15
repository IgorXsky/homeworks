<?php
/* Написать функцию insert($connection, $table, $data).
Функция должна добавлять в таблицу $table новую запись с данными из
массива $data где ключ массива это поле (колонка),
а значение массива это сама запись. */

$data = ['id' => '1',
        'name' => 'Igor',
        'surname' => 'Pavliuk',
        ];

function insert($connection, $table, $data)
{
    $keys = [];
    foreach($data as $key => $item){
        $keys[] = $key;
    }
    $table_keys = implode("," ,$keys);

    $values = "'{$data['id']}', '{$data['name']}', '{$data['surname']}'";
    $query = "INSERT INTO {$table} ({$table_keys})
              VALUES ({$values})";
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}


