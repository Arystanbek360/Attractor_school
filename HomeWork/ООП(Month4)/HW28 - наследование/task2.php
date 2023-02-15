<?php

class Product
{
    /**
     * @var int $deliveryTimestamp
     */
    public int $deliveryTimestamp;
    /**
     * @var string $storagePlace
     */
    public string $storagePlace;
    /**
     * @var string $name
     */
    public string $name;
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay;

    /**
     * @param int $deliveryDate
     * @param string $storagePlace
     */
    public function __construct(int $deliveryDate, string $storagePlace)
    {
        $this->storagePlace = $storagePlace;
        $this->deliveryTimestamp = $deliveryDate;
    }

    /**
     * @return bool
     */
    public function isFresh(): bool
    {
        if ($this->storageLifeDay - $this->deliveryTimestamp >= 0) {
            return true;
        } else {
            return false;
        }
    }
}

class Milk extends Product
{
    /**
     * @var string $name
     */
    public string $name = "Milk";
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay = 86400 * 60;

    /**
     * @return bool
     */
    public function isFresh(): bool
    {
        if ($this->storagePlace == "Icebox") {
            return parent::isFresh();
        } else {
            if ($this->storageLifeDay / 2 - $this->deliveryTimestamp >= 0) {
                $storageLifeDay = $this->storageLifeDay / 2;
                $this->storageLifeDay = $storageLifeDay;
                return true;
            } else {
                return false;
            }
        }
    }
}

class Salt extends Product
{
    /**
     * @var string $name
     */
    public string $name = "Salt";
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay = 0;

    /**
     * @return bool
     */
    public function isFresh(): bool
    {
        return true;
    }

}

class Fish extends Product
{
    /**
     * @var string $name
     */
    public string $name = "Fish";
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay = 86400 * 20;

    /**
     * @return bool
     */
    public function isFresh(): bool
    {
        if ($this->storagePlace == "Icebox") {
            return parent::isFresh();
        } else {
            if ($this->storageLifeDay / 6 - $this->deliveryTimestamp >= 0) {
                return true;
            } else {
                return false;
            }
        }
    }

}

class Corn extends Product
{
    /**
     * @var string $name
     */
    public string $name = "Corn";
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay = 86400 * 150;
}

class Stew extends Product
{
    /**
     * @var string $name
     */
    public string $name = "Stew";
    /**
     * @var int $storageLifeDay
     */
    public int $storageLifeDay = 86400 * 180;
}

class Storage
{
    /**
     * @var Product[] $products
     */
    public array $products;
    /**
     * @var int $secondInDay
     */
    public int $secondInDay = 86400;

    /**
     *
     */
    public function __construct()
    {
        for ($i = 1; $i <= 20; $i++) {
            $rand = rand(1, 5);
            if ($rand == 1) {
                $this->products[] = new Milk($this->getRandomDeliveryTime(), $this->getRandomStoragePlace());
            } elseif ($rand == 2) {
                $this->products[] = new Salt($this->getRandomDeliveryTime(), $this->getRandomStoragePlace());
            } elseif ($rand == 3) {
                $this->products[] = new Fish($this->getRandomDeliveryTime(), $this->getRandomStoragePlace());
            } elseif ($rand == 4) {
                $this->products[] = new Corn($this->getRandomDeliveryTime(), $this->getRandomStoragePlace());
            } else {
                $this->products[] = new Stew($this->getRandomDeliveryTime(), $this->getRandomStoragePlace());
            }
        }
    }

    /**
     *
     */
    public function doInspection(): void
    {
        date_default_timezone_set('Asia/Almaty');
        $thisTime = strtotime(date("d.m.Y"));

        echo sprintf("\n%19s %s \n", "", "Inspection Result");
        echo " Product | Delivered at | Storage place | S. life days | Fresh \n" .
            "---------+--------------+---------------+--------------+-------\n";

        foreach ($this->products as $product) {
            $deliveryDate = date("M d,Y", $thisTime - $product->deliveryTimestamp);
            if ($product->storageLifeDay == 0) {
                $storageLifeDay = "INF";
            } else {
                $storageLifeDay = $product->storageLifeDay / 86400;
            }
            if ($product->isFresh()) {
                $bool = "true";
            } else {
                $bool = "false";
            }
            echo sprintf(" %6s  | %12s |   %-12s|     %-9s| %5s\n", $product->name, $deliveryDate,
                $product->storagePlace,
                $storageLifeDay, $bool);
        }
    }

    /**
     * @return int
     */
    public function getRandomDeliveryTime(): int
    {
        return ($this->secondInDay * (rand(1, 200)));
    }

    /**
     * @return string
     */
    public function getRandomStoragePlace(): string
    {
        if (rand(1, 2) == 1) {
            return "Icebox";
        } else {
            return "Showcase";
        }
    }
}

$shop = new Storage();
$shop->doInspection();
