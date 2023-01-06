<?php

namespace App;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;


    //Method to get aquarium, aviary and fence
    /**
     * @return Enclosure|null
     */
    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure|null
     */
    public static function getAviary(): ?Enclosure
    {
        return self::$aviary;
    }

    /**
     * @return Enclosure|null
     */
    public static function getFence(): ?Enclosure
    {
        return self::$fence;
    }

    //Methode to put each animal in the right enclosure
    public function addAnimal()
    {
        if()
    }

    //Method to display each enclosure content
    public function visitTheZoo()
    {

    }
}