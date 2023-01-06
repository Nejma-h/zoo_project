<?php

namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{
    public function getNoise(): string
    {
        $parrotNoise = "coco";
        return $parrotNoise;
    }
}