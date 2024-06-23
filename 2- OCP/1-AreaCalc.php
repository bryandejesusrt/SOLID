<?php

/**
 * PRINCIPIO ABIERTO/CERRADO
 */
// Circle = radio * radio * pi
// Triangle = (base * height) / 2
// Square = height * width

class Square
{
    public $width;
    public $height;
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class AreaCalc
{
    public function calculate($shapes)
    {
        $total = 0;

        foreach ($shapes as $shape) {
            $total +=  $shape->height * $shape->width;
        }

        return $total;
    }
}
