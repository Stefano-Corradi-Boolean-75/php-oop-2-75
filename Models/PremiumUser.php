<?php

class PremiumUser extends User{

  public $membership;

  public function __construct($_name, $_lastname, $_age, Membership $_membership)
  {
    parent::__construct($_name, $_lastname, $_age);
    $this->membership = $_membership;
  }

}