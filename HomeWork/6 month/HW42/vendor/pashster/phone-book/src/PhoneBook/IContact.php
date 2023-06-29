<?php


namespace PhoneBook;


interface IContact
{
    public function getName() : string;
    public function setName(string $name);
    public function getPhone() : string;
    public function setPhone(string $phone);
    public function toHtml() : string;
    public function toArray() : array;
}