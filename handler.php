<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->fields(['phone'])->areRequired()->maxLength(20);
$validator->field('email')->isEmail();
$validator->field('arrivalDate');
$validator->field('leaveDate');
$validator->field('guests');
$validator->field('message')->maxLength(600);




// $pp->sendEmailTo('info@puntagreen.net'); // ← Your email here
$pp->sendEmailTo('franciscovsk@gmail.com');

echo $pp->process($_POST);