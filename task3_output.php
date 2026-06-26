<?php
require "db.php";
$stmt = $pdo->query("
SELECT p.*, c.name, c.email 
FROM payments p 
LEFT JOIN customers c ON c.id = p.customer_id 
ORDER BY p.id DESC
");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment Output</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container"><div class="card">
<h2>Payment Output</h2>
<table>
<tr>
<th>ID</th><th>Customer</th><th>Payment ID</th><th>Amount</th><th>Status</th><th>Date</th>
</tr>
<?php foreach($rows as $row): ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['name'] ?? '-'); ?></td>
<td><?= htmlspecialchars($row['razorpay_payment_id'] ?? '-'); ?></td>
<td><?= $row['amount']; ?></td>
<td><?= htmlspecialchars($row['status']); ?></td>
<td><?= $row['created_at']; ?></td>
</tr>
<?php endforeach; ?>
</table>
<br><a class="btn" href="task3_payment.php">Back</a>
</div></div>
</body>
</html>
