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


  public function getSalary(){
    $month = $this -> getMonth();
    $res = $month * 12;
    if($this -> getTerteenth()){
      $res += $month; 
    }
    if($this -> getFourteenth()){
      $res += $month;
    }
    return $res;
    // if($this -> getTerteenth() != 0 || $this -> getFourteenth() != 0){
    //   return "<span>" . "<b>Salary per Year:</b> " . ($this -> getMonth() * 12) + $this -> getTerteenth() + $this -> getFourteenth() . "</span>";

    // }else{
    //   return "no Salary EXTRA";
    // }
  }

  // getHtml SALARY
  public function getHtml(){
    return "<b>Month:</b> " . $this -> getMonth() . "<br>"
    . "<b>terteenth:</b> " . $this -> getTerteenth() . "<br>"
    . "<b>fourteenth:</b> " . $this -> getFourteenth() . "<br>" 
    . $this -> getSalary();
  }
}

class Person{
  private $name;
  private $surname;
  private $dateOfBirth;
  private $locOfBirth;
  private $fc;

  public function __construct($name, $surname, $dateOfBirth, $locOfBirth, $fc){
    $this -> setName($name);    
    $this -> setSurname($surname);
    $this -> setDateOfBirth($dateOfBirth);
    $this -> setLocOfBirth($locOfBirth);
    $this -> setFc($fc);
  }

  // name
  public function getName(){
    return $this -> name;
  }
  public function setName($name){
    $this -> name = $name;
  }
  // surname
  public function getSurname(){
    return $this -> surname;
  }
  public function setSurname($surname){
    $this -> surname = $surname;
  }
  // dateOfBirth
  public function getDateOfBirth(){
    return $this -> dateOfBirth;
  }
  public function setDateOfBirth($dateOfBirth){
    $this -> dateOfBirth = $dateOfBirth;
  }
  // locOfBirth
  public function getLocOfBirth(){
    return $this -> locOfBirth;
  }
  public function setLocOfBirth($locOfBirth){
    $this -> locOfBirth = $locOfBirth;
  }
  // fc
  public function getFc(){
    return $this -> fc;
  }
  public function setFc($fc){
    $this -> fc = $fc;
  }


  // getHtml PERSON
  public function getHtml(){
    return "<div>" . "<b>Name:</b> " . $this -> getName() . "<br>"     
      . "<b>Surname:</b> " . $this -> getSurname()  . "<br>"
      . "<b>DateOfBirth:</b> " . $this -> getDateOfBirth()  . "<br>"  
      . "<b>LocOfBirth:</b> " . $this -> getLocOfBirth()  . "<br>" 
      . "<b>Fiscal Code:</b> " . $this -> getFc() 
      . "</div>";
  }

}

class Employee extends Person{
  private Salary $salary;
  private $hireDate;

  public function __construct($name, $surname, $dateOfBirth, $locOfBirth, $fc, $salary, $hireDate){

    parent :: __construct($name, $surname, $dateOfBirth, $locOfBirth, $fc);

    $this -> setSalary($salary);
    $this -> setHireDate($hireDate);
  }

  // Salary
  public function getSalary(){
    return $this -> salary;
  }
  public function setSalary($salary){
    $this -> salary = $salary;
  }
  // HireDate
  public function getHireDate(){
    return $this -> hireDate;
  }
  public function setHireDate($hireDate){
    $this -> hireDate = $hireDate;
  }

  // getHtml EMPLOYEE
  public function getHtml(){
    return parent :: getHtml() . "<br>"
      . "<b>Salary:</b> " .$this -> getSalary() -> getHtml() . "<br>"
      . "<b>HireDate:</b> " . $this -> getHireDate();
  }


}

class Boss extends Person{
  private $dividend;
  private $bonus;

  public function __construct($name, $surname, $dateOfBirth, $locOfBirth, $fc, $dividend, $bonus){

    parent :: __construct($name, $surname, $dateOfBirth, $locOfBirth, $fc);

    $this -> setDividend($dividend);
    $this -> setBonus($bonus);
  }

  // Dividend
  public function getDividend(){
    return $this -> dividend;
  }
  public function setDividend($dividend){
    $this -> dividend = $dividend;
  }
  // Bonus
  public function getBonus(){
    return $this -> bonus;
  }
  public function setBonus($bonus){
    $this -> bonus = $bonus;
  }

  public function getBonusDividend(){
    return "<b>Annual Income:</b> " . ($this -> getDividend() * 12) + $this -> getBonus();
  }

  // getHtml BOSS
  public function getHtml(){
    return  parent :: getHtml()
      . "<b>Dividend:</b> " . $this -> getDividend() . "<br>"
      . "<b>Bonus:</b> " . $this -> getBonus() . "<br>" 
      . $this -> getBonusDividend() . "<br>";
  }

}
// Instance

  // Salary
  $salary = new Salary(1000, true, false);

  // Employee
  $employee = new Employee("Tony", "Sanchez", "2003-02-02", "Brindisi", "TO54584THFX", $salary, "2023-01-27");

  // Boss
  $boss = new Boss("Boss", "Dimitry", "1990-06-01", "Castello Ammare", "BD8473fbri394834GHG", 1700, 200);



// echo $salary -> getHtml();
// echo "<br><br><br><br>";
echo $employee -> getHtml();
echo "<br><br><br><br>";
echo $boss -> getHtml();

?>