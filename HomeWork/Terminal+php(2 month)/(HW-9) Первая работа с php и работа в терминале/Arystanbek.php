<?php
echo 'Enter your name:';
$name = fgets(STDIN);

echo 'Enter your lastname:';
$lastname = fgets(STDIN);

echo 'How old are you?:';
$age = fgets(STDIN);

echo 'Enter about you:';
$about = fgets(STDIN);

echo ("\n====================
======Profile=======
====================\n| Name: {$name}| Lastname: {$lastname}| Age: {$age}| About:\n| ---> {$about}===================\n");
