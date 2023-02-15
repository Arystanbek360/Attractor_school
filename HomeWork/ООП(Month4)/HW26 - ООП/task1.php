<?php

class Elevator
{
    public int $currentFloor;
    public int $capacity = 200;
    public int $maxFloor = 18;

    public function __construct(int $currentFloor)
    {
        $this->currentFloor = $currentFloor;
    }

    public function move(int $toFloor)
    {
        if ($toFloor > $this->currentFloor) {
            for ($i = $this->currentFloor; $i < $toFloor; $i++) {
                $this->currentFloor++;
                echo $this->currentFloor . "\n";
            }
        } elseif ($toFloor < $this->currentFloor) {
            for ($i = $this->currentFloor; $i > $toFloor; $i--) {
                $this->currentFloor--;
                echo $this->currentFloor . "\n";
            }
        } else {
            echo "Вы сейчас на этом же этаже\n";
        }


    }

    public function isAllowableWeight(int $weight): bool
    {
        if ($weight < $this->capacity) {
            return true;
        } else {
            echo "Перегруз!Допустимый вес составляет 200 кг\n";
            return false;
        }
    }

    public function isAllowableFloor(int $floor): bool
    {
        if (($floor < $this->maxFloor) && ($floor) >= 1) {
            return true;
        } else {
            echo "Такой этаж не допустим!\n";
            return false;
        }
    }
}

function elevator(): void
{
    $lift = new Elevator(1);

    while (true) {
        echo "Вы сейчас на " . $lift->currentFloor . " этаже.\n";
        echo "Введите нужный этаж:";
        $toFloor = (int)trim(fgets(STDIN));
        echo "Какой у вас груз:";
        $weight = (int)trim(fgets(STDIN));
        if (!($lift->isAllowableFloor($toFloor))) {
            continue;
        } elseif (!($lift->isAllowableWeight($weight))) {
            continue;
        }
        echo $lift->currentFloor . "\n";
        $lift->move($toFloor);
        echo "=======================\n";
    }
}

elevator();
