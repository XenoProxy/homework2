<?php 
//task 1
echo "Task 1 <br>";
$a = null;
if ($a == NULL){
    echo 'Верно <br>'; 
}else{
    echo 'Неверно <br>';
}

//task 2
echo "<br> Task 2 <br>";
$b = 156;
$b = (string)$b;
$b[1] = 0;
echo $b . '<br>';

//task 3
echo "<br> Task 3 <br>";
$a = 3;
$b = 5;
if ($a <=1 && $b >= 3){
    echo $a + $b . '<br>';
}else {
    echo $a - $b . '<br>';
}

//task 4
echo "<br> Task 4 <br>";
$str = 'abcde';
if ($str[0] == 'a'){
    echo 'да <br>';
} else{
    echo 'нет <br>';
}

//task 5
echo "<br> Task 5 <br>";
$c = '172956';
$sum1 = $c[0] + $c[1] + $c[2];
$sum2 = $c[3] + $c[4] + $c[5];
if ($sum1 == $sum2){
    echo 'да <br>';
} else{
    echo 'нет <br>';
}

//task 6 
echo "<br> Task 6 <br>";
$degree = 190;
$hour = ceil($degree / 30); // округляем в бОльшую сторону
echo "Прошёл $hour час <br>";

//task 7
echo "<br> Task 7 <br>";
$sum = 0;
for($i = 20; $i <= 45; $i++){
    if ($i % 5 == 0){
        $sum += $i;
    }
}
echo $sum, '<br>';

//task 8
echo "<br> Task 8 <br>";
$num = 18552;
$num = (string) $num;
for($i = 0; $i < strlen($num); $i++){
    if ($i % 2 != 0){
        $num[$i] = 0;
    }
}
echo $num, '<br>';

//task 9 
echo "<br> Task 9 <br>";
$i = 0;
$num = 1000;
do {
    $num = $num / 2;
    $i++;
} while ($num >= 50);
echo $i, '<br>';

//task 10
echo "<br> Task 10 <br>";
$n = 5;
for ($i = 0; $i < $n; $i++){
    echo str_repeat('*', $n) . '<br>';
}
?>