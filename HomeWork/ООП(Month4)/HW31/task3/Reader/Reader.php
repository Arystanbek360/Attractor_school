<?php

namespace task3\Reader;

class Reader
{
    /** @var string $name */
    public string $name;
    /** @var string $cardNumber */
    public string $cardNumber;

    /**
     * @param string $name
     * @param string $cardNumber
     */
    public function __construct(string $name, string $cardNumber)
    {
        $this->name = $name;
        if (count(str_split($cardNumber)) == 6) {
            $this->cardNumber = $cardNumber;
        } else {
            die("В карточке должно быть 6 символов\n");
        }
    }

    /** @return string */
    public function getName(): string
    {
        return $this->name;
    }

    /** @return string */
    public function getTicketNumber(): string
    {
        return $this->cardNumber;
    }
}