<?php

$Hangman = [
  '
     ______
    |     |
    |
    |    
    |    
    |
    |__________
    
    ', ' 
     ______
    |     |
    |     0
    |    
    |    
    |
    |__________
    
    ', '
     ______
    |     |
    |     0
    |     |
    |    
    |
    |__________
   
   ', '
    ______
   |     |
   |     0
   |    /|
   |    
   |
   |__________
  
  ', ' 
     ______
    |     |
    |     0
    |    /|\
    |    
    |
    |__________
    
    ', '
    ______
   |     |
   |     0
   |    /|\
   |    / 
   |
   |__________
   
   ', '
   ______
  |     |
  |     0
  |    /|\
  |    / \
  |
  |__________
  
  '
];

// Слова 
$ArrayWord = ["ups", "kek", "lol"];
// подсказки
$PromptWord = ["When we say", "Word k..", "Word l.."];
// Создает массив с кучей ______
$still = array_fill(0, 10, "_");
// Рандомное число для вывода на экран
$rand = array_rand($ArrayWord);
//  Сама подсказка
$prompt = $PromptWord[$rand];
// Слово которые выбирает рандом из массива
$word = $ArrayWord[$rand];
// Как вытянуло слово он дробит слово на буквы и создает другой массив
$letter = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
// Сокращение
$l = $letter;
// количество букв в слове
$Many = count($l);


// Если допустишь ошибку или нет

for ($i = 0; $i < 7;) {
  // Показывает жизни
  var_export($Hangman[$i]);

  // Показывает Поля ввода и подсказку
  echo "\nКоличество символов в слове\n";
  echo implode(" ", $still);
  echo "\n" . $prompt . "\n";
  echo "Enter your letter:\n";
  $enter = trim(fgets(STDIN));
  echo "\n";

  // Буквы которые использовали
  $used[] = $enter;
  echo "Буквы которые мы использовали:\n";
  var_export(implode(" ", $used));

  // Для проверки была ли такая буква в массиве
  // if (in_array($used) == true) {
  //   $checkUse = in_array($enter, $used);

  //   if ($checkUse == true) {
  //     echo "\nВы уже ввели такую букву\n";
  //   }
  // }




  // Присваиваю для проверки
  $check = in_array($enter, $l);
  echo $check;

  // Условия
  if ($check == true) {
    // $used
  } elseif ($check != true) {
    $i = $i + 1;
  }
}



// if ($l = $enter)
// while ($i<7 && $still != $l)

var_dump($l);
