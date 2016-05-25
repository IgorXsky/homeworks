<?php

include "Square.php";

class Rectangle extends Square{

    public function setSize ($width, $height){
        $this -> styles['size'] = "width: {$width}px; height: {$height}px";
    }
}

    $rectangle = new Rectangle('Прямоугольник');

    $rectangle ->setPosition(150,20);
    $rectangle ->setSize(150, 100);
    $rectangle ->setBorderColor('red');
    $rectangle ->setColor('yellow');


    $rectangle -> display();


