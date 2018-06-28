--TEST--
Test array_key_exists() can accept ArrayAccess objects
--FILE--
<?php

$array = new class implements ArrayAccess {
    public function offsetExists($offset) { return $offset === "one"; }
    public function offsetGet($offset) { return null; }
    public function offsetSet($offset, $value) {}
    public function offsetUnset($offset) {}
};

var_dump(array_key_exists("one", $array));
var_dump(array_key_exists("four", $array));

?>
--EXPECT--
bool(true)
bool(false)
