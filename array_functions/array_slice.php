<?php
/*
 * array_slice — Extract a slice of the array
 * */
$arr = ['Mark', 'James', 'Ted', 'Maria', 'Jenny'];

print_r(array_slice($arr,0, 3));
print_r(array_slice($arr, 1,2, true));
print_r(array_slice($arr, 2));
