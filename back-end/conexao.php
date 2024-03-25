<?php

$hostName = 'localhost';
$user = 'root';
$password = '';
$dataBase = 'login';


$mySQLi = new Mysqli($hostName, $user, $password, $dataBase);

if ($mySQLi->connect_error) {
   echo 'Error connecting to the database';
} else {
   echo 'Connection sucessful';
}


?>