<?php
use app\Classes\LuxuryApartment;
use app\Classes\Owner;
use app\Classes\StandardApartment;
include "autoloader.php";

$standardApartment = new StandardApartment("501",1800,2);
$luxuryApartment = new LuxuryApartment("502",3000,3,["Swimming Pool,Gym,Parking"]);

$standardApartment->setBalcony(true);
$standardApartment->calculateRent();

$owner1 = new Owner("Fahmida",$standardApartment);
$owner2 = new Owner("Rahat",$luxuryApartment);

echo "Standard Apartment Details: \n";
$standardApartment->displayApartmentDetails();
echo PHP_EOL;
echo "Luxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo"Amenities: ".$luxuryApartment->getAmenities()."\n";

echo "\nOwner Details:\n";
$owner1->DisplayOwnerDetails();
$owner2->DisplayOwnerDetails();
