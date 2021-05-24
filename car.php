<?php

class Car {

    private $hasParkBrake = true;

    public function setParkBrake($hasParkBrake) : void 
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start()
    {
        try {
            if ($this->hasParkBrake === true) {
            throw new Exception("You forgot your brake !");
            }
        } catch (Exception $exeption) {
            echo $exeption->getMessage();
            $this->setParkBrake();
            echo "The handbrake is off";
        } finally {
            echo "My car is rolling like a donut";
            return parent::start();
        }
    }
}