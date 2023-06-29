<?php
//
//abstract class AbstractBicycle
//{
//    /**
//     * @var int
//     */
//    public int $serialNumber = 0;
//
//    /**
//     * @return string
//     */
//    abstract public function rotateWheels(): string;
//
//    /**
//     * @return string
//     */
//    public function pedal(): string
//    {
//        return $this->rotateWheels();
//    }
//}
//
//class ChainBicycle extends AbstractBicycle
////расширение
//{
//
//    /**
//     * @return string
//     */
//    public function rotateWheels(): string
//    {
//        return "Rotate wheel by chain\n";
//    }
//}
//
//class CardanBicycle extends AbstractBicycle
//{
//
//    /**
//     * @return string
//     */
//    public function rotateWheels(): string
//    {
//        return "Rotate wheel by cardan sharf\n";
//    }
//}
//
//$bicycleC = new ChainBicycle();
//$bicycleCd = new CardanBicycle();
//
//var_dump($bicycleC->pedal());
//var_dump($bicycleCd->pedal());
//
//var_dump($bicycleC->serialNumber);


abstract class Bicycle
{
    protected string $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }

    abstract public function getModel(): string;
}

class MountainBicycle extends Bicycle
{
    public function getModel(): string
    {
        return "Mountain bike " . $this->model;
    }
}

class ChildrenBicycle extends Bicycle
{
    public function getModel(): string
    {
        return "Children bike " . $this->model;
    }
}

$bikes = [new MountainBicycle('Rr3'), new ChildrenBicycle('Argo3'), 'Vasa'];

foreach ($bikes as $bike) {
    if ($bike instanceof Bicycle) {
        var_dump($bike->getModel());
    } else {
        echo "Error\n";
    }
}

