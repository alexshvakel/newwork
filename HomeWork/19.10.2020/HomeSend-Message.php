<?php

$name = $_POST['name'] ?? null;

$message = $_POST['message'] ?? null;

$surname = $_POST['surname'] ?? null;

$patronymic = $_POST['patronymic'] ?? null;

$bad_array = ['Дура', 'Коза', 'Блять', 'Сука', 'Чмо', 'Дибил'];
if (!empty($message)) {
    foreach($bad_array as $word) {
        if (strpos($message, $word) !== false) {
            exit('BAD WORDS!!!');
        }
    }
}

if (!$name || !$message) {

    exit('Name and message are required');
}
$data = [

    'name' => $name,

    'surname' => $surname,

    'patronymic' => $patronymic,

    'message' => nl2br($message),

    'time' => date('Y-m-d h:i:s')

        ];


$content = serialize($data) . PHP_EOL;

file_put_contents(__DIR__ . '/storage', $content, FILE_APPEND );

header('Location: /chat/HomeIndex.php');
exit;
