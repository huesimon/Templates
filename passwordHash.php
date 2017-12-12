<?php
/**
 * Created by PhpStorm.
 * User: Simon_
 * Date: 12-12-2017
 * Time: 12:28
 */



$password = "lamePassword";

$hashedPassword = hash('whirlpool',  $password);

//http://php.net/manual/en/function.hash.php




echo "Your password is = " . $password . "<br> hashed password = " . $hashedPassword;