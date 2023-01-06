<?php
// organizing code into logical group namespaces
namespace App\Animals;


use App\Animal;

class BubbleFish extends Animal
{
    public function getNoise(): string
    {
        return "";
    }
}