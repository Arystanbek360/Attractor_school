<?php


namespace PhoneBook;


interface IStorage
{
    public function getNewContactInstance(array $data) : IContact;

    public function getEmptyContactInstance() : IContact;

    /**
     * @return IContact[]
     */
    public function readContacts() : array;

    /**
     * @param IContact[] $contacts
     */
    public function storeContacts(array $contacts);
}