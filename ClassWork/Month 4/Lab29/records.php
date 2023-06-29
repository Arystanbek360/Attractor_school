<?php

class Types
{
    const ARTICLE = 1;
    const NEWS = 2;
    const DISCOUNT = 3;
}

class DB
{
    public static function getRecords()
    {
        $recordsData = [];
        $recordsData[] = [
            "type" => Types::DISCOUNT,
            "body" => "Мега скидка на Ноутбук Acer Extensa EX2519-C8EG (NX.EFAER.030)",
            "price" => "17 990 руб",
            "discount" => "5.5%"
        ];

        $recordsData[] = [
            "type" => Types::ARTICLE,
            "title" => "Dell Latitude E6420 ATG – рамный ноутбук для понимающих",
            "body" => "... Наряду с прочностью от ноутбука требовалась и довольно "
                . "серьезная ... полезна: в перчатках управлять ноутбуком с тачпада "
                . "почти невозможно ... контактов может отойти, и ноутбук перестанет "
                . "работать. В классической ... <a href='https://habrahabr.ru/company"
                . "/dellemc/blog/188616/'>Подробнее</a>",
            "author" => "Компания Dell EMC",
        ];

        $recordsData[] = [
            "type" => Types::NEWS,
            "body" => "Магазин OLDI у метро \"Ясенево\" закрывается",
            "date" => "3 Февраля"
        ];

        $recordsData[] = [
            "type" => Types::ARTICLE,
            "title" => "3D-ноутбук Samsung RF712",
            "body" => "... похвастаться – новинка позиционируется ноутбук с самым"
                . " ярким ... размеров находились: — Ноутбук Samsung RF712 — Стерео"
                . "очки ... . Синхронизация очков с ноутбуком осуществляется посредст"
                . "вом Bluetooth ... <a href='https://habrahabr.ru/company/samsung/blo"
                . "g/132519/'>Подробнее</a>",
            "author" => "Author1",
        ];

        $recordsData[] = [
            "type" => Types::NEWS,
            "body" => "В продаже новые циклонные пылесосы UNIT: чистота в деталях",
            "date" => "17 Февраля"
        ];

        $recordsData[] = [
            "type" => Types::NEWS,
            "body" => "Мы работаем с OLDI. OLDI - эксклюзивный поставщик аксессуаров MSI",
            "date" => "23 Февраля"
        ];

        $recordsData[] = [
            "type" => Types::DISCOUNT,
            "body" => "Супер скидка на Видеокарта 6Gb &lt;PCI-E&gt; Inno3D GeForce GTX 1060 Compact N1060-4DDN-N5GM",
            "price" => "17 897 руб",
            "discount" => "15.99%"
        ];

        return $recordsData;
    }
}
