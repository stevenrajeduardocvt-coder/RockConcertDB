<?php
require 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM ConcertAttendances WHERE ticket_price > 1500");
$stmt->execute();

$all_concerts = $stmt->fetchAll();

echo "<pre>";
print_r($all_concerts);
echo "</pre>";
?>