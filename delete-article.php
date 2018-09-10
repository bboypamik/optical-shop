<?php

$id = $_GET["id"];

$sql = "DELETE FROM articles WHERE id =$id";

$statement = $conn->prepare($sql);
$statement->execute();
header('Location: /articles');
?>