<?php

define('MAX_SUM', '500');
define('MIN_SUM', '100000');
define('MAX_PAY', '99');
define('MIN_PAY', '1');


$errorMessage = '';
$errors = [];

$sum = '';
$payment = '';
$term = '';

if(!empty($_GET)) {
    $term = $_GET['term'];
    if($_GET['sum'] <= MAX_SUM || $_GET['sum'] >= MIN_SUM ){
        $sum = $_GET['sum'];
    }else{
        $errors[] = "Вы ввели неверную суму";
    }
    if($_GET['payment'] <= MAX_PAY || $_GET['payment'] >= MIN_PAY){
        $payment = $_GET['payment'];
    }else{
        $errors[] = "Вы ввели неверный первоначальный взнос d %";
    }
}

$errorMessage = implode("<br>", $errors);

echo $errorMessage;

include "form.phtml";