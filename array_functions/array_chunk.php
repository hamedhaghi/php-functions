<?php 

/*
 / Split an array into chunks
 /
 / array_chunk ( array $array , int $size [, bool $preserve_keys = FALSE ] ) : array
 /
 / Chunks an array into arrays with size elements. The last chunk may contain less than size elements.
 /
 / (PHP 4 >= 4.2.0, PHP 5, PHP 7)
*/


$myArr = [ 'red', 'blue', 'black', 'white', 'green', 'yellow', 'brown' ];

$result = array_chunk($myArr, 2);

print_r($result);