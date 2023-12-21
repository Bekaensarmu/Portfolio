
<?php

class Dog {
  public $name;
  public $age;
  public $color;
}

$roger = new Dog();

$roger->name = 'Bob';
$roger->age = 10;
$roger->color = 'Yellow';


var_dump($roger);
echo "</br>\n";


class Bob {
    public function bark() {
      echo 'woof!';
    }
  }

  $roger = new Bob();

$roger->bark();
echo "</br>\n";

class Dikcheni {
    public $name;
  
    public function bark() {
      echo $this->name . ' barked!';
    }
  }
  $roger = new Dikcheni();
$roger->name = 'Roger';
$roger->bark();
echo "</br>\n";

class Occ {
    public $name;
  
      public function __construct($name) {
          $this->name = $name;
    }
  
    public function bark() {
      echo $this->name . ' FRNd!';
    }
  }
  
  $roger = new Occ('HI');
  $roger->bark();
  

  class Employee {
    public $firstName;
    public $lastName;
    public $role;
    public $companyName;
    public $experianceInYear;

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function calculateSalary() {
        echo "<br>".(($this->experianceInYear)*1000)."<br>";
    }

   
   
  }
  class TechnicalEmployees extends Employee {
    public $technology;
  }

  class managerial extends Employee {
    public $managerialCertificate;

    public function calculateSalary(){
        echo "<br>". (($this->experianceInYear))."<br>";

    }
  }
$dik = new managerial();
$dik->$managerialCertificate = "PM Certified";
$dik->firstName = "Dikcheni";
$dik->lirstName = "Enrmu";
$dik->role = "Managerial";


?>

