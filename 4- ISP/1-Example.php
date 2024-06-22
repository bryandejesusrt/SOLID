<?php

/**
 * PRINCIPIO DE SEGREGACIÓN DE INTERFACES
 */

interface WorkeableInterface
{
    public function work();
    public function sleep();
}

class Worker implements WorkeableInterface
{
    public function work()
    {
    }
    public function sleep()
    {
    }
}


class Manager
{
    public function manage(WorkeableInterface $worker)
    {
        $worker->work();
        $worker->sleep();
    }
}
