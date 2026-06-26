<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 3 - Payment Status</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
<div class="card">
<h2>Task 3: Payment Status Not Updating</h2>
<p><span class="badge">Bug:</span> Backend stores paid, but database enum only accepts pending, success, failed.</p>

<form method="post" action="task3_broken_update.php">
    <input type="number" name="customer_id" placeholder="Customer ID eg: 1" value="1" required>
    <input type="text" name="razorpay_payment_id" placeholder="Razorpay Payment ID" value="pay_test_123" required>
    <select name="payment_status">
        <option value="success">success</option>
        <option value="failed">failed</option>
        <option value="pending">pending</option>
    </select>
    <button>Submit Broken Code</button>
</form>



<a class="btn" href="task3_output.php">View Payment Output</a>
<a class="btn btn-light" href="index.php">Back</a>
</div>
</div>
</body>
</html>
