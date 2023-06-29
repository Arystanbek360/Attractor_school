<?php


namespace PhoneBook;


interface IView
{
    /**
     * @param IContact[] $contacts
     */
    public function display(array $contacts);
}