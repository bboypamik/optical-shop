<?php
$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";


$conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);