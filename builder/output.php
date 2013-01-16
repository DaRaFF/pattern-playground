<?php

require( __DIR__ . '/Pizza.php');
require( __DIR__ . '/PizzaBuilder.php');
require( __DIR__ . '/HawaiianPizzaBuilder.php');
require( __DIR__ . '/SpicyPizzaBuilder.php');
require( __DIR__ . '/Waiter.php');

/* A customer ordering a pizza. */
$waiter = new Waiter();
$hawaiian_pizzabuilder = new HawaiianPizzaBuilder();
$spicy_pizzabuilder = new SpicyPizzaBuilder();

echo "\n\n\n\nPizza Hawaii\n";
$waiter->setPizzaBuilder( $hawaiian_pizzabuilder );
$waiter->constructPizza();
$hawaiianPizza = $waiter->getPizza();
var_dump($hawaiianPizza);

echo "\n\n\n\nSpicy Pizza\n";
$waiter->setPizzaBuilder( $spicy_pizzabuilder );
$waiter->constructPizza();
$spicyPizza = $waiter->getPizza();
var_dump($spicyPizza);