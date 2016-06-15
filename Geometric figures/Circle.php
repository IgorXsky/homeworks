<?php

include "Square.php";

class Circle extends Square
{

    public function setSize ($size,$radius){
        $this -> styles['size'] = "width: {$size}px; height: {$size}px; border-radius: {$radius}px";
    }

}

    $circle = new Circle('Круг');

    $circle ->setPosition(150,20);
    $circle ->setSize(100,50);
    $circle ->setBorderColor('red');
    $circle ->setColor('green');


    $circle -> display();

