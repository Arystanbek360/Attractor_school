<?php
$task = 'У лукоморья дуб зелёный;
Златая цепь на дубе том:
И днём и ночью кот учёный
Всё ходит по цепи кругом;';


function sortingWord($sort): void
{
    $pattern = '/[Б|В|Г|Д|Ж|З|Й|К|Л|М|Н|П|Р|С|Т|Ф|Х|Ц|Ч|Ш|Ь|Й|Щ]{1}[А|И|О|У|Ы|Ё|Э|Я|Е|Ю]{1}[Б|В|Г|Д|Ж|З|Й|К|Л|М|Н|П|Р|С|Т|Ф|Х|Ц|Ч|Ш|Ь|Й|Щ]{1}/miu';

    if (preg_match_all($pattern, $sort, $word, PREG_PATTERN_ORDER) !== false) {
    }
    if (preg_match_all($pattern, $sort, $matches, PREG_PATTERN_ORDER, -7) !== false) {
    }
    $word[0][] = $matches[0][0];
    var_export($word);

}

sortingWord($task);