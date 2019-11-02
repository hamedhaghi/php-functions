<?php 


/*
 / Creates an array by using one array for keys and another for its values
 /
 / array_combine ( array $keys , array $values ) : array
 /
 / Creates an array by using the values from the keys array as keys and the values from the values array 
 / as the corresponding values.
 /
 / (PHP 5, PHP 7)
*/

/*

/*

Parameters

keys
Array of keys to be used. Illegal values for key will be converted to string.

values
Array of values to be used

Return Values

Returns the combined array, FALSE if the number of elements for each array isn't equal.

*/

$keyArray = ['a', 'b', 'c'];
$valueArray = [1, 2, 3];

$result = array_combine($keyArray, $valueArray);
print_r($result);