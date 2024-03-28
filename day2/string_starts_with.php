<?php
function string_start_with($input, $value) {
    return $value === "" || mb_strrpos($input, $value, -mb_strlen($input)) !== false;
}

var_dump(string_start_with("안녕하세요.", "안녕"));
var_dump(string_start_with("안녕하세요.", "하이"));

?>