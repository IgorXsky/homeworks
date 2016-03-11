<?php

/*Task_1*/

$heroes = [
    [   'name' => 'Nikita',
        'surname' => 'Lysenko',
        'age' => 18
    ],
    [
        'name' => 'Sergey',
        'surname' => 'Lysenko',
        'age' => 20
    ],
    [
        'name' => 'Artem',
        'surname' => 'Lysenko',
        'age' => 21
    ],
    [
        'name' => 'Nikita',
        'surname' => 'Polishchuk',
        'age' => 25
    ],
    [
        'name' => 'Andrey',
        'surname' => 'Polishchuk',
        'age' => 22
    ],
    [
        'name' => 'Sergey',
        'surname' => 'Polishchuk',
        'age' => 29
    ],
    [
        'name' => 'Artem',
        'surname' => 'Shevchuk',
        'age' => 33
    ],
    [
        'name' => 'Nikita',
        'surname' => 'Shevchuk',
        'age' => 20
    ],
    [
        'name' => 'Vlad',
        'surname' => 'Shevchuk',
        'age' => 26
    ],
    [
        'name' => 'Andrey',
        'surname' => 'Oliynyk',
        'age' => 31
    ],
    [
        'name' => 'Ivan',
        'surname' => 'Oliynyk',
        'age' => 19
    ],
    [
        'name' => 'Artem',
        'surname' => 'Oliynyk',
        'age' => 35
    ],
    [
        'name' => 'Ivan',
        'surname' => 'Kravchenko',
        'age' => 40
    ],
    [
        'name' => 'Vlad',
        'surname' => 'Shevchenko',
        'age' => 41
    ],
    [
        'name' => 'Artem',
        'surname' => 'Kravchenko',
        'age' => 55
    ],
    [
        'name' => 'Roman',
        'surname' => 'Kovalchuk',
        'age' => 42
    ],
    [
        'name' => 'Maxim',
        'surname' => 'Kovalchuk',
        'age' => 36
    ],
    [
        'name' => 'Oleg',
        'surname' => 'Kovalchuk',
        'age' => 38
    ],
    [
        'name' => 'Roman',
        'surname' => 'Tkachenko',
        'age' => 44
    ],
    [
        'name' => 'Ivan',
        'surname' => 'Tkachenko',
        'age' => 49
    ],
    [
        'name' => 'Roman',
        'surname' => 'Bondarenko',
        'age' => 55
    ],
    [
        'name' => 'Oleg',
        'surname' => 'Bondarenko',
        'age' => 50
    ],
    [
        'name' => 'Maxim',
        'surname' => 'Bondarenko',
        'age' => 51
    ],
    [
        'name' => 'Artem',
        'surname' => 'Melnyk',
        'age' => 47
    ],
    [
        'name' => 'Ivan',
        'surname' => 'Melnyk',
        'age' => 48
    ],
    [
        'name' => 'Artem',
        'surname' => 'Kovalenko',
        'age' => 43
    ],
    [
        'name' => 'Ivan',
        'surname' => 'Kovalenko',
        'age' => 29
    ],
    [
        'name' => 'Vlad',
        'surname' => 'Kovalenko',
        'age' => 32
    ],
    [
        'name' => 'Sergey',
        'surname' => 'Boyko',
        'age' => 38
    ],
    [
        'name' => 'Alex',
        'surname' => 'Shevchenko',
        'age' => 30
    ],
];

echo "<pre>";

print_r($heroes);

echo "</pre>";

/*Task_2*/

shuffle($heroes);

$day = &$key;

foreach($heroes as $key => $values){
    if($key <= 28){
        $key++;
        echo "В {$key} день выбыл: {$values['name']} {$values['surname']} возврастом {$values['age']} лет <br>";
    }else{
        echo "<b>Победитель: {$values['name']}  {$values['surname']} возврастом {$values['age']} лет </b>";
    }
}




