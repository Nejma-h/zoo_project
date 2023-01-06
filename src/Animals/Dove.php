<?php

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly
{
    public function getNoise(): string
    {
        $doveNoise = "Rou Rouuu";
        return $doveNoise;
    }
}