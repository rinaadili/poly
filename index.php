<?php

require_once('ElectronicItems.php');
require_once('ElectronicItem.php');
require_once('Console.php');
require_once('Controller.php');
require_once('Microwave.php');
require_once('Television.php');

function result()
{
    //Sold items
    $console = new Console(259, false);
    $televisionOne = new Television(1200, true);
    $televisionTwo = new Television(2500, true);
    $microwave = new Microwave(560, true);

    $remoteControllerOne = new Controller(40, false);
    $remoteControllerTwo = new Controller(54, false);
    $wiredControllerOne = new Controller(35, true);
    $wiredControllerTwo = new Controller(30, true);

    $televisionControllerOne = new Controller(40, false);
    $televisionControllerTwo = new Controller(45, false);

    $console->addExtra($remoteControllerOne);
    $console->addExtra($remoteControllerTwo);
    $console->addExtra($wiredControllerOne);
    $console->addExtra($wiredControllerTwo);
    $televisionOne->addExtra($televisionControllerOne);
    $televisionOne->addExtra($televisionControllerTwo);

    $electronicItems = new ElectronicItems([$console, $televisionOne, $televisionTwo, $microwave]);

    firstQuestion($electronicItems);
    secondQuestion($electronicItems);
}

function firstQuestion($electronicItems)
{
    $sortedItems = $electronicItems->sortItemsByPrice();

    echo "Items sorted by price:" . PHP_EOL;
    foreach ($sortedItems as $item) {
        echo $item->toString() . PHP_EOL;
    }

    echo "Total price: " . $electronicItems->totalPrice() . "$" . PHP_EOL;
}

function secondQuestion($electronicItems)
{
    $soldControllers = $electronicItems->getItemsByType('console');

    echo "Price of sold consoles with controllers:" . PHP_EOL;
    foreach($soldControllers as $soldCon) {
        echo $soldCon->toString() . ' - Total price(with extras): ' . $soldCon->priceWithExtras() . '$';
    }
}

result();