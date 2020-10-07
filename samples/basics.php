<?php

error_reporting(E_ALL);


//$1re = 1;
//$te*st-rest = 1

$test1 = 0;
//var_dump($test1);

$_test_2 = 2;
//var_dump($_test_2);

//$skillUpVariable = 'Hohoho';
//var_dump($skillUpVariable);

$skillUpVariable = 'Lalala';
//var_dump($skillUpVariable);

$school = $skillUpVariable;
$skillUpVariable = 123;
//var_dump($school, $skillUpVariable);

$testParent = 123;
$testChild = &$testParent;
$testParent = 222;
$testChild = 333;
//var_dump($testParent, $testChild);

$deadVar;
unset($deadVar);
//var_dump($deadVar);

define('TEST_CONST', 555);
//var_dump(TEST_CONST);

const TEST_CONST_2 = 123;
defined('TEST_CONST_2') || define('TEST_CONST_2' , 2555);
if (!defined('TEST_CONST_2')) {
    define('TEST_CONST_2', 2555);
}
//var_dump(TEST_CONST_2);


//define('$TE', 123);
//var_dump($TE);

/** @var  $qwerty Generated witch varieble varieble below*/
$level01 = 'qwerty';
$level02 = 'level01';
$$$level02 = 123;
//var_dump($qwerty);

${'hello'} = 'OK';
//var_dump($hello);

//var_dump(true);
//echo true;

/*echo('TEST >>>');
echo'TEST1 >>>', 'TEST 2', PHP_EOL;

$result = print('test >>> ');
print'test 1';

var_dump($result);

print_r('123
                     4444
                         1233212
                         ');
$array = ['123
                     4444
                         1233212
                         '];
print_r($array);

var_dump($array);*/

//echo PHP_EOL;


$data = array(
    0, 1, 2, 'test' => 123
);
$data2 = [
    0, 1, 2, 'test' => 123
    ];

$text1 = 'test \n123 * 444 + $qwerty';
//var_dump($text1);
$text2 = "test \n123 * $444 + {$qwerty} \$test \\";
//var_dump($text2);
$text3 = <<<SQL
SELECT COUNT(id) FROM data WHERE id LIKE '%{$qwerty}%'
SQL;
$text4 = <<<JS
documnt.body.getAttribute('title');
JS;
var_dump($text3, $text4);
$text5 = 'test \n123 * $444 + ' . $qwerty;
//var_dump($text5);

$text6 = sprintf('test \n123 * $444 + %d', $qwerty);
//var_dump($text6);

//var_dump(__FDIR__, __FILE__, __LINE__);

$name = array(
    'Alex',
    'Shvakel',
    'Evgenivich',
);
foreach ($name as $value);
var_dump($value . PHP_EOL);







