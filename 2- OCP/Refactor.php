<?php

interface Shapes
{
    public function area();
}

class Square implements Shapes
{
    public $width;
    public $height;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}


class Circle implements Shapes
{
    public $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function area()
    {
        return $this->radio * $this->radio * pi();
    }
}

class AreaCalc
{
    public function calculate($shapes)
    {
        $total = 0;

        foreach ($shapes as $shape) {
            $total += $shape->area();
        }
        return $total;
    }
}
