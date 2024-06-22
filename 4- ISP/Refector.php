<?php

/**
 * PRINCIPIO DE SEGREGACIÓN DE INTERFACES
 */

interface ManageableInterface
{
    public function beManaged();
}

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

class HumanWorker implements SleepableInterface, WorkableInterface, ManageableInterface
{
    public function work()
    {
    }
    public function sleep()
    {
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Manager
{
    public function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}
