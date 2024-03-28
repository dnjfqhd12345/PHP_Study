<?php
function valid_number($input)
{
    $input = strval($input);
    return (bool) preg_match('/^[\-+]?[0-9]*\.?[0-9]+$/', $input);
}

function var_dump_br($val)
{
    var_dump($val);
    echo "<br />";
}

$vals = array(1, 3, 0.14, "5", "9.7", "asd", "024", "051.3", "1337e0");

foreach($vals as $val){
    echo $val;

    var_dump_br(valid_number($val));
    var_dump_br(is_numeric($val));
    echo "<hr />";
}
?>