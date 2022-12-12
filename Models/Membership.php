<?php


class Membership{

  private $name;
  private $price;
  private $start_date;

  public function __construct($_name, $_price, $_start_date)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->start_date = $_start_date;
  }

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getStartDate(){
    return $this->start_date;
  }

  public function getMembershipDetails(){
    return "Membership: $this->name | Price: $this->price | Start Date: $this->start_date";
  }

}