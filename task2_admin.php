<?php
require "db.php";

$stmt = $pdo->query("SELECT * FROM registrations ORDER BY id DESC");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registrations</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
<div class="card">
<h2>Admin Registration List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Customer ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Status</th>
    <th>Date</th>
</tr>

<?php foreach ($rows as $row): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['customer_id']; ?></td>
    <td><?= htmlspecialchars($row['name']); ?></td>
    <td><?= htmlspecialchars($row['email']); ?></td>
    <td><?= htmlspecialchars($row['mobile']); ?></td>
    <td><?= htmlspecialchars($row['status']); ?></td>
    <td><?= $row['created_at']; ?></td>
</tr>
<?php endforeach; ?>

<?php if (count($rows) == 0): ?>
<tr><td colspan="7">No registration records found.</td></tr>
<?php endif; ?>
</table>

<br>
<a class="btn" href="task2_register.php">Back</a>
</div>
</div>
</body>
</html>
