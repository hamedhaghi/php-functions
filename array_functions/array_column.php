<?php 

/*
 / Return the values from a single column in the input array
 /
 / array_column ( array $input , mixed $column_key [, mixed $index_key = NULL ] ) : array
 /
 / array_column() returns the values from a single column of the input, identified by the
 / column_key. Optionally, an index_key may be provided to index the values in the returned array by the values
 / from the index_key column of the input array.
 /
 / (PHP 5 >= 5.5.0, PHP 7)
*/

/*

Parameters :

input

A multi-dimensional array or an array of objects from which to pull a column of values from. If an array of objects is provided, then public properties can be directly pulled. In order for protected or private properties to be pulled, the class must implement both the __get() and __isset() magic methods.

column_key

The column of values to return. This value may be an integer key of the column you wish to retrieve, or it may be a string key name for an associative array or property name. It may also be NULL to return complete arrays or objects (this is useful together with index_key to reindex the array).

index_key

The column to use as the index/keys for the returned array. This value may be the integer key of the column, or it may be the string key name. The value is cast as usual for array keys (however, objects supporting conversion to string are also allowed).

*/

 // Example 1

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

// Auto key
$first_names = array_column($records, 'first_name');
print_r($first_names);

// Key from array column
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);



// Example 2

class User
{
    public $username;

    private $id;

    public function __construct(string $username, $id)
    {
        $this->username = $username;
        $this->id = $id;
    }

    public function __get($prop)
    {
    	return $this->$prop;
    }

    public function __isset($prop)
    {
    	return isset($prop);
    }
}

$users = [

    new User('user 1', 1),
    new User('user 2', 2),
    new User('user 3', 3),
];

// username field of class should be public otherwise set __get() and __isset() in class.

print_r(array_column($users, 'username'));

// id is private 

print_r(array_column($users, 'id'));