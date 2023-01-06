<?php
// organizing code into logical group namespaces
namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class BubbleFish extends Animal implements CanSwim
{
    public function getNoise(): string
    {
        return "";
    }
}