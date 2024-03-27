<?php
function hello_php()
{
    echo "hello php";
}

hello_php();
echo "<br />";

function nicetomeet($var)
{
    echo "nice to meet $var";
}

nicetomeet("유");
echo "<br />";

function add($a, $b)
{
    $result = $a + $b;
    return $result;
}

$result = add(1,2);
echo "결과는 : " . $result;
echo "<br/>";

function defaultfunc($name='lgj'){
    echo "my name is $name";
}

defaultfunc();
echo "<br/>";
defaultfunc("30min php");
echo "<br/>"
?>