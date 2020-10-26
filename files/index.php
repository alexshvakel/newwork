<?php

$config = require  __DIR__ . '/config.php';

$content = scandir($config['baseDir']);

var_dump($content);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach ($content as $rout) : ?>
        <li><a> <? $rout ?></a></li>
        <?php  endforeach;?>
    </ul>

</body>
</html>
