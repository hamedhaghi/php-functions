<?php

/*
 / Computes the difference of arrays
 /
 / array_diff ( array $array1 , array $array2 [, array $... ] ) : array
 /
 / Compares array1 against one or more other arrays and returns the values in array1 that are not present in
 / any of the other arrays.
 /
 / (PHP 4 >= 4.0.1, PHP 5, PHP 7)
*/

/*

/*

Parameters

array1
The array to compare from

array2
An array to compare against

...
More arrays to compare against


Return Values

Returns an array containing all the entries from array1 that are not present in any of the other arrays.

*/

$arr1 = [ 'a' => 'blue', 'b' => 'green', 'red', 'black'];
$arr2 = [ 'blue', 'green', 'red', 'white'];

$diffArr = array_diff($arr1, $arr2);

print_r($diffArr);
