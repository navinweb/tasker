<?php

require 'vendor/autoload.php';

use Business\Person;
use Business\Staff;
use Business\Business;

$dude = new Person('Dude Lebowski');
$staff = new Staff([$dude]);
$mafia = new Business($staff);
$mafia->hire(new Person('John Doe'));

var_dump($mafia->getStaffMembers());
