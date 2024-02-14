<?php
// Получаем текущий день недели
$dayOfWeek = date("N");

switch ($dayOfWeek) {
    case 1:
        $day = "понедельник";
        break;
    case 2:
        $day = "вторник";
        break;
    case 3:
        $day = "среда";
        break;
    case 4:
        $day = "четверг";
        break;
    case 5:
        $day = "пятница";
        break;
    case 6:
        $day = "суббота";
        break;
    case 7:
        $day = "воскресенье";
        break;
}
//дата в формате "число.месяц.год"
$currentDate = date("d.m.Y");

echo "Сегодня $day, $currentDate";
?>
