<?php
include("header.php");

$id = $_GET["id"];
$sql = 'SELECT * FROM orders WHERE id = :id;';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
echo count(($stmt->fetchAll(PDO::FETCH_ASSOC)));
?>