
    <?php

    
$studentGrades = [
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 90, 'Science' => 85],
    'Student 3' => ['Math' => 75, 'English' => 82, 'Science' => 95],
];

function calculateAverageGrades($studentGrades) {
    $averageGrades = [];

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        $averageGrades[$student] = $average;
    }

    return $averageGrades;
}


$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $student => $average) {
    echo "$student = Average Grade: $average<br>";
}
?>

