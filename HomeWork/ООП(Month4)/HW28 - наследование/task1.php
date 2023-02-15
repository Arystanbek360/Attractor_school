<?php

class Position
{
    /**
     * @var float $x
     */
    protected float $x;
    /**
     * @var float $y
     */
    protected float $y;
    /**
     * @var float $z
     */
    protected float $z;

    /**
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "$this->x,$this->y,$this->z";
    }
}

abstract class Figure
{
    /**
     * @var Position $position
     */
    protected Position $position;

    /**
     * @param Position $position
     */
    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    /**
     * @return float
     */
    abstract function getSquare(): float;

    /**
     * @return float
     */
    abstract function getVolume(): float;

    /**
     * @return string
     */
    public function toString(): string
    {
        $volume = $this->getVolume();
        $square = $this->getSquare();
        $position = $this->position->toString();
        return "Центр позиций:[$position]\nПлощадь:$square\nОбъем:$volume\n";
    }
}

class Point extends Figure
{
    /**
     * @return float
     */
    public function getSquare(): float
    {
        return 0;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return 0;
    }
}

class Square extends Point
{
    /**
     * @var float $edge
     */
    public float $edge;

    /**
     * @param Position $position
     * @param float $edge
     */
    public function __construct(Position $position, float $edge)
    {
        $this->edge = $edge;
        parent::__construct($position);
    }

    /**
     * @return float
     */
    public function getSquare(): float
    {
        return pow($this->edge, 2);
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return parent::getVolume();
    }
}

class Cube extends Square
{
    /**
     * @return float
     */
    public function getSquare(): float
    {
        return 6 * parent::getSquare();
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return pow($this->edge, 3);
    }
}

class Circle extends Point
{
    /**
     * @var float
     */
    protected float $radius;
    protected const PI = 3.141592653589793238462643;

    /**
     * @param Position $position
     * @param float $radius
     */
    public function __construct(Position $position, float $radius)
    {
        $this->radius = $radius;
        parent::__construct($position);
    }

    /**
     * @return float
     */
    public function getSquare(): float
    {
        return pow($this->radius, 2) * self::PI;
    }
}

class Sphere extends Circle
{
    /**
     * @return float
     */
    public function getSquare(): float
    {
        return 4 * parent::getSquare();
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return (4 / 3 * self::PI * pow($this->radius, 3));
    }

}

class Cylinder extends Circle
{
    /**
     * @var float $height
     */
    protected float $height;

    /**
     * @param Position $position
     * @param float $radius
     * @param float $height
     */
    public function __construct(Position $position, float $radius, float $height)
    {
        $this->height = $height;
        parent::__construct($position, $radius);
    }

    /**
     * @return float
     */
    public function getSquare(): float
    {
        return 2 * self::PI * $this->radius * ($this->radius + $this->height);
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return parent::getSquare() * $this->height;
    }
}

$point = new Point(new Position(10, 0, 9.9));
$circle = new Circle(new Position(3.1, 22, 7), 5.6);
$sphere = new Sphere(new Position(4, 1.2, 4), 7.1);
$square = new Square(new Position(9, 2, 5), 10.3);
$cylinder = new Cylinder(new Position(12.33, 2.9, 5), 1.5, 5);
$cube = new Cube(new Position(60, 2.1, 1), 1.5);

print "** Точка **\n" . $point->toString() .
    "\n** Круг **\n" . $circle->toString() .
    "\n** Шар **\n" . $sphere->toString() .
    "\n** Квадрат **\n" . $square->toString() .
    "\n** Цилиндр **\n" . $cylinder->toString() .
    "\n** Куб **\n" . $cube->toString();