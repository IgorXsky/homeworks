<?php

abstract class Figure
{
    protected $styles = [
        'position' => 'position: absolute'
    ];

    public $name;

    public function setColor($color){
        $this -> styles['color'] = 'background-color: ' . $color;
    }

    public function display(){
        echo "<span style='" . implode (';', $this -> styles) . "'>{$this -> name}</span>";
    }

    public function setPosition($x, $y){
        $this -> styles['x'] = "left: {$x}px";
        $this -> styles['y'] = "top: {$y}px";
    }

    public function setBorderColor($border_color)
    {
        $this -> styles['border_color'] = 'border-color: ' . $border_color;
    }

}