<?php
namespace app\Classes;
class Owner{
    private $name;
    private $apartment;
   public function __construct($name, Apartment $apartment){
    $this->name=$name;
    $this->apartment=$apartment;
   } 
   public function DisplayOwnerDetails(){
    echo "Owner Name: ".$this->name. "\n";
    echo "Apartment Number: ".$this->apartment->getApartmentNumber()."\n";
   }
}             