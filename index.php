<?php
require_once 'classes/inputvalidator.class.php';
$iv = new inputvalidator;
$s = '';
echo $iv->isWebAddress($s) ? 'is a web address<br />' : 'is not a web address<br />';
$s = 'http://www.bbc.co.uk';
echo $iv->isWebAddress($s) ? 'is a web address<br />' : 'is not a web address<br />';
$s = '';
echo $iv->isEmailAddress($s) ? 'is an e-mail address<br />' : 'is not an email address<br />';
$s = 'johnnie@example.com';
echo $iv->isEmailAddress($s) ? 'is an e-mail address<br />' : 'is not an email address<br />';
$s = '';
echo $iv->isStrongPassword($s) ? 'is a strong password<br />' : 'is not a strong password<br />';
$s = '5JySDX9tib';
echo $iv->isStrongPassword($s) ? 'is a strong password<br />' : 'is not a strong password<br />';
?>