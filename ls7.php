<?php
declare(strict_types=1);

// echo "Ведите оценку: ";
// $mark = trim(fgets(STDIN));

// if ($mark >= 75) {
//     echo "Хорошо!";
// } elseif ($mark >= 90) {
//     echo "Отлично!";
// } else {
//     echo "Нужно подтянуть!";
// }


echo "ведите оценку: ";
$mark = trim(fgets(STDIN));

if ($mark > 100) {
    echo "максимальное число это 100!!!";
} elseif ($mark < 0) {
    echo "минимальное число это 0!!!";
} elseif ($mark <= 100  && $mark > 80) {
    echo "идеально!";
} elseif ($mark <= 80 && $mark > 60) {
    echo "отлично!";
} elseif ($mark <= 60 && $mark > 40) {
    echo "хорошо!";
} elseif ($mark <= 40 && $mark > 20){
    echo "не плохо!";
} else {
    echo "нужно подтянуть!";
}