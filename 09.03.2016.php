<?php

/*Task_1*/

$name = array('Nikita', 'Dima', 'Alex', 'Sergey', 'Vlad', 'Andrey', 'Artem', 'Ivan', 'Anton', 'Maxim', 'Oleg', 'Roman');
$surname = array('Melnyk', 'Shevchenko', 'Boyko', 'Kovalenko', 'Bondarenko', 'Tkachenko', 'Kovalchuk', 'Kravchenko',
    'Oliynyk', 'Shevchuk', 'Polishchuk', 'Lysenko');

for($i=1; $i <= 30; $i++){
    $rand_name = array_rand($name, 1);
    $rand_surname = array_rand($surname, 1);
    $rand_age = rand(18, 60);
    $heroes[$i]=array('name' => $name[$rand_name],
        'surname' => $surname[$rand_surname],
        'age' => $rand_age);
}

echo '<pre>';
echo '<h2>Cписок игроков:</h2>';
print_r($heroes);
echo "</pre>";

/*Task_2*/

shuffle($heroes);

foreach($heroes as $key => $values){
    if($key <= 28){
        $key++;
        echo "В {$key} день выбыл: {$values['name']} {$values['surname']} возврастом {$values['age']} лет <br>";
    }else{
        echo "<b>Победитель: {$values['name']}  {$values['surname']} возврастом {$values['age']} лет </b>";
    }
}




