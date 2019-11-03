<?php 

/*
 / Filters elements of an array using a callback function
 /
 / array_filter ( array $array [, callable $callback [, int $flag = 0 ]] ) : array
 /
 / Iterates over each value in the array passing them to the callback function.
 / If the callback function returns TRUE, the current value from array is returned into the result array.
 / Array keys are preserved.
 /
 / (PHP 4 >= 4.0.6, PHP 5, PHP 7)
*/

/*

/*

Parameters

array
The array to iterate over

callback
The callback function to use

If no callback is supplied, all entries of array equal to FALSE (see converting to boolean) will be removed.

flag
Flag determining what arguments are sent to callback:

ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
Default is 0 which will pass value as the only argument to callback instead.



Return Values

Returns the filtered array.

*/

$myArr = [ 2, 3, 5, 6, 7];

$myArr2 = [ 'a' => 1, 'b' => 2, 'c' => 6]; // only values will be iterated;

$result = array_filter($myArr2, function($item){
	// return even items
	//return $item % 2 == 0 ? true : false;
	// or bitwise compare

	return !($item & 1);
});

print_r($result);