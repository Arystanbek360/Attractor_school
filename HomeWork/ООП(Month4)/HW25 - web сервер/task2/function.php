<?php

function process(): void
{
    validateNumber($_POST);
    saveNumberContact($_POST);
    $contacts = getContactsData();
    showNumbersInput($contacts);
}

function validateNumber(array &$numbers): void
{
    foreach ($numbers as $key => $value) {
        if (preg_match("/[\d+-]{3,}/m", $value)) {
        } else {
            unset($numbers[$key]);
        }
    }
}

function getContactsData(): array
{
    $contacts = [];
    if (file_exists('contacts.json')) {
        $contacts = file_get_contents('contacts.json');
        $contacts = json_decode($contacts, true);
    }
    if (empty($contacts)) {
        return [];
    }
    return $contacts;
}

function saveNumberContact($contacts)
{
    $fs = fopen('contacts.json', "w");
    fwrite($fs, json_encode($contacts));
}

function showNumbersInput($numbers)
{
    $position = 0;
    print '<form method="post" action="task2.php" id="form1">';

    if (count($numbers) >= 1) {
        foreach ($numbers as $number) {
            $position++;
            print '<label for="contact">' . "#" . $position . '</label>
           <input type="text" name="contact' . $position . '" value="' . $number . '" id="contact"/><br>';
        }
    }
    $position++;

    print '<label for="contactNew">' . "#" . $position . '</label>
           <input type="text" name="contact" value="" id="contact"/>
           <button type="submit" form="form1" value="Submit">Сохранить</button>
   </form>';
}
