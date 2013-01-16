<?php

/* "Abstract Builder" */
abstract class PizzaBuilder {

    /** @var Pizza */
    protected $pizza;

    public function getPizza()
    {
        return $this->pizza;
    }

    public function createNewPizzaProduct()
    {
        $this->pizza = new Pizza();
    }

    public abstract function buildDough();

    public abstract function buildSauce();

    public abstract function buildTopping();
}