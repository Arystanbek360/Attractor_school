<?php

class Reader {
    private $name;
    private $ticketNumber;

    public function __construct($name, $ticketNumber) {
        $this->name = $name;
        $this->ticketNumber = $ticketNumber;
    }

    public function getName() {
        return $this->name;
    }

    public function getTicketNumber() {
        return $this->ticketNumber;
    }
}

class ReaderRegistry {
    private static $registry = array();

    public static function register(Reader $reader) {
        self::$registry[$reader->getTicketNumber()] = $reader;
    }

    public static function getReaders() {
        $readers = array();
        foreach(self::$registry as $ticketNumber => $reader) {
            $readers[$ticketNumber] = $reader->getName();
        }
        return $readers;
    }
}

// Create readers
$reader1 = new Reader("John Smith", "a1b2c3");
$reader2 = new Reader("Jane Doe", "d4e5f6");
$reader3 = new Reader("Bob Johnson", "g7h8i9");
$reader4 = new Reader("Samantha James", "j0k1l2");

// Register readers
ReaderRegistry::register($reader1);
ReaderRegistry::register($reader2);
ReaderRegistry::register($reader3);
ReaderRegistry::register($reader4);

// Get all registered readers
$readers = ReaderRegistry::getReaders();
print_r($readers);
