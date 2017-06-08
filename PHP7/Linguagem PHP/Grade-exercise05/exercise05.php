<?php

require_once './Grade.php';

$grade = new Grade();

echo $grade->totalGrade(10, 9, 8, 3, 2, 5);
?>