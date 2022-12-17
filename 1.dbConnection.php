<?php
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "root123";
$db = "enitest";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!$con){
    die ("Can NOT connect to MySQL");
}
?>