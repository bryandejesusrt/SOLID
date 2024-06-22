<?php


class A
{
    public function calc()
    {
    }
}

class B extends A
{
}

/**
 * Los objetos de un programa deben poder ser reemplazados por instancias de sus subtipos sin afectar a la integridad del programa.​
 */
function text(B $class)
{
}
