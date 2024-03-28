<?php
spl_autoload_register(function ($class) {
    include "$class.php";
});

use lgj\Sample;

$sample = Sample::factory();
$sample->tell();

echo "<br />";
$sample = new lgj\Sample();
$sample->add_age(5)->tell();

?>