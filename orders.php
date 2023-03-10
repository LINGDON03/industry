<?php
include("header.php");

$sql = 'SELECT * FROM orders;';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results, true);
?>