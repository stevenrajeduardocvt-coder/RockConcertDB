<?php
require 'dbconfig.php';

$concert = "Metal Mayhem";
$band = "Steel Fang";
$city = "Bacolod";
$price = 1500.00;

$sql = "INSERT INTO ConcertAttendances (concert_name, band_name, venue_city, ticket_price) 
        VALUES (:concert, :band, :city, :price)";

$stmt = $pdo->prepare($sql);

$executeQuery = $stmt->execute([
    ':concert' => $concert,
    ':band' => $band,
    ':city' => $city,
    ':price' => $price
]);

if ($executeQuery) {
    echo "New concert record added successfully!";
}
?>