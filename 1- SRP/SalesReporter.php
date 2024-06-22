<?php
session_start();

$_SESSION['login'] = true;
$_SESSION['sales'] = [
    [
        'created_at' => "2024-01-01",
        'total' => 100,
    ],
    [
        'created_at' => "2024-01-02",
        'total' => 200,
    ],
    [
        'created_at' => "2024-01-03",
        'total' => 300,
    ],
    [
        'created_at' => "2024-01-04",
        'total' => 400,
    ],
    [
        'created_at' => "2024-01-05",
        'total' => 500,
    ],
    [
        'created_at' => "2024-01-06",
        'total' => 600,
    ],
    [
        'created_at' => "2024-01-07",
        'total' => 700,
    ]
];

class SalesReporter
{
    public function between($startDate, $endDate)
    {
        // auth user
        if (!isset($_SESSION['login'])) {
            throw new Exception("Error Processing Request, User not login.", 1);
        }

        // db querys
        $sales = $this->querySalesBetween($startDate, $endDate);

        // return result
        return $this->format($sales);
    }

    protected function querySalesBetween($startDate, $endDate)
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

    protected function format($sale)
    {
        return "<h1>Total: {$sale}</h1>";
    }
}
