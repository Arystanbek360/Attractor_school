<?php

class Bicycle
{
    /**
     * @var string $color
     */
    public string $color = "black";
    /**
     * @var int $mileage
     */
    public int $mileage = 0;
    /**
     * @var int $serialNumber
     */
    public int $serialNumber = 0;
    /**
     * @var int $counter
     */
    public static int $counter = 0;
    public const BRAND = 'Giant';


    /**
     * @param int $serialNumber
     */
    public function __construct(int $serialNumber)
    {
        $this->serialNumber = $serialNumber;
        static::$counter++;
    }


    /**
     *
     */
    public function pedal(): void
    {
        $this->mileage++;
    }
}

class HybridBicycle extends Bicycle
{
    /**
     * @var int $charge
     */
    public int $charge = 0;
    public string $color = "cian";
    public const BRAND = "MAkita";

    public function pedal(): void
    {
        $this->charge++;
        parent::pedal();
    }

    public function __construct(int $serialNumber, int $charge)
    {
        parent::__construct($serialNumber);
        $this->charge = $charge;
    }

    public function roll(): void
    {
        $this->charge--;
        parent::pedal();
    }
}

function getInfo(Bicycle $bicycle): void
{
    printf("\n%s \nBrand: %s \nMileage %d \nCharge level %s\n",
        $bicycle::class, $bicycle::BRAND, $bicycle->mileage, $bicycle->charge);
}

$bike1 = new HybridBicycle(1, 5);
$bike1->pedal();
$bike1->pedal();
$bike1->pedal();
$bike1->pedal();
$bike1->pedal();
$bike1->roll();
$bike1->roll();
$bike1->roll();
$bike1->roll();

getInfo($bike1);



