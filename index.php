<?php

class Salary{
  private $month;
  private $terteenth;
  private $fourteenth;

  public function __construct($month, $terteenth, $fourteenth){
    $this -> setMonth($month);
    $this -> setTerteenth($terteenth);
    $this -> setFourteenth($fourteenth);
  } 

  // Month
  public function getMonth(){
    return $this -> month;
  }
  public function setMonth($month){
    $this -> month = $month;
  }

  // Terteenth
  public function getTerteenth(){
    return $this -> terteenth;
  }
  public function setTerteenth($terteenth){
    $this -> terteenth = $terteenth;
  }

  // Fourteenth
  public function getFourteenth(){
    return $this -> fourteenth;
  }
  public function setFourteenth($fourteenth){
    $this -> fourteenth = $fourteenth;
  }

  // getHtml WAGE
  public function getHtml(){
    return $this -> getMonth() . "<br>"
    . $this -> getTerteenth() . "<br>"
    . $this -> getFourteenth() . "<br>";
  }
}

// Instance
  // WAGE
$month = new Salary(2000 . "$", "terteenth", "fourteenth");



echo $month -> getHtml();
?>