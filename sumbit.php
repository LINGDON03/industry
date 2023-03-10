<?php
include("header.php");

$detail = json_encode($_POST["detail"], true);
$sql = 'INSERT INTO orders (detail) VALUES (:detail);';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':detail', $detail);
$stmt->execute();
$sql = 'SELECT LAST_INSERT_ID();';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]["LAST_INSERT_ID()"];
echo $results;
?>