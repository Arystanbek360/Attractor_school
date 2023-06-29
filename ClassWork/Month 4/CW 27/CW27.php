<?php

interface BicycleInterface
{
    /**
     *
     */

    public function pedal(): void;

    /**
     * @param float $degrees
     */

    public function rotateRudder(float $degrees): void;

}

class Bicycle implements BicycleInterface
{
    /** @var string $color */
    public string $color = 'black';
    public string $brand = 'Giant';
    public int $serialNumber = 0;
    public int $mileage = 0;
    public float $rudderDegree = 0;
    public static int $productCount = 0;
    public const Model = 'F1';

    public function __construct(int $serialNumber)
    {
        $this->serialNumber = $serialNumber;
        self::$productCount++;
    }

    public function pedal(): void
    {
        $this->mileage++;
        echo "Current mileage: " . $this->mileage . "\n";
    }

    public function rotateRudder(float $degrees): void
    {
        $this->rudderDegree += $degrees;
        echo "Current position rudder " . $this->rudderDegree . "\n";
    }
}

interface HybridBicycleInterface
{
    /**
     * return void
     */
    public function roll(): void;
}

class HybridBicycle implements BicycleInterface, HybridBicycleInterface
//Подключение интерфейса
{
    public float $charge = 30;

    public function pedal(): void
    {
        echo "Pedal\n";
    }

    public function rotateRudder(float $degrees): void
    {
        echo "Rotate rudder\n";
    }

    public function roll(): void
    {
        echo "Roll\n";
    }
}

$bicycleH = new HybridBicycle();
$bicycle = new Bicycle(123123);


function useBicycle(BicycleInterface $bicycle): void
{
    if ($bicycle instanceof HybridBicycleInterface) {
        $bicycle->roll();
    } else {
        $bicycle->pedal();
    }

    $bicycle->rotateRudder(21);
}

useBicycle($bicycle);
var_dump($bicycle);


//var_dump($bicycle instanceof HybridBicycle);
//var_dump($bicycle instanceof HybridBicycleInterface);
//var_dump($bicycle instanceof Bicycle);
//var_dump($bicycle instanceof BicycleInterface);
////var_dump(Bicycle::Model);