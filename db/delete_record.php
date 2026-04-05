<?php
require 'dbconfig.php';

// ID of the record to be removed
$id_to_delete = 1;

// SQL Statement with positional placeholder
$sql = "DELETE FROM ConcertAttendances WHERE attendance_id = ?";
$stmt = $pdo->prepare($sql);

// Executing the deletion
if ($stmt->execute([$id_to_delete])) {
    echo "Record with ID $id_to_delete has been deleted.";
}
?>