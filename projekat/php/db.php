<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "bazakalendar";

$mysqli = new mysqli($host, $user, $password, $dbname, "3306");

if($mysqli -> connect_error){
    die('Error: ('.$this->mysqli->connect_errno . ')' .$this->mysqli->connect_error);

}


?>