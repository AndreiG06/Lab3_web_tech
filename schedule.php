<?php
// Номер текущего дня недели: 1 - понедельник ... 7 - воскресенье
$today = date('N');

$dayNames = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
];

// John Styles работает в пн, ср, пт
if ($today == 1 || $today == 3 || $today == 5) {
    $john = '8:00-12:00';
} else {
    $john = 'Нерабочий день';
}

// Jane Doe работает во вт, чт, сб
if ($today == 2 || $today == 4 || $today == 6) {
    $jane = '12:00-16:00';
} else {
    $jane = 'Нерабочий день';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3 - Расписание</title>
    <style>
        body { font-family: Verdana, sans-serif; margin: 30px; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid #555; padding: 6px 14px; }
        th { background: #dde6f0; }
    </style>
</head>
<body>
    <h2>Расписание сотрудников</h2>
    <p>Сегодня: <b><?= $dayNames[$today] ?></b>, <?= date('d.m.Y') ?></p>

    <table>
        <tr>
            <th>№</th>
            <th>Фамилия Имя</th>
            <th>График работы</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Styles</td>
            <td><?= $john ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <td><?= $jane ?></td>
        </tr>
    </table>

    <p><a href="index.php">Перейти к циклам</a></p>
</body>
</html>
