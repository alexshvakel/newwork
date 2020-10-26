<?php

error_reporting(E_ALL);

$diet =
    [
       'Monday' =>
            [
                'Breakfast' =>
                [
                    'oatmeal' => 98,
                    'egg' => 157,
                    'bread' => 100,
                    'peanut paste' => 79
                ],
                'Lunch' =>
                [
                    'rice' => 344,
                    'meat' => 110,
                    'vegetables' => 20
                ],
                'Diner' =>
                [
                    'potato' => 150,
                    'fish' => 170,
                    'vegetables' => 20
                ],

            ],
        'Tuesday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 157,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]

            ],
        'Wednesday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 157,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]

            ],
        'Thursday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 157,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]

            ],
        'Friday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 157,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]

            ],
        'Saturday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 157,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]

            ],
        'Sunday' =>
            [
                'Breakfast' =>
                    [
                        'oatmeal' => 98,
                        'egg' => 355,
                        'bread' => 100,
                        'peanut paste' => 79
                    ],
                'Lunch' =>
                    [
                        'rice' => 344,
                        'meat' => 110,
                        'vegetables' => 20
                    ],
                'Diner' =>
                    [
                        'potato' => 150,
                        'fish' => 170,
                        'vegetables' => 20
                    ]
            ],
    ];

foreach ($diet as $day => $day_data) {

    $total_per_day = 0;
    foreach ($day_data as $time => $time_data) {

        $total_per_time = 0;
        foreach ($time_data as $data) {
            $total_per_time += $data;
        }
        $total_per_day += $total_per_time;
    }
    echo "{$day} - {$total_per_day} Ccal </br>";

}
















