<?php
$students = [
    [
        'name' => 'Иван',
        'score' => 4.5
    ],
    [
        'name' => 'Мария',
        'score' => 5
    ],
    [
        'name' => 'Петр',
        'score' => 3.7
    ]
];

function getAverageScore(array $students = []) : float {
    $sum = 0;

    foreach ($students as $student) {
        $sum += $student['score'];
    }
    
    return $sum / count($students);
}

echo "Average = " . getAverageScore($students);