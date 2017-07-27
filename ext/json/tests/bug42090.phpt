--TEST--
Bug #42090 (json_decode causes segmentation fault)
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
var_dump(
	json_decode('""'),
	json_decode('"..".'),
	json_decode('"'),
	json_decode('""""'),
	json_encode('"'),
	json_decode(json_encode('"')),
	json_decode(json_encode('""'))
);
?>
--EXPECTF--
Warning: json_decode(): Syntax error in %s on line %d

Warning: json_decode(): Control character error, possibly incorrectly encoded in %s on line %d

Warning: json_decode(): Syntax error in %s on line %d
string(0) ""
NULL
NULL
NULL
string(4) ""\"""
string(1) """
string(2) """"
