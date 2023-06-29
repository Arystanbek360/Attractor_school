<?php
echo "\n";

//echo "Hello world\n";
//fwrite(STDOUT, "Hello world\n");
//$val = trim(fgets(STDIN));
//echo $val;
//===============================================================
//$fs = fopen("test.txt", 'w');
//
//$my_text = "Twinkle, twinkle, little star,\n";
//$my_text .= "How I wonder what you are.\n";
//$my_text .= "Up above the world so high,\n";
//$my_text .= "Like a diamond in the sky.\n";
//
//if ($fs) {
//    if (fwrite($fs, $my_text) !== false) {
//        echo "Вы удачно записали файл\n";
//    } else {
//        echo "Вы неудачно записали файл\n";
//    }
//} else {
//    echo "Failed open stream\n";
//}
//
//
//fclose($fs);

//$fs = fopen("test.txt", "r");
//
//if ($fs) {
//    while (!feof($fs)) {
//        echo fgetc($fs);
//    }
//} else {
//    echo "Ошибка\n";
//}
//
//fclose($fs);

//$fs = fopen("test.txt", "r");
//
//if ($fs) {
//    while (!feof($fs)) {
//        fseek($fs, ftell($fs));
//        echo fgetc($fs);
//    }
//} else {
//    echo "Ошибка\n";
//}
//
//fclose($fs);

//$fileName = "test.txt";
//$fileSize = filesize($fileName);
//$fs = fopen("test.txt", "r+");
//
//if ($fs) {
//    for ($i = 0; $i < $fileSize; $i++) {
//        if ($i % 2 === 1) {
//            fwrite($fs, "*");
//        } else {
//            fseek($fs, ftell($fs) + 1);
//        }
//    }
//} else {
//    echo "Ошибка\n";
//}
//
//fclose($fs);

//readfile('test.txt');
//$content = file_get_contents('https://google.com');
//file_put_contents('test2.txt', "hello world!\n");
//echo $content;

var_export(file('test2.txt'));