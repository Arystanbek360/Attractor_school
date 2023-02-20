<?php

function sayHello(string $name, int $repiat = 4, int $counter = 0): void
{
    $counter++;
    if ($counter < $repiat) {
        sayHello($name, $repiat, $counter);
    }
    echo getHelloMessage($name);
}

function getHelloMessage(string $name): string
{
    return sprintf("Hello %s\n", $name);
}

sayHello("John");
