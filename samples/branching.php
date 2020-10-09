<?php

error_reporting(E_ALL);


$number = (int)$_GET['p1'];
if ($number === 0) {
    echo 'Number is zero';
} elseif ($number === 1) {
    echo 'Number is one';
} elseif ($number === 2) {
    echo 'Number is two';
} elseif ($number %2 === 0) {
    echo "Number {$number} is even";
} else {
    echo "Number {$number} is odd";
}

echo '<br>';

switch ($number) {
    case 0:
        echo 'Number is zero';
        break;
    case 1:
        echo 'Number is one';
        break;
    case 2:
        echo 'Number is two';
        break;
    case $number %2 === 0:
        echo "Number {$number} is even";
        break;
    default:
        echo "Number {$number} is odd";
}

echo '<br>';

$message = $number %2===0 ? "even" : "odd";
echo "number {$message} is {$number}";

echo "<br>";

$test = $_GET['p2'] ?: 'defoult';
var_dump($test);


//////Home work

$x = 1 || $x = 2 || $x = 3;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}
///123

/// switch ($number)- ternary operators


























