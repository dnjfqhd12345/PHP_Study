<?php
function valid_str_alpha_numeric($str)
{
    return ctype_alnum((string) $str);
}

$datas = array(
    1, "2", "3AB", "4-", "5하"
);

foreach ($datas as $data) {
    echo "$data : ";
    var_dump(valid_str_alpha_numeric($data));
    echo "<br />";
}
?>