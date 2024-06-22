<?php


// Square = height * width
// Circle = radio * radio * pi
// Triangle = (base * height) / 2

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

class Circle
{
    public $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }
}

class AreaCalc
{
    public function calculate($shapes)
    {
        $total = 0;

        foreach ($shapes as $shape) {

            if ($shape instanceof Square) {
                $total += $shape->height * $shape->width;
            } else {
                $total += $shape->radio * $shape->radio * pi();
            }
        }

        return $total;
    }
}
