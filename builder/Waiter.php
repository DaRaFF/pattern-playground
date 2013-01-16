<?php

/* "Director" */
class Waiter
{
    /** @var PizzaBuilder */
    private $pizzaBuilder;

    public function setPizzaBuilder(PizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function getPizza()
    {
        return $this->pizzaBuilder->getPizza();
    }

    public function constructPizza()
    {
        $this->pizzaBuilder->createNewPizzaProduct();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildTopping();
    }
}