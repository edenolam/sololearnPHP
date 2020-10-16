<?php


class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function hi() {
        echo "Hi from Animal";
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}
