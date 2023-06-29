<?php

namespace Hw42;

use PhoneBook\IContact;
use PhoneBook\IStorage;

class Storage implements IStorage
{
    /**
     * @var string $filename
     */
    private string $filename;

    /**
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * @param array [name,phone]
     * @return IContact
     */
    public function getNewContactInstance(array $data): IContact
    {
        $contact = new Contact();
        $contact->setName($data['name']);
        $contact->setPhone($data['phone']);
        return $contact;
    }

    /**
     * @return IContact
     */
    public function getEmptyContactInstance(): IContact
    {
        $contact = new Contact();
        $contact->setPhone("");
        $contact->setName("");
        return $contact;
    }

    /**
     * @return array
     */
    public function readContacts(): array
    {
        $data = [];
        if (file_exists($this->filename)) {
            $file = json_decode(file_get_contents($this->filename), true);
            if ($file == null) {
                return [];
            } else {
                foreach ($file as $value) {
                    $contact = new Contact();
                    $contact->setName($value['name']);
                    $contact->setPhone($value['phone']);
                    $data[] = $contact;
                }
            }
        }
        if (empty($data)) {
            return [];
        }
        return $data;
    }

    /**
     * @param Contact[] $contacts
     */
    public function storeContacts(array $contacts)
    {
        foreach ($contacts as $contact) {
            if (preg_match("/^[\d]{5,}$/", $contact->getPhone())) {
                $data[] = $contact->toArray();
            }
        }
        $file = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->filename, $file);
    }
}