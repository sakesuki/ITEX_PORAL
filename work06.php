<?php

$randomNum = rand(1, 100);
echo ($randomNum);
echo "<br>";
if ($randomNum  % 3 === 0 && $randomNum % 6 === 0):
    echo ("3と6の倍数です");
elseif ($randomNum  % 3 === 0):
    echo ("3の倍数で、6の倍数ではありません");
else:
    echo ("倍数ではありません");
endif;
echo "<hr>";


$random01 = rand(1, 10);
$random02 = rand(1, 10);


$count = 0;
if ($random01 % 3 === 0):$count++;endif;
if ($random02 % 3 === 0):$count++;endif;

if ($random01 > $random02):
    if ($count === 0):
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random01の方が大きいです。<br>2つの数字の中に3の倍数が含まれていません";
    else:
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random01の方が大きいです。<br>" . "2つの数字の中には3の倍数が" . "$count" . "含まれています。";
    endif;
endif;

if ($random01 < $random02):
    if ($count === 0):
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random02の方が大きいです。<br>2つの数字の中に3の倍数が含まれていません";
    else:
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . "random02の方が大きいです。<br>" . "2つの数字の中には3の倍数が" . "$count" . "含まれています。";
    endif;
endif;

if ($random01 === $random02):
    if ($count === 0):
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . " 2つは同じ数です。<br>2つの数字の中に3の倍数が含まれていません";
    else:
        echo "random01 = " . $random01 . "<br>" . "random02 = " . $random02 . "です。<br>" . " 2つは同じ数です。<br>2つの数字の中には3の倍数が" . "$count" . "含まれています。";
    endif;
endif;
