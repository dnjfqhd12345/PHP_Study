<?php
$datas = [1,2,"3","4","오","률",7];

$chcker = 2;

$filter_data = array_filter($datas,
    function($item) use ($checker) {
        return $item == $checker;
    }
);

var_dump($filter_data);
?>