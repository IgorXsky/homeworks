<?php

define('MAX_SUM', '1000000'); //максимальная сумма кредита
define('MIN_SUM', '100'); //минимальная сумма кредита
define('MAX_PAY', '99');
define('MIN_PAY', '1');
define('MONTH', '12');

$errorMessage = '';
$errors = [];

$sum = '';
$payment = '';
$term = '';
$persent = '';

if(!empty($_GET)) {
    switch ($_GET['term']) {
        case 1: $term = 1; $persent = 0.09; break;
        case 2: $term = 2; $persent = 0.11; break;
        case 3: $term = 3; $persent = 0.13; break;
        case 4: $term = 4; $persent = 0.15; break;
        case 5: $term = 5; $persent = 0.17; break;
        case 6: $term = 6; $persent = 0.19; break;
        case 7: $term = 7; $persent = 0.09; break;
        default: $errors[] = 'error in term';
    }
    if($_GET['sum'] <= MAX_SUM && $_GET['sum'] >= MIN_SUM ){
        $sum = $_GET['sum'];
    }else{
        $errors[] = "Вы ввели неверную суму";
    }
    if($_GET['payment'] <= MAX_PAY && $_GET['payment'] >= MIN_PAY){
        $payment = $_GET['payment']/100;
    }else{
        $errors[] = "Вы ввели неверный первоначальный взнос в %";
    }
}

$result = ($sum - ($sum*$payment)) + (($sum*$persent)*$term);

$month = $term*MONTH;

$payToMonth = $result/$month;

$errorMessage = implode("<br>", $errors);



include "form.phtml";