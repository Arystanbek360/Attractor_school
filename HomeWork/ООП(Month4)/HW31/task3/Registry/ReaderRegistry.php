<?php

namespace task3\Registry;

use task3\Reader\Reader;

class ReaderRegistry
{
    /** @var array $registry */
    private static array $registry;

    /** */
    private function __construct()
    {
    }

    /** @param Reader $reader */
    public static function register(Reader $reader)
    {
        $key = $reader->getTicketNumber();
        if (!isset(self::$registry["$key"])) {
            self::$registry[$key] = $reader;
        } else {
            die("Читательский билет с таким номером уже занят");
        }
    }

    /** @return array */
    public static function getReaders()
    {
        $readers = [];
        foreach (self::$registry as $ticketNumber => $reader) {
            $readers[$ticketNumber] = $reader->getName();
        }
        return $readers;
    }
}


