<?php

namespace App\Entity;


class PropertySearch
{
  /**
   * Undocumented variable
   *
   * @var int | null
   */  
  private $minPrice;

  /**
   * Undocumented variable
   *
   * @var int | null
   */
  private $maxPrice;

   

  /**
   * Get the value of minPrice
   */ 
  public function getMinPrice(): ?int
  {
    return $this->minPrice;
  }

  /**
   * Set the value of minPrice
   *
   * @return  self
   */ 
  public function setMinPrice($minPrice): PropertySearch
  {
    $this->minPrice = $minPrice;

    return $this;
  }

  /**
   * Get | null
   *
   * @return  int
   */ 
  public function getMaxPrice(): ?int
  {
    return $this->maxPrice;
  }

  /**
   * Set | null
   *
   * @param  int  $maxPrice  | null
   *
   * @return  self
   */ 
  public function setMaxPrice(int $maxPrice): PropertySearch
  {
    $this->maxPrice = $maxPrice;

    return $this;
  }
}