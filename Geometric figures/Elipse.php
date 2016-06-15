<?php

include "Rectangle.php";

class Elipse extends Rectangle{

    public function setSize ($width, $height, $radius){
        $this -> styles['size'] = "width: {$width}px; height: {$height}px; border-radius: {$radius}%";
    }

}

    $elipse = new Elipse('Елипс');

    $elipse ->setPosition(350,20);
    $elipse ->setSize(200,100,15);
    $elipse ->setBorderColor('red');
    $elipse ->setColor('green');


    $elipse -> display();
