<?php
$email = 'alex-ber3_4g-mail@google.com';
$pattern = '/^[a-z0-9-_]+@[a-z]+.[a-z]+$/';
//var_dump(preg_match($pattern, $email));

////var_dump(preg_match('/^r$/', 'rrrrrrrrr'));
////var_dump(preg_match('/^r$/', 'r'));
////var_dump(preg_match('/^r+$/', 'rrrrrrrrr'));
//Потому что здесь есть значек + что говорит о нескольких элементах

//var_dump(preg_match('/^r?$/', 'r'));
//var_dump(preg_match('/^r?$/', ''));
//var_dump(preg_match('/^r?$/', 'rrr'));

//var_dump(preg_match('/^r*$/', 'r'));
//var_dump(preg_match('/^r*$/', ''));
//var_dump(preg_match('/^r*$/', 'rrr'));


//var_dump(preg_match('/^r{1}$/', 'r'));
//var_dump(preg_match('/^r{1,2}$/', ''));
//var_dump(preg_match('/^r{3,}$/', 'rrrrrrrrr'));

//var_dump(preg_match('/^r{1,}$/', 'r'));             //='/^r+$/'
//var_dump(preg_match('/^r{0,}$/', ''));              //='/^r*$/'
//var_dump(preg_match('/^r{0,1}$/', 'rrrrrrrrr'));    //='/^r?$/'


//var_dump(preg_match('/М[аи]ша/u', 'Маша'));
//var_dump(preg_match('/М[аи]ша/u', 'Миша'));
//var_dump(preg_match('/М[аи]ша/u', 'иша'));
// После /u нужен модивикатор для того чтобы понимать на рус
//Знак ^ значение как ! "НЕ"

//var_dump(preg_match('/М(а|и)ша/ui', 'Миша'));
//var_dump(preg_match('/(тр[ау]м-?)*/', 'трам-трам-трумтрам-трум-трамтрум'));

$date = '13.03.2022';
$pattern = '#^(?<days>\d{2})\.(?<months>\d{2})\.(?<years>\d{4})$#';
$matches = [];

if (preg_match($pattern, $date, $matches) !== false) {
    print "Days: {$matches['days']}\n";
    print "Months: {$matches['months']}\n";
    print "Years: {$matches['years']}\n";
} else {
    print 'Error!';
}







