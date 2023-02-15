<?php

class Greenhouse
{
    /**
     * @var GrowingMethod
     */
    protected GrowingMethod $growingMethod;

    /**
     * @param GrowingMethod $growing_method
     */
    public function __construct(GrowIngMethod $growing_method)
    {
        $this->growingMethod = $growing_method;
    }

    /**
     * @param int $tomatoes
     * @param int $cucumbers
     * @return Season
     */
    public function performPlanting(int $tomatoes, int $cucumbers): Season
    {
        $tomato = $this->growingMethod->growTomatoes($tomatoes);
        $cucumber = $this->growingMethod->growCucumbers($cucumbers);
        $result = [$tomato, $cucumber];
        return new Season($result);
    }
}

interface GrowingMethod
{
    /**
     * @param int $amount
     * @return array
     */
    public function growTomatoes(int $amount): array;

    /**
     * @param int $amount
     * @return array
     */
    public function growCucumbers(int $amount): array;
}

abstract class Hydroponics implements GrowingMethod
{
    /**
     * @param string $foetusName
     * @return int
     */
    abstract function getWeightInjectionPercent(string $foetusName): int;

    /**
     * @param int $amount
     * @return array
     */
    public function growTomatoes(int $amount): array
    {
        $tomato = [];
        for ($i = 1; $i <= $amount; $i++) {
            $tomatoes = new Tomato("red",
                round(4.4 * ($this->getWeightInjectionPercent("Tomato") / 100), 2));
            $tomato[] = $tomatoes;
        }
        return $tomato;
    }

    /**
     * @param int $amount
     * @return array
     */
    public function growCucumbers(int $amount): array
    {
        $cucumbers = [];
        for ($i = 1; $i <= $amount; $i++) {
            $cucumber = new Cucumber("green",
                round(6.4 * ($this->getWeightInjectionPercent("cucumber") / 100), 2));
            $cucumbers[] = $cucumber;
        }
        return $cucumbers;
    }
}

class ActiveHydroponics extends Hydroponics
{
    /**
     * @param string $foetusName
     * @return int
     */
    public function getWeightInjectionPercent(string $foetusName): int
    {
        $weight = 0;
        if ($foetusName == "Tomato") {
            $weight = rand(60, 70) + 100;
        } elseif ($foetusName == "cucumber") {
            $weight = rand(0, 6) + 100;
        }
        return $weight;
    }
}

class PassiveHydroponics extends Hydroponics
{
    /**
     * @param string $foetusName
     * @return int
     */
    public function getWeightInjectionPercent(string $foetusName): int
    {
        $weight = 0;
        if ($foetusName == "Tomato") {
            $weight = rand(50, 60) + 100;
        } elseif ($foetusName == "cucumber") {
            $weight = rand(80, 120);
        }
        return $weight;
    }
}

class GrowingInGround implements GrowingMethod
{
    /**
     * @var int
     */
    private int $mutationPercentChance = 30;

    /**
     * @param int $amount
     * @return array
     */
    public function growTomatoes(int $amount): array
    {
        $tomato = [];
        for ($i = 1; $i <= $amount; $i++) {
            $tomatoes = new Tomato("red", 4.4);
            $tomato[] = $tomatoes;
        }
        foreach ($tomato as $product) {
            if (rand(0, 100) < $this->mutationPercentChance) {
                $product->mutateColour();
            }
        }
        return $tomato;
    }

    /**
     * @param int $amount
     * @return array
     */
    public function growCucumbers(int $amount): array
    {
        $cucumbers = [];
        for ($i = 1; $i <= $amount; $i++) {
            $cucumber = new Cucumber("green", 6.4);
            $cucumbers[] = $cucumber;
        }
        foreach ($cucumbers as $product) {
            if (rand(0, 100) < $this->mutationPercentChance) {
                $product->mutateColour();
            }
        }
        return $cucumbers;
    }
}

abstract class Foetus
{
    /**
     * @var string
     */
    public string $NAME;
    /**
     * @var string
     */
    public string $colour;
    /**
     * @var float
     */
    public float $weight;

    /**
     * @param string $colour
     * @param float $weight
     */
    public function __construct(string $colour, float $weight)
    {
        $this->colour = $colour;
        $this->weight = $weight;
    }

    /**
     *
     */
    abstract function mutateColour(): void;
}

class Tomato extends Foetus
{
    /**
     * @var string
     */
    public string $NAME = "Tomato";

    /**
     *
     */
    public function mutateColour(): void
    {
        $this->colour = "purple";
    }
}

class Cucumber extends Foetus
{
    /**
     * @var string
     */
    public string $NAME = "Cucumber";

    /**
     *
     */
    public function mutateColour(): void
    {
        $this->colour = "blue";
    }
}

class Season
{
    /**
     * @var array|Foetus[] $Foetus
     */
    protected array $Foetus;

    /**
     * @param array $Foetus
     */
    public function __construct(array $Foetus)
    {
        $this->Foetus = $Foetus;
    }

    /**
     * @return float
     */
    public function getTomatoesTotalWeight(): float
    {
        $result = 0;
        foreach ($this->Foetus as $item) {
            foreach ($item as $val) {
                if ($val instanceof Tomato) {
                    $weight = $val->weight;
                    $result += $weight;
                }
            }
        }
        return $result;
    }

    /**
     * @return float
     */
    public function getCucumberTotalWeight(): float
    {
        $result = 0;
        foreach ($this->Foetus as $item) {
            foreach ($item as $val) {
                if ($val instanceof Cucumber) {
                    $weight = $val->weight;
                    $result += $weight;
                }
            }
        }
        return $result;
    }

    /**
     * @param string $foetusName
     * @return array
     */
    public function getColours(string $foetusName): array
    {
        $result = [];
        foreach ($this->Foetus as $item) {
            foreach ($item as $val) {
                if ($val->NAME == $foetusName) {
                    $colour = $val->colour;
                    $result[] = $colour;
                }
            }
        }
        return $result;
    }

    /**
     *
     */
    public function printResult(): void
    {
        $red = 0;
        $green = 0;
        $blue = 0;
        $purple = 0;
        $colourTomato = $this->getColours("Tomato");
        $colourCucumber = $this->getColours("Cucumber");
        $resultColour = array_merge($colourTomato, $colourCucumber);
        $resultCount = count($resultColour);
        $weightCucumber = $this->getCucumberTotalWeight();
        $weightTomato = $this->getTomatoesTotalWeight();
        $stringBlue = "";
        $stringPurple = "";

        foreach ($resultColour as $colour) {
            if ($colour == "red") {
                $red++;
            } elseif ($colour == "green") {
                $green++;
            } elseif ($colour == "blue") {
                $blue++;
            } else {
                $purple++;
            }
        }

        if ($purple != 0) {
            $stringPurple = "\n* Пурпурный: $purple";
        }
        if ($blue != 0) {
            $stringBlue = "\n* Синий: $blue";
        }

        echo "Общее количество плодов: $resultCount \n\nОбщий вес помидоров: $weightTomato\n" .
            "Помидор цвета:\n* Красный: $red $stringPurple\n\nОбщий вес огурцов: $weightCucumber\n" .
            "Огурец цвета:\n* Зеленый: $green $stringBlue\n";
    }

}

$first_greenhouse = new Greenhouse(new PassiveHydroponics());
$session = $first_greenhouse->performPlanting(5, 5);
print "---- Результаты пассивной гидропоники ----\n";
$session->printResult();
print "\n----------------------\n\n";


$second_greenhouse = new Greenhouse(new ActiveHydroponics());
$session = $second_greenhouse->performPlanting(5, 5);
print "---- Результаты активной гидропоники ----\n";
$session->printResult();
print "\n----------------------\n\n";


$third_greenhouse = new Greenhouse(new GrowingInGround());
$session = $third_greenhouse->performPlanting(5, 5);
print "---- Результаты выращивания в земле ----\n";
$session->printResult();
print "\n----------------------\n\n";

