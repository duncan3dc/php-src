--TEST--
Bug 73481 getopt optional argument handling
--ARGS--
-f filename.ext
--FILE--
<?php
var_dump(getopt("f::"));
?>
--EXPECT--
array(1) {
  ["f"]=>
  string(12) "filename.ext"
}
