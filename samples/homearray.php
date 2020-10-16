<?php

$task_manager =
    [
            'task1' =>
                [
                'id1' => 777,
                 'title' => 'qwerty',
                'description' => 'project preparation',
                'owner' => 'Alex',
                'deadline' => '26.01.21',
                'status' => 'in process'
                 ],
        [
            'task2' =>
                [
                'id1' => 333,
                'title' => 'Hello world',
                'description' => 'development',
                'owner' => 'Shvakel',
                'deadline' => '27.01.21',
                'status' => 'in process'

                ],
        ],
        [
            'task3' =>
                [
                'id1' => 111,
                'title' => 'Success',
                'description' => 'Reach the goal',
                'owner' => 'Evgenevich',
                'deadline' => '28.01.21',
                'status' => 'in process'

                ],
        ]
    ];

var_dump($task_manager);




