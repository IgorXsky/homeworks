<?php
/* Написать функцию delete($connection, $table, $id). Функция должна удалять запись с указанным $id. */

function delete($connection, $table, $id){
    $query = "DELETE FROM {$table} WHERE id = {$id}";
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection));
    return $result;
}