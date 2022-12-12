<?php

require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Employee.php';
require_once __DIR__ . '/Models/PremiumUser.php';
require_once __DIR__ . '/Models/Membership.php';

$ugo = new User('Ugo', 'De Ughi', 70);

//var_dump($ugo);
var_dump($ugo->getDiscount());
$ugo->setAge(30);

var_dump($ugo->get_full_name());
var_dump($ugo->getDiscount());
$giuseppe = new Employee(2,'Giuseppe','Verdi', 70);

// var_dump($giuseppe->get_full_name());

 var_dump($giuseppe->getDiscount());


 $martina = new PremiumUser('Martina','De Martini', 20, new Membership('Premium',100, '25/12/2021'));

 var_dump($martina);
 var_dump($martina->membership->getStartDate());
 var_dump($martina->membership->getMembershipDetails());