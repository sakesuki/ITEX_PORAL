<?php
$randomNum = rand(1,100);
echo($randomNum);
echo "<br>";

switch($randomNum) {
    case($randomNum % 3 === 0 && $randomNum % 6 === 0):
        echo ("3と6の倍数です");
        break;
    case ($randomNum % 3 === 0):
        echo ("3の倍数で、6の倍数ではありません");
        break;
    default:
        echo ("倍数ではありません");
    }

echo "<hr>";

$random01 = rand(1, 10);
$random02 = rand(1, 10);
$count = 0;


switch($random01){
    case($random01 % 3 === 0):
        $count++;
    break;
}

switch($random02) {
    case ($random02 % 3 === 0):
        $count++;
    break;
}
var_dump($random01 ,$random02);
echo "<br>";

switch($random01){
    case $random01 > $random02:
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random01の方が大きいです。";
    break;

    case $random01 < $random02:
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random02の方が大きいです。";
    break;

    case $random01 === $random02:
        echo  "2つは同じ数です。";
        break;
}

switch($count) {
    case 0 :
        echo "2つの数字の中に3の倍数が含まれていません";
    break;

    case 1:
        echo "2つの数字の中には3の倍数が1つ含まれています。";
    break;

    case 2:
        echo "2つの数字の中には3の倍数が2つ含まれています。";
    break;
}
