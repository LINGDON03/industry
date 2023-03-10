<?php
include("header.php");

$sql = 'DELETE FROM orders;';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$sql = 'ALTER TABLE orders AUTO_INCREMENT = 1;';
$stmt = $dbh->prepare($sql);
$stmt->execute();
?>