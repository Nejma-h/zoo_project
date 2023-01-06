<?php

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class clownFish extends Animal implements CanSwim
{

    public function getNoise(): string
    {
        return "";
    }
}