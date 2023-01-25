<?php
require_once 'Employee.php';
require_once 'Manager.php';
require_once 'Intern.php';


echo 'pirma uzduotis';

$intern = new Intern('Juozas', 500);
$manager = new Manager("Martynas",  700, overtimeHours: 1);
echo $intern . PHP_EOL . $manager;

echo PHP_EOL;
$salary = $intern->calculateSalary();
var_dump($salary);

$salary = $manager->calculateSalary();
var_dump($salary);


echo PHP_EOL;
$Employee = new Employee('Morta', 600);
$description = $Employee->getTypeDescription();
var_dump($description);

echo $Employee;

echo PHP_EOL;
$Employee2 = clone $Employee;
var_dump($Employee2);

echo 'antra uzduotis';


//1. Employee.php yra base klasė. Employee class reikalavimai:
//
//- klase turi turėti constantą EMPLOYEE_TYPE su verte 1. [0.25 balo]
//- klasė turi turėti 4 skirtintas propertis: [0.5 balo]
//-- public name
//-- protected salary
//-- protected experience
//-- private id.
//- klasės konstruktorius turi priimti name ir salary. ir Id verte konstruktoriuje turi būti nustatyta rand():
//https://www.php.net/manual/en/function.rand.php [0.5 balo]
//
//- Getter ir Setter turi būti sukurtas experience properčiui. [0.25 balo]
//- Getter methodas turi būti sukurtas id properčiui [0.25 balo]
//- Metodas public calculateSalary() turi grąžinti salary reikšmę [0.5 balo]
//- Magic methodas toString turi grąžinti string: "Darbuotojas {id}: {name} - {salary} EUR" [0.25 balo]
//- Magic methodas clone turi pakeisti id verte į 0 [0.25 balo]
//- static methodas getTypeDescription() gražina string "Darbuotojo tipas {constantos verte}" [0.5 balo]
//
//
//Intern.php turi extendinti Employee klasę ir viskas: [0.25 balo]
//
//Manager.php turi extendinti Employee klasę: [1 balas]
//- constantos EMPLOYEE_TYPE reksme turi būti 2.
//- papildomas propertis owertimeHours
//- construktorius turi priimti dar papildomai owertimeHours, nepamirškite extendinti ir parent construktoriaus;
//- Perrašykite calculateSalary() funkciją. Suskaičiuokite atlyginima: salary + (salary / 40 *  owertimeHours) * 2;
//
//
//Sukurkite Intern ir Manager objektus.    [0.5 balo]
//Išspausdinkite tiesiogiai abu objektus
//Išveskite jų atlyginimus.
//Išveskite getTypeDescription;
//Paklonuokite intern sukurtą objektą
//
//
