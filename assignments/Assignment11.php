<?php

function add($a, $b) {
    $sum = $a + $b;
    return $sum;
}


$result1 = add(5, 3);
echo "Result using local variables and parameters: $result1\n";


$global_a = 5;
$global_b = 3;

function add_global() {
    global $global_a, $global_b;
    $sum = $global_a + $global_b;
    return $sum;
}


$result2 = add_global();
echo "Result using global variables: $result2\n";
?>
