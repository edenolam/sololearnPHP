
<?php
require('Person.php');
require('Animal.php');
require('Dog.php');
require('Cat.php');






$bob = new Person("Bob", 42);
//
//$bob->setName("bob");
//$bob->setAge(23);

echo "<p>".$bob->getName()."<p>";
echo "<p>".$bob->getAge()."<p>";
echo "<p>".$bob->speak()."<p>";


$max = new Person("Max", 65);
//
//$max->setName('Max');
//$max->setAge(23);

echo "<p>".$max->getName()."<p>";
echo "<p>".$max->getAge()."<p>";
echo "<p>".$max->speak()."<p>";







$d1 = new Dog("d1");

echo "<p>".$d1->display()."<p>";

$d2 = new Dog("d2");
$d2->legs = 2;

echo "<p>".$d2->display()."<p>";

$d = new Dog("d");
$d->hi();

$myObj1 = new Dog("obj1");
$myObj1->makeSound();

$myObj2 = new Cat("obj2");
$myObj2->makeSound();



// Write your code below:
echo "Code" . "cademy";

echo "\nMy name is:" . " Aisle Nevertell";

echo "\n" . "tur" . "duck" . "en";
