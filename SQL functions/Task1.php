<?php
/* Написать функцию select($connection, $table, $id = null).
Функция должна делать SELECT запрос в таблицу $table.
Если передан необязательный параметр $id то функция должна выбирать одну запись с указанным id. */


function select($connection, $table, $id = null){
    if(isset($id)){
        $query = 'SELECT * FROM' . "$table" . 'WHERE id =' . "$id";
    }else{
        $query = 'SELECT * FROM' . "$table";
    }
    $result = mysqli_query($connection, $query);
    return $result;
}