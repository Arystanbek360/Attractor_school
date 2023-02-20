<?php

function makeCofe(string $cofe): void
{
    switch ($cofe) {
        case 'capuchino':
            echo 'make capuchino(milk,cofe,water)';
            break;
        case 'Americano':
            echo 'make Americano (cofe,water)';
            break;
        default:
            echo 'This cofe not available';
    }
}

makeCofe('Ame');
