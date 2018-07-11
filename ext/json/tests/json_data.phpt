--TEST--
Test json_decode() returns a JsonData instance
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

$result = json_decode('{"ok": "one"}');
var_dump($result);

echo PHP_EOL;
echo 'instanceof \stdClass:' . PHP_EOL;
var_dump($result instanceof \stdClass);

?>
--EXPECT--
object(JsonData)#1 (1) {
  ["ok"]=>
  string(3) "one"
}

instanceof \stdClass:
bool(true)
