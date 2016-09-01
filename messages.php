<?php

require 'vendor/autoload.php';

require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';

$anders = new CanadaDrives\Person('Anders Kitson');

$staff = new CanadaDrives\Staff([$anders]);

$canadaDrives = new CanadaDrives\Business($staff);

$canadaDrives->hire(new CanadaDrives\Person('John Buckweat'));

var_dump($canadaDrives->getStaffMembers());