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

class MountainBicycle extends Bicycle
{
    /**
     * @var string $rearShockAbsorber
     */
    public string $rearShockAbsorber = "FOX";
}

class RoadBicycle extends Bicycle
{
    /**
     * @var string $horn
     */
    public string $horn = "Shimano";
}

class Model
{
    /**
     * @var string
     */
    public static string $table = "bicycle";
    /**
     * @var int $propertyId
     */
    public int $propertyId = 0;

    public static function getTable(): string
    {
        return static::$table;
    }
}

//
//var_dump($bike2::BRAND);
//var_dump($bike2::class);
//var_dump(Bicycle::$counter);

function getInfo(Bicycle $bicycle): void
{
    $additiomalInfo = "";
    if ($bicycle instanceof MountainBicycle) {
        $additiomalInfo = "Rear shock ansorber: " . $bicycle->rearShockAbsorber;
    } elseif ($bicycle instanceof RoadBicycle) {
        $additiomalInfo = "Horn: " . $bicycle->horn;
    }
    printf("\n%s \nBrand: %s \nMileage %d \n%s\n", $bicycle::class, $bicycle::BRAND, $bicycle->mileage, $additiomalInfo);
}

$bike1 = new MountainBicycle(1);
$bike2 = new RoadBicycle(2);
for ($i = 1; $i < 10; $i++) {
    $bike1->pedal();
    $bike2->pedal();
}

getInfo($bike1);
getInfo($bike2);

