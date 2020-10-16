<?php


 class Dog extends Animal implements AnimalInterface
{
    public $legs = 4;


    public function makeSound()
    {
        echo 'Woof!';
    }

    public function display()
    {
        echo $this->legs;
    }

    /**
     * @return int
     */
    public function getLegs(): int
    {
        return $this->legs;
    }

    /**
     * @param int $legs
     */
    public function setLegs(int $legs): void
    {
        $this->legs = $legs;
    }



}

