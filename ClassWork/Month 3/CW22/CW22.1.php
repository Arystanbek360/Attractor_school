<?php

//$dates = '13.03.2016, 04.12.2014, 20.11.2010, 07.01.2015';
//$dates_pattern = '#(?<date>[^, ]+)#';
//$date_pattern = '#(?<days>[0-9]{2})\.(?<months>[0-9]{2})\.(?<years>[0-9]{4})#';
//$dates_matches = [];
//$date_matches = [];
//if (preg_match_all($dates_pattern, $dates, $dates_matches) !== false) {
//    foreach ($dates_matches['date'] as $date) {
//        if (preg_match($date_pattern, $date, $date_matches) !== false) {
//            print "Days: {$date_matches['days']}\n";
//            print "Months: {$date_matches['months']}\n";
//            print "Years: {$date_matches['years']}\n\n";
//        } else {
//            print 'Date error!';
//        }
//    }
//} else {
//    print 'Dates error!';
//}


$text = 'Три-та-тушки,
Три-та-та
Вышла кошка за кота,
За кота котовича,
За петра петровича.';

preg_match_all('#(?<first_word>[а-я\s]+).*[\n\r]*#umi', $text, $matches);
var_export($matches['first_word']);

