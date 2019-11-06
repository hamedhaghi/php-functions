<?php 

/*
 / Searches the array for a given value and returns the first corresponding key if successful
 /
 / array_search ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : mixed
 /
 / Searches for needle in haystack.
 
 / (PHP 4 >= 4.0.5, PHP 5, PHP 7)
*/

/*

/*

Parameters 

needle
The searched value.

Note:

If needle is a string, the comparison is done in a case-sensitive manner.

haystack
The array.

strict
If the third parameter strict is set to TRUE then the array_search() function will search for identical elements in the haystack. This means it will also perform a strict type comparison of the needle in the haystack, and objects must be the same instance.

Return Values 
Returns the key for needle if it is found in the array, FALSE otherwise.

If needle is found in haystack more than once, the first matching key is returned. To return the keys for all matching values, use array_keys() with the optional search_value parameter instead.

*/


$arr = [ 'red', 'blue', 'green', 'yellow'];

$index = array_search('green', $arr);

echo $index;