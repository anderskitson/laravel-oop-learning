<?php

use CanadaDrives\Users\Person;
use CanadaDrives\Staff;
use CanadaDrives\Business;


require 'vendor/autoload.php';

require 'src/Users/Person.php';
require 'src/Business.php';
require 'src/Staff.php';

$anders = new Person('Anders Kitson');

$staff = new Staff([$anders]);

$canadaDrives = new Business($staff);

$canadaDrives->hire(new Person('John Buckweat'));

var_dump($canadaDrives->getStaffMembers());