<?php

include "Figure.php";

class Square extends Figure{

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function setSize ($size){
        $this -> styles['size'] = "width: {$size}px; height: {$size}px";
    }

}

    $square = new Square('Квадрат');

    $square ->setPosition(20,20);
    $square ->setSize(100);
    $square ->setBorderColor('red');
    $square ->setColor('blue');


    $square -> display();
