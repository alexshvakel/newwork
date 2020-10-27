<?php

error_reporting(E_ALL);

$x = true;
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


echo '<br>';

$number = (int)$_GET['p1'];
echo $number === 0 ? 'zero' : ($number === 1 ? "one" :($number === 2 ? "two" : ($number %2===0 ? "even" : "odd")));

