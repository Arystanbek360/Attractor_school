<?php

namespace Hw42;

use PhoneBook\IContact;

class Contact implements IContact
{
    /**
     * @var string name
     */
    private string $name;
    /**
     * @var string phone
     */
    private string $phone;

    /**
     * @return string name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string phone
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string html
     */
    public function toHtml(): string
    {
        $key = uniqid();
        return '<label>Имя</label>
    <input type="text" name="contact[' . $key . '][name]" value="' . $this->getName() . '">
    <label>Телефон</label>
    <input type="text" name="contact[' . $key . '][phone]" value="' . $this->getPhone() . '"> 
    <br>';
    }

    /**
     * @return string[] [name,phone]
     */
    public function toArray(): array
    {
        $arr = ['name' => $this->getName(), 'phone' => $this->getPhone()];
        return $arr;
    }
}