--TEST--
Ensure that extending of undefined class throws the exception
--FILE--
<?php

try {
	class A extends B {}
} catch (Error $e) {
	var_dump(class_exists('A'));
	var_dump(class_exists('B'));
	throw $e;
}

?>
--EXPECTF--
Fatal error: Class 'B' not found in %s on line %d
