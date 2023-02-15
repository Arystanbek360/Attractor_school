<?php

class factory
{
    /**
     * @param int $item
     * @param string $name
     * @return array
     */
    public function creatItem(int $item, string $name): array
    {
        $products = [];
        for ($i = 0; $i < $item; $i++) {
            /** @var metalProducts|string $name */
            $product = new $name((rand(0, 10000) / 100), $i);
            $products[] = $product;
        }
        return $products;
    }

    /**
     * @param int $bolt
     * @param int $screw
     * @param int $nail
     * @return checkProduct
     */
    public function createProducts(int $bolt, int $screw, int $nail): checkProduct
    {
        $bolts = $this->creatItem($bolt, "bolt");
        $screws = $this->creatItem($screw, "screw");
        $nails = $this->creatItem($nail, "nail");
        $result = [$bolts, $screws, $nails];
        return new checkProduct($result);
    }
}

abstract class metalProducts
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var float
     */
    public float $metalQuality;
    /**
     * @var int
     */
    public int $serialNumber;

    /**
     * @param float $metalQuality
     * @param int $serialNumber
     */
    public function __construct(float $metalQuality, int $serialNumber)
    {
        $this->metalQuality = $metalQuality;
        $this->serialNumber = $serialNumber;
    }
}

class bolt extends metalProducts
{
    /**
     * @var string
     */
    public string $name = "bolt";
    /**
     * @var float
     */
    public float $metalQuality;
}

class screw extends metalProducts
{
    /**
     * @var string
     */
    public string $name = "screw";
    /**
     * @var float
     */
    public float $metalQuality;
}

class nail extends metalProducts
{
    /**
     * @var string
     */
    public string $name = "nail";
    /**
     * @var float
     */
    public float $metalQuality;
}

class checkProduct
{
    /**
     * @var array|metalProducts[] $products
     */
    protected array $products;

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return array[]
     */
    public function checkItem(): array
    {
        $defectiveItem = [];
        $normalItem = [];
        foreach ($this->products as $item) {
            foreach ($item as $val) {
                $quality = $val->metalQuality;
                if ($this->defectiveItem($quality) == true) {
                    $normalItem[] = $val;
                } else {
                    $defectiveItem[] = $val;
                }
            }
        }
        return ["normal" => $normalItem, "defective" => $defectiveItem];
    }

    /**
     * @param $quality
     * @return bool
     */
    public function defectiveItem($quality): bool
    {
        if ($quality < 85) {
            return false;
        }
        return true;
    }

    /**
     *
     */
    public function printResult(): void
    {
        $result = $this->checkItem();
        foreach ($result as $key => $items) {
            if ($key == "normal") {
                echo "============================\n     Отличное качество:\n============================\n\n";
                $this->showDefects($items);
            } else {
                echo "\n============================\n    Плохое качество:\n============================\n\n";
                $this->showDefects($items);
            }
        }
    }

    /**
     * @param metalProducts $item
     */
    public function showInfo(metalProducts $item): void
    {
        echo "Сериный номер: ";
        echo $item->serialNumber . "\n";
        echo "Качество метала: ";
        echo $item->metalQuality . "\n";
    }

    /**
     * @param array $items
     */
    public function showDefects(array $items): void
    {
        foreach ($items as $val) {
            if ($val instanceof bolt) {
                echo "Болт: ";
                $this->showInfo($val);
            } elseif ($val instanceof screw) {
                echo "Гайка: ";
                $this->showInfo($val);
            } elseif ($val instanceof nail) {
                echo "Гвоздь: ";
                $this->showInfo($val);
            }
        }
    }
}

$factory = new factory();
$check = $factory->createProducts(10, 10, 10);
$check->printResult();