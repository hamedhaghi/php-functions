<?php 

/*
 / Applies the callback to the elements of the given arrays
 /
 / array_map ( callable $callback , array $array1 [, array $... ] ) : array
 /
 / array_map() returns an array containing the results of applying the callback function to the corresponding
 / index of array1 (and ... if more arrays are provided) used as arguments for the callback. The number of
 / parameters that the callback function accepts should match the number of arrays passed to array_map().
 
 / (PHP 4 >= 4.0.6, PHP 5, PHP 7)
*/

/*

/*

Parameters 

callback
Callback function to run for each element in each array.

NULL can be passed as a value to callback to perform a zip operation on multiple arrays. If only array1 is provided, array_map() will return the input array.

array1
An array to run through the callback function.

...
Supplementary variable list of array arguments to run through the callback function.



Return Values 

Returns an array containing the results of applying the callback function to the corresponding index of array1 (and ... if more arrays are provided) used as arguments for the callback.

*/


# Sample 1

$numbers = [1, 2, 3, 4, 5];

$result = array_map(function($item){
	return ++$item;

}, $numbers);

print_r($result);


# Sample 2

$props = ['name' => 'Jim', 'family' => 'Root'];

print_r(array_map("strlen", $props));
