<?php

$host= "localhost";
$database ="contacts_app";
$user = "root";
$password= "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);   
}catch(PDOException $error){
    die("PDO Connection Error: " . $error->getMessage());
}