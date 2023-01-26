<?php

class Salary{
  private $wage;
  private $iban;

  public function __construct($wage, $iban){
    $this -> setWage($wage);
    $this -> setIban($iban);
  } 

  // Wage
  public function getWage(){
    return $this -> wage;
  }
  public function setWage($wage){
    $this -> wage = $wage;
  }

  // Iban
  public function getIban(){
    return $this -> iban;
  }
  public function setIban($iban){
    $this -> iban = $iban;
  }


  // getHtml WAGE
  public function getHtml(){
    return $this -> getWage() . "<br>"
    . $this -> getIban() . "<br>";
  }
}

// Instance
  // WAGE
$wage = new Salary(2000 . "$", "IT8734y28f3g4b38gc83");

echo $wage -> getHtml();
?>