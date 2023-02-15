<?php

$levels = fileOpen();

initGame($levels);

function fileOpen()
{
    $options = getopt('e:h', ['level:', 'help']);

    if (isset($options['h']) || isset($options['help'])) {
        exit('  -l  --level    уровень сложности
  -h  --help     помощь');
    }

    if (isset($options['l']) || isset($options['level'])) {
        return $levels = $options['l'] ?? $options['level'];
    }
    return 0;
}

function initGame($levels = 0): void
{
    $round = 1;
    while (true) {
        echo "\nRound: " . $round . "\n";
        $words = getWords();
        $playedWords = getPlayed();
        $word = getWord($words, $playedWords);

        $mistake = 0;
        $attempt = 0;
        $answers = [];

        difficultyLevel($word, $answers, $levels);
        showHangman($mistake, $word);


        while (true) {

            showAlphabetLetter($answers);
            $answer = getAnswer($word, $playedWords, $attempt);

            $mistake += comparisonLetter($answer, $word);
            $answers[] = $answer;
            $openedLettersWord = getOpenedLetter($word, $answers, $answer);

            if ($mistake < 6) {
                echo $openedLettersWord . "\n";
            }
            $attempt++;

            if ($word === $openedLettersWord) {
                echo "You win! The word was '" . $word . "'. You won in " . $attempt . " tries.";
                break;
            }
            $stop = showHangman($mistake, $word);
            if ($stop == 225) {
                break;
            }
        }

        exitGame($playedWords);
        $round++;
    }
}

function difficultyLevel(string $word, array &$answers, int $levels): void
{
    $level = $levels;

    $hiddenWord = hideLetters($word);
    $pattern = "/[123]{1}/";

    if ($level < 4 && $level > 0) {
        for ($i = 0; $i < $level; $i++) {
            $letters = str_split($word);
            $index = rand(0, count($letters));
            if ($index !== 0) {
                $letter = $letters[$index - 1];
            } else {
                $letter = $letters[0];
            }
            if (in_array($letter, $answers)) {
                $i--;
            } else {
                $answers[] = $letter;
            }
        }
        echo getOpenedLetter($word, $answers, $letter);
        echo "\n";
    } else {
        echo $hiddenWord . "\n";
    }

}

function showAlphabetLetter(array $answers): void
{
    $enumLetters = implode('', $answers);
    $pattern = "/[$enumLetters]/i";
    $alphabet = "a b c d e f g h i j k l m\nn o p q r s t u v w x y z\n\n";

    echo "You have not entered such letters yet:\n";
    if (!empty($answers)) {
        echo preg_replace
        ($pattern,
            ' ',
            $alphabet
        );
    } else {
        echo $alphabet;
    }
}

function getWords(): array
{
    $words = file('word.txt');

    if (!$words || !count($words)) {
        exit("\nWords not found\n");
    }

    return array_map('trim', $words);
}

function getPlayed(): array
{
    $playedWords = file('played.txt');

    if (!$playedWords) {
        $playedWords = [];
    } else {
        $playedWords = array_map('trim', $playedWords);
    }
    return $playedWords;
}

function getWord(array &$words, array &$playedWords): string
{
    $check = array_diff($words, $playedWords);
    if (empty($check)) {
        die("\nAll words played\n");
    }

    $index = rand(0, count($words) - 1);
    $word = $words[$index];

    foreach ($playedWords as $item) {
        if (preg_match("/$item/im", $word)) {
            return getWord($words, $playedWords);
        }
    }


    $playedWords[] = $word;
    unset($words[$index]);

    return $word;
}

function getAnswer(string $word, array $playedWords, int $attempt): string
{
    echo "Enter letter or word: ";
    echo "\n>";
    $answer = trim(fgets(STDIN));
    $count = strlen($answer);
    if (preg_match("/[\W\d]/im", $answer)) {
        echo "You must be enter Letter or Word\n";
        return getAnswer($word, $playedWords, $attempt);
    } elseif (preg_match("/[\w]{$count}/im", $answer)) {
        return getAnswer($word, $playedWords, $attempt);
    } elseif (preg_match("/ /m", $answer)) {
        echo "You must not enter a space!\n";
        return getAnswer($word, $playedWords, $attempt);
    }
    if ($word === $answer) {
        echo 'You win! The word was "' . $word . '". You won in ' . $attempt . ' tries.';
        exitGame($playedWords);
        initGame();
    }
    return $answer;
}

function comparisonLetter($answer, $word): int
{
    $arr = str_split($word);
    foreach ($arr as $letter)
        if ($answer == $letter) {
            return 0;
        }
    return 1;
}

function hideLetters(string $word): string
{
    return preg_replace('/^[\w]{3,}$/i', str_repeat('*', strlen($word)), $word);
}

function getOpenedLetter(string $word, array $letters, $answer): string
{
    $enumLetters = implode('', $letters);
    $pattern = "/[^$enumLetters]/i";
    $pattern2 = "/[^$word]/i";

    if (preg_match($pattern2, $answer) == true) {
        echo "There is no such letter!\n";
    }

    return preg_replace
    ($pattern,
        '*',
        $word
    );
}

function showHangman(int $i, string $word)
{
    $Hangman = [
        " ______
|     |
|
|    
|    
|
|__________\n", " ______
|     |
|     0
|    
|    
|
|__________\n", " ______
|     |
|     0
|     |
|    
|
|__________\n", " ______
|     |
|     0
|    /|
|    
|
|__________\n", " ______
|     |
|     0
|    /|\
|    
|
|__________\n", " ______
|     |
|     0
|    /|\
|    / 
|
|__________\n", " ______
|     |
|     0
|    /|\
|    / \
|
|__________\n"
    ];
    if ($i < 6) {
        echo $Hangman[$i];
    } else {
        echo $Hangman[6];
        echo 'No, there is no such letter in this word. Your number of tries left: 0
Game over! The word was "' . $word . '".';
        return 225;
    }
}

function savePlayedWords(array $words): void
{
    $resultWords = implode("\n", $words);
    file_put_contents('played.txt', $resultWords);
}

function exitGame($playedWords): void
{
    savePlayedWords($playedWords);
    echo "\nWrite 'exit' to exit Game: ";
    $enter = trim(fgets(STDIN));
    if (preg_match('/exit/im', $enter)) {
        die('Goodbye!');
    }
    echo "=======================================";
}