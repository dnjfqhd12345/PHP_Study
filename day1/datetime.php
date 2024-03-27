<?php
$date1 = date("Y-m-d H:i:s");
$date2 = new DateTime();
$date2_str = $date2->format("Y-m-d H:i:s");

var_dump($date1); echo "<br />";
var_dump($date2); echo "<br />";
var_dump($date2_str); echo "<br />";

$tomorrow = $date2->add(new DateInterval("P1D"));
var_dump($tomorrow); echo "<br />";
echo "--------<br />";

$date = "2024-03-27";
echo date("Y-m-d", strtotime($date.'+ 1 years'));
echo "--------<br />";
$tomorrow_expression = $date . " + 1 days";
$tomorrow_time = strtotime($tomorrow_expression);
$tomorrow_date = date("Y-m-d", $tomorrow_time);
?>