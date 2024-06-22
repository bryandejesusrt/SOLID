<?php
session_start();
require '../../vendor/autoload.php';


class SalesRepository
{
    public function between($startDate, $endDate)
    {
        $total = 0;

        foreach ($_SESSION['sales'] as $sales) {
            $date = strtotime($sales['created_at']);
            if (isset($sales['created_at']) && $date >= strtotime($startDate) && $date <= strtotime($endDate)) {
                $total += $sales['total'];
            }
        }
        return $total;
    }
}


interface SalesOutputInterface
{
    public function output($sale);
}

class HtmlOutput implements SalesOutputInterface
{

    public function output($sale)
    {
        return "<h1>Total: {$sale}</h1>";
    }
}


class SalesReporter
{
    private $salesRepository;

    public function __construct($salesRepository)
    {
        $this->salesRepository = $salesRepository;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->salesRepository->between($startDate, $endDate);

        // return result
        return $formatter->output($sales);
    }
}
