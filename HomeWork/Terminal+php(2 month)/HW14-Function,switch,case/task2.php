<?php
$DayOfWeek = [
    '1' =>
    "Понедельник:
        07:00–07:30	думаю с нас нужна сама логика как это будет выглядеть
        07:30–08:00	Завтрак, сборы в школу",
    '2' =>
    "Вторник:
        08:00–08:15	Думаю это не ошибка)
        08:30–12:30	 Уроки в школе",
    '3' =>
    "Среда:
        07:00–07:30	Ничего интересного не предумал чем просто взять и скопировать с понедельника
        07:30–08:00	Завтрак, сборы в школу",
    '4' =>
    "Четверг:
        16:00–16:15	 Что ж поделать если фантазии у меня мало
        16:15–17:30	 Выполнение домашнего задания",
    '5' =>
    "Пятница:
        12:30–14:00	 Думаю за такое отнимать баллы не будете если просто пишу всякое
        14:00–14:30	 Обед
        14:30–16:00	 Отдых, сон или прогулка, занятие в кружке",
    '6' =>
    "Субботу:
        17:30–19:00	 делаю вид что это мое расписание
        19:00–19:30	 Ужин",
    '7' =>
    "Воскресенье:
        19:30–20:30     где-то нашел в интернете готовое детское расписание))
        20:30–21:00	 Вечерние процедуры, приготовление одежды на завтра
        21:00–07:00	 Сон",
];

echo "Введите день недели (1, 2, 3...):";
$day = trim(fgets(STDIN));

switch ($day) {
    case '1':
        echo $DayOfWeek[1];
        break;
    case '2':
        echo $DayOfWeek[2];
        break;
    case '3':
        echo $DayOfWeek[3];
        break;
    case '4':
        echo $DayOfWeek[4];
        break;
    case '5':
        echo $DayOfWeek[5];
        break;
    case '6':
        echo $DayOfWeek[6];
        break;
    case '7':
        echo $DayOfWeek[7];
        break;
    default:
        echo "Такого дня нету) введите другой день недели";
}
