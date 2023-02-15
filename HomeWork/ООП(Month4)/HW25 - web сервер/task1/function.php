<?php

function printTableResult($ticket): void
{
    $pattern = "/^([\d]{2}\s[\w]{3,8})[\s]{1,}(“[\w\s:,!?]+”)[\s]{1,}([-,\w ]+)/mu";
    if (preg_match_all($pattern, $ticket, $matches)) {
        foreach ($matches[3] as $key => $item) {
            $new = explode(", ", $item);
            $matches[3][$key] = $new;
        }

        $data = $matches[1];
        $name = $matches[2];
        $genre = $matches[3];

        print '<table border="1">
        <tr>
            <th>Дата</th>
            <th>Название</th>
            <th>Жанр</th>
        </tr>
        <tr>';

        for ($i = 0; $i < count($name); $i++) {
            print '<tr>';
            print '<td rowspan="' . count($genre[$i]) + 1 . '">' . $data[$i] . '</td>';
            print '<td rowspan="' . count($genre[$i]) + 1 . '">' . $name[$i] . '</td>';

            foreach ($genre[$i] as $item) {
                print '<tr>';
                print '<td>' . $item . '</td>';
                print '</tr>';
            }

            print'</tr>';
        }
        print '</tr>
    </table>';
    } else {
        print "Расписание еще не вышло!";
    }
}

