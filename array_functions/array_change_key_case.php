<?php 
/*
 / Changes the case of all keys in an array
 /
 / array_change_key_case ( array $array [, int $case = CASE_LOWER ] ) : array
 /
 / Returns an array with all keys from array lowercased or uppercased. Numbered indices are left as is.
 /
 / (PHP 4 >= 4.2.0, PHP 5, PHP 7)
*/


$myArr = [ 'name' => 'James', 'band' => 'Metallica'];

$resultArr = array_change_key_case($myArr, CASE_UPPER);

print_r($resultArr);
