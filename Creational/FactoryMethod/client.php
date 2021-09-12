<?php

use Patterns\Creational\FactoryMethod\Factories\{
    CoffeeFactory,
    DonutFactory
};

/** Autoloading classes */
include_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

/***********************************/
/** Actual client code starts here */
/***********************************/

/*
Here is the menu:

Coffee

    Types         Size

    Decaf      [S, M, L]
    Espresso   [S, M, L]
    Mocha      [S, M, L]

Donut

    Types         Size

    Chocolate  [S, M, L]
    Kitkat     [S, M, L]
    Strawberry [S, M, L]
*/

$coffee = (new CoffeeFactory)->order('Espresso', 'M');
$donut = (new DonutFactory)->order('Chocolate', 'L');

echo 'Mahdi ordered a ' . $coffee->getSize() . ' size ' . $coffee->getName() . PHP_EOL;
echo 'Mahdi ordered a ' . $donut->getSize() . ' size ' . $donut->getName() . PHP_EOL;
