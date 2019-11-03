<?php 

/*
 / Counts all the values of an array
 /
 / array_count_values ( array $array ) : array
 /
 / array_count_values() returns an array using the values of array as keys and 
 / their frequency in array as values.
 /
 / (PHP 4, PHP 5, PHP 7)
*/

/*

/*

Parameters

array

The array of values to count



Return Values

Returns an associative array of values from array as keys and their count as value.

*/

$myArr = [1, 'Hello', 1, 2, 'Hi', 'Hi'];

$result = array_count_values($myArr);

print_r($result);
