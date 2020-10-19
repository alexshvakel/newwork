<?php

error_reporting(E_ALL);

$task_manager =
    [
        'task1' =>
            [
                'id' => 777,
                'title' => 'qwerty',
                'description' => 'project preparation',
                'owner' => 'Alex',
                'deadline' => '26.01.21',
                'status' => 'in process'
            ],

        'task2' =>
            [
                'id' => 333,
                'title' => 'Hello world',
                'description' => 'development',
                'owner' => 'Shvakel',
                'deadline' => '27.01.21',
                'status' => 'in process'

            ],

        'task3' =>
            [
                'id' => 111,
                'title' => 'Success',
                'description' => 'Reach the goal',
                'owner' => 'Evgenevich',
                'deadline' => '28.01.21',
                'status' => 'in process'

            ],
    ];

$task_manager_2 =
    [
            [
                'task_name' =>'task1',
                'id' => 777,
                'title' => 'qwerty',
                'description' => 'project preparation',
                'owner' => 'Alex',
                'deadline' => '26.01.21',
                'status' => 'in process'
            ],
            [
                'task_name' =>'task2',
                'id' => 333,
                'title' => 'Hello world',
                'description' => 'development',
                'owner' => 'Shvakel',
                'deadline' => '27.01.21',
                'status' => 'in process'

            ],
            [
                'task_name' =>'task2',
                'id' => 111,
                'title' => 'Success',
                'description' => 'Reach the goal',
                'owner' => 'Evgenevich',
                'deadline' => '28.01.21',
                'status' => 'in process'

            ],
    ];

#############################################################
$html  = '<H2> TASK MANAGER </H2>';
$html .= '<table border="1" cellpadding="5px">';  //Начало таблици
//Начало строки
$html .= '<tr> 
                <td>Task:</td>
                <td><ID:</td>
                <td>Title:</td>
                <td>Description:</td>
                <td>Owner:</td>
                <td>Dedline:</td>
                <td>Status:</td>
            </tr>';
//Конец строки

foreach ($task_manager as $task_name => $task_data){
    $html .= '<tr>';

    $html .= '<td>' . $task_name . '</td>';
    $html .= '<td>' . $task_data['id'] . '</td>';
    $html .= '<td>' . $task_data['title'] . '</td>';
    $html .= '<td>' . $task_data['description'] . '</td>';
    $html .= '<td>' . $task_data['owner'] . '</td>';
    $html .= '<td>' . $task_data['deadline'] . '</td>';
    $html .= '<td>' . $task_data['status'] . '</td>';

    $html .= '</tr>';
}
$html .= '<table>';


##########################################################################


$html_2 = '<H2> TASK MANAGER </H2>';
for ($i = 0; $i < 3; $i++){

    $html_2 .= "<table border='1' cellpadding='5px' style='margin-top: 25px'>
                  <tr>
                    <td>Task:</td>
                    <td>ID:</td>
                    <td>Title:</td>
                    <td>Description:</td>
                    <td>Owner:</td>
                    <td>Dedline:</td>
                    <td>Status:</td>
                  </tr>
                  <tr> 
                    <td>{$task_manager_2[$i]['task_name']}</td>
                    <td>{$task_manager_2[$i]['id']}</td>
                    <td>{$task_manager_2[$i]['title']}</td>
                    <td>{$task_manager_2[$i]['description']}</td>
                    <td>{$task_manager_2[$i]['owner']}</td>
                    <td>{$task_manager_2[$i]['deadline']}</td>
                    <td>{$task_manager_2[$i]['status']}</td>
                  </tr>
                 </table>";
}
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

<?=$html_2 ?>
<?=$html ?>

</body>
</html>
