<?php
function writeZeroTable()
{
    $fs = fopen('experiment.txt', 'w');
    $row_h = -10;
    $column_h = -10;
    for ($row = 1; $row <= 23; $row++) {
        if ($row == 1) {
            fwrite($fs, ' \ |');
            for ($column = 2; $column <= 21; $column++) {
                fwrite($fs, sprintf('%3.d|', $column_h));
                $column_h++;
            }
            fwrite($fs, sprintf('%3.d', $column_h));
        } else if ($row == 2) {
            for ($column = 1; $column <= 21; $column++) {
                fwrite($fs, '---|');
            }
            fwrite($fs, '---');
        } else {
            fwrite($fs, sprintf('%3.d|', $row_h));
            for ($column = 2; $column <= 21; $column++) {
                fwrite($fs, '  0|');
            }
            fwrite($fs, '  0');
            $row_h++;
        }
        fwrite($fs, "\r\n");
    }
    fclose($fs);
}