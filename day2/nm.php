<?php
require_once("lgj/sample.php");
use lgj\Sample;

$sample = Sample::factory();
$sample->tell();

echo "<br />";
echo "<hr>";
$sample = new lgj\Sample();
$sample->add_age(5)->tell();

?>