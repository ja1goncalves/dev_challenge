<?php

$employees = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);

$orderEmployeesToJson = function($employees)
{
    ksort($employees);
    $str_order = "[\n";

    foreach ($employees as $key => $item) {
        $str_order .= "\t{
            \t\tname: {$key},
            \t\tage: {$item}
        },\n";
    }

    $str_order = substr($str_order, 0, strlen($str_order) - 2);
    $str_order .= "\n]\n";

    return $str_order;
};

echo $orderEmployeesToJson($employees);
