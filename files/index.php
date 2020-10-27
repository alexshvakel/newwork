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

<?php

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


