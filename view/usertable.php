<?php
// Require om de database verbinding $pdo te importeren.
require "../config/db.conf.php";
require "../database/connection.php";

// SQL query om alle gebruikers op te halen en te ordenen op achternaam
$sql = 'SELECT * FROM users ORDER BY last_name';
$stmt = $pdo->query($sql);

// Haal alle resultaten op
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebruikerslijst</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Gebruikerslijst</h1>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Geboortedatum</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['birth_date']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
