<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3 - Циклы</title>
    <style>
        body { font-family: Verdana, sans-serif; margin: 30px; }
        .block { border: 1px solid #aaa; padding: 10px 16px; margin-bottom: 16px; width: 320px; }
    </style>
</head>
<body>
<h2>Циклы</h2>

<div class="block">
    <h3>Цикл for</h3>
    <?php
    $a = 0;
    $b = 0;

    for ($i = 0; $i <= 5; $i++) {
        $a += 10;
        $b += 5;
        echo "Итерация $i: a = $a, b = $b<br>";
    }

    echo "<p>End of the loop: a = $a, b = $b</p>";
    ?>
</div>

<div class="block">
    <h3>Цикл while</h3>
    <?php
    $a = 0;
    $b = 0;
    $i = 0;

    while ($i <= 5) {
        $a += 10;
        $b += 5;
        echo "Итерация $i: a = $a, b = $b<br>";
        $i++;
    }

    echo "<p>End of the loop: a = $a, b = $b</p>";
    ?>
</div>

<div class="block">
    <h3>Цикл do-while</h3>
    <?php
    $a = 0;
    $b = 0;
    $i = 0;

    do {
        $a += 10;
        $b += 5;
        echo "Итерация $i: a = $a, b = $b<br>";
        $i++;
    } while ($i <= 5);

    echo "<p>End of the loop: a = $a, b = $b</p>";
    ?>
</div>

<p><a href="schedule.php">Перейти к расписанию</a></p>
</body>
</html>
