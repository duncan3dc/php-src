--TEST--
Test array_chunk() can accept Traversables
--FILE--
<?php

$array = new ArrayObject([
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5,
]);

var_dump(array_chunk($array, 2));
#var_dump(array_chunk($array, 3, true));


?>
--EXPECT--
array(3) {
  [0]=>
  array(2) {
    [0]=>
    int(1)
    [1]=>
    int(2)
  }
  [1]=>
  array(2) {
    [0]=>
    int(3)
    [1]=>
    int(4)
  }
  [2]=>
  array(1) {
    [0]=>
    int(5)
  }
}
array(2) {
  [0]=>
  array(3) {
    ["one"]=>
    int(1)
    ["two"]=>
    int(2)
    ["three"]=>
    int(3)
  }
  [1]=>
  array(2) {
    ["four"]=>
    int(4)
    ["five"]=>
    int(5)
  }
}
