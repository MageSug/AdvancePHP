<?php

function &gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();



if ($generator instanceof Iterator)
{
	echo "Is iterable\n";
}

var_dump($generator);
foreach ($generator as $value) {
    echo "$value\n";
}
?>