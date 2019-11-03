<?php 

/*
 / Exchanges all keys with their associated values in an array
 /
 / array_flip ( array $array ) : array
 /
 / array_flip() returns an array in flip order, i.e. keys from array become values and values 
 / from array become keys.
 / Note that the values of array need to be valid keys, i.e. they need to be either integer or string.
 / A warning will be emitted if a value has the wrong type, and the key/value pair in question will not be
 / included in the result.
 / If a value has several occurrences, the latest key will be used as its value, and all others will be lost.
 
 / (PHP 4, PHP 5, PHP 7)
*/

/*

/*

Parameters

array
An array of key/value pairs to be flipped.


Return Values

Returns the flipped array on success and NULL on failure.

*/


$arr = ['apple', 'orange', 'cherry'];


$arr2 = ['name' => 'hamed', 'family' => 'haghi']; // key => value sample

$flippedArr = array_flip($arr2);

print_r($flippedArr);