<?php

$colors = ['red', 'blue', 'green'];

foreach($colors as &$color) {
    $color = strtoupper($color);
}
// unset($color);

// print_r(array_map(function ($colour){    
//     return strtoupper($colour);
// }, $colors));

print_r($colors);

$array1 = array(1,2,3,4,5);
// print_r($array1);

$array2 = [
    1 => 'a',
    2 => 'b',
    3 => 'c',
];
// print_r($array2); // Associative array

function test1($array1) {
    foreach($array1 as $i=>&$arr) { // &$ references the original array values
        $arr *= 2;
        echo $i . "=>" . $arr . PHP_EOL;
    }
    
    // unset($array1); // unset/removes the array of the block of foreach
    print_r($array1);
}

foreach($array1 as $i=>&$arr) { // &$ references the original array values
    $arr *= 3;
    echo $i . "=>" . $arr . PHP_EOL;
}
print_r($array1);

test1($array1);
print_r($array1); // $array1 prints cuz the unset is done in the foreach block scope

foreach($array2 as $i=>$val) {
    unset($array2[$i]); // unset/removes all elements of the array and the array still exists
}

print_r($array2);

$array2[] = 'd';
print_r($array2);

$array2 = array_values($array2);
$array2[] = 'e';
print_r($array2);

[$one, $two] = $array1;
echo PHP_EOL.$one . " " . $two.PHP_EOL;

$array3 = [[...$array1], 
        2 => 'f'
    ];
print_r($array3);

$array3 = array_values($array3);
print_r($array3);

$array4 = [
        [1, 'Ram' , 23],
        [2, 'hari', 24],
    ];

foreach($array4 as [$id, $name, $age]) {
    echo $id . " " . $name . " " . $age .PHP_EOL;
}
