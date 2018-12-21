<?php

namespace App\Entity;


class PropertySearch
{
  /**
   * Prix minimum
   *
   * @var int | null
   */  
  private $minPrice;

  /**
   * Prix maximum
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