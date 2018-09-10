<?php
$dbServername ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "optical_shop";


$conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);