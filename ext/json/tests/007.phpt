--TEST--
json_last_error() tests
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
var_dump(json_decode("[1]"));
var_dump(json_last_error(), json_last_error_msg());
var_dump(json_decode("[[1]]", false, 2));
var_dump(json_last_error(), json_last_error_msg());
var_dump(json_decode("[1}"));
var_dump(json_last_error(), json_last_error_msg());
var_dump(json_decode('["' . chr(0) . 'abcd"]'));
var_dump(json_last_error(), json_last_error_msg());
var_dump(json_decode("[1"));
var_dump(json_last_error(), json_last_error_msg());

echo "Done\n";
?>
--EXPECTF--
array(1) {
  [0]=>
  int(1)
}
int(0)
string(8) "No error"

Warning: json_decode(): Maximum stack depth exceeded in %s on line %d
NULL
int(1)
string(28) "Maximum stack depth exceeded"

Warning: json_decode(): State mismatch (invalid or malformed JSON) in %s on line %d
NULL
int(2)
string(42) "State mismatch (invalid or malformed JSON)"

Warning: json_decode(): Control character error, possibly incorrectly encoded in %s on line %d
NULL
int(3)
string(53) "Control character error, possibly incorrectly encoded"

Warning: json_decode(): Syntax error in %s on line %d
NULL
int(4)
string(12) "Syntax error"
Done
