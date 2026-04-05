<?php
require 'dbconfig.php';

$new_attendance = 9500;
$target_concert = "Static Pulse Tour";

$sql = "UPDATE ConcertAttendances SET attendee_count = :count WHERE concert_name = :name";
$stmt = $pdo->prepare($sql);

if ($stmt->execute([':count' => $new_attendance, ':name' => $target_concert])) {
    echo "Successfully updated attendance for $target_concert!";
}
?>