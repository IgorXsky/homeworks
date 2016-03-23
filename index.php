<?php

define('MAX_SUM', '500');
define('MIN_SUM', '100000');
//define('USER_PASS', '12345');
$errorMessage = '';
$errors = [];


$rates = [1 => 9, 2 => 11, 3 => 13, 4 => 15, 5 => 17, 6 => 19, 7 => 21];
$term = '';

if(!empty($_POST)) {
    $sum = $_POST['sum'];
    $payment = $_POST['payment'];
    $term = $_POST['term'];

    if (MAX_SUM >= $sum || MIN_SUM <= $sum) {

    }else{
        $errors[] = "Неверная сумма кредита";
    }
    if (MAX_ >= $sum || MIN_SUM <= $sum) {

    }else{
        $errors[] = "Неверная сумма кредита";
    }
}

$errorMessage = implode("<br>", $errors);


include "login.phtml";