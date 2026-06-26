<?php
require "db.php";
$stmt = $pdo->query("SELECT * FROM kyc_documents ORDER BY id DESC");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>KYC Output</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container"><div class="card">
<h2>KYC Uploaded Documents</h2>
<table>
<tr>
<th>ID</th><th>Customer ID</th><th>File</th><th>Status</th><th>Date</th>
</tr>
<?php foreach($rows as $row): ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['customer_id']; ?></td>
<td>
    <a href="<?= htmlspecialchars($row['id_proof']); ?>" target="_blank">
        View File
    </a>
</td>
<td><?= htmlspecialchars($row['status']); ?></td>
<td><?= $row['created_at']; ?></td>
</tr>
<?php endforeach; ?>

<?php if(count($rows)==0): ?>
<tr><td colspan="5">No KYC records found.</td></tr>
<?php endif; ?>
</table>
<br><a class="btn" href="task4_kyc.php">Back</a>
</div></div>
</body>
</html>
