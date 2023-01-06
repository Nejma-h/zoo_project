<?php

namespace App;
abstract class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

     abstract protected function getNoise() : string;


    public function noise(): string
    {
        return $this->getNoise();
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}