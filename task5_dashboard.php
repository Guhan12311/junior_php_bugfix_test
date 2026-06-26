<?php
require "db.php";

$stmt = $pdo->query("
    SELECT 
        c.id,
        c.name,
        c.email,
        c.created_at,
        b.booking_date,
        b.status AS booking_status,
        p.amount,
        p.status AS payment_status,
        k.status AS kyc_status
    FROM customers c
    LEFT JOIN bookings b ON c.id = b.customer_id
    LEFT JOIN payments p ON c.id = p.customer_id
    LEFT JOIN kyc k ON c.id = k.customer_id
    ORDER BY c.id DESC
    LIMIT 50
");

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Task 5 - Dashboard</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container"><div class="card">
<h2>Task 5: Optimized Admin Dashboard Output</h2>
<p><span class="badge">Fix:</span> Avoid SELECT *, add indexes, select needed columns only and use LIMIT.</p>

<table>
<tr>
<th>ID</th>
<th>Customer</th>
<th>Email</th>
<th>Booking Date</th>
<th>Booking Status</th>
<th>Amount</th>
<th>Payment</th>
<th>KYC</th>
</tr>

<?php foreach ($rows as $row): ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['name']); ?></td>
<td><?= htmlspecialchars($row['email']); ?></td>
<td><?= htmlspecialchars($row['booking_date'] ?? '-'); ?></td>
<td><?= htmlspecialchars($row['booking_status'] ?? '-'); ?></td>
<td><?= htmlspecialchars($row['amount'] ?? '-'); ?></td>
<td><?= htmlspecialchars($row['payment_status'] ?? '-'); ?></td>
<td><?= htmlspecialchars($row['kyc_status'] ?? '-'); ?></td>
</tr>
<?php endforeach; ?>
</table>

<br>
<a class="btn btn-light" href="index.php">Back</a>
</div></div>
</body>
</html>
