<?php

namespace App;

class Enclosure
{
    private array $animals;

    private function addAnimal($animal)
    {

    }

    private function __toString(): string
    {
        return $this->animal." ".$this->animal->getNoise();
    }
}