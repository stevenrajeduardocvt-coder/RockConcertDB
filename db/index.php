<?php
require 'dbconfig.php';

$stmt = $pdo->query("SELECT * FROM ConcertAttendances ORDER BY venue_city ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock Concert Dashboard</title>
    <style>
        table { width: 80%; border-collapse: collapse; margin: 20px 0; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #333; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Rock Concert Attendance Table</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Concert</th>
                <th>Band</th>
                <th>City</th>
                <th>Price</th>
                <th>Attendance</th>
                <th>Sold Out</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $stmt->fetch()): ?>
            <tr>
                <td><?php echo $row['attendance_id']; ?></td>
                <td><?php echo htmlspecialchars($row['concert_name']); ?></td>
                <td><?php echo htmlspecialchars($row['band_name']); ?></td>
                <td><?php echo htmlspecialchars($row['venue_city']); ?></td>
                <td><?php echo number_format($row['ticket_price'], 2); ?></td>
                <td><?php echo number_format($row['attendee_count']); ?></td>
                <td><?php echo $row['is_sold_out'] ? 'YES' : 'NO'; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>