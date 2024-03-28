<?php
function string_splitlines($input)
{
    return explode(PHP_EOL, $input);
}

$data = <<<dsaf
안녕
하신가
요?
dsaf;

var_dump(string_splitlines($data));

?>