<?php

// Associative array
$array1 = [
    'a' => 1,
    'bb' => 2,
    'ccc' => 3,
    1 => 4
];

// Multi-dimensional array
$array2 = [
    [
        "id" => 101,
        "name"=> "Hello World",
        "age"=> 12
    ],
    [
        "id" => 102,
        "name"=> "Hello NEPAL",
        "age"=> 14
    ],
    [
        "id" => 103,
        "name"=> "Hello KTM",
        "age"=> 16
    ]
];

print_r($array1);
print_r($array2);


// changes the alphabetic key case of associative array 
// into upper or lower(default)
// array_change_key_case(array $array, int $case = CASE_LOWER): array
print_r(array_change_key_case($array1, CASE_UPPER));


// splits array into chunks with specified length and reindexes if true
// array_chunk(array $array, int $length, bool $preserve_keys = false): array
print_r(array_chunk($array1, 1));
print_r(array_chunk($array1, 2, true));


// extracts the column from the multi-dimension array and returns them in a array
// array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array
print_r(array_column($array2, 'name'));
print_r(array_column($array2, 'name', 'id'));


// single dimension array
$array3 = [
    1 => 'blue', 
    2 => 'red', 
    3 => 'golden'];
$array4 = ['ball', 'apple', 'sun'];

// combines two arrays as one by using values of 
// first array as keys and of second array as values
// array_combine(array $keys, array $values): array
print_r(array_combine($array3, $array4));


$array5 = ['hello', 'world', 'hello', 'nepal', 12, 13, 12, 14, 12];

// counts the occurence of the values in the array
// array_count_values(array $array): array
print_r(array_count_values($array5));


$array6 = ['a'=>'apple', 'm'=>'mango', 'b'=>'banana', 'grapes', 2=>'potato'];
$array7 = ['a'=>'apple', 'o'=>'orange', 1=>'grapes', 2=>'potato'];
$array8 = ['m'=>'mango'];

// finds difference between two arrays A and B using matched values
// array_diff(array $array, array ...$arrays): array
print_r(array_diff($array6, $array7));

// finds difference between two arrays A and B using matched index
// array_diff_key(array $array, array ...$arrays): array
print_r(array_diff_key($array6, $array7));

// finds difference between two arrays A and B using both matched index and value
// array_diff_assoc(array $array, array ...$arrays): array
print_r(array_diff_assoc($array6, $array7, $array8));


$array9 = [['a'=>111, 'b'=>222], ['c'=>333], 'd'=>444];

// Checks if the array key or index exists or not 
// will search for the keys in the first dimension only. 
// Nested keys in multidimensional arrays will not be found
// array_key_exists(string|int $key, array $array): bool
if(array_key_exists('d', $array9)) {
    echo "Key exists" . PHP_EOL;
} else {
    echo "Key doesnt exist" . PHP_EOL;
}


// returns all keys or of specified value in the array
// array_keys(array $array): array
print_r(array_keys($array6));
print_r(array_keys($array6, 'mango'));


// applies the callback for array(s) values and return result array
// array_map(?callable $callback, array $array, array ...$arrays): array
print_r(array_map(function($values) {
    return $values * 2;
}, $array1));
// use of lamda function with array_map
print_r(array_map(fn($values): int => $values * 3, $array1));

function multiply($a, $b) {
    return $a * $b;
}
print_r(array_map('multiply', $array1, range(1,4)));

// merges or appends the elements of the arrays
// but if same string keys, it will overwrite the previous key with the next array key
// not with the same integer key and the integer keys will be renumbered
// array_merge(array ...$arrays): array
print_r(array_merge($array3, $array4, $array1));
print_r(array_merge($array1, $array6));


// pops the last element of the array and changes the array
// array_pop(array &$array): mixed
$pop_value = array_pop($array1);
print_r($array1);
echo $pop_value.PHP_EOL;


// pushes the mixed elements to the end of the array
// array_push(array &$array, mixed ...$values): int
// better to use $array[] = $value
array_push($array1, 9);
print_r($array1);


$array10 = ['World', 'Nepal'];
// iteratively reduces the array to a single value
// previous value - 0, current value - 1 and initial value - 10 -> first iteration
// previous value - 1, current value - 2 and initial value - 10 -> second iteration
// array_reduce(array $array, callable $callback, mixed $initial=null): mixed
echo array_reduce($array1, fn($previous, $current): int => $previous + $current, 10).PHP_EOL;
echo array_reduce($array10, fn($previous, $current): string => $previous . ' ' . $current, 'Hello').PHP_EOL;


// reverses the elements of the array, true for preserving the numeric index
// array_reverse(array $array, bool $preserve_keys = false): array
print_r(array_reverse($array1));
print_r(array_reverse($array1, true));


// shifts an element off the beginning of the array
// array_shift(array &$array): mixed
$array1_value = array_shift($array1);
echo $array1_value.PHP_EOL;
print_r($array1);

// extract a slice of the array with given index and length
// array_slice(
//     array $array,
//     int $offset,
//     ?int $length = null,
//     bool $preserve_keys = false
// ): array
print_r(array_slice($array6, 0, 2));
print_r(array_slice($array6, 2, -2));
print_r(array_slice($array6, -1, 2, true));


// remove a portion of array and replace with it something else
// array_splice(
//     array &$array,
//     int $offset,
//     ?int $length = null,
//     mixed $replacement = []
// ): array
print_r(array_splice($array5, 4));
print_r(array_splice($array5, 2, count($array5), 'nepal'));
print_r($array5);


// checks if a value exists or not in array
// in_array(mixed $needle, array $haystack, bool $strict = false): bool
echo "In Array : " . in_array('nepal', $array5).PHP_EOL;


// removes duplicate values in the array
// array_unique(array $array, int $flags = SORT_STRING): array
// SORT_REGULAR - compare items normally (don't change types)
// SORT_NUMERIC - compare items numerically
// SORT_STRING - compare items as strings
// SORT_LOCALE_STRING - compare items as strings, based on the current locale.
array_push($array5, 'hello');
print_r($array5);
print_r(array_unique($array5));


$array11 = [1=>'a', 5=>'b', 8=>'c', 9=>'c'];
// returns all the values from the array and indexes the array numerically.
// array_values(array $array): array
print_r(array_values($array11));


// apply a user callback function to every member of array
// array_walk(array|object &$array, callable $callback, mixed $arg = null): bool
array_walk($array11, function(&$letter) {
    $letter = strtoupper($letter);
});
array_walk($array11, function($letter, $key, $extra='1') {
    echo $key . ' : ' . $letter . $extra . PHP_EOL;
});
print_r($array11);

// searches the array for a given value and returns the first corresponding key if successful
// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
echo "Array search : " . array_search('B', $array11) . PHP_EOL;


// counts all elements of array
echo "Array count : " . count($array11).PHP_EOL;


// Exchanges all keys with their associated values in an array
// array_flip(array $array): array
// If a value has several occurrences, the latest key will be used as its value, 
// and all others will be lost.
print_r(array_flip($array11));


$array12 = range(1, 9);
// calculate the sum of values in an array
// array_sum(array $array): int|float
echo "Array sum : " . array_sum($array12).PHP_EOL;


// Filters elements of an array using a callback function
// array_filter(array $array, ?callable $callback = null, int $mode = 0): array
function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}
function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array13 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array14 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array13, "odd"));
echo "Even:\n";
print_r(array_values(array_filter($array14, "even")));