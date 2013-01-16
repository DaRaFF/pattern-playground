<?php

/* "Product" */
class Pizza {

  private $dough = "";
  private $sauce = "";
  private $topping = "";

  public function setDough($dough)
  {
      $this->dough = $dough;
  }

  public function setSauce($sauce)
  {
      $this->sauce = $sauce;
  }

  public function setTopping($topping)
  {
      $this->topping = $topping;
  }
}