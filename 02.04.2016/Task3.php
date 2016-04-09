<?php
/* Написать функцию update($connection, $table, $data, $id).
Функция похожая по функционалу на insert но должна не вставлять, а изменять запись с указанным $id. */

$data = ['id' => '1',
    'name' => 'Igor',
    'surname' => 'Pavliuk',
];

function update($connection, $table, $data, $id){

    $query = "UPDATE {$table} (id = {$data['id']}, name = {$data['name']}, surname = {$data['surname']})
              SET id = {$id}";
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}