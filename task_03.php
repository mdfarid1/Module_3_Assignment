
   <?php 
    function sortGradesDescending($grades) {
        rsort($grades); 
        return $grades;
    }
    $grades = [85, 92, 78, 88, 95];
    $sortedGrades = sortGradesDescending($grades);
    print_r($sortedGrades);
    ?>
