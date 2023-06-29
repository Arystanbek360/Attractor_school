<?php

class Model
{
    public static string $table = "base_table";

    public static function getTable(): void
    {
        echo static::$table;
    }
}

class User extends Model
{
    public static string $table = "users";
}

User::getTable();
$User = new User;