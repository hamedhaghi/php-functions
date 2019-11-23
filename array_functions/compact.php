<?php
/*

(PHP 4, PHP 5, PHP 7)

compact — Create array containing variables and their values

Description ¶
compact ( mixed $varname1 [, mixed $... ] ) : array
Creates an array containing variables and their values.

For each of these, compact() looks for a variable with that name in the current symbol table and adds it to the output array such that the variable name becomes the key and the contents of the variable become the value for that key. In short, it does the opposite of extract().

Note:

Before PHP 7.3, any strings that are not set will silently be skipped.

Parameters ¶
varname1
compact() takes a variable number of parameters. Each parameter can be either a string containing the name of the variable, or an array of variable names. The array can contain other arrays of variable names inside it; compact() handles it recursively.

Return Values ¶
Returns the output array with all the variables added to it.

Errors/Exceptions ¶
compact() issues an E_NOTICE level error if a given string refers to an unset variable.

*/

$name = 'Jim';
$family = 'Root';

$result = compact("name", "family", $guitars);

print_r($result);