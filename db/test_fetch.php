<?php
require 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM ConcertAttendances ORDER BY concert_date DESC LIMIT 1");
$stmt->execute();

$latest_concert = $stmt->fetch();

echo "<pre>";
print_r($latest_concert);
echo "</pre>";
?>