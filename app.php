<?php

// required classes importation
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

require __DIR__ . '/vendor/autoload.php';


$animals = [];

// Loop to create same object multiple times and add it to an array
$i = 0;
while ($i++ < 5) {
    $animals[] = new Fish("fish$i");
}

$j = 0;
while ($j++ < 3) {
    $animals[] = new BubbleFish("bubbleFish$j");
}

$k = 0;
while ($k++ < 2) {
    $animals[] = new CatFish("catFish$k");
}


$animals[] = new ClownFish("clownFish");

$l = 0;
while ($l++ < 2) {
    $animals[] = new Elephant("elephant$l");
}

    $animals[] = new Zebra("zebra");

$m = 0;
while ($m++ < 10) {
    $animals[] = new Parrot("parrot$m");
}

$n = 0;
while ($n++ < 2) {
    $animals[] = new Dove("dove$n");
}

//Loop through array to display each animal and its noise
foreach ($animals as $animal)
{
    echo $animal->getName()." ".$animal->getNoise(). "\n";
}
