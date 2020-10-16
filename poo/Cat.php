<?php


class Cat extends Animal implements AnimalInterface
{
    public $legs = 4;

    public function makeSound()
    {
        echo "Meow!";
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
