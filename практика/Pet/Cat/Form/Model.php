<?php

namespace Pet\Cat\Form;

use Pet\Cat\Cat;
use Pet\Cat\condition\FrightenedState;
use Pet\Cat\condition\HungryState;
use Pet\Cat\condition\PlayfulState;
use Pet\Cat\condition\SleepingState;

class Model
{
    /** @var Cat $cat */
    public Cat $cat;
    /** @var Cat[] $cat_data */
    public array $cat_data;

    /** @param Cat $cat */
    public function store(Cat $cat): void
    {
        $this->cat_data = ['weight' => $this->cat->weight, 'state' => $this->cat->conditions::NAME];
        file_put_contents('cat.json', json_encode($this->cat_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /** */
    public function load(): void
    {
        if (file_exists('cat.json')) {
            $file = file_get_contents('cat.json');
            $this->cat_data = json_decode($file, true);
        } else {
            $this->cat_data = ['state' => 0];
        }
        if (!empty($this->cat_data['weight'])) {
            $this->cat = new Cat($this->cat_data['weight']);
        } else {
            $this->cat = new Cat();
        }
        switch ($this->cat_data['state']) {
            case "Игривый":
                $this->cat->setConditions(new PlayfulState($this->cat));
                break;
            case "Голодный":
                $this->cat->setConditions(new HungryState($this->cat));
                break;
            case "Испуганный":
                $this->cat->setConditions(new FrightenedState($this->cat));
                break;
            case "Сонный":
                $this->cat->setConditions(new SleepingState($this->cat));
                break;
        }
    }
}

