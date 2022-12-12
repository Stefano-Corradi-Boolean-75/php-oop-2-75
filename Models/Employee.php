<?php

class Employee extends User {

  public $level;

  public function __construct($_level, $_name, $_lastname, $_age)
  {
    
    // prendo il costruttore della classe genitore
    parent::__construct($_name, $_lastname, $_age);
    
    $this->level = $_level;
    
    // richiamo setDiscount di Employee
    $this->setDiscount();

  }

  // polimorfismo: la stessa funzione del genitore ha comportamenti differenti
  public function setDiscount(){
      if($this->age > 65 ){
        $this->discount = 40;
      }else{
        $this->discount = 20;
      }
  }

}