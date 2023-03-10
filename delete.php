<?php
include("header.php");

$id = $_POST["id"];
$sql = 'DELETE FROM orders WHERE id = :id;';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
?>