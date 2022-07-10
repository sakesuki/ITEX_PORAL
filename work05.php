<?php
// ①ランダムに生成された1~100の正の整数が判定され、下記のように表示される。
// 3の倍数かつ6の倍数である場合：「3と6の倍数です」と表示
// 3の倍数であるが、6の倍数ではない場合：「3の倍数で、6の倍数ではありません」と表示
// 3の倍数ではない場合：「倍数ではありません」と表示


$randomNum = rand(1,100);
echo($randomNum);
echo "<br>";
if ($randomNum  % 3 === 0 && $randomNum % 6 === 0) {
    echo("3と6の倍数です");
} elseif($randomNum  % 3 === 0 ) {
    echo ("3の倍数で、6の倍数ではありません");
} else {
    echo("倍数ではありません");
}

echo "<hr>";
// ② ランダムに生成された1~10の正の整数（random01, random02）が判定され、下記の例ように(1)生成された数(2)どちらが大きいか(3)3の倍数の個数が表示される。

// 違う数の場合「random01 = 3, random02 = 4 です。 random02の方が大きいです。2つの数字の中には3の倍数が1つ含まれています。」
// 同じ数の場合「random01 = 3, random02 = 3 です。 2つは同じ数です。2つの数字の中には3の倍数が2つ含まれています。」
// 3の倍数が含まれていない場合、後半の文章は「2つの数字の中に3の倍数が含まれていません」と表示

$random01 = rand(1, 10);
$random02 = rand(1, 10);


$count = 0;
if($random01 % 3 === 0){
    $count++;
}

if ($random02 % 3 === 0) {
    $count++;
}

if ($random01 > $random02) {
    if ($count === 0 ) {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。" . "random01の方が大きいです。2つの数字の中に3の倍数が含まれていません" ;
    } else {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。". "random01の方が大きいです。". "2つの数字の中には3の倍数が"."$count"."含まれています。";
    }
}

if($random01 < $random02) {
    if ($count === 0) {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。" . "random02の方が大きいです。2つの数字の中に3の倍数が含まれていません";
    } else {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。" . "random02の方が大きいです。"."2つの数字の中には3の倍数が"."$count"."含まれています。";
    }
}

if($random01 === $random02) {
    if ($count === 0 ) {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。" . " 2つは同じ数です。2つの数字の中に3の倍数が含まれていません";
    } else {
        echo "random01 = " . $random01 . "," . "random02 = " . $random02 . "です。" . " 2つは同じ数です。2つの数字の中には3の倍数が"."$count"."含まれています。";
    }
}


// echo "random01 = ".$random01.","."random02 = ".$random02."です。";
