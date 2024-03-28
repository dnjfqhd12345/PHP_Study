<?php
function valid_required($input)
{
    return is_array($input) ? empty($input) === false : trim($input) !== '';
}

var_dump(valid_required(""));
var_dump(valid_required(array()));
var_dump(valid_required("php"));
var_dump(valid_required(array(1)));
?>