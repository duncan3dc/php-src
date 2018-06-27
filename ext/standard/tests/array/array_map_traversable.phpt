--TEST--
Test array_map() can accept Traversables
--FILE--
<?php

$arrayObject = new ArrayObject(["aaa", "bbb"]);
var_dump(array_map("strtoupper", $arrayObject));

function append(string $string, string $append)
{
    return "{$string} {$append}";
}

$strings = new ArrayObject(["PHP", "PHP"]);
$versions = new ArrayObject(["5.6", "7.0"]);
var_dump(array_map("append", $strings, $versions));

?>
--EXPECT--
array(2) {
  [0]=>
  string(3) "AAA"
  [1]=>
  string(3) "BBB"
}
array(2) {
  [0]=>
  string(7) "PHP 5.6"
  [1]=>
  string(7) "PHP 7.0"
}
