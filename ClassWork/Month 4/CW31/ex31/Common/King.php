<?php
namespace ex31\Common;

class King
{
    private static $instance;

    private function __construct() // Защищаем от создания через new Singleton
    {
    }

    public static function getInstance() // Возвращает единственный экземпляр класса. @return Singleton
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function issueADecree($decree)
    {
        print $decree;
    }
}
