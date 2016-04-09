<?php

$data = ['id' => '1',
    'name' => 'Igor',
    'surname' => 'Pavliuk',
];
$keys = [];
foreach($data as $key => $item){
    $keys[] = $key;

}

$result = implode("," ,$keys);

echo "<pre>";
print_r($result);
echo "</pre>";


