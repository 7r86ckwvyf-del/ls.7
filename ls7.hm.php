<?php
declare (strict_types=1);

//echo "ваш возраст?";
//$age = trim(fgets(STDIN));
//echo $age;

//if ($age<=6) {
//    echo "за ребенка бесплатно";
//} elseif ($age<=18) {
 //   echo "с вас 15 евро";
//} elseif ($age>18) {
//    echo "с вас 30 евро";
//}elseif ($age>=65) {
//    echo "  с вас 30 * 0.9";
//}else {
//    echo "досвидания!!!";
//}

echo "ваш возраст?";
$age = trim(fgets(STDIN));

if ($age > 18) {
    echo "вы уже ококнчили школу!";
} elseif ($age == 6 ) {
    echo "вы в 1 классе!";
} elseif ($age == 7 ) {
    echo "вы в 2 классе!";
}elseif ($age == 8 ) {
    echo "вы в 3 классе!";
} elseif ($age == 9 ) {
    echo "вы в 4 классе!";
} elseif ($age == 10 ) {
    echo "вы в 5 классе!";
} elseif ($age == 11 ) {
    echo "вы в 6 классе!";
} elseif ($age == 12 ) {
    echo "вы в 7 классе!";
} elseif ($age == 13 ) {
    echo "вы в 8 классе!";
} elseif ($age == 14 ) {
    echo "вы в 9 классе!";
} elseif ($age == 15 ) {
    echo "вы в 10 классе!";
} elseif ($age == 16 ) {
    echo "вы в 11 классе!";
} elseif ($age == 17 ) {
    echo "вы в 12 классе!";
} else {
    echo "хорошего учебного года!!!";
}