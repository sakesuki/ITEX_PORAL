<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $randomNum = rand(1, 100);
    $random01 = rand(1, 10);
    $random02 = rand(1, 10);
    $count = 0;
    ?>

    <p><?php echo ($randomNum); ?></p>
    <br>

    <?php if ($randomNum % 3 === 0 && $randomNum % 6 === 0):?>
        <p> "3と6の倍数です";</p>
    <?php elseif ($randomNum % 3 === 0):?>
        <p>"3の倍数で、6の倍数ではありません</p>
    <?php else: ?>
        <p>倍数ではありません</p>
    <?php endif;?>
    <hr>

    <?php if ($random01 % 3 === 0):$count++;endif;?>
    <?php if ($random02 % 3 === 0):$count++;endif;?>

    <?php if ($random01 > $random02): ?>
    <?php if ($count === 0): ?>
    <p>random01 = <?php echo $random01?> <br> random02 = <?php  echo $random02 ?>です。<br>random01の方が大きいです。<br>2つの数字の中に3の倍数が含まれていません;</p>

    <?php else: ?>
    <p>random01 = <?php echo  $random01 ?> <br>random02 = <?php  echo $random02 ?>です。<br>random01の方が大きいです。<br> 2つの数字の中には3の倍数が<?php echo $count ?>含まれています。</p>

    <?php endif; ?>
    <?php endif; ?>

    <?php if ($random01 < $random02):?>
        <?php if ($count===0): ?>
        <p>random01 =<?php  echo $random01?> <br>random02 = <?php echo  $random02 ?>です。<br>random02の方が大きいです。<br>2つの数字の中に3の倍数が含まれていません ;</p>
            <?php else: ?>
            <p>random01 =<?php  echo $random01 ?><br>random02 =<?php echo  $random02 ?>です。<br>random02の方が大きいです。<br>2つの数字の中には3の倍数が<?php echo  $count ?>含まれています。</p>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($random01===$random02): ?>
        <?php if ($count===0):?>
            <p>random01 =<?php  echo $random01?><br>random02 = <?php echo  $random02 ?>です。<br>2つは同じ数です。<br>2つの数字の中に3の倍数が含まれていません。</p>
        <?php else:?>
                <p>random01 = <?php  echo $random01 ?><br>random02 =<?php  echo $random02 ?>です。<br>2つは同じ数です。<br>2つの数字の中には3の倍数が<?php echo  $count?>含まれています。</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>
