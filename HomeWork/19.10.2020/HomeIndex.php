<?php

$messages = [];

$file = fopen(__DIR__ . '/storage', 'rb');

while ($line = fgets($file, 1024)){

    $messages [] = unserialize(trim($line));
}

fclose($file);

var_dump($messages);


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
<form action="/chat/HomeSend-Message.php" method="post">

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname">
    </div>
    <div>
        <label for="patronymic">Patronymic</label>
        <input type="text" name="patronymic" id="patronymic">
    </div>
    <div>
        <label for="message" id="message">Message</label>
        <textarea name="message" id="message" rows="10" cols="50"></textarea>
    </div>
    <button type="submit">Send Message</button>
</form>
<table width="100%" border='5' cellpadding='7px' style='margin-top: 25px'>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Patronymic</th>
        <th>Message</th>
        <th>Time</th>
    </tr>
    <?php foreach ($messages as $message) :   ?>
        <tr>
            <td><?=$message['name'] ?></td>
            <td><?=$message['surname'] ?></td>
            <td><?=$message['patronymic'] ?></td>
            <td><?=$message['message'] ?></td>
            <td><?=$message['time'] ?></td>
            <td><?=$message['time'] ?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
